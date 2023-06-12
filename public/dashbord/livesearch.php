<?php

include("database.php");
if(isset($_POST['input'])){
    $input = $_POST['input'];
    //echo $input;
    $query = "SELECT * FROM usertable WHERE unique_id LIKE '{$input}%'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result) > 0){?>

    <table class="table">
        <thead class="table-dark">
            <tr>
            <th scope="col">Image</th>
		  <th scope="col">Category</th>
		  <th scope="col">Unique Id</th>
		  <th scope="col">Course Name</th>
		  <th scope="col">Course Front Des</th>
		  <th scope="col">Course Point 1</th>
		  <th scope="col">Course Point 2</th>
		  <th scope="col">Course Point 3</th>
		  <th scope="col">Course Back Des</th>
		  <th scope="col">Course Fees</th>
		  <th scope="col">Course Certificate Des</th>
		  <th scope="col">Why Learn 1</th>
		  <th scope="col">Why Learn 2</th>
		  <th scope="col">Why Learn 3</th>
		  <th scope="col">Why Learn 4</th>
		  <th scope="col">Why Learn 5</th>
		  <th scope="col">Why Learn 6</th>
		  <th scope="col">Faq's 1</th>
		  <th scope="col">Faq's 2</th>
		  <th scope="col">Faq's 3</th>
		  <th scope="col">Faq's 4</th>
		  <th scope="col">Faq's 5</th>
		  <th scope="col">Faq's 6</th>
		  <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)){
                    $category = $row['category'];
                    $unique_id = $row['unique_id'];
                    $course_name = $row['course_name'];
                    $course_front_des = $row['course_front_des'];
                    $course_point_det_1 = $row['course_point_det_1'];
                    $course_point_det_2 = $row['course_point_det_2'];
                    $course_point_det_3 = $row['course_point_det_3'];
                    $course_back_des = $row['course_back_des'];
                    $course_fees = $row['course_fees'];
                    $course_cer_des = $row['course_cer_des'];
                    $why_learn_1 = $row['why_learn_1'];
                    $why_learn_2 = $row['why_learn_2'];
                    $why_learn_3 = $row['why_learn_3'];
                    $why_learn_4 = $row['why_learn_4'];
                    $why_learn_5 = $row['why_learn_5'];
                    $why_learn_6 = $row['why_learn_6'];
                    $faq_ans_1 = $row['faq_ans_1'];
                    $faq_ans_2 = $row['faq_ans_2'];
                    $faq_ans_3 = $row['faq_ans_3'];
                    $faq_ans_4 = $row['faq_ans_4'];
                    $faq_ans_5 = $row['faq_ans_5'];
                    $faq_ans_6 = $row['faq_ans_6'];
                    $photo = '<img src="uploads/'.($row["course_img"]).' " width="100px" height="100px">';
                    ?>


                    <tr>
                        <td><?php echo $photo; ?></td>
                        <td><?php echo $category; ?></td>
                        <td><?php echo $unique_id; ?></td>
                        <td><?php echo $course_name; ?></td>
                        <td><?php echo $course_front_des; ?></td>
                        <td><?php echo $course_point_det_1; ?></td>
                        <td><?php echo $course_point_det_2; ?></td>
                        <td><?php echo $course_point_det_3; ?></td>
                        <td><?php echo $course_back_des; ?></td>
                        <td><?php echo $course_fees; ?></td>
                        <td><?php echo $course_cer_des; ?></td>
                        <td><?php echo $why_learn_1; ?></td>
                        <td><?php echo $why_learn_2; ?></td>
                        <td><?php echo $why_learn_3; ?></td>
                        <td><?php echo $why_learn_4; ?></td>
                        <td><?php echo $why_learn_5; ?></td>
                        <td><?php echo $why_learn_6; ?></td>
                        <td><?php echo $faq_ans_1; ?></td>
                        <td><?php echo $faq_ans_2; ?></td>
                        <td><?php echo $faq_ans_3; ?></td>
                        <td><?php echo $faq_ans_4; ?></td>
                        <td><?php echo $faq_ans_5; ?></td>
                        <td><?php echo $faq_ans_6; ?></td>
                        <td>
                        <a href="#" class="me-3 profile" data-bs-toggle="modal" data-bs-target="#userViewModal" title=" View Profile" data-id="${user.id}"><i class="fas fa-eye text-success"></i></a>
                        <a href="#" class="me-3 edituser" title=" Edit" data-bs-toggle="modal" data-bs-target="#add-edit-modal" data-id="${user.id}"><i class="fas fa-edit text-info"></i></a>
                        <a href="#" class="me-3 deleteuser" title=" Delete" data-id="${user.id}"><i class="fas fa-trash-alt text-danger"></i></a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>



    <?php
    }else{
        echo"<h6>No Data Found</h6>";
    }
}

?>