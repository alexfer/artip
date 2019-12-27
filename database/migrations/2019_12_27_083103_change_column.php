<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumn extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumns('media', ['owner_id'])) {
            Schema::table('media', function (Blueprint $table) {
                $table->dropColumn('owner_id');
            });
        }

        if (!Schema::hasColumns('media', ['size'])) {
            Schema::table('media', function (Blueprint $table) {
                $table->integer('size')->default(0)->after('id');
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
        //
    }

}
