<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('point_depart');
            $table->string('point_destination');
            $table->integer('nombre_place_taxi');
            $table->datetime('heure_depart');
            $table->datetime('heure_arrive');
            $table->decimal('prix_chauffeur', 10, 2);
            $table->decimal('prix_passager', 10, 2);
            $table->string('send_annonce');
            $table->boolean('deplacement_ville')->default(true);
            $table->string('boulevard')->nullable();
            $table->string('rue')->nullable();
            $table->string('quartier')->nullable();
            $table->string('type_vehicule');
            $table->string('couleur_vehicule');
            $table->string('matricule_vehicule');
            $table->string('image')->nullable();
            $table->boolean('disponible')->default(true);
            $table->enum('statut', ['active', 'terminee'])->default('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('annonces');
    }
};
