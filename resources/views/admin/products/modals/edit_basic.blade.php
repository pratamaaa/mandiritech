<!-- Modal Edit Produk -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form method="POST" id="editForm" enctype="multipart/form-data" class="modal-content">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title">Edit Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id" id="edit-id">
                <div class="mb-3">
                    <label for="edit-merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" name="merk" id="edit-merk" required>
                </div>
                <div class="mb-3">
                    <label for="edit-detail_kamera" class="form-label">Detail Kamera</label>
                    <select name="detail_kamera" id="edit-detail_kamera" class="form-select" required>
                        <option value="Dahua 2 MP">Dahua 2 MP</option>
                        <option value="Hilook 2 MP">Hilook 2 MP</option>
                        <option value="Hikvision 2 MP">Hikvision 2 MP</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="edit-paket" class="form-label">Paket</label>
                    <select name="paket" id="edit-paket" class="form-select" required>
                        <option value="">-- Pilih Paket --</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="edit-price" class="form-label">Harga</label>
                    <input type="number" class="form-control" name="price" id="edit-price" required>
                </div>
                <div class="mb-3">
                    <label for="edit-spek" class="form-label">Spesifikasi</label>
                    <textarea class="form-control" name="spek" id="edit-spek" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="edit-detail" class="form-label">Detail</label>
                    <textarea class="form-control" name="detail" id="edit-detail" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="edit-image" class="form-label">Ganti Gambar (opsional)</label>
                    <input type="file" class="form-control" name="image" accept="image/*">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Perbarui</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </form>
    </div>
</div>
