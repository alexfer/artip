<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubmissionExtra extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumns('submissions', ['is_answered', 'owner_id', 'access_code', 'user_id'])) {
            Schema::table('submissions', function (Blueprint $table) {
                $table->boolean('is_answered')->default(false)->after('id');                
                $table->integer('user_id')->default(0)->after('is_answered');
                $table->integer('owner_id')->default(0)->after('is_answered');
                $table->string('access_code')->nullable()->after('user_id');
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
        if (Schema::hasColumns('submissions', ['is_answered', 'owner_id', 'access_code', 'user_id'])) {
            Schema::table('submissions', function (Blueprint $table) {
                $table->dropColumn('is_answered');
                $table->dropColumn('owner_id');
                $table->dropColumn('user_id');
                $table->dropColumn('access_code');
            });
        }
    }

}
