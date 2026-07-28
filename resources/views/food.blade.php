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
        
        @foreach($foods as $food)
        <div class="food-catalog">
            {{-- Soto Ayam Lamongan --}}
            <div class="food-list">
                <img src="{{ asset('img/soto-lamongan.jpg') }}" alt="foods">
                <div class="food-info">
                    <h3>Soto Ayam Lamongan</h3>
                    <p id="myParagraph" class="text-limiter" data-word-limit="20">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, deserunt molestias, quod dolore id ad veritatis alias, officia quisquam consequatur magnam unde non quia quam voluptatibus ut atque repudiandae iste.
                    </p>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        <span><b>Located in: </b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lamongan, Jawa Timur, Indonesia</span>
                    </p>
                    <div class="cta-read-share">
                        <a id="popupBtn" class="cta-read">Read More &raquo;</a>
                        <a href="#" class="cta-share"><i class="fa-solid fa-share-nodes"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            console.log("✅ jQuery is working!");
        });
    </script>
    <script src="https://kit.fontawesome.com/52139f278b.js" crossorigin="anonymous"></script>
</body>
</html>