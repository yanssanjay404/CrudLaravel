@extends('layout.master')
@section('title','Data Siswa')
@section('content')
<div class="container mt-3 p-4 bg-white align-content-center">
<h1>Edit Data Siswa</h1>
<form action="/siswa/{{$siswa->id}}/update" method="POST">
        @csrf
            <div class="form-group">
                <label for="id-nis">NIS</label>
                <input class="form-control" type="number" name="nis" id="id-nis" value ="{{$siswa->nis}}" required>
            </div>
            <div class="form-group">
                <label for="id-nama">Nama</label>
                <input class="form-control" type="text" name="nama" id="id-nama" value ="{{$siswa->nama}}" required>
            </div>
            <div class="form-group">
                <label for="id-jk">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" id="id-jk">
                    <option>--Choose Your Gender--</option>
                    <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                    <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="id-tpt">Tempat Lahir</label>
                <input class="form-control" name ="tempat_lahir" type="text" id="id-tpt" value ="{{$siswa->tempat_lahir}}" required>
            </div>
            <div class="form-group">
                <label for="id-tgl">Tanggal Lahir</label>
                <input class="form-control" name="tanggal_lahir" type="date" id="id-tgl" value ="{{$siswa->tanggal_lahir}}" required>
            </div>
            <div class="form-group">
                <label for="">Agama</label>
                <input class="form-control" name="agama" type="text" value ="{{$siswa->agama}}" required>
            </div>
            <div class="form-group">
                <label for="id-almt">Alamat</label>
                <textarea class="form-control" name="alamat" id="id-almt" cols="30" rows="5" required>{{$siswa->alamat}}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary float-end">Update</button>
            </div>
        </form>

</div>
@endsection
