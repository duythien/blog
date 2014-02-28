<?php echo $this->getContent(); ?>

<div align="right">
    <?php echo Phalcon\Tag::linkTo(array('filestore/create', '<i class=\'fa fa-plus-circle\'></i>' . _('Upload Document'), 'class' => 'btn btn-primary')); ?>
</div>
<div class="center">
<form method="post" action="<?php echo $this->url->get('filestore/search'); ?>" autocomplete="off">

    <div class="center scaffold">

        <h2><?php echo _('Search Document'); ?></h2>

        <div class="clearfix">
            <label for="id">Id</label>
            <?php echo $form->render('id'); ?>
        </div>

        <div class="clearfix">
            <?php echo $form->label('fileCaption'); ?>
            <?php echo $form->render('fileCaption'); ?>
        </div>

        <div class="clearfix">
            <?php echo $form->label('categoriesId'); ?>
            <?php echo $form->render('categoriesId'); ?>
        </div>

        <div class="clearfix">
            <?php echo Phalcon\Tag::submitButton(array('Search', 'class' => 'btn btn-primary')); ?>
        </div>

    </div>

</form>
</div>