<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExtraColumnsMedia extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumns('media', ['name', 'extension'])) {
            Schema::table('media', function (Blueprint $table) {
                $table->string('name')->nullable()->after('path');
                $table->string('extension')->nullable()->after('name');
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
        if (Schema::hasColumns('media', ['name', 'extension'])) {
            Schema::table('media', function (Blueprint $table) {
                $table->dropColumn('name');
                $table->dropColumn('extension');
            });
        }
    }

}
