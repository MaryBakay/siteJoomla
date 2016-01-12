<?php defined( '_JEXEC' ) or die; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru" dir="ltr">
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="/joomla/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="/joomla/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="/joomla/templates/<?php echo $this->template; ?>/css/style.css" type="text/css" />
</head>
<body>
	<div id="layout">
	    <div id="header">
	        <jdoc:include type="modules" name="top-menu"/>
	    </div>

	    <div id="left">
	        <jdoc:include type="modules" name="left-column" style="xhtml" />
	    </div>

	    <div id="content">
	        <jdoc:include type="message" />
	        <jdoc:include type="component" />
	    </div>

	    <div id="right">
	        <jdoc:include type="modules" name="right-column" style="xhtml" />
	    </div>

	    <div class="clear"></div>

	    <div id="footer">
	        <jdoc:include type="modules" name="footer" style="xhtml" />
	    </div>
	</div>
</body>
</html>