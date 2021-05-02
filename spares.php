<?php
session_start();
include_once "config.php";

// print_r( $_SESSION['u_id']);
include_once "includes/header.php";
include_once "dashhead.php";
if(isset( $_SESSION['u_id'])){
?>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
  <section id="values" class="values">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <!-- <h2>Submersible Spares</h2> -->
    <p>Submersible Spares</p>
  </header>

  <div class="row">

  
<?php
   $sql = "SELECT * FROM `spares`";
        $test=mysqli_query($db,$sql);
        $imgid = 1;
        while($value = mysqli_fetch_object($test))
        {
            echo '<div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/prd/'.$imgid.'.jpg" class="img-fluid" alt="">
              <h3 id="prd'.$imgid.'"> '.$value->prdname.'</h3>
              <p>'.$value->prddes.'</p>
              <p hidden id="txt'.$imgid.'">'.$value->prdsizetblname.'</p>
              <a class="btn btn-success btn-sm" id="myBtn'.$imgid.'"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Buy Now</a>
            </div>
            
          </div>
          ';
          $imgid++;
        }
        
        ?>
        
   

  </div>

</div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span align="end" class="close">&times;</span>
    <form>
  <div class="form-group">
    <label for="prdname">Product Name</label>
    <input type="text" class="form-control" id="prdname" name="prdname" aria-describedby="emailHelp" readonly placeholder="Product Name">
  </div>
  <br>
  <label for="cars">Select Size</label>
  
  <div class="form-group">
<select name="cars" class="form-select" id="sizess">
  <option >Select size</option>
  
</select>
</div>
<br>
  <div class="form-group">
    <label for="nos">Number of pieces</label>
    <input type="number" class="form-control" id="nos" aria-describedby="emailHelp" placeholder="Enter number of pieces">
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

</section><!-- End Values Section -->
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
$('#myBtn1').click(function() {
  modal.style.display = "block";
  var tt =$('#prd1').html();
  $('#prdname').val(tt);

  var tbl =$('#txt1').html();
//   console.log(tbl);
  $.get('getsparesize.php?action=getsize&tbl='+tbl, 
            function (data, textStatus, jqXHR) {
            // console.log(data);
            
            if(data != "false"){
                $('#sizess').html('');
                var obj = JSON.parse(data);
                obj.forEach(appendoption);
                // var pname = obj[0].size;
            //    console.log(obj[0]);
               
            }

            })

            function appendoption(item, index)
            {
                $('#sizess').append('<option value="'+item+'">'+item+'</option>');

            }

})
$('#myBtn2').click(function() {
    modal.style.display = "block";
  var tt =$('#prd2').html();
  $('#prdname').val(tt);
  $('#sizess').html('');

  var tbl =$('#txt2').html();
//   console.log(tbl);
  $.get('getsparesize.php?action=getsize&tbl='+tbl, 
            function (data, textStatus, jqXHR) {
            // console.log(data);
            
            if(data != "false"){
                $('#sizess').html('');
                var obj = JSON.parse(data);
                obj.forEach(appendoption);
                // var pname = obj[0].size;
            //    console.log(obj[0]);
               
            }

            })

            function appendoption(item, index)
            {
                $('#sizess').append('<option value="'+item+'">'+item+'</option>');

            }

})
$('#myBtn3').click(function() {
    modal.style.display = "block";
  var tt =$('#prd3').html();
  $('#prdname').val(tt);
  $('#sizess').html('');
  var tbl =$('#txt3').html();
//   console.log(tbl);
  $.get('getsparesize.php?action=getsize&tbl='+tbl, 
            function (data, textStatus, jqXHR) {
            // console.log(data);
            
            if(data != "false"){
                $('#sizess').html('');
                var obj = JSON.parse(data);
                obj.forEach(appendoption);
                // var pname = obj[0].size;
            //    console.log(obj[0]);
               
            }

            })

            function appendoption(item, index)
            {
                $('#sizess').append('<option value="'+item+'">'+item+'</option>');

            }

})
$('#myBtn4').click(function() {
    modal.style.display = "block";
  var tt =$('#prd4').html();
  $('#prdname').val(tt);
  $('#sizess').html('');
  var tbl =$('#txt4').html();
//   console.log(tbl);
  $.get('getsparesize.php?action=getsize&tbl='+tbl, 
            function (data, textStatus, jqXHR) {
            // console.log(data);
            
            if(data != "false"){
                $('#sizess').html('');
                var obj = JSON.parse(data);
                obj.forEach(appendoption);
                // var pname = obj[0].size;
            //    console.log(obj[0]);
               
            }

            })

            function appendoption(item, index)
            {
                $('#sizess').append('<option value="'+item+'">'+item+'</option>');

            }

})
$('#myBtn5').click(function() {
    modal.style.display = "block";
  var tt =$('#prd5').html();
  $('#prdname').val(tt);
  $('#sizess').html('');
  var tbl =$('#txt5').html();
//   console.log(tbl);
  $.get('getsparesize.php?action=getsize&tbl='+tbl, 
            function (data, textStatus, jqXHR) {
            // console.log(data);
            
            if(data != "false"){
                $('#sizess').html('');
                var obj = JSON.parse(data);
                obj.forEach(appendoption);
                // var pname = obj[0].size;
            //    console.log(obj[0]);
               
            }

            })

            function appendoption(item, index)
            {
                $('#sizess').append('<option value="'+item+'">'+item+'</option>');

            }

})
$('#myBtn6').click(function() {
    modal.style.display = "block";
  var tt =$('#prd6').html();
  $('#prdname').val(tt);
  $('#sizess').html('');
  var tbl =$('#txt6').html();
//   console.log(tbl);
  $.get('getsparesize.php?action=getsize&tbl='+tbl, 
            function (data, textStatus, jqXHR) {
            // console.log(data);
            
            if(data != "false"){
                $('#sizess').html('');
                var obj = JSON.parse(data);
                obj.forEach(appendoption);
                // var pname = obj[0].size;
            //    console.log(obj[0]);
               
            }

            })

            function appendoption(item, index)
            {
                $('#sizess').append('<option value="'+item+'">'+item+'</option>');

            }

})
$('#myBtn7').click(function() {
    modal.style.display = "block";
  var tt =$('#prd7').html();
  $('#prdname').val(tt);
  $('#sizess').html('');
  var tbl =$('#txt7').html();
//   console.log(tbl);
  $.get('getsparesize.php?action=getsize&tbl='+tbl, 
            function (data, textStatus, jqXHR) {
            // console.log(data);
            
            if(data != "false"){
                $('#sizess').html('');
                var obj = JSON.parse(data);
                obj.forEach(appendoption);
                // var pname = obj[0].size;
            //    console.log(obj[0]);
               
            }

            })

            function appendoption(item, index)
            {
                $('#sizess').append('<option value="'+item+'">'+item+'</option>');

            }

})
$('#myBtn8').click(function() {
    modal.style.display = "block";
  var tt =$('#prd8').html();
  $('#prdname').val(tt);
  $('#sizess').html('');
  var tbl =$('#txt8').html();
//   console.log(tbl);
  $.get('getsparesize.php?action=getsize&tbl='+tbl, 
            function (data, textStatus, jqXHR) {
            // console.log(data);
            
            if(data != "false"){
                $('#sizess').html('');
                var obj = JSON.parse(data);
                obj.forEach(appendoption);
                // var pname = obj[0].size;
            //    console.log(obj[0]);
               
            }

            })

            function appendoption(item, index)
            {
                $('#sizess').append('<option value="'+item+'">'+item+'</option>');

            }

})
$('#myBtn9').click(function() {
    modal.style.display = "block";
  var tt =$('#prd9').html();
  $('#prdname').val(tt);
  $('#sizess').html('');
  var tbl =$('#txt9').html();
//   console.log(tbl);
  $.get('getsparesize.php?action=getsize&tbl='+tbl, 
            function (data, textStatus, jqXHR) {
            // console.log(data);
            
            if(data != "false"){
                $('#sizess').html('');
                var obj = JSON.parse(data);
                obj.forEach(appendoption);
                // var pname = obj[0].size;
            //    console.log(obj[0]);
               
            }

            })

            function appendoption(item, index)
            {
                $('#sizess').append('<option value="'+item+'">'+item+'</option>');

            }

})
$('#myBtn10').click(function() {
    modal.style.display = "block";
  var tt =$('#prd10').html();
  $('#prdname').val(tt);
  $('#sizess').html('');
  var tbl =$('#txt10').html();
//   console.log(tbl);
  $.get('getsparesize.php?action=getsize&tbl='+tbl, 
            function (data, textStatus, jqXHR) {
            // console.log(data);
            
            if(data != "false"){
                $('#sizess').html('');
                var obj = JSON.parse(data);
                obj.forEach(appendoption);
                // var pname = obj[0].size;
            //    console.log(obj[0]);
               
            }

            })

            function appendoption(item, index)
            {
                $('#sizess').append('<option value="'+item+'">'+item+'</option>');

            }

})
$('#myBtn11').click(function() {
    modal.style.display = "block";
  var tt =$('#prd11').html();
  $('#prdname').val(tt);
  $('#sizess').html('');
  var tbl =$('#txt11').html();
//   console.log(tbl);
  $.get('getsparesize.php?action=getsize&tbl='+tbl, 
            function (data, textStatus, jqXHR) {
            // console.log(data);
            
            if(data != "false"){
                $('#sizess').html('');
                var obj = JSON.parse(data);
                obj.forEach(appendoption);
                // var pname = obj[0].size;
            //    console.log(obj[0]);
               
            }

            })

            function appendoption(item, index)
            {
                $('#sizess').append('<option value="'+item+'">'+item+'</option>');

            }

})
$('#myBtn12').click(function() {
    modal.style.display = "block";
  var tt =$('#prd12').html();
  $('#prdname').val(tt);
  $('#sizess').html('');
  var tbl =$('#txt12').html();
//   console.log(tbl);
  $.get('getsparesize.php?action=getsize&tbl='+tbl, 
            function (data, textStatus, jqXHR) {
            // console.log(data);
            
            if(data != "false"){
                $('#sizess').html('');
                var obj = JSON.parse(data);
                obj.forEach(appendoption);
                // var pname = obj[0].size;
            //    console.log(obj[0]);
               
            }

            })

            function appendoption(item, index)
            {
                $('#sizess').append('<option value="'+item+'">'+item+'</option>');

            }

})
$('#myBtn13').click(function() {
    modal.style.display = "block";
  var tt =$('#prd13').html();
  $('#prdname').val(tt);
  $('#sizess').html('');
  var tbl =$('#txt13').html();
//   console.log(tbl);
  $.get('getsparesize.php?action=getsize&tbl='+tbl, 
            function (data, textStatus, jqXHR) {
            // console.log(data);
            
            if(data != "false"){
                $('#sizess').html('');
                var obj = JSON.parse(data);
                obj.forEach(appendoption);
                // var pname = obj[0].size;
            //    console.log(obj[0]);
               
            }

            })

            function appendoption(item, index)
            {
                $('#sizess').append('<option value="'+item+'">'+item+'</option>');

            }

})
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function cart(){
    var prdname = $('#prdname').val();
    var sizess = $('#sizess').val();
    var nos = $('#nos').val();
    if(prdname == '' || sizess == '' || nos == ''  )
    {
        $('#successal').show();
              $('#successal').html('All fields are Mandatory');
    }else{

    var flag = 0;
    $.get('spareorder.php?prdname='+prdname+'&sizess='+sizess+'&nos='+nos+'&flag='+flag, 
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
    var prdname = $('#prdname').val();
    var sizess = $('#sizess').val();
    var nos = $('#nos').val();
    if(prdname == '' || sizess == '' || nos == ''  )
    {
        $('#successal').show();
              $('#successal').html('All fields are Mandatory');
    }else{

    var flag = 1;
    $.get('spareorder.php?prdname='+prdname+'&sizess='+sizess+'&nos='+nos+'&flag='+flag, 
            function (data, textStatus, jqXHR) {
            console.log(data);

            if(data == "success"){

              $('#successal').show();
              $('#successal').html('Order Placed...!!!');
                
            }

            })
}
}
$('#successal').hide();
</script>
<?php
}else{
    header("location:index.php");
}
include_once "includes/footer.php";
?>