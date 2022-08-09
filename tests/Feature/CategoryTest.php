<?php

declare(strict_types=1);

namespace Tests\Feature;

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
        $user = User::factory()->create();
        $this->actingAs($user);

        $categories = Category::factory()->create();

        $response = $this->get(route('admins.categories.index'));

        $response->assertStatus(200)
            ->assertCreated();
    }
}
