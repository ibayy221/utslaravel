@extends('layouts.sidebar')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0"><i class="fas fa-users me-2"></i>Data Mahasiswa</h4>
    </div>
    <div class="card-body">
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">
            <i class="fas fa-plus me-1"></i> Tambah Mahasiswa
        </a>

        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead class="table-light">
                    <tr>
                        <th width="5%">No</th>
                        <th width="15%">NIM</th>
                        <th>Nama</th>
                        <th width="15%">Kelas</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($mahasiswas as $index => $mahasiswa)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $mahasiswa->nim }}</td>
                            <td>{{ $mahasiswa->nama }}</td>
                            <td>{{ $mahasiswa->kelas->nama_kelas }}</td>
                            <td>
                                <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye me-1"></i> Detail
                                </a>
                                <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit me-1"></i> Edit
                                </a>
                                <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash me-1"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada data mahasiswa</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection