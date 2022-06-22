<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square Pharmaceuticals Ltd Bangladesh</title>
    <link rel="shortcut icon" href="{{ asset('/assets/images/brands/10.png') }}" type="image/x-icon">
    <!-- FontAwesome-cdn include -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google fonts include -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap-css include -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <!-- Animate-css include -->
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css') }}">
    <!-- Main-StyleSheet include -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style-rtl-4.css') }}">
</head>

<body>
    <div class="wrapper position-relative">
        <div class="container-lg">
            <div class="row py-3 logo_wrapper">
                <div class="col-12 d-flex justify-content-between">
                    <div class="logo_area">
                        <img src="{{ asset('/assets/images/brands/09.png') }}" alt="image-not-found"
                            style="width: 13rem;" class="brand_2">
                    </div>
                    <div class="logo_area">
                        <a href="{{ route('home') }}"><img src="{{ asset('/assets/images/brands/10.png') }}"
                                alt="image-not-found" style="width: 4.5rem;" class="brand_1"></a>
                    </div>
                </div>
            </div>
            <div class="row py-3 d-flex flex-column justify-content-evenly align-items-center brand_logo_wrapper">
                <div class="col-12 py-5 d-block" id="gallery_one">
                    <div class="brand_img_wrapper">
                        <div class="brand_img">
                            <img src="{{ asset('/assets/images/brands/1.png') }}" alt="image-not-found"
                                style="width: 8rem;">
                        </div>
                        <div class="brand_img">
                            <img src="{{ asset('/assets/images/brands/2.png') }}" alt="image-not-found"
                                style="width: 8rem;">
                        </div>
                        <div class="brand_img">
                            <img src="{{ asset('/assets/images/brands/3.png') }}" alt="image-not-found"
                                style="width: 8rem;">
                        </div>
                        <div class="brand_img">
                            <img src="{{ asset('/assets/images/brands/4.png') }}" alt="image-not-found"
                                style="width: 8rem;">
                        </div>
                        <div class="brand_img">
                            <img src="{{ asset('/assets/images/brands/5.png') }}" alt="image-not-found"
                                style="width: 8rem;">
                        </div>
                        <div class="brand_img">
                            <img src="{{ asset('/assets/images/brands/6.png') }}" alt="image-not-found"
                                style="width: 8rem;">
                        </div>
                        <div class="brand_img">
                            <img src="{{ asset('/assets/images/brands/7.png') }}" alt="image-not-found"
                                style="width: 8rem;">
                        </div>
                        <div class="brand_img">
                            <img src="{{ asset('/assets/images/brands/8.png') }}" alt="image-not-found"
                                style="width: 8rem;">
                        </div>
                    </div>
                </div>
                <div class="col-12 py-5 d-none" style="height: 40%" id="gallery_two">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item text-center active">
                                <div class="brand_img d-inline-block">
                                    <img src="{{ asset('/assets/images/brands/1.png') }}" alt="image-not-found"
                                        class="d-block" style="width: unset!important">
                                </div>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="brand_img d-inline-block">
                                    <img src="{{ asset('/assets/images/brands/2.png') }}" alt="image-not-found"
                                        class="d-block" style="width: unset!important">
                                </div>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="brand_img d-inline-block">
                                    <img src="{{ asset('/assets/images/brands/3.png') }}" alt="image-not-found"
                                        class="d-block" style="width: unset!important">
                                </div>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="brand_img d-inline-block">
                                    <img src="{{ asset('/assets/images/brands/4.png') }}" alt="image-not-found"
                                        class="d-block" style="width: unset!important">
                                </div>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="brand_img d-inline-block">
                                    <img src="{{ asset('/assets/images/brands/5.png') }}" alt="image-not-found"
                                        class="d-block" style="width: unset!important">
                                </div>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="brand_img d-inline-block">
                                    <img src="{{ asset('/assets/images/brands/6.png') }}" alt="image-not-found"
                                        class="d-block" style="width: unset!important">
                                </div>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="brand_img d-inline-block">
                                    <img src="{{ asset('/assets/images/brands/7.png') }}" alt="image-not-found"
                                        class="d-block" style="width: unset!important">
                                </div>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="brand_img d-inline-block">
                                    <img src="{{ asset('/assets/images/brands/8.png') }}" alt="image-not-found"
                                        class="d-block" style="width: unset!important">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 text-center pb">
                    <a href="{{ route('register') }}"
                        class="js-btn-next f_btn text-white rounded-pill text-uppercase">Let's play the quiz</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>

    <script>
        lastClick = 5;
        var gallery_one = document.getElementById('gallery_one');
        var gallery_two = document.getElementById('gallery_two');

        document.addEventListener("click", function() {
            lastClick = 5;
            gallery_one.classList.remove('d-none')
            gallery_one.classList.add('d-block')
            gallery_two.classList.remove('d-block')
            gallery_two.classList.add('d-none')
        });

        setInterval(() => {
            if (lastClick <= 0) {
                gallery_one.classList.remove('d-block')
                gallery_one.classList.add('d-none')
                gallery_two.classList.remove('d-none')
                gallery_two.classList.add('d-block')
            }
            lastClick -= 1;
        }, 1000);
    </script>
</body>

</html>
