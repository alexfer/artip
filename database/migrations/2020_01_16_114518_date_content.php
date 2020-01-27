<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DateContent extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumns('content', ['date'])) {
            Schema::table('content', function (Blueprint $table) {
                $table->date('date')->nullable()->after('content_type_id');
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
        if (Schema::hasColumns('content', ['date'])) {
            Schema::table('content', function (Blueprint $table) {
                $table->dropColumn('date');
            });
        }
    }

}
