<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('bully_type_id');
            $table->string('title');
            $table->text('bully_desc');
            $table->text('suspect_name');
            $table->integer('suspect_total')->default(1);
            $table->text('victim_name');
            $table->integer('victim_total')->default(1);
            $table->string('evidence_img')->nullable();
            $table->string('place')->nullable();
            $table->string('date')->nullable();
            $table->string('incident_total')->nullable();
            $table->string('status');
            $table->integer('isAnonym');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('reports');
    }
};