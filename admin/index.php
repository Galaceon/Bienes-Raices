<?php
    declare(strict_types= 1);
    // Importar la conexión
    require "../includes/config/database.php";
    $db = conectarDB();

    // Escribir el query
    $query = "SELECT * FROM propiedades";

    // Consultar la db
    $resultadoConsulta = mysqli_query($db, $query);


    // Muestra mensaje condicional gracias a la URL creada en crear.php
    $resultado = $_GET['resultado'] ?? null;  // 4 NOTAS aqui es donde se almacenan los resultado=numero


    if($_SERVER['REQUEST_METHOD'] === 'POST') { // 3 NOTAS, Crear confirmacion del metodo POST para que no de error al recargar la página con el $id y el resto de la eliminacion
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id) {
            // Eliminar el archivo
            $query = "SELECT imagen FROM propiedades WHERE id = $id";

            $resultado = mysqli_query($db, $query);
            $propiedad = mysqli_fetch_assoc($resultado);

            unlink('../imagenes/' . $propiedad['imagen']);

            // Eliminar la Propiedad
            $query = "DELETE FROM propiedades WHERE id = $id";
            $resultado = mysqli_query($db, $query);

            if($resultado) {
                header('location: /admin?resultado=3'); // 4 NOTAS url resultado=3             
            }    
        }
    }



    // Incluir template
    require '../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>
        <?php if(intval($resultado) === 1) : ?>
            <p class="alerta exito">Anuncio Creado Correctamente</p>
        <?php elseif(intval($resultado) === 2) : ?>
            <p class="alerta exito">Anuncio Actualizado Correctamente</p> 
        <?php elseif(intval($resultado) === 3) : ?>
            <p class="alerta exito">Anuncio Eliminado Correctamente</p> <!-- 5 NOTAS Añadimos este anuncio eliminado con la url resultado=3-->
        <?php endif; ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

        <table class="propiedades">
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
                    <td> <?php echo $propiedad['id']; ?> </td>
                    <td> <?php echo $propiedad['titulo']; ?> </td>
                    <td> <img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla"> </td>
                    <td> $ <?php echo $propiedad['precio']; ?> </td>
                    <td>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>"> <!-- 2 NOTAS, Crear un input hidden con name=id para referirnos a el posteriormente-->

                            <input type="submit" class="boton-rojo-block" value="Eliminar"> <!-- 1 NOTAS, cambiar <a> por <form> y meter el input dentro -->
                        </form>
                        <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php 
    // Cerrar la conexión (opcional, php detecta que no se hace nada y lo cierra, pero ayudarlo a cerrar es mejor)
    mysqli_close($db);

    incluirTemplate('footer'); 
?>