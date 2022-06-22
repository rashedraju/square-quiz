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
    <link rel="stylesheet" href="{{ asset('/assets/css/style-rtl.css') }}">
</head>

<body>
    <div class="wrapper position-relative">
        <div class="container-lg" style="height: 100vh">
            <div class="row py-3" style="height: 20%">
                <div class="col-12 d-flex justify-content-between">
                    <div class="logo_area">
                        <img src="{{ asset('/assets/images/brands/09.png') }}" alt="image-not-found"
                            style="width: 13rem;">
                    </div>
                    <div class="logo_area">
                        <a href="{{ route('home') }}"><img src="{{ asset('/assets/images/brands/10.png') }}" alt="image-not-found"
                            style="width: 4.5rem;"></a>
                    </div>
                </div>
            </div>
            <div class="row py-3 d-flex flex-column justify-content-evenly align-items-center" style="height: 80%">
                <div class="col-12 col-sm-6">
                    <div class="row my-5">
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('/assets/images/brands/01.png') }}" alt="image-not-found"
                                style="width: 10rem;">
                        </div>
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('/assets/images/brands/02.png') }}" alt="image-not-found"
                                style="width: 10rem;">
                        </div>
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('/assets/images/brands/03.png') }}" alt="image-not-found"
                                style="width: 10rem;">
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('/assets/images/brands/04.png') }}" alt="image-not-found"
                                style="width: 10rem;">
                        </div>
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('/assets/images/brands/10.png') }}" alt="image-not-found"
                                style="width: 4rem;">
                        </div>
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('/assets/images/brands/05.png') }}" alt="image-not-found"
                                style="width: 10rem;">
                        </div>

                    </div>

                    <div class="row my-5">
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('/assets/images/brands/06.png') }}" alt="image-not-found"
                                style="width: 10rem;">
                        </div>
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('/assets/images/brands/07.png') }}" alt="image-not-found"
                                style="width: 10rem;">
                        </div>
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('/assets/images/brands/08.png') }}" alt="image-not-found"
                                style="width: 10rem;">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 text-center">
                    <a href="{{ route('register') }}"
                        class="js-btn-next f_btn text-white rounded-pill text-uppercase">Let's play the quiz <span><i
                                class="fas fa-arrow-left"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>