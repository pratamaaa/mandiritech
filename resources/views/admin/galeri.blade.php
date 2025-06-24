@extends('layouts.adminapp')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Daftar Galeri</h4>
        <button class="btn btn-primary" data-toggle="modal" data-target="#tambahGaleriModal">
            <i class="fas fa-plus"></i> Tambah Galeri
        </button>
    </div>

    <!-- Tabel Galeri -->
    <div class="card shadow">
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Lokasi</th>
                        <th>Merk Kamera</th>
                        <th>Tanggal Pasang</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($galleries as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ ucfirst($item->category) }}</td>
                            <td>{{ $item->location }}</td>
                            <td>{{ $item->camera_brand }}</td>
                            <td>{{ $item->install_date ? \Carbon\Carbon::parse($item->install_date)->format('d-m-Y') : '-' }}
                            </td>
                            <td>
                                <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="thumbnail" height="50">
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.galeri.destroy', $item->id) }}" method="POST"
                                    class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Belum ada data galeri</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Tambah Galeri -->
    <div class="modal fade" id="tambahGaleriModal" tabindex="-1" role="dialog" aria-labelledby="tambahGaleriLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data"
                class="modal-content">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahGaleriLabel">Tambah Data Galeri</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Input Fields -->
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="image" class="form-control-file" required>
                    </div>

                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file" name="thumbnail" class="form-control-file" required>
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="category" class="form-control" required>
                            <option value="">-- Pilih Kategori --</option>
                            <option value="perumahan">Perumahan</option>
                            <option value="kantor">Kantor</option>
                            <option value="industri">Industri</option>
                            <option value="ritel">Ritel</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Lokasi</label>
                        <input type="text" name="location" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Merk Kamera</label>
                        <input type="text" name="camera_brand" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Pemasangan</label>
                        <input type="date" name="install_date" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
