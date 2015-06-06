<?php

namespace App\Controllers;

class Index
{

    public function index()
    {
        include_once 'layout.php';
        include_once '../App/Views/index/index.phtml';
    }

    public function empresa()
    {
        include_once 'layout.php';
        include_once '../App/Views/index/empresa.phtml';
    }

    public function faleConosco()
    {
        include_once 'layout.php';
        include_once '../App/Views/index/fale-conosco.phtml';
    }

    public function nossoTrabalho()
    {
        include_once 'layout.php';
        include_once '../App/Views/index/nosso-trabalho.phtml';
    }

    public function localizacao()
    {
        include_once 'layout.php';
        include_once '../App/Views/index/localizacao.phtml';
    }

}
