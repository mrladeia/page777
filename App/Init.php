<?php

namespace App;

use LIB\Init\Bootstrap;

class Init extends Bootstrap
{

    private $routes;

    protected function initRoutes()
    {
        $rota['home']    = ['route' => '/', 'controller' => 'index', 'action' => 'index'];
        $rota['empresa'] = ['route' => '/empresa', 'controller' => 'index', 'action' => 'empresa'];
        $rota['nosso-trabalho'] = ['route' => '/nosso-trabalho', 'controller' => 'index', 'action' => 'nossoTrabalho'];
        $rota['localizacao'] = ['route' => '/localizacao', 'controller' => 'index', 'action' => 'localizacao'];
        $rota['fale-conosco'] = ['route' => '/fale-conosco', 'controller' => 'index', 'action' => 'faleConosco'];
        $this->setRoutes($rota);
    }

}
