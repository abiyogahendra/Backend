@extends('admin.induk')

@section('content')

<h1 align="center">Data onderdil</h1><hr>
      <a href="{{route('tambah_onderdil')}}"><div class="container" style="padding-bottom:30px"><button type="button" class="btn btn-dark btn-lg" >Tambah Penawaran</button></div></a>
      <div align="center">
          <table  class="col-8 table align-center" border=1> 
                <thead style="text-align:center" class="thead-dark">
                      <tr>
                          <th>Id Onderdil</th>
                          <th>Harga Onderdil</th>
                          <th>Nama Onderdil</th>
                          <th>Gambar Onderdil</th>
                          <th>Updated at</th>
                          <th>Created at</th>
                          <th>Action</th>
                      </tr>
                </thead>

                  @foreach($data as $dataOnderdil)
                  <tr>
                        <td style="text-align:center">{{$dataOnderdil->idOnderdil}}</td>
                        <td>{{$dataOnderdil->hargaOnderdil}}</td>
                        <td>{{$dataOnderdil->namaOnderdil}}</td>
                        <td><img class="text-center" src="{{asset('assets/Onderdil/Onderdil/' . $dataOnderdil->imgOnderdil)}}" height="50px" width="70px;" alt="data Image Onderdil"></td>
                        <td>{{$dataOnderdil->updated_at}}</td>
                        <td>{{$dataOnderdil->created_at}}</td>                       
                        <td style="text-align:center">
                              <div class="col-sm" style="padding-bottom:10px">
                                    <button  type="button" class="btn btn-outline-secondary"> 
                                                <a href="{{route('edit_onderdil', ['id' => $dataOnderdil->idOnderdil])}}" class="text-dark">Edit</a>
                                    </button>                              
                              </div>
                              <div class="col-sm">                              
                                    <button type="button" class="btn btn-outline-secondary"> 
                                                <a href="{{route('hapus_onderdil', ['id' => $dataOnderdil->idOnderdil])}}" class="text-dark">Delete</a>
                                    </button>
                              </div>
                          
                        </td>
                  </tr>
                  @endforeach
          </table>
    </div>

    
 @endsection