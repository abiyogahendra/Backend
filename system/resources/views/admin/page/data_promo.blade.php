@extends('admin.induk')

@section('content')

<h1 align="center">Data admin</h1><hr>
      <a href="{{route('tambah_promo')}}"><div class="container" style="padding-bottom:30px"><button type="button" class="btn btn-dark btn-lg" >Tambah Promo</button></div></a>
      <div align="center">
          <table  class="col-8 table align-center" border=1> 
                <thead style="text-align:center" class="thead-dark">
                      <tr>
                          <th>Id Promo</th>
                          <th>Id Motor</th>
                          <th>Nama Motor</th>
                          <th>Harga Awal</th>
                          <th>Harga Promo</th>
                          <th>Created At</th>
                          <th>Created at</th>
                          <th>Action</th>
                      </tr>
                </thead>

                  @foreach($data as $dataPromo)
                  <tr>
                        <td>{{$dataPromo->idPromo}}</td>
                        <td>{{$dataPromo->motor['idmotor']}}</td>
                        <td>{{$dataPromo->motor['namaMtr']}}</td>
                        <td>{{$dataPromo->motor['hargaMtr']}}</td>
                        <td>{{$dataPromo->hargaPromo}}</td>
                        <td>{{$dataPromo->updated_at}}</td>
                        <td>{{$dataPromo->created_at}}</td>                       
                        <td style="text-align:center">
                              <!-- <div class="col-sm" style="padding-bottom:10px">
                                    <button  type="button" class="btn btn-outline-secondary"> 
                                                <a href="{{route('edit_promo', ['id' => $dataPromo->idPromo])}}" class="text-dark">Edit</a>
                                    </button>                              
                              </div> -->
                              <div class="col-sm">                              
                                    <button type="button" class="btn btn-outline-secondary"> 
                                    <a href="{{route('promo_delete', ['id' => $dataPromo->idPromo])}}" class="text-dark">Delete</a>
                                    </button>
                              </div>
                          
                        </td>
                  </tr>
                  @endforeach
          </table>
    </div>

    
 @endsection