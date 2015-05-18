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
	<!-- コンテンツ -->
	<div id="content">
	</div>
	<!-- TODO一覧表示のテンプレート -->
	<script type="text/template" id="list-template">
	<h1>TODOリスト</h1>
	 <hr>
	 <div>
		<table border="1" width="350px">
			<tbody id="todo-lists"></tbody>
		</table>
	</div>
	</script>

	<!-- TODO一行分のテンプレート（上のtbody部分に挿入される） -->
	<script type="text/template" id="item-template">
	<td style="margin:0px">
		<span class="todo-edit" style="margin:0px"><%- todo %></span>
	</td>
	</script>

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
	<script src="js/views/todo-item-view.js"></script>
	<script src="js/views/todo-collection-view.js"></script>
	<!-- router -->
	<script src="js/routers/router.js"></script>
	<!-- entry point -->
	<script src="js/app.js"></script>
</body>
</html>
