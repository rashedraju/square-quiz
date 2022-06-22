<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create( 'quses', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'qus' );
            $table->string( 'ans_1' );
            $table->string( 'ans_2' );
            $table->string( 'ans_3' );
            $table->integer( 'ans' );
            $table->string( 'ans_img' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'quses' );
    }
};
