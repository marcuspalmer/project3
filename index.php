<!-- Navigation Bar (Marcus Palmer) -->
<?php

// Assign this value to the variable $PageTitle (Marcus Palmer)
$PageTitle="FCR Home";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }

// include the following files in this document once (Marcus Palmer)
include_once('includes/header.php');

include_once('includes/footer.php');

include_once('includes/navigation.php');

include_once('includes/slideshow.php');
?>
 <body>
	 
	 <!-- Navigation Bar (Marcus Palmer) -->
	 <!-- php language starts here -->
	<?php 
	 
	 // Print on screen whatever is inside the following variable (Marcus Palmer)
	 echo "$navigationBar"; 
	 
	 // php ends here (Marcus Palmer)
	 ?>
	 <!-- Navigation Bar ends here (Marcus Palmer) -->
	 
	 
	 <!--      What would you like to do section    -->
	 
	 <!-- div container using the class uk-section to show a predefined area in size "Horizontal space" (Marcus Palmer)-->
	 <div class="uk-section-xsmall uk-margin-remove-bottom">
		 
	<!-- div container using the class uk-container to give the div container max with width (Marcus Palmer)-->
     <div class="uk-container"> 
		 
		 <!-- div container using the class uk-text-center to centralise the content within the div (Marcus Palmer)-->
		 <div class="uk-text-center uk-margin-top">
			 
			 <!-- header 1 (Marcus Palmer) -->
			 <h1>
				 <!-- h1 header 1 content (Marcus Palmer) -->
				 What would you like to do today?	
			 
			 <!-- h1 ends here (Marcus Palmer) -->
			 </h1>
			
			 <!-- div container ends here (Marcus Palmer) -->
			</div>
		 
		 <!-- div container ends here (Marcus Palmer) -->
		 </div>
		 
	<!-- div container ends here (Marcus Palmer) -->
	</div>
	  
	 <!--      What would you like to do section  ends here     -->
	 
	 
	 
	  <!--      3 Box Option Starts Here   (Marcus Palmer)  -->
	 <!-- div container using class section starst here Sections are used to separate the content of a page (Marcus Palmer) -->
	 <div class="uk-section">
		 
		 <!-- div container starts here using the class uk-container to give this content max width (Marcus Palmer) -->
    	<div class="uk-container">
		 
			<!-- div container starts here using the class uk-child-width-1-3@m which means Affects device widths of 960px and larger. Grid columns will stack on smaller sizes. uk-grid-small whioch means arrange block elements in columns which is has a small gutter. uk-grid-match means all elements within the grid will match the same height no matter what the content within the container is. also using the attribute uk-grid defines the grid (Marcus Palmer) -->
		 	<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
			 
			<!-- div container starts here (Marcus Palmer) -->
    		<div>
				
				<!-- div container using the class uk-card which allows us to use UIKIT card component in the site. uk-card-default means a predefined style for the card element. uk-card-body creates padding between the card and its content. (Marcus Palmer) -->
        		<div class="uk-card uk-card-default uk-card-body uk-text-center">
					
					<!-- span element to host an icon, span using the class  uk-margin-remove-bottom to remove the space below the span element. also using the attribute uk-icon to start to use the UIKIT icon component and the icon: to tell which icon we are going to use (Marcus Palmer) -->
					<span class="uk-margin-remove-bottom" uk-icon="icon: commenting; ratio: 4"></span> 
					
					<!-- h3 header 3 using the class uk-card-title which adds a heading to define a card title. (Marcus Palmer) -->
            		<h3 class="uk-card-title">
						
						<!-- h3 content (Marcus Palmer) -->
						Report An Issue
						
					<!-- header 3 h3 ends here (Marcus Palmer) -->
					</h3>
            		
					<!-- Paragraph starts here (Marcus Palmer) -->
					<p>
						<!-- paragraph content starts here (Marcus Palmer) -->
						Tell us about a problem in your local area, once we know about it we can do something about it.
						
					<!-- Paragraph ends here (Marcus Palmer) -->
					</p>
					
					<!-- a href link tag using the class uk-button to access UIKIT component button, using the class uk-button-primary to style the button -->
					<a class="uk-button uk-button-primary" href="">
						
						<!-- Link content -->
						Learn more
					
					<!-- a href link tag ends here -->
					</a>
					
				<!-- div container ends here (Marcus Palmer) -->
        		</div>
				
			<!-- div container ends here (Marcus Palmer) -->
    		</div>
				
			<!-- div container ends here (Marcus Palmer) -->
    		<div>
				
				<!-- div container using the class uk-card which allows us to use UIKIT card component in the site. uk-card-default means a predefined style for the card element. uk-card-body creates padding between the card and its content. (Marcus Palmer) -->
        		<div id="loginDiv" class="uk-card uk-card-primary uk-card-body uk-text-center">
					
					<!-- span element to host an icon, span using the class  uk-margin-remove-bottom to remove the space below the span element. also using the attribute uk-icon to start to use the UIKIT icon component and the icon: to tell which icon we are going to use (Marcus Palmer) -->
					<span class="uk-margin-remove-bottom" uk-icon="icon: sign-in; ratio: 4"></span> 
					
					<!-- h3 header 3 using the class uk-card-title which adds a heading to define a card title. (Marcus Palmer) -->
           		 	<h3 class="uk-card-title">
					 
					 <!-- h3 content (Marcus Palmer) -->
					Login
					 
					<!-- header 3 h3 ends here (Marcus Palmer) -->
					</h3>
					
 						
					<form class="uk-hidden-notouch">
					
					<div>
						
						<p>
						
						To login to our cms system please login using your login credentials provided when you signed up!
						</p>
						
					</div>
						
    				<div class="uk-margin">
        				<div class="uk-inline">
            			
							<a class="uk-form-icon" href="#" uk-icon="icon: user"></a>
            			<input class="uk-input uk-form-large" type="text" placeholder="Username">
        				</div>
    				</div>

    				<div class="uk-margin">
        				<div class="uk-inline">
            				<a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: lock"></a>
							
            				<input class="uk-input uk-form-large" type="text" placeholder="Password">
        				</div>
   				 	</div>
						
						<div class="uk-text-left">
						<button class ="uk-button uk-button-default">Login</button>
						
						</div>

					</form>
					
					<div class="uk-hidden-touch">
						
					<p>
						To login to our cms system please click the login button below.
					</p>
						
					<!-- a href link tag using the class uk-button to access UIKIT component button, using the class uk-button-default to style the button -->
					<a class="uk-button uk-button-primary" href="">
						
						<!-- Link content (Marcus Palmer)-->
						Login
					
					<!-- a href link tag ends here (Marcus Palmer)-->
					</a>
						
					</div>
					
					<hr class="uk-divider-icon">
					
					<h4 class="uk-margin-small-top">Register</h4>
					<p>Register for an account to gain access to our reporting system and more.</p>
					
					<!-- a href link tag using the class uk-button to access UIKIT component button, using the class uk-button-primary to style the button (Marcus Palmer)-->
					<a class="uk-button uk-button-primary" href="">
						
						<!-- Link content (Marcus Palmer) -->
						Register
					
					<!-- a href link tag ends here (Marcus Palmer) -->
					</a>
					
			<!-- div container ends here (Marcus Palmer) (Marcus Palmer) -->			
        	</div>
				
			<!-- div container ends here (Marcus Palmer) (Marcus Palmer) -->
			</div>

			<!-- div container starts here (Marcus Palmer) -->
			<div>

				<!-- div container using the class uk-card which allows us to use UIKIT card component in the site. uk-card-default means a predefined style for the card element. uk-card-body creates padding between the card and its content. (Marcus Palmer) -->
				<div class="uk-card uk-card-default uk-card-body uk-text-center">
						
					<!-- span element to host an icon, span using the class  uk-margin-remove-bottom to remove the space below the span element. also using the attribute uk-icon to start to use the UIKIT icon component and the icon: to tell which icon we are going to use (Marcus Palmer) -->
					<span class="uk-margin-remove-bottom" uk-icon="icon: receiver; ratio: 4"></span> 

					<!-- h3 header 3 using the class uk-card-title which adds a heading to define a card title. (Marcus Palmer) -->
					<h3 class="uk-card-title">

						<!-- h3 content (Marcus Palmer) -->
						Contact Us

					<!-- header 3 h3 ends here (Marcus Palmer) -->
					</h3>

					<!-- Paragraph starts here (Marcus Palmer) -->
					<p>
						<!-- paragraph content (Marcus Palmer) -->
						Here at teh council we have different departments to manage different types of issues, please click the button below to view all our contacts.

					<!-- paragraph ends here (Marcus Palmer) -->
					</p>

					
					<!-- a href link tag using the class uk-button to access UIKIT component button, using the class uk-button-primary to style the button -->
					<a class="uk-button uk-button-primary" href="">
						
						<!-- Link content -->
						Contacts
					
					<!-- a href link tag ends here -->
					</a>
					
				<!-- div content ends here (Marcus Palmer) -->
				</div>

			<!-- div content ends here (Marcus Palmer) -->
			</div>

		<!-- div content ends here (Marcus Palmer) -->				
		</div>
			
		 <!-- div container ends here (Marcus Palmer)-->
		 </div>
	
	<!-- div container ends here (Marcus Palmer)-->
	</div>
	 
	  <!--      3 Box Option Starts Ends Here   (Marcus Palmer)  -->
	 
	 <!-- Slideshow (Marcus Palmer) (Marcus Palmer) -->
	 <!-- php language starts here (Marcus Palmer) -->
	 <?php 
	 
	 // Print on screen whatever is inside the following variable (Marcus Palmer)
	 echo "$homeSlideshow"; 
	 
	 // php ends here (Marcus Palmer)
	 ?>
	 <!-- Slideshow ends here (Marcus Palmer)-->
	 
	 
	 <!-- Local Reports List (Marcus Palmer) -->
	 
	 <!-- div container starts here using the class uk-section to create a block element, using uk-section-secondary to style the block content, using the attribute uk-light to make the content a pre-defined light style (Marcus Palmer) -->
	 <div class="uk-section uk-section-secondary uk-light">
		 
		 <!-- div container starts here using the class uk-container which gives the container the max-width possible based on the users viewport (Marcus Palmer) -->
    	<div class="uk-container">
	
		<!-- h3 tag header 3 starts here used to style the following content as a header (Marcus Palmer )-->
        <h3>
			
			<!-- header 3 content (Marcus Palmer) -->
			Local Reported Problems
			
		
		<!-- header 3 ends here (Marcus Palmer) -->
		</h3>

		<!-- div container starts here using the class uk-grid-match to make each element within the grid have the same height no matter the level of content, also using uk-child-width-1-3@m which will spit the content into 3 grid elements only on a user viewport larger than 960px otherwise the content will align vertically, using teh attribute uk-grid to make the elements form a horizontal or verticle grid (Marcus Palmer) -->
        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
			
			<!-- div container starts here (Marcus Palmer) -->
            <div>
				
				<!-- CARD (Marcus Palmer) -->
				
				<!-- div container starts here using the class uk-card to access UIKIT component card and using uk-card-primary to style the card using a pre-defined UIKIT style (Marcus Palmer) -->
                <div class="uk-card uk-card-primary">
					
					<!-- div container start here using the class uk-card-header to divide the card and set the following content as the header of the card (Marcus Palmer) -->
   				  <div class="uk-card-header">
						
						<!-- div container starts here using the class uk-grid-small to set a small grid element, using the class uk-flex-middle to center flex items along the cross axis, also using the attribute uk-grid to access and use the UIKIT grid component (Marcus Palmer) -->
       				<div class="uk-grid-small uk-flex-middle" uk-grid>
            				
							<!-- div container using the class uk-width-auto to allow the div to expand only to the width of its own content (Marcus Palmer) -->   
							<div class="uk-width-auto">
								
								<!-- tag to introduce an image to the page and finding that image through the "src" source tag, using the class uk-border-circle to give the image an circle effect, using the atttribute width and height to set these parameters (Marcus Palmer) --> 
                				<img class="uk-border-circle" width="40" height="43" src="images/female1_small.png">
								
							<!-- div container ends here (Marcus Palmer) -->
            				</div>
							
				<!-- div container using the class uk-width-expand to allow the div expands to fill up the remaining space of the grid container (Marcus Palmer) -->
            	<div class="uk-width-expand">
					
				 <!-- h3 tag header 3 using the class uk-card title which attaches to the h3 to the heading to define a card title (Marcus Palmer) -->
               	 <h3 class="uk-card-title uk-margin-remove-bottom">
					 
					 <!-- Card Title (Marcus Palmer) -->
					 Pothole Detected
					
				<!-- header 3 h3 tag ends here (Marcus Palmer) -->
				</h3>
					
				<!-- paragraph tag to set the space between content as a paragraph using the class uk-text-meta to make the text smaller and seem as if it is meta data, also using the class uk-margin-remove-top to remove the margin from above the content block (Marcus Palmer) -->
                <p class="uk-text-meta uk-margin-remove-top">
					
					<!-- A time element with a machine-readable datetime attribute (Marcus Palmer) -->
					<time datetime="2019-01-10T19:00">
						
						<!-- time datetime content (Marcus Palmer) -->
						January 10, 2019
					
					<!--time tag ends here (Marcus Palmer) -->
					</time>
					
				<!-- Paragraph tag ends here (Marcus Palmer) -->
				</p>
					
			<!-- div container ends here (Marcus Palmer) -->		
            </div>
							
		<!-- div container ends here (Marcus Palmer) --></div>
   				  </div>
					
			<!-- div container starts here using the class uk-card-body to create padding between the card and its content (Marcus Palmer) -->			
			<div class="uk-card-body">
				
		
				
				
				<!-- paragraph tag starts here (Marcus Palmer) -->
				<p>

					<!-- card body content (Marcus Palmer) -->
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.

				<!-- Paragraph tag ends here (Marcus Palmer) -->
				</p>

			<!-- div container ends here (Marcus Palmer) -->
			</div>

			<!-- div container starts here using the class uk-card-footer (Marcus Palmer) -->
			<div class="uk-card-footer">

				<!-- a href tag link using the class uk-button to access UIKIT button component and also using the class uk-button-text to style the button wietha pre-defined uikit styling (Marcus Palmer) -->
				
				
				<a href="#" class="uk-button uk-button-text">

					<!-- link buton content (Marcus Palmer) -->
					Read more

				<!-- button tag ends here (Marcus Palmer) -->
				</a>
				
				<!-- button tag starts here using the class uk-buton to access UIKIT button component, also using the class uk-button-default to style the button, also using the class uk-button-small to give the button a small size, also using the class uk-align-right to align this button  to the right of the card (Marcus palmer)  -->
				<button class="uk-button uk-button-default uk-button-small uk-align-right uk-width-1-3" type="button" disabled>

					<!--  buton content (Marcus Palmer) -->
					Resolved

				<!-- button tag ends here (Marcus Palmer) -->
				</button>

			<!-- div container ends here (Marcus Palmer) -->
			</div>
					
		<!-- CARD Ends here (Marcus Palmer) -->
					
					
		<!-- div container ends here (Marcus Palmer) -->					
		</div>
				
	<!-- div container ends here (Marcus Palmer) -->
	</div>
			
