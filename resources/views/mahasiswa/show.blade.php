@extends('admin.layouts.app')

@section('content')
<div class="box-body">

  <form action="{{url('mahasiswa/show')}}" method="post">

     <div class="form-group">
         <label class="col-sm-2 control-label">Nama depan</label>
            <div class="col-sm-10">
                <input class="col-sm-10" type="text" name="first_name" value="{{$mahasiswa->first_name}}" disabled >
            </div>
    </div><br><br>

   <div class="form-group">
          <label class="col-sm-2 control-label">Nama belakang</label>
          <div class="col-sm-10">
              <input class="col-sm-10" type="text" name="last_name" value="{{$mahasiswa->last_name}}"  disabled > <br>
          </div>
    </div><br><br>
   
   <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input class="col-sm-10" type="email" name="email" value="{{$mahasiswa->email}}" disabled > <br>
            </div>
    </div><br><br>

    <div class="form-group">
          <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input class="col-sm-10" type="password" name="password" value="{{$mahasiswa->password}}" disabled > <br>
            </div>
   </div><br><br>
    <div class="form-group">
          <label class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
               <input class="col-sm-10" type="textarea" name="alamat" value="{{$mahasiswa->alamat}}" disabled > <br>
          </div>
    </div><br><br>

    <div class="form-group">
          <label class="col-sm-2 control-label">Tanggal lahir</label>
            <div class="col-sm-10">
              <input class="col-sm-10" class="form-control" type="date" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}">
          </div>
    </div><br><br>

    <div class="form-group">
          <label class="col-sm-2 control-label">Agama</label>
            <div class="col-sm-10">
               <input class="col-sm-10" type="text" name="agama_id" value="{{$mahasiswa->agama_id}}" disabled  >
            </div>
    </div><br><br>

    <div class="form-group">
          <label class="col-sm-2 control-label">Jenia kelamin</label>
            <div class="col-sm-10">
              <input type="radio" name="jenis_kelamin" value="L" disabled {{($mahasiswa->jenis_kelamin == 'L') ? 'checked' : ''}} > Laki - Laki <br>
             <input type="radio" name="jenis_kelamin" value="P"  disabled {{($mahasiswa->jenis_kelamin == 'P') ? 'checked' : ''}}  >  Perempuan <br>
            </div>
    </div>
   
    {{csrf_field()}}
  </form>
</div>
@endsection

