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
    <link rel="stylesheet" href="{{ asset('/assets/css/style-rtl-3.css') }}">
</head>

<body>
    <div class="wrapper position-relative">
        <div class="container-lg" style="height: 100vh">
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
            <div class="row py-3 d-flex flex-column justify-content-evenly align-items-center">
                <div class="col-12 py-5">
                    <div class="brand_img_wrapper">
                        <div class="brand_img">
                            <img src="{{ asset('/assets/images/brands/01.png') }}" alt="image-not-found"
                                style="width: 8rem;">
                        </div>
                        <div class="brand_img">
                            <img src="{{ asset('/assets/images/brands/02.png') }}" alt="image-not-found"
                                style="width: 8rem;">
                        </div>
                        <div class="brand_img">
                            <img src="{{ asset('/assets/images/brands/03.png') }}" alt="image-not-found"
                                style="width: 8rem;">
                        </div>
                        <div class="brand_img">
                            <img src="{{ asset('/assets/images/brands/04.png') }}" alt="image-not-found"
                                style="width: 8rem;">
                        </div>
                        <div class="brand_img">
                            <img src="{{ asset('/assets/images/brands/05.png') }}" alt="image-not-found"
                                style="width: 8rem;">
                        </div>
                        <div class="brand_img">
                            <img src="{{ asset('/assets/images/brands/06.png') }}" alt="image-not-found"
                                style="width: 8rem;">
                        </div>
                        <div class="brand_img">
                            <img src="{{ asset('/assets/images/brands/07.png') }}" alt="image-not-found"
                                style="width: 8rem;">
                        </div>
                        <div class="brand_img">
                            <img src="{{ asset('/assets/images/brands/08.png') }}" alt="image-not-found"
                                style="width: 8rem;">
                        </div>
                    </div>
                </div>
                <div class="col-12 py-5">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <div class="brand_img">
                                    <img src="{{ asset('/assets/images/brands/01.png') }}" alt="image-not-found"
                                        style="width: 8rem;">
                                </div>
                            </div>
                            <div class="brand_img">
                                <img src="{{ asset('/assets/images/brands/02.png') }}" alt="image-not-found"
                                    style="width: 8rem;">
                            </div>
                            <div class="carousel-item">
                                <div class="brand_img">
                                    <img src="{{ asset('/assets/images/brands/03.png') }}" alt="image-not-found"
                                        style="width: 8rem;">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="brand_img">
                                    <img src="{{ asset('/assets/images/brands/04.png') }}" alt="image-not-found"
                                        style="width: 8rem;">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="brand_img">
                                    <img src="{{ asset('/assets/images/brands/05.png') }}" alt="image-not-found"
                                        style="width: 8rem;">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="brand_img">
                                    <img src="{{ asset('/assets/images/brands/06.png') }}" alt="image-not-found"
                                        style="width: 8rem;">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="brand_img">
                                    <img src="{{ asset('/assets/images/brands/07.png') }}" alt="image-not-found"
                                        style="width: 8rem;">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="brand_img">
                                    <img src="{{ asset('/assets/images/brands/08.png') }}" alt="image-not-found"
                                        style="width: 8rem;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 text-center">
                    <a href="{{ route('register') }}"
                        class="js-btn-next f_btn text-white rounded-pill text-uppercase">Let's play the quiz</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
