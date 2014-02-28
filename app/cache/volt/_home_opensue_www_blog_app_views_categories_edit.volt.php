
<?php echo Phalcon\Tag::form(array()); ?>
<ul class="pager">
    <li class="previous pull-left">
        <?php echo Phalcon\Tag::linkTo(array('name', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo Phalcon\Tag::submitButton(array('Save', 'class' => 'btn btn-success')); ?>
    </li>
</ul>

<?php echo $this->getContent(); ?>
<?php echo $form->render('id'); ?>
<div class="center scaffold">
    <h2>Update a Categories</h2>

    <div class="clearfix">
        <label for="name">Name</label>
        <?php echo $form->render('name'); ?>
        <?php echo $form->messages('name'); ?>
    </div>

    <div class="clearfix">
        <label for="email">Slug</label>
        <?php echo $form->render('slug'); ?>
        <?php echo $form->messages('slug'); ?>
    </div>

   

</div>

</form>