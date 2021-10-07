<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealType extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'meals_category_id',
    ];


    public function mealCategory(){
        
        return $this->belongsTo(MealCategory::class, 'meals_category_id');
        
    }
}