<?php
declare(strict_types=1);

use App\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Role::create(['name' => 'USERS']);
        Role::create(['name' => 'DEALER']);
        Role::create(['name' => 'ADMINS']);
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
