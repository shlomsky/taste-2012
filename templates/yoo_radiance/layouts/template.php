<?php
/**
* @package   yoo_radiance
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get template configuration
include($this['path']->path('layouts:template.config.php'));
	
?>
<!DOCTYPE HTML>
<html lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>">

<head>
<?php echo $this['template']->render('head'); ?>
</head>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=173349346055085";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<body id="page" class="page <?php echo $this['config']->get('body_classes'); ?>" data-config='<?php echo $this['config']->get('body_config','{}'); ?>'>
	
	<div id="bg">
		<img src="/images/bg.jpg">
	</div>

	<div id="page-bg">

		<?php if ($this['modules']->count('absolute')) : ?>
		<div id="absolute">
			<?php echo $this['modules']->render('absolute'); ?>
		</div>
		<?php endif; ?>
		
		<div class="wrapper grid-block">
	
			<header id="header">
				<?php if ($this['modules']->count('search') ||  ($this['modules']->count('toolbar-l') || $this['config']->get('date')) || $this['modules']->count('toolbar-r')) : ?>
					<div id="toolbar" class="grid-block">
		
						<?php if ($this['modules']->count('toolbar-l') || $this['config']->get('date')) : ?>
						<div class="float-left">
						
							<?php if ($this['config']->get('date')) : ?>
							<time datetime="<?php echo $this['config']->get('datetime'); ?>"><?php echo $this['config']->get('actual_date'); ?></time>
							<?php endif; ?>
						
							<?php echo $this['modules']->render('toolbar-l'); ?>
							
						</div>
						<?php endif; ?>
						
						<?php if ($this['modules']->count('search')) : ?>
						<div id="search"><?php echo $this['modules']->render('search'); ?></div>
						<?php endif; ?>
							
						<?php if ($this['modules']->count('toolbar-r')) : ?>
						<div class="float-right"><?php echo $this['modules']->render('toolbar-r'); ?></div>
						<?php endif; ?>
						
					</div>
				<?php endif; ?>
	
				<div id="headerbar" class="grid-block">
				
					<?php  if ($this['modules']->count('menu')) : ?>
					<nav id="menu"><?php echo $this['modules']->render('menu'); ?></nav>
					<?php endif; ?>
				
					<?php if ($this['modules']->count('logo')) : ?>	
					<a id="logo" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['modules']->render('logo'); ?></a>
					<?php endif; ?>
					
					<div id="info">
						<div class="date"><h2>Friday August 3rd, 2012</h2><h3>6pm - Midnight</h3></div>
						<div class="date"><h2>Saturday August 4th, 2012</h2><h3>Noon - Midnight</h3></div>
						<div class="fb"><div class="fb-like" data-href="https://www.facebook.com/TasteInSanPedro" data-send="false" data-layout="button_count" data-width="90" data-show-faces="true"></div></div>
					</div>
					
				</div>
			
				<?php if ($this['modules']->count('banner')) : ?>
				<div id="banner"><?php echo $this['modules']->render('banner'); ?></div>
				<?php endif;  ?>
			
			</header>
	
			<?php if ($this['modules']->count('top-a')) : ?>
			<section id="top-a" class="grid-block"><?php echo $this['modules']->render('top-a', array('layout'=>$this['config']->get('top-a'))); ?></section>
			<?php endif; ?>
			
			<?php if ($this['modules']->count('top-b')) : ?>
			<section id="top-b" class="grid-block"><?php echo $this['modules']->render('top-b', array('layout'=>$this['config']->get('top-b'))); ?></section>
			<?php endif; ?>
			
			<?php if ($this['modules']->count('innertop + innerbottom + sidebar-a + sidebar-b') || $this['config']->get('system_output')) : ?>
			<div id="main" class="grid-block">
			
				<div id="maininner" class="grid-box">
				
					<?php if ($this['modules']->count('innertop')) : ?>
					<section id="innertop" class="grid-block"><?php echo $this['modules']->render('innertop', array('layout'=>$this['config']->get('innertop'))); ?></section>
					<?php endif; ?>
	
					<?php if ($this['config']->get('system_output')) : ?>
					<section id="content" class="grid-block"><div>

						<?php if ($this['modules']->count('breadcrumbs')) : ?>
						<section id="breadcrumbs"><?php echo $this['modules']->render('breadcrumbs'); ?></section>
						<?php endif; ?>

						<?php echo $this['template']->render('content'); ?>
						
					</div></section>
					<?php endif; ?>
	
					<?php if ($this['modules']->count('innerbottom')) : ?>
					<section id="innerbottom" class="grid-block"><?php echo $this['modules']->render('innerbottom', array('layout'=>$this['config']->get('innerbottom'))); ?></section>
					<?php endif; ?>
	
				</div>
				<!-- maininner end -->
				
				<?php if ($this['modules']->count('sidebar-a')) : ?>
				<aside id="sidebar-a" class="grid-box"><?php echo $this['modules']->render('sidebar-a', array('layout'=>'stack')); ?></aside>
				<?php endif; ?>
				
				<?php if ($this['modules']->count('sidebar-b')) : ?>
				<aside id="sidebar-b" class="grid-box"><?php echo $this['modules']->render('sidebar-b', array('layout'=>'stack')); ?></aside>
				<?php endif; ?>
	
			</div>
			<?php endif; ?>
			<!-- main end -->
	
			<?php if ($this['modules']->count('bottom-a')) : ?>
			<section id="bottom-a" class="grid-block"><?php echo $this['modules']->render('bottom-a', array('layout'=>$this['config']->get('bottom-a'))); ?></section>
			<?php endif; ?>
			
			<?php if ($this['modules']->count('bottom-b')) : ?>
			<section id="bottom-b" class="grid-block"><?php echo $this['modules']->render('bottom-b', array('layout'=>$this['config']->get('bottom-b'))); ?></section>
			<?php endif; ?>
			
			<?php if ($this['modules']->count('footer + debug') || $this['config']->get('warp_branding')) : ?>
			<footer id="footer" class="grid-block">
	
				<?php if ($this['config']->get('totop_scroller')) : ?>
				<a id="totop-scroller" href="#page"></a>
				<?php endif; ?>
	
				<?php
					echo $this['modules']->render('footer');
					$this->output('warp_branding');
					echo $this['modules']->render('debug');
				?>
	
			</footer>
			<?php endif; ?>

		</div>
		
		<?php echo $this->render('footer'); ?>
		
	</div>
	
</body>
</html>