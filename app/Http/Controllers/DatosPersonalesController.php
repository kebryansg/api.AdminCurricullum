<?php

namespace App\Http\Controllers;

use App\Models\DatosPersonales;
use Illuminate\Http\Request;

class DatosPersonalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rows = null;
        $search = $request->input('search');
        if ($search) {
            $rows = DatosPersonales::where(function ($query) use ($search) {
                $query->where('Identificacion', 'like', "%$search%");
                $query->orWhere('Nombres', 'like', "%$search%");
                $query->orWhere('Apellidos', 'like', "%$search%");
            })->paginate($request->input('limit'));
        } else {
            $rows = DatosPersonales::paginate($request->input('limit'));
        }
        return response()->json($rows, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->files);
        $data = new DatosPersonales();
        $data->fill($request->all());

        // File
        $sourceFile = $request->input('CV')["value"];
        $nameFile = 'files/files/'. uniqid() . $request->input('CV')["extension"];
        file_put_contents($nameFile, base64_decode($sourceFile));
        $data->PathCurricullum = $nameFile;
        $data->save();
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = DatosPersonales::find($id);
        return response()->json($row, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
