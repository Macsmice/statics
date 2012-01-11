<?php
// Set up a fake data set
$data = array();
for($i=1;$i<=10;$i++) {
	$data[] = array(
		'title'		=> 'Title '.$i,
		'alias'		=> 'title_'.$i,
		'author'	=> 'Me',
		'date'		=> date("Y-m-d"),
		'id'		=> $i
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
	<title>List View</title>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="twitter/js/bootstrap-twipsy.js"></script>

	<link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css">
	<link rel="stylesheet" href="./custom/css/custom.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body>

<?php require('./snippets/menu.php') ?>
<?php require('./snippets/toolbar.php') ?>

<div class="alert-message success">
  <a class="close" href="#">×</a>
  <p><strong>Yay!</strong> You did it!</p>
</div>

<div class="alert-message block-message warning">
  <a class="close" href="#">×</a>
  <p><strong>Are you sure?</strong> If you delete it, it's gone for good.</p>
  <div class="alert-actions">
    <a class="btn danger small" href="#">Yes, go ahead and delete it</a> <a class="btn small" href="#">Oops, I almost made a booboo</a>
  </div>
</div>

				<div id="list">

				<?php require('./snippets/filter.php') ?>

				<?php if(count($data)): ?>
				
					<table id="dataList" class="zebra-striped">
					<tbody>
						<?php $c=1; foreach($data AS $row): ?>
						<tr class="<?php echo $c%2 ? 'uneven' : 'even' // Add some even/uneven classes for older browsers ?>">
							<td><input type="checkbox" /></td>
							<td><?php echo $c ?></td>
							<?php foreach($row AS $column => $value): ?>
							<td>
								<?php if($column=='title'): ?>
								<a href="#" data-placement="below" rel='twipsy' title='Some title text'><?php echo $value?></a>
								<?php else: ?>
								<?php echo $value?>
								<?php endif; ?>
							</td>
							<?php endforeach ?>
						</tr>
						<?php $c++; endforeach ?>
					</tbody>
					<thead>
						<tr>
							<th></th>
							<th class="header">#</th>
							<?php foreach($row AS $column => $value): ?>
							<th class="<?php echo in_array($column,$sortable) ? 'blue header' : '' ?>">
								<?php echo $column ?>
							</th>
							<?php endforeach ?>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td class="toggle"><input type="checkbox" /></td>
							<td colspan="<?php echo count($row)+1 ?>">Click to select (deselect) all</td>
						</tr>
					</tfoot>
				</table>

				<?php require('./snippets/pagination.php') ?>
				
				<?php else: ?>
				
				<p>Nothing</p>
				
				<?php endif ?>
				
				</div>

</body>
</html>
