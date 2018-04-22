<form action="{{url('mahasiswa/create')}}" method="post">
	Nama depan		: <input type="text" name="first_name"> <br>
	Nama belakang	: <input type="text" name="last_name"> <br>
	Email 			: <input type="email" name="email"> <br>
	Password 		: <input type="password" name="password"> <br>
	Jenis kelamin	: <input type="radio" name="jenis_kelamin" value="L" > Laki - Laki || 
					 <input type="radio" name="jenis_kelamin" value="P"> Perempuan <br>
	Alamat			: <input type="textarea" name="alamat"> <br>
	Tanggal lahir	: <input type="date" name="tanggal_lahir"> <br>
	Agama			: <input type="text" name="agama_id">


	{{csrf_field()}}

	<button type="submit" >GOL</button>
</form>