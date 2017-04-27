<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Journal Archive <?php } ?> <?php wp_title(); ?></title>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Rosario' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>

</head>
<body>