@extends('frontend.layouts.app')

@section('title')
    Position des maisons disponibles
@endsection

@section('content')
    <section class="flex h-screen justify-center w-full relative pt-20">
        <div class="w-full h-full">
            <div id="mapId"
                 class="relative w-full h-full leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                 style="z-index: 0; position: relative" tabindex="0">
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.4.1/MarkerCluster.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.5.0/MarkerCluster.Default.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css"/>
@endsection

@section('scripts')
    @parent

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.4.1/leaflet.markercluster.js"></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js"></script>

    <script>
        let map = L.map('mapId').setView([{{ config('leaflet.map_center_latitude') }}, {{ config('leaflet.map_center_longitude') }}], {{ config('leaflet.zoom_level') }});

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
        let markers = L.markerClusterGroup();
        axios.get('{{ route('api.apartment.index') }}')
            .then(function (response) {
                let marker = L.geoJSON(response.data, {
                    pointToLayer: function (geoJsonPoint, latlng) {
                        return L.marker(latlng).bindPopup(function (layer) {
                            return layer.feature.properties.map_popup_content;
                        });
                    }
                });
                markers.addLayer(marker);
            })
            .catch(function (error) {
                console.log(error);
            });
        map.addLayer(markers);
    </script>
@endsection
