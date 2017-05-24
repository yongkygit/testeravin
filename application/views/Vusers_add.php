<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link href="<?php echo base_url();?>dist/css/bootstrap.min.css" rel="stylesheet">	
        <script src="<?php echo base_url();?>dist/js/jquery.min.js"></script>

    <!-- global css -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

<script>



$(document).ready(function() {
	
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
   
    var total_input = 0; //initlal text box count
			
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
		
		

		cetakv = $("#cetak").val();

		
		
		
			
	var Cetak = "<div><div class='form-group'><label class='control-label col-sm-3'>Alamat:</label><div class='col-sm-7'><input type='text' name='cetak[]'  value ='"+cetakv+"'  class='form-control' placeholder='Cetak' readonly></div></div></div>";

	 

	 
            $(wrapper).append('<div>'+ Cetak +'<a href="#" rel="'+total_input+'" class="remove_field"><img src="<?php echo base_url();?>dist/img/Remove.png" alt="decline"></a></div>'); //add input box

	total_input++;
			

					$("#cetak").val("");

				
       
    });	
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		
		var this_rel = $(this).attr('rel');
		

        e.preventDefault(); $(this).parent('div').remove();
    })
});

</script>

        <script>
		
function validateForm() {
    var x = document.forms["myform"]["nama"].value;
	 var y = document.forms["myform"]["telephone"].value;
	  var z = document.forms["myform"]["email"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
	else if (y == "") {
        alert("Telephone must be filled out");
        return false;
    }
	else if (z == "") {
        alert("Email must be filled out");
        return false;
    }
	else {

        return true;
    }
}
		
		
            $(function () {
                $("#Customernmv").autocomplete({
                    source: "<?php echo base_url(); ?>index.php/Users/datacustomer",
                    minLength: 3
                });
            });		
            $(function () {
                $(".ItemNamev").autocomplete({
                    source: "<?php echo base_url(); ?>index.php/Order/databarang",
                    minLength: 3
                });
            });
        </script>

		
</head>
<body>
<div class="container">
<div class="row">
				<div class="col-md-12">	
				<h1>CREATE USER</h1>
				<h1 align="center"> FORM ISIAN</h1>
								
                                <form action="<?php echo base_url(). 'index.php/Users/tambah_aksi'; ?>" method="post" class="form-horizontal" name ="myform" onsubmit="return validateForm()">
																						
					
									<div class="form-group">
										<label class="control-label col-sm-3">Nama:</label>
										<div class="col-sm-7"> 										
										
                                            <input type="text" name="nama" class="form-control" placeholder="nama">
                                            
                                        
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">No HP:</label>
										<div class="col-sm-7"> 										
										
                                            <input type="text" name="telephone" class="form-control" placeholder="telephone">
                                            
                                        
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Email:</label>
										<div class="col-sm-7"> 										
										
                                            <input type="text" name="email" class="form-control" placeholder="email">
                                            
                                        
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-sm-3">Alamat:</label>
										<div class="col-sm-7"> 										
										
                                            <input type="text" id="cetak" class="form-control" placeholder="Isi alamat">
                                            
                                        
										</div>
										<div class="col-sm-2">
										<button class="btn btn-responsive btn-warning add_field_button">Tambah field alamat</button>
										</div>
									</div>	
									 
										
										
										<!--Isian input-->
									<div class="input_fields_wrap"></div>
										 

									
										
																	
									<div class="form-group">
										<label class="control-label col-sm-3"></label>
										<div class="col-sm-7"> 										
										
                                            <input type="submit" class="btn btn-responsive btn-primary" value="Tambah ke database">
                                            
                                        
										</div>
									</div>

					
																
									
									
									
										


									
									
							
									
											
										
								
									
                                </form>									


						

</div>
</div>
</div>	
</body>
</html>