<!-- div container ends here (Marcus Palmer) -->
<div>
               
				<!-- CARD (Marcus Palmer) -->
				
				<!-- div container starts here using the class uk-card to access UIKIT component card and using uk-card-primary to style the card using a pre-defined UIKIT style (Marcus Palmer) -->
                <div class="uk-card uk-card-primary">
					
					<!-- div container start here using the class uk-card-header to divide the card and set the following content as the header of the card (Marcus Palmer) -->
   				  <div class="uk-card-header">
						
						<!-- div container starts here using the class uk-grid-small to set a small grid element, using the class uk-flex-middle to center flex items along the cross axis, also using the attribute uk-grid to access and use the UIKIT grid component (Marcus Palmer) -->
       				<div class="uk-grid-small uk-flex-middle" uk-grid>
            				
							<!-- div container using the class uk-width-auto to allow the div to expand only to the width of its own content (Marcus Palmer) -->   
							<div class="uk-width-auto">
								
								<!-- tag to introduce an image to the page and finding that image through the "src" source tag, using the class uk-border-circle to give the image an circle effect, using the atttribute width and height to set these parameters (Marcus Palmer) --> 
                				<img class="uk-border-circle" width="40" height="42" src="images/maleicon1-1_small.png">
								
							<!-- div container ends here (Marcus Palmer) -->
            				</div>
							
				<!-- div container using the class uk-width-expand to allow the div expands to fill up the remaining space of the grid container (Marcus Palmer) -->
            	<div class="uk-width-expand">
					
				 <!-- h3 tag header 3 using the class uk-card title which attaches to the h3 to the heading to define a card title (Marcus Palmer) -->
               	 <h3 class="uk-card-title uk-margin-remove-bottom">
					 
					 <!-- Card Title (Marcus Palmer) -->
					 Graffiti Detected
					
				<!-- header 3 h3 tag ends here (Marcus Palmer) -->
				</h3>
					
				<!-- paragraph tag to set the space between content as a paragraph using the class uk-text-meta to make the text smaller and seem as if it is meta data, also using the class uk-margin-remove-top to remove the margin from above the content block (Marcus Palmer) -->
                <p class="uk-text-meta uk-margin-remove-top">
					
					<!-- A time element with a machine-readable datetime attribute (Marcus Palmer) -->
					<time datetime="2019-01-10T19:00">
						
						<!-- time datetime content (Marcus Palmer) -->
						January 20, 2019
					
					<!--time tag ends here (Marcus Palmer) -->
					</time>
					
				<!-- Paragraph tag ends here (Marcus Palmer) -->
				</p>
					
			<!-- div container ends here (Marcus Palmer) -->
            </div>
							
		<!-- div container ends here (Marcus Palmer) -->
		</div>
					  
	<!-- div container ends here (Marcus Palmer) -->
   </div>
		
			<!-- div container starts here using the class uk-card-body to create padding between the card and its content (Marcus Palmer) -->			
			<div class="uk-card-body">

				<!-- paragraph tag starts here (Marcus Palmer) -->
				<p>

					<!-- card body content (Marcus Palmer) -->
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.

				<!-- Paragraph tag ends here (Marcus Palmer) -->
				</p>

			<!-- div container ends here (Marcus Palmer) -->
			</div>

			<!-- div container starts here using the class uk-card-footer (Marcus Palmer) -->
			<div class="uk-card-footer">

				<!-- a href tag link using the class uk-button to access UIKIT button component and also using the class uk-button-text to style the button wietha pre-defined uikit styling (Marcus Palmer) -->
				<a href="#" class="uk-button uk-button-text">

					<!-- link buton content (Marcus Palmer) -->
					Read more

				<!-- link a href tag ends here (Marcus Palmer) -->
				</a>
				
				<!-- button tag starts here using the class uk-buton to access UIKIT button component, also using the class uk-button-default to style the button, also using the class uk-button-small to give the button a small size, also using the class uk-align-right to align this button  to the right of the card (Marcus palmer)  -->
				<button class="uk-button uk-background-secondary uk-button-small uk-align-right uk-width-1-3" type="button" disabled>

					<!--  buton content (Marcus Palmer) -->
					Active

				<!-- button tag ends here (Marcus Palmer) -->
				</button>

				

			<!-- div container ends here (Marcus Palmer) -->
			</div>
					
				<!-- CARD Ends here -(Marcus Palmer) ->

		<!-- div container ends here (Marcus Palmer) -->					
		</div>
			
				
	<!-- div container ends here (Marcus Palmer) -->	
    </div>
			
