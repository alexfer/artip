<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryOrder extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumns('category', ['order'])) {
            Schema::table('category', function (Blueprint $table) {
                $table->integer('order')->default(0)->after('slug');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumns('category', ['order'])) {
            Schema::table('category', function (Blueprint $table) {
                $table->dropColumn('order');
            });
        }
    }

}
