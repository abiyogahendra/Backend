@extends('admin.induk')

@section('content')

<h1 align="center">Data onderdil</h1><hr>
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
                        <td>{{$dataOnderdil->idOnderdil}}</td>
                        <td>{{$dataOnderdil->hargaOnderdil}}</td>
                        <td>{{$dataOnderdil->namaOnderdil}}</td>
                        <td>{{$dataOnderdil->imgOnderdil}}</td>
                        <td>{{$dataOnderdil->updated_at}}</td>
                        <td>{{$dataOnderdil->created_at}}</td>                       
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