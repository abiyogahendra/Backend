@extends('admin.induk')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-10 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Tambahkan Onderdil</h5>
                <form method="post" action=" " enctype="multipart/form-data" >
                    @csrf
                    <table class="col-7 table table-borderless"> 
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><input type="text" name="namaOnderdil" "/></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td><input type="text" name="hargaOnderdil" /></td>
                            </tr>
                            <tr>
                                <td>Masukkan gambar</td>
                                <td>:</td>
                            <td><input type="file" name="imgOnderdil"/></td>
                            </tr>
                            <tr>
                            <td></td>
                            <td></td>
                            <td> <input type="submit" value="Tambah" class="btn-lg btn-primary" />  
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