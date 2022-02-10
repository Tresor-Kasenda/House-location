<?php
declare(strict_types=1);

use App\Enums\StatusEnum;
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
            $table->string('commune');
            $table->string('town');
            $table->string('district');
            $table->string('address');
            $table->integer('guarantees');
            $table->integer('phone_number');
            $table->integer('piece_number');
            $table->string('email')->unique();
            $table->decimal('latitude')->nullable();
            $table->decimal('longitude')->nullable();
            $table->string('images');
            $table->boolean('status')->default(StatusEnum::PENDING);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('houses');
    }
};
