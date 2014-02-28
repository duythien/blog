<body class="site com_login view-login">
 {{ stylesheet_link('css/bootstrap.css') }}
    {{ stylesheet_link('css/bootstrap-responsive.css') }}
	{{stylesheet_link ('css/admin.css')}} 	
{{ content() }}

  <!-- Container -->
  	<div class="container">
    	<div id="content">
    	<div class="login well" id="element-box"><!-- Begin Content -->
    	{{image('img/logo.png','alt':'logo admin')}}
        <hr>
			{{ form('class': 'form-inline','id':'form-login') }}

                {{form.render('email')}}
                {{form.messages('email')}}
				{{ form.render('password') }}
				{{ form.messages('password') }}

				<div align="center" class="remember">
					{{ form.render('remember') }}
					{{ form.label('remember') }}
				</div>
				{{ form.render('csrf', ['value': security.getToken()]) }}
				<hr>
          		<button type="submit" class="btn btn-primary"><i class="fa fa-hand-o-right"></i> Sign in</button>
				{{ link_to("session/index/forgotPassword", "Forgot my password") }}
			{{endform()}}
		</div> 
		</div><!-- End Content -->
	</div><!-- end contaner -->
	<div class="navbar navbar-fixed-bottom hidden-phone">
	    <p class="pull-right">&copy; Your Phalcon VN! Site hosted with CloudAccess.net 2013</p>
	    <a title="Phalcon is free software released under the GNU General Public License."
	     href="" id="login-phalconvn">Phalcon VN!&reg;</a>
	    <a class="pull-left" href=""><i class="fa fa-share"></i> Go to site home page</a>
	</div>
