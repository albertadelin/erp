<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    public function show(){
        return view('masini');
    }

    public function tableData()
    {
        $masini = Car::all();
        return json_encode(['data' => $masini]);
    }

    public function showAdd()
    {
        return view('masini_add');
    }

    public function create(Request $request)
    {
        $masina = new Car();
        $masina->numar_inmatriculare = $request->input('numar_inmatriculare');
        $masina->marca = $request->input('marca');
        $masina->model = $request->input('model');
        $masina->an = $request->input('an');
        $masina->save();

        return redirect()->to('/masini');
    }

    public function destroy($id)
    {
        $product = Car::find($id);
        $product->delete();

        return redirect('/masini');

    }

    public function showEdit($id)
    {
        $masina = Car::find($id);

        return view('masini_edit', compact('masina'));
    }

    public function update(Request $request, $id)
    {
        $masina = Car::find($id);
        $masina->numar_inmatriculare = $request->input('numar_inmatriculare');
        $masina->marca = $request->input('marca');
        $masina->model = $request->input('model');
        $masina->an = $request->input('an');
        $masina->save();

        return redirect('/masini');
    }
}
