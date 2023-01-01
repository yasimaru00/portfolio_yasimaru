<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelAbouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('content', 500);
            $table->string('image', 100);
            $table->timestamps();
            $table->integer('status');
        });

        DB::table('Abouts')->insert(
            array(
                'title' => 'About me',
                'content' => 'Saya seorang pengembang web dengan pengetahuan yang baik tentang teknik Front-End dan Back-End. Saya terbiasa merapikan kode program serta suka menghabiskan waktu untuk memperbaiki detail kecil dan mengoptimalkan aplikasi web. Saya juga suka bekerja dalam tim.',
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
        //
    }
}
