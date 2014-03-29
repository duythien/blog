
<?php echo $this->getContent(); ?>

<form method="post">

<h2>Manage Permissions</h2>

<div class="well" align="center">

	<table class="perms">
		<tr>
			<td><label for="profileId">Profile</label></td>
			<td><?php echo $this->tag->select(array('profileId', $profiles, 'using' => array('id', 'name'), 'useEmpty' => true, 'emptyText' => '...', 'emptyValue' => '')); ?></td>
			<td><?php echo $this->tag->submitButton(array('Search', 'class' => 'btn btn-primary')); ?></td>
		</tr>
	</table>

</div>

<?php if ($this->request->isPost() && $profile) { ?>

<?php foreach ($this->acl->getResources() as $resource => $actions) { ?>

	<h3><?php echo $resource; ?></h3>

	<table class="table table-bordered table-striped" align="center">
		<thead>
			<tr>
				<th width="5%"></th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($actions as $action) { ?>
			<tr>
				<td align="center"><input type="checkbox" name="permissions[]" value="<?php echo $resource . '.' . $action; ?>"  <?php if (isset($permissions[$resource . '.' . $action])) { ?> checked="checked" <?php } ?>></td>
				<td><?php echo $this->acl->getActionDescription($action) . ' ' . $resource; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

<?php } ?>

<?php } ?>

</form>