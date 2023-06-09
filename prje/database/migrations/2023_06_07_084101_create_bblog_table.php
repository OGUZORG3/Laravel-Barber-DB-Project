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
        Schema::create('berber_blogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('blog_title')->nullable();
            $table->string('blog_slug')->nullable();
            $table->string('blog_file')->nullable();
            $table->string('blog_creator_id')->nullable();
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
        Schema::dropIfExists('_bblog');
    }
};
