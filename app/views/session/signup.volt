{{ content() }}

  <style type="text/css">
    div.control-group label{
        float: left;
        margin-top: 6px;
    }
    </style>
  <div class="row-fluid">

        <div class="span12">
            
            
    
                       
			    <div class="span7">
			      <h3>This is test pages</h3>
			      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			      <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
			    </div>
			                                     
                    
            
            	<div class="span5">
	                <div class="well">
	                        {{ form('class': 'form-horizontal') }}
	                        <div class="heading">
	                            <h4 class="form-heading">Thông Tin Tài Khoản</h4>
	                        </div>
	                        <div class="control-group">
	                           {{form.label('fullName')}}
	                            <div class="controls">
	                            {{form.render('fullName')}}
	                            {{form.messages('fullName')}}
	                            </div>
	                        </div>
	                        <div class="control-group">
	                            {{form.label('username')}}
	                            <div class="controls">
	                            {{form.render('username')}}
	                            {{form.messages('username')}}
	                            </div>
	                        </div>
	                        <div class="control-group">
	                            {{form.label('email')}}
	                            <div class="controls">
	                            {{form.render('email')}}
	                            {{form.messages('email')}}
	                            </div>
	                        </div>
	                     <div class="control-group">
	                            {{form.label('cardId')}}
	                            <div class="controls">
	                            {{form.render('cardId')}}
	                            {{form.messages('cardId')}}
	                            </div>
	                        </div>
	                        <div class="control-group">
	                            {{form.label('birthday')}}
	                            <div class="controls">
	                            {{form.render('birthday')}}
	                            {{form.messages('birthday')}}
	                            </div>
	                        </div>
	                        <div class="control-group">
	                            {{form.label('password')}}
	                            <div class="controls">
	                            {{form.render('password')}}
	                            {{form.messages('password')}}
	                            </div>
	                        </div>
	                        <div class="control-group">
	                            {{form.label('confirmPassword')}}
	                            <div class="controls">
	                            {{form.render('confirmPassword')}}
	                            {{form.messages('confirmPassword')}}
	                            </div>
	                        </div>
	                        <div class="control-group">
	                            {{form.label('sex')}}
	                            <div class="controls">
	                            {{form.render('sex')}}
	                            {{form.messages('sex')}}
	                            </div>
	                        </div>
	                        <div class="control-group">
	                            {{form.label('phone')}}
	                            <div class="controls">
	                            {{form.render('phone')}}
	                            {{form.messages('phone')}}
	                            </div>
	                        </div>
	                        <div class="control-group">
	                            {{form.label('cityRegion')}}
	                            <div class="controls">
	                            {{form.render('cityRegion')}}
	                            {{form.messages('cityRegion')}}
	                            </div>
	                        </div>
	                        <div class="abc">
	                            {{form.render('terms')}}
	                            {{form.messages('terms')}}
	                            <strong> 	                            

	                            {{form.label('terms')}}</strong>
	                        </div>

	                        <!-- <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-hand-o-right"></i> Đăng Ký</button> -->
							{{ form.render('Sign Up') }}
						 </div><!-- end well -->
						 {{ form.render('csrf', ['value': security.getToken()]) }}
						{{ form.messages('csrf') }}
	           	 </div>
	           	</form>
            <div class="span12">
                          
            </div>    
        </div><!-- end sapn12 -->
  </div><!-- end row-fluil -->