<?php

use App\Http\Controllers\ActifController;
use App\Http\Controllers\LogicielController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\EmploiDeTempsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\AuthController;

//rest api ticket
Route::get('tickets', [TicketController::class, 'index']);
Route::get('tickets/{id}', [TicketController::class, 'show']);
Route::post('ticketsadd', [TicketController::class, 'store']);
Route::put('ticketsupdate/{id}', [TicketController::class, 'update']);
Route::delete('tickets/{id}', [TicketController::class, 'destroy']);
Route::get('perte', [TicketController::class, 'perte']);
Route::get('probleme', [TicketController::class, 'probleme']);
Route::get('ticketEnAttent', [TicketController::class, 'ticketEnAttent']);
Route::get('ticketAccepte', [TicketController::class, 'ticketAccepte']);


//rest api notification
Route::get('notifications', [NotificationController::class, 'index']);
Route::get('notifications/{id}', [NotificationController::class, 'show']);
Route::post('notifications', [NotificationController::class, 'store']);
Route::put('notifications/{id}', [NotificationController::class, 'update']);
Route::delete('notifications/{id}', [NotificationController::class, 'destroy']);
Route::delete('users/{id}/notifications', [NotificationController::class, 'deleteNotificationsByUserId']);

//rest api emploi
Route::get('emplois-de-temps', [EmploiDeTempsController::class, 'index']);
Route::get('emplois-de-temps/{id}', [EmploiDeTempsController::class, 'show']);
Route::post('emplois-de-temps', [EmploiDeTempsController::class, 'store']);
Route::put('emplois-de-temps/{id}', [EmploiDeTempsController::class, 'update']);
Route::delete('emplois-de-temps/{id}', [EmploiDeTempsController::class, 'destroy']);

//rest api user
Route::get('users/{id}/notifications', [UserController::class, 'getNotifications']);
Route::get('users/{id}/tickets', [UserController::class, 'getTickets']);
Route::get('getProfUsers', [UserController::class, 'getProfUsers']);

//rest api salle
Route::get('getActifs/{id}',[SalleController::class, 'getActifs']);
Route::get('salles',[SalleController::class, 'index']);
Route::get('salles/{id}/emploisDeTemps', [SalleController::class, 'getEmploisDeTemps']);
Route::put('/salles/{id}/update-nombre-table/{increment}', [SalleController::class, 'updateNombreTable']);
<<<<<<< HEAD

Route::get('/getPcParSalle/{id}', [SalleController::class, 'getPcParSalle']);


Route::put('/salles/{id}/updateProjecteur/{update}', [SalleController::class, 'UpdateProjecteur']);
=======
Route::get('/getPcParSalle/{id}', [SalleController::class, 'getPcParSalle']);
Route::put('/salles/{id}/updateProjecteur/{update}', [SalleController::class, 'UpdateProjecteur']);
Route::get('/salles/{id}/nombreTable', [SalleController::class, 'nombreTable']);
>>>>>>> cbc6667cb005d5a735eb8035741743662d1f1644

//rest api actif
Route::get('/actifs',[ActifController::class, 'index']);
Route::post('/saveactif',[ActifController::class, 'store']);
Route::put('/updateactif/{id}',[ActifController::class, 'update']);
Route::delete('/deleteactif/{id}',[ActifController::class, 'destroy']);

<<<<<<< HEAD
//rest api logiciel
=======
>>>>>>> cbc6667cb005d5a735eb8035741743662d1f1644

// rest api logiciel
Route::get('/logiciel',[LogicielController::class, 'index']);
Route::post('/save',[LogicielController::class, 'store']);
Route::put('/update/{id}',[LogicielController::class, 'update']);
Route::delete('/delete/{id}',[LogicielController::class, 'destroy']);



<<<<<<< HEAD
//athhh
Route::post('register',[AuthController::class,'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

=======
>>>>>>> cbc6667cb005d5a735eb8035741743662d1f1644

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
