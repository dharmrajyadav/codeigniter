<html>
<head>
	<title></title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	     


<style type="text/css">



	.palel-primary
	{
		border-color: #bce8f1;
	}
	.panel-primary>.panel-heading
	{
		background:#bce8f1;
		
	}
	.panel-primary>.panel-body
	{
		background-color: #EDEDED;
	}
</style>





</head>
<body>
<div class="row">
    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Enter Your Details Here
			</div>
			<div class="panel-body">
				<form name="myform" id="myform" method="POST" action="<?php echo base_url();?>registration_c/registData">
					<div class="form-group">
						<label for="myName">Name *</label>
						<input id="myName" name="myName" class="form-control" type="text" data-validation="required">
						<span id="error_name" class="text-danger"></span>
					</div>
				
					<div class="form-group">
						<label for="age">Age *</label>
						<input id="age" name="age"  class="form-control" type="number" min="1" >
						<span id="error_age" class="text-danger"></span>
					</div>
					
					<div class="form-group">
						<label for="gender">Gender</label>
						<select name="gender" id="gender" class="form-control">
							<option selected>Male</option>
							<option>Female</option>
							<option>Other</option>
						</select>
						<span id="error_gender" class="text-danger"></span>
					</div>
					
					<div class="form-group">
                           <!--  <?php   var_dump($fetchcountry); ?> -->

						<label for="country">Country</label>
						<select name="country" id="country" class="form-control">
							<option selected>Select Country</option>

                          <!--  <?php

                                        foreach ($fetchcountry as $fetchcountry) {

                                            ?>
                                         <option values="<?php  echo $fetchcountry['country_id'];?>"><?php  echo $fetchcountry['country_name'];?></option>

                                            <?php
                                                   
                                        }
                            ?>   -->
                           
							
						</select>
						<span id="error_gender" class="text-danger"></span>
					</div>
					
					<div class="form-group">
						<label for="state">State</label>
						<select name="state" id="state" class="form-control">
							<option selected>Select State</option>
							
						</select>
						<span id="error_gender" class="text-danger"></span>
					</div>

					<div class="form-group">
						<label for="phone">Phone Number *</label>
						<input type="text" id="phone" name="phone" class="form-control" >
						<span id="error_phone" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="disc">Discription</label>
						<textarea class="form-control" name="discription" id="discription" rows="3"></textarea>
					</div>
					
					<button id="submit" type="submit" value="submit" class="btn btn-primary center">Submit</button>
			
				</form>

			</div>
		</div>
	</div>
</div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>





<script type="text/javascript">



        $(document).ready(function(){

            $.ajax({

                url:'http://localhost/codeIgniter/index.php/Registration_c/getCountry',
                success:function(data)
                {
                    var countryjson=JSON.parse(data);
                    var length=countryjson.fetchcountry.length;
                    for(var i=0; i<length; i++) 
                    {
                            var appendcountry='<option value="'+countryjson.fetchcountry[i].country_id+'">'+countryjson.fetchcountry[i].country_name+'</option>';
                          

                    }              

                    $('#country').html(appendcountry);

                 }


            })

        });




        $("#country").click(function(){
                var c_id = $("#country").val();
                

            $.ajax({
                        type:'post',
                        url:'http://localhost/codeIgniter/index.php/Registration_c/getState',
                        data:{id:c_id},
                        success:function(data)
                        {
                            var statejson=JSON.parse(data);
                            var length=statejson.fetchstate.length;
                            for (var i =0;i<length;i++) {
                               var stateappends='<option value="'+statejson.fetchstate[i].state_id+'">'+statejson.fetchstate[i].state_name+'</option>';
                            }
                                $('#state').html(stateappends);
                        }
            });
        });


      
        		/*$("#submit").click(function(){

        			var c_id=$("#country").val();
        			var myname= $("#myName").val();
                	//console.log(myName);


        			$.ajax({
        						type:'post',
        						url:'http://localhost/codeIgniter/index.php/registration_c/test',
        						data:{id:c_id},
        						success:function(data)
        						{

        							var jsonData=JSON.parse(data);
        									console.log(jsonData);
        						}



        			});


        		});
*/



/*
        $("#submit").click(function(){
                var c_id = $("#country").val();
                

            $.ajax({
                        type:'post',
                        url:'http://localhost/codeIgniter/index.php/Registration_c/getState',
                        data:{id:c_id},
                        success:function(data)
                        {
                            var statejson=JSON.parse(data);
                            var length=statejson.fetchstate.length;
                            }
                               
                        
            });
        });

*/




</script>



</body>
</html>