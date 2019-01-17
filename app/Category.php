<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use App\Category;
class Category extends Model
{
    //

    protected $table = 'categories';
    use SoftDeletes; //Implementamos

    protected $dates = ['deleted_at'];

    protected $fillable = [
       'id', 'name'
   ];



    public function products(){
        return $this->hasMany(Product::class);
    }
}
