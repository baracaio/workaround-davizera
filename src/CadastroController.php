<?php

namespace App;


class CadastroController
{
    public function index()
    {
        echo 'iaê cadastro';
    }

    public function metodo(array $params)
    {
        $nome = $params['query_string'][0];
        $nome = explode('=', $nome)[1];

        $resultados = [
            [
            'id' => 1,
            'nome' => 'Caio',
            'sobrenome' => 'baracat',
            ],

            [
                'id' => 2,
                'nome' => 'Davi',
                'sobrenome' => 'Spindola',
                ],
        ];
        require_once('src/view/Cadastro/index.php');
    }
}