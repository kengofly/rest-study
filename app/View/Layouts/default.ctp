<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>シンプルTODOアプリ</title>
</head>
<body>

	<!-- js(library)  -->
	<script src="js/lib/jquery-2.1.3.min.js"></script>
	<script src="js/lib/underscore-min.js"></script>
	<script src="js/lib/backbone-min.js"></script>

	<!-- js(application) -->
	<!-- model -->
	<script src="js/models/todo-model.js"></script>
	<!-- colection -->
	<script src="js/collections/todo-collection.js"></script>
	<!-- view -->
	<script src="js/views/todo-collection-view.js"></script>
	<!-- router -->
	<script src="js/routers/router.js"></script>
	<!-- entry point -->
	<script src="js/app.js"></script>
</body>
</html>
