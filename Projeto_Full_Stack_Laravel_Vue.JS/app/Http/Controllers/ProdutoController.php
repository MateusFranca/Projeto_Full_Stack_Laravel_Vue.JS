<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return response()->json($produtos, 200);
    }

    public function show($id)
    {
        $produto = Produto::find($id);

        if ($produto === null) {
            return response()->json(['message' => 'Produto não encontrado'], 404);
        }

        return response()->json($produto, 200);
    }

    public function store(Request $request)
    {
        $request->validate(Produto::rules(), Produto::feedback());

        $produto = Produto::create($request->all());

        return response()->json($produto, 201);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);

        if ($produto === null) {
            return response()->json(['message' => 'Produto não encontrado'], 404);
        }

        $request->validate(Produto::rules(), Produto::feedback());

        $produto->update($request->all());

        return response()->json($produto, 200);
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);

        if ($produto === null) {
            return response()->json(['message' => 'Produto não encontrado'], 404);
        }

        $produto->delete();

        return response()->json(['message' => 'Produto excluído com sucesso'], 200);
    }
}

