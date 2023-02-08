<?php

class Truthy {

	public function tellTruth($var): void
	{

		print json_encode($var) . "\n";

		if($var){
	
			print "it's true\n";

		}
		else{

			print "it's false\n";
		
		}

	}

}
$x = new Truthy;
$x->tellTruth(true);
$x->tellTruth(false);
$x->tellTruth('string');
$x->tellTruth('');
$x->tellTruth(6);
$countable = ['one', 'two'];
$x->tellTruth($countable);
$x->tellTruth(null);
$x->tellTruth(0);


$x->tellTruth(is_bool(true));
$x->tellTruth(is_bool(false));
$x->tellTruth(is_string('string'));
$x->tellTruth(is_int(6));
$x->tellTruth(is_countable($countable));
$x->tellTruth(is_null(null));
$x->tellTruth(is_bool(0));
$x->tellTruth(is_null(0));
