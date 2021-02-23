<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Photos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->default('');
            $table->string('type')->nullable();
            $table->string('categorie')->nullable();
            $table->boolean('produit')->nullable();
            $table->boolean('humain')->nullable();
            $table->boolean('institutionnelle')->nullable();
            $table->string('format')->nullable();
            $table->string('credits')->nullable();
            $table->boolean('droits')->nullable();
            $table->boolean('copyright')->nullable();
            $table->date('dtn_fin_droits')->nullable();
            $table->string('url_photo')->nullable();
<<<<<<< HEAD
            $table->timestamps();

=======
>>>>>>> 3c0cdbc408236583527f127b5d06ef3db6849725
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
