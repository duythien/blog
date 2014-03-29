<body class="site com_login view-login">
 <?php echo $this->tag->stylesheetLink('css/bootstrap.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/bootstrap-responsive.css'); ?>
	<?php echo $this->tag->stylesheetLink('css/admin.css'); ?> 	
<?php echo $this->getContent(); ?>

  <!-- Container -->
  	<div class="container">
    	<div id="content">
    	<div class="login well" id="element-box"><!-- Begin Content -->
    	<?php echo $this->tag->image(array('img/logo.png', 'alt' => 'logo admin')); ?>
        <hr>
			<?php echo $this->tag->form(array('class' => 'form-inline', 'id' => 'form-login')); ?>

                <?php echo $form->render('email'); ?>
                <?php echo $form->messages('email'); ?>
				<?php echo $form->render('password'); ?>
				<?php echo $form->messages('password'); ?>

				<div align="center" class="remember">
					<?php echo $form->render('remember'); ?>
					<?php echo $form->label('remember'); ?>
				</div>
				<?php echo $form->render('csrf', array('value' => $this->security->getToken())); ?>
				<hr>
          		<button type="submit" class="btn btn-primary"><i class="fa fa-hand-o-right"></i> Sign in</button>
				<?php echo $this->tag->linkTo(array('session/index/forgotPassword', 'Forgot my password')); ?>
			<?php echo $this->tag->endform(); ?>
		</div> 
		</div><!-- End Content -->
	</div><!-- end contaner -->
	<div class="navbar navbar-fixed-bottom hidden-phone">
	    <p class="pull-right">&copy; Your Phalcon VN! Site hosted with CloudAccess.net 2013</p>
	    <a title="Phalcon is free software released under the GNU General Public License."
	     href="" id="login-phalconvn">Phalcon VN!&reg;</a>
	    <a class="pull-left" href=""><i class="fa fa-share"></i> Go to site home page</a>
	</div>
