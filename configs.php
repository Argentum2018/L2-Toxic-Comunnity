<?php

###########################################################
##                   Configuración                       ##
###########################################################
$server_name = 'L2 Toxic Community'; // Server Nombre
$server_chronicle = 'Interlude'; // Server Chronicle
$server_url = '190.124.149.191'; // Introduzca exactamente la URL donde se encuentra este site (por ejemplo: www.l2server.com)


###########################################################
##                   Banco de datos                      ##
###########################################################

# ¿Qué método de conexión utilizará? (recomendamos MySQLi o PDO-MySQL)
$conMethod = 2; // 1 = MySQL, 2 = MySQLi, 3 = PDO-MySQL

$host = 'localhost'; // Host
$dbnm = 'frozen'; // DB nombre
$user = 'root'; // Usuario
$pass = 'Jhossy2325'; // Contrasena


###########################################################
##                    Server Status                      ##
###########################################################
$serverIp = '127.0.0.1'; // Server IP (para buscar el estado del servidor)
$loginPort = '2106'; // puerta de login/auth
$gamePort = '7777'; // puerta de game

// Forzar el sitio a mostrar un cierto status (on = Online | off = Offline | auto = Estado real)
$forceServerStatus = 'on'; // Server Status (Estandar: auto)


###########################################################
##              Atualstudio Web Admin 3.0                ##
###########################################################
$admpass = 'Jhossy2325'; // Contraseña del panel admin


###########################################################
##              Configuración del e-mail                 ##
###########################################################
$admin_email = 'chaoticthronec4@gmail.com'; // E-mail que los jugadores pueden utilizar para ponerse en contacto
$server_email = 'chaoticthronec4@gmail.com'; // E-mail utilizado para enviar mensajes automáticas (por ejemplo: no-reply@suservidor.com)
$vcmemail = 1; // Se permite crear varias cuentas con una misma e-mail? (1 = Sí | 0 = No)
$cofemail = 0; // Al crear cuenta es necesario confirmar el e-mail? (1 = Sí | 0 = No)
$chaemail = 1; // Los jugadores pueden cambiar lo e-mail de sus cuentas? (1 = Sí | 0 = No)
$chaemail_confirm = 1; // Para cambiar lo e-mail es necesario confirmar? Si es sí, se enviará una mensaje a lo e-mail actual solicitando la confirmación. Si la cuenta no tiene e-mail, esta opción se omite (1 = Sí | 0 = No)

# SMTP:
$useSMTP = 0; // Enviar mensajes de e-mail a través de SMTP? (1 = Sí | 0 = No)
$SMTP_host = 'smtp.chaoticthronec4@gmail.com'; // Host SMTP
$SMTP_port = 587; // Puerta de conexión para la salida de e-mails (consulte su host, pero generalmente es 587 o 465)
$SMTP_secu = ''; // Exigido protocolo de seguridad? Si sí, introdúzcalo. (Ejemplo: ssl o tls)
$SMTP_user = 'no-chaoticthronec4@gmail.com'; // Usuario de autenticación SMTP (generalmente el correo electrónico remitente)
$SMTP_pass = 'emailpass'; // Contraseña de autenticación SMTP (normalmente la contraseña de correo electrónico remitente)


###########################################################
##                        Captcha                        ##
###########################################################
// El captcha es un generador de códigos que son obligatorios el llenado al registrarse, logar en el panel admin y etc.
$captcha_register_on = 1; // Captcha en el registro (1 = Sí | 0 = No)
$captcha_cp_on = 1; // Captcha al iniciar sesión en el panel de control del usuario (1 = Sí | 0 = No)
$captcha_forgotpass_on = 1; // Captcha al enviar solicitud de recuperación de cuenta a e-mail (1 = Sí | 0 = No)


###########################################################
##                      Directorios                      ##
###########################################################
$dir_gallery = 'imgs/gallery/'; // Directorio de las imágenes de la galería
$dir_banners = 'imgs/banners/'; // Directorio de las imágenes de los banners
$dir_newsimg = 'imgs/news/'; // Directorio de las imágenes de las noticias


###########################################################
##                       Countdown                       ##
###########################################################
$counterActived = 1; // Activar countdown? (1 = Sí | 0 = No)
$cDia = '08'; // Día
$cMes = '10'; // Mês
$cAno = '2021'; // Año
$cHor = '23'; // Hora
$cMin = '59'; // Minuto
$sumH = '-0'; // Si la hora se muestra incorrectamente, añada o disminuya el valor aquí (por ejemplo, si necesita disminuir 2 hrs, introduzca "-2" si necesita añadir 3, introduzca +3)


###########################################################
##                 Registro de Cuentas                   ##
###########################################################
$suffixActive = 1; // Activar sufijo en el login? (método de seguridad que añade 3 valores aleatorios en el login del usuario, para evitar el robo de cuentas a través de listas de login con contraseñas que otros administradores tienen) (1 = Sí | 0 = No)
$forceSuffix = 0; // El sufijo es obligatorio? (1 = Sí | 0 = No) (Si establece '0', los usuarios tendrán la opción "no quiero eso" que ignora el sufijo)
$downRegfile = 1; // Descarga de archivo TXT después de un registro exitoso? (1 = Sí | 0 = No)
$passRegfile = 1; // Mostrar contraseña en el archivo TXT generado después de un registro exitoso? (1 = Sí | 0 = No)

