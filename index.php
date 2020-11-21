

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>CedCab</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">
    	$(document).ready(function(){
			$("#cabtype").change(function(){
				if ($(this).val()=="CedMicro") {
					$("#luggage").attr("disabled","enabled");
				}
				else if ($(this).val()!="CedMicro") {$("#luggage").removeAttr("disabled","enabled");}
		});
	});
</script>
  </head>
  <body>
  	<section class="">
  		<nav class="navbar navbar-expand-lg navbar-light py-0"style="background-color: #fabd06;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><p id="logo">Ced<span id="clr">Cab</span></p></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
  	</section>
	<div class="cover">
		<img class="img img-responsive" src="img/coverimage.jpeg">

		<div id="h">
			<p><b>Book a city Taxi to your destination in Town</b></p>
		</div>
		

			<div class="container">
			  <div class="row">
			    <div class="col-sm">
		<div class="card text-center">
			<div class="card-header">
				Calculate Fare
			</div>
			<div class="card-body">
				<h5 class="card-title"><span id="spanbg">City Taxi</span></h5>
				<p class="card-text">Your Everyday Partner.</p>
								<form method="POST">
                                    <div class="form-group" style="color:grey;width: auto;">
                        
                                          <select class="form-control bg-quote" name="pickup" id="pickup">
                                          	<option value="" disabled selected>PICKUP</option>
										    <option value="Charbagh">Charbagh</option>
										    <option value="IndiraNagar">Indira Nagar</option>
										    <option value="BBD">BBD</option>
										    <option value="Barabanki">Barabanki</option>
										    <option value="Faizabad">Faizabad</option>
										    <option value="Basti">Basti </option>
										    <option value="Gorakhpur">Gorakhpur</option>
										  </select>

                                        
                                    </div>
                                    <div class="form-group">
                                          <select class="form-control bg-quote" name="drop" id="drop">
                                          	<option value="" disabled selected>DROP</option>
										    <option value="Charbagh">Charbagh</option>
										    <option value="IndiraNagar">Indira Nagar</option>
										    <option value="BBD">BBD</option>
										    <option value="Barabanki">Barabanki</option>
										    <option value="Faizabad">Faizabad</option>
										    <option value="Basti">Basti </option>
										    <option value="Gorakhpur">Gorakhpur</option>
										  </select>
                                    </div>
                                    <div class="form-group ui-select">
                                        
                                          <select class="form-control bg-quote" name="type" id="cabtype">
                                          	<option value="" disabled selected>CAB TYPE</option>
										    <option value="CedMicro">CedMicro</option>
										    <option value="CedMini">CedMini</option>
										    <option value="CedRoyal">CedRoyal</option>
										    <option value="CedSUV">CedSUV</option>
										  </select>
                                        
                                    </div>
                                    <div class="form-group">
                                        
<!--                                           <select class="form-control bg-quote" name="lg" id="luggage">
                                          	<option value="" disabled selected>LUGGAGE</option>
										    <option value="50">Less than 10 kg weight</option>
										    <option value="100">10 to 20 kg weight</option>
										    <option value="200">More than 20 kg weight</option>
										  </select> -->
                         <div class="form-group mt-3">
                            <input type="number" class="form-control" id="luggage" placeholder="Weight">
                        </div>
                         <div class="form-group mt-3">
                            <input type="text" class="form-control" id="fare" disabled>
                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-warning btn-lg form-control mb-5" id="button">Calculate Fare</button>
                                    
                                </form>
			</div>
		</div>
			    </div>
			    <div class="col-sm">
			    
			    </div>
			  </div>
			</div>
<section id="ftbg">
	<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->



  <div class="row py-0">
    <div class="col-sm">
        <div class="footer-copyright text-center py-2" style="padding: :0;margin:0;">
			<i class="fa fa-twitter" style="font-size:40px;"></i>
        	<i class="fa fa-whatsapp" style="font-size:40px;"></i>
        	<i class="fa fa-youtube" style="font-size:40px;"></i>
        	<i class="fa fa-skype" style="font-size:40px;"></i>

  		</div>
    </div>
    <div class="col-sm text-center">
    	<p id="logo">Ced<span id="clr">Cab</span></p>
    </div>
    <div class="col-sm">
        <div class="footer-copyright text-center py-3" style="font-size:20px;">© 2020 Copyright:
    		<a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  		</div>
    </div>
  </div>










  <!-- Copyright -->

</footer>
<!-- Footer -->
</section>

  <!--   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>

<script>

$(document).ready(function(){
        $('#fare').hide();
        $('#button').click(function(e){
        	e.preventDefault();
          if($('#pickup').val()==null){
            alert("Select Pickup Value");
            return;
          }
          else{
          var pickup=$('#pickup').val();
        }
          if($('#drop').val()==null){
            alert("Select Drop Value");
            return;
          }
          var drop=$('#drop').val();
          if (drop==pickup) {
          	alert("Pickup and drop value is same");
          	return;
          }
          if($('#cabtype').val()==null){
            alert("Select CabType");
            return;
          }
          var cabtype=$('#cabtype').val();
          if ($('#luggage').val()==null || $('#luggage').val()<0) {
          	alert("Illegal Value of weight");
          	return;
          }
          if ($('#luggage').val()==0) {
          	var luggage=0;
          }
          if ($('#luggage').val()>0 &&  $('#luggage').val()<=10) {
          	var luggage=50;
          }
          if ($('#luggage').val()>10 && $('#luggage').val()<=20) {
          	var luggage=100;
          }
          if ($('#luggage').val()>20) {
          	var luggage=200;
          }
         
          $.ajax({
            url:'action.php',
            type:'POST',
            data:{pickup:pickup,drop:drop,cabtype:cabtype,luggage:luggage
            },
            success:function(result){
              console.log(result);
              $('#fare').show();
              $('#fare').val("Total Fare:"+result);
      
              },
            error: function(){
            alert("error");
            }
          });
        });
      });

</script>
 