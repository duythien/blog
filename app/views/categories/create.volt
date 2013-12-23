
{{form()}}
<ul class="pager">
    <li class="previous pull-left">
        {{ link_to("name", "&larr; Go Back") }}
    </li>
    <li class="pull-right">
        {{ submit_button("Save", "class": "btn btn-success") }}
    </li>
</ul>

{{ content() }}

<div class="center scaffold">
    <h2>Create a Categories</h2>

    <div class="clearfix">
        <label for="name">Name</label>
        {{ form.render("name") }}
        {{ form.messages("name") }}
    </div>

    <div class="clearfix">
        <label for="email">Slug</label>
        {{ form.render("slug") }}
        {{ form.messages("slug") }}
    </div>

   

</div>

</form>