<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="{{asset('public/layout/fontend')}}/">
<title>Forms</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- <link href="css/datepicker3.css" rel="stylesheet"> -->
<link href="css/registration.css" rel="stylesheet">
 <script src="https://kit.fontawesome.com/2703c57f79.js" crossorigin="anonymous"></script>
</head>

<body>
	<header>
		
	</header>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 ">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Đăng ký thành viên</div>
				<div class="panel-body">
					<form role="form" method="post" action="{{url('registration')}}">
						@include('errors.note')
						{{csrf_field()}}
						<fieldset>
							<div class="form-group">
								<p>Tên đăng nhập <span class="note">*</span></p>
								<input class="form-control" placeholder="name_id" name="name_id" type="text" autofocus="" >
								 @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
						    </div>
							<div class="form-group">
								<p>Họ và tên  <span class="note">*</span></p>
								<input class="form-control" placeholder="name" name="name" type="text" autofocus="">
								 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
						    </div>
							<div class="form-group">
								<p>Email  <span class="note">*</span></p>
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
								 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group">
								<p>Mật khẩu  <span class="note">*</span></p>
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
								@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group">
								<p>Nhập lại mật khẩu  <span class="note">*</span></p>
								<input class="form-control" placeholder="password_confirmation" name="password_confirmation" type="password" value="">
								@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>
							
							<button class="btn btn-primary " type="submit" value="Đăng ký"> Đăng ký</button>
						</fieldset>
					</form>
					<p class="note"> * (Bắt buộc)</p>
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
