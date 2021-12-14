@extends('account.index')

@section('content')

<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="module module-login span4 offset1">
				<form class="form-vertical" action="{{ URL::route('account-sign-in-post') }}" method="POST">
					@csrf
					<div class="module-head">
						<h3>Librarian / Admin Sign In</h3>
					</div>
					<div class="module-body">
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="text" name="username" placeholder="Username" value="{{ Request::old('login') }}" autofocus>
								@if($errors->has('user_login'))
									{{ $errors->first('login')}}
								@endif									
							</div>
						</div>
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="password" name="password" placeholder="Password">
								@if($errors->has('password'))
									{{ $errors->first('password')}}
								@endif									
							</div>
						</div>
					</div>
					<div class="module-foot">
						<div class="control-group">
							<div class="controls clearfix">
								<button type="submit" class="btn btn-primary pull-right">Login</button>
								<label class="checkbox">
									<input type="checkbox" name="remember" id="remember"> Confirm as a Librarian
								</label>
							</div>
						</div>
						<!-- <a href="{{ URL::route('account-create') }}" type="button" class="btn btn-success">New librarian? Sign Up</a> -->
						<i class="icon fa fa-exclamation-circle text-info fa-fw"  title="Help with Cookies must be enabled in your browser" aria-label="Help with Cookies must be enabled in your browser"></i>
					</div>
				</form>
			</div>
			<div class="module module-login span4 offset2">
				<div class="module-head">
					<h3>Student Section</h3>
				</div>
				<div class="module-body">
                    <p><a href="{{ URL::route('student-registration') }}" type="button" class="btn btn-success"><strong style="color:#FFFFFF">Student Registration Form</strong></a></p>
                    <p><a href="{{ URL::route('search-book') }}" type="button" class="btn btn-success"><strong style="color:#FFFFFF">Search Book</strong></a></p>
				</div>
			</div>
        </div>
	</div>
</div>
@include('account.style')
@stop