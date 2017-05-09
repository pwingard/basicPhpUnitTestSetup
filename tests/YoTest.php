<?php
// replace TDD and Yo w/ real classes and namespaces
// run vendor/bin/phpunit tests

namespace YoMama\Test;

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR .'autoload.php';

use PHPUnit\Framework\TestCase;
use YoMama\Yo;

class YoTest extends TestCase{

    public function setUp(){

        $this->Yo = new Yo();
        //$this->Yo->mama = "Whatever";
    }

    public function tearDown(){
        unset($this->Yo);
    }

    public function testYoMama(){
        $this->Yo->YoMama();
        $this->assertEquals(
            "Yo Mamasan",
            $this->Yo->yoMama,
            "Error message: YO DUDE YOUR YO MESSED UP"
        );
    }
}