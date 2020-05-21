<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	
	<style>
		body, html {
		  height: 100%;
		  margin: 0;
		  font: 400 15px/1.8 "Lato", sans-serif;
		  color: #FFF;
		}

		.bgimg-1 {
		  height: 100%;
		  position: relative;
		  background-image: url("<?php echo get_template_directory_uri(); ?>/images/404-background.jpg");
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;
		}

		.caption {
		  position: absolute;
		  left: 0;
		  top: 35%;
		  width: 50%;

		  text-align: center;
		  color: #000;
		}

		.caption p.border {
			text-align: center;
			background-color: #111;
			color: #fff;
			padding: 50px;
		}

		.center {
			display: table;
			width: 100%;
			height: 100%;
		}
		
		.v-align {
			padding: 10px;
			display: table-cell;
			text-align: center;
			vertical-align: middle;
		}

		.box {
			min-width: 50%;
			padding: 20px;
			background: rgba(0, 0, 0, 0.4);
			display: inline-block;
			vertical-align: top;
		}
		
		.content {
			font-size: 30px;
		}
		
		</style>
	
</head>
<body <?php body_class(); ?>>

	<div class="bgimg-1">
		<div class="center">
			<div class="v-align">
				<div class="box">
					<div class="content">
						<h1>Schiri! Abseits!</h1>
						<!--<p style="margin: 0;">Du befindest dich im Abseits. Willst du das nicht ändern?</p>-->
						<form action="http://sv-ulm.de/">
							<input class="btn btn-primary" type="submit" value="Raus aus dem Abseits">
						</form>
						<br/>
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/>
					</div>
				</div>
			</div>
		</div>  
	</div>

</body>
</html>