<?php
 namespace TutorialTest;
 use Silex\WebTestCase;
 class BasicTest extends WebTestCase
 {
     public function createApplication()
     {
         $app = require __DIR__ . '/../app/bootstrap.php';
         $app['debug'] = true;         return $app;
     }

     public function testStatusRoute()
     {
         $client = $this->createClient();
         $client->request('GET', '/hello/juan');

        $this->assertTrue($client->getResponse()->isOk());
        $this->assertEquals(
            'Hello juan',
            $client->getResponse()->getContent()
        );
    }
}