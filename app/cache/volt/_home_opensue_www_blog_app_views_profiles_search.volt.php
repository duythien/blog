<?php echo $this->getContent(); ?>

<ul class="pager">
    <li class="previous pull-left">
        <?php echo Phalcon\Tag::linkTo(array('profiles/index', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo Phalcon\Tag::linkTo(array('profiles/create', 'Create profiles', 'class' => 'btn btn-primary')); ?>
    </li>
</ul>

<?php $v34917943251iterated = false; ?><?php $v34917943251iterator = $page->items; $v34917943251incr = 0; $v34917943251loop = new stdClass(); $v34917943251loop->length = count($v34917943251iterator); $v34917943251loop->index = 1; $v34917943251loop->index0 = 1; $v34917943251loop->revindex = $v34917943251loop->length; $v34917943251loop->revindex0 = $v34917943251loop->length - 1; ?><?php foreach ($v34917943251iterator as $profile) { ?><?php $v34917943251loop->first = ($v34917943251incr == 0); $v34917943251loop->index = $v34917943251incr + 1; $v34917943251loop->index0 = $v34917943251incr; $v34917943251loop->revindex = $v34917943251loop->length - $v34917943251incr; $v34917943251loop->revindex0 = $v34917943251loop->length - ($v34917943251incr + 1); $v34917943251loop->last = ($v34917943251incr == ($v34917943251loop->length - 1)); ?><?php $v34917943251iterated = true; ?>
<?php if ($v34917943251loop->first) { ?>
<table class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Active?</th>
        </tr>
    </thead>
<?php } ?>
    <tbody>
        <tr>
            <td><?php echo $profile->id; ?></td>
            <td><?php echo $profile->name; ?></td>
            <td><?php echo ($profile->active == 'Y' ? 'Yes' : 'No'); ?></td>
            <td width="12%"><?php echo Phalcon\Tag::linkTo(array('profiles/edit/' . $profile->id, '<i class="icon-pencil"></i> Edit', 'class' => 'btn')); ?></td>
            <td width="12%"><?php echo Phalcon\Tag::linkTo(array('profiles/delete/' . $profile->id, '<i class="icon-remove"></i> Delete', 'class' => 'btn')); ?></td>
        </tr>
    </tbody>
<?php if ($v34917943251loop->last) { ?>
    <tbody>
        <tr>
            <td colspan="10" align="right">
                <div class="btn-group">
                    <?php echo Phalcon\Tag::linkTo(array('profiles/search', '<i class="icon-fast-backward"></i> First', 'class' => 'btn')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('profiles/search?page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('profiles/search?page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('profiles/search?page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn')); ?>
                    <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                </div>
            </td>
        </tr>
    <tbody>
</table>
<?php } ?>
<?php $v34917943251incr++; } if (!$v34917943251iterated) { ?>
    No profiles are recorded
<?php } ?>
