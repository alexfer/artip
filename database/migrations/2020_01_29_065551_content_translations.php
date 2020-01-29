<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContentTranslations extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('content_id');
            $table->char('locale', 2)->default('en');
            $table->string('title');            
            $table->text('translation')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_translations');
    }

}
