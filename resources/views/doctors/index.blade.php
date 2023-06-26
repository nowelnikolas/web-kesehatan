@extends('layouts.main')

@section('container')
<!-- resources/views/moods/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <!-- Add your head content here -->
</head>
<body>

<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-md-12">
                <h1 class="text-center">Psychiatrists</h1>
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile bg-gradient-primary-to-secondary">
                        {{-- <img class="profile-img img-fluid mb-3" src="assets/Emoji.png" alt="..." /> --}}
                    </div>
                </div>
                <div>
                    <div class="text-center mb-3">
                        <button id="find-nearest-button">Find Nearest Psychiatrists</button>
                    </div>
                </div>
                <div id="map" style="width: 100%; height: 400px;"></div>
            </div>
        </div>
    </div>
</header>

<script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
<script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
<script>
    var latitude = -6.283522;
    var longitude = 106.711296;

    var platform = new H.service.Platform({
        apikey: '-gUb8pVyaI_-aVX5VQDEEH8SOjpery8OlbaCIzJbGiM',
    });

    var defaultLayers = platform.createDefaultLayers();

    var map = new H.Map(document.getElementById('map'), defaultLayers.vector.normal.map, {
        center: { lat: latitude, lng: longitude },
        zoom: 12,
    });

    var marker = new H.map.Marker({ lat: latitude, lng: longitude });
    map.addObject(marker);
</script>

</body>
</html>

@endsection