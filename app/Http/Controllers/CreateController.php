<?php

namespace App\Http\Controllers;

use App\Http\Requests\mealTypeRequest;
use App\Models\MealCategory;
use App\Models\MealType;
use Illuminate\Http\Request;

class CreateController extends Controller
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

    public function category(){

        return view('create.category');
        
    }
    public function mealType(){

        return view('create.mealType')->with('mealCategories', MealCategory::all());
        
    }

    public function storeCategory(Request $request){

        $request->validate([
           'name' => 'required|string|min:4|unique:meal_categories' 
        ]);

        if ($request) {
            MealCategory::create([
               'name' => $request->name 
            ]);
            
            return redirect()->back();
        }

    }
    
    public function storeMealType(mealTypeRequest $mealTypeRequest){

        

        if ($mealTypeRequest) {
            MealType::create([
               'name' => $mealTypeRequest->name,
               'meals_category_id' => $mealTypeRequest->meals_category_id
            ]);
            
            return redirect()->back();
        }

    }
}