<div class="span3" id="tags">
    <ul class="list medium">
      <li class="list-item">
        <a href="/books" class="">
          All <i class="fa fa-chevron-right"></i> 
        </a>
      </li>
        {% for category in categories %}
          <li class="list-item">
            {{link_to('category/' ~ category.id ~ '/'~category.slug,'<i class="fa fa-chevron-right"></i>' ~ t(category.name))}}
            
      
          </li>
        {% endfor %}
        
    </ul>
  </div>
<div class="span1"></div>
