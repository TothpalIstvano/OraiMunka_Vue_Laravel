<?php

namespace App\Http\Controllers;

use App\Models\Ingatlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IngatlanController extends Controller
{
    public function index()
    {
        $ingatlanok = Ingatlan::with('kategoria')->get();
        return response()->json($ingatlanok);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategoria' => 'required|integer|exists:kategoriak,id',
            'tehermentes' => 'required|boolean',
            'ar' => 'required|integer|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => 'Hiányos adatok'], status: 400);
        }

        $ingatlan = Ingatlan::create($request->all());
        return response()->json(['id' => $ingatlan->id], 201);
    }

    public function show(Ingatlan $ingatlan)
    {
        //
    }


    public function update(Request $request, Ingatlan $ingatlan)
    {
        //
    }

    public function destroy(Ingatlan $ingatlan)
    {
        //
    }
}
