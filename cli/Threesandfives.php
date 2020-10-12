<?php

final class Threesandfives {


	private function evaluate($candidateNumber){
		 
		$blanks = array(3,5,15);
		$text = array('Three','Five','ThreeAndFive'); 
		  
		for ($i=2;$i>=0;$i--) {
			$divisible = !($candidateNumber % $blanks[$i]);
			if ($divisible==true){
				echo $text[$i]."\n";
			    return;
			}
		}

		echo "$candidateNumber \n";

	}

	public function run($upperLimit) {

		for ($i=1; $i<=$upperLimit; $i++) {
			$this->evaluate($i);
		}
	

	}

}
