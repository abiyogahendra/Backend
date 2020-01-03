@extends('admin.induk')

@section('content')

<h1 align="center">Data admin</h1><hr>
      <div align="center">
          <table  class="col-8 table align-center" border=1> 
                <thead style="text-align:center" class="thead-dark">
                      <tr>
                          <th>Id</th>
                          <th>Nama</th>
                          <th>Jenis</th>
                          <th>Plat</th>
                          <th>Harga</th>
                          <th>Keterangan</th>
                          <th>Gambar</th>
                          <th>Nama Gambar</th>
                          <th>Aksi</th>
                      </tr>
                </thead>

                  @foreach($data as $dataPromo)
                  <tr>
                        <td>{{$dataPromo->idmotor}}</td>
                        <td>{{$dataPromo->namaMtr}}</td>
                        <td>{{$dataPromo->jenisMtr}}</td>
                        <td>{{$dataPromo->platMtr}}</td>
                        <td>{{$dataPromo->hargaMtr}}</td>
                        <td>{{$dataPromo->keteranganMtr}}</td>
                        <td><img src="{{asset('assets/motor/motor/' . $dataPromo->imgmtr)}}" height="50px" width="70px;" alt=""></td>
                        <td>{{$dataPromo->imgmtr}}</td>
                        <td style="text-align:center">
                              <div class="col-sm" style="padding-bottom:10px">
                                    <button  type="button" class="btn btn-outline-secondary"> 
                                                <a href="{{route('edit', ['id' => $dataPromo->idmotor])}}" class="text-dark">Edit</a>
                                    </button>                              
                              </div>
                              <div class="col-sm">                              
                                    <button type="button" class="btn btn-outline-secondary"> 
                                                <a href="{{route('delete', ['id' => $dataPromo->idmotor])}}" class="text-dark">Delete</a>
                                    </button>
                              </div>
                          
                        </td>
                  </tr>
                  @endforeach
          </table>
    </div>

    
 @endsection