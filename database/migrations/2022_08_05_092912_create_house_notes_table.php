<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
Use App\Models\House;
Use App\Models\User;

return new class extends Migration
{
    public function up()
    {
        Schema::create('house_notes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(House::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->integer('note');
            $table->string('comment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('house_notes');
    }
};
