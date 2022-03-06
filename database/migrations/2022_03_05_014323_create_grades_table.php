<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('quartile');
            $table->string('course_name');
            $table->string('test_name');
            $table->decimal('lowest_passing_grade')->default(5.5)->comment('Lowest grade to pass
            so average calculations can be applied');
            $table->decimal('ec');
            $table->decimal('best_grade')->nullable();
            $table->string('class')->default('inprogress');
            $table->date('passed_at')->nullable();
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
        Schema::dropIfExists('grades');
    }
}
