<?php echo $this->getContent(); ?>

<ul class="pager">
    <li class="previous pull-left">
        <?php echo Phalcon\Tag::linkTo(array('categories/index', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo Phalcon\Tag::linkTo(array('categories/create', 'Create categories', 'class' => 'btn btn-primary')); ?>
    </li>
</ul>

<?php $v32075192551iterated = false; ?><?php $v32075192551iterator = $page->items; $v32075192551incr = 0; $v32075192551loop = new stdClass(); $v32075192551loop->length = count($v32075192551iterator); $v32075192551loop->index = 1; $v32075192551loop->index0 = 1; $v32075192551loop->revindex = $v32075192551loop->length; $v32075192551loop->revindex0 = $v32075192551loop->length - 1; ?><?php foreach ($v32075192551iterator as $categori) { ?><?php $v32075192551loop->first = ($v32075192551incr == 0); $v32075192551loop->index = $v32075192551incr + 1; $v32075192551loop->index0 = $v32075192551incr; $v32075192551loop->revindex = $v32075192551loop->length - $v32075192551incr; $v32075192551loop->revindex0 = $v32075192551loop->length - ($v32075192551incr + 1); $v32075192551loop->last = ($v32075192551incr == ($v32075192551loop->length - 1)); ?><?php $v32075192551iterated = true; ?>
<?php if ($v32075192551loop->first) { ?>
<table class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Slug</th>
            <th>numberPost </th>
            <th>Confirmed?</th>
        </tr>
    </thead>
<?php } ?>
    <tbody>
        <tr>
            <td><?php echo $categori->id; ?></td>
            <td><?php echo $categori->name; ?></td>
            <td><?php echo $categori->slug; ?></td>
            <td><?php echo $categori->numberPosts; ?></td>
            <td width="12%"><?php echo Phalcon\Tag::linkTo(array('categories/edit/' . $categori->id, '<i class="fa fa-pencil-square-o"></i> Edit', 'class' => 'btn')); ?></td>
            <td width="12%"><?php echo Phalcon\Tag::linkTo(array('categories/delete/' . $categori->id, '<i class="fa fa-times"></i> Delete', 'class' => 'btn')); ?></td>
        </tr>
    </tbody>
<?php if ($v32075192551loop->last) { ?>
    <tbody>
        <tr>
            <td colspan="10" align="right">
                <div class="btn-group">
                    <?php echo Phalcon\Tag::linkTo(array('categories/search', '<i class="fa fa-backward"></i> First', 'class' => 'btn')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('categories/search?page=' . $page->before, '<i class=" fa fa-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('categories/search?page=' . $page->next, '<i class="fa fa-step-forward"></i> Next', 'class' => 'btn')); ?>
                    <?php echo Phalcon\Tag::linkTo(array('categories/search?page=' . $page->last, '<i class="fa fa-fast-forward"></i> Last', 'class' => 'btn')); ?>
                    <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                </div>
            </td>
        </tr>
    <tbody>
</table>
<?php } ?>
<?php $v32075192551incr++; } if (!$v32075192551iterated) { ?>
    No categories are recorded
<?php } ?>
