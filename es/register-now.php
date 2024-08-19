<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Registro </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/es/register-now.php" >';
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
                        <a class="dropdown-item" href="upcoming_event.php">Gratitud</a>
                        <a class="dropdown-item" href="logo_contest.php">Concurso de Logotipos</a>
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
                <div class="p-3 text-center text-bg-light hero-text-border" title="¡La inscripción ya está abierta!">
                    <h2 class="fw-bold px-3 px-md-0">¡Estamos entusiasmados con el MBAR el
                        <br>
                        fin de semana del Día del Trabajo!
                    </h2>
                    <p class="h3 text-dark">Reunión Virtual de Lanzamiento por Zoom</p>
                    <p class="dark-text">30 de Agosto a las 8:00pm, hora del Pacífico
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
                    <p class="dark-text">31 de Agosto y 1 de Septiembre en el Centro de Conferencias de Monterey
                        <br>
                        Tenga en cuenta que es necesario registrarse para el evento presencial. ¡Asegúrese de registrarse con anticipación!
                    </p>
                    <a href="#register-now" class="btn btn-primary mb-2">Regístrese Ahora</a>
                    <p class="dark-text mb-6">Esperamos contar con su participación en ambas sesiones. ¡Hagamos que este MBAR sea un gran éxito!</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Part One -->
    <div id="register-now"></div>

    <article aria-label="Registration">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3  text-bg-light hero-text-border" title="Preinscripción 2024.">
                        <section aria-label="Registration-Intro">
                            <h3 class="card-title text-center mb-3">Preinscripción 2024</h3>
                            <p>Si te registras con anticipación, nos ayudarás a prepararte para que tu experiencia en el evento sea perfecta. Tu registro nos demuestra tu entusiasmo y compromiso con MBAR, ¡y lo agradecemos! Si pagas por <i>más</i> de una persona, agrega sus nombres en la sección de notas.
                            </p>
                            <p class="text-center">Asegúrese de utilizar los <a href="#payment-now" class="bb-link">códigos QR o enlaces</a> que aparecen a continuación para realizar el pago que complete su registro.
                                <br><br>Puede pagar su registro en línea con <strong>cheque</strong> en lugar de hacerlo con Venmo o PayPal. Haga su cheque a nombre de MBAR y envíelo por correo a
                                <br><span class="text-uppercase">Monterey Bay Area Round Up</span>
                                <br>A la atención de Naomi B.
                                <br>P.O. Box 1462
                                <br>Monterey, CA 93942
                            </p>
                            <p class="text-center">Después de registrarse, debería recibir un correo electrónico con sus selecciones y el monto total a pagar. No actualice la página web. Si su correo electrónico no llega, revise su carpeta de correo no deseado o comuníquese con el <a href="mailto:<?php echo getenv('mbar-to-email'); ?>" class="bb-link">administrador de sistemas</a>.</p>
                            </p>
                        </section>
                    </div>
                </div>

                <?php

                include_once '../source/php_source.php';


                /**
                 * https://www.codexworld.com/new-google-recaptcha-with-php/
                 * 
                 * https://www.namecheap.com/support/knowledgebase/article.aspx/10038/31/how-to-configure-a-contact-form-with-us/#mailfunction
                 *
                 */

                // Google reCAPTCHA API keys settings 
                $secretKey  = getenv('g-secret-key');

                // Email settings
                $recipientEmail = getenv('mbar-to-email');
                $bccEmail = getenv('mbar-bcc-email');

                // Change lang variable as needed based on lang reg form
                $lang = 'es';


                // If the form is submitted 
                $postData = $statusMsg = '';
                $status = 'error';

                if (isset($_POST['submit'])) {

                    $_POST['myRegistration'] = htmlspecialchars('after');
                    $_POST['earlyBirdMealBundle'] = htmlspecialchars('no');
                    $_POST['shirtQuantity'] = htmlspecialchars(0);
                    $_POST['shirtSize'] = htmlspecialchars('none');

                    $postData = $_POST;

                    if (!isset($_POST['shirtQuantity']) || !array_key_exists('shirtQuantity', $_POST)) {
                        $_POST['shirtQuantity'] = 0;
                    }

                    // Validate form required input fields
                    if (
                        !empty($_POST['firstName']) &&
                        !empty($_POST['lastName']) &&
                        !empty($_POST['myEmail']) &&
                        !empty($_POST['myFellowship']) &&
                        !empty($_POST['myRegistration']) &&
                        !empty($_POST['earlyBirdMealBundle']) &&
                        !empty($_POST['meetTheSpeakerDinner']) &&
                        !empty($_POST['roundupBreakfast']) &&
                        !empty($_POST['iceCreamSocial']) &&
                        !empty($_POST['shirtSize']) &&
                        !empty($_POST['paymentCheckBox']) &&
                        !empty($_POST['paymentMethod']) &&
                        empty($_POST['beeName'])
                    ) {

                        // Validate reCAPTCHA checkbox 
                        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

                            // Verify the reCAPTCHA API response 
                            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);

                            // Decode JSON data of API response 
                            $responseData = json_decode($verifyResponse);

                            // If the reCAPTCHA API response is valid
                            // If the reCAPTCHA API response is valid
                            if ($responseData->success) {
                                // Retrieve value from the form input fields
                                $firstName = !empty($_POST['firstName']) ? htmlspecialchars($_POST['firstName'], ENT_QUOTES) : '';
                                $lastName = !empty($_POST['lastName']) ? htmlspecialchars($_POST['lastName'], ENT_QUOTES) : '';
                                $badgeName = !empty($_POST['badgeName']) ? htmlspecialchars($_POST['badgeName'], ENT_QUOTES) : '';
                                $email = !empty($_POST['myEmail']) ? htmlspecialchars($_POST['myEmail'], ENT_QUOTES) : '';
                                $phone = !empty($_POST['myPhone']) ? htmlspecialchars($_POST['myPhone'], ENT_QUOTES) : '';
                                $address = !empty($_POST['myAddress']) ? htmlspecialchars($_POST['myAddress'], ENT_QUOTES) : '';
                                $city = !empty($_POST['myCity']) ? htmlspecialchars($_POST['myCity'], ENT_QUOTES) : '';
                                $state = !empty($_POST['myState']) ? htmlspecialchars($_POST['myState'], ENT_QUOTES) : '';
                                $zc = !empty($_POST['myZipcode']) ? htmlspecialchars($_POST['myZipcode'], ENT_QUOTES) : '';
                                $fs = !empty($_POST['myFellowship']) ? htmlspecialchars($_POST['myFellowship'], ENT_QUOTES) : '';
                                $hg = !empty($_POST['myHomegroup']) ? htmlspecialchars($_POST['myHomegroup'], ENT_QUOTES) : '';
                                $register = !empty($_POST['myRegistration']) ? htmlspecialchars($_POST['myRegistration'], ENT_QUOTES) : '';
                                $ebmb = !empty($_POST['earlyBirdMealBundle']) ? htmlspecialchars($_POST['earlyBirdMealBundle'], ENT_QUOTES) : '';
                                $mtsd = !empty($_POST['meetTheSpeakerDinner']) ? htmlspecialchars($_POST['meetTheSpeakerDinner'], ENT_QUOTES) : '';
                                $rucb = !empty($_POST['roundupBreakfast']) ? htmlspecialchars($_POST['roundupBreakfast'], ENT_QUOTES) : '';
                                $ics = !empty($_POST['iceCreamSocial']) ? htmlspecialchars($_POST['iceCreamSocial'], ENT_QUOTES) : '';
                                $snd = !empty($_POST['saturdayNightDance']) ? htmlspecialchars($_POST['saturdayNightDance'], ENT_QUOTES) : '';
                                $hhc = !empty($_POST['helpingHandContribution']) ? htmlspecialchars($_POST['helpingHandContribution'], ENT_QUOTES) : '';
                                $tsq = strlen($_POST['shirtQuantity']) > 0 ? htmlspecialchars($_POST['shirtQuantity'], ENT_QUOTES) : '';
                                $tss = !empty($_POST['shirtSize']) ? htmlspecialchars($_POST['shirtSize'], ENT_QUOTES) : '';
                                $cBox = !empty($_POST['paymentCheckBox']) ? htmlspecialchars($_POST['paymentCheckBox'], ENT_QUOTES) : '';
                                $pm = !empty($_POST['paymentMethod']) ? htmlspecialchars($_POST['paymentMethod'], ENT_QUOTES) : '';

                                $tsq = tShirtQuanCheck($tss, $tsq);
                                $tss = tShirtSizeCheck($tss, $tsq);

                                $total = getTotal($register, $ebmb, $mtsd, $rucb, $ics, $hhc, $tsq, $tss);

                                // Send email notification to the site admin 
                                $to = $email;
                                $subject = 'Formulario de Registro Enviado';
                                $htmlContent = " 
                    <h4>Formulario de Inscripción - Spanish</h4> 
                    <p><b>Nombre: </b>" . $firstName . " " . $lastName . "</p> 
                    <p><b>Placa de Identificación: </b>" . $badgeName . "</p> 
                    <p><b>Email: </b>" . $email . "</p> 
                    <p><b>Teléfono: </b>" . $phone . "</p> 
                    <p><b>Dirección: </b>" . $address . "</p> 
                    <p><b>Ciudad: </b>" . $city . "</p> 
                    <p><b>State: </b>" . $state . "</p> 
                    <p><b>Estado: </b>" . $zc . "</p> 
                    <p><b>Compañerismo: </b>" . $fs . "</p> 
                    <p><b>Grupo en el Hogar: </b>" . $hg . "</p> 
                    <p><b>Registro: </b>" . $register . "</p> 
                    <p><b>Paquete de Comida Para Madrugadores: </b>" . $ebmb . "</p> 
                    <p><b>Conozca a la Cena de Oradores: </b>" . $mtsd . "</p> 
                    <p><b>Redondeo Continuación Desayuno: </b>" . $rucb . "</p> 
                    <p><b>Helado Social: </b>" . $ics . "</p> 
                    <p><b>Baile del Sábado por la Noche: </b>" . $snd . "</p> 
                    <p><b>Contribución de Mano Amiga: </b>" . $hhc . "</p> 
                    <p><b>Tee Shirt Size: </b>" . $tss . "</p> 
                    <p><b>Cantidad de Camisetas : </b>" . $tsq . "</p> 
                    <p><b>Talla de Camiseta: </b>$" . $total . ".00</p> 
                    <p><b>Estuve de acuerdo con los ToS y entiendo que el registro está incompleto hasta que se pague: </b>" . $cBox . "</p> 
                    <p><b>Método de Pago: </b>" . $pm . "</p> 
                ";

                                // Always set content-type when sending HTML email 
                                $headers = "MIME-Version: 1.0" . "\r\n";
                                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                // More headers 
                                $headers .= 'From: MBAR SysAdmin<' . $recipientEmail . '>' . "\r\n";

                                $headers .= 'Bcc: ' . $recipientEmail . "," . $bccEmail . "\r\n";

                                // Send email 
                                mail($to, $subject, $htmlContent, $headers);

                                $status = 'success';
                                $statusMsg = '¡Gracias! Su registro se inició y le ayudará con la planificación y preparación del evento. Se le ha enviado una copia de su formulario de registro por correo electrónico.<br><span class="fw-bold">Recuerde: su registro no estará completo hasta que se haya realizado el <a href="#payment-now">pago</a>.</span>';
                                $postData = '';

                                regFormData($total, $lang);
                            } else {
                                $statusMsg = 'La verificación de reCaptcha falló, inténtalo de nuevo.';
                            }
                        } else {
                            $statusMsg = 'Marque la casilla de verificación reCAPTCHA.';
                        }
                    } else {
                        $statusMsg = 'Por favor complete todos los campos obligatorios.';
                        if (!empty($_POST['beeName'])) {
                            $statusMsg = '¿Eres un bot?';
                        }
                    }
                }

                ?>


                <?php if (!empty($statusMsg)) { ?>
                    <div class="col-xl-8 col-lg-8 col-md-12 pt-4">
                        <div class="p-3 text-center text-bg-light hero-text-border" title="Online registration form message.">
                            <p class="mb-6 h5 status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                        </div>
                    </div>
                <?php } ?>

                <div class="col-xl-10 col-lg-10 col-md-12 py-4">

                    <form action="register-now.php" method="POST" class="needs-validation" id="myForm" aria-label="Formulario de inscripción" novalidate>

                        <fieldset class="text-bg-light pb-3 mb-3">
                            <legend>Informacion Personal</legend>
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <label for="beeName" aria-hidden="true" class="visually-hidden">Nombre del Girasol</label>
                                    <input type="text" name="beeName" id="beeName" style="display:none">

                                    <label for="firstName" class="reg-form-label">Primer nombre (requerido)</label>
                                    <input type="text" class="form-control" name="firstName" id="firstName" required>
                                    <div class="invalid-feedback">
                                        Requerido, por favor ingrese su nombre.
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="lastName" class="reg-form-label">Apellido o Inicial (requerido)</label>
                                    <input type="text" class="form-control" name="lastName" id="lastName" required>
                                    <div class="invalid-feedback">
                                        Requerido, por favor ingrese su apellido o inicial.
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="badgeName" class="reg-form-label">Nombre que aparecerá en la insignia</label>
                                    <input type="text" class="form-control" name="badgeName" id="badgeName">
                                    <div class="invalid-feedback">
                                        Opcional, ingrese su nombre para que aparezca en la insignia.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="myEmail" class="reg-form-label">Correo electronico (requerido)</label>
                                    <input type="email" class="form-control" name="myEmail" id="myEmail" required>
                                    <div class="invalid-feedback">
                                        Requerido, por favor ingrese su correo electrónico.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="myPhone" class="reg-form-label">Teléfono con código de área (xxx.xxx.xxxx)</label>
                                    <input type="tel" class="form-control" name="myPhone" id="myPhone" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$">
                                    <div class="invalid-feedback">
                                        Opcional, ingrese un número de teléfono válido.
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="myAddress" class="reg-form-label">Dirección de Envio</label>
                                    <input type="text" class="form-control" name="myAddress" id="myAddress">
                                    <div class="invalid-feedback">
                                        Opcional, ingrese su dirección.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="myCity" class="reg-form-label">Ciudad</label>
                                    <input type="text" class="form-control" name="myCity" id="myCity" placeholder="Monterey">
                                    <div class="invalid-feedback">
                                        Opcional, ingrese una ciudad.
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="myState" class="reg-form-label">Estado</label>
                                    <select class="form-select" name="myState" id="myState">
                                        <option selected disabled value="">Elegir...</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="DC">Distrito de Columbia</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawai</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Luisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Misisipí</option>
                                        <option value="MO">Misuri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">Nueva Hampshire</option>
                                        <option value="NJ">Nueva Jersey</option>
                                        <option value="NM">Nueva Mexico</option>
                                        <option value="NY">Nueva York</option>
                                        <option value="NC">Carolina del Norte</option>
                                        <option value="ND">Dakota del Norte</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregón</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">Carolina del Sur</option>
                                        <option value="SD">Dakota del Sur</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">Virginia del Oeste</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Opcional, seleccione su estado.
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="myZipcode" class="reg-form-label">Código postal</label>
                                    <input type="text" class="form-control" name="myZipcode" id="myZipcode">
                                    <div class="invalid-feedback">
                                        Opcional, ingrese su código postal.
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="text-bg-light pb-3 mb-3">
                            <legend>Información de Becas</legend>
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <label for="myFellowship" class="reg-form-label">Programa (requerido)</label>
                                    <select class="form-select" name="myFellowship" id="myFellowship" required>
                                        <option selected disabled value="">Elegir...</option>
                                        <option value="A.A.">A.A.</option>
                                        <option value="Al-Anon">Al-Anon</option>
                                        <option value="Double Winner">Ganador Doble</option>
                                        <option value="Other">Otro</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Requerido, por favor ingresa tu Beca
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <label for="myHomegroup" class="reg-form-label">Grupos en el Hogar</label>
                                    <input type="text" class="form-control" name="myHomegroup" id="myHomegroup">
                                    <div class="invalid-feedback">
                                        Opcional, ingrese su(s) Grupo(s) en el Hogar
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="text-bg-light pb-3 mb-3">
                            <legend>Inscripciones y Actividades</legend>
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <p class="h5">Registro (Requerido)</p>
                                    <span class="sr-only">(Utilice las teclas de flecha para hacer su elección)</span>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="early-registration" name="myRegistration" value="ebr" disabled required>
                                        <label class="form-check-label" for="early-registration">Inscripción Anticipada (Antes del 31 de Julio de 2024) - Cerrada</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input type="radio" class="form-check-input" id="normal-registration" name="myRegistration" value="after" checked required>
                                        <label class="form-check-label" for="normal-registration">Inscripción (Después del 31 de Julio de 2024): $50</label>
                                        <div class="invalid-feedback">
                                            Requerido.
                                        </div>
                                    </div>
                                    <ul>
                                        <li>El baile del sábado por la noche es gratuito con su inscripción paga.</li>
                                    </ul>
                                </div>

                                <div class="col-lg-7 pb-4">
                                    <p class="h5">Las opciones de comidas a la carta aún están abiertas y la preinscripción para el paquete de comidas Early Bird está cerrada actualmente.</p>
                                    <ul>
                                        <li>Desayuno y cena en la Iglesia Luterana Bethlehem, 800 Cass Street, Monterey
                                        </li>
                                        <li>La fiesta de helados se llevará a cabo en el Centro de conferencias en Stevenson Terrace
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-12">
                                    <p class="h5">Opciones de comidas a la carta: si prefiere comprar comidas individualmente, seleccione una de las siguientes opciones.</p>
                                </div>

                                <div class="col-lg-4">
                                    <label for="meetTheSpeakerDinner" class="reg-form-label"><strong>Cena para conocer al orador</strong> (sábado por la noche a las 5:00pm) - $25<br>Disponible para comprar hasta la fecha del evento</label>
                                    <select class="form-select" name="meetTheSpeakerDinner" id="meetTheSpeakerDinner" required>
                                        <option disabled value="">Elija...</option>
                                        <option value="yes">¡Sí, por favor!</option>
                                        <option value="no">No, gracias</option>
                                        <option selected value="undecided">Indeciso</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Obligatorio, seleccione una opción.
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <label for="roundupBreakfast" class="reg-form-label"><strong>Desayuno Round-Up</strong> (domingo de 8:00 a 9:30am) - $10<br>Disponible para comprar hasta la fecha del evento</label>
                                    <select class="form-select" name="roundupBreakfast" id="roundupBreakfast" required>
                                        <option disabled value="">Elija...</option>
                                        <option value="yes">¡Sí, por favor!</option>
                                        <option value="no">No, gracias</option>
                                        <option selected value="undecided">Indeciso</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Obligatorio, seleccione una opción.
                                    </div>
                                </div>

                                <div class="col-lg-4 pb-4">
                                    <label for="iceCreamSocial" class="reg-form-label"><strong>Ice Cream Social</strong> (domingo por la tarde de 15:00 a 16:00 h) - $5<br>¡Disponible para comprar hasta que se acabe el helado!</label>
                                    <select class="form-select" name="iceCreamSocial" id="iceCreamSocial" required>
                                        <option disabled value="">Elija...</option>
                                        <option value="yes">¡Sí, por favor!</option>
                                        <option value="no">No, gracias</option>
                                        <option selected value="undecided">Indeciso</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Obligatorio, seleccione una opción.
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label for="saturdayNightDance" class="reg-form-label">Baile del sábado por la noche en el centro de conferencias (GRATIS con inscripción paga o $5 en la puerta)</label>
                                    <select class="form-select" name="saturdayNightDance" id="saturdayNightDance">
                                        <option disabled value="">Elegir...</option>
                                        <option selected value="yes">¡Usaré mis zapatos de baile!</option>
                                        <option value="no">No bailo... LOL</option>
                                        <option value="undecided">Todavía estoy decidiendo</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Opcional, seleccione una opción.
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="helpingHandContribution" class="reg-form-label">Contribución a Helping Hand, considere hacer una contribución para garantizar que todos los que deseen asistir puedan hacerlo.</label>
                                    <select class="form-select" name="helpingHandContribution" id="helpingHandContribution">
                                        <option selected disabled value="">Elija...</option>
                                        <option value="5">$5</option>
                                        <option value="10">$10</option>
                                        <option value="20">$20</option>
                                        <option value="35">$35</option>
                                        <option value="45">$45</option>
                                        <option value="50">$50</option>
                                        <option value="100">$100</option>
                                        <option value="other">Otro</option>
                                        <option value="no thank you">No, gracias</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Opcional, ingrese su contribución.
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="text-bg-light pb-3 mb-3">
                            <legend>Artículos promocionales</legend>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <p class="h5">En la conferencia habrá disponibles camisetas conmemorativas de 2024.</p>
                                    <ul>
                                        <li>Cuestan $15 cada una y tenemos cantidades limitadas, desde la talla pequeña hasta la 3XL.
                                        </li>

                                        <li>¡MBAR! Use esta prenda favorita de MBAR para el gran evento o simplemente para pasar el rato en casa.
                                        </li>

                                        <li>100 % algodón, azul marino liso, logotipo blanco y dorado, ligero, corte clásico, dobladillo inferior y manga corta con doble costura
                                        </li>
                                    </ul>

                                </div>

                                <div class="col-md-4 pt-3">
                                    <img src="../images/2024_mbar_tee_shirt.png" class="img-fluid img-thumbnail" alt="Camiseta azul marino con logotipo dorado y blanco.">
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="text-bg-light pb-3 mb-3">
                            <legend>Condiciones de servicio</legend>
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="paymentCheckBox" id="paymentCheckBox" value="1" required>
                                        <label class="form-check-label" for="paymentCheckBox">
                                            Acepto los términos del servicio Y <strong>entiendo que el registro está incompleto hasta que se realice el pago.</strong>(Obligatorio)
                                            <span class="sr-only">(Presione la barra espaciadora para aceptar)</span>
                                        </label>
                                        <div class="invalid-feedback">
                                            Obligatorio: debe aceptar antes de enviar.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="paymentMethod" class="reg-form-label">Opciones de método de pago a continuación (obligatorio)</label>
                                    <select class="form-select" name="paymentMethod" id="paymentMethod" required>
                                        <option selected disabled value="">Elegir...</option>
                                        <option value="venmo">Venmo</option>
                                        <option value="cash">Efectivo</option>
                                        <option value="check">Cheque</option>
                                        <option value="paypal">PayPal</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Obligatorio, seleccione uno.
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="row justify-content-center">
                            <div class="col-md-12 mb-3">
                                <div class="g-recaptcha" data-sitekey=<?php echo getenv('g-site-key'); ?>></div>
                                <div id="reCaptcha-warning">
                                    <strong>Nota</strong>: El formulario se restablecerá si no se selecciona.
                                </div>
                            </div>

                            <div class="col-md-6 text-center mb-3">
                                <button type="submit" class="btn btn-primary" name="submit">Enviar formulario</button>
                            </div>

                            <div class="col-md-6 text-center mb-3">
                                <button type="reset" class="btn btn-primary" name="reset" value="reset" onclick="return resetFields();" aria-labelledby="reset">Restablecer formulario</button>
                                <div class="sr-only" id="reset" role="alert" aria-live="assertive" aria-atomic="true">
                                    <p>(Una ventana emergente confirmará el restablecimiento)</p>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </article>

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

                        <p>Puede pagar su inscripción en línea con <strong>cheque</strong> en lugar de hacerlo a través de Venmo o PayPal. Haga el cheque a nombre de MBAR y envíelo por correo a
                            <br><span class="text-uppercase">Monterey Bay Area Round Up</span>
                            <br>Attn: Naomi B.
                            <br>P.O. Box 1462
                            <br>Monterey, CA 93942
                        </p>
                        <p>Los códigos QR a continuación requieren las aplicaciones móviles.
                        </p>

                        <p><strong>Consejo útil</strong>: el código qr de PayPal le lleva a la pantalla de inicio de sesión. Después de iniciar sesión, haga clic en el ícono qrCode en la parte superior derecha, al lado del ícono de usuario, y luego escanee el qrCode nuevamente para ver el aviso de pago de MBAR. Si necesita ayuda para realizar un pago, comuníquese con nuestro <a href="mailto:<?php echo getenv('mbar-to-email') ?>" class="bb-link">Administrador del sistema</a>.
                        </p>

                        <div class="row">
                            <div class="col-sm-6 py-5">
                                <img src="../images/venmo-qrCode.png" class="img-fluid shadow-wrap" alt="Código QR de Venmo" title="Código QR de Venmo">
                                <p class="text-center pt-4"><?php echo getenv('mbar-venmo') ?></p>
                                <p class="text-center"><a href="https://venmo.com/code?user_id=2883666946555904351&created=1699031584.911354" class="bb-link" target="_blank" rel="noopener noreferrer" title="PayPal qrCode Link">Enlace del Código qr de Venmo<span class="sr-only">(Abre una nueva ventana)</span></a></p>
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
                            <h3 class="card-title mb-3">Descarga el Formulario de Inscripción</h3>
                            <p>A continuación se muestra el formulario de registro de MBAR 2024 y se puede devolver por correo postal o electrónico.
                            </p>
                            <p><span class="text-uppercase">Monterey Bay Area Round Up</span>
                                <br>Attn: Naomi B.
                                <br>P.O. Box 1462
                                <br>Monterey, CA 93942
                            </p>
                            <p>O envíe su formulario completo por correo electrónico a nuestro <a href="mailto:<?php echo getenv('mbar-reg-email') ?>" class="bb-link">Presidente de Registro</a>
                            </p>
                            <p><a class="btn btn-primary btn-sm" href="../pdf/formulario-registro-mbar-es.pdf"><img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF"> Formulario de Registro MBAR 2024<span class="sr-only">(Abrir pdf en el navegador)</span></a>
                            </p>
                            <p>Si tiene alguna pregunta, comuníquese con nuestro <a href="mailto:<?php echo getenv('mbar-chair-email') ?>" class="bb-link">Comité Directivo</a>
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