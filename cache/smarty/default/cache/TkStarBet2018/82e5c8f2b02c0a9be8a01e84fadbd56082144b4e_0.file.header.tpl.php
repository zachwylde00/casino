<?php
/* Smarty version 3.1.31, created on 2020-01-27 18:20:45
  from "/home/gang4bet/public_html/themes/default/TkStarBet2018/partials/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e2ef8c5d836b4_42924017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82e5c8f2b02c0a9be8a01e84fadbd56082144b4e' => 
    array (
      0 => '/home/gang4bet/public_html/themes/default/TkStarBet2018/partials/header.tpl',
      1 => 1544650914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/header_menu.tpl' => 1,
  ),
),false)) {
function content_5e2ef8c5d836b4_42924017 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_setting')) require_once '/home/gang4bet/public_html/TkStarApplication/modules/settings/smarty/plugins/function.setting.php';
if (!is_callable('smarty_function_assets_url')) require_once '/home/gang4bet/public_html/TkStarApplication/smarty/plugins/function.assets_url.php';
?>
<head>
	<meta charset="utf-8" />
	<title><?php echo smarty_function_setting(array('name'=>'site_name'),$_smarty_tpl);?>
</title>
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<meta name="viewport" content="width=device-width" />
    <meta property="og:type" content="website" />    
    <meta property="og:title" content="ریچ بت - بزرگترین سایت پیش بینی مسابقات ورزشی دارای کازینو" />
    <meta property="og:description" content="سایت ریچ بت به روز ترین سایت پیش بینی مسابقات ورزشی دارای بهترین ضریب ها برای کاربران. به همراه کامل ترین کازینو" />
    <meta property="og:site_name" content="Richbet" />
	<meta name="description" content="سایت ریچ بت به روز ترین سایت پیش بینی مسابقات ورزشی دارای بهترین ضریب ها برای کاربران. به همراه کامل ترین کازینو" />
	<link href="<?php echo smarty_function_assets_url(array(),$_smarty_tpl);?>
/content/main_styles.css" rel="stylesheet"/>
	<link href="<?php echo smarty_function_assets_url(array(),$_smarty_tpl);?>
/content/sport_fonts.css" rel="stylesheet"/>
	<link href="<?php echo site_url();?>
casino/templates/css/swal.css" rel="stylesheet"/>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_assets_url(array(),$_smarty_tpl);?>
/bundles/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_assets_url(array(),$_smarty_tpl);?>
/bundles/jquery.chiz.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_assets_url(array(),$_smarty_tpl);?>
/bundles/jqueryui.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_assets_url(array(),$_smarty_tpl);?>
/bundles/bootstrap.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_assets_url(array(),$_smarty_tpl);?>
/bundles/mask.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		var base_url = '<?php echo site_url();?>
';
		var TkStarFreamWork = jQuery;
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo site_url();?>
casino/templates/js/swal.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_assets_url(array(),$_smarty_tpl);?>
/bundles/updates.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_assets_url(array(),$_smarty_tpl);?>
/bundles/folds.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_assets_url(array(),$_smarty_tpl);?>
/bundles/sport.js"><?php echo '</script'; ?>
>
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender("file:partials/header_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
