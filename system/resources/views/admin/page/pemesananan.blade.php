@extends('admin.induk')

@section('content')

<h1 align="center">Data admin</h1><hr>
      <div align="center">
          <table  class="col-8 table align-center" border=1> 
                <thead style="text-align:center" class="thead-dark">
                      <tr>
                          <th>Id Pemesananan</th>
                          <th>Nama Pemesan</th>
                          <th>Nama Motor</th>
                          <th>Image Gambar</th>
                          <th>Total Tagihan</th>
                          <th>Tanggal Pemesanan</th>
                          <th>Aksi</th>
                      </tr>
                </thead>

                  @foreach($pemesanan as $dataPemesanan)
                  <tr>
                        <td>{{$dataPemesanan->idmotor}}</td>
                        <td>{{$dataPemesanan->namaMtr}}</td>
                        <td>{{$dataPemesanan->jenisMtr}}</td>
                        <td>{{$dataPemesanan->platMtr}}</td>
                        <td>{{$dataPemesanan->hargaMtr}}</td>
                        <td>{{$dataPemesanan->keteranganMtr}}</td>
                        <td><img src="{{asset('assets/motor/motor/' . $dataPemesanan->imgmtr)}}" height="50px" width="70px;" alt=""></td>
                        <td>{{$dataPemesanan->imgmtr}}</td>
                        <td style="text-align:center">
                              <div class="col-sm" style="padding-bottom:10px">
                                    <button  type="button" class="btn btn-outline-secondary"> 
                                                <a href="{{route('edit', ['id' => $dataPemesanan->idmotor])}}" class="text-dark">Edit</a>
                                    </button>                              
                              </div>
                              <div class="col-sm">                              
                                    <button type="button" class="btn btn-outline-secondary"> 
                                                <a href="{{route('delete', ['id' => $dataPemesanan->idmotor])}}" class="text-dark">Delete</a>
                                    </button>
                              </div>
                          
                        </td>
                  </tr>
                  @endforeach
          </table>
    </div>

    
 @endsection