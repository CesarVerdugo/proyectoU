<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Commentary;
class PrincipalController extends Controller
{
    //
    public function index()
    {
    	$products=Product::all();
      $comentarios =Commentary::orderBy('id','DESC')->paginate(3);


    	return view('frond.pagePrincipal.index',compact('products','comentarios'));
    }




}
