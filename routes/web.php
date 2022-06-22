<?php

use App\Models\QuizAns;
use App\Models\Qus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get( '/', function () {
    return view( 'home' );
} )->name( 'home' );

Route::get( '/register', function () {
    return view( 'register' );
} )->name( 'register' );

Route::post( '/register', function ( Request $request ) {
    $user = User::create( $request->only( ['name', 'email', 'phone'] ) );

    $next_q = Qus::inRandomOrder()->take( 3 )->get()->map( fn( $q ) => $q->id )->toArray();

    $cur_q = array_pop( $next_q );

    $next_q = implode( "_", $next_q );

    return redirect()->route( 'quiz', ['user' => $user->id, 'cur_q' => $cur_q, 'next_q' => $next_q] );
} )->name( 'register.store' );

Route::get( '/quiz', function ( Request $request ) {
    if ( $request->user && $user = User::find( $request->user ) ) {
        $next_q = explode( "_", $request->next_q );

        $totalNoQus = 3;
        if ( $request->next_q ) {
            $curQNo = 3 - count( $next_q );
        } else {
            $curQNo = 3;
        }
        $qus = Qus::find( $request->cur_q );

        $next_q = implode( "_", $next_q );

        return view( 'quiz', ['user' => $user, 'qus' => $qus, 'totalNoQus' => $totalNoQus, 'curQNo' => $curQNo, 'next_q' => $next_q] );
    }

    return redirect()->route( 'home' );

} )->name( 'quiz' );

Route::post( '/qus', function ( Request $request ) {
    $next_q = explode( "_", $request->next_q );
    $cur_qus = Qus::find( $request->qus_no );
    $qus = $cur_qus->id;

    $selected_ans = $request->selected_ans;

    $user = User::find( $request->user );

    if ( !$selected_ans ) {

        $cur_q = array_pop( $next_q );

        $next_q = implode( "_", $next_q );

        if ( $next_q != "" ) {
            return redirect()->route( 'quiz', ['user' => $user->id, 'cur_q' => $cur_q, 'next_q' => $next_q] );
        }
        return redirect()->route( 'score', ['user' => $user->id] );
    } else if ( $selected_ans && $selected_ans == $cur_qus->ans ) {
        $user_ans = QuizAns::where( 'user_id', $request->user )->first();
        if ( !$user_ans ) {
            $user_ans = QuizAns::create( ['user_id' => $request->user] );
        }

        $user_ans->update( ['score' => $user_ans->score + 1] );
    }

    $next_q = implode( "_", $next_q );

    return redirect()->route( 'result', ['qus' => $qus, 'selected_ans' => $selected_ans, 'next_q' => $next_q, 'user' => $user] );

} )->name( 'quiz.store' );

Route::get( '/result', function ( Request $request ) {

    $user = $request->user;

    if ( $request->qus && $request->selected_ans ) {
        $selected_ans = $request->selected_ans;

        if ( $request->next_q ) {
            $next_q = explode( "_", $request->next_q );
        } else {
            $next_q = [];
        }

        $cur_q = $request->qus;

        $totalNoQus = 3;
        $curQNo = 3 - count( $next_q );
        $qus = Qus::find( $cur_q );

        return view( 'result', compact( ['qus', 'totalNoQus', 'curQNo', 'selected_ans', 'next_q', 'user'] ) );
    }

    return redirect()->route( 'quiz' );
} )->name( 'result' );

Route::get( '/score', function ( Request $request ) {
    $user_id = $request->user;
    $score = QuizAns::where( 'user_id', $user_id )->first();
    $score = $score?->score ?? 0;

    return view( 'score', ['score' => $score] );
} )->name( 'score' );
