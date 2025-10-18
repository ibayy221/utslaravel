@extends('layouts.sidebar')

@section('title', 'Detail Mahasiswa')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0"><i class="fas fa-user me-2"></i>Detail Mahasiswa</h4>
    </div>
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <th width="30%">NIM</th>
                        <td width="70%">: {{ $mahasiswa->nim }}</td>
                    </tr>
                    <tr>
                        <th>Nama Lengkap</th>
                        <td>: {{ $mahasiswa->nama }}</td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>: {{ $mahasiswa->kelas->nama_kelas }}</td>
                    </tr>
                    <tr>
                        <th>Terdaftar pada</th>
                        <td>: {{ $mahasiswa->created_at->format('d M Y H:i') }}</td>
                    </tr>
                    <tr>
                        <th>Terakhir diupdate</th>
                        <td>: {{ $mahasiswa->updated_at->format('d M Y H:i') }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="d-flex gap-2">
            <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning">
                <i class="fas fa-edit me-1"></i> Edit
            </a>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-1"></i> Kembali
            </a>
        </div>
    </div>
</div>
@endsection