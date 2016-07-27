<?php
/**
 * food-track.php is a single page web application that allows us to request and view
 * a customer's name
 *
 * This version uses no HTML directly so we can code collapse more efficiently
 *
 * This page is a model on which to demonstrate fundamentals of single page, postback
 * web applications.
 *
 * Any number of additional steps or processes can be added by adding keywords to the switch
 * statement and identifying a hidden form field in the previous step's form:
 *
 *<code>
 * <input type="hidden" name="act" value="next" />
 *</code>
 *
 * The above live of code shows the parameter "act" being loaded with the value "next" which would be the
 * unique identifier for the next step of a multi-step process
 *
 * @package FoodTrack
 * @author Giuseppe Donadio <giuseppedonadio@gmail.com>
 * @version 0.1 2016/07/13
 * @link http://www.giuseppedonadio.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @todo finish instruction sheet
 * @todo add more complicated checkbox & radio button examples
 */

# '../' works for a sub-folder.  use './' for the root
require '../inc_0700/config_inc.php'; #provides configuration, pathing, error handling, db credentials
#here is where the pizzas are
include 'includes/pizza-array.php';

//dumpDie($pizzas);
/*
$config->metaDescription = 'Web Database ITC281 class website.'; #Fills <meta> tags.
$config->metaKeywords = 'SCCC,Seattle Central,ITC281,database,mysql,php';
$config->metaRobots = 'no index, no follow';
$config->loadhead = ''; #load page specific JS
$config->banner = ''; #goes inside header
$config->copyright = ''; #goes inside footer
$config->sidebar1 = ''; #goes inside left side of page
$config->sidebar2 = ''; #goes inside right side of page
$config->nav1["page.php"] = "New Page!"; #add a new page to end of nav1 (viewable this page only)!!
$config->nav1 = array("page.php"=>"New Page!") + $config->nav1; #add a new page to beginning of nav1 (viewable this page only)!!
*/

//END CONFIG AREA ----------------------------------------------------------

# Read the value of 'action' whether it is passed via $_POST or $_GET with $_REQUEST
if(isset($_REQUEST['act'])){$myAction = (trim($_REQUEST['act']));}else{$myAction = "";}

switch ($myAction)
{//check 'act' for type of process
	case "show": # 2)Display Pizza Selected!
	 	showSelection();
		break;
//	case "display": # 2)Display user's name!
//	 	showName();
// 	break;
	default: # 1)Ask user to enter their name
	 	//showForm();
		showPizzas();
}
function showPizzas()
{

	get_header();
	global $pizzas;
	//dumpDie($_POST);
	echo '<h3>Pizzas</h3>';
	echo '<form action="' . THIS_PAGE . '" method="post" onsubmit="return checkForm(this);">';
	foreach ($pizzas as $pizza) {
		//dumpDie($pizza);
		echo '<p><input type="checkbox" name="' . $pizza->Type . '" value="' . $pizza->Type . '"/> ' . $pizza->Type . ', Large, $19.99</p>';
	}
	echo '<input type="submit" value="Select"/>';
	echo '<input type="hidden" name="act" value="show" />';
	echo '</form>';

	get_footer();
}

function showSelection()
{
	get_header();

	if(!isset($_POST))
	{//data must be sent
		feedback("No form data submitted"); #will feedback to submitting page via session variable
		myRedirect(THIS_PAGE);
	}

	//dumpDie($_POST);

	echo '<h2>Pizzas Selected</h2>';
	echo '<ul>';
	while ($pizza_name = current($_POST)) {
	    if ($pizza_name == 'show') {
				echo "";
	    }else{
				echo '<li>'.$pizza_name.'</li>';
			}
	    next($_POST);
	}
	echo '<ul>';

	get_footer();
}
?>
