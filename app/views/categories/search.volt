{{ content() }}

<ul class="pager">
    <li class="previous pull-left">
        {{ link_to("categories/index", "&larr; Go Back") }}
    </li>
    <li class="pull-right">
        {{ link_to("categories/create", "Create categories", "class": "btn btn-primary") }}
    </li>
</ul>

{% for categori in page.items %}
{% if loop.first %}
<table class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Slug</th>
            <th> numberPost </th>
            <th>Confirmed?</th>
        </tr>
    </thead>
{% endif %}
    <tbody>
        <tr>
            <td>{{ categori.id }}</td>
            <td>{{ categori.name }}</td>
            <td>{{ categori.slug }}</td>
            <td>{{ categori.numberPosts}}</td>
            <td width="12%">{{ link_to("categories/edit/" ~ categori.id, '<i class="fa fa-pencil-square-o"></i> Edit', "class": "btn") }}</td>
            <td width="12%">{{ link_to("categories/delete/" ~ categori.id, '<i class="fa fa-times"></i> Delete', "class": "btn") }}</td>
        </tr>
    </tbody>
{% if loop.last %}
    <tbody>
        <tr>
            <td colspan="10" align="right">
                <div class="btn-group">
                    {{ link_to("categories/search", '<i class="fa fa-backward"></i> First', "class": "btn") }}
                    {{ link_to("categories/search?page=" ~ page.before, '<i class=" fa fa-step-backward"></i> Previous', "class": "btn ") }}
                    {{ link_to("categories/search?page=" ~ page.next, '<i class="fa fa-step-forward"></i> Next', "class": "btn") }}
                    {{ link_to("categories/search?page=" ~ page.last, '<i class="fa fa-fast-forward"></i> Last', "class": "btn") }}
                    <span class="help-inline">{{ page.current }}/{{ page.total_pages }}</span>
                </div>
            </td>
        </tr>
    <tbody>
</table>
{% endif %}
{% else %}
    No categories are recorded
{% endfor %}
