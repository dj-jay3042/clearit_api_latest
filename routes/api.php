<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\TicketController;
use App\Http\Controllers\Api\PoaController;
use App\Http\Controllers\Api\EstimateController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('data/getToken', [UserController::class, 'getToken']);
Route::prefix('/data')->middleware(['token.auth'])->group(function () {
    /**
     * @authenticated
     */
    Route::post('/createUser', [UserController::class, 'createUser']);
    Route::post('/updateUser', [UserController::class, 'updateUser']);
    Route::post('/createTicket', [TicketController::class, 'createTicket']);
    Route::post('/attachTicketDocument', [TicketController::class, 'attachTicketDocument']);
    Route::post('/createSoldTo', [TicketController::class, 'createSoldTo']);
    Route::post('/createVendor', [TicketController::class, 'createVendor']);
    Route::post('/getSoldToList', [TicketController::class, 'getSoldToList']);
    Route::post('/getTicketByAffiliateReference', [TicketController::class, 'getTicketByAffiliateReference']);
    Route::post('/getVendorList', [TicketController::class, 'getVendorList']);
    Route::post('/getDocumentUploadTypes', [TicketController::class, 'getDocumentUploadTypes']);
    Route::post('/getUser', [UserController::class, 'getUser']);
    Route::post('/getAffiliateUser', [UserController::class, 'getAffiliateUser']);
    Route::post('/poaRequest', [PoaController::class, 'poaRequest']);
    Route::post('/getCustomerTickets', [TicketController::class, 'getCustomerTickets']);
    Route::post('/getTicketInformation', [TicketController::class, 'getTicketInformation']);
    Route::post('/createUserBondApplication', [UserController::class, 'createUserBondApplication']);
    Route::post('/saveUserBondReference', [UserController::class, 'saveUserBondReference']);
    Route::post('/attachUserDocument', [UserController::class, 'attachUserDocument']);
    Route::post('/getImportEstimate', [EstimateController::class, 'getImportEstimate']);
    Route::post('/getEstimate', [EstimateController::class, 'getEstimate']);
    Route::post('/lookupHTSCode', [EstimateController::class, 'lookupHTSCode']);
    Route::post('/searchHTSCode', [EstimateController::class, 'searchHTSCode']);
    Route::post('/getHTSCodeRequirement', [EstimateController::class, 'getHTSCodeRequirement']);
    Route::post('/createChatMessage', [UserController::class, 'createChatMessage']);
    Route::post('/getChatMessages', [UserController::class, 'getChatMessages']);
    Route::post('/poaReset', [PoaController::class, 'poaReset']);
    Route::post('/saveAffiliatePoa', [PoaController::class, 'saveAffiliatePoa']);
    Route::post('/updateAffiliatePoa', [PoaController::class, 'updateAffiliatePoa']);
});
