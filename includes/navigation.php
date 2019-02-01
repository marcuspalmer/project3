<!-- start php langauage here (Marcus Palmer) -->
<?php
// ------------------------DESKTOP VERSION OF NAVIGATION ------------
// whatever is in the vatiable navigationBar empty here (Marcus Palmer)
$navigationBar ='<!-- div container starts here using the class uk-section-xsmall to tell the browser reserve an area pre-defined size and uk -section-primary to make the navigationbar blue and uk-light to make the font colour light in respect of the navigation bar colour (Marcus Palmer) -->
<div class="uk-section-xsmall uk-section-primary uk-light uk-hidden-touch uk-visible@s">
	
	<!-- nav tag starts here using the class uk-navbar-container to show this area will contain navigation elements also using uk-navbar-transparent to make the default colour of the navigation bar remove as it clashed with the blue and using the attribute uk-navbar to tell browser this is a navigational element (Marcus Palmer) -->
	<nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
    			
		<!-- div container starts here, using the class uk-navbar-left to push all content to the left of th enavigational area (Marcus Palmer) -->
		<div class="uk-navbar-left">
				
			<!-- link tag using a href also using class uk-navbar-item to show this item stays in the navbar and also uk-logo to introduce a predefined style for the logo text if a text element is use (Marcus Palmer) -->
			<a class="uk-navbar-item uk-logo" href="#">
			
			<!-- Link content (Marcus Palmer)-->
			First Call Reports
			
			<!-- end link element here (Marcus Palmer) -->
			</a>
			
		<!-- ul unordered list tag starts here using the class uk-navbar-nav to use a prefined style for these itemes (Marcus Palmer)-->
        <ul class="uk-navbar-nav">
		
			<!-- li list item tag starts here using the class uk-active to show this is a active element and style it different to the other elements in the list (Marcus Palmer)-->
            <li class="uk-active">
			
			<!-- link tag using a href starts here (Marcus Palmer) -->
			<a href="#">
			
			<!-- link content here (Marcus Palmer) -->
			Report an Issue 
			
			<!-- span element starts here using class uk-margin-small-left to give space between icon and link also using the attribute icon to show a uikit icon (Marcus palmer) -->
			<span class="uk-margin-small-left" uk-icon="icon: commenting"></span> 
			
			<!-- Link ends here (Marcus Palmer)-->
			</a> 
			
			
			
			<!-- List item ends here (Marcus Palmer) -->
			</li>
			
			<!-- li list item starts here (Marcus Palmer) -->
            <li>
				
				<!-- a href link tag starts here (Marcus Palmer) -->
                <a href="#">
				
				<!-- Link content here (Marcus Palmer) -->
				About Us
				
				<!-- span element starts here using class uk-margin-small-left to give space between icon and link also using the attribute icon to show a uikit icon (Marcus palmer) -->
				<span class="uk-margin-small-left" uk-icon="icon: info"></span> 
				
				<!-- Link ends here (Marcus Palmer) -->
				</a>
             
			 <!-- li list item ends here (Marcus Palmer) -->
            </li>
			
			<!-- li list item starts here (Marcus Palmer)-->
            <li>
			
				<!-- a href link starts here (Marcus Palmer)-->
				<a href="#">
					
					<!-- Link content (Marcus Palmer)-->
					A-Z Services
					
					<!-- span element starts here using class uk-margin-small-left to give space between icon and link also using the attribute icon to show a uikit icon (Marcus palmer) -->
					<span class="uk-margin-small-left" uk-icon="icon:  reply"></span>
					
					
					<!-- span element starts here using class uk-margin-small-left to give space between icon and link also using the attribute icon to show a uikit icon (Marcus palmer) -->
					<span class="" uk-icon="icon: forward"></span>
					
				<!-- link a href ends here (Marcus Palmer) -->
				</a>
				
				<!-- li list item ends here (Marcus Palmer) -->
				</li>
			
			
			
			
			<!-- li list item starts here (Marcus Palmer)-->
            <li>
			
				<!-- a href link starts here (Marcus Palmer)-->
				<a href="#">
					
					<!-- Link content (Marcus Palmer)-->
					Local Contacts
					
					<!-- span element starts here using class uk-margin-small-left to give space between icon and link also using the attribute icon to show a uikit icon (Marcus palmer) -->
					<span class="uk-margin-small-left" uk-icon="icon: receiver"></span>
					
				<!-- link a href ends here (Marcus Palmer) -->
				</a>
				
				<!-- li list item ends here (Marcus Palmer) -->
				</li>
		
		<!-- ul unordered list ends here (Marcus Palmer) -->
        </ul>
		
	<!-- div container ends here (Marcus Palmer) -->
    </div>
	
	<!-- div container starts here using class uk-navbar-right (Marcus Palmer) -->
    <div class="uk-navbar-right">
	
		<!-- ul unordered list starts here using the class uk-navbar-nav to show these elements will be part of the navbar (Marcus Palmer) --> 
        <ul class="uk-navbar-nav">
		
			<!-- li list item starts here (Marcus Palmer)-->
            <li>
				
				<!-- a href link starts here (Marcus Palmer)-->
                <a href="#">
					
					<!-- link content here (Marcus Palmer)-->
					My Account
					
					<!-- span element starts here using class uk-margin-small-left to give space between icon and link also using the attribute icon to show a uikit icon (Marcus palmer) -->
					<span class="uk-margin-small-left" uk-icon="icon: user"></span>
					
				<!-- link content ends here (Marcus Palmer)-->
				</a>
				
				
				
				<!-- div element starts here using class uk-navbar-dropdown to create a drop menu(Marcus Palmer) -->
                <div class="uk-navbar-dropdown">
				
					<!-- ul unordered list starts here (Marcus Palmer)-->
                    <ul class="uk-nav uk-navbar-dropdown-nav">
					
						<!-- li list item starts here using the class uk-active to show this is a active element and style it different to the rest of elements (Marcus Palmer) -->
                        <li class="uk-active">
						
						<!-- a href link starts here using class uk-link-reset to set the colour of the link to a darker colour (Marcus Palmer) -->
						<a class="uk-link-reset" href="#">
						
							<!-- Link content (Marcus Palmer)-->
							Login
							
							<!-- span element starts here using class uk-margin-small-left to give space between icon and link also using the attribute icon to show a uikit icon (Marcus palmer) -->
							<span class="uk-margin-small-left" uk-icon="icon: sign-in"></span>
							
						<!-- link element ends here (Marcus Palmer) -->
						</a>
						
						<!-- li list item ends here (Marcus Palmer) -->
						</li>
						
						
						
						
						<!-- li list item starts here using the class uk-nav-header to show some seperating text on the dropmenu (Marcus Palmer) -->
                        <li class="uk-nav-header">
						
							<!-- Header text here (Marcus Palmer)-->
							Become a member!
						
						<!-- li listitem ends here (Marcus Palmer)-->
						</li>
						
						<!-- li list item starts here (Marcus Palmer)--> 
                        <li>
						
							<!-- a href link starts here using class uk-link-reset to set the colour of the link to a darker colour (Marcus Palmer) -->
							<a class="uk-link-reset" href="#">
							
								<!-- link contenet here (Marcus Palmer)-->
								Register
								
								<!-- span element starts here using class uk-margin-small-left to give space between icon and link also using the attribute icon to show a uikit icon (Marcus palmer) -->
								<span class="uk-margin-small-left" uk-icon="icon: file-edit"></span>
								
							<!-- link ends here (Marcus Palmer)-->
							</a>
							
						<!-- list item tag ends here (Marcus Palmer) -->	
						</li>
						
					<!-- ul unordered list ends here (Marcus Palmer) -->
                    </ul>
					
				<!-- div container ends here (Marcus Palmer) -->
                </div>
				
			<!-- li list item ends here (Marcus Palmer) -->	
            </li>
			
		<!-- ul unordered list ends here (Marcus Palmer) -->
        </ul>
		
	<!-- div container ends here (Marcus Palmer) -->
    </div>
	
