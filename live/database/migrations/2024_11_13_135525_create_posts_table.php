<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->uuid('public_id')->unique();
            $table->string('title');
            $table->string('content');
            $table->string('slug');
            $table->foreignId('author_id')->constrained(
                table: 'users',
                indexName: 'posts_user_id'
            );
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
