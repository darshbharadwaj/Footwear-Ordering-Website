<!DOCTYPE HTML>
<html>

	<head>
	<script type="text/javascript" src="log-reg_validate.js"></script>
	<script type="text/javascript" src="log_validate.js"></script>
	<style>
	.center{
		text-align:center;
	}
	</style>
	<?php
	include("head.php");
	include("nav.php");
	?>
	
	<body>
	<div class="container">
	<div class="row row-pb-md">
	<?php
	require("utils/conn.php");
		$result= $conn->query("SELECT * from products");
		if($result->num_rows > 0)
    echo "<table border =2 width=100%>
    <tr>
    <th>Product Image</th>
    <th>Product Name</th>
    <th>Product Amount</th>
    <th>Action</th>
	</tr>";
	
	while($row=mysqli_fetch_assoc($result))
							{
								$imgs=explode(",",$row["pimg"]);
							// 	echo'
							// <div class="col-lg-4 mb-4 text-center">
							// 	<div class="product-entry border">
							// 		<a href="product-detail.php?id='.$row["pid"].'" class="prod-img">
							// 			<img src="images/'.$imgs[0].'" class="img-fluid" alt="Free html5 bootstrap 4 template">
							// 		</a>
							// 		<div class="desc">
							// 			<h2><a href="product-detail.php?id='.$row["pid"]. '">'.$row["brand"].' '.$row["pname"].' </a></h2>
							// 			<span class="price">'.$row["pamount"].'</span>
							// 		</div>
							// 	</div>
							// </div>';
							 echo "<tr>
		// <td>".'<img src="images/'.$imgs[0].'" ' . "</td>
		 <td>".$row["pname"]. "</td>
		 <td>" .$row["pamount"]. "</td>";

							}
		?>
</div>
</div>
	</body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<?php
		include("breadcrumbs.php");
		?>
<?php
        include("footer.php");
        include("footer_links.php");
?>
