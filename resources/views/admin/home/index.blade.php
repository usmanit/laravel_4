@extends('admin.layouts.app')
@section('content')
<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <br>
              <h3>
                  <a style="color: #fff;" href="{{route('mahasiswa.create')}}"><button class="btn btn-primary">create</button></a>
              </h3>

                @foreach($mahasiswa as $row)
                - <b>No</b>       : {{$row->id}}
                - <b>Nama depan</b>   : {{$row->first_name}}
                - <b>Nama belakang</b>  : {{$row->last_name}}
                - <b>Email    </b>  : {{$row->email}}
                - <b>Password</b>     : {{$row->password}}
                - <b>Jenis kelamin</b>  : {{$row->jenis_kelamin}}
                - <b>Alamat</b>     : {{$row->alamat}}
                - <b>Tanggal lahir</b>  : {{$row->tanggal_lahir}}
                - <b>Agama</b>      : {{$row->agama_id}}


                <br>
                - <a href="{{url('mahasiswa/show/'.$row->id)}}">Show</a>
                - <a href="{{url('mahasiswa/edit/'.$row->id)}}">Edit</a>
                - <a href="{{url('mahasiswa/hapus/'.$row->id)}}">Hapus</a>
                <br>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
@endsection