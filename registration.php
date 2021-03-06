



<!doctype html>
<html lang="en">
	<head>
		<title>Registration | AAROHAN'17</title>

	</head>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css" >
  <link rel="stylesheet" href="css/stylereg.css">
  <link rel="stylesheet" href="css/set1reg.css">

  <!--Google Fonts-->
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<script>
		function SetAllCheckBoxes(FormName, FieldName, CheckValue)
			{
				if(!document.forms[FormName])
					return;
				var objCheckBoxes = document.getElementsByTagName('input');
				if(!objCheckBoxes)
					return;
				var countCheckBoxes = objCheckBoxes.length;
				if(!countCheckBoxes)
					objCheckBoxes.checked = CheckValue;
				else
					// set the check value for all check boxes
					for(var i = 0; i < countCheckBoxes; i++)
						objCheckBoxes[i].checked = CheckValue;
			}
	</script>
	<body>
		<a href="javascript:history.back()"><button id="back" class="btn btn-secondary"  role="button"> Back </button></a>
		<h1 class="header">AAROHAN' 17</h1>
		<h3 class="header-topic">EVENTS REGISTRATION</h3>
		<form method="post" name = "reg_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div id="main-wrapper">
			    <div class="row">
			      <div class="col-md-offset-4 col-md-4 ">
			        <span class="input input--hoshi">
			          <input class="input__field input__field--hoshi" type="text" id="name" name="name"/>
			          <label class="input__label input__label--hoshi input__label--hoshi-color-3">
			            <span class="input__label-content input__label-content--hoshi">Name</span>
			          </label>
			        </span>
			        <span class="input input--hoshi">
			          <input class="input__field input__field--hoshi" type="text" id="gender" name="gender"/>
			          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="gender">
			            <span class="input__label-content input__label-content--hoshi">Gender</span>
			          </label>
			        </span>
			        <span class="input input--hoshi">
			          <input class="input__field input__field--hoshi" type="text" id="college" name="college" />
			          <label class="input__label input__label--hoshi input__label--hoshi-color-3" >
			            <span class="input__label-content input__label-content--hoshi">College</span>
			          </label>
			        </span>
			        <span class="input input--hoshi">
			          <input class="input__field input__field--hoshi" type="text" id="email" name="email" />
			          <label class="input__label input__label--hoshi input__label--hoshi-color-3" >
			            <span class="input__label-content input__label-content--hoshi">E-mail</span>
			          </label>
			        </span>
			        <span class="input input--hoshi">
			          <input class="input__field input__field--hoshi" type="text" id="contact_number" name="contact"/>
			          <label class="input__label input__label--hoshi input__label--hoshi-color-3">
			            <span class="input__label-content input__label-content--hoshi">Phone Number</span>
			          </label>
			        </span>

							<span>
							</span>
			  </div>
			</div>
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<h3 id="events">Events Interested In:</h3>
					<div class="col-md-3 ">
						<input type="checkbox" id ="check_box" name="event1" value="event1"/>&nbsp; &nbsp; Invictus <br/>
						<input type="checkbox" id ="check_box" name="event2" value="event2"/>&nbsp; &nbsp; Assembler <br/>
						<input type="checkbox" id ="check_box" name="event3" value="event3"/>&nbsp; &nbsp; Contraptions <br/>
						<input type="checkbox" id ="check_box" name="event4" value="event4"/>&nbsp; &nbsp; Behind The Dots <br/>
						<input type="checkbox" id ="check_box" name="event17" value="event17"/>&nbsp; &nbsp; Fifa <br/>
						<input type="checkbox" id ="check_box" name="event18" value="event18"/>&nbsp; &nbsp; Counter-Strike <br/>
						<input type="checkbox" id ="check_box" name="event25" value="event25"/>&nbsp; &nbsp; Conjecture <br/>
					</div>
					<div class="col-md-3">
							<input type="checkbox" id ="check_box" name="event5" value="event5"/>&nbsp; &nbsp; B-Plan <br/>
							<input type="checkbox" id ="check_box" name="event6" value="event6"/>&nbsp; &nbsp; Bidwiser <br/>
							<input type="checkbox" id ="check_box" name="event7" value="event7"/>&nbsp; &nbsp; Selldom <br/>
							<input type="checkbox" id ="check_box" name="event8" value="event8"/>&nbsp; &nbsp; Colossus <br/>
							<input type="checkbox" id ="check_box" name="event19" value="event19"/>&nbsp; &nbsp; Robo War <br/>
							<input type="checkbox" id ="check_box" name="event20" value="event20"/>&nbsp; &nbsp; Inside Out <br/>
							<input type="checkbox" id ="check_box" name="event26" value="event26"/>&nbsp; &nbsp; Jigsaw <br/>
					</div>
					<div class="col-md-3">
							<input type="checkbox" id ="check_box" name="event9" value="event9"/>&nbsp; &nbsp; Journo Detective <br/>
							<input type="checkbox" id ="check_box" name="event10" value="event10"/>&nbsp; &nbsp; Game Of Recruitment <br/>
							<input type="checkbox" id ="check_box" name="event11" value="event11"/>&nbsp; &nbsp; Stockhastic <br/>
							<input type="checkbox" id ="check_box" name="event12" value="event12"/>&nbsp; &nbsp; Be a Billionare <br/>
							<input type="checkbox" id ="check_box" name="event21" value="event21"/>&nbsp; &nbsp; Shuttle <br/>
							<input type="checkbox" id ="check_box" name="event22" value="event22"/>&nbsp; &nbsp; Detour <br/>
							<input type="checkbox" id ="check_box" name="event27" value="event27"/>&nbsp; &nbsp; NIT Case Study <br/>
					</div>
					<div class="col-md-3">
							<input type="checkbox" id ="check_box" name="event13" value="event13"/>&nbsp; &nbsp; TCDC <br/>
							<input type="checkbox" id ="check_box" name="event14" value="event14"/>&nbsp; &nbsp; Khula Maidan <br/>
							<input type="checkbox" id ="check_box" name="event15" value="event15"/>&nbsp; &nbsp; Decathlon <br/>
							<input type="checkbox" id ="check_box" name="event16" value="event16"/>&nbsp; &nbsp; Inquest <br/>
							<input type="checkbox" id ="check_box" name="event23" value="event23"/>&nbsp; &nbsp; Exquizzit <br/>
							<input type="checkbox" id ="check_box" name="event24" value="event24"/>&nbsp; &nbsp; Abhivyakti <br/>
					</div>
				</div>
			</div>
			</div>
			<div class="row">
				<div class="col-md-offset-4 col-md-4">
					<div class="col-md-offset-4 col-md-4 cta col-xs-offset-4 col-xs-4 col-sm-offset-4 col-sm-4 ">
						<input id="button" type="submit" class="btn btn-primary" name="submit" value="Register!">
					</div>

				</div>
			</div>
			</div> <!-- end #main-wrapper -->
		</form>
		<!-- Scripts -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="js/scriptsreg.js"></script>
		<script src="js/classiereg.js"></script>
		<script>
		  (function() {
		    // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
		    if (!String.prototype.trim) {
		      (function() {
		        // Make sure we trim BOM and NBSP
		        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
		        String.prototype.trim = function() {
		          return this.replace(rtrim, '');
		        };
		      })();
		    }

		    [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
		      // in case the input is already filled..
		      if( inputEl.value.trim() !== '' ) {
		        classie.add( inputEl.parentNode, 'input--filled' );
		      }

		      // events:
		      inputEl.addEventListener( 'focus', onInputFocus );
		      inputEl.addEventListener( 'blur', onInputBlur );
		    } );

		    function onInputFocus( ev ) {
		      classie.add( ev.target.parentNode, 'input--filled' );
		    }

		    function onInputBlur( ev ) {
		      if( ev.target.value.trim() === '' ) {
		        classie.remove( ev.target.parentNode, 'input--filled' );
		      }
		    }
		  })();
		</script>
	</body>
