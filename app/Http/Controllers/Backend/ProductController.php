<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;
use Validator;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
      $product=Product::all();
        return view('frond.products.index', compact('categories','product'));
    }


    // public function create()
    //    {
    //        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
    //
    //
    //        return view('frond.products.create', compact('categories'));
    //    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      /*  $validator = Validator::make($request->all(), [
            'code'=>'required|unique:products',
            'date'=>'required',
            'name' => 'required',
            'description' => 'required',
            'unit_price' =>'required',
            'sale_price'=>'required',
            'stockmin'=>'required',
            'file'=>'mimes:jpg.jpeg,png',
        ]);
        if ($validator->fails()) {
            return redirect('/products')
                        ->withErrors($validator)
                        ->with('info','Ya existe el codigo digitado.');
        }

        if(Product::codeUnique($request->code)){
*/
        // if($request->ajax()){

             $product =  Product::create($request->all());

             if($request->file('file')){

            $photo =Storage::disk('public')->put('files', $request->file('file'));

            $product->fill(['file'=>asset($photo)])->save();

            }

            //$product->save();
         //$client->save();
         // return response()->json([
         //   "mensaje"=>"Fue creado.",
         //   "product"=>$product
         // ]);

        //  }


               return redirect()->route('products.index')->with('info','Producto creado con exito.');

            /*} else{
            return redirect()->route('products.index')  // Se redirige a  la ruta cliente.create (cliente/create)
            ->with('info', 'Ya existe un articulo con el codigo digitado.'); // El sistema arroja la informacion "Ya existe un cliente con el nuip digitado"
        }*/

    }


    public function edit($id)
        {
            $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');

            $product  = Product::find($id);
          //  $this->authorize('pass', $post);

            // return view('frond.products.edit', compact('product','categories'));
            return redirect()->route('products.index',compact('product','categories'));
        }

        public function show($id)
          {
              $product  = Product::find($id);
              $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');

              return view('frond.products..show', compact('product,categories'));
          }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
      $product= Product::find($id);

      $product->fill($request->all())->save();

      if($request->file('file')){

          $photo =Storage::disk('public')->put('files', $request->file('file'));
            $product->fill(['file'=>asset($photo)])->save();
            //$product->fill($request->all())->save();

    }
      return redirect()->route('products.index')->with('info','Actualizacion exitosa.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product=Product::findOrFail($id)->delete();
      return response()->json(["mensaje"=>"Borrado"]);
    }


  public function getProductByCode($code) //Funcion que obtiene un articulo por medio de su codigo
    {

        $product=Product::where('code', $code)->get(['id','code', 'name',
             'sale_price']);

        if(count($product)>0){
            $answer=array(
                "datos" => $product,
                "code" => 200
            );
        }else{
        $answer=array(
            "error" => 'No existen datos con ese codigo.',
            "code" => 600
        );
    }
         return response()->json($answer);

    }




}
