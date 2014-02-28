{{javascript_include('markdown/js/jquery.pagedown-bootstrap.combined.min.js')}}
{{stylesheet_link ('markdown/css/jquery.pagedown-bootstrap.css')}} 

{{form()}}
<div class="hero-unit">
        <h1 style="font-size:38px" class="center">Post pages</h1>
          <div class="form-group">
            {{ form.render("id") }}
          <label>Titles</label>
          {{ form.render('title') }}
          {{form.messages('title')}}
       </div>
      <div class="form-group">
        <label class="control-label">Categories and tag</label>
          
              {{form.render('categoriesId')}}
              {{form.render('tags')}}
      </div>
    <div>
    <p>
      {{form.render('content')}}
    </p>
      <div>
          <ul class="pager">
            <li class="previous pull-left">
                {{ link_to("posts/index", "&larr; Go Back") }}
            </li>
            <li class="pull-right">
              {{ submit_button('Save','class':'btn btn-primary') }}
            </li>
          </ul>
      </div>
          
</div>
</form>
<script type="text/javascript">
$("textarea#content").pagedownBootstrap({
'sanatize': false,
'help': function () { alert("Do you need help?"); },
'hooks': [
{
'event': 'preConversion',
'callback': function (text) {
return text.replace(/\b(a\w*)/gi, "*$1*");
}
},
{
'event': 'plainLinkText',
'callback': function (url) {
return "This is a link to " + url.replace(/^https?:\/\//, "");
}
}
]
});
</script>