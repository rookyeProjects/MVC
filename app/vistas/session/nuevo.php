<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div id="div_centrado"  class="col-md-6">
    <div class="alert alert-info" role="alert">
        Llene sus datos aquí.
    </div>
    <form method="POST" action="Session/altaUsuario">
        <div class="form-row">
            <div class="col-md-12">
                <label for="validationServer01">Usuario</label>
                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Usuario" required>
                <div class="invalid-feedback">
                    Llene el campo por favor.
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationServer01">Nombre(s)</label>
                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="nombres" required>
                <div class="invalid-feedback">
                    Llene el campo por favor.
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationServer01">Apellidos</label>
                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="apellidos" required>
                <div class="invalid-feedback">
                    Llene el campo por favor.
                </div>
            </div>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>