
@extends('admin.layouts.app')

@section('content')


<div class="box box-info">
            
           <form action="{{url('mahasiswa/update')}}" method="post">
			       <input type="hidden" name="id" value="{{$mahasiswa->id}}">
              <div class="box-body">
              	<div class="form-group">
                  <label class="col-sm-2 control-label">Nama depan</label>
                  <div class="col-sm-10">
                    <input value="{{$mahasiswa->first_name}}" class="form-control" type="text" name="first_name">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama belakang</label>
                  <div class="col-sm-10">
                    <input value="{{$mahasiswa->last_name}}" class="form-control" type="text" name="last_name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input value="{{$mahasiswa->email}}" name="email" class="form-control" type="email">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input value="{{$mahasiswa->password}}" type="password" name="password" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input class="form-control" value="{{$mahasiswa->alamat}}"" type="textarea" name="alamat">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal lahir</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="date" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" name="agama_id" value="{{$mahasiswa->agama_id}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenia kelamin</label>
                  <div class="col-sm-10">
                    <input type="radio" name="jenis_kelamin" value="L"  {{($mahasiswa->jenis_kelamin == 'L') ? 'checked' : ''}} >Laki - Laki ||
                    <input type="radio" name="jenis_kelamin" value="P" {{($mahasiswa->jenis_kelamin == 'P') ? 'checked' : ''}}  > Perempuan
                  </div>
                </div>

             	

                

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
               <button type="submit" class="btn btn-info pull-right">UPDATE</button>
              </div>
              <!-- /.box-footer -->

              {{csrf_field()}}
            </form>
</div>


@endsection

