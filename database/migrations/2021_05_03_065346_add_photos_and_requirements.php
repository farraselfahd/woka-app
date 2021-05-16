<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhotosAndRequirements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('pic_1');
            $table->string('pic_2')->nullable();
            $table->string('pic_3')->nullable();
            $table->string('vid_4');
            $table->string('requirements');
            $table->string('ket_pil1');
            $table->string('ket_pil2')->nullable();
            $table->string('ket_pil3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            //
        });
    }
}
