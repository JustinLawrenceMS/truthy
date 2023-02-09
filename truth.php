<?php

class Truthy {

	public function tellTruth($var): void
	{

		if($var){
	
			print ((string) $var) . ": it's true\n";

		}
		else{

			print ((string) $var) . ": it's false\n";
		
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

print 'is_bool(true)' . "\n";
$x->tellTruth(is_bool(true));
print 'is_bool(false)' . "\n";
$x->tellTruth(is_bool(false));
print 'is_string("string")' . "\n";
$x->tellTruth(is_string('string'));

print "\n";
print "is_string('')\n";
$x->tellTruth(is_string(''));
print "\n";
print "!empty('')\n";
$x->tellTruth(!empty(''));
print "\n";

$x->tellTruth(is_int(6));
$x->tellTruth(is_countable($countable));
$x->tellTruth(is_null(null));
$x->tellTruth(is_bool(0));
$x->tellTruth(is_null(0));
