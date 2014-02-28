
<form method="post" autocomplete="off">

<ul class="pager">
    <li class="previous pull-left">
        <?php echo Phalcon\Tag::linkTo(array('profiles', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo Phalcon\Tag::submitButton(array('Save', 'class' => 'btn btn-success')); ?>
    </li>
</ul>

<?php echo $this->getContent(); ?>

<div class="center scaffold">
    <h2>Create a Profile</h2>

    <div class="clearfix">
        <label for="name">Name</label>
        <?php echo $form->render('name'); ?>
    </div>

    <div class="clearfix">
        <label for="active">Active?</label>
        <?php echo $form->render('active'); ?>
    </div>

</div>

</form>