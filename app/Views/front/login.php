<div class="container mx-auto text-bg-dark p-4">
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <div class="text-center"> <h1>Iniciar sesion</h1> </div>

<!-- Mensaje de error-->
    <?php if(!empty (session()->getFlashdata('msg'))):?> 
        <div class="alert alert-danger"><?=session()->getFlashdata('msg'); ?></div> 
            <?php endif?>
           
    
    <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
        <div class="mb-3">
        <label for="exampleFormControlInput4" class="form-label">Email</label>
        <input name="email" type="text" class="form-control" id="exampleFormControlInput4" placeholder="Usuario" required>
        </div>

        <div>
        <label for="inputPassword5" class="form-label">Contraseña</label>
        <input name="pass" type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
        </div>

        <div class="d-grid gap-2 d-md-block p-3">
        <button type="submit" class="btn btn-outline-success">Iniciar sesion</button>
        <button type="reset" class="btn btn-outline-danger">Borrar</button>
        </div>
    </form>
    <div class="text-center">¿No tienes cuenta? <a href="registro">Registrate</a></div>

</div>