<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bốc Thăm</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-lg-8">
					<h1>Chào mừng ngày Quốc Tế Phụ Nữ 8/3</h1>
				</div>
				<div class="col-lg-4">
					<h3>
						<a class="btn btn-danger btn-sm pull-right" href="">Vòng kế</a>
					</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="jumbotron">
					<p><button class="btn btn-lg btn-success" id="btn_random">Chọn đối tác</button></p>
				</div>
				<div id="error"></div>
			</div>
			<div class="col-lg-8" id="result">

			</div>
		</div>
		<!-- Site footer -->
		<footer class="footer">
			<p>&copy; <?php echo date('Y'); ?> DC12, Activity Team.</p>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#btn_random').on('click', function() {
				doSubmit();
			});
		});
		function doSubmit() {
			$.ajax({
				method: "POST",
				url: "random.php",
				dataType: "json",
				data: { 'submit': 1 }
			})
			.done(function(res) {
				var no = 0;
				$('#error').empty();
				var msg = '';
				$.each(res.result, function(key, data) {
					no++;
					msg = '<div class="col-lg-4"><div class="thumbnail"><span class="badge">#' + data.id + '</span><img src="img/' + data.img + '"><div class="caption"><h4><span class="label label-primary">' + data.name + '</span></h4></div></div></div>';					
					$('#result').append(msg);
				});
				if (no == 0) {
					$('#error').html('<span class="alert alert-danger">Không có kết quả phù hợp</span>');
				}
			});
		}
	</script>
</body>
</html>