<div id='headerContainer'>
    <div id='topBar'>
		
	</div><!-- END topBar -->
	<header id="header" class='clearfix'>
         <img class='coffee' src='http://setdesign-la.com/bagelmania-images/BMmug2.png'/>
		<hgroup>

			<h1 id="site-logo">
			    <div class='bagelBounce'></div>
			    <a href="home">
				<img src="http://setdesign-la.com/bagelmania-images/bagelmaniaHB.png"/>

			   </a>
			</h1>
			<!-- <h2 id="site-description">Coffee House</h2>  ***this is temporarly out -->
		</hgroup>

	</header><!-- /#header -->
	
	
		<nav>
		
		    <ul id="main-nav" class="clearfix">
			
				<?php print render($page['bagelmania_menu']); ?>
			</ul> 
			
		</nav>
		<!----- END #main-nav ------>  
		
</div><!-- headerContainer -->

<div id="pagewrap">
   
   <p class='phoneNumber'>Call your order in now! 
                          We <span style='color:red;font-size:150%;'>&hearts;</span> phone orders!!...............<span>(714) 965-5637</span></p>
 <div class='pageBorder'></div>
	
<div id="content">



		<article class="post clearfix">

			
	<!-------- JH this is the content section that can be edited on interface page -------------------->		
		<?php print render($page['highlighted']); ?>
		<?php if ($tabs = render($tabs)): ?>
                <div class="tabs"><?php print $tabs; ?></div>
               <?php endif; ?>
      
                               <?php if ($title): ?>
                <h1 class="title" id="page-title"><?php print $title; ?></h1>
                <?php endif; ?>
               
               <?php print render($page['content']); ?>	
	
		</article> <!-- /.post -->
		
		<!--  ################# FACEBOOK WIDGET ################ -->
		
		<article class="post clearfix facebookWidget">	
		<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.
		facebook.com%2Fpages%2FBagelmania-Coffee-House%2F109439069094992&amp;width=292&amp;height=290&amp;
		colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=true" scrolling="no" 
		frameborder="0" style="border:none; overflow:hidden; width:292px; height:290px;" allowTransparency="true">
		</iframe>
       </article>
	   <!-- ################ END facebook widget ############### -->
		
    <!---------------- END of the content section -------------------------------------------->
		

	</div> <!-- /#content --> 
	
	
	
	<aside id="sidebar">
	
	<div id='put-here'><a href='enter-here' >
	       <img class ='enter-here' src='http://setdesign-la.com/bagelmania-images/enter-here2.png'
		   title='Click Here for a chance to win a $50 gift certificate'/></a>
	    </div>
	
	
	<section class="topColumnWidget clearfix social">
			<h4 class="widgettitle"><!--Follow Us- JH- this is behind enter banner --></h4>
	
        <a href="https://www.facebook.com/pages/Bagelmania-Coffee-House/109439069094992" target='_blank'> 
		 <img src="http://setdesign-la.com/bagelmania-images/facebookTop.png" /></a>
		<a href="https://twitter.com/BagelmaniaHB" target='_blank'> 
		<img src="http://setdesign-la.com/bagelmania-images/twitterTop.png" /></a>
</section><!-- /.widget -->
    <div class='widgetBorder'></div>
		<section class="widget  clearfix">
		<h4 class='widgettitle '>Menus</h4>
	<div id='Gallery'>
		<div class='thumbs'>
	<a rel="external" title="Bagels"   href="http://www.setdesign-la.com/bagelmania-images/menus/Bagels.jpg" >
	</a>
	
    <a rel="external" title="Bagel Too"   href="http://www.setdesign-la.com/bagelmania-images/menus/Bagels2.jpg" >
	</a>
	<a rel="external" title="Drinks"      href="http://www.setdesign-la.com/bagelmania-images/menus/Drinks.jpg" >
	</a>
	<a rel="external" title="Deli"        href="http://www.setdesign-la.com/bagelmania-images/menus/Deli.jpg" >
	</a>
	<a rel="external" title="Salads"      href="http://www.setdesign-la.com/bagelmania-images/menus/Salads.jpg" >
	</a>
	
	</div>
	   </div><!-- End Gallery -->
	   <!-----------------------------------    Fancybox --------------------------------------------------->
	
	<a class="fancybox fancySidebar" title='Bagels' rel="group" href="http://www.setdesign-la.com/bagelmania-images/menus/Bagels.jpg" >
	</a>
	<a class="fancybox fancySidebar" title='Bagels Too' rel="group" href="http://www.setdesign-la.com/bagelmania-images/menus/Bagels2.jpg">
	</a>
	<a class="fancybox fancySidebar" title='Drinks' rel="group" href="http://www.setdesign-la.com/bagelmania-images/menus/Drinks.jpg" >
	</a>
	<a class="fancybox fancySidebar" title='Deli' rel="group" href="http://www.setdesign-la.com/bagelmania-images/menus/Deli.jpg" >
	</a>
	<a class="fancybox fancySidebar" title='Salads' rel="group" href="http://www.setdesign-la.com/bagelmania-images/menus/Salads2.jpg">
	</a>
	<!------------------------------------  end fancybox ----------------------------------------------->
	   
		</section>
	
