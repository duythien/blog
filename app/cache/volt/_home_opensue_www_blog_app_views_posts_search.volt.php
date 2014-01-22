<?php echo $this->getContent(); ?>

<ul class="pager">
    <li class="previous pull-left">
        <?php echo Phalcon\Tag::linkTo(array('posts/index', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo Phalcon\Tag::linkTo(array('posts/create', 'Create Posts', 'class' => 'btn btn-primary')); ?>
    </li>
</ul>

<?php $v26674716581iterated = false; ?><?php $v26674716581iterator = $page->items; $v26674716581incr = 0; $v26674716581loop = new stdClass(); $v26674716581loop->length = count($v26674716581iterator); $v26674716581loop->index = 1; $v26674716581loop->index0 = 1; $v26674716581loop->revindex = $v26674716581loop->length; $v26674716581loop->revindex0 = $v26674716581loop->length - 1; ?><?php foreach ($v26674716581iterator as $post) { ?><?php $v26674716581loop->first = ($v26674716581incr == 0); $v26674716581loop->index = $v26674716581incr + 1; $v26674716581loop->index0 = $v26674716581incr; $v26674716581loop->revindex = $v26674716581loop->length - $v26674716581incr; $v26674716581loop->revindex0 = $v26674716581loop->length - ($v26674716581incr + 1); $v26674716581loop->last = ($v26674716581incr == ($v26674716581loop->length - 1)); ?><?php $v26674716581iterated = true; ?>
<?php if ($v26674716581loop->first) { ?>
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
            <td><?php echo $post->userPost; ?></td>
            <td><?php echo $post->category->name; ?></td>
            <td><?php echo $post->tags; ?></td>
            <td><?php echo $post->created; ?></td>
            <td width="12%"><?php echo Phalcon\Tag::linkTo(array('posts/edit/' . $post->id, '<i class="fa fa-pencil-square-o"></i> Edit', 'class' => 'btn')); ?></td>
            <td width="12%"><?php echo Phalcon\Tag::linkTo(array('posts/delete/' . $post->id, '<i class="fa fa-times"></i> Delete', 'class' => 'btn')); ?></td>
        </tr>
    </tbody>
<?php if ($v26674716581loop->last) { ?>
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
<?php $v26674716581incr++; } if (!$v26674716581iterated) { ?>
    No users are recorded
<?php } ?>
