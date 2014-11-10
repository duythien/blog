<div class="navbar navbar-inverse">
  <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          {{link_to('', 'class':'navbar-brand', t('Zphalcon'))}}
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            {%- set menus = [
              'Home': null,
              'Users': 'users',
              'Profiles': 'profiles',
              'Permissions': 'permissions', 
              'Posts'      : 'posts',
              'Categories'  : 'categories',
              'File Store' : 'filestore'
            ] -%}

            {%- for key, value in menus %}
              {% if value == dispatcher.getControllerName() %}
              <li class="active">{{ link_to(value, t(key)) }}</li>
              {% else %}
              <li>{{ link_to(value,t(key)) }}</li>
              {% endif %}
            {%- endfor -%}
          </ul>
        <ul class="nav pull-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ auth.getName() }} <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>{{ link_to('users/changePassword', 'Change Password') }}</li>
                        <li>{{ link_to('session/logout', 'Logout') }}</li>

            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</div>
<div class="container main-container">
  {{ content() }}
</div>

{% include 'layouts/footerAdmin.volt'%}