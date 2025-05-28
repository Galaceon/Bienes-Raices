<?php
    declare(strict_types= 1);

    // Validar la URL por ID válido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
        header('Location: /admin');
    }
    
    // Importar la conexión
    require "../includes/config/database.php";
    $db = conectarDB();

    // Escribir el query
    $query = "SELECT * FROM propiedades";

    // Consultar la db
    $resultadoConsulta = mysqli_query($db, $query);


    // Muestra mensaje condicional gracias a la URL creada en crear.php
    $resultado = $_GET['resultado'] ?? null; // NOTAS


    // Incluir template
    require '../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>
        <?php if(intval($resultado) === 1) : ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php endif; ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

        <table class="propiedades"> <!--NOTAS-->
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>  <!-- Mostrar los resultados -->
                <?php while($propiedad = mysqli_fetch_assoc($resultadoConsulta)) : ?>
                <tr>
                    <td> <?php echo $propiedad['id']; ?> </td> <!-- NOTAS -->
                    <td> <?php echo $propiedad['titulo']; ?> </td>
                    <td> <img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla"> </td>
                    <td> $ <?php echo $propiedad['precio']; ?> </td>
                    <td>
                        <a href="#" class="boton-rojo-block">Eliminar</a>
                        <a href="admin/propiedades/actualizar.php?id<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php 

    // Cerrar la conexión (opcional, php detecta que no se hace nada y lo cierra, pero ayudarlo a cerrar es mejor)
    mysqli_close($db); // NOTAS

    incluirTemplate('footer'); 

?>