<!-- nav tag element ends here (Marcus Palmer) -->
</nav>

<!-- div container ends here (Marcus Palmer) -->
</div>

<!-- ----------------------Mobile VERSION OF NAVIGATION ---------- -->

<!-- div container using class uk-hidden-notouch so no desktop device can view this (Marcus Palmer) -->
<div class="uk-hidden-notouch">

<!-- nav element using the class uk-navbar to accee UIKIT navbar component, using  to the class uk-navbar-container element or a parent element to add the navbar background style. (Marcus Palmer) -->
<nav class="uk-navbar uk-navbar-container uk-margin">

	<!-- div container using the class uk-navbar-left to align the navigation to the left (Marcus Palmer) -->
    <div class="uk-navbar-left">
	
		<!-- a href link using the class uk-navbar-toogle to show this link will be used to toggle an element while using the attribute uk-navbar-toggle-icon to access UIKIT toggle icon for touch scren devices, using the attribute togfle target to show the element this link will be looking for via an id (Marcus Palmer) -->
        <a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-mobile-nav" href="#">
		
		<!-- Link ends here (Marcus Palmer) -->
		</a>
		
		<!-- a href link class uk-navbar-item to show this is an item of the navigation bar while using uk-logo to give the following contnet the pre defined style for an logo (Marcus Palmer) -->
		<a class="uk-navbar-item uk-logo" href="#">
		
		<!-- Link content (Marcus Palmer) -->
		First Call Reports
		
		<!-- link ends here (Marcus Palmer) -->
		</a>
		
		<a href="#loginDiv" class="uk-position-center-right uk-margin-right" uk-icon="icon: user; ratio: 2" uk-scroll></a>

	<!-- div container ends here (Marcus Palmer) -->
    </div>
	
	
	<!-- div container using the toggle id for target using the attribute uk-offcanvas to acces the UIKIT overlay component while telling that component we would like to use overlay by setting it to true (Marcus Palmer) -->
	<div id="offcanvas-mobile-nav" uk-offcanvas="overlay: true">
	
	<!-- div container using the class uk-offcanvas-bar to show the area where the off-canvas will be (Marcus Palmer) -->
    <div class="uk-offcanvas-bar">

		<!-- ul tag unordered list using the class uk-nav to show the following content will be part of the navigation, using the class uk-nav-default to tell the browser to use the default styling to style the navigation area (Marcus Palmer) -->
        <ul class="uk-nav uk-nav-default">
		
		
			<!-- li tag list item using the class uk-active to give the following content an highlight effect to show it is an active link or content (Marcus Palmer) -->
            <li class="uk-active">
			
			<!-- a href link starts here (Marcus Palmer) -->
			<a href="#">
			
				<!-- span element starts here using the class uk-margin-small-right to give a small space to the right of the content using the attribute uk-icon to access the icon component of UIKIT and icon: to tell the icon component which icon you want to use (Marcus Palmer) -->
				<span class="uk-margin-small-right" uk-icon="icon: home">
				
				<!-- span tag ends here (Marcus Palmer) -->
				</span> 
				
				<!-- link content here (Marcus Palmer) -->
				Home
				
				<!-- link a href ends here (Marcus Palmer) -->
				</a>
				
				<!-- li tag list item ends here (Marcus Palmer) -->
				</li>
				
			<!-- li tag list item using the class uk-parent to give the following content a parent link styling to show it is an parent link or content (Marcus Palmer) -->
            <li class="uk-parent">
			
				<!-- a href link starts here (Marcus Palmer) -->
                <a href="#"> 
				
				<!-- span element starts here using the class uk-margin-small-right to give a small space to the right of the content using the attribute uk-icon to access the icon component of UIKIT and icon: to tell the icon component which icon you want to use (Marcus Palmer) -->
				<span class="uk-margin-small-right" uk-icon="icon: commenting">
				
				<!-- span tag ends here (Marcus Palmer) -->
				</span> 
				
					<!-- link content here (Marcus Palmer) -->
					Report An Issue
					
				<!-- link a href ends here (Marcus Palmer) -->
				</a>
               
			 <!-- li tag list item ends here (Marcus Palmer) -->
            </li>
			
			<!-- li tag list item using the class uk-parent to give the following content a parent link styling to show it is an parent link or content (Marcus Palmer) -->
			 <li class="uk-parent">
			 
			 	<!-- a href link starts here (Marcus Palmer) -->
                <a href="#"> 
				
				<!-- span element starts here using the class uk-margin-small-right to give a small space to the right of the content using the attribute uk-icon to access the icon component of UIKIT and icon: to tell the icon component which icon you want to use (Marcus Palmer) -->
				<span class="uk-margin-small-right" uk-icon="icon: info">
				
				<!-- span tag ends here (Marcus Palmer) -->
				</span>
				
				<!-- link content here (Marcus Palmer) -->
				About Us
				
				<!-- link a href ends here (Marcus Palmer) -->
				</a>
              
			 <!-- li tag list item ends here (Marcus Palmer) -->
            </li>
			
			<!-- li tag list item using the class uk-parent to give the following content a parent link styling to show it is an parent link or content (Marcus Palmer) -->
			 <li class="uk-parent">
			 
			 	<!-- a href link starts here (Marcus Palmer) -->
                <a href="#">
				
				<!-- span element starts here using the class uk-margin-small-right to give a small space to the right of the content using the attribute uk-icon to access the icon component of UIKIT and icon: to tell the icon component which icon you want to use (Marcus Palmer) -->
				<span class="uk-margin-remove-right" uk-icon="icon: reply">
				
				<!-- span tag ends here (Marcus Palmer) -->
				</span> 
				
				<!-- span element starts here using the class uk-margin-small-right to give a small space to the right of the content using the attribute uk-icon to access the icon component of UIKIT and icon: to tell the icon component which icon you want to use (Marcus Palmer) -->
				<span class="uk-margin-small-right" uk-icon="icon: forward">
				
				<!-- span tag ends here (Marcus Palmer) -->
				</span> 
				
				<!-- link content here (Marcus Palmer) -->
				A-Z Services
				
				<!-- link a href ends here (Marcus Palmer) -->
				</a>
               
			 <!-- li tag list item ends here (Marcus Palmer) -->  
            </li>
			
			<!-- li tag list item using the class uk-parent to give the following content a parent link styling to show it is an parent link or content (Marcus Palmer) -->
			 <li class="uk-parent">
			 
			 	<!-- a href link starts here (Marcus Palmer) -->
                <a href="#"> 
				
				<!-- link content here (Marcus Palmer) -->
				Local Contacts
				
				<!-- link a href ends here (Marcus Palmer) -->
				</a>
               
			 <!-- li tag list item ends here (Marcus Palmer) -->    
            </li>
			
			<!-- li tag list item using the class uk-nav-header to show the following content will be styled for navigation header content (Marcus Palmer) -->
            <li class="uk-nav-header">
			
			<!-- content header (Marcus Palmer) -->
			My Account
			
			<!-- li list item ends here (Marcus Palmer) -->
			</li>
			
			<!-- li tag list item starts here (Marcus Palmer) -->
            <li>
			
			<!-- a href link starts here (Marcus Palmer) -->
			<a href="#"> 
			
			<!-- span element starts here using the class uk-margin-small-right to give a small space to the right of the content using the attribute uk-icon to access the icon component of UIKIT and icon: to tell the icon component which icon you want to use (Marcus Palmer) -->
			<span class="uk-margin-small-right" uk-icon="icon: sign-in">
			
			<!-- span tag ends here (Marcus Palmer) -->
			</span> 
			
			<!-- link content here (Marcus Palmer) -->
			Login
			
			<!-- link a href ends here (Marcus Palmer) -->
			</a>
			
			<!-- li tag list item starts here (Marcus Palmer) -->
			</li>
			
			<!-- li tag list item starts here (Marcus Palmer) -->
            <li>
			
			<!-- a href link starts here (Marcus Palmer) -->
			<a href="#">
			
			<!-- span element starts here using the class uk-margin-small-right to give a small space to the right of the content using the attribute uk-icon to access the icon component of UIKIT and icon: to tell the icon component which icon you want to use -->
			<span class="uk-margin-small-right" uk-icon="icon: pencil">
			
			<!-- span tag ends here (Marcus Palmer) -->
			</span> 
			
			<!-- link content here (Marcus Palmer) -->
			Register
			
			<!-- link a href ends here (Marcus Palmer) -->
			</a>
			
			<!-- li tag list item starts here using the class uk-nav-divider to draw a diving line accross the navbar (Marcus Palmer) -->
			</li>
            <li class="uk-nav-divider">
			
			<!-- li tag list item starts here (Marcus Palmer) -->
			</li>
			
         <!-- ul tag unordered list ends here (Marcus Palmer) -->
        </ul>
		
	<!-- div container ends here (Marcus Palmer) -->
    </div>
	
