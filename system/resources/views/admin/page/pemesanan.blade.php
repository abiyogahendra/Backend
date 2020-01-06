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
                        <td>{{$dataPemesanan->id_pemesanan}}</td>
                        <td>{{$dataPemesanan->pelanggan}}</td>
                        <td>{{$dataPemesanan->motor}}</td>
                        <td>Gambar Motor</td>
                        <td>{{$dataPemesanan->total}}</td>
                        <td>{{$dataPemesanan->created_at}}</td> 
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