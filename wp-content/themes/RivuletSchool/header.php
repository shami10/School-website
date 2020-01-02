<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<?php wp_head(); ?> 	
</head>
<body>

<header>
	<div class="top-header">
	<ul class="top-ul-left">
		<a href=""><li>Admissions</li></a>
		<a href=""><li>Fee Structure</li></a>
		<a href="<?php echo site_url('/faq'); ?>"><li>FAQ</li></a>
	</ul>
	<ul class="top-ul-right">
		<li><a href="">Facebook</a></li>
		<li><a href="">Twitter</a></li>
		<li><a href="">Linkedin</a></li>
		<li><a href="">Instagram</a></li>
	</ul>
</div>
<!-- main-header -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo site_url(''); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo site_url(''); ?>">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/about-us'); ?>">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/curriculum'); ?>">CURRICULUM</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/education'); ?>">EDUCATION</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/services'); ?>">OUR SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/contact-us'); ?>">CONTACT US</a>
      </li>
    </ul>
  </div>
</nav>

</header>
<button onclick="topFunction()" id="myBtn" title="Go to top">&#8593;</button>
