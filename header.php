
<body>
  
   <header class="main-header">
	<div class="container">
		<h1 class="mh-logo">
			<h1 class="logo"> <?php bloginfo('name'); ?> </h1>
            
		</h1>
        <?php bloginfo('description'); ?>
		<nav class="main-nav">
			<ul class="main-nav-list">
				<li>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</li>
			</ul>
		</nav>
	</div>
</header>
    
     <img src="images/header.png" class="hej" alt="Norway"> 
    
<div class="body-cont-ms"> 
    
		<div id="content" class="site-content"> 
    

