<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	</br>
	<h1>TITULO:
	{{$prueba->title}}</h1>
	CONTENIDO:
	</br>
	{{$prueba->content}}
	</br>
	NOMBRE:
	</br>
	{{$prueba->user->name}}

	</br></br>CICLO FOR</br>
	@for($i=0;$i<10;$i++)
		{{$i}}
	@endfor	
</body>
</html>
