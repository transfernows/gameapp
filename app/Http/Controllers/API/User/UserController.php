<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Product;
use Validator;
use App\Http\Resources\ProductResource;
use Illuminate\Http\JsonResponse;
   
class UserController extends BaseController
{
 
    public function index(): JsonResponse
    {
        $products = Product::all();
       
        return $this->sendResponse(ProductResource::collection($products), 'Products retrieved successfully.');
    }
    
}