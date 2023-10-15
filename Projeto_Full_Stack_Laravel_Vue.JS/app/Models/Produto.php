<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nome',
        'descricao',
        'categoria',
        'imagem',
        'preco',
        'disponivel',
    ];

    public function rules() {
        return [
            'nome' => 'required|min:3|max:50',
            'descricao' => 'required|string|max:2000',
            'categoria' => 'nullable|string|max:50',
            'imagem' => 'required|string',
            'preco' => 'required|numeric|min:0',
            'disponivel' => 'boolean',
        ];
    }

    public function feedback() {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'max' => 'O campo :attribute não pode ter mais de :max caracteres.',
            'numeric' => 'O campo :attribute deve ser um número.',
            'min' => 'O campo :attribute deve ser no mínimo :min.',
            'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
        ];
    }
}