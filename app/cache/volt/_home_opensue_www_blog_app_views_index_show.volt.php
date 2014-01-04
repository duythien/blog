
<?php echo $this->getContent(); ?>
<div class="row splash-block">
        <div class="span6">
          <h1><?php echo _('Welcome to You'); ?> <sup>Beta</sup></h1>
          <h2><?php echo _('The new learning environment from'); ?> ;)</h2>
        </div>
        <div class="span6">
          <ul class="nav nav-tabs">
            <li><a href="/about"><i class="fa fa-linux fa-3x"></i><p><?php echo _('Read'); ?></p></a></li>
            <li><a href="/about"><i class="fa fa-play fa-3x"></i><p><?php echo _('Watch'); ?></p></a></li>
            <li><a href="/about"><i class="fa fa-code fa-3x"></i><p><?php echo _('Code'); ?></p></a></li>
            <li><a href="/about"><i class="fa fa-comment fa-3x"></i><p><?php echo _('Comment'); ?></p></a></li>
            <li><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=SGKQ3HBNMLSL2"><i class="fa fa-money fa-3x"></i><p><?php echo _('Donate'); ?></p></a></li>
            <li><a href="http://github.com/duythien/blog"><i class="fa fa-github fa-3x"></i><p><?php echo _('Source'); ?></p></a></li>
          </ul>
        </div>
  </div>
<div class="row">
  <!-- categories sidebar left -->
  <div class="span1"></div>
  <div class="span10">
      
      <div class="content">
        <h1><?php echo $post->title; ?></h1>
        <?php echo $post->content; ?>
      </div>

  </div><!-- span10-->
  <div class="span1"></div>
</div><!-- end row -->
<!-- back/next -->
<div class="row">
  <div class="span1"></div>
  <div class="span10">
        <ul class="pager">
        <li class="previous"><?php echo Phalcon\Tag::linkTo(array('index', '&larr; Back')); ?> </li>
        <li class="next"><?php echo Phalcon\Tag::linkTo(array('index', 'Newer &rarr;')); ?> </li>

        </ul>
  </div>
  <div class="span1"></div>
</div>
<!-- comement -->
<div class="row">
  <div class="span1"></div>
  <div class="span10">
     <div id="disqus_thread"></div>
      <script type="text/javascript">
          /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
          var disqus_shortname = 'duythien'; // required: replace example with your forum shortname

          /* * * DON'T EDIT BELOW THIS LINE * * */
          (function() {
              var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
              dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
          })();
      </script>
      <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a> 
  </div>
  </div>
  <div class="span1"></div>
</div>
