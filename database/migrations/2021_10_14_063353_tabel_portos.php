<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelPortos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Portos', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('content', 500);
            $table->string('image', 100);
            $table->timestamps();
            $table->integer('status');
        });

        DB::table('Portos')->insert(
            array(
                'title' => 'Portfolio',
                'content' => 'Sebuah aplikasi untuk merekrut karyawan dengan seleksi berupa test tulis, test koding dan wawancara. Pembuatan aplikasi ini menggunakan framework Laravel dan masih dalam proses penyelesaian waktu sekitar 2.5 bulan.',
                'image' => '3.png;o.png',
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
