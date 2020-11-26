<!DOCTYPE html>
<?php if(!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); ?>
<?php if(!defined('datalist_db_encoding')) define('datalist_db_encoding', 'UTF-8'); ?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="<?php echo datalist_db_encoding; ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php echo ucwords('BLOG ADMIN'); ?> | <?php echo (isset($x->TableTitle) ? $x->TableTitle : ''); ?></title>
		<link id="browser_favicon" rel="shortcut icon" href="<?php echo PREPEND_PATH; ?>resources/images/appgini-icon.png">

		<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/initializr/css/yeti.css">
		<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/lightbox/css/lightbox.css" media="screen">
		<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/select2/select2.css" media="screen">
		<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/timepicker/bootstrap-timepicker.min.css" media="screen">
		<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/datepicker/css/datepicker.css" media="screen">
		<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>dynamic.css.php">

		<!--[if lt IE 9]>
			<script src="<?php echo PREPEND_PATH; ?>resources/initializr/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<![endif]-->
		<script src="<?php echo PREPEND_PATH; ?>resources/jquery/js/jquery-1.12.4.min.js"></script>
		<script>var $j = jQuery.noConflict();</script>
		<script src="<?php echo PREPEND_PATH; ?>resources/jquery/js/jquery.mark.min.js"></script>
		<script src="<?php echo PREPEND_PATH; ?>resources/initializr/js/vendor/bootstrap.min.js"></script>
		<script src="<?php echo PREPEND_PATH; ?>resources/lightbox/js/prototype.js"></script>
		<script src="<?php echo PREPEND_PATH; ?>resources/lightbox/js/scriptaculous.js?load=effects"></script>
		<script src="<?php echo PREPEND_PATH; ?>resources/select2/select2.min.js"></script>
		<script src="<?php echo PREPEND_PATH; ?>resources/timepicker/bootstrap-timepicker.min.js"></script>
		<script src="<?php echo PREPEND_PATH; ?>resources/jscookie/js.cookie.js"></script>
		<script src="<?php echo PREPEND_PATH; ?>resources/datepicker/js/datepicker.packed.js"></script>
		<script src="<?php echo PREPEND_PATH; ?>common.js.php"></script>
		<?php if(isset($x->TableName) && is_file(dirname(__FILE__) . "/hooks/{$x->TableName}-tv.js")){ ?>
			<script src="<?php echo PREPEND_PATH; ?>hooks/<?php echo $x->TableName; ?>-tv.js"></script>
		<?php } ?>

	</head>
	<style>
	hr{
		display:none;
	}
	.hidden-xs.hidden-md {
    display: none;
}
	#insert {
    background-color: black;
    border: none;
    border-radius: 3px;
}
	#blog_categories_add_new {
    background-color: black;
    border: none;
}
	.panel-heading {
    background-color: black !important;
    color: white !important;
    padding-left: 27px !important;
}
	.blog_categories-name a {
    color: black;
    font-size: 14px;
}
	.table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td {
     border:none !important
	}
	thead {
    height: 25px !important;
    background-color: black;
    color: white !important;
}
#select_all_records {
    position: absolute;
    margin-top: -28px;
}
thead tr {
    height: 56px;
    border: none;
    margin-bottom: 36px !important;
}
thead tr th a {
	font-size: 13px;
    margin-top: -31px !important;
    color: white !important;
    position: absolute;
    padding-left: 2px;

}
	#Previous {
    background-color: black;
    padding: 10px;
    color: white;
    font-size: 18px;
    border-radius: 5px;
}
.table.table-striped.table-bordered.table-hover tbody tr td {
    padding: 10px;
    margin-top: 10px !important;
	border: none;
}
#Next {
    background-color: white;
    padding: 10px;
    color: black;
    font-size: 18px;
    border-radius: 5px;
}
	.table.table-striped.table-bordered.table-hover {
    margin-top: 12px;
}
	.btn-group.btn-group-lg.visible-md.visible-lg.all_records.pull-left button {
    margin-left: 4px;
    border-radius: 2px;
}
	#addNew {
    background-color: black;
}
	button#ClearQuickSearch{
    width: 47px;
    height: 40px;
}
	#Search {
    width: 47px;
    height: 40px;
}
	#SearchString {
    border: none;
    height: 40px;
    background-color: #f8f8f8;
    border-top-left-radius: 6px;
    border-bottom-left-radius: 6px;
}
	.btn-group.btn-group-lg.visible-md.visible-lg.all_records.pull-left {
    padding-top: 12px;
    padding-left: 18px;
}
	#top_buttons {
    height: 62px;
    background-color: #f8f8f8;
}
	.page-header {
    border: none;
}
	.btn.btn-danger.navbar-btn.hidden-xs i::before {
    padding-right: 5px;
    font-size: 13px;
	}
	a.btn.navbar-btn.btn-default{
		margin-top: 2px;
    border-radius: 5px;
    padding: 9px 15px 10px 10px;		
	}
	.theme-compact .navbar {
    min-height: 62px !important;
     }
	 .navbar-header {
    padding-top: 10px;
    }
	.btn.btn-danger.navbar-btn.hidden-xs {
    margin-top: 2px;
    border-radius: 5px;
    padding: 9px 15px 10px 10px;
}
    .navbar-header a i {
    padding-right: 5px;
    }
	.collapse.navbar-collapse {
    padding-top: 10px;
}
	</style>
	<body>
		<div class="container theme-yeti theme-compact">
			<a>hiiii</a>
			<?php if(function_exists('handle_maintenance')) echo handle_maintenance(true); ?>

			<?php if(!$_REQUEST['Embedded']){ ?>
				<?php if(function_exists('htmlUserBar')) echo htmlUserBar(); ?>
				<div style="height: 70px;" class="hidden-print"></div>
			<?php } ?>

			<?php if(class_exists('Notification')) echo Notification::placeholder(); ?>

			<!-- process notifications -->
			<?php $notification_margin = ($_REQUEST['Embedded'] ? '15px 0px' : '-15px 0 -45px'); ?>
			<div style="height: 60px; margin: <?php echo $notification_margin; ?>;">
				<?php if(function_exists('showNotifications')) echo showNotifications(); ?>
			</div>

			<?php if(!defined('APPGINI_SETUP') && is_file(dirname(__FILE__) . '/hooks/header-extras.php')){ include(dirname(__FILE__).'/hooks/header-extras.php'); } ?>
			<!-- Add header template below here .. -->

