
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head>
		<meta charset="utf-8" />
		<title>{{$pageTitle}}</title>
		<meta name="description" content="Đăng nhập hệ thống" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="assets/css/pages/login/classic/login-6.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-6 login-signin-on login-signin-on d-flex flex-column-fluid" id="kt_login">
				<div class="d-flex flex-column flex-lg-row flex-row-fluid text-center" style="background-image: url(assets/media/bg/bg-3.jpg);">
					<!--begin:Aside-->
					<div class="d-flex w-100 flex-center p-15">
						<div class="login-wrapper">
							<!--begin:Aside Content-->
							<div class="text-dark-75">
								<a href="#">
									<img src="images/LIFESOFT.png" class="max-h-75px" alt="" />
								</a>
								<h4 class="mb-6 mt-5 font-weight-bold text-uppercase">Tiện ích hơn - Hiệu quả hơn</h4>
{{--								<p class="mb-15 text-muted font-weight-bold">The ultimate Bootstrap &amp; Angular 6 admin theme framework for next generation web apps.</p>--}}
{{--								<button type="button" id="kt_login_signup" class="btn btn-outline-primary btn-pill py-4 px-9 font-weight-bold">Thông tin thêm</button>--}}
								<a target="_blank" href="https://phanmemcuocsong.com/" class="btn btn-outline-primary btn-pill py-2 px-6 font-weight-bold">Thông tin thêm</a>
							</div>
							<!--end:Aside Content-->
						</div>
					</div>
					<!--end:Aside-->
					<!--begin:Divider-->
					<div class="login-divider">
						<div></div>
					</div>
					<!--end:Divider-->
					<!--begin:Content-->
					<div class="d-flex w-100 flex-center p-15 position-relative overflow-hidden">
						<div class="login-wrapper">
							<!--begin:Sign In Form-->
							<div class="login-signin">
								<div class="text-center mb-10 mb-lg-20">
									<h2 class="font-weight-bold">ĐĂNG NHẬP</h2>
									<p class="text-muted font-weight-bold">Nhập thông tin tài khoản và mật khẩu</p>
								</div>
{{--								<form class="form text-left"  id="kt_login_signin_form">--}}
								{!! Form::open(['url'=>'/DangNhap','id' => 'kt_login_signin_form', 'class'=>'form text-left']) !!}
									<div class="form-group py-2 m-2">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text" placeholder="Tên tài khoản" name="username" value="{{$username ?? ''}}" autocomplete="off" />
									</div>
									<div class="form-group py-2 border-top m-2">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="Password" placeholder="Mật khẩu" name="password" />
									</div>
									<div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-5">
{{--										<div class="checkbox-inline">--}}
{{--											<label class="checkbox m-0 text-muted font-weight-bold">--}}
{{--											<input type="checkbox" name="remember" />--}}
{{--											<span></span>Remember me</label>--}}
{{--										</div>--}}
										<a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary font-weight-bold">Quên mật khẩu ?</a>
										<a href="{{url('/danhsachtaikhoan')}}" class="text-muted text-hover-primary font-weight-bold">Danh sách tài khoản</a>
									</div>
									<div class="text-center mt-15">
										<button id="login_button" onclick="KiemTraDangNhap();" class="btn btn-primary btn-pill shadow-sm py-4 px-9 font-weight-bold">Đăng nhập</button>
									</div>
								{!! Form::close() !!}
							</div>
							<!--end:Sign In Form-->
							<!--begin:Sign Up Form-->

							<!--end:Sign Up Form-->
							<!--begin:Forgot Password Form-->
							<div class="login-forgot">
								<div class="text-center mb-10 mb-lg-20">
									<h3 class="">Forgotten Password ?</h3>
									<p class="text-muted font-weight-bold">Enter your email to reset your password</p>
								</div>
								<form class="form text-left" id="kt_login_forgot_form">
									<div class="form-group py-2 m-0 border-bottom">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text" placeholder="Email" name="email" autocomplete="off" />
									</div>
									<div class="form-group d-flex flex-wrap flex-center mt-10">
										<button id="kt_login_forgot_submit" class="btn btn-primary btn-pill font-weight-bold px-9 py-4 my-3 mx-2">Submit</button>
										<button id="kt_login_forgot_cancel" class="btn btn-outline-primary btn-pill font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
									</div>
								</form>
							</div>
							<!--end:Forgot Password Form-->
						</div>
					</div>
					<!--end:Content-->
				</div>
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
{{--		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>--}}
		<script src="vendors/jquery-validate/jquery.validate.min.js"></script>
{{--		script src="{{url('assets/plugins/global/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>--}}

		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
{{--		<script src="assets/js/pages/custom/login/login-general.js"></script>--}}
		<!--end::Page Scripts-->
		<script type="text/javascript">
			$("#password,username").keydown(function(event){
				if(event.keyCode == 13){
					$("#login_button").click();
				}
			});
			function KiemTraDangNhap(){
				var validator = $("#kt_login_signin_form").validate({
					rules: {
						username :"required",
						password :"required"

					},
					messages: {
						username :" Nhập tên tài khoản truy cập",
						password :" Nhập mật khẩu truy cập"
					}
				});
				//return false;
			}
		</script>
	</body>
	<!--end::Body-->
</html>