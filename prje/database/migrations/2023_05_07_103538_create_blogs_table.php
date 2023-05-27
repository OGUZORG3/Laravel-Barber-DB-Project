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

            Schema::create('blogs', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->timestamps();
                $table->string('blog_title')->nullable();
                $table->string('blog_slug')->nullable();
                $table->string('blog_file')->nullable();
                $table->integer('blog_must')->nullable();
                $table->text('blog_content')->nullable();
                $table->enum('blog_status',['0','1'])->default(1);
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
