<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * One to many relationship tutorial
     * scratchcode.io
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->integer('post_id')->unsigned();
            $table->string("comment");
            $table->timestamps();
 
        
        });

        Schema::table('comments', function($table)
        {
            /*@ Connect comment table's post_id with post table's id field */
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });

    }
 
    /**
     * Reverse the migrations.
     * One to many relationship tutorial
     * scratchcode.io
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
