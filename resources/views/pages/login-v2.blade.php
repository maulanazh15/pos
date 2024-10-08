@extends('layouts.default', [
	'paceTop' => true,
	'appSidebarHide' => true,
	'appHeaderHide' => true,
	'appContentClass' => 'p-0'
])

@section('title', 'Login Page')

@section('content')
	<!-- BEGIN login -->
	<div class="login login-v2 fw-bold">
		<!-- BEGIN login-cover -->
		<div class="login-cover">
			<div class="login-cover-img" style="background-image: url(/assets/img/login-bg/login-bg-17.jpg)" data-id="login-cover-image"></div>
			<div class="login-cover-bg"></div>
		</div>
		<!-- END login-cover -->
		
		<!-- BEGIN login-container -->
		<div class="login-container">
			<!-- BEGIN login-header -->
			<div class="login-header">
				<div class="brand">
					<div class="d-flex align-items-center">
						<span class="logo"></span> <b>POS</b>DBI
					</div>
					<small>Solusi transaksi dan operasional bisnis efisien.</small>
				</div>
				<div class="icon">
					<i class="fa fa-lock"></i>
				</div>
			</div>
			<!-- END login-header -->
			
			<!-- BEGIN login-content -->
			<div class="login-content">
				<form action="/" method="GET">
					<div class="form-floating mb-20px">
						<input type="text" class="form-control fs-13px h-45px border-0" placeholder="Email Address" id="emailAddress" />
						<label for="emailAddress" class="d-flex align-items-center text-gray-600 fs-13px">Alamat Email</label>
					</div>
					<div class="form-floating mb-20px">
						<input type="password" class="form-control fs-13px h-45px border-0" placeholder="Password" />
						<label for="emailAddress" class="d-flex align-items-center text-gray-600 fs-13px">Password</label>
					</div>
					<div class="form-check mb-20px">
						<input class="form-check-input border-0" type="checkbox" value="1" id="rememberMe" />
						<label class="form-check-label fs-13px text-gray-500" for="rememberMe">
							Ingat saya
						</label>
					</div>
					<div class="mb-20px">
						<button type="submit" class="btn btn-success d-block w-100 h-45px btn-lg">Masuk</button>
					</div>
					<div class="text-gray-500">
						<label class="form-check-label">
							Belum punya akun?	<a href="{{ url('register') }}" class="text-decoration-none">klik disini</a> untuk mendaftar.
				</form>
			</div>
			<!-- END login-content -->
		</div>
		<!-- END login-container -->
	</div>
	<!-- END login -->
@endsection

@push('scripts')
	<script src="/assets/js/demo/login-v2.demo.js"></script>
@endpush
