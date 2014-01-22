<?php echo $this->getContent(); ?>

<ul class="pager">
    <li class="previous pull-left">
        <?php echo Phalcon\Tag::linkTo(array('users/index', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo Phalcon\Tag::linkTo(array('users/create', 'Create users', 'class' => 'btn btn-primary')); ?>
    </li>
</ul>

<?php $v26737152031iterated = false; ?><?php $v26737152031iterator = $page->items; $v26737152031incr = 0; $v26737152031loop = new stdClass(); $v26737152031loop->length = count($v26737152031iterator); $v26737152031loop->index = 1; $v26737152031loop->index0 = 1; $v26737152031loop->revindex = $v26737152031loop->length; $v26737152031loop->revindex0 = $v26737152031loop->length - 1; ?><?php foreach ($v26737152031iterator as $user) { ?><?php $v26737152031loop->first = ($v26737152031incr == 0); $v26737152031loop->index = $v26737152031incr + 1; $v26737152031loop->index0 = $v26737152031incr; $v26737152031loop->revindex = $v26737152031loop->length - $v26737152031incr; $v26737152031loop->revindex0 = $v26737152031loop->length - ($v26737152031incr + 1); $v26737152031loop->last = ($v26737152031incr == ($v26737152031loop->length - 1)); ?><?php $v26737152031iterated = true; ?>
<?php if ($v26737152031loop->first) { ?>
<table class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Profile</th>
            <th>Banned?</th>
            <th>Suspended?</th>
            <th>Confirmed?</th>
        </tr>
    </thead>
<?php } ?>
    <tbody>
        <tr>
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->username; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo $user->profile->name; ?></td>
            <td><?php echo ($user->banned == 'Y' ? 'Yes' : 'No'); ?></td>
            <td><?php echo ($user->suspended == 'Y' ? 'Yes' : 'No'); ?></td>
            <td><?php echo ($user->active == 'Y' ? 'Yes' : 'No'); ?></td>
            <td width="12%"><?php echo Phalcon\Tag::linkTo(array('users/edit/' . $user->id, '<i class="fa fa-pencil-square-o"></i> Edit', 'class' => 'btn')); ?></td>
            <td width="12%"><?php echo Phalcon\Tag::linkTo(array('users/delete/' . $user->id, '<i class="fa fa-times"></i> Delete', 'class' => 'btn')); ?></td>
        </tr>
    </tbody>
<?php if ($v26737152031loop->last) { ?>
    <tbody>
        <tr>
            <td colspan="10" align="right">
                <div class="btn-group">
                    <?php echo Phalcon\Tag::linkTo(array('users/search', '<i class="fa fa-backward"></i> First', 'class' => 'btn')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('users/search?page=' . $page->before, '<i class=" fa fa-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('users/search?page=' . $page->next, '<i class="fa fa-step-forward"></i> Next', 'class' => 'btn')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('users/search?page=' . $page->last, '<i class="fa fa-fast-forward"></i> Last', 'class' => 'btn')); ?>
                    <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                </div>
            </td>
        </tr>
    <tbody>
</table>
<?php } ?>
<?php $v26737152031incr++; } if (!$v26737152031iterated) { ?>
    No users are recorded
<?php } ?>
