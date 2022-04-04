<?php
declare(strict_types=1);

use App\Enums\StatusEnum;
use App\Models\House;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->foreignIdFor(User::class)
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(House::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->boolean('status')->default(StatusEnum::PENDING);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
