<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
    public function show()
    {
        return view('angajati');
    }

    public function tableData()
    {
        $angajati = Employee::all();
        return json_encode(['data' => $angajati]);
    }

    public function showAdd()
    {
        return view('angajati_add');
    }

    public function create(Request $request)
    {
        $angajat = new Employee();
        $angajat->nume = $request->input('nume');
        $angajat->cnp = $request->input('cnp');
        $angajat->data_nasterii = $request->input('data_nasterii');
        $angajat->adresa = $request->input('adresa');
        $angajat->save();

        return redirect()->to('/angajati');
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect('/angajati');

    }

    public function showEdit($id)
    {
        $angajat = Employee::find($id);

        return view('angajati_edit', compact('angajat'));
    }

    public function update(Request $request, $id)
    {
        $angajat = Employee::find($id);
        $angajat->nume = $request->input('nume');
        $angajat->cnp = $request->input('cnp');
        $angajat->data_nasterii = $request->input('data_nasterii');
        $angajat->adresa = $request->input('adresa');
        $angajat->save();

        return redirect('/angajati');
    }
}
