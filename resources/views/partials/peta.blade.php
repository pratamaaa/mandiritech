<div class="container py-5">
    <div class="text-center mb-4">
        <h5 class="text-primary text-uppercase fw-bold">Wilayah Pemasangan</h5>
        <h2 class="display-6 fw-semibold">Cakupan Layanan CCTV Jawa Barat</h2>
        <p class="text-muted">Karawang, Purwakarta, Cianjur, Sukabumi, Subang, Bandung, Sumedang, Garut</p>
    </div>

    <!-- Peta -->
    <div id="map" style="height: 500px; border-radius: 16px; overflow: hidden;"></div>
</div>

<!-- Leaflet CSS & JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    const map = L.map('map').setView([-6.9, 107.6], 9);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    const targetKota = [
        'KARAWANG', 'PURWAKARTA', 'CIANJUR', 'SUKABUMI',
        'SUBANG', 'BANDUNG', 'SUMEDANG', 'GARUT',
        'BANDUNG BARAT', 'CIMAHI', 'KOTA BANDUNG', 'KOTA CIMAHI', 'KOTA SUKABUMI'
    ];

    const highlightStyle = {
        color: '#0d6efd',
        weight: 2,
        fillOpacity: 0.5
    };

    const normalStyle = {
        color: '#ccc',
        weight: 1,
        fillOpacity: 0.1
    };

    fetch('/geo/Jabar_By_Kab.geojson')
        .then(res => res.json())
        .then(data => {
            L.geoJSON(data, {
                style: feature => {
                    const namaKab = feature.properties.KABKOT?.toUpperCase();
                    return targetKota.includes(namaKab) ? highlightStyle : normalStyle;
                },
                onEachFeature: (feature, layer) => {
                    const namaKab = feature.properties.KABKOT?.toUpperCase();
                    layer.bindTooltip(namaKab, {
                        direction: 'top'
                    });
                }
            }).addTo(map);
        });
</script>
