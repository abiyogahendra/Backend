@extends('admin.induk')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-10 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Edit Data {{$data->idmotor}}</h5>
                <form method="post" action=" ">
                    @csrf
                        <table class="col-7 table table-borderless"> 
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><input type="text" name="namaMtr" value="{{$data->namaMtr}}"/></td>
                            </tr>
                            <tr>
                                <td>Jenis</td>
                                <td>:</td>
                                <td><input type="text" name="jenisMtr" value="{{$data->jenisMtr}}"/></td>
                            </tr>
                            <tr>
                                <td>Plat</td>
                                <td>:</td>
                                <td><input type="text" name="platMtr" value="{{$data->platMtr}}"/></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td><input type="text" name="hargaMtr" value="{{$data->hargaMtr}}"/></td>
                            </tr>
                            <tr>
                                <td>keterangan</td>
                                <td>:</td>
                                <td style="height:20">
                                    <textarea name="keteranganMtr" cols="30" rows="10" placeholder="{{$data->keteranganMtr}}"/></textarea>
                                
                                </td>
                            </tr>
                            <tr>
                            <td></td>
                            <td></td>
                            <td> <input type="submit" value="Edit" class="btn-lg btn-primary" />  
                                <input type="reset" value="Reset" class="btn-lg btn-danger" />
                            </td>
                            </tr>
                        </table>
                    <br>
                </form>
         </div>
        </div>
      </div>
    </div>
</div>

@endsection