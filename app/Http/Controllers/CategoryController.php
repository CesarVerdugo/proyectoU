<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Storage;
use Validator;
class CategoryController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }


  public function index()
  {

      return view('frond.categories.index');
  }

  public function pdfCategory()
  {


      $categorys = Category::all();

      $pdf = PDF::loadView('informe.Categorys_list',compact('Categorys'));

      return $pdf->download('lists_Categorys.pdf');

  }

  public function excelCategory()
  {

      return Excel::download(new CategorysExport, 'lists_Categorys.xlsx');


  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    if($request->ajax()){
     $category =  Category::create($request->all());
     $category->save();
            return response()->json([
              "mensaje"=>"Fue creado."
            ]);
                      }

  }


  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $category= Category::find($id);
    $category->fill($request->all())->save();
    return response()->json(["mensaje"=>"Actualizar"]);

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $category= Category::findOrFail($id)->delete();
    return response()->json(["mensaje"=>"Borrado"]);
  }
}
