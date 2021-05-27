<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa'; //karena tabel kita tidak dalam bentuk jamak yaitu'siswas', maka dari itu harus menggunakan ini

    //untuk mengatasi error mass assigment karena proses input create all secara langsung, tanpa dijabarkan per satu field
    protected $fillable = ['nis','nama','jenis_kelamin',
    'tempat_lahir','tanggal_lahir','agama','alamat'];
}
