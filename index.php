<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD SHIRT FORM -->
      <div class="card card-body">
        <form action="save_shirt.php" method="POST">
          <div class="form-group">
            <input type="text" name="shirt_name" class="form-control" placeholder="Nombre producto" autofocus>
          </div>
          <div class="form-group">
            <input  type="number" name="shirt_price" rows="2" class="form-control" placeholder="Precio del producto"></input>
          </div>
          <div class="form-group">
            <input  type="number" name="shirt_stock" rows="2" class="form-control" placeholder="Cantidad a registrar"></input>
          </div>
          <div class="form-group">
            <input type="text" name="shirt_image" class="form-control" placeholder="Imagen de producto" autofocus>
          </div>
          <div class="form-group">
            <textarea name="shirt_description" rows="2" class="form-control" placeholder="Descripción producto"></textarea>
          </div>
          <input type="submit" name="save_shirt" class="btn btn-success btn-block" value="Guardar producto">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>INVENTARIO</th>
            <th>DESCRIPCIÓN</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM playeras";
          $result_shirts = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_shirts)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>  
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td><?php echo $row['inventario']; ?></td>
            <td><?php echo $row['descripcion']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_shirt.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
