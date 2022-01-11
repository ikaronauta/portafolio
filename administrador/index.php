<?php include '../administrador/template/header.php'; ?>

<div class="principal">
    <div class="login">
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Correo Electronico</label><br>
                <input type="email" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label><br>
                <input type="password" name="password" id="password">            
            </div>

            <div class="form-group">
                <input type="submit" value="Ingresar">
            </div>
        </form>
    </div>
</div>

<?php include '../administrador/template/footer.php'; ?>