<?php 

class Test {
    public function test1() {
        $this->test2();
    }
    
    public  function test2() {
        $this->test3();
    }
    
    public function test3() {
        $foo = $bar;
    }
}


$test = new Test();
$test->test1();
