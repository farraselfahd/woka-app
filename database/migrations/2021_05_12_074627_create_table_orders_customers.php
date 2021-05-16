<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrdersCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('no_identitas')->unique()->nullable();
            $table->enum('jenis_kelamin', ['pria', 'wanita'])->nullable();
            $table->string('no_hp')->unique()->nullable();
            $table->string('alamat')->nullable();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->enum('status',['proses','selesai','antri','menunggu','ditolak']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
        Schema::dropIfExists('orders');
    }
}
