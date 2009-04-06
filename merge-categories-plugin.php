<?

//gotta figure out how to get all the POST and loop through THEM ALL?? in $POST. Note that $POST is oo; namely $POST.category is what category it's in. Also, it looks like $POST.tag is an array. Tricky, huh? No clue how to deal w/ this.


//need to write the actual action for this function
function addposttag ($newtag) {

	//is this even possible?
	foreach ($POST.tag as $currenttag) {
	
		//check to see if what you're about to write already exists
		if ($newtag == $currenttag) {
			//if it does, go ahead and exit, smiling
			return TRUE;
			}

		else {
			//insert mystery db manipulation to add a tag to the post?
			//maybe call a WP function? I dunno
			}
	
		}
	}

//this function should write the old category as a tag
//the combine the old category into the new one based on the array $oldcategories
function mergecategories ($oldcategories,$newcategory) {

	global $POST;

	foreach ($POST ) {

		foreach ($oldcategories as $oldcat) {

			//this is OO only b/c it makes the most sense that way
			if ($POST.category == $oldcat) {
				addposttag($POST.category);
				$POST.category = $newcategory;
				//the question is, do I need to add a rule to .htaccess for this?
				}

		}
	}


$life = Array (
	"life",
	"family",
	"work");

$linux = Array (

	);

$links = Array (

	);

$religion = Array (

	);

$art = Array (

	);

$tech = Array (

	);


mergecategories ($linux,	"linux");
mergecategories ($tech, 	"tech");
mergecategories ($links,	"links");
mergecategories ($religion,	"religion");
mergecategories ($art,		"art");
mergecategories ($life,		"life");

?>
