<?php
/*
 * Archivo de configuraci�n de las clases que usaremos
 * Se llama desde Configure::getClass('NombreClase');
 */

/**
 * Engine:  Don't modify.
 */
//$config['factory']						=  PATH_ENGINE . 'factory.class.php';
//$config['sql']							=  PATH_ENGINE . 'sql.class.php';


$config['mail']							=  PATH_ENGINE . 'mail.class.php';
$config['session']						=  PATH_ENGINE . 'session.class.php';
$config['user']							=  PATH_ENGINE . 'user.class.php';
$config['url']							=  PATH_ENGINE . 'url.class.php';
$config['uploader']						=  PATH_ENGINE . 'uploader.class.php';


$config['dispatcher']					=  PATH_ENGINE . 'dispatcher.class.php';


/** 
 * Controllers & Models
 *
 */

// 404 Controller
$config['ErrorError404Controller']		= PATH_CONTROLLERS . 'error/error404.ctrl.php';

// Home Controller
$config['HomeHomeController']			= PATH_CONTROLLERS . 'home/home.ctrl.php';
$config['HomeBaseController']			= PATH_CONTROLLERS . 'home/base.ctrl.php';
$config['HomeJoaki1Controller']			= PATH_CONTROLLERS . 'home/joaki1.ctrl.php';
$config['HomeJoaki2Controller']			= PATH_CONTROLLERS . 'home/joaki2.ctrl.php'; 
$config['HomeEx1Controller']			= PATH_CONTROLLERS . 'home/ex1.ctrl.php';
$config['Projecte2Ex2Controller']		= PATH_CONTROLLERS . 'projecte2/ex2.ctrl.php';
$config['Projecte3Ex3Controller']		= PATH_CONTROLLERS . 'projecte3/ex3.ctrl.php';
$config['Projecte3Ex3bController']		= PATH_CONTROLLERS . 'projecte3/ex3b.ctrl.php';

    
// Shared controllers
$config['SharedHeadController']			= PATH_CONTROLLERS . 'shared/head.ctrl.php';
$config['SharedFooterController']		= PATH_CONTROLLERS . 'shared/footer.ctrl.php';


// Models
$config['Projecte2Ex2Model'] = PATH_MODELS . 'projecte2/ex2.model.php';
$config['Projecte3Ex3Model'] = PATH_MODELS . 'projecte3/ex3.model.php';
$config['Projecte3Ex3bModel'] = PATH_MODELS . 'projecte3/ex3b.model.php';