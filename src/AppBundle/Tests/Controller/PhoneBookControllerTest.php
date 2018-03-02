<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PhoneBookControllerTest extends WebTestCase
{
    public function testGet()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/get');
    }

    public function testPost()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/post');
    }

    public function testPut()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/put');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/delete');
    }

}