# Fecha de liberación del registro (antes de esa fecha no será posible crear cuentas) - Si desea deshabilitar, basta insertar una fecha que ya pasó.
$reg['dia'] = '08'; // Día
$reg['mes'] = '10'; // Mes
$reg['ano'] = '2021'; // Año
$reg['hr'] = '23'; // Hora
$reg['min'] = '59'; // Minuto


###########################################################
##          Control de visualización de páginas          ##
###########################################################
// ¿Qué páginas están disponibles para el acceso? (1 = Disponible | 0 = No disponible)
$dpage['bosstt'] = 1; // Boss Status
$dpage['bossjl'] = 1; // Boss Jewelry Location
$dpage['galler'] = 1; // Galeria
$dpage['olyall'] = 1; // Olympiad - Histórico de heroes
$dpage['olyher'] = 1; // Olympiad - Heroes atuais
$dpage['olyrak'] = 1; // Olympiad - Ranking
$dpage['csiege'] = 1; // Castle & Siege
$dpage['toppvp'] = 1; // Top PvP
$dpage['toppkp'] = 1; // Top Pk
$dpage['toponl'] = 1; // Top Online
$dpage['toplvl'] = 1; // Top Level
$dpage['topadn'] = 1; // Top Adena
$dpage['topcla'] = 1; // Top Clan
$dpage['unstuk'] = 1; // Unstuck


###########################################################
##                Rankings y Exhibiciones                ##
###########################################################
$cacheDelayMin = 3; // Intervalo en minutos que se actualizan la caché de rankings y estadísticas. Ex: si inserta '1' se actualizará cada 1 minuto
$countTopPlayers = 100; // Cantidad de jugadores mostrados en los Tops PvP, Pk, Online, Level y Adena
$countTopClan = 50; // Cantidad de clanes en el Top Clan
$asideRankCount = 3; // Quantidade de resultados exibidos nos rankings na lateral do site
$galleryMax = 30; // Cantidad de imágenes / vídeos que aparecen en cada página de la galería
$galleCount = 6; // Cantidad de imágenes/videos mostrados en la galería en el lateral del sitio
$inewsCount = 3; // Cantidad de noticias en la página principal del sitio
$showPlayersOn = 1; // Mostrar la cantidad de jugadores online? (1 = Sí | 0 = No)
$fakePlayers = 1.0; // Multiplicación de la cantidad de jugadores online. La cantidad de jugadores online se multiplicará por el valor introducido aquí. (1.0 = Cantidad real / 1.5 = multiplicado por 1.5 / 2.0 = multiplicado por 2 ...) - IMPORTANTE: INSERA PUNTO AL EN VEZ DE COMA/VIRGULA
$srvOffZeroPl = 1; // Si el status del servidor está off, forzar la visualización de 0 jugadores online mismo si hay jugadores online? (1 = Sí | 0 = No)
$olyExibPoint = 1; // El ranking de Grand Olympiad debe exhibir los puntos de los jugadores? (1 = Sí | 0 = No)
$showRankReg = 1; // Mostrar rankings antes de la fecha de liberación del registro? (1 = Sí | 0 = No)
$bossJwlIds = "6656,6657,6658,6659,6660,6661,8191"; // Boss Jewels IDs (Baium Ring, Antharas Earring, etc)
$adnBillionItem = 0; // Hay algún elemento en el servidor que corresponde a 1kkk de adena? Si es sí, introduzca el ID de ese elemento. Se sumará a las adidas en el Top Adena.


###########################################################
##                      Facebook                         ##
###########################################################
$facePopupOn = 1; // Mostrar popup de Facebook? (1 = Sí | 0 = No)
$fbPopupDelay = 1; // De cuántos en cuántos días el popup debe aparecer de nuevo? Ex: Si se pone 1 aparecerá todo el día
$faceBoxOn = 1; // Ver el box de Facebook en la página de inicio? (1 = Sí | 0 = No)
$facePage = 'http://www.facebook.com/nahuel.chaoticthrone.5'; // Página en Facebook


###########################################################
##             Página de donaciones públicas             ##
###########################################################
$coinName = 'Coin'; // Nombre del item donate
$coinPer = '1'; // Cantidad de coins
$coinCur = 'AR$'; // Moneda de esa cantidad
$coinCos = '1.00'; // Valor de esa cantidad


###########################################################
##                 Otras configuraciones                 ##
###########################################################

$defaultLang = 'ES'; // Idioma estándar del site (Elija entre: PT, EN o ES) - El site cuenta con un sistema inteligente que detecta el idioma del navegador del usuario y muestra todo en ese idioma, pero si no podemos detectar o si el navegador está en un idioma diferente tres citados anteriormente, el idioma establecido aquí será el mostrado

$gmt = '+3'; // Si los scripts del site están en una hora temprana o retrasada, cambie el GMT. Ejemplo: -1 (-1 hora), +3 (+3 horas), etc

$bannerDelay = 2; // De cuántos en cuántos segundos los banners en la página inicial se revesan?

// Locs X, Y y Z utilizados en el 'unstuck' del panel de usuario
$unstuck_loc_x = '83257'; // Estándar: 83257
$unstuck_loc_y = '149058'; // Estándar: 149058
$unstuck_loc_z = '-3400'; // Estándar: -3400
