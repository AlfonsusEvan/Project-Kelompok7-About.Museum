<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('images1');
            $table->string('images2');
            $table->string('images3');
            $table->string('images4');
            $table->string('images5');
            $table->string('images6');
            $table->string('judul1');
            $table->text('isi1');
            $table->string('judul2');
            $table->string('event');
            $table->text('tiket');
            $table->string('jadwal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
