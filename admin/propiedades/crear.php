<?php
    // Base de datos

    require '../../includes/config/database.php';

    $db = conectarDB();

    // Consulta para obtener los vendedores  NOTES
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);


    // Array con mensajes de errores
    $errores = [];

    $titulo = "";
    $precio = "";
    $descripcion = "";
    $habitaciones = "";
    $wc = "";
    $estacionamiento = "";
    $vendedorId = "";

    //Ejecutar el código despues de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $resultado = filter_var($numero)

        exit;


        $titulo = mysqli_real_escape_string($db, $_POST["titulo"]);
        $precio = mysqli_real_escape_string($db, $_POST["precio"]);
        $descripcion = mysqli_real_escape_string($db, $_POST["descripcion"]);
        $habitaciones = mysqli_real_escape_string($db, $_POST["habitaciones"]);
        $wc = mysqli_real_escape_string($db, $_POST["wc"]);
        $estacionamiento = mysqli_real_escape_string($db, $_POST["estacionamiento"]);
        $vendedorId = mysqli_real_escape_string($db, $_POST["vendedor"]);
        $creado = date('Y/m/d');     // NOTES

        if(!$titulo) {
            $errores[] = "Debes añadir un titulo";
        }
        if(!$precio || $precio <= 0) {
            $errores[] = "Debes añadir un precio valido";
        }
        if(strlen($descripcion) < 50) {
            $errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
        }
        if(!$habitaciones) {
            $errores[] = "Debes añadir el numero de habitaciones";
        }
        if(!$wc) {
            $errores[] = "Debes añadir el numero de baños";
        }
        if(!$estacionamiento) {
            $errores[] = "Debes añadir el numero de estacionamientos";
        }
        if(!$vendedorId) {
            $errores[] = "Debes añadir un vendedor";
        }

        // Revisar que el arreglo de errores este vacio
        if(empty($errores)) {
            //Insertar en la base de datos
            $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId) 
                    VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";

            // echo $query | Inserción final en la DB
            $resultado = mysqli_query($db, $query);

            if($resultado) {
                // Redireccionar al usuario        NOTES
                header("Location: /admin");
            }
        }
    }



?>


<?php
    // Header
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error) { ?>
            <div class="alerta error"> <?php echo $error ?> </div>
        <?php } ?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

                <label for="precio">Precio:</label>
                <input type="number" id=precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id=imagen" accept="'image/jpeg, image/png">
                
                <label for="descripcion">Descripcion:</label>
                <textarea id="descripcion" name="descripcion"> <?php echo $descripcion; ?> </textarea>
            </fieldset>

            <fieldset>
                <legend>Información de la propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

                <label for="estacionamiento">Estacionamientos:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor">
                    <option value="">-- Seleccione --</option> <!-- NOTES -->
                    <?php while($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                        <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"> 
                            <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php incluirTemplate('footer'); ?>