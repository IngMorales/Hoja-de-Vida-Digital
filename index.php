<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        include 'interfaz/head.php';
    ?>
</head>
<body>

    <?php 
        include 'interfaz/loader.php';
        include 'interfaz/header.php';

    ?>


<!--==========================================
                   INFORMACIÓN
===========================================-->
<div id="about" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="about-card" class="card">
                    <div class="card-content">
                        <p>
                            ¡Hola! Soy Aldair Morales Cuéllar. Desarrollador Web Senior en PHP con varios años de experiencia especializado en desarrollo de front-end, también Tecnólogo en Producción de Multimedia en donde he experimentado con todas las etapas del ciclo de desarrollo para proyectos web dinámicos.
                        </p>
                        <p>
                            Poseo conocimientos profundos que incluyen PHP, HTML, CSS, XML, Java, JavaScript, JQuery, gestión de bases de datos en PostgreSQL, MySQL y Oracle Database 11. 
                        </p>
                    </div>
                    <div id="about-btn" class="card-action">
                        <div class="about-btn">
                            <a href="#" class="btn waves-effect">Descargar PDF</a>
                            <a href="#contact" class="btn waves-effect">Contacto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="education" class="section">
    <div class="container">
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon fa fa-graduation-cap"></i>Educación</h4>
        </div>

        <div id="timeline-education">
            <div class="timeline-block">
                <div class="timeline-dot"><h6>P</h6></div>
                <div class="card timeline-content">
                    <div class="card-content">
                        <h6 class="timeline-title"><strong>Primaria</strong></h6>
                        <div class="timeline-info">
                            <h6>
                                <small>I.E. Agroecológico Amazónico C.T.</small>
                            </h6>
                            <h6>
                                <small>Febrero 2003 - Noviembre 2007</small>
                            </h6>
                        </div>
                        <p>
                            Complete mi básica primaria en esta hermosa Institución, en donde culmine con éxito para luego pasar hacer la secundaria en una Institución Diferente. Durante mis estudios primarios obtuve calificaciones generales, obtuve diferentes reconocimientos por buen rendimiento académico. 
                        </p>
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#primaria">
                            <span class="label label-danger" aria-hidden="true">Leer Más</span>
                        </a>
                        <span class="label label-success">Logrado</span>
                    </div>
                </div>
            </div>
            <div class="timeline-block">
                <div class="timeline-dot"><h6>S</h6></div>
                <div class="card timeline-content">
                    <div class="card-content">
                        <h6 class="timeline-title"><strong>Secundaria</strong></h6>
                        <div class="timeline-info">
                            <h6>
                                <small>I.E EL CHAIRÁ JOSÉ MARÍA CÓRDOBA</small>
                            </h6>
                            <h6>
                                <small>Febrero 2008 - Noviembre 2013</small>
                            </h6>
                        </div>
                        <p>
                            Complete mis estudios de Secundaria en una nueva Institución, esto con el fin de poder graduarme con la modalidad comercial, además de ello el énfasis en las matemáticas y física que se hacían en esta Institución Educativa. 
                        </p>
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#secundaria">
                            <span class="label label-danger" aria-hidden="true">Leer Más</span>
                        </a>
                        <span class="label label-success">Logrado</span>
                    </div>
                </div>
            </div>
            <div class="timeline-block">
                <div class="timeline-dot"><h6>U</h6></div>
                <div class="card timeline-content">
                    <div class="card-content">
                        <h6 class="timeline-title">Universidad - <strong>Ingeniería de Sistemas</strong></h6>
                        <div class="timeline-info">
                            <h6>
                                <small>Universidad de la Amazonia</small>
                            </h6>
                            <h6>
                                <small>Febrero 2014 - Actual</small>
                            </h6>
                        </div>
                        <p>
                            Soy Estudiante de Ingeniería de Sistemas en la Universidad de la Amazonia, en donde he adquirido diferentes conocimientos, entre ellos el desarrollo mediante el uso de lenguajes de programación, enfocándolos al desarrollo web. 
                        </p>
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#universidad">
                            <span class="label label-danger" aria-hidden="true">Leer Más</span>
                        </a>
                        <span class="label label-info">En Curso</span>
                    </div>
                </div>
            </div>
            <div class="timeline-block">
                <div class="timeline-dot"><h6>P</h6></div>
                <div class="card timeline-content">
                    <div class="card-content">
                        <h6 class="timeline-title"><strong>Producción de Multimedia</strong></h6>
                        <div class="timeline-info">
                            <h6>
                                <small>Servicio Nacional de Aprendizaje SENA</small>
                            </h6>
                            <h6>
                                <small>Mayo 2017 - Actual</small>
                            </h6>
                        </div>
                        <p>
                            Curso Tecnólogo en Producción de Multimedia del Servicio Nacional de Aprendizaje SENA en su modalidad virtual, en donde se establecen conocimientos sobre herramientas que permiten la creación de contenidos multimediales y todo lo relacionado al diseño gráfico. 
                        </p>
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#sena">
                            <span class="label label-danger" aria-hidden="true">Leer Más</span>
                        </a>
                        <span class="label label-info">En Curso</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="section">
    <div class="container">
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon fa fa-sliders"></i>Habilidades</h4>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="skills-card" class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!-- DESARROLLO WEB -->
                                <div class="skills-title">
                                    <h6 class="text-center">Desarrollo Web</h6>
                                </div>

                                <div class="skillbar" data-percent="90%">
                                    <div class="skillbar-title"><span>HTML</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">90%</div>
                                </div>

                                <div class="skillbar" data-percent="90%">
                                    <div class="skillbar-title"><span>PHP</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">90%</div>
                                </div>

                                <div class="skillbar" data-percent="60%">
                                    <div class="skillbar-title"><span>CSS</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">60%</div>
                                </div>

                                <div class="skillbar" data-percent="90%">
                                    <div class="skillbar-title"><span>MySQL</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">90%</div>
                                </div>

                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>Oracle Database</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>

                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>Java</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>

                                <div class="skillbar" data-percent="60%">
                                    <div class="skillbar-title"><span>JavaScript</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">60%</div>
                                </div>

                                <div class="skillbar" data-percent="75%">
                                    <div class="skillbar-title"><span>PostgreSQL</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">75%</div>
                                </div>
                            </div>


                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!-- PERSONALES -->
                                <div class="skills-title">
                                    <h6 class="text-center">Personales</h6>
                                </div>

                                <div class="skillbar" data-percent="90%">
                                    <div class="skillbar-title"><span>Comunicación</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">90%</div>
                                </div>

                                <div class="skillbar" data-percent="75%">
                                    <div class="skillbar-title"><span>Trabajo en Equipo</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">75%</div>
                                </div>

                                <div class="skillbar" data-percent="80%">
                                    <div class="skillbar-title"><span>Creatividad</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">80%</div>
                                </div>

                                <div class="skillbar" data-percent="85%">
                                    <div class="skillbar-title"><span>Dedicación</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">85%</div>
                                </div>

                                <div class="skillbar" data-percent="95%">
                                    <div class="skillbar-title"><span>Responsabilidad</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">95%</div>
                                </div>

                                <div class="skillbar" data-percent="75%">
                                    <div class="skillbar-title"><span>Liderazgo</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">75%</div>
                                </div>
                            </div>


                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!-- MANEJO DE SOFTWARE -->
                                <div class="skills-title">
                                    <h6 class="text-center">Software</h6>
                                </div>

                                <div class="skillbar" data-percent="80%">
                                    <div class="skillbar-title"><span>Adobe Phosohop</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">80%</div>
                                </div>

                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>Adobe Audition</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>

                                <div class="skillbar" data-percent="90%">
                                    <div class="skillbar-title"><span>Corel Draw Studio</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">90%</div>
                                </div>

                                <div class="skillbar" data-percent="80%">
                                    <div class="skillbar-title"><span>Dev Console</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">80%</div>
                                </div>

                                <div class="skillbar" data-percent="95%">
                                    <div class="skillbar-title"><span>Sublime Text</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">95%</div>
                                </div>

                                <div class="skillbar" data-percent="85%">
                                    <div class="skillbar-title"><span>Adobe Dreamweaver</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">85%</div>
                                </div>

                                <div class="skillbar" data-percent="85%">
                                    <div class="skillbar-title"><span>Microsoft Office</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">85%</div>
                                </div>

                                <div class="skillbar" data-percent="85%">
                                    <div class="skillbar-title"><span>Facebook Negocios</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">85%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="experience" class="section">
    <div class="container">
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon fa fa-suitcase"></i>Experiencia</h4>
        </div>

        <div id="timeline-experience">
            <div class="timeline-block">
                <div class="timeline-dot"><h6>A</h6></div>
                <div class="card timeline-content">
                    <div class="card-content">
                        <h6 class="timeline-title"><strong>Asesorías Académicas Edúcate</strong></h6>
                        <div class="timeline-info">
                            <h6>
                                <small>Desarrollador Web</small>
                            </h6>
                            <h6>
                                <small>2018 - Actualidad</small>
                            </h6>
                        </div>
                        <p>
                            Desarrollo del Sistema de Información de Asesorías Académicas Edúcate, en donde el sistema cumple con las necesidades de gestión para estudiantes, docentes, grupos, materias, entre otros.
                        </p>
                        <a href="https://www.asesoriaseducate.com/" target="_blank">
                            <span class="label label-info">Ir al Sitio</span>
                        </a>
                        <span class="label label-success">Terminado</span>
                    </div>
                </div>
            </div>
            <div class="timeline-block">
                <div class="timeline-dot"><h6>D</h6></div>
                <div class="card timeline-content">
                    <div class="card-content">
                        <h6 class="timeline-title"><strong>Desarrollador Frontend<strong></h6>
                        <div class="timeline-info">
                            <h6>
                                <small>Desarrollo Web</small>
                            </h6>
                            <h6>
                                <small>Abril 2012 - Actualidad</small>
                            </h6>
                        </div>
                        <p>
                            Inicie a desarrollar mi proyectos de front-end desde el manejo de las diferentes tecnologías enfocadas al desarrollo web, llevo varios años aprendiendo y trabajando en estos proyectos.
                        </p>

                    </div>
                </div>
            </div>
            <div class="timeline-block">
                <div class="timeline-dot"><h6>I</h6></div>
                <div class="card timeline-content">
                    <div class="card-content">
                        <h6 class="timeline-title"><strong>Instituto Municipal de Cultura Cartagena</strong></h6>
                        <div class="timeline-info">
                            <h6>
                                <small>Desarrollador Web - Blog</small>
                            </h6>
                            <h6>
                                <small>Marzo 2012 - Actualidad</small>
                            </h6>
                        </div>
                        <p>
                            Desarrolle mediante la tecnología del CMS de Google para sitios web (Blogger) un blog dinámico estructurado para el Instituto Municipal de Cultura, Recreación, Deporte y Turismo del Municipio de Cartagena del Chairá, en donde actualmente actualizo este mismo, dando así un tratamiento de la información adecuado para la veracidad de la misma.
                        </p>
                        <a href="https://imcrdtcartagena.blogspot.com/" target="_blank">
                            <span class="label label-info">Ir al Sitio</span>
                        </a>
                        <span class="label label-success">Terminado</span>
                    </div>
                </div>
            </div>

            <div class="timeline-block">
                <div class="timeline-dot"><h6>S</h6></div>
                <div class="card timeline-content">
                    <div class="card-content">
                        <h6 class="timeline-title"><strong>Cortuniversal</strong></h6>
                        <div class="timeline-info">
                            <h6>
                                <small>Desarrollador Web</small>
                            </h6>
                            <h6>
                                <small>Febrero 2018 - Actualidad</small>
                            </h6>
                        </div>
                        <p>
                            Desarrolle un sitio web profesional bajo la tecnología de PHP y Bootstrap, en donde se tiene toda la información profesional de la empresa y además de ello muestra sus productos y servicios.
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="http://turmalinauniversal.com/" target="_blank">
                            <span class="label label-info">Ir al Sitio</span>
                        </a>
                        <span class="label label-success">Terminado</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php 
    include 'modals/modals.php';
