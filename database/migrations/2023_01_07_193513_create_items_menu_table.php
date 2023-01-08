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
        Schema::create( 'items_menu', function ( Blueprint $table ) {
            $table->id();
            $table->unsignedBigInteger( 'menu_id' );
            $table->foreign( 'menu_id' )->references( 'id' )->on( 'menu' );
            $table->unsignedBigInteger( 'category_item_menu_id' );
            $table->foreign( 'category_item_menu_id' )->references( 'id' )->on( 'category_item_menu' );
            $table->string( 'name' );
            $table->string( 'description' )->nullable();
            $table->double( 'value' );
            $table->string( 'url_image' )->nullable();
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
        Schema::dropIfExists( 'itens_menu' );
    }
};
