<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use AppLivraria;

class livrariacontroller extends Controller
{
    
    public function index()
    {
        $dados = Livraria::all();
        return view('livros', compact('dados'));
        //return view('alunos', ['dados' => $dados]);
        
    }

    public function create()
    {
        return view('cadastrar');
    }

    public function save(Request $request)
    {
        //$_POST['nome']
        //cria um novo acesso a model do laravel
        $livro = new Livraria();

        //coloca na model os dados vindos do formulario
        $livro->nome = $request->nome;
        $livro->autor = $request->autor;
        $livro->editora = $request->editora;
        
        //grava no banco (persistir os dados)
        $livro->save();

        //substitui o Location
        return redirect('/');
        
        
    }

    public function edit(Livraria $dados)
    {
        //$dados = Aluno::find($id);
        return view('edit', compact('dados'));
        
    }

    public function update(Request $request)
    {
        $livro = Livraria::find($request->id);

        //coloca na model os dados vindos do formulario
        $livro->nome = $request->nome;
        $livro->autor = $request->autor;
        $livro->editora = $request->editora;
        
        //grava no banco (persistir os dados)
        $livro->save();

        //substitui o Location
        return redirect('/');
        
        
    }

    public function delete(Livraria $livro)
    {
        $livro->delete();
        return redirect('/');
        
        //return 'ok';
    }
    
}

