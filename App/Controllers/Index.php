<?php

namespace App\Controllers;

class Index
{

    public function index()
    {
        include_once 'layout.php';
        include_once '../App/Views/index/index.phtml';
        include_once 'rodape.php';
    }

    public function empresa()
    {
        include_once 'layout.php';
        include_once '../App/Views/index/empresa.phtml';
        include_once 'rodape.php';
    }

    public function faleConosco()
    {
        include_once 'layout.php';
        include_once '../App/Views/index/fale-conosco.phtml';
        include_once 'rodape.php';
    }

    public function nossoTrabalho()
    {
        include_once 'layout.php';
        include_once '../App/Views/index/nosso-trabalho.phtml';
        include_once 'rodape.php';
    }

    public function localizacao()
    {
        include_once 'layout.php';
        include_once '../App/Views/index/localizacao.phtml';
        include_once 'rodape.php';
    }

}
