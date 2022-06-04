@extends('layouts.app')

@section('title', "Nos maison a porter de vos telephones")

@section('content')
    <section class="lg:px-24 md:px-12 px-4 lg:pt-8 pt-4">
        <div class="container h-[80vh] mx-auto">
            <div id="mapId" class="relative h-[85vh] lg:h-[75vh] rounded-3xl bg-gray-200 leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom overflow-x-scroll" style="z-index: 0 !important; position: relative;" tabindex="0" >
                <div class="absolute right-0 bottom-0 h-full lg:h-[75vh] w-full lg:w-[30%] lg:p-6 overflow-x-scroll">
                    <div class="hidden lg:block lg:p-6 lg:bg-white lg:shadow-xl lg:rounded-2xl w-full lg:max-w-[260px]" style="z-index: 1005; position: absolute">
                        <h6 class="block text-lg" hidden="">Maisons trouvées</h6>
                        <div class="w-max h-full lg:h-[57vh] lg:overflow-y-auto lg:overflow-x-hidden overflow-x-auto lg:-mx-2  lg:px-4 p-1">
                            <div class="lg:mt-2 lg:grid flex gap-4  px-4 lg:px-0 lg:-mx-4 lg:gap-0 w-full lg:w-max ">
                                @foreach ($apartments as $apartment)
                                    <a href="{{ route('categories.show', $apartment->key) }}" title="{{ $apartment->commune }}" class="block lg:flex items-center w-52 lg:w-full gap-4 lg:px-2 lg:py-2 rounded-xl bg-white shadow-md lg:shadow-none lg:bg-transparent lg:hover:bg-gray-100">
                                        <img src="{{ asset('storage/'.$apartment->images) }}" class="lg:w-4/12 w-52 lg:h-16 h-28 object-cover lg:rounded-lg rounded-t-lg" alt="Lubumbasi">
                                        <div class="space-y-2 lg:p-0 p-4">
                                            <span class="text-lg leading-none text-gray-700">{{ $apartment->roomNumber ?? 0 }} pieces</span>
                                            <div class="w-max flex items-end gap-2">
                                                <span class="block w-max text-xs text-gray-600">{{ $apartment->guarantees ?? 0}} Garantie</span>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="block lg:hidden lg:p-6 lg:bg-white lg:shadow-xl lg:rounded-2xl h-full" style="z-index: 1005; position: absolute">
                        <div class="h-full flex items-end overflow-x-scroll w-max">
                            <div class="w-max lg:overflow-y-auto lg:overflow-x-hidden overflow-x-scroll lg:-mx-2 -mx-4 lg:px-4 p-1">
                                <div class="overflow-x-scroll lg:mt-2 lg:grid flex gap-4 px-4 lg:px-0 lg:-mx-4 lg:gap-0 w-max">
                                    @foreach ($apartments as $apartment)
                                        <a href="{{ route('categories.show', $apartment->key) }}" title="{{ $apartment->commune }}" class="block lg:flex items-center w-52 lg:w-full gap-4 lg:px-2 lg:py-2 rounded-xl bg-white shadow-md lg:shadow-none lg:bg-transparent lg:hover:bg-gray-100">
                                            <img src="{{ asset('storage/'.$apartment->images) }}" class="lg:w-4/12 w-52 lg:h-16 h-28 object-cover lg:rounded-lg rounded-t-lg" alt="Lubumbasi">
                                            <div class="space-y-2 lg:p-0 p-4">
                                                <span class="text-lg leading-none text-gray-700">{{ $apartment->roomNumber ?? 0 }} pieces</span>
                                                <div class="w-max flex items-end gap-2">
                                                    <span class="block w-max text-xs text-gray-600">{{ $apartment->guarantees ?? 0}} Garantie</span>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
