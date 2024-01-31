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
                    <a class="nav-link active" aria-current="page" href="index.php" aria-current="page">Hogar
                        <span class="visually-hidden">(actual)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-conferencia" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="registration.php">Registro</a>
                        <a class="dropdown-item" href="activities.php">Actividades</a>
                        <a class="dropdown-item" href="mbar_history.php">Historia del MBAR</a>
                        <a class="dropdown-item" href="memories.php">Recuerdos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-comités" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Comités</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="meetings.php">Reuniones</a>
                        <a class="dropdown-item" href="committees.php">Comités</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-próximos-eventos" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Próximos Eventos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="nav-link" href="upcoming_event.php">Noche de Bingo</a>
                        <a class="nav-link" href="logo_contest.php">Concurso de Logotipos</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacto</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-privacy" title="Cyber Security theme with a lock and white gradient.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="¡La preinscripción está abierta!">
                    <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Política de Privacidad</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-6 col-lg-6 col-md-12 pt-4">
                <div class="p-3 text-bg-light hero-text-border" title="">
                    <p class="mb-6 h4 text-dark">Política de Privacidad del Sitio Web de Monterey Bay Area Roundup</p>
                </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                <div class="p-3 text-bg-light hero-text-border" title="INTRODUCTION">
                    <p>FECHA EFECTIVA: <?php echo date("Y"); ?>
                        <br><br>
                        <strong>INTRODUCCIÓN.</strong>
                        <br>
                        montereybayarearoundup.org (en adelante "nosotros", "nosotros" o "Compañía") se toma muy en serio la privacidad del usuario porque sabemos que su privacidad en la web es muy importante para usted. Nos comprometemos a respetar los derechos de privacidad de nuestros clientes, visitantes y otros usuarios del sitio web de la empresa ("el Sitio"). Creamos esta Política de privacidad del sitio web ("Política de privacidad del sitio") para brindarle confianza al visitar y utilizar el Sitio, y para demostrar nuestro compromiso con las prácticas de información justas y la protección de la privacidad. Esta Política de privacidad del sitio solo se aplica al Sitio, y no a otros sitios web de terceros a los que pueda acceder desde el Sitio, cada uno de los cuales puede tener prácticas y políticas de recopilación, almacenamiento y uso de datos que difieren materialmente de esta. Política de privacidad del sitio. Si elige proporcionarnos información de identificación personal, la usaremos y la divulgaremos como se describe en esta Política de privacidad del sitio. Esta Política de privacidad del sitio se incorpora a nuestros Términos de uso por referencia. Este Sitio no está dirigido a niños de 13 años o menos. Por lo tanto, no recopilaremos intencionalmente información sobre ningún usuario menor de 13 años.
                        <br><br>
                        <strong>PRÁCTICAS DE RECOPILACIÓN DE INFORMACIÓN DEL SITIO.</strong>
                        <br>
                        Tipos de información recopilada:
                        <br>
                        (a) Datos de tráfico recopilados. Realizamos un seguimiento y recopilamos automáticamente las siguientes categorías de información cuando visita nuestro Sitio: (1) direcciones IP; (2) servidores de dominio; (3) tipos de computadoras que acceden al Sitio; y (4) tipos de navegadores web utilizados para acceder al Sitio (colectivamente "Datos de tráfico"). Los datos de tráfico son información anónima que no lo identifica personalmente pero que es útil con fines de marketing o para mejorar su experiencia en el Sitio. Podemos utilizar cookies y obtener ciertos tipos de información cuando su navegador web accede a montereybayarearoundup.org. Las "cookies" son pequeños fragmentos de información que su navegador almacena en el disco duro de su computadora. Nuestro sitio puede utilizar cookies para almacenar información pertinente del usuario durante una sesión para acelerar la navegación y realizar un seguimiento de los elementos. La parte de "ayuda" de la barra de herramientas de la mayoría de los navegadores le indicará cómo evitar que su navegador acepte nuevas cookies, cómo hacer que el navegador le notifique cuando reciba nuevas cookies y cómo desactivarlas por completo. Tenga en cuenta que si elige desactivar la función "cookie", su experiencia en el Sitio puede verse disminuida y algunas funciones pueden no funcionar como estaban previstas.
                        <br>
                        (b) Información personal recopilada. Para que pueda acceder a los servicios proporcionados en relación con el Sitio (el "Servicio"), le solicitamos que nos proporcione cierta información que lo identifique personalmente ("Información personal"). La Información personal incluye las siguientes categorías de información: (1) Datos de contacto (como su nombre, dirección postal, teléfono y dirección de correo electrónico); y (2) Datos financieros (como su número de cuenta o tarjeta de crédito). También podemos recopilar la identificación del minorista. Si se comunica con nosotros por correo electrónico o completa formularios en línea a través del Sitio, cualquier información proporcionada en dicha comunicación puede recopilarse como Información personal. EL CORREO ELECTRÓNICO QUE NOS ENVÍA NO ES NECESARIAMENTE SEGURO CONTRA LA INTERCEPCIÓN. SI DESEA COMUNICARNOS INFORMACIÓN CONFIDENCIAL, COMO INFORMACIÓN DE TARJETA DE CRÉDITO, CONTÁCTENOS A TRAVÉS DE UNO DE NUESTROS FORMULARIOS SEGUROS EN LÍNEA O POR CORREO O TELÉFONO, EN LUGAR DE CORREO ELECTRÓNICO.
                        <br><br>
                        <strong>USOS DE LA INFORMACIÓN RECOPILADA:</strong>
                        <br>
                        (a) Uso de la información por parte de la empresa. Utilizamos datos de contacto para enviarle información sobre nuestros servicios, enviarle boletines electrónicos o comunicarnos con usted cuando sea necesario. Utilizamos datos de tráfico para personalizar y adaptar su experiencia en el Sitio.
                        <br>
                        (b) Intercambio de información personal. Compartimos ciertas categorías de información que recopilamos de usted de la manera descrita en esta Política de privacidad del sitio. Compartimos datos de contacto con nuestros socios comerciales que nos ayudan a realizar servicios básicos (como almacenamiento de datos y seguridad) relacionados con nuestra operación del Sitio. Todos esos socios comerciales han acordado mantener los mismos estándares de seguridad y confidencialidad que le hemos prometido en esta Política de privacidad del sitio, y solo utilizarán sus datos de contacto para llevar a cabo sus obligaciones comerciales específicas con la Compañía. Si no desea que compartamos sus datos de contacto con nuestros socios comerciales que nos ayudan a realizar servicios principales relacionados con nuestra operación del Sitio, puede optar por no proporcionar dicha información personal, pero comprenda que dicha solicitud limita su capacidad. para aprovechar aquellas partes del Sitio que requieren dicha información.
                        <br>
                        (c) Su elección con respecto a la recopilación, uso y distribución de información personal. Puede optar por no proporcionarnos ninguna información personal. En tal caso, aún podrá acceder y utilizar gran parte del Sitio; sin embargo, no podrá acceder ni utilizar aquellas partes del Sitio que requieran su Información personal. Si no desea recibir información nuestra, <a href="contact.php" class="bb-link">CONTACTE CON ATENCIÓN AL CLIENTE</a>
                        <br><br>
                        <strong>CONFIDENCIALIDAD Y SEGURIDAD DE SU INFORMACIÓN PERSONAL.</strong>
                        <br>
                        Salvo que se disponga lo contrario en esta Política de privacidad del sitio, mantendremos su información personal privada y no la compartiremos con terceros, a menos que dicha divulgación sea necesaria para: (a) cumplir con una orden judicial u otro proceso legal; (b) proteger nuestros derechos o propiedad; o (c) hacer cumplir nuestros Términos y condiciones de uso. Nuestra política de Términos de uso se puede encontrar a continuación. Su información personal se almacena en servidores seguros a los que no pueden acceder terceros. Le brindamos la capacidad de transmitir su información personal a través de canales seguros y cifrados si utiliza un navegador web equipado de manera similar.
                        <br><br>
                        <strong>SU CAPACIDAD DE ACCEDER, ACTUALIZAR Y CORREGIR SU INFORMACIÓN PERSONAL.</strong>
                        <br>
                        Mantenemos un procedimiento para ayudarlo a confirmar que su información personal permanece correcta y actualizada. Comuníquese con nosotros al <a href="contact.php" class="bb-link">CONTACTE CON ATENCIÓN AL CLIENTE</a> o por correo o por teléfono para (a) solicitar una revisión y actualizar su información personal que ya hemos recopilado. ; (b) elegir si desea o no que le enviemos información sobre nuestra empresa; y/o (c) elegir si desea o no que compartamos su información personal con nuestros socios comerciales que nos ayudan a realizar servicios principales relacionados con nuestra operación del Sitio.
                        <br><br>
                        <strong>SEGURIDAD DEL CORREO ELECTRÓNICO.</strong>
                        <br>
                        EL CORREO ELECTRÓNICO QUE NOS ENVÍA NO ES NECESARIAMENTE SEGURO CONTRA LA INTERCEPCIÓN. SI DESEA COMUNICARNOS INFORMACIÓN CONFIDENCIAL, COMO INFORMACIÓN DE NÚMEROS DE TARJETAS DE CRÉDITO, CONTÁCTENOS A TRAVÉS DE UNO DE NUESTROS FORMULARIOS SEGUROS EN LÍNEA O POR CORREO O TELÉFONO, EN LUGAR DE CORREO ELECTRÓNICO.
                        <br><br>
                        <strong>INFORMACIÓN PERDIDA O ROBADA.</strong>
                        <br>
                        Debe notificarnos de inmediato si su tarjeta de crédito, nombre de usuario o contraseña se pierde, le roban o se utiliza sin permiso. En tal caso, eliminaremos ese número de tarjeta de crédito, nombre de usuario o contraseña de su cuenta y actualizaremos nuestros registros en consecuencia.
                        <br><br>
                        <strong>SITIOS AFILIADOS.</strong>
                        <br>
                        El Sitio contiene enlaces a otros sitios web. No somos responsables de las prácticas de privacidad ni del contenido de dichos sitios web. No tenemos control sobre dichos sitios web y usted debe tener cuidado al decidir divulgar su información personal en otros sitios web.
                        <br><br>
                        <strong>ACTUALIZACIONES Y CAMBIOS EN LA POLÍTICA DE PRIVACIDAD DEL SITIO.</strong>
                        <br>
                        Nos reservamos el derecho, en cualquier momento y sin previo aviso, de agregar, cambiar, actualizar o modificar esta Política de Privacidad del Sitio, simplemente publicando dicho cambio, actualización o modificación en el Sitio y sin previo aviso. Cualquier cambio, actualización o modificación entrará en vigor inmediatamente después de su publicación en el Sitio.
                        <br><br>
                        <strong>CONTÁCTENOS.</strong>
                        <br>
                        Para obtener más información sobre esta Política de privacidad del sitio o el Sitio, <a href="contact.php" class="bb-link">CONTACTE CON EL SERVICIO DE ATENCIÓN AL CLIENTE</a> o en la dirección anterior:<br>
                    </p>
                </div>
            </div>

            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border" title="POLÍTICAS">
                    <strong>TÉRMINOS DE USO Y POLÍTICAS.</strong>
                    <br><br>
                    General montereybayarearoundup.org ('SITIO o MBAR ') actúa como un mercado, un intermediario entre compradores y vendedores de entradas ("VENDEDORES DE ENTRADAS") para facilitar la compra y venta de entradas para eventos y, como tal, no participa directamente en la venta de entradas. transacción de venta entre los compradores y los VENDEDORES DE ENTRADAS. TODAS LAS VENTAS SON FINALES. Como los boletos vendidos a través del SITIO a menudo se obtienen a través del mercado secundario y los precios los determina el vendedor de boletos individual, los precios de los boletos pueden estar por encima o por debajo del valor nominal. Los boletos vendidos a través del SITIO son de un tercero; por lo tanto, el nombre del comprador no estará impreso en los boletos. Tenga en cuenta que el nombre que figura en las entradas no afecta la capacidad del comprador para acceder al evento. Al usar o visitar este SITIO o comprar boletos de cualquier manera en el SITIO, el USUARIO acepta expresamente cumplir y estar sujeto a estos Términos y Políticas, así como a todas las leyes, ordenanzas y regulaciones aplicables.
                    <br>
                    TODAS LAS VENTAS SON FINALES; no hay cancelaciones, devoluciones ni cambios.
                    <br>
                    SI SE CANCELA UN EVENTO, EL USUARIO recibirá un reembolso completo menos los gastos de envío si las entradas ya han sido entregadas.
                    <br>
                    SI UN EVENTO SE POSPONE O REPROGRAMA y los boletos originales son válidos para ingresar en el momento del evento reprogramado, el pedido del USUARIO no calificará para un reembolso.
                    <br>
                    Los pedidos confirmados se pueden completar con boletos comparables o mejorados si los boletos originales ya no están disponibles.
                    <br>
                    Todos los pedidos realizados en el SITIO o en el centro de contacto con el cliente deben ser confirmados por el vendedor respectivo antes de que la garantía del comprador entre en vigor.
                    <br>
                    Nuestra garantía al comprador prevé un reembolso completo en el improbable caso de que el USUARIO no reciba entradas válidas a tiempo para asistir al evento.
                    <br>
                    Las siguientes son las reglas ("TÉRMINOS") que rigen el uso del SITIO por parte de cualquier usuario del SITIO ("USUARIO"). Al usar o visitar el SITIO, el USUARIO acepta expresamente estar sujeto a estos TÉRMINOS y seguir estos TÉRMINOS y todas las leyes y regulaciones aplicables que rigen el SITIO. El SITIO se reserva el derecho de cambiar estos TÉRMINOS en cualquier momento, con vigencia inmediata después de su publicación en el SITIO. Si el USUARIO viola estos TÉRMINOS, el SITIO puede cancelar el acceso del USUARIO al SITIO, prohibir al USUARIO el uso futuro del SITIO, cancelar el pedido de boletos del USUARIO y/o tomar las acciones legales apropiadas contra el USUARIO.
                    <br>
                    Todas las ventas son definitivas YA que los boletos son un artículo único y no reemplazable, no hay reembolsos, cambios ni cancelaciones. Si un evento se pospone o reprograma, se aceptarán boletos para la fecha reprogramada. Por lo general, no será necesario emitir billetes nuevos; En el raro caso de que se necesiten nuevos boletos, MBAR se comunicará con el USUARIO.
                    <br>
                    Si un evento se cancela sin una fecha reprogramada, el USUARIO deberá comunicarse con el VENDEDOR DE BOLETOS que cumple con el pedido del USUARIO (en adelante conocido como 'CUMPLIDOR') para obtener un reembolso. El CUMPLIMIENTO podrá exigir al USUARIO que devuelva los billetes suministrados a su cargo antes de recibir cualquier reembolso al que tenga derecho el USUARIO debido a una cancelación. El SITIO no es responsable de proporcionar o garantizar este reembolso para el USUARIO. Los gastos de envío y manipulación no son reembolsables. Los reembolsos se procesarán en la misma moneda que el pedido original. Los cargos de conversión, incluidos, entre otros, los emitidos por el banco del USUARIO, si los hubiera, no están cubiertos por el SITIO ni el Realizador. Ni el SITIO ni el CUMPLIDOR emitirán cambios o reembolsos después de que se haya realizado una compra o por boletos perdidos, robados, dañados o destruidos. Cuando el USUARIO reciba entradas, deberá guardarlas en un lugar seguro. Tenga en cuenta que la luz solar directa o el calor pueden dañar los boletos.
                    <br><br>
                    <strong>DISPONIBILIDAD DE ENTRADAS.</strong>
                    <br>
                    El SITIO no puede garantizar ni garantiza la disponibilidad de boletos hasta que el USUARIO esté en posesión de sus boletos. Generalmente, todos los listados de boletos en el SITIO son un conjunto único de boletos de un VENDEDOR DE BOLETOS individual. Algunos listados en el SITIO pueden ser solo representaciones de boletos disponibles o una oferta del SITIO para obtener boletos y no ubicaciones reales de asientos o boletos disponibles actualmente.
                    <br>
                    Ocasionalmente, es posible que los boletos solicitados ya no estén disponibles al precio o en la cantidad solicitada originalmente en el momento de recibir el pedido. Si hay ubicaciones de asientos equivalentes o mejores disponibles al mismo precio, el VENDEDOR DE BOLETOS completará el pedido con ubicaciones de asientos alternativas. Si no hay alternativas disponibles, no se realizará ningún cargo en la tarjeta de crédito del USUARIO o se reembolsará el monto total y se notificará al USUARIO que su solicitud ha sido rechazada.
                    <br>
                    Los pedidos realizados a través del SITIO serán gestionados por uno de los VENDEDORES DE BOLETOS participantes de la red del SITIO. La información de contacto del CUMPLIDOR se proporcionará al USUARIO al finalizar el proceso de compra. Si esta información se pierde, el USUARIO puede <a href="contact.php" class="bb-link">CONTACTAR CON ATENCIÓN AL CLIENTE</a>
                    para recuperar información sobre el pedido. El USUARIO debe ingresar cuidadosamente toda la información requerida al enviar un pedido. El USUARIO es responsable de cualquier error cometido al ingresar su información, los errores pueden resultar en problemas como un retraso en el procesamiento del pedido o en la entrega de boletos o en la cancelación del pedido.
                    <br><br>
                    <strong>PRECIO.</strong>
                    <br>
                    Todos los precios están en dólares estadounidenses (USD) a menos que se indique específicamente lo contrario. El SITIO no puede confirmar el precio de ningún producto o servicio comprado en el SITIO hasta que el USUARIO complete un pedido. A pesar de los mejores esfuerzos del SITIO, es posible que un pequeño número de productos y servicios enumerados en el SITIO tengan un precio incorrecto. Si el CUMPLIMIENTO descubre que el precio correcto real es más alto que el precio indicado, el CUMPLIMIENTO completará el pedido al precio original indicado, se comunicará con el USUARIO para informarle sobre el precio diferente con una opción de compra, o cancelará el pedido del USUARIO y notificará al USUARIO de dicha cancelación.
                    <br><br>
                    <strong>HORARIO DE TARIFAS Y CARGOS.</strong>
                    <br>
                    El precio cobrado a la tarjeta de crédito del USUARIO más allá del precio de los billetes individuales incluirá las siguientes tasas y cargos:
                    <br>
                    Tarifa de Servicio: Costo por boleto asociado con la operación del SITIO, operación del centro de atención al cliente, obtención de boletos en nombre del USUARIO y otros costos asociados con el cumplimiento de la solicitud de boleto del USUARIO.
                    <br>
                    Entrega: Costos asociados con el Método de Entrega elegido por el USUARIO y la disposición del SITIO de la entrega del boleto del USUARIO por parte del CUMPLIDOR.
                    <br>
                    Total: Monto total cobrado al USUARIO, incluyendo el precio de cada boleto establecido por el CUMPLIMIENTO, Tarifa de Servicio y Entrega.
                    <br><br>
                    <strong>IMPUESTOS.</strong>
                    <br>
                    VENDEDOR DE BOLETOS es responsable de mantenerse al tanto de todos los cambios en los requisitos y montos de retención de impuestos en las diversas jurisdicciones fiscales donde VENDEDOR DE BOLETOS vende boletos y de determinar si se deben pagar impuestos por los boletos vendidos y, excepto en los estados para los cuales el SITIO tiene informó al VENDEDOR DE BOLETOS que el SITIO recaudará ciertos impuestos, para recaudar y remitir dichos impuestos de acuerdo con la ley aplicable. Excepto en los estados para los cuales el SITIO ha informado al VENDEDOR DE BOLETOS que el SITIO agregará impuestos al cálculo de pago, el VENDEDOR DE BOLETOS incluirá todos los impuestos aplicables sobre ventas, uso, impuestos especiales, servicios y otros en el precio del boleto. EL VENDEDOR DE BOLETOS proporcionará al SITIO cualquier información que el SITIO requiera para permitir que el SITIO informe información sobre los pagos que el SITIO ha realizado al VENDEDOR DE BOLETOS a las autoridades fiscales pertinentes, incluidos, entre otros, el número de identificación del empleador, el número de seguro social o el número de identificación fiscal y el VENDEDOR DE BOLETOS. autoriza al SITIO a divulgar esa información a las autoridades fiscales pertinentes.
                    <br><br>
                    <strong>PAGO. </strong>
                    <br>
                    Plataformas de pago de terceros (Paypal, ApplePay, etc.).
                    <br>
                    Si el USUARIO elige completar una transacción en el SITIO utilizando una Plataforma de pago de terceros, dichos servicios de terceros pueden estar sujetos a políticas, términos de uso o tarifas independientes de dichos terceros y el USUARIO acepta los mismos al completar la transacción utilizando el Tercero. Plataforma de Pago de Partidos. El nombre en la transacción de la cuenta de la Plataforma de pago de terceros del USUARIO será "My Ticket Tracker". Si el USUARIO tiene alguna pregunta sobre la transacción en la cuenta de la Plataforma de pago de terceros, el USUARIO debe comunicarse con <a href="contact.php" class="bb-link">CONTACTAR CON ATENCIÓN AL CLIENTE</a>.
                    <br><br>
                    <strong>CARGOS EN DISPUTA.</strong>
                    <br>
                    Al realizar un pedido, el USUARIO autoriza al SITIO a cobrar al método de pago del USUARIO el monto total, que incluye el precio del boleto, las tarifas de servicio y entrega, y cualquier otro servicio opcional que el USUARIO acepte comprar. Si el USUARIO cuestiona un cargo y se determina que el cargo fue válido y no el resultado de una tarjeta de crédito u otro fraude de pago, el SITIO tiene derecho a solicitar el pago, incluidas todas las tarifas asociadas, por cualquier medio que el SITIO considere apropiado, incluidos, entre otros. al uso de agencias de cobranza y recursos legales. El SITIO puede mitigar sus daños volviendo a poner en venta los boletos que son objeto de la disputa de pago. El USUARIO puede perder el acceso a cualquiera o todos los boletos comprados si el USUARIO presenta una disputa con su emisor.
                    <br><br>
                    <strong>LISTADOS DE EVENTOS.</strong>
                    <br>
                    El SITIO no garantiza la exactitud de la información del evento en el SITIO, incluidos, entre otros, el nombre del evento, la ubicación o el lugar del evento, la hora de inicio del evento o la fecha del evento. Los horarios de inicio del evento están sujetos a cambios sin previo aviso. Los cambios a un evento, incluidos, entre otros, la ubicación o el lugar del evento, la hora de inicio del evento, la fecha del evento, la lista de artistas, el tipo de presentación, la duración del evento y los servicios incluidos en un paquete de boletos, se pueden realizar a discreción del lugar, de la otra parte. responsable del evento, cada uno de los cuales no está afiliado al SITIO y el SITIO no tiene control sobre dichos cambios, ni puede ser responsable de dichos cambios. El USUARIO se compromete a visitar el sitio web del para conocer si ha habido algún ajuste en el horario del evento.
                    <br><br>
                    <strong>POLÍTICA DE COMPORTAMIENTO DEL TITULAR DE BOLETOS.</strong>
                    <br>
                    El USUARIO se compromete a respetar todas las normas y políticas del recinto donde se celebre el evento en materia de conducta y comportamiento. En caso de que el USUARIO sea expulsado del evento o se le niegue la entrada por no cumplir con las reglas y políticas del lugar, el USUARIO estará sujeto a todas las multas aplicables y gastos legales o de otro tipo asociados con la expulsión. Además, todos los costos asociados con la compra de entradas para el evento no serán reembolsables. Además, si la expulsión resulta en la pérdida del derecho del VENDEDOR DE BOLETOS a usar cualquier otro boleto, incluidos los abonos de temporada en ese lugar, o el derecho a comprar otros boletos en ese lugar, el USUARIO será responsable de todos los costos, gastos, y pérdidas asociadas con dicha pérdida, incluidos, entre otros, todos los daños directos, indirectos, indirectos, consecuentes, ejemplares, incidentales, especiales o punitivos, incluido el lucro cesante.
                    <br><br>
                    <strong>USO FRAUDULENTO.</strong>
                    <br>
                    Para proteger al USUARIO del fraude, es posible que se le solicite al USUARIO que proporcione una prueba de identidad adicional en cualquier pedido. La prueba de identidad puede incluir, entre otros, una autorización de tarjeta de crédito firmada y/o fotocopias de documentos públicos como una licencia de conducir estatal o un pasaporte federal.
                    <br><br>
                    <strong>ENTREGA.</strong>
                    <br>
                    Todos los pedidos se entregan al USUARIO utilizando el método de entrega elegido para el pedido. En algunos casos, el envío seleccionado por un USUARIO debe actualizarse sin previo aviso al USUARIO y se le cobrará al USUARIO el envío actualizado. La mayoría de los pedidos se envían el mismo día hábil en que se reciben. Los pedidos realizados fuera del horario comercial podrán enviarse el siguiente día hábil. Los envíos pueden requerir firma directa en el punto de entrega. El USUARIO es responsable de proporcionar la dirección de envío correcta al momento de la compra. El SITIO y el VENDEDOR no proporcionarán reembolsos si el USUARIO proporciona información de envío incorrecta. El USUARIO debe comunicarse con el VENDEDOR o con el servicio de atención al cliente del SITIO si el USUARIO no ha recibido un correo electrónico con información de seguimiento. Al realizar un pedido, el USUARIO comprende y acepta los siguientes términos de envío.
                    <br><br>
                    <strong>ENVÍO RETRASADO.</strong>
                    <br>
                    Las entradas para eventos generalmente se entregan según el método de entrega seleccionado al momento de pagar las entradas. La mayoría de los boletos se envían el mismo día hábil en que se recibe el pedido o, si se realiza un pedido fuera del horario comercial, los boletos pueden enviarse el siguiente día hábil. Sin embargo, es posible que las entradas no siempre estén disponibles para entrega inmediata, especialmente en los casos en que las entradas se hayan comprado con mucha antelación al evento en cuestión o para ciertos eventos, incluidos, entre otros, los siguientes: todos los pedidos fuera de temporada para ligas deportivas profesionales , conciertos y eventos en Las Vegas y otros Nevada; la entrega también puede retrasarse debido a las acciones del artista, el lugar o el equipo. Si bien la mayoría de los boletos se entregan dentro de los tres días hábiles posteriores al método de entrega elegido, esto no implica una fecha de entrega garantizada. En estas situaciones, los boletos pueden estar marcados con una fecha de envío estimada. Al USUARIO se le proporcionará información de acceso a la cuenta que le permitirá ver el estado de su pedido, boletos e información de seguimiento, si está disponible, después de la compra. En el caso de que la información de seguimiento no esté disponible, el USUARIO podrá comunicarse con un representante del CUMPLIMIENTO para obtener información de envío o una fecha de entrega estimada. Los boletos se enviarán cuando estén disponibles y la elección de un método de entrega acelerada no garantiza que los boletos se envíen de inmediato. El USUARIO deberá consultar las notas del pedido para conocer la fecha de entrega estimada.
                    <br><br>
                    <strong>VERIFICACIÓN DE ENTREGA.</strong>
                    <br>
                    Si el USUARIO especifica una dirección de envío que no permite la Verificación de Entrega, como un apartado postal, es posible que el USUARIO deba pagar una tarifa adicional para cubrir los riesgos adicionales asociados con este tipo de pedido. Si se utiliza dicha dirección de envío, el CUMPLIMIENTO, a su discreción, se comunicará con el USUARIO sobre la tarifa adicional antes del envío o cancelará el pedido del USUARIO y notificará al USUARIO de dicha cancelación. Los envíos pueden requerir firma directa en el punto de entrega. Una vez que FULFILLER haya enviado los boletos, es responsabilidad del USUARIO recibir el paquete. En caso de que el paquete sea rechazado, no entregado o devuelto, FULFILLER no emitirá reembolsos ni créditos según el término Todas las ventas son finales de estos Términos. Si un paquete ha sido devuelto y debe ser reenviado por el CUMPLIDOR, es responsabilidad del USUARIO comunicarse con el CUMPLIDOR para conocer las opciones de reenvío. El USUARIO entiende que se pueden cobrar tarifas de envío adicionales antes del reenvío.
                    <br><br>
                    <strong>ENTREGA LOCAL.</strong>
                    <br>
                    El USUARIO deberá recoger las entradas en el lugar designado facilitado al USUARIO, que estará situado cerca del recinto. El USUARIO deberá traer una identificación emitida por el gobierno para poder reclamar los boletos y es posible que se le solicite que presente la tarjeta de crédito utilizada en el momento de la compra como verificación adicional. Si el USUARIO encuentra un problema en el lugar de entrega local, el USUARIO debe comunicarse con FULFILLER para obtener ayuda. Ni el SITIO ni el CUMPLIMIENTO emitirán reembolsos si el USUARIO no proporciona una identificación válida emitida por el gobierno u otra documentación requerida para la liberación de boletos o si el USUARIO no recoge los boletos en el lugar designado.
                    <br><br>
                    <strong>OPCIÓN DE LLAMADA VOLUNTARIA.</strong>
                    <br>
                    El USUARIO deberá recoger las entradas en la taquilla del recinto aproximadamente una hora antes del inicio previsto del evento. El USUARIO deberá traer una identificación emitida por el gobierno para poder reclamar los boletos. Si el USUARIO encuentra un problema en la taquilla, el USUARIO debe comunicarse con FULFILLER para obtener ayuda.
                    <br><br>
                    <strong>DENEGACIÓN DE ENTRADA A UN EVENTO.</strong>
                    <br>
                    Si el USUARIO tiene dificultades para usar los boletos para ingresar al evento en el lugar, el USUARIO debe comunicarse con el SITIO de inmediato llamando al (866) 459-9233. Si el SITIO no puede resolver el asunto y el lugar le niega la entrada al USUARIO, el USUARIO puede ser elegible para un reembolso. Para ser elegible para un reembolso, el USUARIO debe obtener prueba escrita del lugar que demuestre que al USUARIO se le negó la entrada al evento y enviar esa prueba por correo electrónico junto con una descripción de las circunstancias al SITIO a customersupport@ticketfaster.com dentro de los diez (10) días posteriores a la evento.
                    <br>
                    Si el SITIO recibe el correo electrónico con prueba escrita del lugar y la descripción del USUARIO de las circunstancias de la entrada denegada dentro de los diez (10) días posteriores al evento, el SITIO investigará el reclamo del USUARIO. Si el SITIO, a su discreción razonable, determina que al USUARIO se le negó la entrada, el USUARIO recibirá un reembolso del costo de los boletos y todas las tarifas y cargos de envío. El reembolso será el único recurso del USUARIO ante la entrada denegada.
                    <br><br>
                    <strong>USO PERMITIDO.</strong>
                    <br>
                    El USUARIO acepta que el USUARIO solo está autorizado a visitar, ver y conservar una copia de las páginas de este SITIO para su uso personal, y que el USUARIO no duplicará, descargará, publicará, modificará ni distribuirá de otro modo el material de este SITIO para cualquier propósito que no sea revisar información promocional y de eventos, para uso personal, o comprar boletos o mercancías para uso personal del USUARIO, a menos que el SITIO autorice específicamente lo contrario para hacerlo. El USUARIO no puede utilizar ningún robot, araña, raspador, lector fuera de línea, aplicación de búsqueda/recuperación de sitios u otro dispositivo, herramienta o proceso manual o automático para recuperar o de cualquier manera reproducir, eludir o interferir con el Sitio o su contenido, ni El USUARIO puede utilizar cualquier software o sistema informático automatizado para buscar, reservar, comprar u obtener boletos del SITIO. El USUARIO no puede enviar ningún software u otros materiales que contengan virus, gusanos, caballos de Troya, defectos, bombas de fecha, bombas de tiempo u otros elementos de naturaleza destructiva. El contenido y el software de este SITIO son propiedad del SITIO y/o de sus proveedores y están protegidos por las leyes de derechos de autor de EE. UU. e internacionales.
                    <br><br>
                    <strong>ENLACES.</strong>
                    <br>
                    El SITIO puede producir automáticamente resultados de búsqueda que hagan referencia o enlacen a sitios web de terceros en Internet. SITE no tiene control sobre estos sitios ni el contenido que contienen. El SITIO no puede garantizar, declarar o garantizar que el contenido de estos sitios de terceros sea preciso, legal y/o inofensivo. El SITIO no respalda el contenido de ningún sitio de terceros, ni garantiza que no contendrán virus ni afectarán de otro modo los sistemas informáticos del USUARIO. Al utilizar el SITIO para buscar o vincular a otro sitio, el USUARIO acepta y comprende que el USUARIO no puede presentar ningún reclamo contra el SITIO por daños o pérdidas, cualesquiera que sean, que resulten del uso del SITIO para obtener resultados de búsqueda o para vincularse a otro sitio. . Si el USUARIO experimenta un problema con un enlace del SITIO, notifique al SITIO a customersupport@ticketfaster.com y el SITIO investigará el reclamo del USUARIO y tomará las medidas que considere apropiadas a su entera discreción.
                    <br><br>
                    <strong>VIOLACIÓN DE LOS TÉRMINOS.</strong>
                    <br>
                    El SITIO, a su exclusivo criterio y sin previo aviso, puede cancelar el acceso del USUARIO al SITIO, cancelar el pedido de boletos del USUARIO o ejercer cualquier otro recurso disponible. El USUARIO acepta que los daños monetarios pueden no proporcionar un remedio suficiente al SITIO por violaciones de estos términos y condiciones y el USUARIO acepta medidas cautelares u otras medidas equitativas por dichas violaciones. El SITIO puede divulgar información del USUARIO por ministerio de la ley, si la información es necesaria para abordar una actividad ilegal o dañina contra el SITIO. El SITIO no está obligado a proporcionar ningún reembolso al USUARIO si el USUARIO es cancelado como USUARIO de este SITIO.
                    <br><br>
                    <strong>INFORMACIÓN SOBRE PROPIEDAD INTELECTUAL.</strong>
                    <br>
                    A los efectos de estos TÉRMINOS, 'CONTENIDO' se define como cualquier información, comunicaciones, software, fotografías, videos, gráficos, música, sonidos y otros materiales y servicios que los USUARIOS puedan ver en el sitio. Esto incluye, entre otros, foros de mensajes, chat y otro contenido original. Al aceptar estos TÉRMINOS, el USUARIO reconoce y acepta que todo el CONTENIDO presentado al USUARIO en este sitio está protegido por derechos de autor, marcas comerciales, marcas de servicio, patentes u otros derechos y leyes de propiedad, y es propiedad exclusiva del SITIO y/o sus afiliados. El USUARIO sólo puede utilizar el CONTENIDO según lo autorice expresamente por escrito el SITIO o el proveedor específico del CONTENIDO. Excepto por una única copia realizada únicamente para uso personal, el USUARIO no puede copiar, reproducir, modificar, volver a publicar, cargar, publicar, transmitir o distribuir ningún documento o información de este sitio de ninguna forma ni por ningún medio sin el permiso previo por escrito del SITIO. o el proveedor de CONTENIDO específico, y el USUARIO es el único responsable de obtener permiso antes de reutilizar cualquier material protegido por derechos de autor que esté disponible en este sitio. Cualquier uso no autorizado de los materiales que aparecen en este sitio puede violar los derechos de autor, las marcas comerciales y otras leyes aplicables y podría dar lugar a sanciones penales o civiles. Ni el SITIO ni ninguno de sus afiliados garantizan ni declaran que el uso por parte del USUARIO de los materiales mostrados u obtenidos a través de este sitio no infringirá los derechos de terceros. Todas las demás marcas comerciales o marcas de servicio son propiedad de sus respectivos dueños. Nada en estos TÉRMINOS otorga al USUARIO ningún derecho a utilizar ninguna marca comercial, marca de servicio, logotipo y/o el nombre del SITIO o cualquiera de sus afiliados.
                    <br>
                    El SITIO se reserva el derecho de cancelar los privilegios de cualquier USUARIO que utilice este SITIO para transmitir o recibir ilegalmente material protegido por derechos de autor sin una licencia o consentimiento expreso, defensa válida o exención de uso legítimo para hacerlo. Después de la notificación adecuada por parte del titular de los derechos de autor o su agente hacia nosotros, y la confirmación mediante orden judicial o la admisión por parte del USUARIO de que ha utilizado este SITIO como instrumento de infracción ilegal, el SITIO rescindirá los derechos del USUARIO infractor para usar y/o acceder a este sitio. El SITIO puede, también a su exclusivo criterio, decidir rescindir los derechos de un USUARIO a usar o acceder al SITIO antes de ese momento si el SITIO cree que se ha producido la supuesta infracción.
                    <br><br>
                    <strong>DESCARGOS DE RESPONSABILIDAD.</strong>
                    <br>
                    EL SITIO NO OFRECE GARANTÍAS DE QUE ESTARÁ LIBRE DE ERRORES, NI INTERRUMPIDA O QUE PROPORCIONARÁ RESULTADOS ESPECÍFICOS DEL USO DEL SITIO O DE CUALQUIER CONTENIDO, BÚSQUEDA O ENLACE DEL SITIO. EL SITIO Y EL CONTENIDO DEL SITIO SE ENTREGAN "TAL CUAL" Y "SEGÚN DISPONIBILIDAD". EL SITIO NO GARANTIZA QUE LOS ARCHIVOS A LOS QUE EL USUARIO ACCEDE O DESCARGA DEL SITIO ESTARÁN LIBRES DE VIRUS, CONTAMINACIÓN O CARACTERÍSTICAS DESTRUCTIVAS. EL SITIO RENUNCIA A TODAS LAS GARANTÍAS, EXPRESAS O IMPLÍCITAS, INCLUYENDO TAMBIÉN CUALQUIER GARANTÍA IMPLÍCITA DE COMERCIABILIDAD E IDONEIDAD PARA UN PROPÓSITO PARTICULAR. EL SITIO NO SERÁ RESPONSABLE DE NINGÚN DAÑO DE NINGÚN TIPO QUE SURJA DEL USO DE ESTE SITIO, INCLUYENDO, SIN LIMITACIÓN, DAÑOS DIRECTOS, INDIRECTOS, VICARIOS, INCIDENTALES, ESPECIALES, PUNITIVOS, PÉRDIDA DE NEGOCIO O PÉRDIDA DE GANANCIAS O DAÑOS CONSECUENTES, YA SEA BASADOS EN UN INCUMPLIMIENTO DE CONTRATO, INCUMPLIMIENTO DE GARANTÍA, AGRAVIO, NEGLIGENCIA, RESPONSABILIDAD DEL PRODUCTO O DE OTRA MANERA, INCLUSO SI SE ADVIERTE DE LA POSIBILIDAD DE DICHO DAÑO.
                    <br>
                    EL SITIO RENUNCIA A TODA RESPONSABILIDAD POR LOS ACTOS, OMISIONES Y CONDUCTA DE TERCEROS USUARIOS, USUARIOS DEL SITIO, ANUNCIANTES Y/O PATROCINADORES DEL SITIO, EN RELACIÓN CON EL SERVICIO DEL SITIO O RELACIONADOS DE OTRA MANERA CON EL USO DEL SITIO Y/O EL SERVICIO DEL SITIO. EL SITIO NO ES RESPONSABLE DE LOS PRODUCTOS, SERVICIOS, ACCIONES O INCUMPLIMIENTO DE ACTUACIÓN DE CUALQUIER AGENTE DE BOLETOS, LUGAR, ARTISTA (INCLUYENDO, PERO NO LIMITADO A SU PRESENTACIÓN, INCUMPLIMIENTO DE REALIZACIÓN O MODIFICACIÓN DE LA PRESENTACIÓN O EVENTO DE CUALQUIER MANERA), PROMOTOR O OTRO TERCERO EN RELACIÓN CON O REFERIDO EN EL SITIO.
                    <br><br>
                    <strong>LIMITACIÓN DE RESPONSABILIDAD.</strong>
                    <br>
                    El USUARIO reconoce que el SITIO es un lugar que permite a las personas comprar y vender entradas para eventos. Los listados del inventario de entradas en el SITIO son proporcionados por un tercero ("PROVEEDOR"). Ni el SITIO ni el PROVEEDOR participan en la transacción real entre compradores y vendedores. Si bien el SITIO y el PROVEEDOR pueden ayudar a facilitar la resolución de disputas, ni el SITIO ni el PROVEEDOR tienen control sobre el contenido de los boletos enumerados en el SITIO, la veracidad o exactitud de dichos listados, la capacidad del CUMPLIMIENTO para vender boletos, o que el USUARIO y el CUMPLIMIENTO realmente completará una transacción. Independientemente de esta disposición, si se determina que el SITIO o el PROVEEDOR son responsables, la responsabilidad del SITIO o del PROVEEDOR ante el USUARIO o cualquier tercero se limita al mayor de (a) cualquier monto adeudado según la garantía limitada del SITIO cuando corresponda, (b) el monto de tarifas en disputa que no excedan las tarifas totales de la transacción, o (c) $100.
                    <br>
                    Excepto en jurisdicciones donde dichas disposiciones están restringidas, en ningún caso el SITIO o el PROVEEDOR serán responsables ante el USUARIO por daños indirectos, indirectos, consecuentes, ejemplares, incidentales, especiales o punitivos, incluida la pérdida de beneficios, incluso si el SITIO y el PROVEEDOR han sido informados de la posibilidad de tales daños. El USUARIO acepta además que el remedio máximo disponible en cualquier reclamo exitoso es la mayor de las opciones enumeradas en el párrafo anterior.
                    <br><br>
                    <strong>INDEMNIZACIÓN.</strong>
                    <br>
                    El USUARIO acepta indemnizar y eximir de responsabilidad al SITIO, sus subsidiarias, afiliados, funcionarios, agentes y otros socios y empleados de cualquier pérdida, responsabilidad, reclamo o demanda, incluidos los honorarios razonables de abogados, realizados por cualquier tercero debido a o que surjan de El uso del SITIO por parte del USUARIO, incluido también el uso del SITIO por parte del USUARIO para proporcionar un enlace a otro sitio o para cargar contenido u otra información al SITIO.
                    <br><br>
                    <strong>LEY APLICABLE.</strong>
                    <br>
                    El USUARIO acepta que cualquier controversia o reclamo que surja de o esté relacionado con el uso del SITIO se regirá por las leyes del Estado de Connecticut sin tener en cuenta sus disposiciones sobre conflicto de leyes. El USUARIO acepta la jurisdicción personal por competencia en los tribunales estatales y federales del Estado de Connecticut, Condado de Hartford.
                    <br><br>
                    <strong>ARBITRAJE Y RESOLUCIÓN DE DISPUTAS.</strong>
                    <br>
                    Cualquier controversia, reclamo, disputa u otra acción que surja de o esté relacionada con el uso del SITIO, cualquier pedido realizado en el SITIO o estas políticas, incluida cualquier disputa sobre la validez, aplicabilidad o alcance de esta disposición de arbitraje (una 'RECLASIÓN'). o 'RECLAMACIONES') se resolverán mediante arbitraje vinculante administrado por la Asociación Estadounidense de Arbitraje (la 'AAA') de acuerdo con sus Reglas del Consumidor. El SITIO pagará todos los honorarios de presentación, administración y árbitro para cualquier arbitraje por una RECLAMACIÓN de US$10,000 o menos. Sin embargo, si el árbitro determina que el fondo de la RECLAMACIÓN o la reparación solicitada en la RECLAMACIÓN es frívolo o que la RECLAMACIÓN se presentó con un propósito inadecuado (según lo medido por los estándares establecidos en la Regla Federal de Procedimiento Civil 11(b )), entonces el pago de todas esas tarifas se regirá por las Reglas AAA aplicables. En tal caso, el USUARIO acepta reembolsar al SITIO todo el dinero previamente desembolsado por el SITIO que, de otro modo, sería obligación del USUARIO de pagar según las Reglas AAA. Además, si el USUARIO inicia un arbitraje por una RECLAMACIÓN por más de US$10,000, el pago de honorarios se regirá por las Reglas AAA. Las reglas de la AAA determinarán si el arbitraje se llevará a cabo mediante presentaciones escritas por parte del USUARIO y el SITIO, por teléfono o en persona. El SITIO y el USUARIO participarán en la selección de un árbitro. Cualquier laudo emitido mediante arbitraje es ejecutable en cualquier tribunal de jurisdicción competente.
                    <br>
                    AL ACEPTAR EL ARBITRAJE, EL USUARIO RENUNCIA AL DERECHO DE LITIGAR (O PARTICIPAR COMO PARTE O MIEMBRO DE LA CLASE) CUALQUIER RECLAMACIÓN EN EL TRIBUNAL ANTE UN JUEZ O JURADO. EN SU LUGAR, UN ÁRBITRO NEUTRAL RESOLVERÁ TODAS LAS RECLAMACIONES. SI EL USUARIO NO DESEA ESTAR OBLIGADO POR ESTA DISPOSICIÓN DE ARBITRAJE, DEBE NOTIFICAR AL SITIO POR ESCRITO DENTRO DE LOS 30 DÍAS A PARTIR DE LA FECHA EN QUE REALIZA UN PEDIDO EN EL SITIO. LA NOTIFICACIÓN ESCRITA DEL USUARIO AL SITIO DEBE INCLUIR EL NOMBRE, LA DIRECCIÓN Y EL NÚMERO DE PEDIDO DEL USUARIO, ASÍ COMO UNA DECLARACIÓN CLARA DE QUE EL USUARIO NO DESEA RESOLVER RECLAMACIONES CON EL SITIO MEDIANTE ARBITRAJE. LA NOTIFICACIÓN ESCRITA DEBE ENVIARSE POR CORREO AL SITIO.
                    <br>
                    Cualquier arbitraje o juicio de cualquier RECLAMACIÓN se llevará a cabo de forma individual sin recurrir a ningún tipo de acción colectiva o representativa ("RENUNCIA A DEMANDA COLECTIVA"). Independientemente de cualquier otra disposición contenida en esta Disposición de arbitraje, la validez y el efecto de esta RENUNCIA A DEMANDA COLECTIVA pueden ser determinados únicamente por un tribunal y no por un árbitro. El USUARIO y el SITIO reconocen que la RENUNCIA DE DEMANDA COLECTIVA es material y esencial para el arbitraje de cualquier disputa entre las partes y no se puede separar del acuerdo para arbitrar RECLAMACIONES. Si la RENUNCIA A DEMANDA COLECTIVA es limitada, anulada o se considera inaplicable, entonces el acuerdo de las partes para arbitrar será nulo y sin efecto con respecto a dicho procedimiento, sujeto al derecho de apelar la limitación o invalidación de la RENUNCIA A DEMANDA COLECTIVA. EL USUARIO Y EL SITIO RECONOCEN Y ACEPTAN QUE BAJO NINGUNA CIRCUNSTANCIA SERÁ ARBITRADA UNA DEMANDA COLECTIVA.
                    <br>
                    Todas las RECLAMACIONES interpuestas por el USUARIO contra el SITIO deben resolverse de acuerdo con esta Sección de Arbitraje y Resolución de Disputas. Todas las RECLAMACIONES presentadas o interpuestas en contra de esta Sección de Arbitraje y Resolución de Disputas se considerarán presentadas indebidamente. Si el USUARIO presenta una RECLAMACIÓN de manera inadecuada, el SITIO puede recuperar los honorarios y costos de abogados hasta USD $1,000 del USUARIO, siempre que el SITIO haya notificado al USUARIO por escrito sobre la RECLAMACIÓN presentada incorrectamente y el USUARIO no retire la RECLAMACIÓN de inmediato después de que el USUARIO reciba una notificación de reclamación inadecuada. presentación de MBAR.
                    <br><br>
                    <strong>FUERZA MAYOR.</strong>
                    <br>
                    MBAR no se considerará en incumplimiento ni responsable de otro modo según estas reglas y políticas debido a su incapacidad para cumplir con sus obligaciones debido a cualquier incendio, terremoto, inundación, tormenta de nieve importante, epidemia, accidente, explosión, siniestro, huelga, cierre patronal o controversia laboral. , disturbios, disturbios civiles, actos de enemigo público, terrorismo cibernético, embargo, guerra, caso fortuito o cualquier ordenanza o ley municipal, de condado, estatal o nacional, o cualquier orden ejecutiva, administrativa o judicial (cuya orden no es la resultado de cualquier acto u omisión que constituiría un incumplimiento en virtud del presente), o cualquier falla o retraso de cualquier sistema de transporte, energía o comunicaciones o cualquier otra causa similar que no esté bajo el control de MBAR (en adelante, todo lo anterior se denomina colectivamente como 'FUERZA MAYOR'). Sin perjuicio de lo anterior, se permitirá al SITIO rescindir este Acuerdo con o sin previo aviso al USUARIO en caso de que el USUARIO no pueda cumplir con el presente debido a FUERZA MAYOR.
                    <br><br>
                    <strong>REGISTRO.</strong>
                    <br>
                    Ciertas áreas del SITIO se proporcionan únicamente a USUARIOS registrados del MBAR. Todo USUARIO que se registre para dicho acceso se compromete a proporcionar información verdadera y exacta durante el proceso de registro. El SITIO se reserva el derecho de cancelar el acceso del USUARIO si el SITIO sabe o tiene motivos razonables para sospechar que el USUARIO ha ingresado información falsa o engañosa durante el proceso de registro. TODOS LOS USUARIOS REGISTRADOS DEBEN TENER MAYORES DE DIECIOCHO (18) AÑOS. No se permitirá el registro de niños menores de dieciocho (18) años. El SITIO se reserva el derecho de exigir información válida de la tarjeta de crédito como prueba de edad legal. El SITIO mantiene una estricta Política de Privacidad en línea y no venderá ni proporcionará información de la tarjeta de crédito del USUARIO a terceros.
                    <br>
                    El SITIO se reserva el derecho de rechazar o rechazar el servicio a cualquier persona por cualquier motivo y en cualquier momento.
                    <br>
                    EL USUARIO DE TALENTO se reserva el derecho de rechazar cualquier solicitud a su exclusivo criterio.
                    <br>
                    El USUARIO comprende que la información del USUARIO (sin incluir la información de la tarjeta de crédito) puede transferirse sin cifrar y que dicha transferencia puede implicar (a) transmisiones a través de varias redes; y (b) cambios para ajustarse y adaptarse a los requisitos técnicos de conexión de redes o dispositivos. La información de la tarjeta de crédito siempre está cifrada durante la transferencia a través de redes.
                    <br><br>
                    <strong>¡ATENCIÓN CONSUMIDORES DE CALIFORNIA! LEA DETENIDAMENTE UNA SECCIÓN ACTUALIZADA RELATIVA A LOS DERECHOS DEL USUARIO SEGÚN LA LEY DE PRIVACIDAD DEL CONSUMIDOR DE CALIFORNIA ("CCPA").</strong>
                    <br>
                    Los USUARIOS de montereybayarearoundup.org pueden navegar por montereybayarearoundup.org sin revelar su información personal, pero para aprovechar la mayoría de los servicios, el USUARIO debe proporcionar información personal en los formularios. Al proporcionar información personal, el USUARIO consiente expresamente la recopilación, el uso, la divulgación y la retención de su información personal como se describe en esta política de privacidad ("POLÍTICA DE PRIVACIDAD") y los términos establecidos en nuestros Términos y condiciones. Condiciones. Esta POLÍTICA DE PRIVACIDAD cubre el tratamiento por parte de MBAR y del PROVEEDOR de información personal o de identificación personal, en lo sucesivo denominada "INFORMACIÓN PERSONAL", que puede recopilarse cuando el USUARIO está en MBAR y cuando el USUARIO utiliza los servicios de MBAR. Esta POLÍTICA DE PRIVACIDAD no se aplica a las prácticas de empresas o individuos que MBAR no posee ni ejerce control de supervisión, ni a anunciantes externos en MBAR.
                    <br>
                    <br>
                    MBAR actualiza esta POLÍTICA DE PRIVACIDAD de vez en cuando, así que revísela periódicamente. Si MBAR altera materialmente la POLÍTICA DE PRIVACIDAD, MBAR notificará al USUARIO dichos cambios publicando un aviso en MBAR y/o comunicándose con el USUARIO a la dirección de correo electrónico proporcionada a MBAR. Su uso continuado del SITIO se considerará como un acuerdo del USUARIO de que la información del USUARIO puede usarse de acuerdo con la nueva política. Si el USUARIO no está de acuerdo con los cambios, entonces el USUARIO debe dejar de usar el SITIO y debe notificar al SITIO que no desea que su información se utilice de acuerdo con los cambios.
                    <br><br>
                    <strong>ESTA POLÍTICA DE PRIVACIDAD DIVULGA LAS PRÁCTICAS DE PRIVACIDAD DE montereybayarearoundup.org. SE APLICA ÚNICAMENTE A LA INFORMACIÓN RECOGIDA POR ESTE SITIO WEB. ESTA POLÍTICA DE PRIVACIDAD NOTIFICARÁ AL USUARIO LO SIGUIENTE:</strong>
                    <br>
                    Qué INFORMACIÓN PERSONAL se recopila del USUARIO a través del SITIO, cómo se utiliza y con quién se puede compartir.
                    <br>
                    Qué opciones están disponibles para el USUARIO con respecto al uso de sus datos.
                    <br>
                    Los procedimientos de seguridad establecidos para proteger contra el mal uso de la información del USUARIO.
                    <br>
                    Según corresponda, cómo el USUARIO puede corregir cualquier inexactitud en la información.
                    <br>
                    Recopilación, uso e intercambio de información El PROVEEDOR y el CUMPLIMIENTO son los únicos usuarios de la información recopilada en este SITIO.
                    <br>
                    El PROVEEDOR solo tiene acceso o recopila información que el USUARIO proporciona voluntariamente a través de correo electrónico u otro contacto directo del USUARIO o si el USUARIO da permiso al SITIO para acceder a dicha información, como solicitar o comprar boletos de un CUMPLIMIENTO, incluidos, entre otros, nombre, dirección, dirección de correo electrónico, número de teléfono, información de tarjeta de crédito/débito e información de compra.
                    <br>
                    El SITIO y el PROVEEDOR también pueden recopilar detalles de las visitas del USUARIO al SITIO y los recursos a los que accede el USUARIO, incluidos, entre otros, datos de tráfico, datos de ubicación, blogs web y otros datos de comunicación, incluida la dirección IP del USUARIO, la fecha y hora en que el USUARIO accedió. o abandonó el SITIO y qué páginas vio el USUARIO. Algunas partes del SITIO utilizan cookies y otras tecnologías para recopilar esta información sobre el uso general de Internet del USUARIO.
                    <br><br>
                    <strong>CONSULTE LA SECCIÓN A CONTINUACIÓN 'CÓMO UTILIZAMOS COOKIES, PUBLICIDAD DE TERCEROS, SERVICIOS Y RECOPILACIÓN DE DATOS' PARA OBTENER MÁS INFORMACIÓN.</strong>
                    <br>
                    Al enviar un número de teléfono al SITIO, el USUARIO acepta que un representante de montereybayarearoundup.org puede comunicarse con el USUARIO al número que proporcione, potencialmente utilizando tecnología automatizada (incluidos mensajes de texto/SMS) o un mensaje pregrabado. Su consentimiento no es una obligación para recibir ninguno de los productos y/o servicios del PROVEEDOR o CUMPLIMIENTO.
                    <br>
                    El PROVEEDOR, junto con el CUMPLIMIENTO, utilizarán la información personal del USUARIO para fines transaccionales, incluidos aquellos relacionados con el servicio al cliente para la transacción. El PROVEEDOR también puede utilizar la información personal del USUARIO para proporcionar servicios de marketing en nombre del SITIO, así como compartir la información personal del USUARIO con entidades afiliadas del PROVEEDOR para proporcionar contenido y servicios conjuntos y comercializar los productos y servicios de dichas entidades. El PROVEEDOR puede vender información personal del USUARIO a organizaciones no financieras, como empresas dedicadas al marketing directo y la venta de productos y servicios de consumo.
                    <br>
                    El PROVEEDOR utilizará la información del USUARIO para responder al USUARIO sobre el motivo por el cual el USUARIO se comunicó con el SITIO. El PROVEEDOR no compartirá información del USUARIO con ningún tercero fuera de las organizaciones del PROVEEDOR, salvo que sea necesario para cumplir con la solicitud del USUARIO, p. para cumplir o enviar un pedido, o, en algunos casos, asociarse con otra empresa para proporcionar ciertos contenidos, programas y servicios como los divulgados en el párrafo anterior. En esos casos, EL PROVEEDOR requerirá a terceros agentes que mantengan la confidencialidad de los datos mediante un acuerdo escrito. En esas situaciones, cuando el USUARIO proporciona INFORMACIÓN PERSONAL, esta puede enviarse directamente a la empresa asociada o el PROVEEDOR puede compartir la información con la empresa asociada. A menos que el USUARIO solicite lo contrario, el PROVEEDOR puede comunicarse con el USUARIO en el futuro para informarle sobre ofertas especiales, nuevos productos o servicios o cambios en esta Política de Privacidad. Ni el SITIO ni el PROVEEDOR son responsables de las políticas u ofertas de terceros, y se insta al USUARIO a revisar las políticas y los términos y condiciones de terceros, ya que pueden variar.
                    <br>
                    El SITIO y el PROVEEDOR responderán a las solicitudes o citaciones verificadas de las autoridades policiales u otros departamentos gubernamentales relacionadas con una investigación criminal, supuesta actividad ilegal o robo de identidad. En tales eventos, el SITIO y el PROVEEDOR divulgarán información relevante para la investigación, como nombre, ciudad, estado, código postal, número de teléfono, dirección de correo electrónico, quejas de fraude, dirección IP e información de la tarjeta de crédito. El SITIO y el PROVEEDOR también pueden compartir dicha información con terceros con el fin de investigar o prevenir actividades fraudulentas. El SITIO y el PROVEEDOR se reservan el derecho de informar a las autoridades policiales sobre cualquier actividad que crean, de buena fe, que es ilegal. En el caso de robo de identidad, el USUARIO puede autorizar a un agente de la ley a solicitar los registros del SITIO y el PROVEEDOR o el USUARIO puede solicitar que el SITIO y el PROVEEDOR envíen cualquier registro directamente a un agente de la ley.
                    <br>
                    El SITIO y el PROVEEDOR también pueden usar y divulgar información del USUARIO para evaluar o llevar a cabo una fusión, desinversión, reestructuración, reorganización, disolución u otra venta o transferencia de algunos o todos nuestros activos, ya sea como una empresa en funcionamiento o como parte de una quiebra, liquidación, o procedimiento similar, en el que la información personal en poder del SITIO y el PROVEEDOR sobre los USUARIOS DEL SITIO se encuentre entre los activos transferidos.
                    <br>
                    El SITIO y el PROVEEDOR no utilizarán la información personal recopilada para fines materialmente diferentes, no relacionados o incompatibles sin notificar al USUARIO y/o actualizar esta POLÍTICA DE PRIVACIDAD.
                    <br><br>
                    <strong>ACCESO DEL USUARIO Y CONTROL SOBRE LA INFORMACIÓN SI LO REQUIERE LA LEY APLICABLE, EL USUARIO PUEDE HACER LO SIGUIENTE CONTACTANDO AL PROVEEDOR A TRAVÉS DE LA DIRECCIÓN DE CORREO ELECTRÓNICO O EL NÚMERO DE TELÉFONO QUE SE INDICA A CONTINUACIÓN EN LA SECCIÓN 'CONTÁCTENOS':</strong>
                    <br>
                    Optar por no recibir ningún contacto futuro del SITIO o del PROVEEDOR;
                    <br>
                    Ver qué datos están archivados sobre el USUARIO, si los hubiera;
                    <br>
                    Cambiar o corregir cualquier dato registrado sobre el USUARIO;
                    <br>
                    Haber eliminado cualquier dato registrado sobre el USUARIO; y
                    <br>
                    Manifestar cualquier inquietud que el USUARIO tenga sobre el uso de sus datos.
                    <br>
                    El USUARIO también tiene la opción, en el momento de la compra, de optar por recibir material de marketing u ofertas de terceros.
                    <br>
                    Para obtener más información sobre el cumplimiento del SITIO con las leyes de privacidad del consumidor específicas de cada estado, consulte a continuación.
                    <br>
                    Para dejar de recibir correos electrónicos promocionales o de marketing o para optar por no enviar la información del USUARIO a terceros con fines de marketing, el USUARIO puede seguir las instrucciones en cualquier correo electrónico promocional que reciba del SITIO. Incluso si el USUARIO opta por no recibir correos electrónicos promocionales o de marketing, el USUARIO seguirá siendo contactado con mensajes transaccionales.
                    <br>
                    El USUARIO tiene derecho a acceder a sus datos y a facilitarle instrucciones sobre cómo hacerlo.
                    <br>
                    Una persona que busque acceder, o que busque corregir, modificar o eliminar datos inexactos, según lo exige MBAR de conformidad con las leyes aplicables, debe dirigir su consulta a <a href="contact.php" class="bb-link">CONTACTE CON ATENCIÓN AL CLIENTE</a> El SITIO, PROVEEDOR o CUMPLIMIENTO responderá dentro de un plazo razonable o según lo exijan las leyes aplicables.
                    <br><br>
                    <strong>USO DE COOKIES, PUBLICIDAD, SERVICIOS Y SERVICIOS DE TERCEROS. RECOPILACIÓN DE DATOS.</strong>
                    <br>
                    Tenga en cuenta que los proveedores externos, incluido, entre otros, Google, muestran anuncios del SITIO en Internet. Los proveedores externos, incluido, entre otros, Google, utilizan cookies para publicar anuncios basados en visitas anteriores del USUARIO al SITIO. Para excluirse del uso de cookies y balizas web por parte de Google, el USUARIO puede visitar la página de exclusión voluntaria de publicidad de Google disponible en el sitio web de Google en https://policies.google.com/technologies/ads. El SITIO puede compartir, vender o alquilar información del USUARIO recopilada voluntariamente del USUARIO en el SITIO con proveedores externos, empresas de publicidad o proveedores de análisis, incluidos, entre otros, Google.
                    <br><br>
                    <strong>ADEMÁS, EL SITIO PARTICIPA EN PUBLICIDAD DIRIGIDA.</strong>
                    <br>
                    El SITIO permite a empresas de terceros recopilar cierta información cuando el USUARIO visita el SITIO para proporcionar servicios de medición al SITIO y orientar anuncios al USUARIO. El SITIO utiliza esta información para publicar anuncios de los productos o servicios del SITIO o de los productos o servicios de otras empresas cuando el USUARIO visita este SITIO u otros sitios web. Estas empresas utilizan información de identificación no personal (p. ej., información de flujo de clics, tipo de navegador, fecha y hora, tema de los anuncios en los que se hace clic o se desplaza, información de hardware o software, cookies e ID de sesión) e información de identificación personal (p. ej., dirección IP) durante Las visitas del USUARIO a este SITIO y otros sitios web con el fin de proporcionar publicidad sobre bienes y servicios que puedan ser de mayor interés para el USUARIO. Estas partes suelen utilizar una cookie, una baliza web de terceros u otras tecnologías similares para recopilar esta información.
                    <br>
                    SITE también trabaja con terceros que recopilan información a través de varios canales. Dichos terceros utilizan esta información para reconocer al USUARIO en diferentes canales y plataformas, incluidos, entre otros, computadoras, dispositivos móviles y televisores inteligentes, a lo largo del tiempo con fines publicitarios, analíticos, de atribución y de generación de informes. Los datos del USUARIO podrán ser transferidos fuera del país donde fueron recopilados originalmente.
                    <br>
                    Algunos navegadores tienen una función de "no rastrear" que permite al USUARIO informar a los sitios web que el USUARIO no desea que se rastreen sus actividades en línea. Actualmente, el SITIO no responde a las señales de "no rastrear" del navegador, pero el SITIO brinda al USUARIO la opción de optar por no recibir publicidad dirigida. Para obtener más información sobre este tipo de publicidad o para excluirse de este tipo de publicidad, visite <a href="contact.php" class="bb-link">CONTACTE CON ATENCIÓN AL CLIENTE</a>
                    <br>
                    Seguridad toma precauciones razonables para proteger la información del USUARIO. Cuando el USUARIO envía información confidencial a través del SITIO, la información del USUARIO está protegida tanto en línea como fuera de línea.
                    <br>
                    Siempre que se recopila INFORMACIÓN PERSONAL u otra información confidencial (como datos de tarjetas de crédito), nos esforzamos por proteger esa información cifrando y transmitiendo esos datos al SITIO de forma segura. El PROVEEDOR se compromete a no volver a identificar la información confidencial recopilada por el SITIO.
                    <br>
                    Si bien el cifrado se utiliza para proteger la información confidencial transmitida en línea, el PROVEEDOR también protege la información del USUARIO fuera de línea. Solo los empleados que necesitan la información para realizar un trabajo específico (por ejemplo, facturación o servicio al cliente) tienen acceso a INFORMACIÓN PERSONAL. Las computadoras y servidores en los que se almacena la INFORMACIÓN PERSONAL se mantienen en un entorno seguro.
                    <br>
                    Sin embargo, la transmisión de información a través de Internet no es completamente segura y, por lo tanto, el PROVEEDOR no puede garantizar la seguridad de los datos enviados al SITIO electrónicamente y, por lo tanto, la transmisión de dichos datos corre enteramente por cuenta y riesgo del USUARIO.
                    <br>
                    Si el USUARIO considera que el PROVEEDOR no cumple con esta POLÍTICA DE PRIVACIDAD, el USUARIO debe comunicarse con el SITIO de inmediato a través de <a href="contact.php" class="bb-link">CONTACTE AL SERVICIO DE ATENCIÓN AL CLIENTE</a>
                    <br>
                    Usuarios Sólo Mayores de Edad El SITIO está diseñado y destinado a quienes han alcanzado la mayoría de edad (18 años de edad). Al utilizar el SITIO, el USUARIO afirma que tiene al menos 18 años de edad o más. El SITIO y el PROVEEDOR no son responsables de ningún daño que pueda resultar de la tergiversación de la edad por parte de un usuario.
                    <br>
                    Ninguna persona menor de 13 años está autorizada a enviar o publicar información, incluida información de identificación personal, en el SITIO. Bajo ninguna circunstancia ninguna persona menor de 13 años podrá utilizar el SITIO. Los padres o tutores legales de niños menores de 13 años no pueden aceptar estos Términos en su nombre.
                    <br>
                    Derechos de los residentes de California según la CCPA, la CCPA brinda a los residentes de California derechos específicos con respecto a su información personal.
                    <br><br>
                    <strong>ACCESO A INFORMACIÓN ESPECÍFICA Y DERECHOS DE PORTABILIDAD DE DATOS.</strong>
                    <br>
                    Usted tiene derecho a solicitar que el SITIO revele cierta información al USUARIO sobre la recopilación y el uso de INFORMACIÓN PERSONAL DEL USUARIO durante los últimos doce (12) meses. Una vez que el PROVEEDOR reciba y confirme la solicitud del consumidor verificable del USUARIO, el PROVEEDOR podrá revelarle:
                    <br>
                    Las categorías de INFORMACIÓN PERSONAL recopiladas sobre usted;
                    <br>
                    Las categorías de fuentes de la INFORMACIÓN PERSONAL recopilada sobre usted;
                    <br>
                    Los fines empresariales o comerciales para recopilar o vender esa INFORMACIÓN PERSONAL;
                    <br>
                    Las categorías de terceros con quienes se ha compartido INFORMACIÓN PERSONAL;
                    <br>
                    Las piezas específicas de INFORMACIÓN PERSONAL recopiladas sobre el USUARIO (también denominada solicitud de portabilidad de datos);
                    <br>
                    Si la INFORMACIÓN PERSONAL DEL USUARIO se ha vendido o divulgado con fines comerciales, dos listas separadas que revelen: (1) ventas, identificando las categorías de INFORMACIÓN PERSONAL que compró cada categoría de destinatario; y, (2) divulgaciones con fines comerciales, identificando las categorías de INFORMACIÓN PERSONAL que cada categoría de destinatario obtuvo
                    <br><br>
                    <strong>DERECHOS DE SOLICITUD DE ELIMINACIÓN.</strong>
                    <br>
                    Tiene derecho a solicitar que el SITIO elimine cualquier INFORMACIÓN PERSONAL DEL USUARIO que haya sido recopilada del USUARIO y retenida, sujeto a ciertas excepciones. Una vez que el PROVEEDOR reciba y confirme la solicitud del consumidor verificable del USUARIO, el SITIO y el PROVEEDOR eliminarán (y ordenarán al CUMPLIMIENTO que elimine) la INFORMACIÓN PERSONAL DEL USUARIO de los registros, a menos que se aplique una excepción.
                    <br>
                    El PROVEEDOR puede denegar la solicitud de eliminación del USUARIO si conservar la información es necesario para que el PROVEEDOR o el CUMPLIMIENTO:
                    <br>
                    Completar la transacción para la cual se recopiló la INFORMACIÓN PERSONAL, proporcionar un bien o servicio que el USUARIO solicitó, tomar acciones razonablemente anticipadas dentro del contexto de la relación comercial en curso con usted, o ejecutar de otro modo el contrato entre el USUARIO y el VENDEDOR DE BOLETOS.
                    <br>
                    Detectar incidentes de seguridad, proteger contra actividades maliciosas, engañosas, fraudulentas o ilegales, o procesar a los responsables de dichas actividades.
                    <br>
                    Depurar productos para identificar y reparar errores que afectan la funcionalidad prevista existente.
                    <br>
                    Ejercer la libertad de expresión, proteger el derecho de otro consumidor a ejercer sus derechos de libertad de expresión, o ejercer otro derecho previsto por la ley.
                    <br>
                    Cumplir con la Ley de Privacidad de las Comunicaciones Electrónicas de California (Código Penal de California § 1546 et. seq.).
                    <br>
                    Participar en investigaciones científicas, históricas o estadísticas públicas o revisadas por pares en interés público que cumplan con todas las demás leyes de ética y privacidad aplicables, cuando la eliminación de la información probablemente haga imposible o perjudique gravemente el logro de la investigación, si el USUARIO proporcionó previamente su consentimiento informado. .
                    <br>
                    Permitir usos únicamente internos que estén razonablemente alineados con las expectativas del consumidor según la relación del USUARIO con el SITIO.
                    Cumplir con una obligación legal.
                    <br>
                    Realizar otros usos internos y lícitos de esa información que sean compatibles con el contexto en el que el USUARIO la proporcionó.
                    <br><br>
                    <strong>DERECHOS DE EXCLUSIÓN DE VENTAS DE INFORMACIÓN PERSONAL.</strong>
                    <br>
                    Si el USUARIO es residente de California, el USUARIO puede solicitar la exclusión voluntaria de la venta de su información personal a través de <a href="contact.php" class="bb-link">CONTACTE AL SERVICIO DE ATENCIÓN AL CLIENTE</a> y permitir una plazo razonable descrito en NUESTRA política.
                    <br>
                    No es necesario crear una cuenta en el SITIO para ejercer los derechos de exclusión voluntaria del USUARIO. Fulfiller solo utilizará la información personal proporcionada en una solicitud de exclusión voluntaria para revisar y cumplir con la solicitud.
                    <br><br>
                    <strong>EJERCICIO DE LOS DERECHOS DE ACCESO, PORTABILIDAD DE DATOS Y SUPRESIÓN.</strong>
                    <br>
                    Para ejercer los derechos de acceso, portabilidad de datos y eliminación descritos anteriormente, envíenos una solicitud de consumidor verificable:
                    <br>
                    Sólo usted, o un representante debidamente autorizado del USUARIO, podrá realizar una solicitud de consumidor verificable relacionada con la INFORMACIÓN PERSONAL DEL USUARIO.
                    <br>
                    Solo puede realizar una solicitud de consumidor verificable de acceso o portabilidad de datos dos veces dentro de un período de 12 meses. La solicitud verificable del consumidor debe:
                    <br>
                    Proporcionar información suficiente que nos permita verificar razonablemente que el USUARIO es la persona sobre quien se recopiló INFORMACIÓN PERSONAL o un representante autorizado.
                    <br>
                    Describir la solicitud del USUARIO con suficiente detalle que permita al PROVEEDOR comprenderla, evaluarla y responderla adecuadamente.
                    <br>
                    El PROVEEDOR no puede responder a la solicitud del USUARIO ni proporcionar INFORMACIÓN PERSONAL al USUARIO si el PROVEEDOR no puede verificar la identidad del USUARIO o la autoridad para realizar la solicitud y confirmar que la INFORMACIÓN PERSONAL se relaciona con usted. En la solicitud del USUARIO, el USUARIO debe proporcionar suficiente información que permita al PROVEEDOR verificar razonablemente que el USUARIO es la persona sobre la que se recopiló la información.
                    <br>
                    Realizar una solicitud de consumidor verificable no requiere que el USUARIO cree una cuenta con nosotros.
                    <br>
                    El PROVEEDOR solo utilizará la INFORMACIÓN PERSONAL proporcionada en una solicitud de consumidor verificable para verificar la identidad del solicitante o su autoridad para realizar la solicitud.
                    <br><br>
                    <strong>TIEMPO Y FORMATO DE RESPUESTA.</strong>
                    <br>
                    El PROVEEDOR proporcionará una respuesta a una solicitud verificable del consumidor dentro de los cuarenta y cinco (45) días siguientes a su recepción. Si el PROVEEDOR requiere más tiempo (hasta 45 días), el PROVEEDOR informará al USUARIO el motivo y el plazo de extensión por escrito.
                    <br>
                    Cualquier divulgación que proporcione el PROVEEDOR solo cubrirá el período de 12 meses anterior a la recepción de la solicitud verificable del consumidor.
                    La respuesta que proporcione el PROVEEDOR también explicará las razones por las que el PROVEEDOR o el CUMPLIMIENTO no pueden cumplir con una solicitud, si corresponde. Para las solicitudes de portabilidad de datos, el PROVEEDOR seleccionará un formato para proporcionar información personal del USUARIO que sea fácilmente utilizable y debería permitir al USUARIO transmitir la información de una entidad a otra sin obstáculos.
                    <br>
                    El PROVEEDOR no cobra una tarifa por procesar o responder a la solicitud del consumidor verificable del USUARIO a menos que sea excesiva, repetitiva o manifiestamente infundada. Si el PROVEEDOR determina que la solicitud justifica una tarifa, le informará al USUARIO por qué tomó esa decisión y le proporcionará al USUARIO una estimación de costos antes de completar la solicitud del USUARIO.
                    <br><br>
                    <strong>NO DISCRIMINACIÓN:</strong>
                    <br>
                    El PROVEEDOR no discriminará al USUARIO por ejercer cualquiera de sus derechos CCPA. A menos que lo permita la CCPA, el PROVEEDOR no:
                    <br>
                    Negar bienes o servicios al USUARIO.
                    <br>
                    Cobrar al USUARIO diferentes precios o tarifas por bienes o servicios, incluso mediante el otorgamiento de descuentos u otros beneficios, o la imposición de sanciones.
                    <br>
                    Proporcionar al USUARIO un nivel o calidad diferente de bienes o servicios.
                    <br>
                    Sugerir que el USUARIO puede recibir un precio o tarifa diferente por bienes o servicios o un nivel o calidad diferente de bienes o servicios.
                    <br><br>
                    <strong>OTROS DERECHOS DE PRIVACIDAD DE CALIFORNIA:</strong>
                    <br>
                    La Sección § 1798.83 del Código Civil de California, la ley "Shine the Light", permite a los usuarios de nuestro Sitio que son residentes de California solicitar cierta información sobre nuestra divulgación de información personal a terceros para sus fines de marketing directo. Para realizar dicha solicitud, envíe un correo electrónico a <a href="contact.php" class="bb-link">CONTACTE CON ATENCIÓN AL CLIENTE</a>
                    <br>
                    Notificación de infracción de derechos de autor Si el USUARIO desea presentar una notificación de infracción de derechos de autor ante el SITIO, el USUARIO deberá enviar una comunicación escrita o electrónica que incluya todo lo siguiente, según la Sección 512 (c) (3) de la Ley de Derechos de Autor del Milenio Digital ( DMCA):
                    <br>
                    Identificación del material que se afirma que infringe o que es objeto de actividad infractora. *Proporcione las URL en el cuerpo del correo electrónico o carta, ya que esto nos ayudará a identificar el material potencialmente infractor.*
                    <br><br>
                    <strong>INFORMACIÓN DE CONTACTO DEL DENUNCIANTE.</strong>
                    <br>
                    Una declaración de que el denunciante cree de buena fe que el uso del material en la forma denunciada constituye una violación de los derechos de autor.
                    Una declaración de que la información contenida en la notificación es exacta y, bajo pena de perjurio, de que el denunciante está autorizado a actuar en nombre del propietario del material que supuestamente ha sido infringido.
                    <br>
                    La notificación escrita o electrónica de infracción de derechos de autor debe enviarse por correo, fax o correo electrónico al agente designado del SITIO a:
                    <br>
                    Quejas de derechos de autor <a href="contact.php" class="bb-link">CONTACTE AL SERVICIO DE ATENCIÓN AL CLIENTE</a> y proporcione la URL con su queja.
                    <br><br>
                    <strong>TENGA EN CUENTA LO SIGUIENTE:</strong>
                    <br>
                    Según la Sección 512(f) de la DMCA, cualquier persona que, a sabiendas, tergiverse que el material o la actividad está infringiendo puede estar sujeta a responsabilidad por daños y perjuicios.
                    <br><br>
                    <strong>CORREO ELECTRÓNICO DE SERVICIO Y PUBLICIDAD.</strong>
                    <br>
                    El SITIO puede enviar al USUARIO varios correos electrónicos relacionados con el servicio a la dirección de correo electrónico proporcionada al realizar un pedido. Estos incluyen, entre otros, un correo electrónico de confirmación con detalles del pedido del USUARIO, un recordatorio por correo electrónico previo al evento sobre el evento al que se asistirá y un correo electrónico posterior al evento que recopila comentarios sobre la experiencia del USUARIO. Cuando el USUARIO realiza un pedido, el SITIO también puede agregar al USUARIO a la lista de correo semanal para estar informado de los próximos eventos. El USUARIO puede optar por no recibir estos correos electrónicos en cualquier momento notificando a customersupport@ticketfaster.com.
                    <br><br>
                    <strong>CANCELACIONES Y APLAZAMIENTOS DE EVENTOS RELACIONADOS CON EL COVID-19 (CORONAVIRUS).</strong>
                    <br>
                    Para garantizar la seguridad de los fanáticos durante estos tiempos inciertos, todas las entradas están sujetas a restricciones y requisitos establecidos por las sedes, equipos o autoridades gubernamentales en lo que respecta a la prueba de vacunación contra el COVID-19, prueba de prueba de COVID-19 negativa y distanciamiento social. , uso de equipo de protección personal, restricciones de edad o medidas similares. Si el USUARIO no puede asistir al evento debido a su incumplimiento o incapacidad para cumplir con dichos requisitos, el USUARIO no recibirá un reembolso. Si el evento se lleva a cabo sin fanáticos o no hay asientos disponibles razonablemente similares, el USUARIO recibirá un reembolso como si el evento hubiera sido cancelado.
                    <br><br>
                    <strong>A LA LUZ DE LOS RECIENTES DESARROLLOS RELACIONADOS CON COVID-19 Y CON GRAN PREOCUPACIÓN POR LA SEGURIDAD Y BIENESTAR DE NUESTROS CLIENTES, ESTABLECIMOS LOS SIGUIENTES TÉRMINOS PARA CANCELACIONES Y APLAZAMIENTOS DE EVENTOS RELACIONADOS CON COVID-19 CON EFECTO INMEDIATAMENTE:</strong>
                    <br>
                    SI SE CANCELA UN EVENTO COMO RESULTADO DEL COVID-19, el USUARIO puede tener la opción de recibir un vale de crédito ("Valor de crédito") por el monto del 100 % del precio de compra original (menos los gastos de envío) (el "Valor ') que se utilizará para cualquier compra de boletos realizada en el SITIO dentro de los 365 días posteriores a la fecha de emisión del vale de crédito del USUARIO. Alternativamente, el USUARIO puede solicitar un reembolso completo (menos los gastos de envío).
                    <br>
                    Los vales de crédito se pueden utilizar para compras separadas siempre que cualquier parte del vale de crédito conserve su valor; sin embargo, esto no extenderá la fecha de validez del Cupón de crédito del USUARIO.
                    <br>
                    El vale de crédito de USUARIO no tiene valor en efectivo y no se puede vender, intercambiar ni combinar con ninguna otra oferta. Podremos modificar o discontinuar la nueva emisión de Vales de Crédito sin previo aviso. Los vales de crédito son nulos donde estén prohibidos.
                    <br>
                    El vale de crédito del USUARIO no se puede transferir a otra persona ni utilizar como método de pago en ningún otro sitio, que no sea el sitio donde se realizó la compra original del USUARIO, y no se puede transferir a una moneda diferente. Si el Sitio donde se realizó la compra original del USUARIO ya no está en servicio, se seguirá respetando el Cupón de crédito del USUARIO.
                    <br>
                    Si el USUARIO decide no utilizar el programa de vales de crédito, tenga en cuenta que, debido a eventos recientes, el reembolso del USUARIO puede tardar hasta 30 días en procesarse.
                    <br>
                    Al aceptar la oferta de un Vale de crédito o Reembolso, el USUARIO acepta que no se realizará ningún pago adicional al USUARIO con respecto a la compra en cuestión y el USUARIO acepta no solicitar reembolsos, créditos ni devoluciones de cargo adicionales. Usted comprende que el Cupón de crédito o el Reembolso del USUARIO es el único recurso disponible para el USUARIO para la compra original del USUARIO. Si se presenta una devolución de cargo contra el comerciante registrado en la compañía de tarjeta de crédito del USUARIO, nos reservamos el derecho de retirar cualquier oferta realizada, incluida esta oferta de Cupón de crédito.
                    <br>
                    Si el USUARIO no toma ninguna medida después de recibir una notificación nuestra, el USUARIO recibirá un cupón de forma predeterminada. Si el USUARIO ha recibido un vale, pero prefiere recibir un reembolso en efectivo, entonces el USUARIO debe comunicarse con nuestro servicio de atención al cliente dentro de los siete (7) días calendario posteriores a la recepción de la notificación de cancelación.
                    <br>
                    SI UN EVENTO SE POSPOSA O REPROGRAMA COMO RESULTADO DEL COVID-19, y los boletos originales son válidos para ingresar en el momento del evento reprogramado, los boletos originales del USUARIO seguirán siendo válidos para el evento reprogramado y el pedido del USUARIO no calificará para un reembolso. o un Vale de Crédito. Si el USUARIO no considera que sea seguro para el USUARIO asistir al evento, el USUARIO siempre puede revender su entrada válida.
                    <br>
                    EVENTOS SIN ESPECTADORES. Si se anuncia que el evento del USUARIO se jugará sin espectadores como resultado del COVID-19, se tratará como si el evento estuviera cancelado. Estos boletos serán elegibles para un reembolso o un programa de vale de crédito a menos que los organizadores del evento nos informen lo contrario.
                    <br>
                    Todos los demás Términos y condiciones permanecen en pleno vigor y efecto sin enmiendas ni modificaciones.
                    <br>
                    Modificaciones El SITIO se reserva el derecho de modificar esta política en cualquier momento. El SITIO publicará un aviso de cambios en su SITIO, cuando y si se modifican los términos de esta política.
                    <br><br>
                    <strong>SOLICITUD DE INFORMACIÓN PERSONAL DEL CONSUMIDOR.</strong>
                    <br>
                    1. POLÍTICAS DE SEGURIDAD Y SALUD
                    <br>
                    Debido a la incertidumbre relacionada con la pandemia de COVID-19, las entradas y entradas para eventos del USUARIO están sujetas a todas las políticas de seguridad y salud del estadio y del proveedor de eventos. Usted reconoce que debido a la naturaleza cambiante de la pandemia, el Proveedor del Evento puede continuar desarrollando y actualizando estas políticas en el tiempo transcurrido entre la compra del USUARIO y la fecha del Evento. Al utilizar boletos para el Evento, el USUARIO reconoce y acepta que cumplirá con dichas políticas y que la asistencia del USUARIO al Evento está condicionada a dicho cumplimiento. Si se niega o revoca la admisión del USUARIO al Evento porque el USUARIO ha incumplido o se ha negado intencionalmente a cumplir con dichas políticas de seguridad y salud del estadio o Proveedor del Evento, el USUARIO no será elegible para un reembolso.
                    <br>
                    2. ASUNCIÓN DE RIESGO, LIBERACIÓN, RENUNCIA Y GARANTÍA. PACTO DE NO DEMANDAR
                    <br>
                    UN RIESGO INHERENTE DE EXPOSICIÓN AL COVID-19 EXISTE EN CUALQUIER LUGAR PÚBLICO DONDE HAY PERSONAS PRESENTES. EL COVID-19 ES UNA ENFERMEDAD EXTREMADAMENTE CONTAGIOSA QUE PUEDE PROVOCAR ENFERMEDADES GRAVES Y LA MUERTE. SEGÚN LOS CENTROS PARA EL CONTROL Y LA PREVENCIÓN DE ENFERMEDADES, LAS PERSONAS MAYORES Y AQUELLOS CON CONDICIONES MÉDICAS SUBYACENTES SON ESPECIALMENTE VULNERABLES. AL ASISTIR AL EVENTO, USTED ASUME VOLUNTARIAMENTE, EN SU NOMBRE Y EN EL DE TODOS LOS MENORES ACOMPAÑANTES, TODOS LOS RIESGOS RELACIONADOS CON LA EXPOSICIÓN AL COVID-19.
                    <br>
                    En su nombre y en el de las Personas Relacionadas con el USUARIO, el USUARIO por la presente libera (y se compromete a no demandar) a cada una de las Partes Liberadas con respecto a cualquiera y todos los reclamos que el USUARIO o cualquiera de las Personas Relacionadas con el USUARIO puedan tener (o acumularse en el futuro) contra cualquiera de las Partes Liberadas y que se relacionen de alguna manera con (i) la exposición del USUARIO al COVID-19; (ii) la entrada o presencia del USUARIO dentro o alrededor del Evento (incluidos todos los riesgos relacionados con el mismo, incluidos, entre otros, las áreas de estacionamiento o puertas de entrada) o el cumplimiento de cualquier protocolo aplicable al Evento; o (iii) cualquier interacción entre el USUARIO y cualquier personal de cualquiera de las Partes Eximidas presentes en el Evento, en cada caso ya sea causada por cualquier acción, inacción o negligencia de cualquier Parte Exonerada o de otro modo.
                    <br>
                    3. CLÁUSULA DE DIVISIBILIDAD
                    <br>
                    Si alguna disposición o parte de estos Términos complementarios se considera ilegal, inaplicable o ineficaz, dicha disposición o parte de la misma se considerará modificada en la menor medida necesaria para que dicha disposición sea legal, ejecutable y efectiva o, si no se realiza dicha modificación. posible, dicha disposición o parte de ella se considerará divisible, de modo que todas las demás disposiciones contenidas en estos Términos complementarios y a las que se hace referencia en ellos sigan siendo válidas y vinculantes.
                    <br><br>
                    <strong>Estas políticas se modificaron por última vez el 25.12.23</strong>
                </div>
            </div>
        </div>
    </section>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>