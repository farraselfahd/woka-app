<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWorkersDescription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('workers', function (Blueprint $table) {
        //     $table->string('description');
        // });

        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['requirements','deskripsi']);
        });

        Schema::table('services', function (Blueprint $table) {
            $table->longText('description');
            $table->longText('requirements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('workers', function (Blueprint $table) {
            //
        });
    }
}
