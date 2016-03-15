<?php

namespace AnnoncesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RechercheControllerTest extends WebTestCase
{
    public function testSearch()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/search');
    }

    public function testMesannonces()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/mesAnnonces');
    }

}
