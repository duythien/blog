
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

    <h2>Edit profile</h2>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#A" data-toggle="tab">Basic</a></li>
        <li><a href="#B" data-toggle="tab">Users</a></li>
    </ul>

    <div class="tabbable">
        <div class="tab-content">
            <div class="tab-pane active" id="A">

                <?php echo $form->render('id'); ?>

                <div class="clearfix">
                    <label for="name">Name</label>
                    <?php echo $form->render('name'); ?>
                </div>

                <div class="clearfix">
                    <label for="active">Active?</label>
                    <?php echo $form->render('active'); ?>
                </div>

            </div>

            <div class="tab-pane" id="B">
                <p>
                    <table class="table table-bordered table-striped" align="center">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Banned?</th>
                                <th>Suspended?</th>
                                <th>Active?</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $v39500211571iterated = false; ?><?php foreach ($profile->users as $user) { ?><?php $v39500211571iterated = true; ?>
                            <tr>
                                <td><?php echo $user->id; ?></td>
                                <td><?php echo $user->name; ?></td>
                                <td><?php echo ($user->banned == 'Y' ? 'Yes' : 'No'); ?></td>
                                <td><?php echo ($user->suspended == 'Y' ? 'Yes' : 'No'); ?></td>
                                <td><?php echo ($user->active == 'Y' ? 'Yes' : 'No'); ?></td>
                                <td width="12%"><?php echo Phalcon\Tag::linkTo(array('users/edit/' . $user->id, '<i class="icon-pencil"></i> Edit', 'class' => 'btn')); ?></td>
                                <td width="12%"><?php echo Phalcon\Tag::linkTo(array('users/delete/' . $user->id, '<i class="icon-remove"></i> Delete', 'class' => 'btn')); ?></td>
                            </tr>
                        <?php } if (!$v39500211571iterated) { ?>
                            <tr><td colspan="3" align="center">There are no users assigned to this profile</td></tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </p>
            </div>

        </div>
    </div>

    </form>
</div>