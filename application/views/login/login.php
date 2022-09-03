<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <div class="card card-body shadow">
            <h3 class="text-center">Login</h3>

            <?php echo $this->session->tempdata('pesan') ?>

            <form action="<?php echo base_url('login/login') ?>" method="POST">
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input name="username" type="text" class="form-control" id="username" required>

                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password" required>
                </div>

                <button type="submit" class="btn btn-danger col-md-12 mb-3">Login</button>

            </form>

        </div>
    </div>
</div>