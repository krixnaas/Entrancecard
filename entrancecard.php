<?php 
	#Entrance Card
	if(isset($_REQUEST['id']))
	{
		$userid = trim($_REQUEST['id']);
		//now connect to the database
		include "db.php";
		
		$query = mysqli_query($connection, "select * from tblregistration where id='$userid'");
		while($row=mysqli_fetch_array($query))
		{
			$symbolno = $row['id']; // from table field name
			$firstname = $row['first_name'];
			$midname = $row['mid_name'];
			$lastname = $row['sur_name'];
			
			if($midname!="")
			{
				$fullname = $firstname.' '.$midname.' '.$lastname;
			}
			
			$fullname = $firstname.' '.$lastname;
			
			
			$imagelink = $row['photo'];
			$program= $row['program'];
			//echo $fullname;
		}
		//var_dump($data);
		
	}
?>

<head>

<style>	
		.bgbody{
			background-color:#d3d3d3;
		}
		.tablebody{
			
			
		}
		.card {
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			transition: 0.3s;
			
			background-color:white;
			padding:15px;
			border-radius:12px;
		}

		.card:hover {
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}
		.img{
			height:110px;
			width:110px;
		}
		.header{
			color:red;
			font-size:28px;
			text-style:bold;
			text-align:center;
			
		}
		.textdesign{
			text-align:center;
			padding:2px;
			margin:4px;
			width:150px;
		}
		
		.button {
			background-color: #4CAF50; /* Green */
			border: none;
			color: white;
			padding: 4px 8px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 13px;
			margin: 2px 2px;
			-webkit-transition-duration: 0.4s; /* Safari */
			transition-duration: 0.4s;
			cursor: pointer;
		}

		.button1 {
			background-color: white; 
			color: black; 
			border: 2px solid #4CAF50;
		}

		.button1:hover {
			background-color: #4CAF50;
			color: white;
		}
		.button3 {
			background-color: white; 
			color: black; 
			border: 2px solid #f44336;
		}

		.button3:hover {
			background-color: #f44336;
			color: white;
		}

	</style>
	

</head>
<body class='bgbody'>
	<div align="center">
		<table class='card'>
			<tr>
					<td><img src="image/logo.png" class="img"></td>
					<td colspan="4" align="center">
						<p class="header" align="center">
							Pokhara Engineering College<br/>
							<strong style='font-size:12px; color:black;'>
							Affiliated to PU and CTEVT
							<br/>
							Phirke-08, Pokhara, Nepal
							<br/>
							<br/>
							Web:<a href="http://www.pec.edu.np" target="_blank">www.pec.edu.np</a>
							
							Mail:<a href="mailto('info@pec.edu.np')" >info@pec.edu.np</a>
							</strong>
						</p>
					
					</td>
					<td>
						<img src='<?php echo $imagelink;?>' style='height:130px; width:110px;'/>
					</td>
				</tr>
				<tr>
					<td colspan="6" align="center">
						<Strong><u>Entrance Card</u></Strong>
					</td>
				</tr>
				<tr>
					<td colspan="6">
						<div style="border:2px solid blue;"></div>
					</td>
				</tr>
				<tr>
					<td><strong>Symbol No.</strong></td>
					<td><?php echo $symbolno;?></td>
					<td colspan="2"></td>
					<td><strong>Exam Date</strong></td>
					<td>26<sup>th</sup>, Aug. 2018</td>
				</tr>
				<tr>
					<td><strong>Applicant's Name</strong></td>
					<td><?php echo $fullname;?></td>
					<td colspan="2"></td>
					<td><strong>Exam Center</strong></td>
					<td>College Hall</td>
				</tr>
			
				<tr>
					<td><strong>Course Enroll</strong></td>
					<td><?php echo $program;?></td>
					<td colspan="2"></td>
					<td><strong>Examination</strong></td>
					<td>BE</td>
				</tr>
				<tr>
					<td colspan="2" >
						<div style="border:1px dashed black; margin-top:50px; width:150px;"></div>
						Applicant's Signature
					</td>
					<td colspan="3"></td>
					<td colspan="1" align="center">
						<img src="image/signature.png" style="height:50px; width:120px;" />
						<div style="border:1px dashed black;  width:120px;"></div>
						Authorized By
					</td>
					
					
					
				</tr>
				<tr>
					<td colspan="6">
						<div style="border:1px dashed black; margin-top:10px;"></div>
					</td>
				
				</tr>
				
				<tr>
					<td><strong><u>Rules</u></strong></td>
				</tr>
				<tr>
					<td colspan="6">
						1. Examinees are asked to enter the examination hall before 10 minutes of the start bell.	

					<td>
					
				</tr>
				<tr>
					<td colspan="6">
						2. Those coming after 20 minutes from the start bell will be not allowed to sit for the exam.	

					<td>
					
				</tr>
				<tr>
					<td colspan="6">
						3. Entrance card is a must.

					<td>
					
				</tr>
				<tr>
					<td colspan="6">
						4. While taking the examinations,one must follow examination code of conducts.	

					<td>
					
				</tr>
		</table>
	</div>
</body>





