<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Validator;

use App\User;

class ProductController extends Controller
{
    /**
     * @OA\Get(
     ** path="/v1/products",
     *   tags={"Products"},
     *   summary="List all products",
     *   operationId="products.index",
     *   security={{"passport": {}}},
     *
     *   @OA\Parameter(
     *      name="status",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *           type="string"
     *      )
     *   ),
     *   @OA\Response(
     *      response=200,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   )
     *)
     **/
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $product = collect([[
            "id" => 1,
            "name" => "Product 1"
        ],[
            "id" => 2,
            "name" => "Product 2"
        ]]);
        return response()->json($product)->setStatusCode(Response::HTTP_ACCEPTED);
    }

}
