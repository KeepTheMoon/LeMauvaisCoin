<?php

namespace AnnoncesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MapControllerTest extends WebTestCase
{
    public function testRecherche()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/recherche');
    }

}
