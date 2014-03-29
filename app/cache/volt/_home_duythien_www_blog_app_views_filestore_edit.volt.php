<?php echo $this->getContent(); ?>

<?php echo $this->tag->form(array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
<ul class="pager">
    <li class="previous pull-left">
        <?php echo $this->tag->linkTo(array('users', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo $this->tag->submitButton(array('Save', 'class' => 'btn btn-success')); ?>
    </li>
</ul>

<div class="well">
    <div class="heading">
        <h4 class="form-heading"><?php echo _('Add Document'); ?></h4>
    </div>
    <div class="row-fluid">
    <div class="span12">
        <div class="span6">
            <div class="clearfix">
                 <?php echo $form->render('id'); ?>
                <div class="control-group">
                   <?php echo $form->label('fileCaption'); ?>
                    <div class="controls">
                    <?php echo $form->render('fileCaption'); ?>
                    <?php echo $form->messages('fileCaption'); ?>
                    </div>
                </div>
                
                 <div class="control-group">
                   <?php echo $form->label('fileDataEdit'); ?>
                    <div class="controls">
                    <?php echo $form->render('fileDataEdit'); ?>
                    <?php echo $form->messages('fileDataEdit'); ?>
                    </div>
                </div> 
                
            </div>
        </div>
        <div class="span6">
           
            <div class="form-group">
                <?php echo $form->label('categoriesId'); ?>
                <div class="controls">
                <?php echo $form->render('categoriesId'); ?>
                </div>
            </div>
            <div class="form-group">
                <?php echo $form->label('description'); ?>
                <div class="controls">
                <?php echo $form->render('description'); ?>
                <?php echo $form->messages('description'); ?>

                </div>
            </div>
           
        </div>
        
    </div>
    </div>
</div>
<?php echo $this->tag->endform(); ?>