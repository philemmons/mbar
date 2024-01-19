<?php
session_start();  //start or resume an existing session
include_once 'header.inc'
?>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse.true navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" aria-current="page">Hogar</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="registration.php">Registro</a>
                        <a class="dropdown-item" href="activities.php">Actividades</a>
                        <a class="dropdown-item" href="mbar_history.php">Historia del MBAR</a>
                        <a class="dropdown-item" href="memories.php">Recuerdos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Comités</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="meetings.php">Reuniones</a>
                        <a class="dropdown-item" href="committees.php">Comités</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Próximos Eventos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="nav-link" href="upcoming_event.php">Noche de Bingo</a>
                        <a class="nav-link" href="logo_contest.php">Concurso de Logotipos</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="contact.php">Contacto<span class="visually-hidden">(actual)</span></a>
                </li>
                <li class="nav-item" style="border-right: none;">
                    <a class="nav-link" href="contributions.php">Contribución</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>
    <!-- Hero Section -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-contactUs" title="Comuníquese con nosotros si tiene alguna pregunta, comentario o mejora.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Contact Us">
                    <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Contacta con Nosotros</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-8 col-lg-8 col-md-12 pt-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Los recuerdos están en proceso.">
                    <p class="mb-6 h5"><span class="text-dark px-3 px-md-0">Comuníquese con nosotros si tiene alguna pregunta, comentario o mejora porque nos importa.<br>Realmente nos importa.</span>
                        </h4>
                </div>
            </div>

            <?php

            /**
             * https://www.codexworld.com/new-google-recaptcha-with-php/
             */

            // Google reCAPTCHA API keys settings 
            $secretKey  = getenv('g-secret-key');

            // Email settings 
            $recipientEmail = getenv('mbar-chair-email');

            // If the form is submitted 
            $postData = $statusMsg = '';
            $status = 'error';

            if (isset($_POST['submit'])) {
                $postData = $_POST;

                // Validate form input fields
                if (
                    !empty($_POST['contact-fn']) &&
                    !empty($_POST['contact-ln']) &&
                    !empty($_POST['contact-em']) &&
                    !empty($_POST['contact-subj']) &&
                    !empty($_POST['contact-ta'])
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
                            $firstName = !empty($_POST['contact-fn']) ? htmlspecialchars($_POST['contact-fn']) : '';
                            $lastName = !empty($_POST['contact-ln']) ? htmlspecialchars($_POST['contact-ln']) : '';
                            $email = !empty($_POST['contact-em']) ? htmlspecialchars($_POST['contact-em']) : '';
                            $phone = !empty($_POST['contact-phone']) ? htmlspecialchars($_POST['contact-phone']) : '';
                            $contactSubj = !empty($_POST['contact-subj']) ? htmlspecialchars($_POST['contact-subj']) : '';
                            $contactMess = !empty($_POST['contact-ta']) ? htmlspecialchars($_POST['contact-ta']) : '';

                            // Send email notification to the site admin 
                            $to = $recipientEmail;
                            $subject = 'Contact Us Submitted';
                            $htmlContent = " 
                    <h4>Contact Us Form - ES</h4> 
                    <p><b>Name: </b>" . $firstName . " " . $lastName . "</p> 
                    <p><b>Email: </b>" . $email . "</p> 
                    <p><b>Phone: </b>" . $phone . "</p> 
                    <p><b>Subject: </b>" . $contactSubj . "</p> 
                    <p><b>Message: </b>" . $contactMess . "</p> 
                ";

                            // Always set content-type when sending HTML email 
                            $headers = "MIME-Version: 1.0" . "\r\n";
                            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                            // More headers 
                            $headers .= 'From:' . $firstName . ' ' . $lastName . '<' . $email . '>' . "\r\n";

                            // Send email 
                            mail($to, $subject, $htmlContent, $headers);

                            $status = 'success';
                            $statusMsg = 'Gracias, su mensaje fue enviado y espere hasta 48 horas para responder.';
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

            <div id="contact-us"></div>
            <?php if (!empty($statusMsg)) { ?>
                <div class="col-xl-8 col-lg-8 col-md-12 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Extendiéndose la mano unos a otros.">
                        <p class="mb-6 h5 status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                    </div>
                </div>
            <?php } ?>

            <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                <div class="p-3 text-bg-light hero-text-border" title="Estamos dispuestos a escuchar.">

                    <form action="contact.php" method="POST" class="row g-3 needs-validation" id="myForm" novalidate>

                        <div class="col-md-6">
                            <label for="contact-fn" class="form-label">Nombre de pila</label>
                            <input type="text" class="form-control" name="contact-fn" id="contact-fn" required>
                            <div class="invalid-feedback">
                                Por favor, introduzca su nombre de pila.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="contact-ln" class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="contact-ln" id="contact-ln" required>
                            <div class="invalid-feedback">
                                Por favor ingrese su apellido.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="contact-em" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" name="contact-em" id="contact-em" required>
                            <div class="invalid-feedback">
                                Por favor introduzca su correo electrónico.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="contact-phone" class="form-label">Teléfono (Opcional)</label>
                            <input type="tel" class="form-control" name="contact-phone" id="contact-phone" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="555.867.5309">
                            <div class="invalid-feedback">
                                Por favor ingrese un número de teléfono válido.
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="contact-subj" class="form-label">Sujeto</label>
                            <input type="text" class="form-control" name="contact-subj" id="contact-subj" required>
                            <div class="invalid-feedback">
                                Por favor ingrese un asunto.
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="contact-ta" class="form-label">Pregunta, comentario o mejora</label>
                            <textarea class="form-control" name="contact-ta" id="contact-ta" required></textarea>
                            <div class="invalid-feedback">
                                Por favor ingrese su mensaje.
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="g-recaptcha" data-sitekey=<?php echo getenv('g-site-key'); ?>></div>
                            <div>
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

            <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <p class="mb-6 h5 text-dark">Permítanos hasta 48 horas para responder y, si necesita ayuda antes, envíenos un correo electrónico.<?php echo getenv('mbar-chair-email'); ?> </p>
                </div>
            </div>
        </div>
    </section>



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