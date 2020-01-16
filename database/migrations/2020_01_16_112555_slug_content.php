<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SlugContent extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumns('content', ['slug'])) {
            Schema::table('content', function (Blueprint $table) {
                $table->string('slug')->nullable()->after('content_type_id');
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
        if (Schema::hasColumns('content', ['slug'])) {
            Schema::table('content', function (Blueprint $table) {
                $table->dropColumn('slug');
            });
        }
    }

}
