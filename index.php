<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />-->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/vtikhomirov/css/default.css" type="text/css" />
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>
<header role="banner">
<h1><a href="/">Виктор <span>Тихомиров</span></a></h1>
<nav>
	<jdoc:include type="modules" name="topmenu" />
</nav>
</header>

<div id="wrap">
<aside>
	<img width="200" src="">
</aside>
<section id="content" role="page">
	<article role="main">
		<jdoc:include type="component" />
	19 августа 2010. Презентация книги "Чапаев-Чапаев" в "Бувоеде на Восстания". Лиговский пр., 10 (в здании гостиницы «Октябрьская»). Начало в 19:00. 
	</article>
</section>
</div>
<!-- Yandex.Metrika counter -->
<div style="display:none;"><script type="text/javascript">
(function(w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter4730989 = new Ya.Metrika(4730989);
             yaCounter4730989.clickmap(true);
             yaCounter4730989.trackLinks(true);
        
        } catch(e) { }
    });
})(window, 'yandex_metrika_callbacks');
</script></div>
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
<noscript><img src="//mc.yandex.ru/watch/4730989" style="position:absolute; left:-9999px;" alt="" /></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
