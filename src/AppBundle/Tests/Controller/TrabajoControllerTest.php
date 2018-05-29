<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TrabajoControllerTest extends WebTestCase
{
    public function testLista()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/lista');
    }

}
