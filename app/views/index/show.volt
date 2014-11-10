
{{content()}}
<div class="row">
  <!-- categories sidebar left -->
  <div class="span1"></div>
  <div class="span10">
      
      <div class="content">
        <h1>{{post.title}}</h1>
        {{post.content}}
      </div>

  </div><!-- span10-->
  <div class="span1"></div>
</div><!-- end row -->
<!-- back/next -->
<div class="row">
  <div class="span1"></div>
  <div class="span10">
        <ul class="pager">
          {% set back = post.id - 1 %}
          {% set next = post.id + 1 %}  

        <li class="previous">{{ link_to('view/' ~ back ~ '/back', '&larr; Back') }} </li>
        <li class="next">{{ link_to('view/' ~ next ~ '/next', 'Newer &rarr;') }} 
        </li>

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
