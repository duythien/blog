<div class="span3 pull-right hidden-phone" id="tags">
    <ul class="list medium">
          <h2 class="list-item heading"><sup><?php echo _('Category'); ?></sub></h2>

        <?php foreach ($categories as $category) { ?>
          <li class="list-item">
            
    <?php echo $this->tag->linkTo(array('category/' . $category->id . '/' . $category->slug, _($category->name) . '<span class="number-posts label">' . $category->numberPosts . '</span>')); ?>
            
      
          </li>
        <?php } ?>
        
    </ul>
  </div>
  <!-- <div class="span3 pull-right hidden-phone">
    <h2 class="list-item heading"><sup><?php echo _('Advertisements'); ?></sub></h2>
  <script type="text/javascript" src="http://www.cashcrate.com/widget.jsvc?ref=5164937&n=join"></script>
  </div> -->
  
<div class="span1"></div>
<style type="text/css">
/*quan cao*/
#wrapper_widget{
    width: 270px;
}
</style>