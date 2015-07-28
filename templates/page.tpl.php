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
					<li><a href="<?php echo base_path(); ?>#top">HOME</a></li>
					<li><a href="<?php echo base_path(); ?>#about">About</a></li>
					<li><a href="<?php echo base_path(); ?>#work">Work</a></li>
					<li><a href="<?php echo base_path(); ?>#footer">Contact</a></li>
				</ul>
			</nav><!-- Navigation End -->
		</div><!-- /top-80 -->
	</div><!--/top-->
	<?php if(drupal_is_front_page()) : ?>
	<header class="anchor"><!-- Header Title Start -->
		<h1><?php print theme_get_setting('small_intro'); ?></h1>
		<h2>&ndash; <?php print theme_get_setting('tags'); ?> &ndash;</h2>
	</header>	<!-- Header Title End -->
	<section class="intro-img">
		<img src="<?php print theme_get_setting('bg_image_1_url'); ?>" alt="">
	</section><!-- /intro-img -->

	<section id="about" class="text anchor"> <!-- Text Section Start -->
		<h3>about me</h3><!-- Replace all text with what you want -->
		<p><?php print theme_get_setting('about_me'); ?></p>
	</section>
	<section class="intro-img">
		<img src="<?php print theme_get_setting('bg_image_2_url'); ?>" alt="">
	</section><!-- /intro-img -->
	<section id="work" class="text anchor">
		<h3>my work</h3>
		<p><?php print theme_get_setting('my_work'); ?></p>
	</section>
	<div class="clearfix"></div> <!-- Text Section End -->

	<section class="gallery"> <!-- Work Links Section Start -->
		<?php echo portfolino_get_gallery(); ?>

		<div class="clearfix"></div>
	</section> <!-- Work Links Section End -->

	<div class="clearfix"></div> <!-- Text Section End -->

	<section id="bottom"> <!-- Last Words Section Start -->
		<h3>Thanks for visiting my protfolio website!</h3>
	</section><!-- Last Words Section End-->
	

	<?php else : // Work Template ?>

	<section class="text anchor">
		<h3><?php echo $title; ?></h3>
		<div class="sidebar">
			<h4>My Work</h4>
			<?php

			$articles = portfolino_get_articles(); 
			if(isset($articles))
			{
				echo "<ul>";
				foreach($articles as $article)
				{
					echo "<li><a href='".base_path()."node/$article->nid'>$article->title</a></li>";
				}
				echo "</ul>";
			}
			else
			{
				echo "<p>Nothing to show yet!</p>";
			}
			?>
		</div>
		<div class="content-block">
		<?php echo render($page['content']); ?>
		</div>
		<div class="clearfix"></div>
	</section><br><br><br><br><br><br>

	<?php endif; ?>
</div>

<footer id="footer" class="anchor">
	<div class="wrapper">
		<div class="footer-cover">
			<section class="contact">
				<h4>Contact</h4>
				<div id="formwrap">
					<form method="post" id="submitform" action="submitemail.php" >
						<input type="text" class="formstyle" placeholder="Name" name="name" />
						<input type="text" class="formstyle" placeholder="Email" name="email" />
						<textarea name="message" placeholder="Message"></textarea>
						<input class="formstyletwo" type="submit" value="Send">
					</form>
				</div>
				<div id="error"></div>
			</section>
			
			<section class="social"> <!-- Social Icons Start -->
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