<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Enums\UserRoleEnum;
use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function testGetCategories()
    {
        $user = User::factory()->create([
            'role_id' => UserRoleEnum::ADMINS_ROLE,
        ]);
        $this->actingAs($user);

        $categories = Category::factory()->create();

        $response = $this->get(route('admins.categories.index', compact('categories')));

        $response->assertOk()
            ->assertStatus(Response::HTTP_OK)
            ->assertSee('categories');
    }

    public function testCreatedCategory()
    {
        $user = User::factory()->create([
            'role_id' => UserRoleEnum::ADMINS_ROLE,
        ]);
        $this->actingAs($user);

        $categories = Category::factory(3)->create();

        $response = $this->post(route('admins.categories.store'), [
            'name' => 'Biscuit',
        ]);

        $response->assertOk();
    }
}
