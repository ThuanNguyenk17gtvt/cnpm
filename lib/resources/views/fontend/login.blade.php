<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>
<base href="{{asset('public/layout/fontend')}}/">

<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- <link href="css/datepicker3.css" rel="stylesheet"> -->
<link href="css/dangnhap.css" rel="stylesheet">
</head>

<body>
	<header>
		
	</header>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 ">
			<div class="login-panel panel panel-default">
				@if ( Session::has('success') )
					<div class="alert alert-success alert-dismissible" role="alert">
						<strong>{{ Session::get('success') }}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
					</div>
				@endif
				@if ( Session::has('error') )
					<div class="alert alert-danger alert-dismissible" role="alert">
						<strong>{{ Session::get('error') }}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
					</div>
				@endif
				@if ($errors->any())
					<div class="alert alert-danger alert-dismissible" role="alert">
						<ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
					</div>
				@endif
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" method="post" action="{{url('login')}}" >
						<fieldset> 
							<div class="form-group">
								<p>Tên đăng nhập <span class="note">*</span></p>
								<input class="form-control" placeholder="name_id" name="name_id" type="text" autofocus=""  >
						    </div>
							<div class="form-group">
								<p>Mật khẩu <span class="note">*</span></p>
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
						</fieldset>
						{{csrf_field()}}
						<p class="note"> * (Bắt buộc)</p>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
