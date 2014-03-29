<?php echo $this->tag->javascriptInclude('markdown/js/jquery.pagedown-bootstrap.combined.min.js'); ?>
<?php echo $this->tag->stylesheetLink('markdown/css/jquery.pagedown-bootstrap.css'); ?> 

<?php echo $this->tag->form(array()); ?>
<div class="hero-unit">
        <h1 style="font-size:38px" class="center">Post pages</h1>
          <div class="form-group">
            <?php echo $form->render('id'); ?>
          <label>Titles</label>
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
          <ul class="pager">
            <li class="previous pull-left">
                <?php echo $this->tag->linkTo(array('posts/index', '&larr; Go Back')); ?>
            </li>
            <li class="pull-right">
              <?php echo $this->tag->submitButton(array('Save', 'class' => 'btn btn-primary')); ?>
            </li>
          </ul>
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