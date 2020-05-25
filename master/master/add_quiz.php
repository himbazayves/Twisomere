


<?php 
include "../../config/connection.php";
   //Get Post variables
   //$question_number = $_POST['question_number']; 

$query = "select * from questions order by question_number desc limit 1";



	



$questions = $mysqli->query($query) or die ($mysqli->error.__LINE__);
//$total=$questions->num_rows;
$total=$questions->fetch_assoc() ; 
$total=(int)$total['question_number'];
$next=$total+1;




   $book_id = 16;  
        
   $question_text = $_POST['question_text'];
   $correct_choice = $_POST['correct_choice'];
   $choices = array();
   $choices[1] = $_POST['choice1'];
   $choices[2] = $_POST['choice2'];
   $choices[3] = $_POST['choice3'];
   $choices[4] = $_POST['choice4'];
   $choices[5] = $_POST['choice5'];

   //Question query
   $query="insert into questions (question_number, book_id, question) 
   	 values('$next', '$book_id','$question_text')";
   $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);

   //VALIDATE INSERT
   if($insert_row){
      foreach($choices as $choice => $value){
        if($value != ''){
	       if($correct_choice == $choice){
	          $is_correct = 1;
	       } else {
	         $is_correct = 0;
	       }
              $query="insert into choices (question_number,is_correct,choice) 
   	          values('$next','$is_correct','$value')";
              $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);
	          if($insert_row){
	            continue;
	          }else {
	      		die("Error: (".$mysqli->errno.") ".$mysqli->eerror);
	    	}
        }
    }
   echo "<div class='alert alert-success'> Question has been added , you may continue more if you want </div>";
}
else {

    echo "<div class='alert alert-warning'> Denied</div>";
}


?>
