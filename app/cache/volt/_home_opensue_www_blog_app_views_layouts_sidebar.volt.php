<div class="span3" id="tags">
    <ul class="list medium">
      <li class="list-item">
        <a href="/books" class="">
          All <i class="fa fa-chevron-right"></i> 
        </a>
      </li>
        <?php foreach ($categories as $category) { ?>
          <li class="list-item">
            <?php echo Phalcon\Tag::linkTo(array('category/' . $category->id . '/' . $category->slug, '<i class="fa fa-chevron-right"></i>' . _($category->name))); ?>
            
      
          </li>
        <?php } ?>
        
    </ul>
  </div>
<div class="span1"></div>
