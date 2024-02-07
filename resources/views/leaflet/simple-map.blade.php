@extends('layouts.dashboard-volt')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <style>
        #map {
            height: 70vh;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row justivy-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Map</div>
                    <div class="card-body">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script>
        const map = L.map('map').setView([-6.9869189, 110.4131281], 13);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        const centrePointsData = @json($centrePoints);

        centrePointsData.forEach(point => {
            const {
                nama,
                coordinates,
                keterangan,
                alamat
            } = point;
            const [latitude, longitude] = coordinates.split(',').map(parseFloat);

            // Tambahkan marker
            const marker = L.marker([latitude, longitude]).addTo(map);
            marker.bindPopup(`<b>${nama}</b><br>Coordinates: ${coordinates}<br>Keterangan: ${keterangan}<br>Alamat:${alamat}`)
                .openPopup();
        });
    </script>
@endpush
