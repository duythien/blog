<?php echo $this->getContent(); ?>

<ul class="pager">
    <li class="previous pull-left">
        <?php echo $this->tag->linkTo(array('filestore/index', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo $this->tag->linkTo(array('filestore/create', '<i class=\'fa fa-plus-circle\'></i>' . _('Upload Document'), 'class' => 'btn btn-primary')); ?>
    </li>
</ul>
<?php $v38324631771iterated = false; ?><?php $v38324631771iterator = $page->items; $v38324631771incr = 0; $v38324631771loop = new stdClass(); $v38324631771loop->length = count($v38324631771iterator); $v38324631771loop->index = 1; $v38324631771loop->index0 = 1; $v38324631771loop->revindex = $v38324631771loop->length; $v38324631771loop->revindex0 = $v38324631771loop->length - 1; ?><?php foreach ($v38324631771iterator as $fileStore) { ?><?php $v38324631771loop->first = ($v38324631771incr == 0); $v38324631771loop->index = $v38324631771incr + 1; $v38324631771loop->index0 = $v38324631771incr; $v38324631771loop->revindex = $v38324631771loop->length - $v38324631771incr; $v38324631771loop->revindex0 = $v38324631771loop->length - ($v38324631771incr + 1); $v38324631771loop->last = ($v38324631771incr == ($v38324631771loop->length - 1)); ?><?php $v38324631771iterated = true; ?>
<?php if ($v38324631771loop->first) { ?>
<table class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Caption</th>
            <th>Author</th>
            <th>Categories</th>
            <th>Date</th>
            <th>Confirmed?</th>
        </tr>
    </thead>
<?php } ?>
    <tbody>
        <tr>
            <td><?php echo $fileStore->id; ?></td>
            <td><?php echo $fileStore->fileCaption; ?></td>
            <td><?php echo $fileStore->userUpload->username; ?></td>
            <td><?php echo $fileStore->categoryUpload->name; ?></td>
            <td><?php echo date('M d/Y H:i', $fileStore->created); ?></td>
            <td width="12%"><?php echo $this->tag->linkTo(array('filestore/edit/' . $fileStore->id, '<i class="fa fa-pencil-square-o"></i> Edit', 'class' => 'btn')); ?></td>
            <td width="12%"><?php echo $this->tag->linkTo(array('filestore/delete/' . $fileStore->id, '<i class="fa fa-times"></i> Delete', 'class' => 'btn')); ?></td>
        </tr>
    </tbody>
<?php if ($v38324631771loop->last) { ?>
    <tbody>
        <tr>
            <td colspan="10" align="right">
                <div class="btn-group">
                    <?php echo $this->tag->linkTo(array('filestore/search', '<i class="fa fa-backward"></i> First', 'class' => 'btn')); ?>
                    <?php echo $this->tag->linkTo(array('filestore/search?page=' . $page->before, '<i class=" fa fa-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                    <?php echo $this->tag->linkTo(array('filestore/search?page=' . $page->next, '<i class="fa fa-step-forward"></i> Next', 'class' => 'btn')); ?>
                    <?php echo $this->tag->linkTo(array('filestore/search?page=' . $page->last, '<i class="fa fa-fast-forward"></i> Last', 'class' => 'btn')); ?>
                    <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                </div>
            </td>
        </tr>
    <tbody>
</table>
<?php } ?>
<?php $v38324631771incr++; } if (!$v38324631771iterated) { ?>
    No filestore are recorded
<?php } ?>
