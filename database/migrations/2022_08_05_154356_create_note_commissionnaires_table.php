<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Commissioner;

class CreateNoteCommissionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_commissionnaires', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Commissioner::class)
            ->constrained()
            ->cascadeOnDelete();
            $table->Integer("note");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('note_commissionnaires');
    }
}
