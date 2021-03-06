<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head profile="http://gmpg.org/xfn/11">    
		<script src="https://code.jquery.com/jquery-latest.js"></script>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
        <title>The Loop | An Internal Communications Blog</title>
        <?php $siteURL = get_bloginfo('url'); ?>
        <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:700,300|Open+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <?php wp_head(); ?> 
         <script type='text/javascript'>
			function popUpShow(){
				$("#popUp").show();
				var e = document.getElementById('popUpButton');
				e.style.background = '#f4f4f4';
				e.style.border = '1px solid #d6d7d4';
				e.style.borderBottom = '1px solid #f4f4f4';
			}
			
			function popUpHide(){
				$("#popUp").hide();
				var e = document.getElementById('popUpButton');
				e.style.background = '#f58220';
				e.style.border = '1px solid #eb8528';
			}
			
      /* todo  jQuery(document).ready(function(){
        		
        });*/
        </script>
    </head>  
    <body>
		<header>
			<div class='inner' style='position:relative;'>
				<a href='/'><img class='header-logo' src='<?php bloginfo('template_url'); ?>/img/header-logo.png' alt='Power To Change' /></a>
				<a href='/'><img class='header-logo' src='<?php bloginfo('template_url'); ?>/img/loop-logo.png' alt='Home' /></a>
				
				<a id='popUpButton' class='button related' onmouseout='popUpHide();' onmouseover='popUpShow();'>Related Links</a>
				<div id='popUp' onmouseout='popUpHide();' onmouseover='popUpShow();' style='display:none;position:absolute;background-color:#f4f4f4;padding:10px 40px;right:10px;top:69px;z-index:1;border:1px solid #d6d7d4;'>
					<center><ul>
						<?php //may turn into wordpress menu */ ?>
						<li class='popupMenu'><a class='popupMenu' href='https://absences.powertochange.org'>ABSENCE TRACKER</a></li>
						<li class='popupMenu'><a class='popupMenu' href='mailto:helpdesk@powertochange.org'>HELPDESK</a></li>
						<li class='popupMenu'><a class='popupMenu' href='https://wiki.powertochange.org/help'>SELF-HELP WIKI</a></li>
						<li class='popupMenu'><a class='popupMenu' href='/wp-admin/admin.php?page=s2'>MY SETTINGS</a></li>
						<li class='popupMenu'><a class='popupMenu' href='https://www.mygcx.org/system/screen/home'>MYGCX</a></li>
					</ul></center>
				</div>
			</div>
			<div class='menu_bg'>
				<?php wp_nav_menu( array( 'theme_location'=>'main', 'menu_class' => 'menu', 'depth' => 1)); ?>
			</div>
		</header>