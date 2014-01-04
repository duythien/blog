<footer>
Made with love by the Phalcon Team

    <?php echo Phalcon\Tag::linkTo(array('privacy', 'Privacy Policy')); ?>
    <?php echo Phalcon\Tag::linkTo(array('terms', 'Terms')); ?>
   

© <?php echo date('Y'); ?> Phalcon Team.
 <p class="pull-right">
    	Language: 
    		<?php echo Phalcon\Tag::linkTo(array('set-language/en_US', 'English')); ?>|
    		<?php echo Phalcon\Tag::linkTo(array('set-language/de_DE', 'German')); ?>
    		
    </p>

</footer>