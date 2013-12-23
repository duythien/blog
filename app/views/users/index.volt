{{ content() }}

<div align="right">
    {{ link_to("users/create", "<i class='fa fa-plus-circle'></i> Create Users", "class": "btn btn-primary") }}
</div>

<form method="post" action="{{ url("users/search") }}" autocomplete="off">

    <div class="center scaffold">

        <h2>Search users</h2>

        <div class="clearfix">
            <label for="id">Id</label>
            {{ form.render("id") }}
        </div>

        <div class="clearfix">
            <label for="username">Uername</label>
            {{ form.render("username") }}
        </div>

        <div class="clearfix">
            <label for="email">E-Mail</label>
            {{ form.render("email") }}
        </div>

        <div class="clearfix">
            <label for="profilesId">Profile</label>
            {{ form.render("profilesId") }}
        </div>

        <div class="clearfix">
            {{ submit_button("Search", "class": "btn btn-primary") }}
        </div>

    </div>

</form>
