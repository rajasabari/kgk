<?php
session_start();
include_once "config.php";

// print_r( $_SESSION['u_id']);
include_once "includes/header.php";
include_once "dashhead.php";
if(isset( $_SESSION['u_id'])){
?>
<style>

    .card-horizontal {
    display: flex;
    flex: 1 1 auto;
}
</style>
<section id="enameld" class="recent-blog-posts">
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img class="" src="assets/img/prd/enameledwire.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Submersible Wire</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card-footer">
                    <form>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDisabled" val="NOD" id="nod" >
                    <label class="form-check-label" for="flexRadioDisabled">
                        Normal OD(NOD)
                    </label>
                    </div>
                   
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDisabled" val="LOD" id="lod"  >
                    <label class="form-check-label" for="flexRadioCheckedDisabled">
                       Lower OD(LOD)
                    </label>
                    </div>
                    <br>
                    <div class="form-field" id="nods">
                    <label for="nod" class="form-label">NOD Size</label>
                    <select class="form-select" id="noda" aria-label="Default select example">
                    <option selected>Select size</option>
                    <?php
                      $sql = "select *  from submersiblesize where type = 'nod'";
                      $test=mysqli_query($db,$sql);

                      while($value = mysqli_fetch_object($test))
                      {
                          echo "<option value='I.OD : $value->inod O.OD : $value->ood'>I.OD : $value->inod X O.OD : $value->ood </option>";
                      }
                    
                    ?>
                  
                   
                    </select>
                    </div>
                    <br>
                    <div class="form-field" id="lods">
                    <label for="nod" class="form-label">LOD Size</label>
                    <select class="form-select" id="loda" aria-label="Default select example">
                    <option selected>Select size</option>

                   <?php
                      $sql = "select *  from submersiblesize where type = 'lod'";
                      $test=mysqli_query($db,$sql);

                      while($value = mysqli_fetch_object($test))
                      {
                          echo "<option value='I.OD : $value->inod O.OD : $value->ood'>I.OD : $value->inod X O.OD : $value->ood </option>";
                      }
                    
                    ?>
                  
                    
                    </select>
                    </div>
                    <br>
                    <div class="form-field" id="brands">
                    <label for="brand" class="form-label">Brands</label>
                    <select class="form-select" id="brand" aria-label="Default select example">
                    <option selected>Select Brands</option>

                    <?php
                      $sql = "select *  from submersiblebrand";
                      $test=mysqli_query($db,$sql);

                      while($value = mysqli_fetch_object($test))
                      {
                          echo "<option value='$value->brands'>$value->brands</option>";
                      }
                    
                    ?>
                  
                    
                    </select>
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <label for="weight">Weight in Kgs(Kilograms)</label>
                        <input type="number" class="form-control" id="weight" placeholder="Weights in Kilograms">
                    </div> 
                    <br>
                    <button type="button" class="btn btn-success" onclick="cart()"><i class="fa fa-cart-plus"></i> Add to Cart</button>
                    <button type="button" class="btn btn-primary" onclick="placeorder()" ><i class="fa fa-first-order"></i> Place Order</button>
                    <div id="successal" class="alert alert-success" role="alert">
                    Added to cart...
                            </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<script>
    $('#successal').hide();
    $('#nods').hide();
    $('#lods').hide();
    $('#nod').click(function () {
        if ($(this).is(':checked')) {
            $('#nods').show();
            $('#lods').hide();
        }
    });

    $('#lod').click(function () {
        if ($(this).is(':checked')) {
            $('#lods').show();
            $('#nods').hide();
        }
    });

    function cart(){
    var brnd = $('#brand').val();
    var qty = $('#weight').val();
    var flag = 0;
  
        if ($('#nod').is(':checked')) {
            var type = 'NOD';
           var size = $('#noda').val();
        }
    
        if ($('#lod').is(':checked')) {
            var type = 'LOD';
            var size = $('#loda').val();
        }
console.log(size);
    if(brnd == 'Select Brands' || qty == '0' || size =='Select size')
    {
        $('#successal').show();
              $('#successal').html('All fields are Mandatory...!!!');
    }else{

    var flag = 0;
    $.get('suborder.php?brnd='+brnd+'&qty='+qty+'&type='+type+'&flag='+flag+'&size='+size, 
            function (data, textStatus, jqXHR) {
            console.log(data);

            if(data == "success"){

              $('#successal').show();
              $('#successal').html('Added To cart...!!!');
                
            }

            })
}

}

function placeorder(){
    var brnd = $('#brand').val();
    var qty = $('#weight').val();
    var flag = 1;
  
        if ($('#nod').is(':checked')) {
            var type = 'NOD';
           var size = $('#noda').val();
        }
    
        if ($('#lod').is(':checked')) {
            var type = 'LOD';
            var size = $('#loda').val();
        }
console.log(size);
    if(brnd == 'Select Brands' || qty == '0' || size =='Select size')
    {
        $('#successal').show();
              $('#successal').html('All fields are Mandatory...!!!');
    }else{

   
    $.get('suborder.php?brnd='+brnd+'&qty='+qty+'&type='+type+'&flag='+flag+'&size='+size, 
            function (data, textStatus, jqXHR) {
            console.log(data);

            if(data == "success"){

              $('#successal').show();
              $('#successal').html('Order Placed...!!!');
                
            }

            })
}
}

</script>





<?php
}else{
    header("location:index.php");
}
include_once "includes/footer.php";
?>