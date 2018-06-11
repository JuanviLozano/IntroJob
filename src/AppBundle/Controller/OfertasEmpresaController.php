<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OfertasEmpresaController extends Controller
{
    public function ofertaEmpresaAction()
    {
        return $this->render('empresarios/ofertas/ofertasEmpresa.html.twig');
    }

}
