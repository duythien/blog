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