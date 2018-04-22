<form action="{{url('mahasiswa/show')}}" method="post">

	Nama depan		: <input type="text" name="first_name" value="{{$mahasiswa->first_name}}" disabled >  <br>
	Nama belakang	: <input type="text" name="last_name" value="{{$mahasiswa->last_name}}"  disabled > <br>
	Email 			: <input type="email" name="email" value="{{$mahasiswa->email}}"> <br>
	Password 		: <input type="password" name="password" value="{{$mahasiswa->password}}" disabled > <br>
	Jenis kelamin	: <input type="radio" name="jenis_kelamin" value="L" disabled {{($mahasiswa->jenis_kelamin == 'L') ? 'checked' : ''}} > Laki - Laki <br>
					 <input type="radio" name="jenis_kelamin" value="P"  disabled {{($mahasiswa->jenis_kelamin == 'P') ? 'checked' : ''}}  >  Perempuan <br>
	Alamat			: <input type="textarea" name="alamat" value="{{$mahasiswa->alamat}}" disabled > <br>
	Tanggal lahir	: <input type="date" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}" disabled  >
	Agama			: <input type="text" name="agama_id" value="{{$mahasiswa->agama_id}}" disabled  >
	
</form>

