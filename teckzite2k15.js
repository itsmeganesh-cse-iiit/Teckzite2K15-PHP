var scripts = document.getElementsByTagName('script');
var lastScript = scripts[scripts.length-1];
var myScript = lastScript.src;
var myScriptSrc = myScript.replace(/teckzite2k15.js/, '');

/*-------------------------------------------
	Script by Prathap Puppala,N130950
---------------------------------------------*/

// CSS STYLESHEETS

document.write(unescape('%3Clink rel="stylesheet" media="all" href="' + myScriptSrc + 'css/bootstrap.min.css"%3E'));
document.write(unescape('%3Clink rel="stylesheet" media="all" href="' + myScriptSrc + 'css/font-awesome.min.css"%3E'));
document.write(unescape('%3Clink rel="stylesheet" media="all" href="' + myScriptSrc + 'css/main.css"%3E'));
document.write(unescape('%3Clink rel="stylesheet" media="all" href="' + myScriptSrc + 'css/animate.css"%3E'));
document.write(unescape('%3Clink rel="stylesheet" media="all" href="' + myScriptSrc + 'css/responsive.css"%3E'));
document.write(unescape('%3Clink rel="stylesheet" media="all" href="' + myScriptSrc + 'css/sweet-alert.css"%3E'));
document.write(unescape('%3Clink rel="stylesheet" media="all" href="' + myScriptSrc + 'css/style - btn.css"%3E'));
document.write(unescape('%3Clink rel="stylesheet" media="all" href="' + myScriptSrc + 'css/forms.css"%3E'));
document.write(unescape('%3Clink rel="stylesheet" media="all" href="' + myScriptSrc + 'css/buttons.css"%3E'));
document.write(unescape('%3Clink rel="stylesheet" media="all" href="' + myScriptSrc + 'css/table.css"%3E'));
document.write(unescape('%3Clink rel="stylesheet" media="all" href="' + myScriptSrc + 'css/notices.css"%3E'));
document.write(unescape('%3Clink rel="stylesheet" media="all" href="' + myScriptSrc + 'css/video-js.css"%3E'));
document.write(unescape('%3Clink rel="stylesheet" media="all" href="' + myScriptSrc + 'css/eventview.css"%3E'));
// FAV ICON
document.write(unescape('%3Clink rel="icon" media="all" href="' + myScriptSrc + 'img/hh_logo.png"%3E'));

// JAVASCRIPT FILES

!window.jQuery && document.write(unescape('%3Cscript src="' + myScriptSrc + 'js/bootstrap.min.js"%3E%3C/script%3E'));
!window.jQuery && document.write(unescape('%3Cscript src="' + myScriptSrc + 'js/jquery.nav.js"%3E%3C/script%3E'));
!window.jQuery && document.write(unescape('%3Cscript src="' + myScriptSrc + 'js/video.js"%3E%3C/script%3E'));
!window.jQuery && document.write(unescape('%3Cscript src="' + myScriptSrc + 'js/jquery.lazy.js"%3E%3C/script%3E'));
// Mobile viewport optimized
document.write(unescape('%3Cmeta name="viewport" content="width=device-width, initial-scale=1.0"%3E'));

/*-------------------------------------------
	Fin
---------------------------------------------*/
