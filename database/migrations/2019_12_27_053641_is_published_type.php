<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IsPublishedType extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumns('content', ['is_published', 'is_widget'])) {
            Schema::table('content', function (Blueprint $table) {
                $table->dropColumn('is_published');
                $table->dropColumn('is_widget');
            });
        }

        if (!Schema::hasColumns('content', ['is_published', 'is_widget'])) {
            Schema::table('content', function (Blueprint $table) {
                $table->boolean('is_published')->default(false)->after('id');
                $table->boolean('is_widget')->default(false)->after('is_published');
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
