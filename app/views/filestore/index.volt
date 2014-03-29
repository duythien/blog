{{ content() }}

<div align="right">
    {{ link_to("filestore/create", "<i class='fa fa-plus-circle'></i>" ~ t('Upload Document'), "class": "btn btn-primary") }}
</div>
<div class="center">
<form method="post" action="{{ url("filestore/search") }}" autocomplete="off">

    <div class="center scaffold">

        <h2>{{t('Search Document')}}</h2>

        <div class="clearfix">
            <label for="id">Id</label>
            {{ form.render("id") }}
        </div>

        <div class="clearfix">
            {{ form.label("fileCaption") }}
            {{ form.render("fileCaption") }}
        </div>

        <div class="clearfix">
            {{form.label('categoriesId')}}
            {{ form.render("categoriesId") }}
        </div>

        <div class="clearfix">
            {{ submit_button("Search", "class": "btn btn-primary") }}
        </div>

    </div>

</form>
</div>