<?php

declare(strict_types=1);

use App\Models\Type;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('houses', function (Blueprint $table) {
            $table->foreignIdFor(Type::class)
                ->constrained()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::table('house_migration', function (Blueprint $table) {
            $table->dropColumn('type_id');
        });
    }
};
