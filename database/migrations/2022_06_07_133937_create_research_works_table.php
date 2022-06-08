<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_works', function (Blueprint $table) {
            $table->id();
            $table->boolean('type_training')->default(null); // Групповое или индивидуальное
            $table->text('topic'); // Тема
            $table->unsignedBigInteger('teacher_id'); // Курирующий преподаватель
            $table->json('related_items')->nullable(); // 	Связанные предметы
            $table->string('file')->nullable(); // Отчет студента (форматированный текст/док)
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
        Schema::dropIfExists('research_works');
    }
}
