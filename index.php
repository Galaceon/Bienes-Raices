<?php 
    declare(strict_types= 1);

    require 'includes/funciones.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="build/css/app.css">
        <title>Bienes Raices</title>
    </head>
    <body>

        <header class="header">
            <div class="header-image">
                <img src="build/img/header.webp" alt="">
                <div class="contenedor contenido-header">
                    <div class="barra">
                        <a href="index.php">
                            <img src="build/img/logo.svg" alt="Logotipo de Bienes Raices">
                        </a>

                        <div class="mobile-menu">
                            <img src="build/img/barras.svg" alt="icono menu responsive">
                        </div>

                        <div class="derecha">
                            <img class="dark-mode-boton" src="build/img/dark-mode.svg">
                            <nav class="navegacion">
                                <a href="nosotros.php">Nosotros</a>
                                <a href="anuncios.php">Anuncios</a>
                                <a href="blog.php">Blog</a>
                                <a href="contacto.php">Contacto</a>
                                </nav>
                        </div>
                    </div> <!--.barra -->

                    <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
                </div>
            </div>
        </header>
        

        <main class="contenedor seccion">
            <h1>Más Sobre Nosotros</h1>

            <div class="iconos-nosotros">
                <div class="icono">
                    <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                    <h3>Seguridad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem explicabo delectus rerum,
                        blanditiis eos laborum recusandae nisi ullam expedita impedit nesciunt quibusdam ea possimus
                        eum sint non, ab atque eligendi.
                    </p>
                </div>
                <div class="icono">
                    <img src="build/img/icono2.svg" alt="Icono Seguridad" loading="lazy">
                    <h3>Precio</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem explicabo delectus rerum,
                        blanditiis eos laborum recusandae nisi ullam expedita impedit nesciunt quibusdam ea possimus
                        eum sint non, ab atque eligendi.
                    </p>
                </div>
                <div class="icono">
                    <img src="build/img/icono3.svg" alt="Icono Seguridad" loading="lazy">
                    <h3>Tiempo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem explicabo delectus rerum,
                        blanditiis eos laborum recusandae nisi ullam expedita impedit nesciunt quibusdam ea possimus
                        eum sint non, ab atque eligendi.
                    </p>
                    </div>
            </div>
        </main>

        <section class="anuncios contenedor">
            <h2>Casas y Departamentos en Venta</h2>

            <div class="contenedor-anuncios">
                <div class="anuncio"> 
                    <img loading="lazy" src="build/img/anuncio1.webp">
    
                    <div class="contenido-anuncio">
                        <h3>Casa de Lujo en el Lago</h3>
                        <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
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

                        <a href="anuncios.php" class="boton-amarillo-block">
                            Ver Propiedad
                        </a>
                    </div>
                </div>

                <div class="anuncio">
                    <img src="build/img/anuncio2.webp">
                
                    <div class="contenido-anuncio">
                        <h3>Casa Terminados de Lujo</h3>
                        <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
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

                        <a href="anuncios.php" class="boton-amarillo-block">
                            Ver Propiedad
                        </a>
                    </div>
                </div>

                <div class="anuncio">
                    <img loading="lazy" src="build/img/anuncio3.webp">
                
                    <div class="contenido-anuncio">
                        <h3>Casa con alberca</h3>
                        <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
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

                        <a href="anuncios.php" class="boton-amarillo-block">
                            Ver Propiedad
                        </a>
                    </div> <!-- contenido anuncio -->
                </div> <!-- anuncio -->
            </div> <!-- contenedor anuncios -->

            <div class="alinear-derecha">
                <a href="anuncios.php" class="boton-verde">Ver Todas</a>
            </div>
        </section>

        <section class="imagen-contacto">
            <h2>Encuentra la casa de tus sueños</h2>
            <p>LLena el formulario de contacto y un asesor se pondrá en contacto contigo a la breveda</p>
            <a href="contacto.php" class="boton-amarillo">Contactanos</a>
        </section>

        <div class="contenedor secction seccion-inferior">
            <section class="blog">
                <h3>Nuestro Blog</h3>

                <article class="entrada-blog">
                    <div class="imagen">
                        <img loading="lazy" src="build/img/blog1.webp" alt="blog image">
                    </div>

                    <div class="texto-entrada">
                        <a href="entrada.php">
                            <h4>Terraza en el techo de tu casa</h4>
                            <p>Escritorio el: <span> 20/10/2025 </span> por: <span>Admin</span> </p>

                            <p>
                                Consejos para construir una terraza en el techo de tu casa con los mejores
                                materiales y ahorrando dinero
                            </p>
                        </a>
                    </div>
                </article>

                <article class="entrada-blog">
                    <div class="imagen">
                        <img loading="lazy" src="build/img/blog2.webp" alt="blog image">
                    </div>
                
                    <div class="texto-entrada">
                        <a href="entrada.php">
                            <h4>Guía para la decoración de tu hogar</h4>
                            <p>Escritorio el: <span> 20/10/2025 </span> por: <span>Admin</span> </p>
                
                            <p>
                                Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores 
                                para darle vida a tu espacio
                            </p>
                        </a>
                    </div>
                </article>
            </section>

            <section class="testimoniales">
                <h3>Testimoniales</h3>

                <div class="testimonial">
                    <blockquote>
                        El personal se comportó de una excelente forma, muy buena atención y la casa que me
                        ofrecieron cumple con todas mis expectativas.
                    </blockquote>
                    <p>- Antonio Jesus Garcia</p>
                </div>
            </section>
        </div>

<?php incluirTemplate('footer'); ?>
