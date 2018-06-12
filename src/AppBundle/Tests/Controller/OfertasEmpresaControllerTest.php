<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OfertasEmpresaControllerTest extends WebTestCase
{
    public function testOfertaempresa()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ofertaEmpresa');
    }

}
