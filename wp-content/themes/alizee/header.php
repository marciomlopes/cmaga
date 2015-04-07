<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Alizee
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<?php if ( get_theme_mod('site_favicon') ) : ?>
	<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
<?php endif; ?>

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<!--Facebook Script  -->

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1573861229559455',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<!--Fim Facebook Script  -->

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'alizee' ); ?></a>

<?php if ( get_header_image() ) :?>
	<header id="masthead" class="site-header has-banner" role="banner">
<?php else : ?>
	<header id="masthead" class="site-header" role="banner">
<?php endif; ?>
		<nav id="site-navigation" class="main-navigation navbar-fixed-top" role="navigation">
			<div class="container">
				<?php ( get_theme_mod('site_logo') ) ; ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="img-responsive" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				<!--<ul>
				    
				    <ul class="ab-top-secondary ab-top-menu">
						<li id="wp-admin-bar-search" class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="http://cmag.figasdm.com/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" value="" maxlength="150" type="text"><input class="adminbar-button" value="Procurar" type="submit"></form></div>		</li>
						<li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item" aria-haspopup="true" href="http://cmag.figasdm.com/wp-admin/profile.php" title="A minha conta">Olá, cmag!<img alt="" src="http://1.gravatar.com/avatar/916d89af549d619df12b1dcc048cd57b?s=26&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D26&amp;r=PG" class="avatar avatar-26 photo" height="26" width="26"></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-user-actions" class="ab-submenu">
						<li id="wp-admin-bar-user-info"><a class="ab-item" tabindex="-1" href="http://cmag.figasdm.com/wp-admin/profile.php"><img alt="" src="http://1.gravatar.com/avatar/916d89af549d619df12b1dcc048cd57b?s=64&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D64&amp;r=PG" class="avatar avatar-64 photo" height="64" width="64"><span class="display-name">cmag</span></a>		</li>
						<li id="wp-admin-bar-edit-profile"><a class="ab-item" href="http://cmag.figasdm.com/wp-admin/profile.php">Editar o meu perfil</a>		</li>
						<li id="wp-admin-bar-logout"><a class="ab-item" href="http://cmag.figasdm.com/wp-login.php?action=logout&amp;_wpnonce=679a029528">Terminar sessão</a>		</li></ul></div>		</li></ul>
					</ul>
				</ul>-->
				<!-- Clickable Nav -->
				<div class="click-nav">
					<ul class="no-js">
						<li>
							<a class="clicker"><img src="<?php echo get_template_directory_uri(); ?>/images/i-1.png"</a>
							<ul>
								<li id="login">
							      <div id="login-content">
							        <form name="loginform" id="loginform" action="http://cmag.figasdm.com/wp-login.php" method="post">
										<p>
											<label for="user_login">Nome de utilizador<br>
											<input style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-position: right center; cursor: auto;" name="log" id="user_login" class="input" value="Username" size="20" type="text"></label>
										</p>
										<p>
											<label for="user_pass">Senha<br>
											<input style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-position: right center; cursor: auto;" name="pwd" id="user_pass" class="input" value="Password" size="20" type="password"></label>
										</p>
											<p class="forgetmenot"><label for="rememberme"><input name="rememberme" id="rememberme" value="forever" type="checkbox"> Lembrar-me</label></p>
										<p class="submit">
											<input name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Iniciar sessão" type="submit">
											<input name="redirect_to" value="http://cmag.figasdm.com/" type="hidden">
											<input name="testcookie" value="1" type="hidden">
										</p>
									</form>
									<div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="true"></div>							      	<div class="new-twitter-btn new-twitter-7 new-twitter-default-anim"><div class="new-twitter-7-1"><div class="new-twitter-7-1-1">Login com o Twitter</div></div></div>
							      </div>                     
							    </li>
								<li><a href="#">Settings</a></li>
								<li><a href="#">Privacy</a></li>
								<li><a href="#">Help</a></li>
								<li><a href="#">Sign out</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- /Clickable Nav -->
				
				
				<button class="menu-toggle btn"><i class="fa fa-bars"></i></button>
			</div>	
		</nav>



		<!-- #site-navigation -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content container">