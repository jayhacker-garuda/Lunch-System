<?php

namespace App\Http\Controllers;

use App\Models\MealCategory;
use App\Models\MealType;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentDashboardController extends Controller
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

        return view('dashboard.index')
        ->with('mealsCategories', MealCategory::all())
        ->with('mealTypes', MealType::all());

    }

    
    public function storeOrder(Request $request){

        $request->validate([
            'order' => 'required|string',
            'date_order' => 'required'
        ]);

        if($request){
            Order::create([
               'user_id' => Auth::user()->id,
               'order' => $request->order,
                'date_order' => $request->date_order 
            ]);

            return redirect()->back();
        }
        // dd($request->only('date_order'));   
        
    }
}