?>

<section id="interest" class="section">
    <div class="container">
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon fa fa-heart"></i>Pasatiempos</h4>
        </div>
        <div id="interest-card" class="card">
            <div class="card-content">
                <p>
                    Inicialmente soy amante al conocimiento, siempre que veo algo y me gusta, de inmediato hago lo posible por obtener ese conocimiento. Además, me encanta el deporte, de hecho, soy deportista, representando así a mi departamento en diferentes eventos a nivel regional y nacional. 

                <p>
                    Me encanta la música, la música de los años 90 es mi favorita, me gusta mucho la música country.
                </p>

                <p>
                    Así mismo me gusta pasar tiempo con mi familia compartiendo hermosos momentos, también con mi novia hermosa, ella es preciosa y la amo mucho. 
                </p>

                <p>
                    Otro de mis pasatiempos es crear contenidos digitales para personas con un gran interés en vender sus conocimientos a través de internet. 
                </p>
            </div>

            <div class="row no-gutters">
                <div class="col-md-2 col-sm-4 col-xs-6  box text-center">
                    <div class="interest-icon">
                        <i class="fa fa-music"></i>
                        <span>Música</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon-even">
                        <i class="fa fa-gamepad"></i>
                        <span>Juegos</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon">
                        <i class="fa fa-camera"></i>
                        <span>Fotografía</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon-even">
                        <i class="fa fa-futbol-o"></i>
                        <span>Fútbol</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon">
                        <i class="fa fa-plane"></i>
                        <span>Viajar</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon-even">
                        <i class="fa fa-film"></i>
                        <span>Películas</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- <section id="pricing-table" class="section">
    <div class="container">
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon fa fa-money"></i>Precios</h4>
        </div>
        <div id="pricing-card" class="row">
            <div id="p-one" class="col-md-4 col-sm-4 col-xs-12">
                <div class="pricing">
                    <div class="card">
                        <div class="pricing-top">
                            <p><sup>$</sup><em>1.500.000</em>/año</p>
                            <span>Desarrollo Básico</span>
                        </div>
                        <div class="pricing-bottom text-center text-capitalize">
                            <ul>
                                <li>2 GB Ancho de Banda</li>
                                <li>5 GB Almacenamiento</li>
                                <li>3 Bases de Datos (MySQL)</li>
                                <li>Dominio 100% Gratis (año) (<strong>.com</strong>)</li>
                                <li>5 Subdominios</li>
                            </ul>
                        </div>
                        <div class="card-action text-center">
                            <a class="waves-effect btn">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="p-three" class="col-md-4 col-sm-4 col-xs-12">
                <div class="pricing">
                    <div class="card">
                        <div class="pricing-top">
                            <p><sup>$</sup><em>3.500.000</em>/año</p>
                            <span>Plan Deluxe Web</span>
                        </div>
                        <div class="pricing-bottom text-center text-capitalize">
                            <ul>
                                <li>∞ Ancho de Banda</li>
                                <li>∞ Almacenamiento + SSD</li>
                                <li>25 Bases de Datos (MySQL)</li>
                                <li>Dominio 100% Gratis (año) (<strong>.com</strong>)</li>
                                <li>25 Subdonimios</li>
                            </ul>
                        </div>
                        <div class="card-action text-center">
                            <a class="waves-effect btn">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="p-two" class="col-md-4 col-sm-4 col-xs-12">
                <div class="pricing">
                    <div class="card">
                        <div class="pricing-top">
                            <p><sup>$</sup><em>5.000.000</em>/año</p>
                            <span>Plan Business Web SI</span>
                        </div>
                        <div class="pricing-bottom text-center text-capitalize">
                            <ul>
                                <li>Desarrollo de Sistema de Información Completo + Plus de Actualizaciones</li>
                                <li>∞ Ancho de Banda</li>
                                <li>∞ Almacenamiento</li>
                                <li>100 Bases de Datos</li>
                                <li>Dominio 100% Gratis (año) (<strong>.com</strong>)</li>
                                <li>100 Subdonimios</li>
                            </ul>
                        </div>
                        <div class="card-action text-center">
                            <a class="waves-effect btn">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>-->