<div class='widgetBorder'></div>


		<section class="widget clearfix">
			<h4 class="widgettitle">Like Our Bagels?</h4>
			<ul>
			    <li class='yelp'><a href="http://www.yelp.com/biz/bagelmania-and-coffee-house-huntington-beach" 
                             target='_blank'>Yelp </a></li>
				<li class='zagat'><a href="http://www.zagat.com/r/bagelmania-coffee-house-huntington-beach"
                                 target="_blank">Zagat</a> </li>
				<li class='tripadvisor'><a href="http://www.tripadvisor.com/Restaurant_Review-g32513-d832178-
                                 Reviews-Bagelmania_Coffee_House-Huntington_Beach_California.html"
                                 target='_blank'>TripAdvisor </a></li>
				<li class='us'><a href="http://www.urbanspoon.com/r/20/240472/restaurant/
                                 OC/Bagelmania-Coffee-House-Huntington-Beach"
                                 target='_blank'>Urbanspoon</a> </li>
			</ul>
			<br/>
			Share your opinion with others.
		</section>
		<!-- /.widget -->
		<div class='widgetBorder'></div>
	     <section class="widget widgetend clearfix ">
			<h4 class="widgettitle">What's new</h4>
	       <?php  print render($page['news_feed']); ?>
        
         </section><!-- /.widget -->
		 
	

	<!-- 	<div class='widgetBorder'></div> -->
		
		
	
    	
						
	</aside>  <!-- END sidebar -->
	
		 <div class="location-pdf  clearfix">
		 <div class='contentBorder'></div>
		 <div class='double'>
			<div class='location'>
			    <h4 class='widgetTitle'>Locations</h4>
				<p>Click on the map for locations.</P>
				<a href='locations'><img class='map' src='http://setdesign-la.com/bagelmania-images/clickMap.png'/></a>
				<!-- <p>**All Bagelmania stores are indepently owned and operated.</p> --->
			</div>
			<div class='pdfBottom'> 
				 <h4 class="widgettitle ">PDF Menus</h4>
				 <img class='pdf' src='http://setdesign-la.com/bagelmania-images/pdfHover.png'/>
			      <ul>
					<li><a href='http://setdesign-la.com/bagelmania-images/bagels.pdf' title='Bagel' target='_blank' >Bagels</a></li>	
					<li><a href='http://setdesign-la.com/bagelmania-images/bagels2.pdf' title='Bagel2' target='_blank'>Bagels Too</a></li>	
					<li><a href='http://setdesign-la.com/bagelmania-images/coffee.pdf' title='Coffee' target='_blank' >Coffee</a></li>	
					<li><a href='http://setdesign-la.com/bagelmania-images/mainMenu.pdf' title='Main Menu' target='_blank' >Main Menu</a></li>	
					<li><a href='http://setdesign-la.com/bagelmania-images/smoothieMenu.pdf' title='Smoothies' target='_blank' >Smoothies</a></li>
				</ul>  <br/>
				 <p>**These are large image files, so give it a sec. to download.</p>
			</div>
		 </div>
			
		</div><!-- END  location-pdf -->
		
		
	     <div class="pollQuestion clearfix">
		<div class='contentBorder'></div>
		 <div class='poll'>
			  <img src='http://setdesign-la.com/bagelmania-images/poll1.jpg'>
			  <img src='http://setdesign-la.com/bagelmania-images/poll2.jpg'>
			  <img src='http://setdesign-la.com/bagelmania-images/poll3.jpg'>
			  <img src='http://setdesign-la.com/bagelmania-images/poll4.jpg'>
		</div><!-- End poll -->
		</div><!-- END  pollQuestion -->
		
		
	   <div class="topFooter clearfix">
	   <div class='contentBorder'></div>
			<a href='donations' id='bottom' class='donations'>
					<h3>Donations</h3>
					<p>Bagelmania loves to give to the community. Click below to find out how. </p>
			</a><!-- END donations -->
			<a href='wholesale' id='bottom' class='wholesale'>
					<h3>Wholesale</h3>
					<p>Bagelmania can meet all of your wholesale needs. We service high schools, hotels, colleges,
					you name it. 
					No quantity is too big or small.</p>
			</a><!-- END whaolesale -->
			<a href='contact-form' id='bottom' class='contact'>
					<h3>Contact</h3>
					<p>Have a question or suggestion? Need to place an order? 
					We would love to hear from you.</p>
			</a><!-- END contact -->
			<a href='about' id='bottom' class='about'>
					<h3>About</h3>
					<p>We are getting ready to celebrate our 20th anneversary. 
					Want to learn how bagelmania began?</p>
			</a><!-- END about -->
		</div><!-- END topFooter-->
		
       
        
	<footer id="footer">
	 <div class='contentBorder'></div>
		<p>All Bagelmania stores are independently owned and operated. Bagelmania &copy; 2010-2012</p>
		
     <!----------------------------- JH added jTest -------------------------------------------------->		
		<p class='logIn'>
	  <?php print theme('links__system_secondary_menu', array(
      'links' => $secondary_menu,
      'attributes' => array(
        'id' => 'secondary-menu',
        'class' => array('links', 'inline', 'clearfix'),
      ),
      'heading' => array(
        'text' => $secondary_menu_heading,
        'level' => 'h2',
        'class' => array('element-invisible'),
      ),
    )); ?> 
	<!-- this checks to see if user is logged in. If not, Log in link will display. -->
	<?php 
	$role = 'anonymous user';
    if (in_array($role, $variables['user']->roles)) {
    print "<a class='fancybox' href='#login'>Log In</a>";
	}
	?>
  </p>
  <!-- ----------------------------------------------- Login Pop Up ------------------------------------------------------------- -->
  <div id='login' style='display:none;'>
	<h1 class='loginTitle'>Bagelmania Coffehouse</h1>
	
	 <form action="user/login" method="post" id="user-login" accept-charset="UTF-8"><div><div  class="form-item form-type-textfield form-item-name" > 
  <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
 <input type="text" id="edit-name" name="name" value="" size="50" maxlength="128" class="form-text required rounded" />
