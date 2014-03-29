<?php echo $this->getContent(); ?>

<ul class="pager">
    <li class="previous pull-left">
        <?php echo $this->tag->linkTo(array('categories/index', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo $this->tag->linkTo(array('categories/create', 'Create categories', 'class' => 'btn btn-primary')); ?>
    </li>
</ul>

<?php $v23455515861iterated = false; ?><?php $v23455515861iterator = $page->items; $v23455515861incr = 0; $v23455515861loop = new stdClass(); $v23455515861loop->length = count($v23455515861iterator); $v23455515861loop->index = 1; $v23455515861loop->index0 = 1; $v23455515861loop->revindex = $v23455515861loop->length; $v23455515861loop->revindex0 = $v23455515861loop->length - 1; ?><?php foreach ($v23455515861iterator as $categori) { ?><?php $v23455515861loop->first = ($v23455515861incr == 0); $v23455515861loop->index = $v23455515861incr + 1; $v23455515861loop->index0 = $v23455515861incr; $v23455515861loop->revindex = $v23455515861loop->length - $v23455515861incr; $v23455515861loop->revindex0 = $v23455515861loop->length - ($v23455515861incr + 1); $v23455515861loop->last = ($v23455515861incr == ($v23455515861loop->length - 1)); ?><?php $v23455515861iterated = true; ?>
<?php if ($v23455515861loop->first) { ?>
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
            <td width="12%"><?php echo $this->tag->linkTo(array('categories/edit/' . $categori->id, '<i class="fa fa-pencil-square-o"></i> Edit', 'class' => 'btn')); ?></td>
            <td width="12%"><?php echo $this->tag->linkTo(array('categories/delete/' . $categori->id, '<i class="fa fa-times"></i> Delete', 'class' => 'btn')); ?></td>
        </tr>
    </tbody>
<?php if ($v23455515861loop->last) { ?>
    <tbody>
        <tr>
            <td colspan="10" align="right">
                <div class="btn-group">
                    <?php echo $this->tag->linkTo(array('categories/search', '<i class="fa fa-backward"></i> First', 'class' => 'btn')); ?>
                    <?php echo $this->tag->linkTo(array('categories/search?page=' . $page->before, '<i class=" fa fa-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                    <?php echo $this->tag->linkTo(array('categories/search?page=' . $page->next, '<i class="fa fa-step-forward"></i> Next', 'class' => 'btn')); ?>
                    <?php echo $this->tag->linkTo(array('categories/search?page=' . $page->last, '<i class="fa fa-fast-forward"></i> Last', 'class' => 'btn')); ?>
                    <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                </div>
            </td>
        </tr>
    <tbody>
</table>
<?php } ?>
<?php $v23455515861incr++; } if (!$v23455515861iterated) { ?>
    No categories are recorded
<?php } ?>
