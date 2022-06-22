<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
/**
 * Run the migrations.
 *
 * @return void
 */
    function up() {
        Schema::create( 'users', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'name' )->nullable();
            $table->string( 'email' )->nullable();
            $table->string( 'phone' )->nullable();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    function down() {
        Schema::dropIfExists( 'users' );
    }
};
