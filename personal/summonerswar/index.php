<?php
require 'config.php';
$ms = !empty($_GET['ms']) ? $_GET['ms'] : '';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Summoners War</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    <div id="chart_div"></div>
    <script type="text/javascript">
    	google.charts.load('current', {packages:["orgchart"]});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Name');
			data.addColumn('string', 'Manager');
			data.addColumn('string', 'ToolTip');

			// For each orgchart box, provide the name, manager, and tooltip to show.
			data.addRows([
				[{v:'ndtuyen', f:'Tuyen Nguyen'}, '', ''],
				<?php foreach ($boss as $b): ?>
				<?php if (!empty($ms) && $ms != $b['name']) continue ; ?>
				[{v:'<?php echo $b['name']; ?>', f:'<img src="<?php echo $b['img']; ?>"/><br><?php echo $b['name']; ?> <div><img src="img/<?php echo $b['type']; ?>.png" width="24px"/></div>'}, 'ndtuyen', ''],
				 	<?php foreach ($b['materials'] as $m): ?>
				 	<?php $count_m2 = 0; ?>
				 	[{v:'<?php echo $m['name1']; ?>', f:'<img src="<?php echo $m['img']; ?>"/><br><?php echo $m['name1']; ?> (<?php echo $m['name2']; ?>)<div><img src="img/<?php echo $m['type']; ?>.png" width="24px"/></div>'}, '<?php echo $b['name']; ?>', ''],
				 		<?php if (!empty($m['materials'])): ?>
					 		<?php foreach ($m['materials'] as $m2): ?>
						 	<?php
						 	if ($count_m2 == 0) {
						 		$parent = $m['name1'];
						 	} else {
						 		$parent = $m['materials'][$count_m2 - 1]['name1'];
						 	}
						 	$count_m2++;
						 	?>
						 	[{v:'<?php echo $m2['name1']; ?>', f:'<img src="<?php echo $m2['img']; ?>"/><br><?php echo $m2['name1']; ?> (<?php echo $m2['name2']; ?>)<div><img src="img/<?php echo $m2['type']; ?>.png" width="24px"/></div>'}, '<?php echo $parent; ?>', ''],
							<?php endforeach; ?>
						<?php endif; ?>
					<?php endforeach; ?>		
				<?php endforeach; ?>			
			]);

			// Create the chart.
			var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
			// Draw the chart, setting the allowHtml option to true for the tooltips.
			chart.draw(data, {
				allowHtml:true, 
				allowCollapse:true,
			});
			google.visualization.events.addListener(chart, 'select', function() {
				var row = chart.getSelection()[0].row;
				alert('You selected ' + data.getValue(row, 0));
			});

			google.visualization.events.addListener(chart, 'onmouseover', function() {
				var row = chart.getSelection()[0].row;
				
			});

			google.visualization.events.addListener(chart, 'onmouseout', function() {
				var row = chart.getSelection()[0].row;
				
			});
		}
    </script>
</body>
</html>