@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Mahasiswa</div>

                <div class="card-body">
                    <form action ="#" method="post">
                    @csrf
                        <div class="form-row">
                            <div class="col">
                                <label for="">Id User</label>
                                <input type="text" name ="user_id" class="form-control" placeholder="tambahkan ID User Anda">
                            </div>
                            <div class="col">
                                <label for="">Tanggal Lahir</label>
                                <input type="Date" name ="tgl_lahir" class="form-control" placeholder="tambahkan Tanggal Lahir Anda">
                            </div>
                            <div class="col">
                                <label for="">Tempat Lahir</label>
                                <input type="text" name ="tempat_lahir" class="form-control" placeholder="tambahkan Tempat lahir Anda">
                            </div>
                            <div class="col">
                                <label for="">Telepon</label>
                                <input type="number" name ="telepon" class="form-control" placeholder="tambahkan No.Telp Anda">
                            </div>
                            <div class="col">
                                <label for="">Alamat</label>
                                <input type="text" name ="alamat" class="form-control" placeholder="tambahkan Alamat Anda">
                            </div>
                            <div class="col">
                                <label for="">Gender/Jenis Kelamin</label>
                                <input type="text" name ="gender" class="form-control" placeholder="tambahkan Jenis Kelamin Anda">
                            </div>
                            <div class="col">
                                <label for="">foto</label>
                                <input type="file" name ="foto" class="form-control" placeholder="....">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="form-group">
                    <div class="form-row float-right">
                        <div class="col">
                            <button type="submit" class="btn-md btn-primary">Simpan</button>
                            <a href="{{route ('mahasiswa.index') }}" class="btn btn-md btn-danger">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection