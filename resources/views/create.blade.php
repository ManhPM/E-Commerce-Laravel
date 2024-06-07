<!DOCTYPE html>
<html lang="en">

				<head>
								<meta charset="UTF-8">
								<meta name="viewport" content="width=device-width, initial-scale=1.0">
								<meta http-equiv="X-UA-Compatible" content="ie=edge">
								<title>Laravel</title>
				</head>

				<body>
								<h1>Thêm Phòng Mới</h1>
								<h2>Tên phòng</h2>
								<form action="{{ route("store") }}" method="POST">
												@csrf
												<div class="form-group">
																<input name="name" type="text" class="form-control" id="exampleInputEmail1"
																				aria-describedby="emailHelp" placeholder="Nhập tên phòng">
												</div>
												<button style="margin-top: 16px" type="submit" class="btn btn-primary">Thêm</button>
								</form>
				</body>

</html>
