@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Makul</div>

                <div class="card-body">
                    <form action ="{{ route ('simpan.makul') }}" method="post">
                    @csrf
                        <div class="form-row">
                            <div class="col">
                                <label for="">Kode Makul</label>
                                <input type="number" name ="kd_makul" class="form-control" placeholder="tambahkan Npm Anda">
                            </div>
                            <div class="col">
                                <label for="">Nama Makul</label>
                                <input type="text" name ="nama_makul" class="form-control" placeholder="tambahkan Tanggal Lahir Anda">
                            </div>
                            <div class="col">
                                <label for="">Sks</label>
                                <input type="number" name ="sks" class="form-control" placeholder="tambahkan Tempat lahir Anda">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="form-group">
                    <div class="form-row float-right">
                        <div class="col">
                            <button type="submit" class="btn-md btn-primary">Simpan</button>
                            <a href="{{route ('makul') }}" class="btn btn-md btn-danger">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection