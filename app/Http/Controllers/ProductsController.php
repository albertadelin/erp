<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function show(){
        return view('produse');
    }

    public function tableData()
    {
        $produse = Product::all();
        return json_encode(['data' => $produse]);
    }

    public function showAdd()
    {
        return view('produse_add');
    }

    public function create(Request $request)
    {
        $produs = new Product();
        $produs->nume = $request->input('nume');
        $produs->gramaj = $request->input('gramaj');
        $produs->pret = $request->input('pret');
        $produs->discount = $request->input('discount');
        $produs->save();

        return redirect()->to('/produse');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/produse');

    }


    public function showEdit($id)
    {
        $produs = Product::find($id);

        return view('produse_edit', compact('produs'));
    }

    public function update(Request $request, $id)
    {
        $produs = Product::find($id);
        $produs->nume = $request->input('nume');
        $produs->gramaj = $request->input('gramaj');
        $produs->pret = $request->input('pret');
        $produs->discount = $request->input('discount');
        $produs->save();

        return redirect('/produse');
    }

    
}
