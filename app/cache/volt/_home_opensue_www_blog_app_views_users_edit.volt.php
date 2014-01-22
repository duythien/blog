
<form method="post" autocomplete="off">

<ul class="pager">
    <li class="previous pull-left">
        <?php echo Phalcon\Tag::linkTo(array('users', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo Phalcon\Tag::submitButton(array('Save', 'class' => 'btn btn-big btn-success')); ?>
    </li>
</ul>

<?php echo $this->getContent(); ?>

<div class="center scaffold">
    <h2>Edit users</h2>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#A" data-toggle="tab">Basic</a></li>
        <li><a href="#B" data-toggle="tab">Successful Logins</a></li>
        <li><a href="#C" data-toggle="tab">Password Changes</a></li>
        <li><a href="#D" data-toggle="tab">Reset Passwords</a></li>
    </ul>

<div class="tabbable">
    <div class="tab-content">
        <div class="tab-pane active" id="A">

            <?php echo $form->render('id'); ?>

            <div class="span4">

                <div class="clearfix">
                    <label for="username">Username</label>
                    <?php echo $form->render('username'); ?>
                </div>

                <div class="clearfix">
                    <label for="profilesId">Profile</label>
                    <?php echo $form->render('profilesId'); ?>
                </div>

                <div class="clearfix">
                    <label for="suspended">Suspended?</label>
                    <?php echo $form->render('suspended'); ?>
                </div>

            </div>

            <div class="span4">

                <div class="clearfix">
                    <label for="email">E-Mail</label>
                    <?php echo $form->render('email'); ?>
                </div>

                <div class="clearfix">
                    <label for="banned">Banned?</label>
                    <?php echo $form->render('banned'); ?>
                </div>

                <div class="clearfix">
                    <label for="active">Confirmed?</label>
                    <?php echo $form->render('active'); ?>
                </div>

            </div>
        </div>

        <div class="tab-pane" id="B">
            <p>
                <table class="table table-bordered table-striped" align="center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>IP Address</th>
                            <th>User Agent</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $v7743859391iterated = false; ?><?php foreach ($user->successLogins as $login) { ?><?php $v7743859391iterated = true; ?>
                        <tr>
                            <td><?php echo $login->id; ?></td>
                            <td><?php echo $login->ipAddress; ?></td>
                            <td><?php echo $login->userAgent; ?></td>
                        </tr>
                    <?php } if (!$v7743859391iterated) { ?>
                        <tr><td colspan="3" align="center">User does not have successfull logins</td></tr>
                    <?php } ?>
                    </tbody>
                </table>
            </p>
        </div>

        <div class="tab-pane" id="C">
            <p>
                <table class="table table-bordered table-striped" align="center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>IP Address</th>
                            <th>User Agent</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $v7743859391iterated = false; ?><?php foreach ($user->passwordChanges as $change) { ?><?php $v7743859391iterated = true; ?>
                        <tr>
                            <td><?php echo $change->id; ?></td>
                            <td><?php echo $change->ipAddress; ?></td>
                            <td><?php echo $change->userAgent; ?></td>
                            <td><?php echo date('Y-m-d H:i:s', $change->createdAt); ?></td>
                        </tr>
                    <?php } if (!$v7743859391iterated) { ?>
                        <tr><td colspan="3" align="center">User has not changed his/her password</td></tr>
                    <?php } ?>
                    </tbody>
                </table>
            </p>
        </div>

        <div class="tab-pane" id="D">
            <p>
                <table class="table table-bordered table-striped" align="center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Date</th>
                            <th>Reset?</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $v7743859391iterated = false; ?><?php foreach ($user->resetPasswords as $reset) { ?><?php $v7743859391iterated = true; ?>
                        <tr>
                            <th><?php echo $reset->id; ?></th>
                            <th><?php echo date('Y-m-d H:i:s', $reset->createdAt); ?>
                            <th><?php echo ($reset->reset == 'Y' ? 'Yes' : 'No'); ?>
                        </tr>
                    <?php } if (!$v7743859391iterated) { ?>
                        <tr><td colspan="3" align="center">User has not requested reset his/her password</td></tr>
                    <?php } ?>
                    </tbody>
                </table>
            </p>
        </div>

    </div>
</div>

    </form>
</div>