<form action="{{url('mahasiswa/update')}}" method="post">
	<input type="hidden" name="id" value="{{$mahasiswa->id}}">
	Nama depan		: <input type="text" name="first_name" value="{{$mahasiswa->first_name}}">  <br>
	Nama belakang	: <input type="text" name="last_name" value="{{$mahasiswa->last_name}}" > <br>
	Email 			: <input type="email" name="email" value="{{$mahasiswa->email}}"> <br>
	Password 		: <input type="password" name="password" value="{{$mahasiswa->password}}" > <br>
	Jenis kelamin	: <input type="radio" name="jenis_kelamin" value="L" {{($mahasiswa->jenis_kelamin == 'L') ? 'checked' : ''}} > Laki - Laki <br>
					 <input type="radio" name="jenis_kelamin" value="P" {{($mahasiswa->jenis_kelamin == 'P') ? 'checked' : ''}}  >  Perempuan <br>
	Alamat			: <input type="textarea" name="alamat" value="{{$mahasiswa->alamat}}"> <br>
	Tanggal lahir	: <input type="date" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}" >
	Agama			: <input type="text" name="agama_id" value="{{$mahasiswa->agama_id}}" >


	{{csrf_field()}}

	<button type="submit" >UPDATE</button>
</form>


