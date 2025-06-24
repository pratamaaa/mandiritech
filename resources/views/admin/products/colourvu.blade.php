@extends('layouts.adminapp')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Produk Kategori CCTV Colour Vu</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModalColour">
            <i class="fas fa-plus"></i> Tambah Produk
        </button>
    </div>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Merk</th>
                <th>Detail Kamera</th>
                <th>Paket</th>
                <th>Harga</th>
                <th>Spesifikasi</th>
                <th>Detail</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $i => $product)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $product->merk }}</td>
                    <td>{{ $product->detail_kamera }}</td>
                    <td>{{ $product->paket }}</td>
                    <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>{{ $product->spek }}</td>
                    <td>{{ $product->detail }}</td>
                    <td>
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="gambar" width="80">
                        @else
                            <span class="text-muted">Belum ada gambar</span>
                        @endif
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal"
                            data-id="{{ $product->id }}" data-merk="{{ $product->merk }}"
                            data-detail_kamera="{{ $product->detail_kamera }}" data-paket="{{ $product->paket }}"
                            data-price="{{ $product->price }}" data-spek="{{ $product->spek }}"
                            data-detail="{{ $product->detail }}">
                            <i class="fas fa-edit"></i>
                        </button>

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">Belum ada produk</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @include('admin.products.modals.tambah_colour')
    {{-- @include('admin.products.modals.edit_colour') --}}
@endsection

@push('scripts')
    <script>
        const paketOptions = {
            "Dahua 2 MP": ["Paket 2 Kamera", "Paket 4 Kamera", "Paket 6 Kamera", "Paket 8 Kamera", "Paket 10 Kamera",
                "Paket 12 Kamera"
            ],
            "Hilook 2 MP": ["Paket 2 Kamera", "Paket 3 Kamera", "Paket 4 Kamera", "Paket 5 Kamera", "Paket 6 Kamera",
                "Paket 8 Kamera", "Paket 10 Kamera", "Paket 12 Kamera", "Paket 14 Kamera", "Paket 16 Kamera"
            ],
            "Hikvision 2 MP": ["Paket 2 Kamera", "Paket 4 Kamera", "Paket 6 Kamera", "Paket 8 Kamera",
                "Paket 10 Kamera", "Paket 12 Kamera"
            ]
        };

        document.getElementById('detail_kamera').addEventListener('change', function() {
            const selected = this.value;
            const paketSelect = document.getElementById('paket');
            paketSelect.innerHTML = '<option value="">-- Pilih Paket --</option>';
            if (paketOptions[selected]) {
                paketOptions[selected].forEach(p => {
                    const option = document.createElement('option');
                    option.value = p;
                    option.textContent = p;
                    paketSelect.appendChild(option);
                });
            }
        });

        const editModal = document.getElementById('editModal');
        editModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            document.getElementById('edit-id').value = button.getAttribute('data-id');
            document.getElementById('edit-merk').value = button.getAttribute('data-merk');
            document.getElementById('edit-detail_kamera').value = button.getAttribute('data-detail_kamera');
            document.getElementById('edit-paket').value = button.getAttribute('data-paket');
            document.getElementById('edit-price').value = button.getAttribute('data-price');
            document.getElementById('edit-spek').value = button.getAttribute('data-spek');
            document.getElementById('edit-detail').value = button.getAttribute('data-detail');

            document.getElementById('editForm').action = `/products/${button.getAttribute('data-id')}`;
        });
    </script>
@endpush
