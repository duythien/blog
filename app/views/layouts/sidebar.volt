<div class="span3" id="tags">
    <ul class="list medium">
      <li class="list-item">
        <a href="/books" class="">
          All <i class="fa fa-chevron-right"></i> 
        </a>
      </li>
        {% for categorie in categories %}
          <li class="list-item">
            {{link_to('categories/'~categorie.id~'/'~categorie.slug,'<i class="fa fa-chevron-right"></i>'~categorie.name)}}
          </li>
        {% endfor %}
        
    </ul>
  </div>
<div class="span1"></div>
