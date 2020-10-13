<?php
require_once('Threesandfives.php');

class evaluator {

    public $threesfives;


    public function __construct(ThreeFive $numberCruncher) {
        $this->threesfives = $numberCruncher;
    }

    public function run($maxval){
        $this->threesfives->run($maxval);
    }

    

}

$threesfives = new Threesandfives();
$evaler = new evaluator($threesfives);
$evaler->run(100);


 
?>
