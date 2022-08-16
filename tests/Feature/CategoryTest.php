<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Enums\UserRoleEnum;
use App\Models\Category;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_example()
    {
        $user = User::factory()->create([
            'role_id' => UserRoleEnum::ADMINS_ROLE
        ]);
        $this->actingAs($user);

        $categories = Category::factory()->create();

        $response = $this->get(route('admins.categories.index', compact('categories')));

        $response->assertStatus(200);
    }
}
