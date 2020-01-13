@extends('layouts.app')

@section('content')
	<main> 
		<!-- Forms --> 
		<div class="sign-form-wr"> 
			<div class="container"> 
				<div class="sign-form-inner"> 
					<header class="sign-header"> 
						<div class="log-in tab active" data-form="log-in-form">
							Log In
						</div> 
						<div class="sign-up tab" data-form="sign-up-form">
							Sign Up
						</div> 
					</header> 
					<!-- Log In --> 
					<div class="form-wr log-in-form active"> 
						<p class="title">Log in</p> 
						<form> 
							<input type="text" name="login" placeholder="Your Name" class="login" required> 
							<input type="password" name="password" placeholder="Password" class="password" required> 
							<p class="submit"> 
								<input type="submit" value="Log In" class="submit-btn"> 
								<a href="#" class="forgot-password">Forgot Password?</a> 
							</p> 
						</form> 
						<p class="lines section-title">Or</p> 
						<a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Sign in with facebook</a> 
					</div> 
					<!-- End Log In --> <!-- Sign In --> 
					<div class="form-wr sign-up-form"> 
						<p class="title">Sign Up</p> 
						<form> 
							<input type="text" name="login" placeholder="Your Name" class="login" required> 
							<input type="password" name="password" placeholder="Password" class="password" required> <p class="submit"> 
							<input type="submit" value="Create Acoount" class="submit-btn"> </p> 
						</form> 
						<p class="lines section-title">Or</p> 
						<a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Sign in with facebook</a> 
					</div> 
					<!-- End Sign In --> 
				</div> 
			</div> 
		</div> 
		<!-- End Forms --> 
	</main>
@endsection