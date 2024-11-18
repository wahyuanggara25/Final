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
                <h6 class="m-0 font-weight-bold text-primary">ADD NEW USER</h6>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="Username" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="Password" required>
                    </div>
                    <div class="form-group">
                        <label>TanggalLahir</label>
                        <input type="Date" class="form-control" name="TanggalLahir" required>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="Nama" required>
                    </div>
                    <div class="form-group">
                        <label>JenisKelamin</label>
                        <input type="text" class="form-control" name="JenisKelamin" required>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select id="optAkses" onchange="getAkses()" class="form-control">
                            <option value="member">Please Choose Option</option>
                            <option value="admin">Admin</option>
                            <option value="member">Member</option>
                        </select><br><br>
                        <input id="AksesVal" type="hidden" class="form-control" name="Akses" required>
                        <script>
                            function getAkses() {
                                document.getElementById("AksesVal").value = document.getElementById("optAkses").value;
                            }
                        </script>
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>   
                </form>
            </div>
        </div>
    </div>
</div>