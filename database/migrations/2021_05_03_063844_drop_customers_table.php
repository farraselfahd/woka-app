<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('orders', function (Blueprint $table) {
        //     $table->dropColumn('customers_id');
        // });

        // Schema::table('orders', function (Blueprint $table) {
        //     $table->foreignId('customer_id')->nullable()->constrained('users');
        // });

        // Schema::drop('customers');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            //
        });
    }
}
