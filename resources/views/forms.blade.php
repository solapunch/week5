<!DOCTYPE html>
<html>
	<head>
		<title>Forms</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<form action="" method="post" class="form-horizontal">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="nama">Name</label>
							<input type="text" class="form-control" name="nama" @if(isset($nama)) value="{{$nama}}"@endif>
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" @if(isset($email)) value="{{$email}}"@endif>
							
						</div>

						<div class="form-group">
							<label for="gender">Gender</label>
							<div class="radio">
								<label>
									<input type="radio" name="gender" value="m" @if(isset($gender) && $gender=='m') checked @endif> Male
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="gender" value="f" @if(isset($gender) && $gender=='f') checked @endif> Female
								</label>
							</div>
						</div>

						<div class="form-group">
							<label for="leader">Choose Leader</label>
							<p>You could choose more than one</p>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="leader[]" value="arisa" @if(isset($leader) && in_array('arisa', $leader)) checked @endif> Arisa
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="leader[]" value="erika" @if(isset($leader) && in_array('erika', $leader)) checked @endif> Erika
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="leader[]" value="isabelle" @if(isset($leader) && in_array('isabelle', $leader)) checked @endif> Isabelle
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="leader[]" value="luna" @if(isset($leader) && in_array('luna', $leader)) checked @endif> Luna
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="leader[]" value="eris" @if(isset($leader) && in_array('eris', $leader)) checked @endif> Eris

								</label>
							</div>
						</div>

						<button type="submit" class="btn btn-warning">Submit</button>
					</form>
					<br>
					<br>
					@if(isset($nama))
					Halo, {{ $nama }}
					@endif
					<br>
					@if(isset($email))
					Email : {{ $email }}
					@endif
					<br>
					@if(isset($gender))
						@if($gender=='m')
							Male
						@else
							Female
						@endif
					@endif
					<br>
					@if(isset($leader))
					Choose Leader:
						@foreach($leader as $value)
							<br> -> {{ucwords($value)}}
						@endforeach
					@endif
					<br>
					

				</div>
			</div>
		</div>
		<script type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</body>
</html>