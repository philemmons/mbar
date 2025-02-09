<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Registro </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/es/register-now.php" >';
include_once 'header-bottom.inc';
?>

<nav class="navbar navbar-expand-lg" aria-label="navegación principal">
    <div class="container my-1">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/es/">Hogar</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-conferencia" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-conferencia">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="aa-spanish-marathon-2024.php">Reuniones de A.A. Maratón de Habla Hispana</a>
                        <a class="dropdown-item" href="aa-marathon-2024.php">A.A. Reuniones de Maratón</a>
                        <a class="dropdown-item" href="al-anon-marathon-2024.php">Al-Anon Reuniones de Maratón</a>
                        <a class="dropdown-item active" aria-current="page" href="register-now.php">Registro<span class="visually-hidden">(actual)</span></a>
                        <a class="dropdown-item" href="activities.php">Actividades</a>
                        <a class="dropdown-item" href="mbar_history.php">Historia del MBAR</a>
                        <a class="dropdown-item" href="memories.php">Recuerdos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-quienes-somos" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quienes Somos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-quienes-somos">
                        <a class="dropdown-item" href="our_partner.php">Nuestro Compañero</a>
                        <a class="dropdown-item" href="meetings.php">Reuniones</a>
                        <a class="dropdown-item" href="committees.php">Comités</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-próximos-eventos" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Próximos Eventos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-próximos-eventos">
                        <a class="dropdown-item" href="logo_contest.php">Concurso de Logotipos</a>
                        <a class="dropdown-item" href="upcoming_event.php">Comida Compartida de San Patricio</a>
                        <a class="dropdown-item" href="al-anon-with-aa-event.php">Participación en Al-Anon con A.A.</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacto</a>
                </li>
                <li class="nav-item" style="border-right: none;">
                    <a class="nav-link" href="helping_hands.php">Manos Amigas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main id="main-content">
    <!-- Hero Part -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-registration" title="Monterey Conference Center de Portola Plaza, Monterey.">
            <div id="zoom-info" class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="¡Únete a nosotros en 2026!">
                    <h2 class="fw-bold px-3 px-md-0">¡Estamos entusiasmados con el MBAR el
                        <br>
                        fin de semana del Día del Trabajo!
                    </h2>
                    <p class="h3 text-dark">
                        <a class="d-link" href="https://us02web.zoom.us/j/83143062293?pwd=QXZMWUVoZEkzVnUyY0poanAyclBHdz09" rel="noopener noreferrer nofollow" target="_blank">Reunión Virtual de Lanzamiento por Zoom<span class="sr-only">(Abre la aplicación Zoom)</span></a>
                    </p>
                    <p class="text-dark">30 de Agosto a las 8:00pm, hora del Pacífico
                        <br>
                        Orador: Oliver D. de Delaware
                        <br>
                        ID de la reunión: <strong>831 4306 2293</strong>
                        <br>
                        Código de acceso: <strong>2024</strong>
                        <br>
                        ¡Esta reunión está abierta a todos y lo alentamos a unirse!
                    </p>
                    <p class="h3 text-dark">Reuniones Presenciales</p>
                    <p class="text-dark">31 de Agosto y 1 de Septiembre en el Centro de Conferencias de Monterey
                        <br>
                        Tenga en cuenta que es necesario registrarse para el evento presencial.
                    </p>
                    <p class="text-dark mb-6">¡Estamos emocionados de que te unas a nosotros! Acérquese a la mesa de registro para registrarse en persona, ya que el registro en línea ya está cerrado. ¡Estamos ansiosos por darle la bienvenida!</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Primera parte -->
    <div id="register-now"></div>
    <article aria-label="Registro">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">

                <div class="col-xl-10 col-lg-10 col-md-12 py-4 text-center">
                    <div class="p-3 text-bg-light hero-text-border" title="Registro 2024">

                        <section aria-label="Registro en Persona">
                            <h3 class="card-title mb-3">Registro 2024 en Persona</h3>
                            <p class="h5">¡Estamos emocionados de que te unas a nosotros!
                                <br>
                                Acércate a la mesa de registro para registrarte en persona, ya que el registro en línea está <strong>cerrado</strong>.
                                <br>
                                ¡Estamos ansiosos por darle la bienvenida!
                            </p>
                            <p>Si paga por <i>más</i> de una persona, agregue sus nombres en la sección de notas.
                                <br>
                                Asegúrese de utilizar los <a href="#payment-now" class="bb-link">códigos QR o enlaces</a> que aparecen a continuación para completar el pago de su inscripción.
                                <br>
                                Puede pagar su inscripción con cheque o efectivo en lugar de hacerlo a través de Venmo o PayPal.
                            </p>
                            <h3 class="card-title text-center mb-3"><a href="#payment-now" class="d-link">Métodos de Pago</a></h3>
                        </section>

                    </div>
                </div>

            </div>
        </div>
    </article>

    <aside aria-label="Mercancía">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">

                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-bg-light hero-text-border" title="Mercancía MBAR">

                        <section aria-label="Mercancía MBAR">
                            <h3 class="card-title mb-3 text-center">Mercancía</h3>
                        </section>

                        <div class="row">
                            <div class="col-md-7">
                                <p class="h5">En la conferencia habrá disponibles camisetas conmemorativas de 2024, junto con tazas térmicas y botellas de agua de MBAR</p>
                                <ul>
                                    <li>Las camisetas cuestan 15 USD cada una y tenemos cantidades limitadas, desde la talla pequeña hasta la 3XL.
                                    </li>

                                    <li>¡MBAR! Usa esta prenda favorita de MBAR en el gran evento o simplemente para estar en casa.
                                    </li>

                                    <li>100 % algodón, azul marino liso, logotipo blanco y dorado, ligero, corte clásico, dobladillo inferior y manga corta con doble costura
                                    </li>
                                </ul>

                            </div>

                            <div class="col-md-5 pt-4">
                                <img src="../images/2024_mbar_tee_shirt.png" class="img-fluid img-thumbnail" alt="Camiseta azul marino con logotipo dorado y blanco.">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </aside>

    <!-- Part Payment -->
    <article aria-label="Método de pago">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div id="payment-now"></div>
                <div class="col-xl-8 col-lg-8 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Payment Methods">
                        <h3 class="fw-bold text-dark px-3 px-md-0">Métodos de Pago
                        </h3>
                        <p><strong>Agregue su nombre de registro en el pago. Si paga por <i>más</i> de una persona, agregue su(s) nombre(s) en la sección de notas.</strong>
                        </p>

                        <p class="bb-link">Recuerde: Su pago completa su registro!
                        </p>

                        <p>Puedes pagar tu inscripción en línea con <strong>cheque o efectivo en persona</strong> en lugar de hacerlo a través de Venmo o PayPal.
                        </p>

                        <p>Los códigos QR a continuación requieren las aplicaciones móviles.
                        </p>

                        <p><strong>Consejo útil</strong>: el código qr de PayPal le lleva a la pantalla de inicio de sesión. Después de iniciar sesión, haga clic en el ícono qrCode en la parte superior derecha, al lado del ícono de usuario, y luego escanee el qrCode nuevamente para ver el aviso de pago de MBAR. Si necesita ayuda para realizar un pago, comuníquese con nuestro <a href="mailto:<?php echo getenv('mbar-to-email') ?>" class="bb-link">Administrador del Sistema</a>.
                        </p>

                        <div class="row">
                            <div class="col-sm-6 py-5">

                                <p class="text-center pt-4"><?php echo getenv('mbar-venmo') ?></p>
                                <p class="text-center"><a href="https://venmo.com" class="bb-link" target="_blank" rel="noopener noreferrer" title="PayPal qrCode Link">Enlace del Código qr de Venmo<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                            </div>
                            <div class="col-sm-6 py-5">
                                <img src="../images/paypal-qrCode.png" class="img-fluid shadow-wrap" alt="Código QR de PayPal" title="Código QR de PayPal">
                                <p class="text-center pt-4"><?php echo getenv('mbar-treas-email') ?></p>
                                <p class="text-center"><a href="https://www.paypal.com/qrcodes/managed/2337f158-b9f2-48ad-98b8-8fb7a693759f?utm_source=old_merchant_lp" class="bb-link" target="_blank" rel="noopener noreferrer" title="PayPal qrCode Link">Enlace del Código qr de PayPal<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                            </div>
                            <p>Los enlaces a continuación proporcionan instrucciones generales de pago.</p>
                            <p class="mb-3"><a href="https://help.venmo.com/hc/en-us/articles/210413477-Sending-Requesting-Money" class="bb-link" target="_blank" rel="noopener noreferrer nofollow" title="Enlace directo a Venmo">¿Cómo puedo enviar un pago o solicitar dinero con Venmo?<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                            <p class="mb-3"><a href="https://www.paypal.com/in/cshelp/article/how-do-i-send-payments-help293" class="bb-link" target="_blank" rel="noopener noreferrer nofollow" title="Enlace directo a PayPal">¿Cómo envío pagos con PayPal?<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </article>


    <!-- Part Two -->
    <article aria-label="Formulario de registro en PDF">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Descargar formulario pdf">
                            <h3 class="card-title mb-3">Descargar el formulario de inscripción</h3>
                            <p>A continuación se encuentra el formulario de inscripción de MBAR 2024, que se puede devolver en la mesa de inscripción.
                            </p>
                            <p><a class="btn btn-primary btn-sm" href="../pdf/formulario-registro-mbar-es.pdf"><img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon">Formulario de Inscripción de MBAR 2024<span class="sr-only">(Abrir PDF en el navegador)</span></a>
                            </p>
                            <p>Si tiene alguna pregunta sobre la inscripción, comuníquese con nuestro <a href="mailto:<?php echo getenv('mbar-reg-email') ?>" class="bb-link">Presidente de Inscripciones</a>
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Three -->
    <div id="map"></div>
    <article aria-label="Mapa de Google del MBAR 2024">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Ubicaciones de eventos">
                            <h4 class="card-title mb-3"><a href="https://www.google.com/maps/dir//Bethlehem+Lutheran+Church+800+Cass+St+Monterey,+CA+93940/@36.5939841,-121.8958073,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x808de425e4f48de1:0xc2ec674814c2393f!2m2!1d-121.8958736!2d36.5940092?hl=es&entry=ttu" class="bb-link" target="_blank" title="Enlace directo a Google Map">Bethlehem Lutheran Church<span class="sr-only">(Se abre en una ventana nueva)</span></a></h4>
                            <div class="col-md-12 db-5">
                                <p><img src="../images/icons/warning-sign.png" width="50" height="50" alt="Señal de advertencia triangular con un signo de exclamación."><strong class="text-uppercase">Tenga en cuenta:</strong> El Desayuno y la Cena se realizarán en<br>
                                    <strong>Bethlehem Lutheran Church, ubicada en 800 Cass Street en Monterey.</strong><br>
                                    (Está a poco más de una milla del Centro de Conferencias).
                                </p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.345445633647!2d-121.89838222286743!3d36.59398837929454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de425e4f48de1%3A0xc2ec674814c2393f!2sBethlehem%20Lutheran%20Church!5e0!3m2!1ses!2sus!4v1705601422150!5m2!1ses!2sus" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Bethlehem Lutheran Church" aria-hidden="true"></iframe>
                            </div>
                            <br>
                            <hr>
                            <h4 class="card-title mb-3"><a href="https://www.google.com/maps/dir//Monterey+Conference+Center+1+Portola+Plaza+Monterey,+CA+93940/@36.6014612,-121.8949613,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x808de422461f891b:0x20f8f64ee124f091!2m2!1d-121.8949613!2d36.6014612?hl=es&entry=ttu" class="bb-link" target="_blank" title="Enlace directo a Google Map">Monterey Conference Center<span class="sr-only">(Se abre en una ventana nueva)</span></a></h4>
                            <div class="col-md-12 db-5">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.0352026855912!2d-121.89496129999999!3d36.601461199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de422461f891b%3A0x20f8f64ee124f091!2sMonterey%20Conference%20Center!5e0!3m2!1ses!2sus!4v1705601249904!5m2!1ses!2sus" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Monterey Conference Center" aria-hidden="true"></iframe>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Four -->
    <aside aria-label="Autosuficiente">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <section aria-label="Razón para pagar">
                            <h4 class="card-title text-center mb-3"><a href="#register-now" class="bb-link">A.A. Convenciones: ¿Por qué tenemos que pagar?</a></h4>
                            <p>Hay muchos miembros de A.A. conferencias/convenciones celebradas en todo el mundo. Uno de los conceptos erróneos más comunes acerca de su reunión es que son miembros de A.A. reuniones y dado que no hay cuotas ni honorarios para A.A. membresía, no debería haber ningún costo por asistir. Las convenciones y conferencias son eventos especiales, no reuniones regulares de A.A. reuniones. Requieren meses de planificación, preparación y costes.
                            </p>
                            <p>Dado que la mayoría de los eventos se llevan a cabo en hoteles/centros de conferencias, hay un cargo por el uso de algunas instalaciones. Otros gastos incluyen viajes y alojamiento de los oradores, impresión de volantes, horarios, programas, correos, suministros y entretenimiento. Un gran evento requiere una cantidad sustancial de dinero.
                            </p>
                            <p>Cada conferencia es autosuficiente. No se utilizan fondos del grupo para pagar el evento. El costo del evento se paga mediante tarifas de inscripción y eventos de recaudación de fondos de MBAR. La asistencia es voluntaria y como responsable A.A. miembros, ahora "pagamos nuestro propio camino".
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </aside>


    <?php include_once 'footer.inc' ?>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    <script>
        // Function to display confirmation message and update live region
        function resetFields() {
            // Display confirmation dialog
            var confirmMessage = "Are you sure you want to reset all fields?"
            var confirmed = window.confirm(confirmMessage);

            // Update live region based on user's choice
            var liveRegion = document.getElementById('aria-live');
            if (confirmed) {
                liveRegion.textContent = "(The Form Has Been Reset)";
            } else {
                liveRegion.textContent = "(Reset Form Cancelled)";
            }

            return confirmed;

        }
    </script>

    </body>

    </html>