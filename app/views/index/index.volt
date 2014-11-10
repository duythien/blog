{{ content() }}
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            {% for post in page.items %}
            <div class="post-preview">
              <h2>{{ link_to('view/' ~ post.id ~ '/' ~ post.slug, post.title|e) }}</h2>
              <span class="date">{{ date('M d/Y H:i',post.created) }}</span>
                <span> {{('By')}} <a href="">{{post.userPost.username}}</a>, {{t('Views')}}: {{post.numberViews}}
              </span>
              <div class="substr-posts">
              <?php echo substr($post->content,0, 360);?>
              </div>
            </div>
            <hr>
          {% endfor %}
            <!-- Pager -->
            <ul class="pager">
                  <li>{{ link_to("index?page=" ~ page.before, '&larr; Older') }}</li>
                  <li>{{ link_to("index?page=" ~ page.next, 'Newer &rarr;') }}</li>
            </ul>
        </div>
    </div>
</div>
<hr>
