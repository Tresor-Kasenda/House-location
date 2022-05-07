<?php
declare(strict_types=1);

use App\Models\House;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(House::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('chamberNumber')->nullable();
            $table->string('electricity')->nullable();
            $table->string('')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('details');
    }
};
