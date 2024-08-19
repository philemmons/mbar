<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Concurso de Logotipos </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/es/helping_hands.php" >';
include_once 'header-bottom.inc'
?>

<nav class="navbar navbar-expand-lg" aria-label="navegación principal">
    <div class="container">
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
                        <a class="dropdown-item" href="aa-marathon-2024.php">A.A. Reuniones de Maratón</a>
                        <a class="dropdown-item" href="al-anon-marathon-2024.php">Al-Anon Reuniones de Maratón</a>
                        <a class="dropdown-item" href="register-now.php">Registro</a>
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
                        <a class="dropdown-item" href="upcoming_event.php">Gratitud</a>
                        <a class="dropdown-item" href="logo_contest.php">Concurso de Logotipos</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacto<span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item" style="border-right: none;">
                    <a class="nav-link active" aria-current="page" href="helping_hands.php">Manos Amigas<span class="visually-hidden">(actual)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main id="main-content">
    <!-- Hero Part -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-helpingHands" title="Nosotros estamos honrando la séptima tradición.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Contacta con Nosotros">
                    <h2 class="display-6 fw-bold px-3 px-md-0">Contribuciones Voluntarias:<br>
                        Manos que Ayudan</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Recuperación">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="">
                        <section aria-label="Llamado a la acción">
                            <h3 class="h4 fw-bold mb-3"><span class="text-dark px-3 px-md-0">Ofrezca una 'Mano Amiga' a alguien que quiera asistir a la conferencia pero no pueda permitírselo.</span></h3>
                        </section>
                    </div>
                </div>

                <?php

                /**
                 * https://www.codexworld.com/new-google-recaptcha-with-php/
                 */

                // Google reCAPTCHA API keys settings 
                $secretKey  = getenv('g-secret-key');

                // Email settings 
                $recipientEmail = getenv('mbar-reg-email');

                // If the form is submitted 
                $postData = $statusMsg = '';
                $status = 'error';

                if (isset($_POST['submit'])) {
                    $postData = $_POST;

                    // Validate form input fields 
                    if (
                        !empty($_POST['helpHand-email']) &&
                        !empty($_POST['helpHand-phone']) &&
                        !empty($_POST['helpHand-amount']) &&
                        !empty($_POST['helpHand-textArea']) &&
                        empty($_POST['helpHand-beeName'])
                    ) {

                        // Validate reCAPTCHA checkbox 
                        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

                            // Verify the reCAPTCHA API response 
                            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);

                            // Decode JSON data of API response 
                            $responseData = json_decode($verifyResponse);

                            // If the reCAPTCHA API response is valid 
                            if ($responseData->success) {
                                // Retrieve value from the form input fields 
                                $email = !empty($_POST['helpHand-email']) ? htmlspecialchars($_POST['helpHand-email']) : '';
                                $phone = !empty($_POST['helpHand-phone']) ? htmlspecialchars($_POST['helpHand-phone']) : '';
                                $amount = !empty($_POST['helpHand-amount']) ? htmlspecialchars($_POST['helpHand-amount']) : '';
                                $mainMessage = !empty($_POST['helpHand-textArea']) ? htmlspecialchars($_POST['helpHand-textArea']) : '';

                                // Send email notification to the site admin 
                                $to = $recipientEmail;
                                $subject = 'Helping Hand Submitted';
                                $htmlContent = " 
                    <h4>Helping Hand Form - ES</h4> 
                    <p><b>Name: </b> Anonymous Donor </p> 
                    <p><b>Email: </b>" . $email . "</p> 
                    <p><b>Phone: </b>" . $phone . "</p> 
                    <p><b>Amount: </b>" . $amount . "</p> 
                    <p><b>Message: </b>" . $mainMessage . "</p> 
                ";

                                // Always set content-type when sending HTML email 
                                $headers = "MIME-Version: 1.0" . "\r\n";
                                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                // More headers 
                                $headers .= 'From:Anonymous Donor<' . $email . '>' . "\r\n";

                                // Send email 
                                mail($to, $subject, $htmlContent, $headers);

                                $status = 'success';
                                $statusMsg = 'Muchas gracias. Nos comunicaremos con usted pronto sobre el pago de su contribución. Puede optar por pagar mediante Venmo, PayPal, cheque o efectivo. Recuerde incluir "Mano Hmiga" en la sección de notas.';
                                $postData = '';
                            } else {
                                $statusMsg = 'La verificación de reCaptcha falló, inténtalo de nuevo.';
                            }
                        } else {
                            $statusMsg = 'Marque la casilla de verificación reCAPTCHA.';
                        }
                    } else {
                        $statusMsg = 'Por favor complete todos los campos obligatorios.';
                        if (!empty($_POST['helpHand-beeName'])) {
                            $statusMsg = '¿Eres un bot?';
                        }
                    }
                }

                ?>

                <div id="hand-us"></div>
                <?php if (!empty($statusMsg)) { ?>
                    <div class="col-xl-8 col-lg-8 col-md-12 pt-4">
                        <div class="p-3 text-center text-bg-light hero-text-border" title="Extendiéndose la mano unos a otros.">
                            <p class="mb-6 h5 status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                        </div>
                    </div>
                <?php } ?>

                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3 text-bg-light hero-text-border" title="We are willing to listen.">

                        <form action="helping_hands.php" method="POST" class="row g-3 needs-validation" id="myForm" novalidate>
                            <div class="col-md-6">
                                <label for="helpHand-beeName" aria-hidden="true" class="visually-hidden">Nombre del Girasol</label>
                                <input type="text" name="helpHand-beeName" id="helpHand-beeName" style="display:none">

                                <label for="helpHand-email" class="form-label">Correo Electrónico (Requerido)</label>
                                <input type="email" class="form-control" name="helpHand-email" id="helpHand-email" required>
                                <div class="invalid-feedback">
                                    Requerido, por favor introduzca su correo electrónico.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="helpHand-phone" class="form-label">Teléfono con código de área (xxx.xxx.xxxx)</label>
                                <input type="tel" class="form-control" name="helpHand-phone" id="helpHand-phone" required pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="555.867.5309">
                                <div class="invalid-feedback">
                                    Opcional, ingrese un número de teléfono válido.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="helpHand-amount" class="form-label">Tu Contribución (requerido)</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">USD</span>
                                    <input type="text" class="form-control" name="helpHand-amount" id="helpHand-amount" aria-describedby="inputGroupPrepend" placeholder="0.00" required>
                                    <div class="invalid-feedback">
                                        Requerido, por favor ingrese una cantidad en dólares.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="helpHand-textArea" class="form-label">Mensaje o Nota a incluir (Requerido)</label>
                                <textarea class="form-control" name="helpHand-textArea" id="helpHand-textArea" required></textarea>
                                <div class="invalid-feedback">
                                    Requerido, por favor ingrese su mensaje.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="g-recaptcha" data-sitekey=<?php echo getenv('g-site-key'); ?>></div>
                                <div id="reCaptcha-warning">
                                    Nota: El formulario se restablecerá si no está marcado.
                                </div>
                            </div>

                            <div class="col-md-6 text-center">
                                <button type="submit" class="btn btn-primary" name="submit">Enviar Formulario</button>
                            </div>

                            <div class="col-md-6 text-center">
                                <button type="reset" class="btn btn-primary" name="reset" value="reset" onclick="return resetFields();" aria-labelledby="reset">Restablecer Formulario</button>
                                <div class="sr-only" id="reset" role="alert" aria-live="assertive" aria-atomic="true">
                                    <p>(Una ventana emergente confirmará su descanso)</p>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <p class="mb-6 h5 text-dark">De acuerdo con la Séptima Tradición de autofinanciamiento de A.A., aceptamos contribuciones únicamente de A.A. y miembros de Al-Anon.</p>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Payment -->
    <article aria-label="Métodos de contribución">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div id="helping-now"></div>
                <div class="col-xl-8 col-lg-8 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <h3 class="card-title mb-3">Métodos de Contribución
                        </h3>
                        <p><strong>Los miembros de A.A. y Al-Anon pueden hacer una contribución generosa directamente.</strong> Aceptamos Venmo, PayPal, cheque o efectivo. Recuerde incluir "Helping Hand" en la sección de notas.
                        </p>

                        <p>Si paga con <strong>cheque</strong>, hágalo a nombre de MBAR y envíelo por correo a
                            <br><span class="text-uppercase">Monterey Bay Area Round Up</span>
                            <br>Attn: de Naomi B.
                            <br>P.O. Box 1462
                            <br>Monterey, CA 93942
                        </p>

                        <p>De lo contrario, utilice uno de los códigos QR que aparecen a continuación.
                        </p>

                        <p><strong>Consejo útil</strong>: El código QR de PayPal lo lleva a la pantalla de inicio de sesión. Después de iniciar sesión, haga clic en el ícono del código QR en la parte superior derecha, junto al ícono del usuario, y luego escanee el código QR nuevamente para obtener el mensaje de pago de MBAR. Si necesita ayuda para realizar un pago, comuníquese con nuestro <a href="mailto:<?php echo getenv('mbar-to-email') ?>" class="bb-link">Administrador de sistemas</a>.
                        </p>
                        <div class="row justify-content-center">
                            <div class="col-sm-6 py-5">
                                <img src="../images/venmo-qrCode.png" class="img-fluid shadow-wrap" alt="Código QR de Venmo" title="Código QR de Venmo">
                                <p class="text-center pt-4"><?php echo getenv('mbar-venmo') ?></p>
                                <p class="text-center"><a href="https://venmo.com/code?user_id=2883666946555904351&created=1699031584.911354" class="bb-link" target="_blank" rel="noopener noreferrer" title="Enlace de código QR de PayPal">Enlace de código QR de Venmo<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                            </div>
                            <div class="col-sm-6 py-5">
                                <img src="../images/paypal-qrCode.png" class="img-fluid shadow-wrap" alt="Código QR de PayPal" title="Código QR de PayPal">
                                <p class="text-center pt-4"><?php echo getenv('mbar-treas-email') ?></p>
                                <p class="text-center"><a href="https://www.paypal.com/qrcodes/managed/2337f158-b9f2-48ad-98b8-8fb7a693759f?utm_source=old_merchant_lp" class="bb-link" target="_blank" rel="noopener noreferrer" title="Enlace de código QR de PayPal">Enlace de código QR de PayPal<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                            </div>
                            <p>Los enlaces a continuación brindan instrucciones generales de pago.</p>
                            <p class="mb-3"><a href="https://help.venmo.com/hc/en-us/articles/210413477-Enviar-solicitar-dinero" class="bb-link" target="_blank" rel="noopener noreferrer" title="Enlace directo a Venmo">¿Cómo puedo enviar un pago o solicitar dinero con Venmo?<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                            <p class="mb-3"><a href="https://www.paypal.com/in/cshelp/article/how-do-i-send-payments-help293" class="bb-link" target="_blank" rel="noopener noreferrer" title="Enlace directo a PayPal">¿Cómo envío pagos con PayPal?<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </article>

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
        function resetFields() {
            return confirm("¿Estás seguro de que quieres restablecer todos los campos?");
        }
    </script>
    <script>
        // Function to display confirmation message and update live region
        function resetFields() {
            // Display confirmation dialog
            var confirmMessage = "¿Estás seguro de que quieres restablecer todos los campos?"
            var confirmed = window.confirm(confirmMessage);

            // Update live region based on user's choice
            var liveRegion = document.getElementById('reset');
            if (confirmed) {
                liveRegion.textContent = "(El formulario ha sido reiniciado)";
            } else {
                liveRegion.textContent = "(Restablecer formulario cancelado)";
            }

            return confirmed;

        }
    </script>

    </body>

    </html>