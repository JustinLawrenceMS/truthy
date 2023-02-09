<?php

class Truthy {

	public function tellTruth($var): void
	{

		if($var){
	
			print "\n\nit's true\n\n";

		}
		else{

			print "\n\nit's false\n\n";
		
		}

	}

}
$x = new Truthy;

print "\n\nif(true)";
$x->tellTruth(true);

print "\n\nif(false)";
$x->tellTruth(false);

print "\n\nif('string')";
$x->tellTruth('string');

print "\n\nif('')";
$x->tellTruth('');

print "\n\nif(6)";
$x->tellTruth(6);

print "\n\nif(['one', 'two'])";
$countable = ['one', 'two'];
$x->tellTruth($countable);

print "\n\nif(null)";
$x->tellTruth(null);

print "\n\nif(0)";
$x->tellTruth(0);

print "\n\nif(is_bool(true))";
$x->tellTruth(is_bool(true));

print "\n\nif(is_bool(false))";
$x->tellTruth(is_bool(false));

print "\n\nif(is_string('string'))";
$x->tellTruth(is_string('string'));

print "\n\nif(is_string(''))";
$x->tellTruth(is_string(''));

print "\n\nif(!empty(''))";
$x->tellTruth(!empty(''));

print "\n\nif(is_int(6))";
$x->tellTruth(is_int(6));

print "\n\nif(is_countable(['one', 'two']))";
$x->tellTruth(is_countable($countable));

print "\n\nif(is_null(null))";
$x->tellTruth(is_null(null));

print "\n\nif(is_bool(0))";
$x->tellTruth(is_bool(0));

print "\n\nif(is_null(0))";
$x->tellTruth(is_null(0));


print "\n\nThis is what happens with unset variables\n\n";

unset($var);
if($var){
	print "\n\nunset var is true\n\n";
}
else{

	print "\n\nunset var is false\n\n";

}
