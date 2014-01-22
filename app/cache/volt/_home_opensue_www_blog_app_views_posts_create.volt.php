<?php echo Phalcon\Tag::javascriptInclude('markdown/js/jquery.pagedown-bootstrap.combined.min.js'); ?>
<?php echo Phalcon\Tag::stylesheetLink('markdown/css/jquery.pagedown-bootstrap.css'); ?> 

<?php echo Phalcon\Tag::form(array()); ?>
<div class="hero-unit">
        <h1 style="font-size:38px" class="center">Post pages</h1>
        	<div class="form-group">
    			<label><?php echo _('Titles'); ?></label>
    			<?php echo $form->render('title'); ?>
          <?php echo $form->messages('title'); ?>
 			 </div>
 			<div class="form-group">
 				<label class="control-label">Categories and tag</label>
					
							<?php echo $form->render('categoriesId'); ?>
							              <?php echo $form->render('tags'); ?>
 			</div>
    <div>
    <p>
      <?php echo $form->render('content'); ?>
    </p>
      <div>
      	  <?php echo Phalcon\Tag::submitButton(array('Save', 'class' => 'btn btn-primary')); ?>
      </div>
          
</div>
</form>
<script type="text/javascript">
$("textarea#content").pagedownBootstrap({
'sanatize': false,
'help': function () { alert("Do you need help?"); },
'hooks': [
{
'event': 'preConversion',
'callback': function (text) {
return text.replace(/\b(a\w*)/gi, "*$1*");
}
},
{
'event': 'plainLinkText',
'callback': function (url) {
return "This is a link to " + url.replace(/^https?:\/\//, "");
}
}
]
});

</script>