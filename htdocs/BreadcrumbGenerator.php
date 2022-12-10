
<?php
	/*
		generates breadcrumbs
		gets url from server, generates an <ol> with --bs 
		'breadcrumbs' class, list elements with a --bs
		'breadcrumbs-item' class. There's a js function in 
		the script that handles the fragment identifiers when 
		appropriate
	*/

	function breadcrumbs($sep = ' > ', $home = 'VisitTaniti.com') {

		$base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
		$path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
		$breadcrumbs = Array("<ol class='breadcrumb' id='crumbs'><li class='breadcrumb-item'><a href=\"index.php\">$home</a></li>"); 
		$last_one = end(array_keys($path));

		$relative_path = array_slice($path, 2);

		foreach ($relative_path as $i => $crumb) {
			$link_text = str_replace(Array('.php', '-', 'index'), Array('', ' ', 'home'), $crumb);

			if ($i != $last_one) {
				$breadcrumbs[] = "<li class='breadcrumb-item'><a href=\"$crumb\">$link_text</a></li>";
			} else {
				$breadcrumbs[] = "<li class='breadcrumb-item'>".$link_text."</li>";
			}
		}

		return implode($breadcrumbs);
	}

?>