<section id="contact" class="section">
    <div class="container">
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon fa fa-envelope"></i>Contacto</h4>
        </div>
        <div class="row">
            <div id="contact-card" class="col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-content">
                        <form id="contact-form" name="c-form">
                            <div class="input-field">
                                <input id="first_name" type="text" class="validate" name="first_name" required>
                                <label for="first_name">Nombre</label>
                            </div>
                            <div class="input-field">
                                <input id="sub" type="text" class="validate" name="sub">
                                <label for="sub">Asunto</label>
                            </div>
                            <div class="input-field">
                                <input id="email" type="email" class="validate" name="email" required>
                                <label for="email">Correo Electrónico</label>
                            </div>
                            <div class="input-field">
                                <textarea id="textarea1" class="materialize-textarea" name="message"
                                          required></textarea>
                                <label for="textarea1">Mensaje</label>
                            </div>
                            <div class="contact-send">
                                <button id="submit" name="contactSubmit" type="submit" value="Submit"
                                        class="btn waves-effect">Enviar
                                </button>
                            </div>
                        </form>
                    </div>

                    <div id="form-loader" class="progress is-hidden">
                        <div class="indeterminate"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--VOLVER HACIA ARRIBA-->
<div id="scroll-top">
    <div id="scrollup"><i class="fa fa-angle-up"></i></div>
</div>

<?php 
    include 'interfaz/footer.php';
?>

<!-- TOGGLE DE COLORES -->
<div id="color-palate" class="popout card">
    <div id="color-toggle" class="toggle text-center"><i class="fa fa-cog fa-spin"></i></div>
    <div class="colors text-center">
        <p class="text-center">Elige un Color</p>
        <ul>
            <li id="blue" class="color1"></li>
            <li id="teal" class="color2"></li>
            <li id="gray" class="color3"></li>
            <li id="green" class="color4"></li>
            <li id="purple" class="color5"></li>
            <li id="brown" class="color6"></li>
            <li id="red" class="color7"></li>
            <li id="pink" class="color8"></li>
        </ul>
        <p class="text-center">Más Oscuro</p>
        <ul>
            <li id="blue-blend" class="color1"></li>
            <li id="green-blend" class="color4"></li>
            <li id="dark_gray" class="color10"></li>
        </ul>
    </div>
</div>

<?php 
    include 'interfaz/scripts.php';
?>
</body>
</html>