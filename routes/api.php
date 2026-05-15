<?php
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Product Service API",
 *      description="Swagger Documentation"
 * )
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

Route::middleware('apikey')->prefix('v1')->group(function () {

    Route::post('/products', [ProductController::class, 'store']);
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/search', [ProductController::class, 'search']);
    Route::get('/products/{id}', [ProductController::class, 'show']);
    Route::get('/products/{id}/stock', [ProductController::class, 'stock']);

    Route::put('/products/{id}/update', [ProductController::class, 'updateStock']);

});