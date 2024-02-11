<?php

class Truthy {

	public function tellTruth($var): void
	{

		if ($var) {
	
			print "\n\nit's true\n\n";

		} else {

			print "\n\nit's false\n\n";
		
		}

	}

}
$truth = new Truthy;

print "\n\nif(true)";
$truth->tellTruth(true);

print "\n\nif(false)";
$truth->tellTruth(false);

print "\n\nif('string')";
$truth->tellTruth('string');

print "\n\nif('')";
$truth->tellTruth('');

print "\n\nif(6)";
$truth->tellTruth(6);

print "\n\nif(['one', 'two'])";
$countable = ['one', 'two'];
$truth->tellTruth($countable);

print "\n\nif(null)";
$truth->tellTruth(null);

print "\n\nif(0)";
$truth->tellTruth(0);

print "\n\nif(is_bool(true))";
$truth->tellTruth(is_bool(true));

print "\n\nif(is_bool(false))";
$truth->tellTruth(is_bool(false));

print "\n\nif(is_string('string'))";
$truth->tellTruth(is_string('string'));

print "\n\nif(is_string(''))";
$truth->tellTruth(is_string(''));

print "\n\nif(!empty(''))";
$truth->tellTruth(!empty(''));

print "\n\nif(is_int(6))";
$truth->tellTruth(is_int(6));

print "\n\nif(is_countable(['one', 'two']))";
$truth->tellTruth(is_countable($countable));

print "\n\nif(is_null(null))";
$truth->tellTruth(is_null(null));

print "\n\nif(is_bool(0))";
$truth->tellTruth(is_bool(0));

print "\n\nif(is_null(0))";
$truth->tellTruth(is_null(0));


print "\n\nThis is what happens with unset variables\n\n";

unset($var);
if($var){
	print "\n\nunset var is true\n\n";
}
else{

	print "\n\nunset var is false\n\n";

}
