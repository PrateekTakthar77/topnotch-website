<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\LogosController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\RuleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomePageController;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;
use App\Models\Team;
use App\Models\Logo;
use App\Models\Rule;
use App\Models\Project;


//  HOME PAGE
// Route::get('/', function () {return view('home');})->name('home');

Route::get('/', [HomePageController::class, 'index'])->name('home');



Route::get('/about', function () {
    $teams = Team::all();
    $logos = Logo::all();
    return view('about',compact('teams','logos'));})->name('about');

Route::get('/services', function () {
    $projects = Project::all();
    return view('services',compact('projects'));})->name('services');

Route::get('/contact_us', function () {
        return view('join_with_us');})->name('contact_us');

Route::get('/project_based', function () {
    $services = Service::where('category_type', 1)->get();
    return view('project_based',compact('services'));})->name('project_based');

Route::get('/consultancy_based', function () {
    $services = Service::where('category_type', 2)->get();
    return view('consultancy_based',compact('services'));})->name('consultancy_based');

Route::get('/stat_documents', function () {
    $rules = Rule::all();
    return view('statutory',compact('rules'));})->name('stat_documents');

//FRONTEND HANDLE

// Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/add-contact', [FrontendController::class, 'addContact'])->name('addContact');



//ADMIN PANEL

Route::group(['prefix'=>'admin'],function(){
    Route::group(['middleware' => 'admin.guest'], function(){
        Route::get('/', [LoginController::class,'index'])->name('admin');
        Route::post('/', [LoginController::class,'checkLogin'])->name('admin.checkLogin');
    });

Route::group(['middleware'=>'admin.auth'],function(){
        Route::get('/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');
        Route::get('/logout', [DashboardController::class,'logout'])->name('admin.logout');

        //Settings
        Route::get('settings/{slug}', [AdminController::class, 'Settings'])->name('admin.Settings');
        Route::post('settings/save/{slug}', [AdminController::class, 'SaveSettings'])->name('admin.SaveSettings');
        Route::get('/profile', [AdminController::class, 'Profile'])->name('admin.Profile');
        Route::post('/saveprofile', [AdminController::class, 'SaveProfile'])->name('admin.SaveProfile');
  

        // services
        Route::get('services', [ServiceController::class, 'index'])->name('admin.services');
        Route::get('add-service', [ServiceController::class, 'create'])->name('admin.addService');
        Route::post('add-service', [ServiceController::class, 'store'])->name('admin.addService');
        Route::get('edit-service/{id}', [ServiceController::class, 'edit'])->name('admin.editService');
        Route::post('update-service/{id}', [ServiceController::class, 'update'])->name('admin.updateService');
        Route::get('delete-service/{id}', [ServiceController::class, 'destroy'])->name('admin.deleteService');

        //projects
        Route::get('projects', [ProjectController::class, 'index'])->name('admin.projects');
        Route::get('add-project', [ProjectController::class, 'create'])->name('admin.addProject');
        Route::post('add-project', [ProjectController::class, 'store'])->name('admin.addProject');
        Route::get('edit-project/{id}', [ProjectController::class, 'edit'])->name('admin.editProject');
        Route::post('update-project/{id}', [ProjectController::class, 'update'])->name('admin.updateProject');
        Route::get('delete-project/{id}', [ProjectController::class, 'destroy'])->name('admin.deleteProject');

        //Contacts
        Route::get('delete-contact/{id}', [ContactController::class, 'destroy'])->name('admin.deleteContact');

        //categories
        Route::get('categories', [CategoryController::class, 'index'])->name('admin.Categories');
        Route::get('add-category', [CategoryController::class, 'create'])->name('admin.addCategory');
        Route::post('add-category', [CategoryController::class, 'store'])->name('admin.addCategory');
        Route::get('edit-category/{id}', [CategoryController::class, 'edit'])->name('admin.editCategory');
        Route::post('update-category/{id}', [CategoryController::class, 'update'])->name('admin.updateCategory');
        Route::get('delete-category/{id}', [CategoryController::class, 'destroy'])->name('admin.deleteCategory');

        //Client Logo
        Route::get('logo', [LogosController::class, 'index'])->name('admin.logo');
        Route::get('add-logo', [LogosController::class, 'create'])->name('admin.addLogo');
        Route::post('add-logo', [LogosController::class, 'store'])->name('admin.addLogo');
        Route::get('edit-logo/{id}', [LogosController::class, 'edit'])->name('admin.editLogo');
        Route::post('update-logo/{id}', [LogosController::class, 'update'])->name('admin.updateLogo');
        Route::get('delete-logo/{id}', [LogosController::class, 'destroy'])->name('admin.deleteLogo');


        // services
        Route::get('rules', [RuleController::class, 'index'])->name('admin.rules');
        Route::get('add-rule', [RuleController::class, 'create'])->name('admin.addRule');
        Route::post('add-rule', [RuleController::class, 'store'])->name('admin.addRule');
        Route::get('edit-rule/{id}', [RuleController::class, 'edit'])->name('admin.editRule');
        Route::post('update-rule/{id}', [RuleController::class, 'update'])->name('admin.updateRule');
        Route::get('delete-rule/{id}', [RuleController::class, 'destroy'])->name('admin.deleteRule');

        //Teams
        Route::get('team', [TeamController::class, 'index'])->name('admin.team');
        Route::get('add-member', [TeamController::class, 'create'])->name('admin.addmember');
        Route::post('add-member', [TeamController::class, 'store'])->name('admin.addMember');
        Route::get('edit-member/{id}', [TeamController::class, 'edit'])->name('admin.editMember');
        Route::post('update-member/{id}', [TeamController::class, 'update'])->name('admin.updateMember');
        Route::get('delete-member/{id}', [TeamController::class, 'destroy'])->name('admin.deleteMember');

   });
});
    
