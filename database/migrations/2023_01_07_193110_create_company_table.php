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
    public function up()
    {
        Schema::create( 'company', function ( Blueprint $table ) {
            $table->id();
            $table->unsignedBigInteger( 'group_id' );
            $table->foreign( 'group_id' )->references( 'id' )->on( 'group' );
            $table->string( 'name' );
            $table->string( 'description' )->nullable();
            $table->string( 'url_logo' )->nullable();
            $table->time( 'star_hours' );
            $table->time( 'finish_hours' );
            $table->timestamps();
        } );
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'company' );
    }
};
