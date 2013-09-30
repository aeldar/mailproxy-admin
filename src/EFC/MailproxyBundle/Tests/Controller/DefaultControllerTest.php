<?php

namespace EFC\MailproxyBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/account/Eldar');

        $this->assertTrue($crawler->filter('html:contains("All about Eldar!")')->count() > 0);
    }
}
