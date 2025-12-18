<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models\PageMetaTag;
use App\Models\Service;
use App\Models\Category;
use App\Models\Project;
use App\Models\Logo;

use App\Models\User;

class HomePageController extends Controller
{
    public function index(){

        $logos = Logo::all();
        $projects = Project::all();
        $services = Service::take(6)->get();
        return view('home',compact('services','projects','logos'));
    }

}
