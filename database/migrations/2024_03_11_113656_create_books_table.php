<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Запуск миграции
    public function up()
    {
        //  Таблица Авторов
        Schema::create('authors', function (Blueprint $table) {
            $table->id('author_id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->text('biography')->nullable();
            $table->timestamps();
        });

        //  Таблица Издателей
        Schema::create('publishers', function (Blueprint $table) {
            $table->id('publisher_id');
            $table->string('name', 100);
            $table->text('address')->nullable();
            $table->text('contact_info')->nullable();
            $table->timestamps();
        });

        //  Таблица Жанры
        Schema::create('genres', function (Blueprint $table) {
            $table->id('genre_id');
            $table->string('name', 50);
            $table->timestamps();
        });

        //  Таблица Книги
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('title', 255);
            $table->unsignedBigInteger('author_id');
            $table->string('isbn', 20)->nullable();
            $table->unsignedBigInteger('publisher_id')->nullable();
            $table->integer('publication_year')->nullable();
            $table->unsignedBigInteger('genre_id')->nullable();
            $table->text('description')->nullable();
            $table->text('cover_image_url')->nullable();

            $table->foreign('author_id')->references('author_id')->on('authors')->onDelete('cascade');
            $table->foreign('publisher_id')->references('publisher_id')->on('publishers')->onDelete('set null');
            $table->foreign('genre_id')->references('genre_id')->on('genres')->onDelete('set null');

            $table->timestamps();
        });
    }

    // Откат миграции
    public function down()
    {
        Schema::dropIfExists('books');
        Schema::dropIfExists('genres');
        Schema::dropIfExists('publishers');
        Schema::dropIfExists('authors');
    }
};
