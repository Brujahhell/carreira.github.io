<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function index()
    {
        $nomeArquivo = ''; // Defina a variável para evitar o erro Undefined variable $nomeArquivo
        return view('index', compact('nomeArquivo'));
    }


    public function store(Request $request)
    {
        $data = [
            'nome' => $request->input('nome'),
            'idade' => $request->input('idade'),
            'curso' => $request->input('curso'),
            'cursos' => $request->input('cursos'),
            'carreira' => $request->input('carreira'),
            'estagio' => $request->input('estagio'),
            'feedback1' => $request->input('feedback1'),
            'feedback2' => $request->input('feedback2'),
            'feedback3' => $request->input('feedback3'),
            'feedback4' => $request->input('feedback4'),
            'feedback5' => $request->input('feedback5'),
        ];

        $nome = $request->input('nome');
        $nomeArquivo = Str::slug($nome) . '.pdf';

        $pdf = PDF::loadView('pdf', compact('data'));
        $pdf->save(public_path('assets/pesquisa/' . $nomeArquivo));

        return $pdf->download($nomeArquivo);
    }
}
