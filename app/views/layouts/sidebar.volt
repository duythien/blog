<div class="span3 pull-right hidden-phone" id="tags">
    <ul class="list medium">
          <h2 class="list-item heading"><sup>{{t('Category')}}</sub></h2>

        {% for category in categories %}
          <li class="list-item">
            {#{link_to('category/' ~ category.id ~ '/'~category.slug,'<i class="fa fa-chevron-left"></i>' ~ t(category.name))}#}
    {{link_to('category/' ~ category.id ~ '/'~category.slug,t(category.name) ~ '<span class="number-posts label">' ~ category.numberPosts ~ '</span>')}}
            
      
          </li>
        {% endfor %}
        
    </ul>
  </div>
  <!-- <div class="span3 pull-right hidden-phone">
    <h2 class="list-item heading"><sup>{{t('Advertisements')}}</sub></h2>
  <script type="text/javascript" src="http://www.cashcrate.com/widget.jsvc?ref=5164937&n=join"></script>
  </div> -->
  
<div class="span1"></div>
<style type="text/css">
/*quan cao*/
#wrapper_widget{
    width: 270px;
}
</style>