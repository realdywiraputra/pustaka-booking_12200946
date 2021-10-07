<?= $this->extend('dasar_tampilan'); ?>
<?= $this->section('konten') ?>
<form method="POST" action="<?= base_url('/Login') ?>">
    <div class="container col-md-3">
        <div class="card mt-5">
            <div class="card-header">
                <h3 class="card-title">Login</h3>
            </div>
            <div class="card-body">
                <div class="form-floating">
                    <input id="txtEmail" class="form-control" placeholder="Email" type="text" name="Email" />
                    <label for="txtEmail">Email</label>
                </div>
                <div class="form-floating">
                    <input id="txtPass" class="form-control" placeholder="Password" type="password" name="sandi" />
                    <label for='txtPass'>Kata Sandi</label>
                </div>

                <button class="btn btn-primary mt-2">Login</button>
            </div>
</form>

<?= $this->endSection() ?>