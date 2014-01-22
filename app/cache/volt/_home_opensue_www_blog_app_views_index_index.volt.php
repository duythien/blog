<?php echo $this->getContent(); ?>
    <div class="flash">
              
    </div>  
<div class="row splash-block">
        <div class="span6">
          <a href="/en/" class="header-logo"></a>
          <h1><?php echo _('Phalcon VN'); ?> <sup>Beta</sup></h1>
          <h2><?php echo _('The new learning environment from'); ?> ;)</h2>
        </div>
        <div class="span6">
          <ul class="nav nav-tabs">
            <li><a href="https://www.digitalocean.com/?refcode=b6bc40f90fc0"><i class="fa fa-linux fa-3x"></i><p><?php echo _('Read'); ?></p></a></li>
            <li><a href="http://www.cashcrate.com/5164937"><i class="fa fa-play fa-3x"></i><p><?php echo _('Watch'); ?></p></a></li>
            <li><a href="https://www.digitalocean.com/?refcode=b6bc40f90fc0"><i class="fa fa-code fa-3x"></i><p><?php echo _('Code'); ?></p></a></li>
            <li><a href="https://www.digitalocean.com/?refcode=b6bc40f90fc0"><i class="fa fa-comment fa-3x"></i><p><?php echo _('Comment'); ?></p></a></li>
            <li><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=SGKQ3HBNMLSL2"><i class="fa fa-money fa-3x"></i><p><?php echo _('Donate'); ?></p></a></li>
            <li><a href="http://github.com/duythien/blog"><i class="fa fa-github fa-3x"></i><p><?php echo _('Source'); ?></p></a></li>
          </ul>
        </div>
  </div>
<div class="row">
  <!-- categories sidebar left -->
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

  <div class="span8">
      <div class="content">
        <?php foreach ($page->items as $post) { ?>
          <h2><?php echo Phalcon\Tag::linkTo(array('view/' . $post->id . '/' . $post->slug, $this->escaper->escapeHtml($post->title))); ?></h2>
          <span class="date"><?php echo date('M d/Y H:i', $post->created); ?></span>
            <span> <?php echo ('By'); ?> <a href=""><?php echo $post->userPost; ?></a>, <?php echo _('Views'); ?>: <?php echo $post->numberViews; ?>
          </span>
          <?php echo substr($post->content,0, 560);?>
          <div class="clear"></div>
              <?php } ?>
      </div>

  </div><!-- span8 -->
</div><!-- end row -->
<div class="row">
    <div class="span3">   <ul class="pager">
  <li><?php echo Phalcon\Tag::linkTo(array('index?page=' . $page->before, '&larr; Older')); ?>
  </li>
  <li><?php echo Phalcon\Tag::linkTo(array('index?page=' . $page->next, 'Newer &rarr;')); ?></li>
</ul></div>
<div class="span9"></div>
</div>