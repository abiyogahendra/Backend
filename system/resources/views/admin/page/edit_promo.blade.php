@extends('admin.induk')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-10 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Edit Data Promo</h5>
                <form method="post" action=" ">
                    @csrf
                        <table class="col-7 table table-borderless"> 
                            <tr>
                                <td>ID Motor</td>
                                <td>:</td>
                                <td><input type="text" name="idmotor" value="{{$data->idmotor}}"/></td>
                            </tr>
                            <tr>
                                <td>Harga Promo</td>
                                <td>:</td>
                                <td><input type="text" name="hargaPromo" value="{{$data->hargaPromo}}"/></td>
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