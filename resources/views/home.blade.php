<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/mic-favicon/favicon-32x32.png') }}">
    <title>Home</title>
</head>
<body>
    <div class="container" style="margin-top: 60px;">
        <h1 style="margin-bottom: 40px;">Lists of Indonesian Fooooddddds</h1>
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
            {{-- Rawon --}}
            <div class="food-list">
                <img src="{{ asset('img/rawon.jpeg') }}" alt="foods">
                <div class="food-info">
                    <h3>Rawon</h3>
                    <p id="myParagraph" class="text-limiter" data-word-limit="20">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero mollitia officia dolorum quia ullam reprehenderit odit fuga dolorem. Sit modi est magnam distinctio similique ducimus quod nobis quae quia eius?
                    </p>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        <span><b>Located in: </b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ponorogo, Jawa Timur, Indonesia</span>
                    </p>
                    <div class="cta-read-share">
                        <a id="popupBtn" class="cta-read">Read More &raquo;</a>
                        <a href="#" class="cta-share"><i class="fa-solid fa-share-nodes"></i></a>
                    </div>
                </div>
            </div>
            {{-- Nasi Goreng Roa Manado --}}
            <div class="food-list">
                <img src="{{ asset('img/nasgor-roa.jpg') }}" alt="foods">
                <div class="food-info">
                    <h3>Nasi Goreng Roa</h3>
                    <p id="myParagraph" class="text-limiter" data-word-limit="20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, itaque unde! Quam, fugiat nemo voluptatum numquam blanditiis eaque voluptas minima neque, modi ullam eveniet corporis animi saepe eos architecto libero.
                    </p>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        <span><b>Located in: </b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manado, North Sulawesi, Indonesia</span>
                    </p>
                    <div class="cta-read-share">
                        <a id="popupBtn" class="cta-read">Read More &raquo;</a>
                        <a href="#" class="cta-share"><i class="fa-solid fa-share-nodes"></i></a>
                    </div>
                </div>
            </div>
            {{-- Daging Rendang --}}
            <div class="food-list">
                <img src="{{ asset('img/rendang.jpg') }}" alt="foods">
                <div class="food-info">
                    <h3>Daging Rendang</h3>
                    <p id="myParagraph" class="text-limiter" data-word-limit="20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptas veritatis dignissimos iste, laboriosam repellat ullam blanditiis tenetur nobis corporis assumenda vero odio expedita, nesciunt minima numquam dicta non placeat.
                    </p>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        <span><b>Located in: </b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minangkabau, West Sumatera, Indonesia</span>
                    </p>
                    <div class="cta-read-share">
                        <a id="popupBtn" class="cta-read">Read More &raquo;</a>
                        <a href="#" class="cta-share"><i class="fa-solid fa-share-nodes"></i></a>
                    </div>
                </div>
            </div>
            {{-- Kue Tetu --}}
            <div class="food-list">
                <img src="{{ asset('img/kue-tetu-palu.jpeg') }}" alt="foods">
                <div class="food-info">
                    <h3>Kue Tetu</h3>
                    <p id="myParagraph" class="text-limiter" data-word-limit="20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, debitis illum? Nam dicta explicabo corporis sed possimus quia ratione odio quam, minima, perspiciatis veritatis eos. Reiciendis, enim. Debitis, iure quos!
                    </p>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        <span><b>Located in: </b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Palu, Central Sulawesi, Indonesia</span>
                    </p>
                    <div class="cta-read-share">
                        <a id="popupBtn" class="cta-read">Read More &raquo;</a>
                        <a href="#" class="cta-share"><i class="fa-solid fa-share-nodes"></i></a>
                    </div>
                </div>
            </div>
            {{-- Bika Ambon --}}
            <div class="food-list">
                <img src="{{ asset('img/bika-ambon.jpg') }}" alt="foods">
                <div class="food-info">
                    <h3>Bika Ambon</h3>
                    <p id="myParagraph" class="text-limiter" data-word-limit="20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos aspernatur fuga ducimus, necessitatibus repellat ex aut doloribus ea! Similique officiis aperiam, itaque voluptatibus cupiditate quia ipsa blanditiis? Delectus, id itaque.
                    </p>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        <span><b>Located in: </b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medan, Sumatera Utara, Indonesia</span>
                    </p>
                    <div class="cta-read-share">
                        <a id="popupBtn" class="cta-read">Read More &raquo;</a>
                        <a href="#" class="cta-share"><i class="fa-solid fa-share-nodes"></i></a>
                    </div>
                </div>
            </div>
            {{-- Bakso --}}
            <div class="food-list">
                <img src="{{ asset('img/bakso.jpg') }}" alt="foods">
                <div class="food-info">
                    <h3>Bakso</h3>
                    <p id="myParagraph" class="text-limiter" data-word-limit="20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum nemo laudantium minus, ut, veritatis ipsa molestias illum debitis, expedita numquam porro? Tempore quam hic exercitationem, quidem earum consequuntur ipsam voluptatem.
                    </p>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        <span><b>Located in: </b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fuzhou, China</span>
                    </p>
                    <div class="cta-read-share">
                        <a id="popupBtn" class="cta-read">Read More &raquo;</a>
                        <a href="#" class="cta-share"><i class="fa-solid fa-share-nodes"></i></a>
                    </div>
                </div>
            </div>
            <div class="food-list"></div>
            <div class="food-list"></div>
            <div class="food-list"></div>
        </div>
    </div>

    {{-- Pop Up Modal --}}
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="image-wrapper">
                <img src="{{ asset('img/soto-lamongan.jpg') }}" alt="Soto Ayam Lamongan">
                <span class="close-btn">&times;</span>
            </div>
            <div class="modal-body">
                <h2>Soto Ayam Lamongan</h2>
                <p><i class="fa-solid fa-location-dot" style="margin-right: 10px;"></i><b>Location:</b> Lamongan, Jawa Timur, Indonesia</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum nemo laudantium minus, ut, veritatis ipsa molestias illum debitis, expedita numquam porro? Tempore quam hic exercitationem, quidem earum consequuntur ipsam voluptatem.</p>
                <button id="myModal" class="btn btn-secondary" style="display: block; max-width: 200px; margin: 0 auto;">Close</button>
            </div>
        </div>
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