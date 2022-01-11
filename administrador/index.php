<?php include '../administrador/template/header.php'; ?>

<div class="principal">
    <div class="login">
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Correo Electronico</label><br>
                <input type="email" name="email" id="email" autofocus required placeholder="ejemplo@usuario.com">
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label><br>
                <input type="password" name="password" id="password" required placeholder="password">            
            </div>

            <input type="submit" value="Ingresar" class="btn-ingresar">
        </form>
    </div>
</div>

<?php include '../administrador/template/footer.php'; ?>