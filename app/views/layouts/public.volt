  <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="container" style="width:1200px;">
          {{ elements.getMenu()}}
        </div>
    </div>
  </div>
 
<div class="container main-container">
  {{ content() }}
</div>

{% include 'layouts/footer.volt'%}