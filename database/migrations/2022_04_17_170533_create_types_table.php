<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        \App\Models\Type::query()
            ->create([
                'name' => 'a vendre'
            ]);

        \App\Models\Type::query()
            ->create([
                'name' => 'a louer'
            ]);
    }

    public function down()
    {
        Schema::dropIfExists('types');
    }
};
