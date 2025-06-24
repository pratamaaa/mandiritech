<!-- Modal Tambah Produk -->
<div class="modal fade" id="addProductModalAudio" tabindex="-1" aria-labelledby="addProductModalAudioLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('produk.basic.store') }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalAudioLabel">Tambah Produk Audio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">

                    <!-- Merk -->
                    <div class="row mb-3 align-items-center">
                        <label for="merk" class="col-sm-3 col-form-label fw-semibold">Merk</label>
                        <div class="col-sm-9">
                            <select name="merk" class="form-select" required>
                                <option value="">-- Pilih Merk --</option>
                                <option value="Hikvision">Hikvision</option>
                                <option value="Dahua">Dahua</option>
                                <option value="Hilook">Hilook</option>
                            </select>
                        </div>
                    </div>

                    <!-- Detail Kamera -->
                    <div class="row mb-3 align-items-center">
                        <label for="detail_kamera" class="col-sm-3 col-form-label fw-semibold">Detail Kamera</label>
                        <div class="col-sm-9">
                            <select name="detail_kamera" id="detail_kamera" class="form-select" required>
                                <option value="">-- Pilih Detail Kamera --</option>
                                <option value="Dahua 2 MP">Dahua 2 MP</option>
                                <option value="Hilook 2 MP">Hilook 2 MP</option>
                                <option value="Hikvision 2 MP">Hikvision 2 MP</option>
                            </select>
                        </div>
                    </div>

                    <!-- Paket -->
                    <div class="row mb-3 align-items-center">
                        <label for="paket" class="col-sm-3 col-form-label fw-semibold">Paket</label>
                        <div class="col-sm-9">
                            <select name="paket" id="paket" class="form-select" required>
                                <option value="">-- Pilih Paket --</option>
                            </select>
                        </div>
                    </div>

                    <!-- Harga -->
                    <div class="row mb-3 align-items-center">
                        <label for="harga" class="col-sm-3 col-form-label fw-semibold">Harga</label>
                        <div class="col-sm-9">
                            <input type="number" name="price" class="form-control" placeholder="Contoh: 2500000"
                                required>
                        </div>
                    </div>

                    <!-- Spesifikasi -->
                    <div class="row mb-3">
                        <label for="spesifikasi" class="col-sm-3 col-form-label fw-semibold">Spesifikasi</label>
                        <div class="col-sm-9">
                            <textarea name="spek" class="form-control" rows="2" placeholder="Contoh: 2 MP, IR 30m, IP67" required></textarea>
                        </div>
                    </div>

                    <!-- Detail Produk -->
                    <div class="row mb-3">
                        <label for="detail" class="col-sm-3 col-form-label fw-semibold">Detail Produk</label>
                        <div class="col-sm-9">
                            <textarea name="detail" class="form-control" rows="3" placeholder="Tuliskan deskripsi tambahan..." required></textarea>
                        </div>
                    </div>

                    <!-- Gambar -->
                    <div class="row mb-3 align-items-center">
                        <label for="image" class="col-sm-3 col-form-label fw-semibold">Gambar Produk</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>
                    </div>

                    <input type="hidden" name="category" value="audio">

                </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Simpan Produk</button>
            </div>
        </form>
    </div>
</div>
