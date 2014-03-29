<?php echo $this->getContent(); ?>

<div align="right">
    <?php echo $this->tag->linkTo(array('profiles/create', '<i class=\'icon-plus-sign\'></i> Create Profiles', 'class' => 'btn btn-primary')); ?>
</div>

<form method="post" action="<?php echo $this->url->get('profiles/search'); ?>" autocomplete="off">

    <div class="center scaffold">

        <h2>Search profiles</h2>

        <div class="clearfix">
            <label for="id">Id</label>
            <?php echo $form->render('id'); ?>
        </div>

        <div class="clearfix">
            <label for="name">Name</label>
            <?php echo $form->render('name'); ?>
        </div>

        <div class="clearfix">
            <?php echo $this->tag->submitButton(array('Search', 'class' => 'btn btn-primary')); ?>
        </div>

    </div>

</form>