<?php

namespace App\Http\Controllers\API\User;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Validator;
use App\Http\Resources\UserResource;
use Illuminate\Http\JsonResponse;

class UserController extends BaseController {

    /**
     * 
     * @return type
     */
    public function index() {
        $dataClass = User::all();
        return $this->sendResponse(UserResource::collection($dataClass), 'User retrieved successfully.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $input = $request->all();
    }

    /**
     * Display the specified resource.
     */
    public function show($id): JsonResponse {

        $product = User::find($id);

        if (is_null($product)) {
            return $this->sendError('Product not found.');
        }

        return $this->sendResponse(new UserResource($product), 'User retrieved successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        //
    }

    public function clears($param) {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        $input = $request->all();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        $id->delete();

        return $this->sendResponse([], 'Product deleted successfully.');
    }
}
