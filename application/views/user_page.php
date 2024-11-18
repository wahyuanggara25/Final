<!-- Row -->
<?php if ($this->session->flashdata('success')) : ?>
	<div class="alert alert-success" role="alert">
		<?php echo $this->session->flashdata('success'); ?>
	</div>
<?php endif; ?>
<div class="row">
	<!-- Datatables -->
	<div class="col-lg-12">
		<div class="card mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">User List</h6>
				<?php if ($controller->isAdmin()) { ?>
					<a href="<?php echo site_url('user/adduser'); ?>" class="btn btn-info">
						<span class="icon text-white-1000">
							<i class="fa fa-plus"></i>
						</span>
						<span class="text">ADD USER</span>
					</a>
				<?php } ?>
			</div>
			<div class="table-responsive p-3">
				<table class="table align-items-center table-flush" id="dataTable">
					<thead class="thead-light">
						<tr>
							<th>ID</th>
							<th>USERNAME</th>
							<th>NAME</th>
							<th>JENIS KELAMIN</th>
							<th>STATUS</th>
							<th>SETTING</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>USERNAME</th>
							<th>NAME</th>
							<th>JENIS KELAMIN</th>
							<th>STATUS</th>
							<th>SETTING</th>
						</tr>
					</tfoot>
					<tbody>
						<?php foreach ($user_data as $user) { ?>
							<input type="hidden" name="uID" value="<?php echo $user->ID; ?>">
							<tr>
								<td><?php echo $user->ID; ?></td>
								<td><?php echo $user->Username; ?></td>
								<td><?php echo $user->Nama; ?></td>
								<td><?php echo $user->JenisKelamin; ?></td>
								<td><?php echo $user->Akses; ?></td>
								<td>
									<?php if ($controller->isAdmin()) { ?>
										<a href="<?php echo site_url('user/edit/' . $user->ID) ?>" class="btn btn-info btn-sm">
											<i class="fa fa-edit"></i> </a>
										<button type="button" data-toggle="modal" data-target="#delUser<?php echo $user->ID; ?>" class="btn btn-danger btn-sm">
											<i class="fa fa-trash"></i>
										</button>
									<?php } else {
										echo '<span class="badge badge-danger">Admin Level Required!</span>';
									} ?>
								</td>
							</tr>
						<?php } ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--Row-->

<?php foreach ($user_data as $user) { ?>
	<div class="modal fade" ID="delUser<?php echo $user->ID; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" ID="exampleModalLabel">Delete Confirmation</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Are you sure deleting <?php echo $user->Nama; ?> ?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<a href="<?php echo site_url('user/delete/' . $user->ID) ?>" class="btn btn-danger">
						Delete </a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>