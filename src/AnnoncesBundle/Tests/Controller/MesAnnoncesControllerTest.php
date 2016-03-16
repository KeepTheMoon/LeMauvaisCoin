<?php

namespace AnnoncesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MesAnnoncesControllerTest extends WebTestCase
{
    public function testMesannonces()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/annonce/mesAnnonces');
    }

}
