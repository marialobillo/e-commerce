<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use App\Models\User;
use App\Models\Category;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_can_create_categories()
    {
        $this->withoutExceptionHandling();

        // create an user 
        $user = User::factory()->create();

        // make a post request to a route to create a category
        $response = $this
            ->followingRedirects()
            ->actingAs($user)
            ->post(route('categories.store'), [
            'category_name' => 'Category 1'
        ]);

        $category = Category::first();

        $this->assertEquals(1, Category::count());
        $this->assertEquals('Category 1', $category->category_name);

        $response->assertSeeText('Category 1');
        $this->assertEquals(route('categories.index'), url()->current());
    }

     /**
     * @xtest
     */
    public function only_authenticated_users_can_create_new_categories()
    {
        $this->withoutExceptionHandling();

        // make a post request to a route to create a category
        $response = $this
            ->followingRedirects()
            ->actingAs($user)
            ->post(route('categories.store'), [
            'category_name' => 'Category 1'
        ]);

        $category = Category::first();

        $this->assertEquals(0, Category::count());

        $response->assertSeeText('Login');
        $this->assertEquals(route('login'), url()->current());
    }
}
