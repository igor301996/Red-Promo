<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id');
            $table->text('information_about_discipline'); // Общая информация о дисциплине
            $table->text('summary_topic'); // Аннотация
            $table->json('structure')->nullable(); // Структура
            $table->json('self_training')->nullable(); // Самоподготовка
            $table->json('list_developed_competencies')->nullable(); // Перечень развиваемых компетенций
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
        Schema::dropIfExists('subjects');
    }
}
