<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterailController;
use App\Http\Controllers\BassinController;
use App\Http\Controllers\WilayaController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\BlocController;
use App\Http\Controllers\AttachementFinalController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BrigadeTopographeController;
use App\Http\Controllers\RapportReconnaissanceController;
use App\Http\Controllers\FicheContratController;
use App\Http\Controllers\FicheTechniqueController;
use App\Http\Controllers\EmployeController;
use App\Models\User;
use App\Models\AttachementFinal;
use App\Models\RapportReconnaissance;
use App\Models\Project;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', function () {
    return view('auth.login');
});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

	$role1 = User::all()->where('post_id', 1)->count();
	$role2 = User::all()->where('post_id', 2)->count();
	$role3 = User::all()->where('post_id', 3)->count();
	$role4 = User::all()->where('post_id', 4)->count();
	$role5 = User::all()->where('post_id', 5)->count();
	$role6 = User::all()->where('post_id', 6)->count();
	$role7 = User::all()->where('post_id', 7)->count();
	$role8 = User::all()->where('post_id', 8)->count();
	$role9 = User::all()->where('post_id', 9)->count();
	$labels = AttachementFinal:: all(['date_att'])->toArray();
	$montant = AttachementFinal:: all(['montant_global'])->toArray();
	$labels = collect($labels)->flatten(); 
	$montant = collect($montant)->flatten();

	$rapports = RapportReconnaissance::all(); 
	$rapportsx = RapportReconnaissance:: all(['utm_x','utm_y'])->toArray();
	$rapportsx = collect($rapportsx)->flatten(); 

	$projects = Project::all(); 
	
    return view('layouts.app',compact('role1','role2','role3','role4','role5','role6','role7','role8','role9','labels','montant','rapports','rapportsx','projects'));
})->name('dashboard');


//Materail
$role = 0;
Route::middleware(['auth:sanctum', 'verified'])->get('/materail/add', [MaterailController::class,'MatForm'])->name('materail')->middleware('role');
Route::middleware(['auth:sanctum', 'verified'])->post('/materail/store', [MaterailController::class,'AddMat'])->name('storemat');
Route::middleware(['auth:sanctum', 'verified'])->get('/materail/list', [MaterailController::class,'ShowMat'])->name('materaillist');
Route::middleware(['auth:sanctum', 'verified'])->get('/materail/delete/{id}', [MaterailController::class,'Delete']);
Route::middleware(['auth:sanctum', 'verified'])->post('/materail/update', [MaterailController::class,'Update']);


//Bassin
Route::middleware(['auth:sanctum', 'verified'])->get('/bassin/add', [BassinController::class,'BasForm'])->name('bassin');
Route::middleware(['auth:sanctum', 'verified'])->post('/bassin/store', [BassinController::class,'AddBas'])->name('storebas');
Route::middleware(['auth:sanctum', 'verified'])->get('/bassin/list', [BassinController::class,'ShowBas'])->name('bassinlist');
Route::middleware(['auth:sanctum', 'verified'])->get('/bassin/delete/{id}', [BassinController::class,'Delete']);
Route::middleware(['auth:sanctum', 'verified'])->post('/bassin/update', [BassinController::class,'Update']);


//Wilaya
Route::middleware(['auth:sanctum', 'verified'])->get('/wilaya/add', [WilayaController::class,'WilForm'])->name('wilaya');
Route::middleware(['auth:sanctum', 'verified'])->post('/wilaya/store', [WilayaController::class,'AddWil'])->name('storewil');
Route::middleware(['auth:sanctum', 'verified'])->get('/wilaya/list', [WilayaController::class,'ShowWil'])->name('wilayalist');
Route::middleware(['auth:sanctum', 'verified'])->get('/wilaya/delete/{id}', [WilayaController::class,'Delete']);
Route::middleware(['auth:sanctum', 'verified'])->post('/wilaya/update', [WilayaController::class,'Update']);


//Zone
Route::middleware(['auth:sanctum', 'verified'])->get('/zone/add', [ZoneController::class,'ZonForm'])->name('zone');
Route::middleware(['auth:sanctum', 'verified'])->post('/zone/store', [ZoneController::class,'AddZon'])->name('storezon');
Route::middleware(['auth:sanctum', 'verified'])->get('/zone/list', [ZoneController::class,'ShowZon'])->name('zonelist');
Route::middleware(['auth:sanctum', 'verified'])->get('/zone/delete/{id}', [ZoneController::class,'Delete']);
Route::middleware(['auth:sanctum', 'verified'])->post('/zone/update', [ZoneController::class,'Update']);


//Commune
Route::middleware(['auth:sanctum', 'verified'])->get('/commune/add', [CommuneController::class,'ComForm'])->name('commune');
Route::middleware(['auth:sanctum', 'verified'])->post('/commune/store', [CommuneController::class,'AddCom'])->name('storecom');
Route::middleware(['auth:sanctum', 'verified'])->get('/commune/list', [CommuneController::class,'ShowCom'])->name('communelist');
Route::middleware(['auth:sanctum', 'verified'])->get('/commune/delete/{id}', [CommuneController::class,'Delete']);
Route::middleware(['auth:sanctum', 'verified'])->post('/commune/update', [CommuneController::class,'Update']);


//bloc
Route::middleware(['auth:sanctum', 'verified'])->get('/bloc/add', [BlocController::class,'BloForm'])->name('bloc');
Route::middleware(['auth:sanctum', 'verified'])->post('/bloc/store', [BlocController::class,'AddBlo'])->name('storeblo');
Route::middleware(['auth:sanctum', 'verified'])->get('/bloc/list', [BlocController::class,'ShowBlo'])->name('bloclist');
Route::middleware(['auth:sanctum', 'verified'])->get('/bloc/delete/{id}', [BlocController::class,'Delete']);
Route::middleware(['auth:sanctum', 'verified'])->post('/bloc/update', [BlocController::class,'Update']);


