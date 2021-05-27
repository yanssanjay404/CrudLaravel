@extends('layout.master')
@section('title','Data Siswa')
@section('content')

    <div class="col">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#input-siswa">
    Tambah Data
    </button>
    <!-- end button -->
    <form action="/siswa" method="GET" class="d-flex float-end">
        <input name="cari" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
      	<table class="table table-striped mt-4">
      		<tr>
      			<th>No</th>
      			<th>NIS</th>
      			<th>Nama Siswa</th>
      			<th>Jenis Kelamin</th>
      			<th>Tempat, Tanggal Lahir</th>
      			<th>Agama</th>
      			<th>Alamat</th>
            <th></th>
      		</tr>
          @foreach($siswa as $data)
      		<tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->nis}}</td>
            <td>{{$data->nama}}</td>
            <td>
                @if($data->jenis_kelamin == 'L')
                Laki-laki
                @else
                Perempuan
                @endif
            </td>
            <td>{{$data->tempat_lahir}}, {{$data->tanggal_lahir}}</td>
            <td>{{$data->agama}}</td>
            <td>{{$data->alamat}}</td>
            <td>
            <a href="/siswa/{{$data->id}}/edit"><button class="btn btn-warning">Edit</button></a>
            <a href="/siswa/{{$data->id}}/delete"><button class="btn btn-danger" onclick="return confirm('Beneran dihapus :( ?')">Delete</button></a>
            </td>
      		</tr>
          @endforeach
      	</table>
    </div>


<!-- Modal -->
<div class="modal fade" id="input-siswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form Input Siswa -->
        <form action="/siswa/create" method="POST">
        @csrf
            <div class="form-group">
                <label for="id-nis">NIS</label>
                <input class="form-control" type="number" name="nis" id="id-nis" required>
            </div>
            <div class="form-group">
                <label for="id-nama">Nama</label>
                <input class="form-control" type="text" name="nama" id="id-nama" required>
            </div>
            <div class="form-group">
                <label for="id-jk">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" id="id-jk">
                    <option>--Choose Your Gender--</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="id-tpt">Tempat Lahir</label>
                <input class="form-control" name =" tempat_lahir" type="text" id="id-tpt" required>
            </div>
            <div class="form-group">
                <label for="id-tgl">Tanggal Lahir</label>
                <input class="form-control" name="tanggal_lahir" type="date" id="id-tgl" required>
            </div>
            <div class="form-group">
                <label for="">Agama</label>
                <input class="form-control" name="agama" type="text" required>
            </div>
            <div class="form-group">
                <label for="id-almt">Alamat</label>
                <textarea class="form-control" name="alamat" id="id-almt" cols="30" rows="5" required></textarea>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <!-- end form -->
      </div>
    </div>
  </div>
</div>
<!-- end modal -->
@endsection
