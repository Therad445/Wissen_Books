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
        // Файл миграции для таблицы Книг (Books)
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('author_id')->on('authors');
            $table->string('isbn')->nullable();
            $table->unsignedBigInteger('publisher_id')->nullable();
            $table->foreign('publisher_id')->references('publisher_id')->on('publishers');
            $table->integer('publication_year')->nullable();
            $table->unsignedBigInteger('genre_id')->nullable();
            $table->foreign('genre_id')->references('genre_id')->on('genres');
            $table->text('description')->nullable();
            $table->text('cover_image_url')->nullable();
            $table->timestamps();
        });

        // Файл миграции для таблицы Авторов (Authors)
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->text('biography')->nullable();
            $table->timestamps();
        });

        // Файл миграции для таблицы Издательств (Publishers)
        Schema::create('publishers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('address')->nullable();
            $table->text('contact_info')->nullable();
            $table->timestamps();
        });

        // Файл миграции для таблицы Жанров (Genres)
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
