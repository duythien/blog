  <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="container" style="width:1200px;">
          <?php echo $this->elements->getMenu(); ?>
        </div>
    </div>
  </div>
 
<div class="container main-container">
  <?php echo $this->getContent(); ?>
</div>

<footer>
Made with love by the Phalcon VN Team

    <?php echo $this->tag->linkTo(array('privacy', 'Privacy Policy')); ?>
    <?php echo $this->tag->linkTo(array('terms', 'Terms')); ?>
   

© <?php echo date('Y'); ?> Phalcon VN Team.
 <p class="pull-right">
    	Language: 
    	    		<?php echo $this->tag->linkTo(array('set-language/de_DE', 'VietNam')); ?>

    		<?php echo $this->tag->linkTo(array('set-language/en_US', 'English')); ?>|
    		
    </p>

</footer>