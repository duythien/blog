<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <div class="container" style="width: auto;">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <?php echo $this->tag->linkTo(array(null, 'class' => 'brand', 'Phalconvn')); ?>
        <div class="nav-collapse">

          <ul class="nav"><?php $menus = array('Home' => null, 'Users' => 'users', 'Profiles' => 'profiles', 'Permissions' => 'permissions', 'Posts' => 'posts', 'Categories' => 'categories', 'File Store' => 'filestore'); ?><?php $v42321927891iterator = $menus; $v42321927891incr = 0; $v42321927891loop = new stdClass(); $v42321927891loop->length = count($v42321927891iterator); $v42321927891loop->index = 1; $v42321927891loop->index0 = 1; $v42321927891loop->revindex = $v42321927891loop->length; $v42321927891loop->revindex0 = $v42321927891loop->length - 1; ?><?php foreach ($v42321927891iterator as $key => $value) { ?><?php $v42321927891loop->first = ($v42321927891incr == 0); $v42321927891loop->index = $v42321927891incr + 1; $v42321927891loop->index0 = $v42321927891incr; $v42321927891loop->revindex = $v42321927891loop->length - $v42321927891incr; $v42321927891loop->revindex0 = $v42321927891loop->length - ($v42321927891incr + 1); $v42321927891loop->last = ($v42321927891incr == ($v42321927891loop->length - 1)); ?>
              <?php if ($value == $this->dispatcher->getControllerName()) { ?>
              <li class="active"><?php echo $this->tag->linkTo(array($value, _($key))); ?></li>
              <?php } else { ?>
              <li><?php echo $this->tag->linkTo(array($value, _($key))); ?></li>
              <?php } ?><?php $v42321927891incr++; } ?></ul>

        <ul class="nav pull-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->auth->getName(); ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><?php echo $this->tag->linkTo(array('users/changePassword', 'Change Password')); ?></li>
            </ul>
          </li>
          <li><?php echo $this->tag->linkTo(array('session/logout', 'Logout')); ?></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container main-container">
  <?php echo $this->getContent(); ?>
</div>

<div class="row5">
	    <div class="clearfix">
	    <br>
</div>
<div id="footerAdmin" class="navbar navbar-fixed-bottom hidden-phone">

Made with love by the Phalcon VN Team

    <?php echo $this->tag->linkTo(array('privacy', 'Privacy Policy')); ?>
    <?php echo $this->tag->linkTo(array('terms', 'Terms')); ?>

© <?php echo date('Y'); ?> Phalcon VNTeam.
</div>
