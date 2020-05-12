<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 

      //Check to see if score is set_error_handler
	if (!isset($_SESSION['score'])){
	   $_SESSION['score'] = 0;
	}

//Check if form was submitted
if($_POST){
	$_SESSION['limit']++;
	$_SESSION['number']++;
	$number = $_POST['number'];
	$book_id = $_POST['book_id'];
	$selected_choice = $_POST['choice'];
	$next=$number+1;
	$total=4;

	//Get total number of questions
	$query="SELECT * FROM `questions` where book_id=$book_id ";
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total=$results->num_rows;

	//Get correct choice

	//$query = "select * from `questions` where book_id = $book_id LIMIT 3,1";
	$q = "select * from `choices` where question_number = $number and is_correct=1";
	$result = $mysqli->query($q) or die($mysqli->error.__LINE__);
	$row = $result->fetch_assoc();
	$correct_choice=$row['id'];



	//compare answer with result
	if($correct_choice == $selected_choice){
		$_SESSION['score']++;
	}

	if($_SESSION['number'] == $total+1){
		header("Location: final.php?book_id=$book_id");
		exit();
	} else {
			
			
			header("Location: question.php?n=".$next."&book_id=$book_id&score=".$_SESSION['score']);
	}
}
?>