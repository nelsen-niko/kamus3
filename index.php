<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>:: Dayak Kanayatn 2021</title>
	<link rel="stylesheet" href="aset/bootstrap.min.css">
</head>
<body>
	<script type="text/javascript">
		function getXMLHttpRequest(){
			if(window.ActiveXObject){
				return new ActiveXObject("Microsoft.XMLHTTP");
			}else if(window.XMLHttpRequest){
				return new XMLHttpRequest();  
			}else alert("Status : Can not create XMLHttpRequest Object");
		}
		var xmlhttp=getXMLHttpRequest();
		function sendRequest(pageURL,bahasa){
			if(xmlhttp.readyState==4 || xmlhttp.readyState==0){

				xmlhttp.onreadystatechange=function(){
					if(xmlhttp.readyState==4 && xmlhttp.status==200){

						if(bahasa=='indonesia'){
							document.getElementById('konverdayak').value=xmlhttp.responseText;
						}else if(bahasa=='dayak'){
							document.getElementById('konverindonesia').value=xmlhttp.responseText;
						}
					}
				}
				xmlhttp.open('GET',pageURL,true);
				xmlhttp.send(null); 
			}
		}
		function konversi(bahasa){
			if(bahasa=='indonesia'){
				sendRequest('aset/config.php?kata='+document.getElementById('Bindonesia').value+'&bahasa=indonesia','indonesia'); 
			} else if(bahasa=='dayak'){
				sendRequest('aset/config.php?kata='+document.getElementById('Bdayak').value+'&bahasa=dayak','dayak'); 
			}
		}
	</script>

	<section>
		<nav class="navbar navbar-expand-lg navbar-dark bg-success">
			<a class="navbar-brand" href="#">:: Dayak</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Dropdown
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</section>
	<section>
		<div class="jumbotron">
			<div class="container-fluid">

				<div class="container">
					<div class="row">
						<div class="col-sm">
							<label for="exampleInputEmail1">Bhs. Indonesia</label>
							<input name="Bindonesia" type="text" id="Bindonesia" placeholder="indonesia" class="input" />
						</div>
						<div class="col-sm">
							<input type="button" value="Terjemah ke dayak" onclick="konversi('indonesia');" class="btn btn-primary btn-sm" />
						</div>
						<div class="col-sm">
							<label for="exampleInputEmail1">Bhs. Dayaknya</label>
							<input name="konverdayak" type="text" id="konverdayak" placeholder="dayak" class="input color"/>
						</div>
					</div>
				</div><br>
				<!-- <div class="container">
					<div class="row">
						<div class="col-sm">
							<label for="exampleInputEmail1">Bhs. Dayaknya</label>
							<input name="Bdayak" type="text" id="Bdayak" placeholder="dayak" class="input"/>
						</div>
						<div class="col-sm">
							<input type="button" value="Terjemah ke Indonesia"  onclick="konversi('dayak');" class="btn btn-danger btn-sm"/>
						</div>
						<div class="col-sm">
							<label for="exampleInputEmail1">Bhs. Indonesia</label>
							<input name="konverindonesia" type="text" id="konverindonesia" placeholder="indonesia" class="input color"/>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<script type="text/javascript" src="aset/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="aset/popper.min.js"></script>
	<script type="text/javascript" src="aset/bootstrap.min.js"></script>
</body>
<footer>
	<button type="button" class="btn btn-info btn-lg btn-block">© Pasbe Studio by Nelsen Niko, 2021</button>
</footer>
</html>