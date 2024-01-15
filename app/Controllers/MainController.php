<?php

namespace App\Controllers;

use App\Models\DiscoModel;
use App\Models\AutoriaModel;


class MainController extends BaseController
{
    public function index()
    {
        $DiscoModel = new DiscoModel();
        $discos = $DiscoModel->findAll();

        return view('index', compact('discos'));
    }

    public function adicionar()
    {
    $AutoriaModel = new AutoriaModel();
    
    $autorias = $AutoriaModel->findAll();

    $generos = ['Rock', 'Pop', 'Jazz', 'Rap', 'Eletrônica', 'Trap', 'Blues', 'Samba', 'Pagode', 'MPB'];

    return view('adicionar', ['autorias' => $autorias, 'generos' => $generos]);
    }

    public function salvar()
    {
        $request = $this->request;

        $DiscoModel = new DiscoModel();

        $data = [
            'nome' => $request->getPost('nome'),
            'autoria' => $request->getPost('autoria'),
            'genero' => $request->getPost('genero'),
            'lancamento' => $request->getPost('lancamento'),
        ];

        $DiscoModel->insert($data);

        return redirect()->to('/');
    }

    public function editar($nome)
    {
    $DiscoModel = new DiscoModel();
    $discos = $DiscoModel->find($nome);

    return view('editar', ['discos' => $discos]);
    }

    public function salvarEdicao($nome)
    {
    $request = $this->request;
    $DiscoModel = new DiscoModel();

    $data = [
        'nome' => $request->getPost('nome'),
        'autoria' => $request->getPost('autoria'),
        'genero' => $request->getPost('genero'),
        'lancamento' => $request->getPost('lancamento'),
    ];

    $DiscoModel->update($nome, $data);

    return redirect()->to('/');
    }

    public function remover($nome)
    {
    $discoModel = new DiscoModel();
    $discoModel->delete($nome);

    return redirect()->to('/');
    }

    public function autoria()
    {
    $AutoriaModel = new AutoriaModel();
    $autorias = $AutoriaModel->findAll();

    $DiscoModel = new DiscoModel();
    $discos = $DiscoModel->findAll(); 

    $autoriaDiscos = [];

    foreach ($autorias as $autoria) {
        $autoriaDiscos[$autoria['nomeAutoria']] = array_filter(
            $discos,
            function ($disco) use ($autoria) {
                return $disco['autoria'] == $autoria['nomeAutoria'];
            }
        );
    }

    return view('autoria', ['autorias' => $autoriaDiscos]);
    }

    public function adicionarAutoria()
    {
        return view('adicionarAutoria');
    }

    public function salvarAutoria()
    {
        $request = $this->request;

        $AutoriaModel = new AutoriaModel();

        $data = [
            'nomeAutoria' => $request->getPost('nomeAutoria'),
        ];

        $AutoriaModel->insert($data);

        return redirect()->to('autoria');
    }

    public function removerAutoria($nomeAutoria)
    {
    $AutoriaModel = new AutoriaModel();
    $AutoriaModel->delete($nomeAutoria);

    return redirect()->to('autoria');
    }

    public function editarAutoria($nomeAutoria)
    {
    $AutoriaModel = new AutoriaModel();
    $autorias = $AutoriaModel->find($nomeAutoria);

    return view('editarAutoria', ['autorias' => $autorias]);
    }

    public function salvarEdicaoAutoria($nomeAutoria)
    {
    $request = $this->request;
    $AutoriaModel = new AutoriaModel();

    $data = [
        'nomeAutoria' => $request->getPost('nomeAutoria'),
    ];

    $AutoriaModel->update($nomeAutoria, $data);

    return redirect()->to('/');
    }

}