<?php
$action = $_REQUEST['action'];
if(!empty($action)){
    require_once('db/user.php');
    $obj = new User();
}
// adding user Action
if($action == 'adduser' && !empty($_POST)){
    //echo json_encode($_POST);
	$category = $_POST['category'];
    $unique_id = $_POST['unique_id'];
	$course_name = $_POST['course_name'];
	$course_front_des = $_POST['course_des_1'];
	$course_point_det_1 = $_POST['course_p_d_1'];
	$course_point_det_2 = $_POST['course_p_d_2'];
	$course_point_det_3 = $_POST['course_p_d_3'];
	$course_back_des = $_POST['course_des_2'];
	$course_fees = $_POST['course_fees'];
	$course_cer_des = $_POST['course_des_3'];
	$why_learn_1 = $_POST['why_learn_1'];
	$why_learn_2 = $_POST['why_learn_2'];
	$why_learn_3 = $_POST['why_learn_3'];
	$why_learn_4 = $_POST['why_learn_4'];
	$why_learn_5 = $_POST['why_learn_5'];
	$why_learn_6 = $_POST['why_learn_6'];
	$faq_ans_1 = $_POST['faq_ans_1'];
	$faq_ans_2 = $_POST['faq_ans_2'];
	$faq_ans_3 = $_POST['faq_ans_3'];
	$faq_ans_4 = $_POST['faq_ans_4'];
	$faq_ans_5 = $_POST['faq_ans_5'];
	$faq_ans_6 = $_POST['faq_ans_6'];
	$photo = $_FILES['photo'];

	//Check userId Exists or not
	$playerId  = (!empty($_POST['userId'])) ? $_POST['userId']:"";

    $imagename = "";
    if(!empty($photo['name'])){
		$imagename = $obj->uploadPhoto($photo);
		$playerData = [
			'category' => $category,
			'unique_id' => $unique_id,
			'course_name'  => $course_name,
			'course_front_des'  => $course_front_des,
			'course_point_det_1' => $course_point_det_1,
			'course_point_det_2' => $course_point_det_2,
			'course_point_det_3' => $course_point_det_3,
			'course_back_des' => $course_back_des,
			'course_fees' => $course_fees,
			'course_cer_des' => $course_cer_des,
			'why_learn_1' => $why_learn_1,
			'why_learn_2' => $why_learn_2,
			'why_learn_3' => $why_learn_3,
			'why_learn_4' => $why_learn_4,
			'why_learn_5' => $why_learn_5,
			'why_learn_6' => $why_learn_6,
			'faq_ans_1' => $faq_ans_1,
			'faq_ans_2' => $faq_ans_2,
			'faq_ans_3' => $faq_ans_3,
			'faq_ans_4' => $faq_ans_4,
			'faq_ans_5' => $faq_ans_5,
			'faq_ans_6' => $faq_ans_6,
			'course_img'  => $imagename
		];
	}else{
		$playerData = [
			'category' => $category,
			'unique_id' => $unique_id,
			'course_name'  => $pname,
			'course_des'  => $email,
			'course_features' => $mobile,
		];
	}
	if($playerId){
		$obj->update($playerData,$playerId);
	}else{
		$playerId = $obj->add($playerData);
		
	}
	if(!empty($playerId)){
		$player = $obj->getRow($playerId);
		echo json_encode($player);
		exit();
	}
}

//Action to perform edit data
if($action === "editusersdata"){
	$playerId  = (!empty($_GET['id'])) ? $_GET['id']:"";
	if(!empty($playerId)){
		$user = $obj->getRow($playerId);
		echo json_encode($user);
		exit();
	}
}

//Get Count of Function getallusers
if($action == "getallusers"){
    $users = $obj->getRows();
	if(!empty($users)){
		$userList = $users;
	}else{
		$userList = [];
	}
	$userArr = array('players' => $userList);
	echo json_encode($userArr);
	exit();
}

//Action to perform edit data
if($action === "userData"){
	$playerId  = (!empty($_GET['id'])) ? $_GET['id']:"";
	if(!empty($playerId)){
		$user = $obj->getuserData($playerId);
		echo json_encode($user);
		exit();
	}
}