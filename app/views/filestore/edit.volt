{{content()}}

{{ form('class': 'form-horizontal','enctype': 'multipart/form-data') }}
<ul class="pager">
    <li class="previous pull-left">
        {{ link_to("users", "&larr; Go Back") }}
    </li>
    <li class="pull-right">
        {{ submit_button("Save", "class": "btn btn-success") }}
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
        <h4 class="form-heading">{{t('Add Document')}}</h4>
    </div>
    <div class="row-fluid">
    <div class="span12">
        <div class="span6">
            <div class="clearfix">
                 {{ form.render("id") }}
                <div class="control-group">
                   {{form.label('fileCaption')}}
                    <div class="controls">
                    {{form.render('fileCaption')}}
                    {{form.messages('fileCaption')}}
                    </div>
                </div>
                
                <!-- <div class="control-group">
                   {#{form.label('fileData')}}
                    <div class="controls">
                    {{form.render('fileData')}}
                    {{form.messages('fileData')}#}
                    </div>
                </div> -->
                
            </div>
        </div>
        <div class="span6">
           
            <div class="form-group">
                {{form.label('categoriesId')}}
                <div class="controls">
                {{form.render('categoriesId')}}
                </div>
            </div>
            <div class="form-group">
                {{form.label('description')}}
                <div class="controls">
                {{form.render('description')}}
                {{form.messages('description')}}

                </div>
            </div>
           
        </div>
        
    </div>
    </div>
</div>
{{endform()}}