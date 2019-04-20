<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    /**
     * Test registered web routes.
     *
     * @return void
     */
    public function testRoutes()
    {
        $appURL = env('APP_URL');

        $urls = [
            '/',
            '/apply',
            '/gallery',
            '/meet-the-team',
            '/what-we-do'
        ];

        echo  PHP_EOL;

        foreach ($urls as $url) {
            $response = $this->get($url);
            if((int)$response->status() !== 200){
                echo  $appURL . $url . ' (FAILED) did not return a 200.';
                $this->assertTrue(false);
            } else {
                echo $appURL . $url . ' (success ?)';
                $this->assertTrue(true);
            }
            echo  PHP_EOL;
        }

    }

    public function testRedirects() {
        $appURL = env('APP_URL');

        $original = [
            '/about',
            '/contact'
        ];

        $redirected = [
            '/what-we-do',
            '/apply'
        ];

        echo PHP_EOL;

        for ($i = 0; $i < sizeof($original); $i++) {
            $response = $this->get($original[$i]);

            if(!$response->assertRedirect()){
                echo  $appURL . $original[$i] . ' (FAILED) did not return a 200.';
                $this->assertTrue(false);
            } else {
                echo $appURL . $original[$i] . ' (success ?), redirected to ' . $appURL . $redirected[$i];
                $this->assertTrue(true);
            }
            echo  PHP_EOL;
        }
    }
}
