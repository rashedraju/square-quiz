<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square</title>
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
    <link rel="stylesheet" href="{{ asset('/assets/css/style-rtl-4.css') }}">

    <style>
        @keyframes confettiRain {
            0% {
                opacity: 1;
                margin-top: -100vh;
                margin-left: -200px;
            }

            100% {
                opacity: 1;
                margin-top: 100vh;
                margin-left: 200px;
            }
        }

        .confetti {
            opacity: 0;
            position: absolute;
            width: 1rem;
            height: 1.5rem;
            transition: 500ms ease;
            animation: confettiRain 5s infinite;
        }

        #confetti-wrapper {
            overflow: hidden !important;
        }
    </style>
</head>

<body>
    <div class="wrapper position-relative">
        <div class="container-fluid">
            <div class="row py-3">
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
                    <div class="form_content pb-3">
                        <div class="question_title pb-4">
                            <h1 class="bg-white rounded-pill">{{ $qus->qus }}
                            </h1>
                        </div>
                        <div class="form_items radio-list">
                            <div class="text-center">
                                @if ($qus->ans == $selected_ans)
                                    <div id="confetti-wrapper">
                                    </div>
                                    <h3 class="text-center greetings_text greetings_text_hero">Congratulations!</h3>
                                    <h3 class="text-center greetings_text">Your
                                        Answer is Correct.</h3>
                                    <div class="result_img">
                                        <img src='{{ asset("/assets/images/brands/{$qus->ans_img}") }}'>
                                    </div>
                                @else
                                    <h3 class="text-center incorrect_lg">Sorry! Your Answer is incorrect.</h3>
                                    <h4 class="text-center incorrect_lg">The correct answer is-</h4>
                                    <div class="result_img">
                                        <img src='{{ asset("/assets/images/brands/{$qus->ans_img}") }}'>
                                    </div>
                                @endif
                            </div>
                            <!---------- Form Button ---------->
                            <div class="form_btn d-flex justify-content-center">
                                @if (count($next_q) > 0)
                                    @php
                                        $cur_q = array_pop($next_q);
                                        $next_q = implode('_', $next_q);
                                    @endphp
                                    <a href="{{ route('quiz', ['cur_q' => $cur_q, 'next_q' => $next_q, 'user' => $user]) }}"
                                        class="js-btn-next f_btn text-white rounded-pill text-uppercase text-center"
                                        id="nextBtn">Next
                                        Quiz</a>
                                @else
                                    <a href="{{ route('score', ['user' => $user]) }}"
                                        class="js-btn-next f_btn text-white rounded-pill text-uppercase" id="nextBtn">
                                        See Your Score</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        for (i = 0; i < 100; i++) {
            // Random rotation
            var randomRotation = Math.floor(Math.random() * 360);
            // Random Scale
            var randomScale = Math.random() * 1;
            // Random width & height between 0 and viewport
            var randomWidth = Math.floor(Math.random() * Math.max(document.documentElement.clientWidth, window.innerWidth ||
                0));
            var randomHeight = Math.floor(Math.random() * Math.max(document.documentElement.clientHeight, window
                .innerHeight || 500));

            // Random animation-delay
            var randomAnimationDelay = Math.floor(Math.random() * 10);
            console.log(randomAnimationDelay);

            // Random colors
            var colors = ['#0CD977', '#FF1C1C', '#FF93DE', '#5767ED', '#FFC61C', '#8497B0']
            var randomColor = colors[Math.floor(Math.random() * colors.length)];

            // Create confetti piece
            var confetti = document.createElement('div');
            confetti.className = 'confetti';
            confetti.style.top = randomHeight + 'px';
            confetti.style.right = randomWidth + 'px';
            confetti.style.backgroundColor = randomColor;
            // confetti.style.transform='scale(' + randomScale + ')';
            confetti.style.obacity = randomScale;
            confetti.style.transform = 'skew(15deg) rotate(' + randomRotation + 'deg)';
            confetti.style.animationDelay = randomAnimationDelay + 's';
            document.getElementById("confetti-wrapper").appendChild(confetti);
        }
    </script>
</body>

</html>
