<?php
$this->pageTitle='Home';
//$this->pageDescription='';
//$this->pageKeywords='';
//$this->pageAuthor='';
$this->pageOgTitle = 'my title';
$this->pageOgDesc = 'my title';
$this->pageOgImage = 'my title';
?>

<h1>Welcome to <i><?php echo gl('site_name'); ?></i></h1>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p><a href="/documentation/index.html">Read the CMS Documentation here</a></p>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>