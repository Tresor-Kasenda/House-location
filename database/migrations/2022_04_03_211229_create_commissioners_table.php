<?php
declare(strict_types=1);

use App\Enums\StatusEnum;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('commissioners', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->foreignIdFor(User::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('phoneNumber')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('images')->nullable();
            $table->string('email')->unique()->nullable();
            $table->boolean('status')->default(StatusEnum::PENDING);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('commissioners');
    }
};
