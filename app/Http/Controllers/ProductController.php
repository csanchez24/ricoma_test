<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Http\Resources\Product as ProductResource;
use App\Http\Resources\InventoryCollection as InventoryCollectionResource;


class ProductController extends Controller
{
    

    /**
     * Show the product for the given id.
     *
     * @param  int  $id
     * @return Json
     */
    public function show($id){
        return new ProductResource(Product::findOrFail($id));
    }

    /**
     * Show the user's products for the given user_id.
     *
     * @param  int  $id
     * @return Json
     */
    public function userProducts($id){
        $user = User::findOrFail($id);
        return new InventoryCollectionResource($user->inventories);
    }

    /**
     * Create a new product.
     *
     * @param  Request  $name,brand_id
     * @return Json
     */
    public function store(Request $request){
        try{
            $product = Product::create($request->all());
            return response()->json(['data'=>$product], 201);
        }catch (\Exception $e){
            return response()->json([ 'data' => "Can't create that resource"], 404);
        }
    }

    /**
     * Delete the product for the given id.
     *
     * @param  Product  $id
     * @return Json
     */
    public function delete(Product $product){
        try{
            $product->delete();
            return response()->json(null, 204);
        }catch (\Exception $e){
            return response()->json([ 'data' => "Can't delete that resource" ], 404);
        }
    }
    

}
