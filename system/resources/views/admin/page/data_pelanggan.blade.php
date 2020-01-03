@extends('admin.induk')

@section('content')

<h1 align="center">Data admin</h1><hr>
      <div align="center">
          <table  class="col-8 table align-center" border=1> 
                <thead style="text-align:center" class="thead-dark">
                      <tr>
                          <th>Id</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Updated_at</th>
                          <th>Created_at</th>
                          <th>Action</th>
                      </tr>
                </thead>

                  @foreach($data as $dataPelanggan)
                  <tr>
                        <td>{{$dataPelanggan->id_pelanggan}}</td>
                        <td>{{$dataPelanggan->nama}}</td>
                        <td>{{$dataPelanggan->email}}</td>
                        <td>{{$dataPelanggan->updated_at}}</td>
                        <td>{{$dataPelanggan->created_at}}4</td>                       
                        <td style="text-align:center">
                              <div class="col-sm">                              
                                    <button type="button" class="btn btn-outline-secondary"> 
                                                <a href="#" class="text-dark">Delete</a>
                                    </button>
                              </div>
                          
                        </td>
                  </tr>
                  @endforeach
          </table>
    </div>

    
 @endsection