<?php
session_start();  //start or resume an existing session
include_once 'header.inc'
?>

<nav class="navbar navbar-expand-lg" role="navigation" aria-label="navegación principal">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse.true navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Hogar</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-conferencia" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-conferencia">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="register-now.php">Registro</a>
                        <a class="dropdown-item" href="activities.php">Actividades</a>
                        <a class="dropdown-item" href="mbar_history.php">Historia del MBAR</a>
                        <a class="dropdown-item" href="memories.php">Recuerdos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-comités" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Comités</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-comités">
                        <a class="dropdown-item" href="meetings.php">Reuniones</a>
                        <a class="dropdown-item" href="committees.php">Comités</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-próximos-eventos" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Próximos Eventos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-próximos-eventos">
                        <a class="dropdown-item" href="upcoming_event.php">Comida Compartida de San Patricio</a>
                        <a class="dropdown-item" href="logo_contest.php">Concurso de Logotipos</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacto<span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item" style="border-right: none;">
                    <a class="nav-link active" aria-current="page" href="contributions.php">Contribución<span class="visually-hidden">(actual)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main role="main" id="main-content">
    <!-- Hero Part -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-helpingHands" title="Nosotros estamos honrando la séptima tradición.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Contacta con Nosotros">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Contribuciones Voluntarias:<br>
                            Manos que Ayudan</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="">
                    <h3 class="h4 fw-bold mb-3"><span class="text-dark px-3 px-md-0">Ofrezca una 'Mano Amiga' a alguien que quiera asistir a la conferencia pero no pueda permitírselo.</span></h3>
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
                    !empty($_POST['hand-em']) &&
                    !empty($_POST['hand-ph']) &&
                    !empty($_POST['hand-am']) &&
                    !empty($_POST['hand-ta'])
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
                            $email = !empty($_POST['hand-em']) ? htmlspecialchars($_POST['hand-em']) : '';
                            $phone = !empty($_POST['hand-ph']) ? htmlspecialchars($_POST['hand-ph']) : '';
                            $amount = !empty($_POST['hand-am']) ? htmlspecialchars($_POST['hand-am']) : '';
                            $mainMessage = !empty($_POST['hand-ta']) ? htmlspecialchars($_POST['hand-ta']) : '';

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
                            $statusMsg = 'Muchas gracias. Nos pondremos en contacto contigo para ver cómo hacer tu Aporte.';
                            $postData = '';
                        } else {
                            $statusMsg = 'La verificación de reCaptcha falló, inténtalo de nuevo.';
                        }
                    } else {
                        $statusMsg = 'Marque la casilla de verificación reCAPTCHA.';
                    }
                } else {
                    $statusMsg = 'Por favor complete todos los campos obligatorios.';
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
                    <div role="form">
                        <form action="contributions.php" method="POST" class="row g-3 needs-validation" id="myForm" novalidate>

                            <div class="col-md-6">
                                <label for="hand-em" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" name="hand-em" id="hand-em" required>
                                <div class="invalid-feedback">
                                    Por favor introduzca su correo electrónico.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="hand-ph" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" name="hand-ph" id="hand-ph" required pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="555.867.5309">
                                <div class="invalid-feedback">
                                    Por favor ingrese un número de teléfono válido.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="hand-am" class="form-label">Tu Contribución</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">USD</span>
                                    <input type="text" class="form-control" name="hand-am" id="hand-am" aria-describedby="inputGroupPrepend" placeholder="0.00" required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese una cantidad en dólares.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="hand-ta" class="form-label">Mensaje o Nota a incluir.</label>
                                <textarea class="form-control" name="hand-ta" id="hand-ta" required></textarea>
                                <div class="invalid-feedback">
                                    Por favor ingrese su mensaje.
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
                                <button type="reset" class="btn btn-primary" name="reset" value="reset" onclick="return resetFields();">Restablecer Formulario</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <p class="mb-6 h5 text-dark">De acuerdo con la Séptima Tradición de autofinanciamiento de A.A., aceptamos contribuciones únicamente de A.A. y miembros de Al-Anon.</p>
                </div>
            </div>
        </div>
    </div>



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

    </body>

    </html>