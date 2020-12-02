<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-17 13:54:36
  from 'C:\OSPanel\domains\test\application\views\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb3abecb05164_60871202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2106a9bc8a5c602fbf3da7a46d78543e5f22284' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test\\application\\views\\header.tpl',
      1 => 1605511029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb3abecb05164_60871202 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/bootstrap-4.5.3-dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="/style.css">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
<div class="container">	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="/">Олимпиские игры</a>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="/countries">добавить страну</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/medal">добавить медаль</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/sports">добавить вид спорта</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/sportsmans">добавить спортсмена</a>
			</li>
			</ul>
		</div>
	</nav>	<?php }
}
