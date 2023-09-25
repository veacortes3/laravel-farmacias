@extends('layouts.app')

@section('content')
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
<div class="col-md-12">
<h1 class="display-3 fw-normal">Abiertas HOY en Zaragoza</h1>

</div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Farmacias de Guardia') }}</div>

                <div class="card-body">
                    @if (count($farmaciasArray['result']) > 0)
                        <ul>
                            @foreach ($farmaciasArray['result'] as $farmacia)
                                @if (isset($farmacia['guardia']))
                                    <li>
                                        <strong>Nombre:</strong> {{ $farmacia['title'] }}<br>
                                        <strong>Dirección:</strong> {{ $farmacia['calle'] }}<br>
                                        <strong>Horario de Guardia:</strong> {{ $farmacia['guardia']['horario'] }}<br>
                                        <strong>Sector:</strong> {{ $farmacia['guardia']['sector'] }}<br><br>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @else
                        <p>No se encontraron farmacias de guardia.</p>
                    @endif
                </div>




                <div id="map-{{ $farmacia['id'] }}" style="height: 400px;"></div>
                                                <script>
                                                    function initMap() {
                                                        var map = new google.maps.Map(document.getElementById('map-{{ $farmacia['id'] }}'), {
                                                            center: { lat: {{ $farmacia['geometry']['coordinates'][1] }}, lng: {{ $farmacia['geometry']['coordinates'][0] }} },
                                                            zoom: 15
                                                        });
                                                        var marker = new google.maps.Marker({
                                                            position: { lat: {{ $farmacia['geometry']['coordinates'][1] }}, lng: {{ $farmacia['geometry']['coordinates'][0] }} },
                                                            map: map,
                                                            title: '{{ $farmacia['title'] }}'
                                                        });
                                                    }
                                                </script>
                                                <script async defer
                                                    src="https://maps.googleapis.com/maps/api/js?key={{ config('services.googlemaps.api_key') }}&callback=initMap">
                                                </script>
                                            







            </div>
@endsection