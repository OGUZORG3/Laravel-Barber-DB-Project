<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

            Schema::create('pages', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->timestamps();
                $table->string('page_title')->nullable();
                $table->string('page_slug')->nullable();
                $table->string('page_file')->nullable();
                $table->integer('page_must')->nullable();
                $table->text('page_content')->nullable();
                $table->enum('page_status',['0','1'])->default(1);
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
