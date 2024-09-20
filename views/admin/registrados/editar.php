<h2 class="dashboard__encabezado"><?php echo $titulo; ?></h1>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/registrados">
        <i class="fa-solid fa-circle-arrow-left"></i>
        Volver
    </a>
</div>

<div class="dashboard__formulario">
    <?php
        include_once __DIR__ .'/../../templates/alertas.php';
    ?>

    <form method="POST" enctype="multipart/form-data" class="formulario"">
        <?php include_once __DIR__ . '/formulario.php'; ?>

        <input class="formulario__submit formulario__submit--registrar" type="submit" value="Guardar cambios">
    </form>
</div>