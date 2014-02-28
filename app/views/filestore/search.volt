{{ content() }}

<ul class="pager">
    <li class="previous pull-left">
        {{ link_to("filestore/index", "&larr; Go Back") }}
    </li>
    <li class="pull-right">
        {{ link_to("filestore/create", "<i class='fa fa-plus-circle'></i>" ~ t('Upload Document'), "class": "btn btn-primary") }}
    </li>
</ul>
{% for fileStore in page.items %}
{% if loop.first %}
<table class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Caption</th>
            <th>Author</th>
            <th>Categories</th>
            <th>Date</th>
            <th>Confirmed?</th>
        </tr>
    </thead>
{% endif %}
    <tbody>
        <tr>
            <td>{{ fileStore.id }}</td>
            <td>{{ fileStore.fileCaption }}</td>
            <td>{{ fileStore.userUpload.username }}</td>
            <td>{{ fileStore.categoryUpload.name }}</td>
            <td>{{ date('M d/Y H:i',fileStore.created)}}</td>
            <td width="12%">{{ link_to("filestore/edit/" ~ fileStore.id, '<i class="fa fa-pencil-square-o"></i> Edit', "class": "btn") }}</td>
            <td width="12%">{{ link_to("filestore/delete/" ~ fileStore.id, '<i class="fa fa-times"></i> Delete', "class": "btn") }}</td>
        </tr>
    </tbody>
{% if loop.last %}
    <tbody>
        <tr>
            <td colspan="10" align="right">
                <div class="btn-group">
                    {{ link_to("filestore/search", '<i class="fa fa-backward"></i> First', "class": "btn") }}
                    {{ link_to("filestore/search?page=" ~ page.before, '<i class=" fa fa-step-backward"></i> Previous', "class": "btn ") }}
                    {{ link_to("filestore/search?page=" ~ page.next, '<i class="fa fa-step-forward"></i> Next', "class": "btn") }}
                    {{ link_to("filestore/search?page=" ~ page.last, '<i class="fa fa-fast-forward"></i> Last', "class": "btn") }}
                    <span class="help-inline">{{ page.current }}/{{ page.total_pages }}</span>
                </div>
            </td>
        </tr>
    <tbody>
</table>
{% endif %}
{% else %}
    No filestore are recorded
{% endfor %}
