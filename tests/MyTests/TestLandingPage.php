<?php

class TestLandingPage extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function can_return_secret_of_the_universe()
    {
        $app = new LandingPage();
        $this->assertEquals(30, $app->run());
    }
}