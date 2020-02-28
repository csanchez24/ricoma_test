<?php

namespace Tests\Feature;

use App\Brand;
use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test create product.
     *
     * @return void
     */
    public function testCreateProduct()
    {
        $brand = factory(Brand::class)->create();
        $product = ['name'=>'Prueba','brand_id'=>$brand->id];
        $response = $this->json('POST','/api/product',$product);

        $response->assertStatus(201)
                 ->assertJsonStructure([
                     'data' => [
                         'name',
                         'brand_id',
                         'updated_at',
                         'created_at',
                         'id',
                     ]
                 ]);
    }

    /**
     * A basic feature test show function.
     *
     * @return void
     */
    public function testShow()
    {
        $brand = factory(Brand::class)->create();
        $product = factory(Product::class)->create();
        $response = $this->json('GET','/api/product/'.$product->id);
        $response->assertStatus(200)
                 ->assertJsonStructure([
                    'data' => [
                        'id',
                        'name',
                        'brand',
                    ]
                ]);
    }


}
