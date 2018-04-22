<br>
	<h3><a href="{{url('mahasiswa/create')}}">Add Mahasiswa</a></h3>

		@foreach($mahasiswa as $row)
		- <b>No</b> 			: {{$row->id}}
		- <b> Nama depan</b> 	: {{$row->first_name}}
		- <b>Nama belakang</b>	: {{$row->last_name}}
		- <b>Email 		</b>	: {{$row->email}}
		- <b>Password</b> 		: {{$row->password}}
		- <b>Jenis kelamin</b>	: {{$row->jenis_kelamin}}
		- <b>Alamat</b> 		: {{$row->alamat}}
		- <b>Tanggal lahir</b>	: {{$row->tanggal_lahir}}
		- <b>Agama</b> 			: {{$row->agama_id}}


		<br>
		- <a href="{{url('mahasiswa/show/'.$row->id)}}">Show</a>
		- <a href="{{url('mahasiswa/edit/'.$row->id)}}">Edit</a>
		- <a href="{{url('mahasiswa/hapus/'.$row->id)}}">Hapus</a>
		<br>

		@endforeach

