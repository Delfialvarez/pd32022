<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&family=Sriracha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">

    <title>Contacto</title>
</head>


</head>

<header class=" header container-fluid">
<div class="container logo text-white p-1 navsurr">
        

    <nav class="navbar navbar-expand-lg navbar-light bg-lightbg4 ">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">  <img src="img/LOGO.png" class="imglogo"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="historia.html">Historia</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="artistas.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Artistas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="salvadordali.html">Salvador Dalí</a></li>
                  <li><a class="dropdown-item" href="joanmiro.html">Joan Miró</a></li>
                  <li><a class="dropdown-item" href="renemagritte.html">René Magritte</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="filosofia.html">Filosofía</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="galeria.html">Galería</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.html">Contacto</a>
              </li>

            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
              <button class="boton" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
  
  
  </header>
<body>
	
<section>
<?php
	include ('conexion.php');
  $buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";
  $consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
?>
<article >
	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	
			echo $resultados['nombre'] . " ";
			echo $resultados['apellido'] . "";
			echo $resultados['bio'] . " ";
		
	?>
    </p>
	<img src="<?php echo $resultados['foto'] ?>" >
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
</article>
</section>


<footer>
        <p> Delfina Alvarez Arias - Producción Digital 3</p>
      </footer>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>