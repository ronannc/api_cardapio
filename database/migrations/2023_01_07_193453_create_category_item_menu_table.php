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
        Schema::create( 'category_item_menu', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'name' );
            $table->unsignedBigInteger( 'company_id' );
            $table->foreign( 'company_id' )->references( 'id' )->on( 'company' );
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
        Schema::dropIfExists( 'category_iten_menu' );
    }
};
