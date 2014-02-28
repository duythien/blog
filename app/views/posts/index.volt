{{ content() }}

<div align="right">
    {{ link_to("posts/create", "<i class='fa fa-plus-circle'></i>" ~ t('Create Post'), "class": "btn btn-primary") }}
</div>
<div class="center">
<form method="post" action="{{ url("posts/search") }}" autocomplete="off">

    <div class="center scaffold">

        <h2>{{t('Search Posts')}}</h2>

        <div class="clearfix">
            <label for="id">Id</label>
            {{ form.render("id") }}
        </div>

        <div class="clearfix">
            <label for="username">{{t('Title')}}</label>
            {{ form.render("title") }}
        </div>

        <div class="clearfix">
            <label for="categoriesId">{{t('Categories')}}</label>
            {{ form.render("categoriesId") }}
        </div>

        <div class="clearfix">
            {{ submit_button("Search", "class": "btn btn-primary") }}
        </div>

    </div>

</form>
</div>