<pre>
<?php
require_once('Threesandfives.php');

class evaluator {

    public $threesfives;


    public function __construct(ThreeFive $numberCruncher) {
        $this->threesfives = $numberCruncher;
    }

    public function run($maxval){
        for ($i=1; $i<=$maxval; $i++) {
            $this->threesfives->evaluate($i);
		}
    }

  
    

}

$threesfives = new Threesandfives();
$evaler = new evaluator($threesfives);
$evaler->run(100);


 
?>
</pre>