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
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card-footer">
                    <form>
                    <div class="form-group">
                            <label for="swg">Gauge/swg</label>
                            <select class="form-control form-control-lg" onchange="selectchg()" id='swg'>
                            <option >Please select Gauge</option>
                                <?php
                                $sql = "select * from enameld";
                                $test=mysqli_query($db,$sql);

                                while($value = mysqli_fetch_object($test))
                                {
                                    echo "<option value=$value->gaugeswg>$value->gaugeswg</option>";
                                }
                                
                                
                                
                                ?>
                            </select>
                    </div>    
                    <br>
                    <div class="form-group">
                        <label for="bsize">Bare Size</label>
                        <input type="text" class="form-control" id="bsize" placeholder="Bare Size" readonly>
                    </div>  
                    <br>
                    <div class="form-group">
                            <label for="enambrand">Select Brands</label>
                            <select class="form-control form-control-lg" id='enambrand'>
                            <option >Please select Brands</option>
                                <?php
                                $sql = "select brands from enameldbrands";
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
                    <span id="sel"></span>
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
function selectchg(){
var size = $('#swg').val();
   $.get('ajax.php?action=getbare&srch='+size, 
            function (data, textStatus, jqXHR) {
            console.log(data);

            if(data == "not"){

                $('#sel').html('please select the SWG');
                $('#bsize').val('');
                
            }else
            {
                $('#bsize').val(data);

            }

            })


}

function cart(){
    var swg = $('#swg').val();
    var bare = $('#bsize').val();
    var qty = $('#weight').val();
    var enambrand = $('#enambrand').val();
    if(swg == '0' || qty == '0' || enambrand == 'Please select Brands'  )
    {
        $('#successal').show();
              $('#successal').html('All fields are Mandatory');
    }else{

    var flag = 0;
    $.get('enameldorder.php?swg='+swg+'&bare='+bare+'&qty='+qty+'&flag='+flag+'&enambrand='+enambrand, 
            function (data, textStatus, jqXHR) {
            console.log(data);

            if(data == "success"){

              $('#successal').show();
              $('#successal').html('Added To cart!!!');
                
            }

            })
}

}

function placeorder(){
    var swg = $('#swg').val();
    var bare = $('#bsize').val();
    var qty = $('#weight').val();
    var enambrand = $('#enambrand').val();
    if(swg == '0' || qty == '0' || enambrand == 'Please select Brands'  )
    {
        $('#successal').show();
              $('#successal').html('All fields are Mandatory');
    }else{
    var flag = 1;
    $.get('enameldorder.php?swg='+swg+'&bare='+bare+'&qty='+qty+'&flag='+flag+'&enambrand='+enambrand, 
            function (data, textStatus, jqXHR) {
            console.log(data);

            if(data == "success"){

              $('#successal').show();
              $('#successal').html('Order Placed Successfully!!!');
                
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