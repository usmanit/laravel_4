<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model 
{
    use SoftDeletes;

    protected $table = 'mahasiswa';

    protected $fillable = ['first_name','last_name', 'email', 'password','jenis_kelamin','alamat','tanggal_lahir','agama_id'];

    protected $dates =['deleted_at'];
}
