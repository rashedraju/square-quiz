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
    <link rel="stylesheet" href="{{ asset('/assets/css/v3/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style-rtl.css') }}">
</head>

<body>
    <div class="wrapper position-relative">
        <div class="container-fluid">
            <div class="row py-3 logo_wrapper">
                <div class="row py-3 logo_wrapper" style="height: 20%">
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
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="multisteps_form_panel active">
                    <!-- Form-content -->
                    <div class="form_content">
                        <div class="form_items radio-list">
                            <div class="text-center">
                                <h3 class="text-center greetings_text text-white"
                                    style="font-size: 2rem; padding: 2rem 0;">Congratulations!</h3>
                                <h4 class="text-center greetings_text">Your score is-</h4>
                                <h1 class="text-center greetings_text">{{ $score }}</h1>

                            </div>
                            <!---------- Form Button ---------->
                            <div class="form_btn d-flex justify-content-center">
                                <a href="{{ route('home') }}"
                                    class="js-btn-next f_btn text-white rounded-pill text-uppercase" id="nextBtn">
                                    Play again <span><i class="fas fa-arrow-left"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
