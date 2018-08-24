<?php 

	if(isset($_POST['btnsubmit'])==true)
	{
		//echo "button clicked.";
		
		$firstname =  trim(ucfirst($_POST['txtfirstname']));
		$midname =  trim(ucfirst($_POST['txtmidname']));
		$lastname =  trim(ucfirst($_POST['txtlastname']));
		$dob= $_POST['txtdob'];
		$gender = $_POST['txtgender'];
		
		$g_firstname =  trim(ucfirst($_POST['txtgfirstname']));
		$g_midname =  trim(ucfirst($_POST['txtgmidname']));
		$g_lastname =  trim(ucfirst($_POST['txtglastname']));
		
		$nationality =  trim(ucfirst($_POST['txtnationality']));
		
		$mobileno =  trim($_POST['txtmobileno']);
		$optno =  trim($_POST['txtoptno']);
		
		$email =  trim($_POST['txtemail']);
		
		$wardno1 =  trim($_POST['txtwardno1']);
		$city1 =  trim(ucfirst($_POST['txtcity1']));
		$state1 =  trim(ucfirst($_POST['txtstate1']));
		
		$wardno2 =  trim($_POST['txtwardno2']);
		$city2 =  trim(ucfirst($_POST['txtcity2']));
		$state2 =  trim(ucfirst($_POST['txtstate2']));
		
		$education =  trim(ucfirst($_POST['txteducation']));
		$grade =  trim($_POST['txtgrade']);
		
		$program =  trim(ucfirst($_POST['txtprogram']));
		
		$imagename =  trim($_FILES['picture']['name']);
		
		
		include "db.php";
		
		$query = mysqli_query($connection, "select * from tblregistration where email='".$email."'");
		$check = mysqli_fetch_array($query);
		if($check==true)
		{
			echo "<div align='center' style='color:red;'>Already Registred.</div>";
		}else{
			
			//insert 
			//file move
			$filemove =move_uploaded_file($_FILES['picture']['tmp_name'],"image/".$imagename);
			if($filemove==1)
			{
				//echo "success";
				//success
				$newfilename = "http://localhost/Entrancecard/image/".$imagename;
				$date = date("m/d/Y");
				
				$insert = mysqli_query($connection, 
				"insert into tblregistration 
				(id, first_name, mid_name,sur_name, dob, gender, g_firstname,g_midname,g_surname, 
				nationality,contactno,optno,email,
				wardno1,city1,state1, wardno2,city2,state2,
				education,grade,program,photo,date) 
				VALUES (NULL,'$firstname', '$midname', '$lastname', '$dob', '$gender',
				'$g_firstname', '$g_midname', '$g_lastname', '$nationality', '$mobileno', '$optno', '$email',
				'$wardno1', '$city1', '$state1', '$wardno2', '$city2', '$state2', 
				'$education', '$grade', '$program', '$newfilename', '$date')"); 
				
				//echo $insert;
				//redirecting user to entrance card
				
				$lastid= mysqli_insert_id($connection);
				header("location:entrancecard.php?id=".$lastid); //lets check
				//echo "Done";
				//pass last inserted id too
				
				
			}else{
				echo "<div align='center' style='color:red;'>File Uploading Failed. Try Again.</div>";
			}
			
		}
		
		
	}else{
		//echo "else part";
		header("location:registration.php");
	}

?>