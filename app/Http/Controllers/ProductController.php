<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = Products::all();
        //return view('products.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //validation

    //    $request->validate([
    //      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      //    'caption' => 'required',
      //    'text' => 'required'
      //  ]);

      //  if ($request->hasFile("image")) {
      // $filenameWithExt = $request->file("image")->getClientOriginalName ();
       // Get Filename
      // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
       // Get just Extension
      // $extension = $request->file("image")->getClientOriginalExtension();
       // Filename To store
       //$fileNameToStore = $filename. "_". time().".".$extension;
       //$path = $request->file("image")->storeAs("public/image", $fileNameToStore);
      // }

        //$product = new Products();
        //$product->caption = $request->input('caption');
        //$product->text = $request->input('text');
        //$product->image = $fileNameToStore;
        //$product->path = $path;
        //$product->save();

      //  return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //  $product=Products::find($id);
      //  return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
