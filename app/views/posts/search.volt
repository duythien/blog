{{ content() }}

<ul class="pager">
    <li class="previous pull-left">
        {{ link_to("posts/index", "&larr; Go Back") }}
    </li>
    <li class="pull-right">
        {{ link_to("posts/create", "Create Posts", "class": "btn btn-primary") }}
    </li>
</ul>

{% for post in page.items %}
{% if loop.first %}
<table class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Categories</th>
            <th>Tag</th>
            <th>Date</th>
            <th>Confirmed?</th>
        </tr>
    </thead>
{% endif %}
    <tbody>
        <tr>
            <td>{{ post.id }}</td>
            <td>{{ post.title }}</td>
            <td>{{ post.userPost }}</td>
            <td>{{ post.category.name }}</td>
            <td>{{ post.tags }}</td>
            <td>{{ post.created}}</td>
            <td width="12%">{{ link_to("posts/edit/" ~ post.id, '<i class="fa fa-pencil-square-o"></i> Edit', "class": "btn") }}</td>
            <td width="12%">{{ link_to("posts/delete/" ~ post.id, '<i class="fa fa-times"></i> Delete', "class": "btn") }}</td>
        </tr>
    </tbody>
{% if loop.last %}
    <tbody>
        <tr>
            <td colspan="10" align="right">
                <div class="btn-group">
                    {{ link_to("users/search", '<i class="fa fa-backward"></i> First', "class": "btn") }}
                    {{ link_to("users/search?page=" ~ page.before, '<i class=" fa fa-step-backward"></i> Previous', "class": "btn ") }}
                    {{ link_to("users/search?page=" ~ page.next, '<i class="fa fa-step-forward"></i> Next', "class": "btn") }}
                    {{ link_to("users/search?page=" ~ page.last, '<i class="fa fa-fast-forward"></i> Last', "class": "btn") }}
                    <span class="help-inline">{{ page.current }}/{{ page.total_pages }}</span>
                </div>
            </td>
        </tr>
    <tbody>
</table>
{% endif %}
{% else %}
    No users are recorded
{% endfor %}
