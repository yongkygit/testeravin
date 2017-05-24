<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css" />

<script src="<?php echo base_url();?>dist/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>dist/js/jquery.tablesorter.js"></script>
<!--cukup satu baris script untuk mengubah
 table sortable sorter,perhatikan id tablenya -->
<script type="text/javascript">

$(document).ready(function()
	{
		$("#tablemhs").tablesorter();
		
		var tbody = $("#tablemhs tbody");

if (tbody.children().length == 0) {
    document.getElementById("demo").innerHTML = 'There Curently No Data Exsis <br> Create by Click The Add Button Bellow';
}




		
		
	}
);

	 function data(){
		 

			 
			$("#form111").submit();  
		 
		 
	 }
</script>

<style>
table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
	width: 350px;
	height: 35px;
}
</style>
</head>
<body>




<h1>LIST USER</h1>

<div align='center'>
<br>
<br>
<br>
<br>
<br>
<form action="<?php echo site_url('Users');?>" method = "post">
<b>Nama : </b><input type="text" name = "cari" />
<input type="submit" value = "Search" />
</form>


<form action="<?php echo site_url('Users/users_add');?>" method = "post" id="form111">
<input type="hidden" name = "data" />
</form>

<h3> Klik header untuk mengurutkan data </h3>
<table id="tablemhs">
<thead>
<tr>
	<th>nama</th>
	<th>email</th>
	
</tr>
</thead>
<tbody>

<?php
foreach ($users as $r){?>	
<tr>
	<td><?php echo $r->NAMA;?></td>
	<td><?php echo $r->EMAIL;?></td>	
</tr>		
<?php
}
?>


</tbody>
</table>
<p id="demo"></p>
<button type="button" onclick="data()" class="btn btn-w-m btn-success" >Add</button>
</div>


</body>
</html>


