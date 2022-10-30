<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Recupera tu acceso a DevWebCamp</p>

        <?php  
            require_once __DIR__ . "/../templates/alertas.php"; 
        ?>

    <form method="" action="/olvide" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input 
                type="email"
                class="formulario__input"
                placeholder="Tu Email"
                id="email"
                name="email"
            >
        </div>

    <input type="submit" value="Enviar Instrucciones" class="formulario__submit">
    </form>

    <div class="acciones">
        <a class="acciones__enlace" href="/login">¿Ya tienes una cuenta? Iniciar Sesión</a>
        <a class="acciones__enlace" href="/registro">¿Aún no tienes cuenta? Obtener una</a>

    </div>

</main>