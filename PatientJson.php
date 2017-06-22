<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$string = file_get_contents("PatientJson.json");
$jsonIterator = json_decode($string, true);

// $jsonIterator = new RecursiveIteratorIterator(
//     new RecursiveArrayIterator(json_decode($string, TRUE)),
//     RecursiveIteratorIterator::SELF_FIRST);
echo "<h1>Patient Details</h1>";

//echo $jsonIterator['patient']['patients'][0]['filecode'];

$output="";
foreach ($jsonIterator['patient']['patients'] as $patients) {
	//$output .= "<img src=' " . $patient['img']. " ' width='100 px' height= '150 px'/><br/>";
	$output .= "<img src= '".$patients['img']. "' width='100 px' height= '150 px'/> <br/>";
    $output .= "Patient ID : ".$patients['filecode']."<br/>";
    $output .= "Firstname : ".$patients['firstname']."<br/>";
    $output .= "Lastname : ".$patients['lastname']."<br/>";
    $output .= "Date of birth : ".$patients['dob']."<br/>";
    $output .= "Gender : ".$patients['gender']."<br/>";
    $output .= "Street : ".$patients['address']['street']."<br/>";
    $output .= "City : ".$patients['address']['city']."<br/>";
    $output .= "Cell : ".$patients['phone']['cell']."<br/>";
    $output .= "Home : ".$patients['phone']['home']."<br/>";
    $output .= "Work : ".$patients['phone']['work']."<br/>";
    $output .= "Email : ".$patients['email']."<br/>";
    $output .= "Medical History : ".$patients['medicalhistory']."<br/>";
    $output .= "Allergy : ".$patients['allergies']."<br/>";
    $output .= "Blood group : ".$patients['bloodgroup']."<br/>";
    $output .= "Marital Status : ".$patients['maritalstatus']."<br/>";
    $output .= "Occupation : ".$patients['occupation']['_text']."<br/>";
    $output .= "<br/>";
    $output .= "Spouse Firstname : ".$patients['spousenamem']['firstname']."<br/>";
    $output .= "Spouse Lastname : ".$patients['spousenamem']['lastname']."<br/>";
	$output .= "<br/>";	
	$output .= "Employer Details <br/>";
    $output .= "Firstname : ".$patients['employ']['firstname']."<br/>";	
    $output .= "Lastname : ".$patients['employ']['lastname']."<br/>";
    $output .= "Cell : ".$patients['employ']['phone']['cell']."<br/>";	
    $output .= "Home : ".$patients['employ']['phone']['home']."<br/>";
    $output .= "Work : ".$patients['employ']['phone']['work']."<br/>";	
    $output .= "Street : ".$patients['employ']['address']['street']."<br/>";	
    $output .= "City : ".$patients['employ']['address']['city']."<br/>";
    $output .= "<br/>";	
    $output .="Emergency Details <br/>";
    $output .= "Firstname : ".$patients['emergence']['firstname']."<br/>";	
    $output .= "Lastname : ".$patients['emergence']['lastname']."<br/>";    
    $output .= "Street : ".$patients['emergence']['address']['street']."<br/>";	
    $output .= "City : ".$patients['emergence']['address']['city']."<br/>";
    $output .= "Cell : ".$patients['emergence']['phone']['cell']."<br/>";	
    $output .= "Home : ".$patients['emergence']['phone']['home']."<br/>";
    $output .= "Work : ".$patients['emergence']['phone']['work']."<br/>";	
    $output .= "Email : ".$patients['emergence']['email']."<br/>";
    $output .= "<br>============================== <br>";
}
echo $output;
 ?>
</body>
</html>