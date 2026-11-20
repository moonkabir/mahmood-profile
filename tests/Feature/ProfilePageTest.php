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
        $response->assertSee('Dayem Intelligence');
        $response->assertSee('Atae Dayem');
        $response->assertSee('Strategic Governance');
        $response->assertSee('Humanitarian Delivery at Scale');
        $response->assertSee('Today’s Brief', false);
        $response->assertSee('Funding Radar');
        $response->assertSee('Global South Watch');
        $response->assertSee('VerifiAid');
        $response->assertSee('Minhaj Welfare Foundation');
        $response->assertSee('Dayemi Foundation');
        $response->assertSee('MSc Project Management');
        $response->assertSee('Graduated with Distinction');
        $response->assertSee('mail@dayemmahmood.com');
        $response->assertSee('07563 586 168');
        $response->assertSee('UN ECOSOC');
    }

    /**
     * Test the dedicated Dayem Intelligence page renders successfully.
     */
    public function test_intelligence_page_renders_successfully(): void
    {
        $response = $this->get('/intelligence');

        $response->assertStatus(200);
        $response->assertSee('Dayem Intelligence');
        $response->assertSee('Humanitarian &amp; Development Intelligence', false);
        $response->assertSee('Today’s Brief', false);
        $response->assertSee('Funding Radar');
        $response->assertSee('Global South Watch');
        $response->assertSee('FCDO — Climate Resilient Livelihoods Programme');
    }

    /**
     * Test the dedicated executive CV page renders successfully.
     */
    public function test_cv_page_renders_successfully(): void
    {
        $response = $this->get('/cv');

        $response->assertStatus(200);
        $response->assertSee('ATAE DAYEM SYED MAHMOOD ULLAH');
        $response->assertSee('Professional Profile');
        $response->assertSee('Selected Leadership Contributions');
        $response->assertSee('VerifiAid');
    }
}