</html>
<?php

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// select database "test"
$sql = "USE aarohan2017";
if ($conn->query($sql) === TRUE) {
} else {
    $dbmsg =  "Error creating database: " . $conn->error;
}

$Err = "false";
$name = $email = $gender = $mobile = $college = $events = "";
for($x = 1; $x < 26; $x++){
			if(!empty($_POST["event$x"])){
				$events .= $_POST["event$x"].', ';
			}
	}
if (($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST["submit"])) {
  if (empty($_POST["name"])) {
    echo "<script>alert('Please Enter Your Name')</script>";                             //name
    $Err = "true";
		exit();
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      echo "<script>alert('Please Enter Your Name')</script>";
      $Err = "true";
			exit();
    }
  }


  if (empty($_POST["email"])) {
    echo "<script>alert('Please Enter Your Email')</script>";
    $Err = "true";
		exit();
  } else {
    $email = test_input($_POST["email"]);                       //email
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<script>alert('Please enter a valid Email!!')</script>";
      $Err = "true";
			exit();
    }
  }

  if (empty($_POST["gender"])) {
    echo "<script>alert('Please Enter Your Gender')</script>";
    $Err = "true";
		exit();
  } else {
    $gender = test_input($_POST["gender"]);                        //events
  }

  if (empty($_POST["contact"])) {
    echo "<script>alert('Please Enter Your Name')</script>";
    $Err = "true";
		exit();
  } else {
    $mobile = test_input($_POST["contact"]);                         //mobile No.
  }
	if(empty($events)){
		echo "<script>alert('Please Select any event')</script>";
    $Err = "true";
	}

  if (empty($_POST["college"])) {
    echo "<script>alert('Please Enter Your Name')</script>";
    $Err = "true";
		exit();
  } else {
    $college = test_input($_POST["college"]);                        //college
  }

  if ($Err === "false"){
    $query = "INSERT INTO events (name, gender, college, email, contacts, events) VALUES ('$name','$gender','$college','$email','$mobile', '$events')";
    if ($conn->query($query) === TRUE) {
        echo '<script>alert("Thank You for Registering! We will get back to you!"); window.location.replace("index.html");</script>';

    }   else {
            echo "Error adding to database: " . $conn->error;
    }
  }
}


//saitizing inputs!!
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}
/*
//redirecting to same page for error handling!!
if ($_SERVER["REQUEST_METHOD"] == "POST"){
header("Location: index.php", true, 301);

}
*/
$conn ->close();

?>
