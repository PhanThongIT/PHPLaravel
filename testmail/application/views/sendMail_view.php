<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SendMail</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/ckeditor/ckfinder/ckfinder.js"></script>
</head>
<body>
	<div class="container">
		<h3 class="text-xs-center">Cùng học gửi mail</h3>
		<hr>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 push-sm-3">
				<form action="SendMail/do_send" method="post">
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Tên người gửi:</label>
						<input type="text" class="form-control" id="formGroupExampleInput" name="ten" placeholder="nhập tên">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput2">Email người nhận:</label>
						<input type="text" class="form-control" id="formGroupExampleInput2" name="email" placeholder="nhập email">
					</fieldset>
					<fieldset class="form-group">
						<label for="noidung">Nội dung:</label>
						<textarea name="noidung" id="noidung" cols="30" rows="10"></textarea>
					</fieldset>
					<input type="submit" class="btn btn-success btn-block" value="Gửi">
				</form>
			</div>
		</div>
	</div>
	<script>
		CKEDITOR.replace( 'noidung',
		{
			filebrowserBrowseUrl : '/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '/ckfinder/ckfinder.html?type=Images',
		});
	</script>
</body>
</html>