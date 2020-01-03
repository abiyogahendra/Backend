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

                  @foreach($data as $dataMotor)
                  <tr>
                        <td>{{$dataMotor->idmotor}}</td>
                        <td>{{$dataMotor->namaMtr}}</td>
                        <td>{{$dataMotor->jenisMtr}}</td>
                        <td>{{$dataMotor->platMtr}}</td>
                        <td>{{$dataMotor->hargaMtr}}</td>
                        <td>{{$dataMotor->keteranganMtr}}</td>
                        <td><img src="{{asset('assets/motor/motor/' . $dataMotor->imgmtr)}}" height="50px" width="70px;" alt=""></td>
                        <td>{{$dataMotor->imgmtr}}</td>
                        <td style="text-align:center">
                              <div class="col-sm" style="padding-bottom:10px">
                                    <button  type="button" class="btn btn-outline-secondary"> 
                                                <a href="{{route('edit', ['id' => $dataMotor->idmotor])}}" class="text-dark">Edit</a>
                                    </button>                              
                              </div>
                              <div class="col-sm">                              
                                    <button type="button" class="btn btn-outline-secondary"> 
                                                <a href="{{route('delete', ['id' => $dataMotor->idmotor])}}" class="text-dark">Delete</a>
                                    </button>
                              </div>
                          
                        </td>
                  </tr>
                  @endforeach
          </table>
    </div>

    
 @endsection