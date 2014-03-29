<?php echo $this->getContent(); ?>

<ul class="pager">
    <li class="previous pull-left">
        <?php echo $this->tag->linkTo(array('posts/index', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo $this->tag->linkTo(array('posts/create', '<i class=\'fa fa-plus-circle\'></i>' . _('Create Post'), 'class' => 'btn btn-primary')); ?>
    </li>
</ul>
<?php $v42321927891iterated = false; ?><?php $v42321927891iterator = $page->items; $v42321927891incr = 0; $v42321927891loop = new stdClass(); $v42321927891loop->length = count($v42321927891iterator); $v42321927891loop->index = 1; $v42321927891loop->index0 = 1; $v42321927891loop->revindex = $v42321927891loop->length; $v42321927891loop->revindex0 = $v42321927891loop->length - 1; ?><?php foreach ($v42321927891iterator as $post) { ?><?php $v42321927891loop->first = ($v42321927891incr == 0); $v42321927891loop->index = $v42321927891incr + 1; $v42321927891loop->index0 = $v42321927891incr; $v42321927891loop->revindex = $v42321927891loop->length - $v42321927891incr; $v42321927891loop->revindex0 = $v42321927891loop->length - ($v42321927891incr + 1); $v42321927891loop->last = ($v42321927891incr == ($v42321927891loop->length - 1)); ?><?php $v42321927891iterated = true; ?>
<?php if ($v42321927891loop->first) { ?>
<table class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Categories</th>
            <th>Tag</th>
            <th>Date</th>
            <th>Confirmed?</th>
        </tr>
    </thead>
<?php } ?>
    <tbody>
        <tr>
            <td><?php echo $post->id; ?></td>
            <td><?php echo $post->title; ?></td>
            <td><?php echo $post->userPost->username; ?></td>
            <td><?php echo $post->category->name; ?></td>
            <td><?php echo $post->tags; ?></td>
            <td><?php echo date('M d/Y H:i', $post->created); ?></td>
            <td width="12%"><?php echo $this->tag->linkTo(array('posts/edit/' . $post->id, '<i class="fa fa-pencil-square-o"></i> Edit', 'class' => 'btn')); ?></td>
            <td width="12%"><?php echo $this->tag->linkTo(array('posts/delete/' . $post->id, '<i class="fa fa-times"></i> Delete', 'class' => 'btn')); ?></td>
        </tr>
    </tbody>
<?php if ($v42321927891loop->last) { ?>
    <tbody>
        <tr>
            <td colspan="10" align="right">
                <div class="btn-group">
                    <?php echo $this->tag->linkTo(array('users/search', '<i class="fa fa-backward"></i> First', 'class' => 'btn')); ?>
                    <?php echo $this->tag->linkTo(array('users/search?page=' . $page->before, '<i class=" fa fa-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                    <?php echo $this->tag->linkTo(array('users/search?page=' . $page->next, '<i class="fa fa-step-forward"></i> Next', 'class' => 'btn')); ?>
                    <?php echo $this->tag->linkTo(array('users/search?page=' . $page->last, '<i class="fa fa-fast-forward"></i> Last', 'class' => 'btn')); ?>
                    <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                </div>
            </td>
        </tr>
    <tbody>
</table>
<?php } ?>
<?php $v42321927891incr++; } if (!$v42321927891iterated) { ?>
    No users are recorded
<?php } ?>
