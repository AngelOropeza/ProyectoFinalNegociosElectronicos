<?php include("db.php"); ?> 
<!DOCTYPE html>
<html>
<!-- https://es.stackoverflow.com/questions/450986/frontend-como-hacer-un-catalogo-de-productos-en-html-->
<!-- https://www.youtube.com/watch?v=ZavZ2fcpvVY&ab_channel=VaidrollTeam-->
 <head>
    <meta charset="utf-8">
    <title>GamorsWeb</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
 </head>
 <body>
  <header class="main-header text-center">
    <nav>
      <a href="Registro.php" class="nav-link">Registrar Nuevos Productos</a>
      <a href="" class="nav-link">Login</a>
    </nav>
  </header>

    <div class="row main-container middle-xs center-xs">
      <div class="col-md-8 col-sm-10 col-xs-11 col-lg-7">
        <div class="box">

          <div class="menu">
            <header class="text-center">
              <img src="imagenes/logo.jpg" height="150" alt="Logo de GamorsWeb">
              <h1 class="red-text">La página de páginas.</h1>
            </header>
            <div class="producto">
              <div class="row center-xs">
                <?php
                $query = "SELECT * FROM playeras";
                $result_shirts = mysqli_query($conn, $query);    

                while($row = mysqli_fetch_assoc($result_shirts)) { ?>

                 <div clas="producto col-xs-10 col-sm-6 col-md-4">
                    <div class="card">
                      <img src="<?php echo $row['imagen']; ?>" alt="Playera Bam Bam">
                      <h3><?php echo $row['nombre']; ?></h3>
                      <p><?php echo $row['precio']; ?>k</p>
                      <input type="image" src="imagenes/agregar.png" onclick="" width="35" height="35" />
                    </div>
                  </div>
                <?php } ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br/>
    <br/>

    <header class="recuadro text-recuadro">
      <table class="default">
        <tr>
          <td>
            <ol>
              <li>Playera Bam Bam </li> 
              <li>Playera Qookies </li> 
              <li>Playera Gambito </li> 
              <li>Playera Gio </li> 
            </ol>
          </td>

          <td>
            <ol>
              <input type="image" src="imagenes/h.png" onclick="" width="30" height="30" /><br/>
              <input type="image" src="imagenes/h.png" onclick="" width="30" height="30" /><br/> 
              <input type="image" src="imagenes/h.png" onclick="" width="30" height="30" /><br/>
              <input type="image" src="imagenes/h.png" onclick="" width="30" height="30" /><br/>
            </ol>
          </td>

          <td>
              &nbsp;&nbsp;Precio: 16k<br/>
              &nbsp;&nbsp;Precio: 16k<br/>
              &nbsp;&nbsp;Precio: 16k<br/>
              &nbsp;&nbsp;Precio: 16k<br/>
          </td>

          <td>
            <ol>
              Unidades: 1<br/> 
              Unidades: 1<br/>
              Unidades: 1<br/>
              Unidades: 1<br/>
            </ol>
          </td>

          <td>&nbsp;&nbsp;Precio a pagar: 64k</td>

        </tr>
    </header>

  </body>
</html>
