{{ content() }}

<div align="right">
    {{ link_to("categories/create", "<i class='fa fa-plus-circle'></i> Create categories", "class": "btn btn-primary") }}
</div>
<div class="center">
<form method="post" action="{{ url("categories/search") }}" autocomplete="off">

    <div class="center scaffold">

        <h2>Search Categories</h2>

        <div class="clearfix">
            <label for="id">Id</label>
            {{ form.render("id") }}
        </div>

        <div class="clearfix">
            <label for="name">Name</label>
            {{ form.render("name") }}
        </div>

        

        <div class="clearfix">
            {{ submit_button("Search", "class": "btn btn-primary") }}
        </div>

    </div>

</form>
</div>