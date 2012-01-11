<?php
// Set up a fake data set
$data = array();
for($i=1;$i<=10;$i++) {
	$data[] = array(
		'id'		=> $i,
		'title'		=> 'Title '.$i,
		'alias'		=> 'title_'.$i,
		'author'	=> 'Me',
		'date'		=> date("Y-m-d")
	);
}

// Set up sortables
$sortable = array('id', 'title', 'author', 'date');

// Set up filterables
$filterable = array('title', 'author');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Edit View</title>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="http://cdn.jquerytools.org/1.2.6/jquery.tools.min.js"></script>
	<script src="http://cdn.jquerytools.org/1.2.6/form/jquery.tools.min.js"></script>
	
	<script>
	jQuery(document).ready(function($) {
		$(function() {
			$(".tabs").tabs("div.tabs-content > div");
			$(":date").dateinput()
		});
	});
	</script>

	<link rel="stylesheet" href="./foundation/stylesheets/foundation.css">
	<link rel="stylesheet" href="./custom/css/datepicker.css"">
	<link rel="stylesheet" href="./custom/css/custom.css">
	
	<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body>

<?php require('./snippets/menu.php') ?>
<?php require('./snippets/toolbar.php') ?>

	<div class="alert-box error">
		<a class="close" href="#">×</a>
		<p><strong>Shoot!</strong> The article could not be saved.</p>
	</div>
	
	<form class="nice custom">
	
	<!-- the tabs -->
	<dl class="tabs">
		<dd><a href="#content" class="active">Content</a></dd>
		<dd><a href="#access">Access</a></dd>
		<dd><a href="#props">Properties</a></dd>
	</dl>
	
	<!-- tab "panes" -->
	<div class="tabs-content">
		<div class="active" id="content">
		
			<fieldset>
				<h2>Some header</h2>
				<div class="input-row">
					<label for="title">Title</label>
					<input type="text" class="oversize input-text" id="title" name="title" />
				</div>
				<div class="input-row">
					<label for="alias">Alias</label>
					<input type="text" class="input-text" id="alias" name="alias" />
				</div>
				<div class="input-row">
					<label for="date">Date</label>
					<input type="date" class="small input-text" id="date" name="date" />
				</div>
				<div class="input-row">
					<span>Enabled</span>
					<label for="publish1"><input type="radio" id="publish1" name="publish" value="1" />yes</label>
					<label for="publish0"><input type="radio" id="publish0" name="publish" value="0" />no</label>
				</div>
			</fieldset>
						
		</div>
		<div id="access">
		</div>
		<div id="props">
		
			<fieldset>
				<h2>Parameter Set</h2>
				<div class="input-row">
					<label for="options">Some options</label>
					<select id="options" name="options">
						<option value="">Please select</option>
						<option value="1"></option>
						<option value="2"></option>
						<option value="3"></option>
					</select>
				</div>
				<div class="input-row">
					<span class="group-label">Some boolean setting</span>
					<label for="value1"><input type="radio" id="value1" name="value" value="1" />yes</label>
					<label for="value0"><input type="radio" id="value0" name="value" value="0" />no</label>
				</div>
			</fieldset>

			<fieldset>
				<h2>Parameter Set</h2>
				<div class="input-row">
					<span class="group-label">Some multiple-choice setting</span>
					<label for="valuea"><input type="checkbox" id="valuea" name="value" value="a" />Option a</label>
					<label for="valueb"><input type="checkbox" id="valueb" name="value" value="b" />Option b</label>
					<label for="valuec"><input type="checkbox" id="valuec" name="value" value="c" />Option c</label>
					<label for="valued"><input type="checkbox" id="valued" name="value" value="d" />Option d</label>
				</div>
			</fieldset>
			
		</div>
	</div>
	
	</form>

</body>
</html>
