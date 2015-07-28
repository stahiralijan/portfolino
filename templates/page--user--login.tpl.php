<div class="wrapper">
	<div id="top"></div>
	<div id="the-top">
		<div id="top-80">
			<div id="logo">
				<img id="logoimage" src="<?php print theme_get_setting('logo'); ?>" alt="<?php print variable_get('site_name', "Default site name") ?>"><!-- Logo image -->
				<h1 id="logotitle"><?php print variable_get('site_name', "Default site name") ?></h1><!-- Logo text -->
			</div><!--/logo-->

			<nav><!-- Navigation Start -->
				<ul>
					<li><a href="#top">HOME</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#work">Work</a></li>
					<li><a href="#footer">Contact</a></li>
				</ul>
			</nav><!-- Navigation End -->
		</div><!-- /top-80 -->
	</div><!--/top-->

	<header class="anchor"><!-- Header Title Start -->
		<?php print(drupal_render($page['content'])); ?>
	</header>	<!-- Header Title End -->
	<section class="intro-img">
		<img src="<?php print theme_get_setting('bg_image_1_url'); ?>" alt="">
	</section><!-- /intro-img -->

	<section id="bottom"> <!-- Last Words Section Start -->
		<h3>Thanks for looking at my new website!</h3>
	</section><!-- Last Words Section End-->
</div>

<footer id="footer" class="anchor">
	<div class="wrapper">
		<div class="footer-cover">
			<section class="left">
				<h4>Contact</h4>
				<div id="formwrap">
					<form method="post" id="submitform" action="submitemail.php" >
						<input type="text" class="formstyle" title="Name" name="name" />
						<input type="text" class="formstyle" title="Email" name="email" />
						<textarea name="message" title="Message"></textarea>
						<input class="formstyletwo" type="submit" value="Send">
					</form>
				</div>
				<div id="error"></div>
			</section>
			
			<section class="right social"> <!-- Social Icons Start -->
				<h4>lets get social</h4>
				<?php if(theme_get_setting('gplus_url')) : ?>
				<a href="<?php echo theme_get_setting('gplus_url'); ?>"><img class="icon" src="/drupal/sites/all/themes/custom/portfolino/images/icons/google.png" width="32" height="32" alt="google"></a><!-- Replace with any 32px x 32px icons -->
				<?php endif; ?>
				<?php if(theme_get_setting('youtube_url')) : ?>
				<a href="<?php echo theme_get_setting('youtube_url'); ?>"><img class="icon" src="/drupal/sites/all/themes/custom/portfolino/images/icons/youtube.png" width="32" height="32" alt="youtube"></a><!-- Replace with any 32px x 32px icons -->
				<?php endif; ?>
				<?php if(theme_get_setting('facebook_url')) : ?>
				<a href="<?php echo theme_get_setting('facebook_url'); ?>"><img class="icon" src="/drupal/sites/all/themes/custom/portfolino/images/icons/facebook.png" width="32" height="32" alt="facebook"></a><!-- Replace with any 32px x 32px icons -->
				<?php endif; ?>
				<?php if(theme_get_setting('twitter_url')) : ?>
				<a href="<?php echo theme_get_setting('twitter_url'); ?>"><img class="icon" src="/drupal/sites/all/themes/custom/portfolino/images/icons/twitter.png" width="32" height="32" alt="twitter"></a><!-- Replace with any 32px x 32px icons -->
				<?php endif; ?>
			</section> <!-- Social Icons End -->
		</div><!--/footer-cover-->	
	</div>
	<div class="clearfix">&copy; 2015 - Syed Tahir Ali Jan</div>
</footer>