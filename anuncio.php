<?php
    declare(strict_types= 1);

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en  Venta frente al bosque</h1>

        <img src="build/img/destacada.webp" alt="anuncio image">

        <p class="precio">$3.000.000</p>

        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg">
                <p>3</p>
            </li>
        </ul>

        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit molestias quaerat voluptatibus
            dicta unde, recusandae praesentium, reiciendis dolorum iste voluptates dolore velit in. Ullam
            dicta harum rem. Itaque, dolor perspiciatis. Lorem ipsum dolor sit, amet consectetur adipisicing
            elit. Iusto dignissimos quasi autem impedit eaque deserunt tenetur, voluptatibus id praesentium sit
            nam culpa eveniet, facere architecto non, exercitationem ipsum cum repellendus. Lorem ipsum dolor sit, amet
            consectetur adipisicing elit. Eius nisi enim vitae voluptas quidem. Minima non esse molestias sit delectus nulla,
            repellendus neque eligendi, laborum fugit nisi dolor numquam alias.
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum accusantium sapiente perspiciatis. Deserunt magnam
            inventore quam cupiditate facere, corrupti, praesentium ipsum id repellat porro doloremque totam culpa in corporis
            quas.
        </p>
    </main>

<?php incluirTemplate('footer'); ?>