<?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<a href="<?php echo site_url('user'); ?>" class="btn btn-info">
    <span class="icon text-white-1000">
        <i class="fa fa-arrow-left"></i>
    </span>
    <span class="text">Back</span>
</a>

<div class="row justify-content-center align-items-center">
    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">EDIT USER <?php echo $user->Nama;?></h6>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="uID" value="<?php echo $user->ID; ?>">

                <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="Username" value="<?php echo $user->Username; ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="Password" value="<?php echo $user->Password; ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="Nama" value="<?php echo $user->Nama; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="TanggalLahir" value="<?php echo $user->TanggalLahir; ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" name="Jeniskelamin" value="<?php echo $user->JenisKelamin; ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select ID="optAkses" onchange="getAkses()" class="form-control">
                            <option value="member">Please Choose Option</option>
                            <option value="member">Member</option>
                            <option value="admin">Admin</option>
                        </select><br><br>
                        <input ID="AksesVal" type="hidden" class="form-control" name="status" value="<?php echo $user->Akses; ?>" required>
                        <script>
                            function getAkses() {
                                document.getElementByID("AksesVal").value = document.getElementByID("optAkses").value;
                            }
                        </script>
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>