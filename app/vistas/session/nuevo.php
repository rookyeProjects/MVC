<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div id="div_centrado"  class="col-md-6">
    <div class="alert alert-info" role="alert">
        Llene sus datos aquí.
    </div>
    <form method="POST" action="Session/altaUsuario">
        <div class="form-row">
            <div class="col-md-12">
                <label for="validationServer01">Usuario</label>
                <input type="text" class="form-control is-valid" id="validationServer01" name ="usuario_nuevo" placeholder="Usuario" >
                <div class="invalid-feedback">
                    Llene el campo por favor.
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationServer01">Nombre(s)</label>
                <input type="text" class="form-control is-valid" id="validationServer01" name ="nombre_nuevo" placeholder="nombres" required>
                <div class="invalid-feedback">
                    Llene el campo por favor.
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationServer01">Apellidos</label>
                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="apellidos" >
                <div class="invalid-feedback">
                    Llene el campo por favor.
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationServer01">Correo electronico</label>
                <input type="email" class="form-control is-valid" id="validationServer01" placeholder="email" >
                <div class="invalid-feedback">
                    Llene el campo por favor.
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationServer01">Contraseña</label>
                <input type="email" class="form-control is-valid" id="validationServer01" placeholder="Contraseña" >
                <div class="invalid-feedback">
                    Llene el campo por favor.
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationServer01">Repita la contraseña</label>
                <input type="email" class="form-control is-valid" id="validationServer01" placeholder="Contraseña nuevamente" >
                <div class="invalid-feedback">
                    Llene el campo por favor.
                </div>
            </div>
            <div class="col-md-12"><br>
                <label for="validationServer01"></label>
                <button type="submit" class="btn btn-success">Success</button>
            </div>
        </div>
        <br><br>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>