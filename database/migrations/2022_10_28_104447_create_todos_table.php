<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('task', 16);
            $table->string('remarks', 32);
            $table->boolean('is_complete')->default(false);
            $table->string('task_user', 16);
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->time('deadline');
            $table->boolean('revision')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos');
    }
};