<!-- div container ends here (Marcus Palmer) -->
</div>

<!-- nav tag ends here (Marcus Palmer) -->
</nav>

<!-- div container ends here (Marcus Palmer) -->
</div>



<!-- ----------------------HANDLE SMALL DESKTOPS VERSION OF NAVIGATION ---------- -->

<!-- div container using the class uk-hidden@m to hide the the following content from any device with a viewport larger 960px  uk hidden@s to hide content from ant device larger than 640px and uk-hidden-touch to hide content from any touch scren devices (Marcus Palmer) -->
<div class="uk-hidden@m uk-hidden@s uk-hidden-touch">


<!-- nav element using the class uk-navbar to accee UIKIT navbar component, using  to the class uk-navbar-container element or a parent element to add the navbar background style. (Marcus Palmer) -->
<nav class="uk-navbar uk-navbar-container uk-margin">

	<!-- div container using the class uk-navbar-left to align the navigation to the left (Marcus Palmer) -->
    <div class="uk-navbar-left">
	
		<!-- a href link using the class uk-navbar-toogle to show this link will be used to toggle an element while using the attribute uk-navbar-toggle-icon to access UIKIT toggle icon for touch scren devices, using the attribute togfle target to show the element this link will be looking for via an id (Marcus Palmer) -->
        <a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-mobile-nav" href="#">
		
		<!-- Link ends here (Marcus Palmer) -->
		</a>
		
		<!-- a href link class uk-navbar-item to show this is an item of the navigation bar while using uk-logo to give the following contnet the pre defined style for an logo (Marcus Palmer) -->
		<a class="uk-navbar-item uk-logo" href="#">
		
		<!-- Link content (Marcus Palmer) -->
		First Call Reports
		
		<!-- link ends here (Marcus Palmer) -->
		</a>
		
		<a href="#loginDiv" class="uk-position-center-right uk-margin-right" uk-icon="icon: user; ratio: 2" uk-scroll></a>
		
	<!-- div container ends here (Marcus Palmer) -->
    </div>
	
	<!-- div container using the toggle id for target using the attribute uk-offcanvas to acces the UIKIT overlay component while telling that component we would like to use overlay by setting it to true (Marcus Palmer) -->
	<div id="offcanvas-mobile-nav" uk-offcanvas="overlay: true">
	
	<!-- div container using the class uk-offcanvas-bar to show the area where the off-canvas will be (Marcus Palmer) -->
    <div class="uk-offcanvas-bar">

		<!-- ul tag unordered list using the class uk-nav to show the following content will be part of the navigation, using the class uk-nav-default to tell the browser to use the default styling to style the navigation area (Marcus Palmer) -->
        <ul class="uk-nav uk-nav-default">
		
		
			<!-- li tag list item using the class uk-active to give the following content an highlight effect to show it is an active link or content (Marcus Palmer) -->
            <li class="uk-active">
			
			<!-- a href link starts here (Marcus Palmer) -->
			<a href="#">
			
				<!-- span element starts here using the class uk-margin-small-right to give a small space to the right of the content using the attribute uk-icon to access the icon component of UIKIT and icon: to tell the icon component which icon you want to use (Marcus Palmer) -->
				<span class="uk-margin-small-right" uk-icon="icon: home">
				
				<!-- span tag ends here (Marcus Palmer) -->
				</span> 
				
				<!-- link content here (Marcus Palmer) -->
				Home
				
				<!-- link a href ends here (Marcus Palmer) -->
				</a>
				
				<!-- li tag list item ends here (Marcus Palmer) -->
				</li>
				
			<!-- li tag list item using the class uk-parent to give the following content a parent link styling to show it is an parent link or content (Marcus Palmer) -->
            <li class="uk-parent">
			
				<!-- a href link starts here (Marcus Palmer) -->
                <a href="#"> 
				
				<!-- span element starts here using the class uk-margin-small-right to give a small space to the right of the content using the attribute uk-icon to access the icon component of UIKIT and icon: to tell the icon component which icon you want to use (Marcus Palmer) -->
				<span class="uk-margin-small-right" uk-icon="icon: commenting">
				
				<!-- span tag ends here (Marcus Palmer) -->
				</span> 
				
					<!-- link content here (Marcus Palmer) -->
					Report An Issue
					
				<!-- link a href ends here (Marcus Palmer) -->
				</a>
               
			 <!-- li tag list item ends here (Marcus Palmer) -->
            </li>
			
			<!-- li tag list item using the class uk-parent to give the following content a parent link styling to show it is an parent link or content (Marcus Palmer) -->
			 <li class="uk-parent">
			 
			 	<!-- a href link starts here (Marcus Palmer) -->
                <a href="#"> 
				
				<!-- span element starts here using the class uk-margin-small-right to give a small space to the right of the content using the attribute uk-icon to access the icon component of UIKIT and icon: to tell the icon component which icon you want to use (Marcus Palmer) -->
				<span class="uk-margin-small-right" uk-icon="icon: info">
				
				<!-- span tag ends here (Marcus Palmer) -->
				</span>
				
				<!-- link content here (Marcus Palmer) -->
				About Us
				
				<!-- link a href ends here (Marcus Palmer) -->
				</a>
              
			 <!-- li tag list item ends here (Marcus Palmer) -->
            </li>
			
			<!-- li tag list item using the class uk-parent to give the following content a parent link styling to show it is an parent link or content (Marcus Palmer) -->
			 <li class="uk-parent">
			 
			 	<!-- a href link starts here (Marcus Palmer) -->
                <a href="#">
				
				<!-- span element starts here using the class uk-margin-small-right to give a small space to the right of the content using the attribute uk-icon to access the icon component of UIKIT and icon: to tell the icon component which icon you want to use (Marcus Palmer) -->
				<span class="uk-margin-remove-right" uk-icon="icon: reply">
				
				<!-- span tag ends here (Marcus Palmer) -->
				</span> 
				
				<!-- span element starts here using the class uk-margin-small-right to give a small space to the right of the content using the attribute uk-icon to access the icon component of UIKIT and icon: to tell the icon component which icon you want to use (Marcus Palmer) -->
				<span class="uk-margin-small-right" uk-icon="icon: forward">
				
				<!-- span tag ends here (Marcus Palmer) -->
				</span> 
				
				<!-- link content here (Marcus Palmer) -->
				A-Z Services
				
				<!-- link a href ends here (Marcus Palmer) -->
				</a>
               
			 <!-- li tag list item ends here (Marcus Palmer) -->  
            </li>
			
			<!-- li tag list item using the class uk-parent to give the following content a parent link styling to show it is an parent link or content (Marcus Palmer) -->
			 <li class="uk-parent">
			 
			 	<!-- a href link starts here (Marcus Palmer) -->
                <a href="#"> 
				
				<!-- link content here (Marcus Palmer) -->
				Local Contacts
				
				<!-- link a href ends here (Marcus Palmer) -->
				</a>
               
			 <!-- li tag list item ends here (Marcus Palmer) -->    
            </li>
			
			<!-- li tag list item using the class uk-nav-header to show the following content will be styled for navigation header content (Marcus Palmer) -->
            <li class="uk-nav-header">
			
			<!-- content header (Marcus Palmer) -->
			My Account
			
			<!-- li list item ends here (Marcus Palmer) -->
			</li>
			
			<!-- li tag list item starts here (Marcus Palmer) -->
            <li>
			
			<!-- a href link starts here (Marcus Palmer) -->
			<a href="#"> 
			
			<!-- span element starts here using the class uk-margin-small-right to give a small space to the right of the content using the attribute uk-icon to access the icon component of UIKIT and icon: to tell the icon component which icon you want to use (Marcus Palmer) -->
			<span class="uk-margin-small-right" uk-icon="icon: sign-in">
			
			<!-- span tag ends here (Marcus Palmer) -->
			</span> 
			
			<!-- link content here (Marcus Palmer) -->
			Login
			
			<!-- link a href ends here (Marcus Palmer) -->
			</a>
			
			<!-- li tag list item starts here (Marcus Palmer) -->
			</li>
			
			<!-- li tag list item starts here (Marcus Palmer) -->
            <li>
			
			<!-- a href link starts here (Marcus Palmer) -->
			<a href="#">
			
			<!-- span element starts here using the class uk-margin-small-right to give a small space to the right of the content using the attribute uk-icon to access the icon component of UIKIT and icon: to tell the icon component which icon you want to use -->
			<span class="uk-margin-small-right" uk-icon="icon: pencil">
			
			<!-- span tag ends here (Marcus Palmer) -->
			</span> 
			
			<!-- link content here (Marcus Palmer) -->
			Register
			
			<!-- link a href ends here (Marcus Palmer) -->
			</a>
			
			<!-- li tag list item starts here using the class uk-nav-divider to draw a diving line accross the navbar (Marcus Palmer) -->
			</li>
            <li class="uk-nav-divider">
			
			<!-- li tag list item starts here (Marcus Palmer) -->
			</li>
			
         <!-- ul tag unordered list ends here (Marcus Palmer) -->
        </ul>
		
	<!-- div container ends here (Marcus Palmer) -->
    </div>
	
<!-- div container ends here (Marcus Palmer) -->
</div>

<!-- nav tag ends here (Marcus Palmer) -->
</nav>

<!-- div container ends here -->
</div>
';


	
	
// php ends here
?>


