<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Inicia Sesión en DevWebCamp</p>

    <?php  
            require_once __DIR__ . "/../templates/alertas.php"; 
    ?>

    <form method="POST" action="/login" class="formulario">
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

        <div class="formulario__campo">
        <label for="password" class="formulario__label">Password</label>
        <input 
            type="password"
            class="formulario__input"
            placeholder="Tu Password"
            id="password"
            name="password"
        >
    </div>
    <input type="submit" value="Iniciar Sesión" class="formulario__submit">
    </form>

    <div class="acciones">
        <a class="acciones__enlace" href="/registro">¿Aún no tienes cuenta? Obtener una</a>
        <a class="acciones__enlace" href="/olvide">¿Olvidaste tu password?</a>
    </div>

</main>