<div class="description"><!-- Enter your Theme Exchange username. -->&nbsp;</div>
</div> <!-- End ashContent -->
<div class="form-item form-type-password form-item-pass">
  <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
 <input type="password" id="edit-pass" name="pass" size="50" maxlength="128" class="form-text required rounded" />
<div class="description"><!-- Enter the password that accompanies your username. -->&nbsp;</div>
</div>
<input type="hidden" name="form_build_id" value="form-I80-7cjV7RBQ7eO1bxGywGBbMGLuh0TbaK2PBKHpHC4" />
<input type="hidden" name="form_id" value="user_login" />
<div class="form-actions form-wrapper" id="edit-actions">
<input type="submit" id="edit-submit" name="op" value="Log in" class="form-submit" /></div></div></form>
	
	</div><!-- -------------------------------------end inline -------------------------------------------------------------- -->

	</footer>
	<!-- /#footer --> 
	
</div><!-- END pagewrap -->


	 
         <!-- JavaScript includes - jQuery, turn.js and our own script.js -->
		<!-- <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script> -->
		<script src="http://www.setdesign-la.com/jh-scripts/mobileGallery/assets/touchTouch/touchTouch.jquery.js"></script>
	    <script src="http://www.setdesign-la.com/jh-scripts/mobileGallery/assets/js/script.js"></script>
 