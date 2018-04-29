
@extends('admin.layouts.app')

@section('content')


<div class="box box-info">
           
            <!-- form start -->
            <form class="form-horizontal" action="{{route('mahasiswa.store')}}" method="post">
              <div class="box-body">
              	<div class="form-group">
                  <label class="col-sm-2 control-label">Nama depan</label>

                  <div class="col-sm-10">
                    <input type="text" name="first_name" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama belakang</label>

                  <div class="col-sm-10">
                    <input type="text" name="last_name" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenia kelamin</label>

                  <div class="col-sm-10">
                    <input type="radio" name="jenis_kelamin" value="L" >Laki - Laki ||
                    <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                  </div>
                </div>
              	<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input class="form-control" type="textarea" name="alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tanggal lahir</label>

                  <div class="col-sm-10">
                    <input class="form-control" type="date" name="tanggal_lahir">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Agama</label>

                  <div class="col-sm-10">
                    <input class="form-control" type="text" name="agama_id">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
               <button type="submit" class="btn btn-info pull-right">GOL</button>
              </div>
              <!-- /.box-footer -->

              {{csrf_field()}}
            </form>
          </div>


@endsection

