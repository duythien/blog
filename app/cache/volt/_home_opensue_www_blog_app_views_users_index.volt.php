<?php echo $this->getContent(); ?>

<div align="right">
    <?php echo Phalcon\Tag::linkTo(array('users/create', '<i class=\'fa fa-plus-circle\'></i> Create Users', 'class' => 'btn btn-primary')); ?>
</div>

<form method="post" action="<?php echo $this->url->get('users/search'); ?>" autocomplete="off">

    <div class="center scaffold">

        <h2>Search users</h2>

        <div class="clearfix">
            <label for="id">Id</label>
            <?php echo $form->render('id'); ?>
        </div>

        <div class="clearfix">
            <label for="username">Uername</label>
            <?php echo $form->render('username'); ?>
        </div>

        <div class="clearfix">
            <label for="email">E-Mail</label>
            <?php echo $form->render('email'); ?>
        </div>

        <div class="clearfix">
            <label for="profilesId">Profile</label>
            <?php echo $form->render('profilesId'); ?>
        </div>

        <div class="clearfix">
            <?php echo Phalcon\Tag::submitButton(array('Search', 'class' => 'btn btn-primary')); ?>
        </div>

    </div>

</form>
