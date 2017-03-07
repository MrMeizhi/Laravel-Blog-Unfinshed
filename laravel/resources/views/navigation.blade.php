{{--
	这个html文件是导航栏的模板
	总共有两处：
	1,第32-33行准备要显示的是博客的名字
	2,第47-48行准备要显示的是博客中文章的种类

--}}


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body class="">


{{--<div class="container">--}}
	{{--<div class="row clearfix ">--}}

		{{--<div class="col-md-1 column"></div>--}}
		{{--<div class="col-md-12 column">--}}
			<nav class="navbar navbar-default " role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>

				</div>

				<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
					{{--<div class="col-md-1">--}}

					{{--</div>--}}

					<ul class="nav navbar-nav">
						@section('menu_name')
							@show()

						{{--这里放置顶部菜单选项--}}
						<li class="dropdown">

							<a class="dropdown-toggle" data-toggle="dropdown">所有文章<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								@section('menu_type')
								@show()
							</ul>
						</li>
						@section('choose_type')
							@show()
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<form class="navbar-form navbar-left" role="search" method="post" action="http://127.0.0.1/laravel/public/index.php/search/">
							<div class="form-group">
								{{--<span class="input-group-addon"> <span class="glyphicon glyphicon-search "></span></span>--}}
								<input type="text" class="form-control " name="word"/>
							</div> <button type="submit" class="btn btn-primary">Search</button>
						</form>
					</ul>
				</div>

			</nav>
		{{--</div>--}}
		{{--<div class="col-md-1 column"></div>--}}
	{{--</div>--}}
{{--</div>--}}


</body>
</html>

