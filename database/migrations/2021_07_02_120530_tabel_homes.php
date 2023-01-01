<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelHomes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Homes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('content', 500);
            $table->string('image', 100);
            $table->timestamps();
            $table->integer('status');
        });

        DB::table('Homes')->insert(
            array(
                'title' => 'Home',
                'content' => 'Perkenalkan nama saya Galiley Singgang Mangkuluhur Yasimaru dan saya seorang mahasiswa Politeknik Negeri Malang Jurusan Teknologi Informasi Program Studi Teknik Informatika Jenjang D-IV',
                'image' => 'aku.png',
                'created_at' => date('y-m-d', time()),
                'updated_at' => date('y-m-d', time()),
                'status' => 1
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Homes');
    }
}
