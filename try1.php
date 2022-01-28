<html>
	<head>
		<title> header </title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<style>
			td,tr,th {
				border:3px solid gray ;
				width: 60px;
				text-align: center;	
				margin: 0;
				padding: .5;

			}

			th {
				background: #DCDCDC;
			}

			table {
				background: white;
			}

body {
width: 100%;
margin: auto;
background: rgb(29,87,88);
background: linear-gradient(98deg, rgba(29,87,88,1) 0%, rgba(0,255,175,1) 0%, rgba(70,139,201,1) 100%); 

}

</style>
</head>

<body>

<img src="logo-01.png" style="display: block; margin: 0 auto; margin-top: 3%">
<div class="container middle">
<div class="form">

<br/><br/>

<div class="container">
<table>
	<tr>
		<th> TAG </th>
		<th>NAME</th>
		<th> TOTAL </th>
		<th> M-Y </th>
		<th> 1</th>
		<th> 2 </th>
		<th> 3 </th>
		<th> 4</th>
		<th> 5 </th>
		<th>6</th>
		<th> 7 </th>
		<th> 8 </th>
		<th> 9</th>
		<th> 10 </th>
		<th> 11</th>
		<th> 12 </th>
		<th> 13 </th>
		<th> 14</th>
		<th> 15 </th>
		<th> 16</th>
		<th> 17 </th>
		<th> 18 </th>
		<th> 19</th>
		<th> 20 </th>
		<th> 21 </th>
		<th> 22 </th>
		<th> 23 </th>
		<th> 24</th>
		<th> 25 </th>
		<th> 26 </th>
		<th> 27 </th>
		<th> 28 </th>
		<th> 29 </th>
		<th> 30 </th>

	</tr>



<?php 
$conn=mysqli_connect ("localhost" , "hotelgreenghana_blue1" , "Passwordsoosimple$$$$$$$$$$" , "hotelgreenghana_blue");
$set=$_POST['search']; 
if($set) {
	$show="SELECT * FROM shecallme where tag='$set'";
	$result=mysqli_query($conn,$show);
	while($rows=mysqli_fetch_array($result)) {
		echo  "<tr>";
	
		echo  "<td>";
		echo $rows ['TAG'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['NAME'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['TOTAL'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['M-Y'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['1'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['2'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['3'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['4'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['5'];
		echo  "</td>";

		echo  "<td>";
		echo $rows ['6'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['7'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['8'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['9'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['10'];
		echo  "</td>";

		echo  "<td>";
		echo $rows ['11'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['12'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['13'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['14'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['15'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['16'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['17'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['18'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['19'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['20'];
		echo  "</td>";

		echo  "<td>";
		echo $rows ['21'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['22'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['23'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['24'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['25'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['26'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['27'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['28'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['29'];
		echo  "</td>";
	
		echo  "<td>";
		echo $rows ['30'];
		echo  "</td>";
	

		echo  "</tr>";
		echo  "</br>";		

}
}

else {
	echo "nothing found";
}

?>

</table>

<br/><br/>
<a href="try2.php" style="text-align:center ; color: white ; background-color: brown ; padding: 1%; margin: 0 auto ; "> <b> BACK </b></a>

</body>
</html>