//attachement final 
Route::middleware(['auth:sanctum', 'verified'])->get('/attachemnt-final/add', [AttachementFinalController::class,'AttFinForm'])->name('attachementfinal');
Route::middleware(['auth:sanctum', 'verified'])->post('/attachemnt-final/store', [AttachementFinalController::class,'AddAttFin'])->name('storeattfin');
Route::middleware(['auth:sanctum', 'verified'])->get('/attachemnt-final/list', [AttachementFinalController::class,'ShowAttFin'])->name('attachementfinallist');
Route::middleware(['auth:sanctum', 'verified'])->get('/attachemnt-final/delete/{id}', [AttachementFinalController::class,'Delete']);
Route::middleware(['auth:sanctum', 'verified'])->post('/attachemnt-final/update', [AttachementFinalController::class,'Update']);

//projet
Route::middleware(['auth:sanctum', 'verified'])->get('/projet/add', [ProjectController::class,'ProForm'])->name('project');
Route::middleware(['auth:sanctum', 'verified'])->post('/projet/store', [ProjectController::class,'AddPro'])->name('storepro');
Route::middleware(['auth:sanctum', 'verified'])->get('/projet/list', [ProjectController::class,'ShowPro'])->name('projectlist');
Route::middleware(['auth:sanctum', 'verified'])->get('/projet/delete/{id}', [ProjectController::class,'Delete']);
Route::middleware(['auth:sanctum', 'verified'])->post('/projet/update', [ProjectController::class,'Update']);

//brigade
Route::middleware(['auth:sanctum', 'verified'])->get('/brigade/add', [BrigadeTopographeController::class,'BriForm'])->name('brigade');
Route::middleware(['auth:sanctum', 'verified'])->post('/brigade/store', [BrigadeTopographeController::class,'AddBri'])->name('storebri');
Route::middleware(['auth:sanctum', 'verified'])->get('/brigade/list', [BrigadeTopographeController::class,'ShowBri'])->name('brigadelist');
Route::middleware(['auth:sanctum', 'verified'])->get('/brigade/delete/{id}', [BrigadeTopographeController::class,'Delete']);
Route::middleware(['auth:sanctum', 'verified'])->post('/brigade/update', [BrigadeTopographeController::class,'Update']);


//rapport reconnaissance
Route::middleware(['auth:sanctum', 'verified'])->get('/rapport-reconnaissance/add', [RapportReconnaissanceController::class,'RapForm'])->name('rapport');
Route::middleware(['auth:sanctum', 'verified'])->post('/rapport-reconnaissance/store', [RapportReconnaissanceController::class,'AddRap'])->name('storerap');
Route::middleware(['auth:sanctum', 'verified'])->get('/rapport/list', [RapportReconnaissanceController::class,'ShowRap'])->name('rapportlist');
Route::middleware(['auth:sanctum', 'verified'])->get('/rapport/delete/{id}', [RapportReconnaissanceController::class,'Delete']);
Route::middleware(['auth:sanctum', 'verified'])->post('/rapport/update', [RapportReconnaissanceController::class,'Update']);


//fiche contrat
Route::middleware(['auth:sanctum', 'verified'])->get('/fiche-contart/add', [FicheContratController::class,'FicForm'])->name('fiche');
Route::middleware(['auth:sanctum', 'verified'])->post('/fiche-contart/store', [FicheContratController::class,'AddFic'])->name('storefic');
Route::middleware(['auth:sanctum', 'verified'])->get('/fiche-contart/list', [FicheContratController::class,'ShowRap'])->name('fichelist');
Route::middleware(['auth:sanctum', 'verified'])->get('/fiche-contart/delete/{id}', [FicheContratController::class,'Delete']);
Route::middleware(['auth:sanctum', 'verified'])->post('/fiche-contart/update', [FicheContratController::class,'Update']);

//Fiche technique
Route::middleware(['auth:sanctum', 'verified'])->get('/fiche-technique/add', [FicheTechniqueController::class,'FicForm'])->name('fichet');
Route::middleware(['auth:sanctum', 'verified'])->post('/fiche-technique/store', [FicheTechniqueController::class,'AddFic'])->name('storefict');
Route::middleware(['auth:sanctum', 'verified'])->get('/fiche-technique/list', [FicheTechniqueController::class,'ShowFic'])->name('fichetlist');
Route::middleware(['auth:sanctum', 'verified'])->get('/fiche-technique/delete/{id}', [FicheTechniqueController::class,'Delete']);
Route::middleware(['auth:sanctum', 'verified'])->post('/fiche-technique/update', [FicheTechniqueController::class,'Update']);

//employés
Route::middleware(['auth:sanctum', 'verified'])->get('/employee/add', [EmployeController::class,'EmpForm'])->name('employe');
Route::middleware(['auth:sanctum', 'verified'])->post('/employee/store', [EmployeController::class,'AddEmp'])->name('storeemploye');
Route::middleware(['auth:sanctum', 'verified'])->get('/employee/list', [EmployeController::class,'ShowEmp'])->name('employelist');
Route::middleware(['auth:sanctum', 'verified'])->get('/employee/delete/{id}', [EmployeController::class,'Delete']);
Route::middleware(['auth:sanctum', 'verified'])->post('/employee/update', [EmployeController::class,'Update']);