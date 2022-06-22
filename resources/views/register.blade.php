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
        <div class="container-lg" style="height: 80vh">
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
            <div class="row py-3 d-flex flex-column justify-content-evenly align-items-center" style="height: 80%">
                <div class="col-12 col-sm-6">
                    <form action="{{ route('register.store') }}" method="post"
                        class="d-flex flex-column gap-3 justify-content-center">
                        @csrf

                        <input type="text" name="name" class="form-control py-3"
                            style="text-align: left!important" placeholder="Full Name">
                        <input type="text" name="email" class="form-control py-3"
                            style="text-align: left!important" placeholder="Email Address">
                        <input type="text" name="phone" class="form-control py-3"
                            style="text-align: left!important" placeholder="Phone Number">

                        <div class="d-flex gap-3 pt-5">
                            <button type="submit"
                                class="f_btn text-white rounded-pill text-uppercase shadow-none bg-white"
                                style="color: #000!important">
                                Skip
                            </button>
                            <button type="submit" class="f_btn text-white rounded-pill text-uppercase shadow-none">
                                Start
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
