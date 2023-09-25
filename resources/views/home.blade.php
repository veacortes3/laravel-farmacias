@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Farmacias de Guardia Abiertas hoy en Zaragoza') }}</div>

                <div class="card-body">
                    @if (count($farmaciasArray) > 0)
                        <ul>
                            @foreach ($farmaciasArray['result'] as $farmacia)
                                @if (isset($farmacia['title']))
                                    <li>{{ $farmacia['title'] }}</li>
                                @endif
                            @endforeach
                        </ul>
                    @else
                        <p>No se encontraron farmacias.</p>
                    @endif
                </div>

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


                <div class="card-body">
                    @if (count($farmaciasArray['result']) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                <th>Sector</th>
                                    <th>Nombre</th>
                                    <th>Dirección</th>
                                    <th>Horario de Guardia</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($farmaciasArray['result'] as $farmacia)
                                    @if (isset($farmacia['guardia']))
                                        <tr>
                                        <td>{{ $farmacia['guardia']['sector'] }}</td>
                                            <td>{{ $farmacia['title'] }}</td>
                                            <td>{{ $farmacia['calle'] }}</td>
                                            <td>{{ $farmacia['guardia']['horario'] }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
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
        </div>
    </div>
</div>
@endsection