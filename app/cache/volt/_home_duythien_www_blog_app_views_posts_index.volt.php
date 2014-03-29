<?php echo $this->getContent(); ?>

<div align="right">
    <?php echo $this->tag->linkTo(array('posts/create', '<i class=\'fa fa-plus-circle\'></i>' . _('Create Post'), 'class' => 'btn btn-primary')); ?>
</div>
<div class="center">
<form method="post" action="<?php echo $this->url->get('posts/search'); ?>" autocomplete="off">

    <div class="center scaffold">

        <h2><?php echo _('Search Posts'); ?></h2>

        <div class="clearfix">
            <label for="id">Id</label>
            <?php echo $form->render('id'); ?>
        </div>

        <div class="clearfix">
            <label for="username"><?php echo _('Title'); ?></label>
            <?php echo $form->render('title'); ?>
        </div>

        <div class="clearfix">
            <label for="categoriesId"><?php echo _('Categories'); ?></label>
            <?php echo $form->render('categoriesId'); ?>
        </div>

        <div class="clearfix">
            <?php echo $this->tag->submitButton(array('Search', 'class' => 'btn btn-primary')); ?>
        </div>

    </div>

</form>
</div>