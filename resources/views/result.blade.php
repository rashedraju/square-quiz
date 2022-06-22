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
    <link rel="stylesheet" href="{{ asset('/assets/css/style-rtl.css') }}">
</head>

<body>
    <div class="wrapper position-relative">
        <div class="container-fluid">
            <div class="row py-3">
                <div class="row py-3" style="height: 20%">
                    <div class="col-12 d-flex justify-content-between">
                        <div class="logo_area">
                            <img src="{{ asset('/assets/images/brands/09.png') }}" alt="image-not-found"
                                style="width: 13rem;">
                        </div>
                        <div class="logo_area">
                            <a href="{{ route('home') }}"><img src="{{ asset('/assets/images/brands/10.png') }}"
                                    alt="image-not-found" style="width: 4.5rem;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 count_wrapper">
                    <div class="count_box overflow-hidden rounded-pill d-flex float-start my-2">
                        <div class="count_clock ps-2">
                            <img src="{{ asset('/assets/images/counter/clock.png') }}" alt="image_not_found">
                        </div>
                        <div class="count_title px-1">
                            <h4>Quiz</h4>
                            <h5>Time start</h5>
                        </div>
                        <h3 class="count_number rounded-pill bg-white overflow-hidden text-center countdown_timer"
                            id="count_down_timer">60
                        </h3>
                    </div>
                </div>
                <!-- Step-progress-bar -->
                <div class="progress_bar d-flex">
                    <div class="step active current"></div>
                    <div class="step"></div>
                    <div class="step"></div>
                    <div class="step"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="multisteps_form_panel active">
                    <!-- Form-content -->
                    <div class="form_content">
                        <div class="question_title pb-4">
                            <h1 class="bg-white rounded-pill">{{ $qus->qus }}
                            </h1>
                            <!-- Step-Progress-bar area -->
                            <div class="step_progress_bar position-absolute">
                                <div class="step position-relative" style="background-color: #198754;"></div>
                                <div class="step position-relative" style="background-color: #198754;"></div>
                                <div class="step position-relative" style="background-color: #198754;"></div>
                            </div>
                        </div>
                        <div class="form_items radio-list">
                            <div class="text-center">
                                @if ($qus->ans == $selected_ans)
                                    <h3 class="text-center">Congratulations! Your Answer is Correct.</h3>
                                    <div class="result_img">
                                        <img src='{{ asset("/assets/images/brands/{$qus->ans_img}") }}'>
                                    </div>
                                @else
                                    <h3 class="text-center">Sorry! Your Answer is incorrect.</h3>
                                    <h4 class="text-center">The correct answer is-</h4>
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
                                        class="js-btn-next f_btn text-white rounded-pill text-uppercase"
                                        id="nextBtn">Next
                                        Quiz <span><i class="fas fa-arrow-left"></i></span></a>
                                @else
                                    <a href="{{ route('score', ['user' => $user]) }}"
                                        class="js-btn-next f_btn text-white rounded-pill text-uppercase" id="nextBtn">
                                        See Your Score <span><i class="fas fa-arrow-left"></i></span></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Set the date we're counting down to
        var distance = 60;

        // Update the count down every 1 second
        var x = setInterval(function() {

            distance -= 1;
            // Display the result in the element with id="demo"
            document.getElementById("count_down_timer").innerHTML = distance;

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("count_down_timer").innerHTML = "00";
            }
        }, 1000);


        var opt1 = document.getElementById('opt_1')
        var opt2 = document.getElementById('opt_2')
        var opt3 = document.getElementById('opt_3')
        var selected_ans = document.getElementById('selected_ans')

        opt1.addEventListener('click', function() {
            opt1.classList.add('active');
            opt2.classList.remove('active');
            opt3.classList.remove('active');
            selected_ans.value = 1;
        })

        opt2.addEventListener('click', function() {
            opt1.classList.remove('active');
            opt2.classList.add('active');
            opt3.classList.remove('active');
            selected_ans.value = 2;
        })
        opt3.addEventListener('click', function() {
            opt1.classList.remove('active');
            opt2.classList.remove('active');
            opt3.classList.add('active');
            selected_ans.value = 3;
        })
    </script>
</body>

</html>
