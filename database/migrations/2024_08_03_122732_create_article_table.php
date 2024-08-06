<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->id(); // Crée une colonne `id` de type BIGINT auto-incrémentée
            $table->string('title'); // Crée une colonne `title` de type VARCHAR
            $table->text('body'); // Crée une colonne `body` de type TEXT
            $table->unsignedBigInteger('category_id'); // Crée une colonne `category_id` de type BIGINT non signé
            $table->timestamp('published_at')->nullable(); // Crée une colonne `published_at` de type TIMESTAMP, qui peut être NULL
            $table->timestamps(); // Crée les colonnes `created_at` et `updated_at`
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
