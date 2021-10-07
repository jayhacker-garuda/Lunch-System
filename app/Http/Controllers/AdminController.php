<?php

namespace App\Http\Controllers;

use App\Models\MealCategory;
use App\Models\MealType;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        return view('admin.index')
        ->with('mealCategories', MealCategory::all())
        ->with('mealTypes', MealType::all());
        
    }
}