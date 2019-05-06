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
        $urls = [
            '/',
            '/apply',
            '/gallery',
            '/meet-the-team',
            '/what-we-do',
            '/faq'
        ];

        foreach ($urls as $url) {
            $response = $this->get($url);
            if((int)$response->status() !== 200){
                $this->assertTrue(false);
            } else {
                $this->assertTrue(true);
            }
        }

    }

    public function testRedirects() {
        $original = [
            '/about',
            '/contact'
        ];

        $redirected = [
            '/what-we-do',
            '/apply'
        ];

    

        for ($i = 0; $i < sizeof($original); $i++) {
            $response = $this->get($original[$i]);
            if(!$response->assertRedirect()){             
                $this->assertTrue(false);
            } else {
                $this->assertTrue(true);
            }
        }
    }
}
