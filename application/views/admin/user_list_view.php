<!-- table -->
<div class="widget-content">
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
		<?php foreach($users as $row): ?>
        <tr>
            <td><?php echo $row->user_full_name; ?></td>
            <td><?php echo $row->user_name; ?></td>
            <td><?php echo $row->user_role; ?></td>
            <td><i class="icon-edit"></i>&nbsp;&nbsp;&nbsp;<i class="icon-eye-open"></i>&nbsp;&nbsp;&nbsp;<i class="icon-trash"></i></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<!-- /table --> 
