<?php
require_once('./Sample.php');
class SampleTest extends PHPUnit_Framework_TestCase
{
    public function testハローワールド()
    {
        $Sample = new Sample();
        $this->assertEquals($Sample->helloWorld(), 'hello world!');
    }

    /**
     * @test
     */
    public function aaa()
    {
        echo "aaa start";
        $Sample = new Sample();
        $this->assertEquals($Sample->helloWorld(), 'hello world!');
    }
    /**
     * @test
     */
    public function bbb()
    {
        echo "bbb start";
        $Sample = new Sample();
        $this->assertEquals($Sample->helloWorld(), 'hello world!');
    }
}
