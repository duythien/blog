<?php echo $this->getContent(); ?>

<?php echo Phalcon\Tag::form(array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
<ul class="pager">
    <li class="previous pull-left">
        <?php echo Phalcon\Tag::linkTo(array('users', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo Phalcon\Tag::submitButton(array('Save', 'class' => 'btn btn-success')); ?>
    </li>
</ul>
<?php
// Content-type must come before Content-disposition
 /* header('Content-length: ' );
  header("Content-type:");
  header("Content-disposition: ");*/                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
?>
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
                
                <!-- <div class="control-group">
                   
                    </div>
                </div> -->
                
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
<?php echo Phalcon\Tag::endform(); ?>