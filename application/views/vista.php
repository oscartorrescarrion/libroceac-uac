
<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8" />



<?php

foreach($css_files as $file): ?>

	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />



<?php endforeach; ?>

<?php foreach($js_files as $file): ?>



	<script src="<?php echo $file; ?>"></script>

<?php endforeach; ?>



<style type='text/css'>

body

{

	font-family: Arial;

	font-size: 14px;

}

a {

	color: blue;

	text-decoration: none;

	font-size: 14px;

}

a:hover

{

	text-decoration: underline;

}

</style>

</head>

<body>

<!-- Beginning header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <h1><a class="navbar-brand">Libro de Registros CEAC</a></h1>

</nav>
<!-- End of header-->

	<div style='height:0px;'></div>

	<div>

		<?php echo $output; ?>



	</div>

<!-- Beginning footer -->

<div></div>

<!-- End of Footer -->

</body>

</html>
