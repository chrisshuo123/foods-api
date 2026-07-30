<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/mic-favicon/favicon-32x32.png') }}">
    <title>Food Lists</title>
</head>
<body>
    <div class="container" style="margin-top: 60px;">
        <h1 style="margin-bottom: 40px;">Lists of Indonesian Fooooddddds</h1>
        <div class="food-catalog">
            @foreach($foods as $food)
            {{-- Soto Ayam Lamongan --}}
            <div class="food-list"
                data-id="{{ $food->id }}"
                data-name="{{ $food->name }}"
                data-image="{{ $food->image_url }}"
                data-slug="{{ $food->slug }}"
                data-body="{{ $food->body }}"
                data-province="{{ $food->province?->name ?? '' }}"
                data-regency="{{ $food->regency?->name ?? '' }}"
                data-other_location="{{ $food->other_location }}"
                onclick="openModal(this)">
                
                {{-- <img src="{{ asset('img/' . $food->slug . '/' . $food->image) }}" alt="{{ $food->name }}"> --}}
                @php
                    $imagePath = public_path('img/' . $food->slug . '/' . $food->image);
                    $imageUrl = file_exists($imagePath)
                        ? asset('img/' . $food->slug . '/' . $food->image)
                        : asset('img/no-food-pic.png');
                @endphp
                <img src="{{ $imageUrl }}" alt="{{ $food->name }}">

                <!-- Debug: lihat nilai -->
                {{-- <p>Slug: {{ $food->slug ?? 'NULL' }}</p>
                <p>Image: {{ $food->image ?? 'NULL' }}</p>
                <p>Path: {{ $imagePath }}</p> --}}

                <div class="food-info">
                    <h3>
                        {{ $food->name }}
                    </h3>
                    {{-- <p id="myParagraph" class="text-limiter" data-word-limit="20">
                        {{ $food['body'] }}
                    </p> --}}
                    <p>{{ Str::limit($food->body, 20) }}</p>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        {{-- <span><b>Located in: </b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lamongan, Jawa Timur, Indonesia</span> --}}
                        {{-- {{ dd($food->regency->name, $food->province->name) }} --}}
                        <span><b>Located in: </b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        @if ($food->regency && $food->province)
                            {{ $food->cleanLocationName($food->regency->name) }}, {{ $food->cleanLocationName($food->province->name) }}, Indonesia
                        @elseif (!$food->regency && $food->province)
                            {{ $food->cleanLocationName($food->province->name) }}, Indonesia
                        @elseif ($food->other_location)
                            {{ $food->other_location }}
                        @else
                            Lokasi Tidak Tersedia
                        @endif
                        </span>
                    </p>
                    <div class="cta-read-share">
                        <a id="popupBtn" class="cta-read">Read More &raquo;</a>
                        <a href="#" class="cta-share"><i class="fa-solid fa-share-nodes"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- @foreach($foods as $food)
            <div>{{ $food->id }}. {{ $food->name }}</div>
        @endforeach --}}
    </div>

    {{-- Pop Up Modal --}}
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="image-wrapper">
                <img id="modalImage" src="" alt="">
                <span class="close-btn">&times;</span>
            </div>
            <div class="modal-body">
                <h2 id="modalTitle"></h2>
                {{-- <p><i class="fa-solid fa-location-dot" style="margin-right: 10px;"></i><b>Location:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="modalLocation">Lamongan, Jawa Timur, Indonesia</span></p> --}}
                <p><i class="fa-solid fa-location-dot" style="margin-right: 10px;"></i><b>Location:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span id="modalLocation"></span></p>
                <p id="modalBody"></p>
                <button class="btn btn-secondary modal-close-btn">Close</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            console.log("✅ jQuery is working!");
        });
    </script>
    <script src="https://kit.fontawesome.com/52139f278b.js" crossorigin="anonymous"></script>
</body>
</html>