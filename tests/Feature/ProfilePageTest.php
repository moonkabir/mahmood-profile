<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProfilePageTest extends TestCase
{
    /**
     * Test the homepage renders with 200 OK and contains key profile information.
     */
    public function test_profile_page_renders_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Atae Dayem');
        $response->assertSee('Strategic vision.');
        $response->assertSee('Measurable impact.');
        $response->assertSee('Minhaj Welfare Foundation');
        $response->assertSee('Dayemi Foundation');
        $response->assertSee('VerifiAid');
        $response->assertSee('MSc Project Management');
        $response->assertSee('mail@dayemmahmood.com');
        $response->assertSee('07563 586 168');
        $response->assertSee('UN ECOSOC');
    }
}
