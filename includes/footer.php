<?php // php starts here (Marcus Palmer)

// create variable array to hold links
$links = array('<a  class="uk-link-reset uk-light"href="#">Home</a>', '<a class="uk-link-reset" href="#">About Us</a>', '<a class="uk-link-reset" href="#">Contact Us</a>', '<a class="uk-link-reset" href="#">Login</a>', '<a class="uk-link-reset" href="#">Register</a>');

$loggedinLinks = array('');


// create variable (Marcus Palmer)
$footer = '<!-- div container starts here using the class uk-width-1-1 to expand the container to the full width of the screen also using uk-position-bottom (Marcus Palmer) -->
			<div class="uk-width-1-1 uk-text-center">
			
			<!-- div container starts here (Marcus Palmer) -->
			<div class="uk-section uk-section-primary uk-light">
			
			 <!-- div container starts here (Marcus Palmer) -->
   			 <div class="">
			 
			 	<!-- release each array value (Marcus Palmer)-->
				 '. $links[0] .' | ' .$links[1] .' | '.$links[2] .' | '. $links[3].' | '. $links[4].'
				
			<!-- div content ends here (Marcus Palmer)-->
			 </div>
			 
			 <!-- div content ends here (Marcus Palmer) -->
			 </div>
			
			<!-- div container ends here (Marcus Palmer) -->
			</div>';

// php ends here (Marcus Palmer)


?>