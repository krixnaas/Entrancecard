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
			width: 40%;
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

<body class="bgbody">
<div align="center">
	<form action="insert.php" method="post" enctype="multipart/form-data">		
		<table border="0" class="card" >
			<tr>
				<td><img src="image/logo.png" class="img"></td>
				<td colspan="3" align="center">
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
			</tr>
			<tr>
				<td colspan="4">
					<div style="border:2px solid blue;"></div>
				</td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="txtfirstname" placeholder="First Name"required class="textdesign"/></td>
				<td><input type="text" name="txtmidname" placeholder="Mid Name" class="textdesign"/></td>
				<td><input type="text" name="txtlastname" placeholder="Last Name" required class="textdesign"/></td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td><input type="date" name="txtdob" required class="textdesign"/></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td colspan="3" style="width:160px;">
					<input type="radio" name="txtgender" value="Male" required checked/>Male
					<input type="radio" name="txtgender" value="Female" />Female
				</td>			
				
			</tr>
			<tr>
				<td>Guradian's Name</td>
				<td><input type="text" name="txtgfirstname" placeholder="First Name" required class="textdesign"/></td>
				<td><input type="text" name="txtgmidname" placeholder="Mid Name" class="textdesign"/></td>
				<td><input type="text" name="txtglastname" placeholder="Last Name"required class="textdesign"/></td>
			</tr>
			<tr>
				<td>Nationality</td>
				<td>
					<select name="txtnationality" class="textdesign" required>
						<option value="0">Select Nationality</option>
						<option value="Nepali">Nepali</option>
						<option value="Indian">Indian</option>					
					</select>
				</td>
			</tr>
			<tr>
				<td>Contact No.</td>
				<td><input type="text" name="txtmobileno" placeholder="98########" maxlength="10" class="textdesign" required/></td>			
				<td><input type="text" name="txtoptno" placeholder="Optional No." class="textdesign" /></td>						
				<td></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input type="email" name="txtemail" placeholder="Enter Email"class="textdesign" required/></td>			
				<td></td>						
				<td></td>
			</tr>
			<tr>
				<td colspan="4"><u>Address</u></td>
			</tr>
			<tr>
				<td>Temporary</td>
				<td><input type="text" name="txtwardno1" placeholder="Ward No."class="textdesign"required/></td>
				<td><input type="text" name="txtcity1" placeholder="City/ Tole" class="textdesign"required/></td>
				<td><input type="text" name="txtstate1" placeholder="District / State"class="textdesign" required/></td>
			</tr>
			<tr>
				<td>Permanent</td>
				<td><input type="text" name="txtwardno2" placeholder="Ward No." class="textdesign"required/></td>
				<td><input type="text" name="txtcity2" placeholder="City/ Tole" class="textdesign"required/></td>
				<td><input type="text" name="txtstate2" placeholder="District / State"class="textdesign" required/></td>
			</tr>
			<tr>
				<td>Qualification</td>
				<td>
					<select name="txteducation" class="textdesign" required>
						<option value="0">Select Education</option>
						<option value="10+2">+2</option>
						<option value="Diploma">Diploma</option>
						<option value="A-Level">A-Level</option>
					</select>
				</td>
				<td><input type="text" name="txtgrade" placeholder="Grade / Div"class="textdesign"required/></td>
				<td></td>
			</tr>
			
			<tr>
				<td>Applying For</td>
				<td>
					<select name="txtprogram"class="textdesign" required>
						<option value="0">Select Program</option>
						<option value="Civil">Civil</option>
						<option value="Computer">Computer</option>
						<option value="Architecture">Architecture</option>
					</select>
				</td>
				<td></td>
				<td></td>
			</tr>
			
			<tr>
				<td>Photo</td>
				<td colspan="3"><input type="file" name="picture" class="textdesign" required/></td>
			</tr>
			
		</table>
				<input type="submit" name="btnsubmit" value="Register" class="button button1"/>
				<input type="reset" name="btnreset" value="Reset" class="button button3"/>
			


	</form>
</div>
</body>