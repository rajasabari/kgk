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
    
    <div class="row">
        <?php
      $id=  $_SESSION['u_id'];
        $sql = "SELECT * FROM `enameldorder` where userid = $id and flag = 0";
        $test=mysqli_query($db,$sql);
        
        while($value = mysqli_fetch_object($test))
        {
            echo '<div class="col-sm-6"><div class="card">
            <div class="card-body">
              <h5 class="card-title">Enameled Winding Wires</h5>
              <p class="card-text">Gauge/SWG :'.$value->swg.'</p>
              <p class="card-text">Bare size :'.$value->bare.'</p>
              <p class="card-text">Quantity (Kgs):'.$value->qty.'</p>
              <p class="card-text">Brand :'.$value->brand.'</p>
              <form action ="cartfunction.php" method="POST">
              <input type="hidden" id="prdtbl" name="custId" value="enameldorder">
              <a id="plcorder" type="submit" onclick="plcorder('.$value->id.')" class="btn btn-success" >Place order</a>
              <a id="remorder" type="submit" onclick="remove('.$value->id.')"  class="btn btn-danger" >Remove from Cart</a>
              </form>
            </div>
          </div>
          </div>
          ';
        }
        
        $sql = "SELECT * FROM `submersibleorder` where uid = $id and flag = 0";
        $test=mysqli_query($db,$sql);
        // echo $sql;
        while($value = mysqli_fetch_object($test))
        {
            echo '<div class="col-sm-6"><div class="card">
            <div class="card-body">
              <h5 class="card-title">Submersible Wires</h5>
              <p class="card-text">Type :'.$value->type.'</p>
              <p class="card-text">Size :'.$value->size.'</p>
              <p class="card-text">Brand :'.$value->brand.'</p>
              <p class="card-text">Quantity(Kgs) :'.$value->qty.'</p>
              <form>
              <input type="hidden" id="sprdtbl" name="custId" value="submersibleorder">
              <a id="plcorder" type="submit" onclick="splcorder('.$value->id.')" class="btn btn-success" >Place order</a>
              <a id="remorder" type="submit" onclick="sremove('.$value->id.')"  class="btn btn-danger" >Remove from Cart</a>
              </form>
            </div>
          </div>
          </div>
          ';
        }

        $sql = "SELECT * FROM `spareorder` where userid = $id and flag = 0";
        $test=mysqli_query($db,$sql);
        // echo $sql;
        while($value = mysqli_fetch_object($test))
        {
            echo '<div class="col-sm-6"><div class="card">
            <div class="card-body">
              <h5 class="card-title">'.$value->prdname.'</h5>
              <p class="card-text">Size :'.$value->size.'</p>
              <p class="card-text">Number Pieces  :'.$value->qty.'</p>
              <form>
              <input type="hidden" id="spartbl" name="custId" value="spareorder">
              <a id="plcorder" type="submit" onclick="iplcorder('.$value->id.')" class="btn btn-success" >Place order</a>
              <a id="remorder" type="submit" onclick="iremove('.$value->id.')"  class="btn btn-danger" >Remove from Cart</a>
              </form>
            </div>
          </div>
          </div>
          ';
        }


?>
</div>

</div>
</section>
<script>

    function plcorder(id)
    {
        var tbl = $('#prdtbl').val();
        
        var oid = id;
        $.get('cartfunction.php?action=place&tbl='+tbl+'&oid='+oid, 
            function (data, textStatus, jqXHR) {
          
                console.log(data);
            if(data == "success"){

             location.reload();
                
            }

            })
    }

     function remove(id)
    {
        var tbl = $('#prdtbl').val();
        var oid = id;
        $.get('cartfunction.php?action=remove&tbl='+tbl+'&oid='+oid, 
            function (data, textStatus, jqXHR) {
            console.log(data);

            if(data == "success"){

             location.reload();
                
            }

            })
    }
    function splcorder(id)
    {
        var tbl = $('#sprdtbl').val();
        
        var oid = id;
        $.get('cartfunction.php?action=place&tbl='+tbl+'&oid='+oid, 
            function (data, textStatus, jqXHR) {
          
                console.log(data);
            if(data == "success"){

             location.reload();
                
            }

            })
    }

     function sremove(id)
    {
        var tbl = $('#sprdtbl').val();
        var oid = id;
        $.get('cartfunction.php?action=remove&tbl='+tbl+'&oid='+oid, 
            function (data, textStatus, jqXHR) {
            console.log(data);

            if(data == "success"){

             location.reload();
                
            }

            })
    }
    function iplcorder(id)
    {
        var tbl = $('#spartbl').val();
        
        var oid = id;
        $.get('cartfunction.php?action=place&tbl='+tbl+'&oid='+oid, 
            function (data, textStatus, jqXHR) {
          
                console.log(data);
            if(data == "success"){

             location.reload();
                
            }

            })
    }

     function iremove(id)
    {
        var tbl = $('#spartbl').val();
        var oid = id;
        $.get('cartfunction.php?action=remove&tbl='+tbl+'&oid='+oid, 
            function (data, textStatus, jqXHR) {
            console.log(data);

            if(data == "success"){

             location.reload();
                
            }

            })
    }

</script>


<?php
}else{
    header("location:index.php");
}
include_once "includes/footer.php";
?>