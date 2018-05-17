<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina de matenimiento ITIC">
    <meta name="author" content="FAC">

	<title>Document</title>

	<!-- Bootstrap Core CSS -->
    <link href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="{{ asset('asset/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('asset/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('asset/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Por favor ingrese sus credenciales</h3>
					</div>
					<div class="panel-body">
					<form role="form">
						<fieldset>
							<div class="form-group">
								<input required type="text" class="form-control" name="user" placeholder="Usuario" autofocus>
							</div>

							<div class="form-group">
								<input required type="password" class="form-control" name="password" placeholder="contraseña" autofocus>
							</div>

							<div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                            </div>

							<!-- <input type="submit" value="Ingresar" class="btn btn-success"> -->

							<a href="{{ url('home') }}" class="btn btn-success">Ingresar</a>
                            
						</fieldset>
					</form>
				</div>
				</div>
				
			</div>
		</div>
	</div>
	


	 <!-- jQuery -->
    <script src="{{ asset('asset/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('asset/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('asset/dist/js/sb-admin-2.js')}}"></script>
</body>
</html>