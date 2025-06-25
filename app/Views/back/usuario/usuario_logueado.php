<div class="container mt-5">
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <div class="row justify-content-md-center">
        <div class="col-5">
            <?php if(session()->getFlashdata('msg')): ?>
                <div class="alert alert-danger">
                    <?=session()->getFlashdata('msg')?>
                </div>
                <?php endif; ?>
                <br><br>
                <?php if(session()->get('perfil_id') == 1): ?>
                    <div>
                        <h1 class="text-center">Bienvenido Administrador</h1>
                        <img class= "center" height="100px" width="100px" src="<?= base_url('assets/img/admin.png') ?>">
                    </div>
                    <?php elseif(session()->get('perfil_id' == 2)): ?>
                    <div>
                        <h1 class="text-center">Bienvenido Cliente</h1>
                        <img class= "center" height="100px" width="100px" src="<?= base_url('assets/img/cliente.png') ?>">
                    </div>
                    <?php endif; ?>

        </div>
    </div>
</div>