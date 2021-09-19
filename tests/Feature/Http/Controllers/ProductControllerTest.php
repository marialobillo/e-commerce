<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_can_create_products_with_category()
    {
        $this->withoutExceptionHandling();

        // create an user 
        $user = User::factory()->create();
        $category = Category::factory()->create();

        // make a post request to a route to create a category
        $response = $this
            ->followingRedirects()
            ->actingAs($user)
            ->post(route('products.store'), [
            'product_name' => 'Red Hat',
            'product_price' => '1500',
            'status' => 1,
            'category_id' => 1,
        ]);

        $product = Product::first();

        $this->assertEquals(1, Product::count());
        $this->assertEquals('Red Hat', $product->product_name);
        $this->assertEquals('1500', $product->product_price);
        $this->assertEquals(1, $product->status);
        $this->assertEquals($category->id, $product->category_id);

        $response->assertSeeText('Red Hat');
        $this->assertEquals(route('products.index'), url()->current());
    }



    /**
     * @xtest
     */
    public function only_authenticated_users_can_create_new_products()
    {
        $this->withoutExceptionHandling();

        // create an user 
       
        $category = Category::factory()->create();

        // make a post request to a route to create a category
        $response = $this
            ->followingRedirects()
            ->actingAs($user)
            ->post(route('products.store'), [
            'product_name' => 'Red Hat',
            'product_price' => '1500',
            'status' => 1,
            'category_id' => 1,
        ]);

        $product = Product::first();

        $this->assertEquals(0, Product::count());
        

        $response->assertSeeText('Login');
        $this->assertEquals(route('login'), url()->current());
    }
}
