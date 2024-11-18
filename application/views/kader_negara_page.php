<?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>
<!-- Row -->
<div class="row">
	<!-- Datatables -->
	<div class="col-lg-12">
		<div class="card mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">KADER NEGARA</h6>
				<a href="<?php echo site_url('kader_negara'); ?>" class="btn btn-info">
					<span class="icon text-white-1000">
						<i class="fa fa-plus"></i>
					</span>
					<span class="text">TAMBAH DATA</span>
				</a>
			</div>
			<div class="table-responsive p-3">
				<table class="table align-items-center table-flush" id="kader_negara">
					<thead class="thead-light">
						<tr>
							<th>NBP</th>
							<th>NAMA</th>
							<th>KAMPUS</th>
							<th>KELAMIN</th>
							<th>ALAMAT</th>
							<th>STATUS</th>
							<th>EMAIL</th>
							<th>SETTING</th>

						</tr>
					</thead>
					<tbody>
						<?php for ($i = 0; $i < sizeof($kader_negara_data); $i++) {
							//echo '<input type="hidden" name="uid" value="' . $user->id . '">';
							echo '<tr>';
							echo '<td>' . $detailbarang_data[$controller->getDetailBarangIndex($detailbarang_data, $incoming_data[$i]->id_barang)]->kode_barang . '</td>';
							echo '<td>' . $detailbarang_data[$controller->getDetailBarangIndex($detailbarang_data, $incoming_data[$i]->id_barang)]->nama_barang . '</td>';
							echo '<td>' . $kader_negara[$i]->lot . '</td>';
							echo '<td>' . $kader_negara[$i]->tanggal . '</td>';
							echo '<td>' . $kader_negara[$i]->qty . '</td>';
							echo '<td>' . $kader_negara[$i]->status . '</td>';
							echo '<td><a href="' . site_url('/incomingitem/edit/') . $incoming_data[$i]->id . '" class="btn btn-info btn-sm">
							<i class="fa fa-edit"></i> </a></td>';
							echo '</tr>';
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--Row-->

<!-- Page level custom scripts -->