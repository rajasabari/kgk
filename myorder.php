<?php
session_start();
include_once "config.php";
// print_r( $_SESSION['u_id']);
include_once "includes/header.php";
include_once "dashhead.php";
if(isset( $_SESSION['u_id'])){
?>
<br>
<section id="mycart" class="recent-blog-posts">
    <div class="container-fluid">
        <?php
      $id=  $_SESSION['u_id'];
        $sql = "SELECT * FROM `enameldorder` where userid = $id and flag = 1";
        $test=mysqli_query($db,$sql);

        while($value = mysqli_fetch_object($test))
        {
            echo '<div class="card ">
            <div class="card-body">
              <h5 class="card-title">Enameled Winding Wires</h5>
              <p class="card-text">Gauge/SWG :'.$value->swg.'</p>
              <p class="card-text">Bare size :'.$value->bare.'</p>
              <p class="card-text">Quantity :'.$value->qty.'</p>
            </div>
          </div>
          <br>';
        }

        $sql = "SELECT * FROM `submersibleorder` where uid = $id and flag = 1";
        $test=mysqli_query($db,$sql);

        while($value = mysqli_fetch_object($test))
        {
            echo '<div class="card ">
            <div class="card-body">
              <h5 class="card-title">Submersible Wires</h5>
              <p class="card-text">Type :'.$value->type.'</p>
              <p class="card-text">Size :'.$value->size.'</p>
              <p class="card-text">Brand :'.$value->brand.'</p>
              <p class="card-text">Quantity :'.$value->qty.'</p>
            </div>
          </div>
          <br>';
        }
        
        $sql = "SELECT * FROM `spareorder` where userid = $id and flag = 1";
        $test=mysqli_query($db,$sql);

        while($value = mysqli_fetch_object($test))
        {
            echo '<div class="card ">
            <div class="card-body">
              <h5 class="card-title">'.$value->prdname.'</h5>
              <p class="card-text">Size :'.$value->size.'</p>
              <p class="card-text">Quantity :'.$value->qty.'</p>
            </div>
          </div>
          <br>';
        }
        


?>
</div>
</section>


<?php
}else{
    header("location:index.php");
}
include_once "includes/footer.php";
?>