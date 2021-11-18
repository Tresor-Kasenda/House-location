<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->integer('price_per_month');
            $table->string('address');
            $table->integer('guarantees');
            $table->integer('phone_number');
            $table->string('email')->unique();
            $table->decimal('latitude')->nullable();
            $table->decimal('longitude')->nullable();
            $table->string('picture');
            $table->string('commune');
            $table->string('town');
            $table->string('district');
            $table->integer('piece_number');
            $table->text('characteristic');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('houses');
    }
};
