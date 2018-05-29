<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PerfilControllerTest extends WebTestCase
{
    public function testPerfil()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/perfil');
    }

}