<!-- div container ends here (Marcus Palmer) -->
<div>
                
	
	<!-- CARD (Marcus Palmer) -->
				
				<!-- div container starts here using the class uk-card to access UIKIT component card and using uk-card-primary to style the card using a pre-defined UIKIT style (Marcus Palmer) -->
                <div class="uk-card uk-card-primary">
					
					<!-- div container start here using the class uk-card-header to divide the card and set the following content as the header of the card (Marcus Palmer) -->
   				  <div class="uk-card-header">
						
						<!-- div container starts here using the class uk-grid-small to set a small grid element, using the class uk-flex-middle to center flex items along the cross axis, also using the attribute uk-grid to access and use the UIKIT grid component (Marcus Palmer) -->
       					<div class="uk-grid-small uk-flex-middle" uk-grid>
            				
							<!-- div container using the class uk-width-auto to allow the div to expand only to the width of its own content (Marcus Palmer) -->   
							<div class="uk-width-auto">
								
								<!-- tag to introduce an image to the page and finding that image through the "src" source tag, using the class uk-border-circle to give the image an circle effect, using the atttribute width and height to set these parameters (Marcus Palmer) --> 
                				<img class="uk-border-circle" width="40" height="45" src="images/female5_small.png">
								
							<!-- div container ends here (Marcus Palmer) -->
            				</div>
							
				<!-- div container using the class uk-width-expand to allow the div expands to fill up the remaining space of the grid container (Marcus Palmer) -->
            	<div class="uk-width-expand">
					
				 <!-- h3 tag header 3 using the class uk-card title which attaches to the h3 to the heading to define a card title (Marcus Palmer) -->
               	 <h3 class="uk-card-title uk-margin-remove-bottom">
					 
					 <!-- Card Title (Marcus Palmer) -->
					 Park Vandalism
					
				<!-- header 3 h3 tag ends here (Marcus Palmer) -->
				</h3>
					
				<!-- paragraph tag to set the space between content as a paragraph using the class uk-text-meta to make the text smaller and seem as if it is meta data, also using the class uk-margin-remove-top to remove the margin from above the content block (Marcus Palmer) -->
                <p class="uk-text-meta uk-margin-remove-top">
					
					<!-- A time element with a machine-readable datetime attribute (Marcus Palmer) -->
					<time datetime="2019-01-10T19:00">
						
						<!-- time datetime content (Marcus Palmer) -->
						January 11, 2019
					
					<!--time tag ends here (Marcus Palmer) -->
					</time>
					
				<!-- Paragraph tag ends here (Marcus Palmer) -->
				</p>
					
			<!-- div container ends here (Marcus Palmer) -->		
            </div>
							
		<!-- div container ends here (Marcus Palmer) --></div>
   				  </div>
					
			<!-- div container starts here using the class uk-card-body to create padding between the card and its content (Marcus Palmer) -->			
			<div class="uk-card-body">

				<!-- paragraph tag starts here (Marcus Palmer) -->
				<p>

					<!-- card body content (Marcus Palmer) -->
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.

				<!-- Paragraph tag ends here (Marcus Palmer) -->
				</p>

			<!-- div container ends here (Marcus Palmer) -->
			</div>

			<!-- div container starts here using the class uk-card-footer (Marcus Palmer) -->
			<div class="uk-card-footer">

				<!-- a href tag link using the class uk-button to access UIKIT button component and also using the class uk-button-text to style the button wietha pre-defined uikit styling -->
				<a href="#" class="uk-button uk-button-text">

					<!-- link buton content (Marcus Palmer) -->
					Read more

				<!-- link a href tag ends here (Marcus Palmer) -->
				</a>
				
				<!-- button tag starts here using the class uk-buton to access UIKIT button component, also using the class uk-button-default to style the button, also using the class uk-button-small to give the button a small size, also using the class uk-align-right to align this button  to the right of the card (Marcus palmer)  -->
				<button class="uk-button uk-button-default uk-button-small uk-align-right uk-width-1-3" type="button" disabled>

					<!--  buton content (Marcus Palmer) -->
					Resolved

				<!-- button tag ends here (Marcus Palmer) -->
				</button>


			<!-- div container ends here (Marcus Palmer) -->
			</div>
					
				<!-- CARD Ends here (Marcus Palmer) -->

		<!-- div container ends here (Marcus Palmer) -->					
		</div>
	
			<!-- div container ends here (Marcus Palmer) -->
            </div>
			
		<!-- div container ends here (Marcus Palmer) -->
        </div>
			
	<!-- div container ends here (Marcus Palmer) -->
    </div>
		 
<!-- div container ends here (Marcus Palmer) -->
</div>

	 
	 <!-- Local Reports List Ends Here (Marcus Palmer) -->
	 
	 
	<!-- Footer (Marcus Palmer)-->
	<!-- php language starts here -->
	<?php
	 // Print on screen whatever is inside the following variable (Marcus Palmer)
	 echo "$footer";
	 
	 // php ends here (Marcus Palmer)
	 ?>
	 <!-- Footer ends here (Marcus Palmer)-->
	 
<!-- body tag ends here-->	 
</body>

</html>