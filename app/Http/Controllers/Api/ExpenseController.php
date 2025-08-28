<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ExpenseRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new ExpenseRecord();

        $rules = [
            'toko' => 'required',
            'total' => 'required',
            'item' => 'required',
            'tanggal_struk' => 'required|date'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Data gagal ditambahkan',
                'data' => $validator->errors()
            ]);
        }

        $data->toko = $request->toko;
        $data->total = $request->total;
        $data->item = $request->item;
        $data->tanggal_struk = $request->tanggal_struk;

        $data->save();
        return response([
            'status' => true,
            'message' => 'Data berhasil ditambahkan',
            'data' => [
                'toko' => $data->toko,
                'total' => $data->total,
                'item' => $data->item,
                'tanggal_struk' => $data->tanggal_struk,
            ],
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
