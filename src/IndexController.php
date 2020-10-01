<?php

namespace App;

class IndexController
{
    public function index()
    {
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
        require_once('src/view/Index/index.php');
    }
}