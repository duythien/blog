<?php echo $this->getContent(); ?>

<ul class="pager">
    <li class="previous pull-left">
        <?php echo Phalcon\Tag::linkTo(array('filestore/index', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo Phalcon\Tag::linkTo(array('filestore/create', '<i class=\'fa fa-plus-circle\'></i>' . _('Upload Document'), 'class' => 'btn btn-primary')); ?>
    </li>
</ul>
<?php $v2143687341iterated = false; ?><?php $v2143687341iterator = $page->items; $v2143687341incr = 0; $v2143687341loop = new stdClass(); $v2143687341loop->length = count($v2143687341iterator); $v2143687341loop->index = 1; $v2143687341loop->index0 = 1; $v2143687341loop->revindex = $v2143687341loop->length; $v2143687341loop->revindex0 = $v2143687341loop->length - 1; ?><?php foreach ($v2143687341iterator as $fileStore) { ?><?php $v2143687341loop->first = ($v2143687341incr == 0); $v2143687341loop->index = $v2143687341incr + 1; $v2143687341loop->index0 = $v2143687341incr; $v2143687341loop->revindex = $v2143687341loop->length - $v2143687341incr; $v2143687341loop->revindex0 = $v2143687341loop->length - ($v2143687341incr + 1); $v2143687341loop->last = ($v2143687341incr == ($v2143687341loop->length - 1)); ?><?php $v2143687341iterated = true; ?>
<?php if ($v2143687341loop->first) { ?>
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
            <td width="12%"><?php echo Phalcon\Tag::linkTo(array('filestore/edit/' . $fileStore->id, '<i class="fa fa-pencil-square-o"></i> Edit', 'class' => 'btn')); ?></td>
            <td width="12%"><?php echo Phalcon\Tag::linkTo(array('filestore/delete/' . $fileStore->id, '<i class="fa fa-times"></i> Delete', 'class' => 'btn')); ?></td>
        </tr>
    </tbody>
<?php if ($v2143687341loop->last) { ?>
    <tbody>
        <tr>
            <td colspan="10" align="right">
                <div class="btn-group">
                    <?php echo Phalcon\Tag::linkTo(array('filestore/search', '<i class="fa fa-backward"></i> First', 'class' => 'btn')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('filestore/search?page=' . $page->before, '<i class=" fa fa-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('filestore/search?page=' . $page->next, '<i class="fa fa-step-forward"></i> Next', 'class' => 'btn')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('filestore/search?page=' . $page->last, '<i class="fa fa-fast-forward"></i> Last', 'class' => 'btn')); ?>
                    <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                </div>
            </td>
        </tr>
    <tbody>
</table>
<?php } ?>
<?php $v2143687341incr++; } if (!$v2143687341iterated) { ?>
    No filestore are recorded
<?php } ?>
