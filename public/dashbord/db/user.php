<?php
require_once('connection.php');
class User extends connection{
    //Function To Add Users
    public function add($data){
        if(!empty($data)){
            $fields=$placeholders=[];
            foreach($data as $field => $value){
            $fields[]       = $field;
            $placeholders[] = '"'.$value.'"';
            }
        }
        $sql = "insert into usertable (".implode(',',$fields).") values (".implode(',',$placeholders).")";

        $result=mysqli_query($this->connection, $sql);
        if($result) {
            echo json_encode($this->connection->insert_id);
        }
    }

    //Demo class
    public function adddemo($data){
        if(!empty($data)){
            $fields=$placeholders=[];
            foreach($data as $field => $value){
            $fields[]       = $field;
            $placeholders[] = '"'.$value.'"';
            }
        }
        $sql = "insert into demo_class (".implode(',',$fields).") values (".implode(',',$placeholders).")";

        $result=mysqli_query($this->connection, $sql);
        if($result) {
            //echo json_encode($this->connection->insert_id);
        }
    }
    //Purchase course
    public function addpurchase($data){
        if(!empty($data)){
            $fields=$placeholders=[];
            foreach($data as $field => $value){
            $fields[]       = $field;
            $placeholders[] = '"'.$value.'"';
            }
        }
        $sql = "insert into purchase_course (".implode(',',$fields).") values (".implode(',',$placeholders).")";

        $result=mysqli_query($this->connection, $sql);
        if($result) {
            //echo json_encode($this->connection->insert_id);
        }
    }
    //Function To Upload Photo
    public function uploadPhoto($image_data){
        //echo json_encode($image_data);die;
        $dir = 'uploads/';
        $ext = pathinfo($image_data["name"], PATHINFO_EXTENSION);
        $fileName = time().uniqid().".".$ext;
        move_uploaded_file($image_data["tmp_name"],$dir.$fileName);
        return $fileName;
    }
    public function getuserCourse($course_name){
        $sql = "select * from usertable where category = '$course_name'";
        //echo $sql; die;
        $result=mysqli_query($this->connection, $sql);
        if($result->num_rows > 0){
            $results = $result->fetch_assoc();
        }
        return $results;
    }
    
    //Get All User
    public function getRows(){
        $sql = "select * from usertable";
        $result=mysqli_query($this->connection, $sql);
        if($result->num_rows > 0){
            $results = $result->fetch_all(MYSQLI_ASSOC);
        }else{
            $results = [];
        }
        return $results;
    }
    public function getdemo($table){
        $sql = "select * from $table order by id desc";
        $result = mysqli_query($this->connection, $sql);
        if($result){
            return $result;
        }else{
            echo "Data selection failed".$this->connection->connect_error;
            exit();
        }
    }
    public function getBatchdemo($table){
        $sql = "select * from $table";
        $result = mysqli_query($this->connection, $sql);
        if($result){
            return $result;
        }else{
            echo "Data selection failed".$this->connection->connect_error;
            exit();
        }
    }
    public function getuserData($id){
        $sql = "select * from usertable where id = $id";
        $result=mysqli_query($this->connection, $sql);
        if($result->num_rows > 0){
            $results = $result->fetch_assoc();
        }
        return $results;
    }
    public function anotherselectJoinQuery(){
        $sql = "select usertable_2.*, categories_2.gender from usertable_2 join categories_2 on usertable_2.gender_id = categories_2.id";
        $result = mysqli_query($this->conn, $sql);
        if($result){
            return $result;
        }else{
            echo "Data join selection failed".$this->conn->connect_error;
            exit();
        }

    }
    public function selectJoinQuery(){
        $sql = "select purchase_course.*, select_batch.batch from purchase_course join select_batch on purchase_course.course_batch = select_batch.id";
        $result = mysqli_query($this->connection, $sql);
        if($result){
            return $result;
        }else{
            echo "Data join selection failed".$this->connection->connect_error;
            exit();
        }

    }
    public function getPurchase(){
        $sql = "select * from purchase_course order by id desc";
        $result = mysqli_query($this->connection, $sql);
        if($result){
            return $result;
        }else{
            echo "Data join selection failed".$this->connection->connect_error;
            exit();
        }

    }
    public function getRow($value){
		$sql = "select * from usertable where id={$value}";
		//echo $sql;die;
		$result=mysqli_query($this->connection, $sql);
		if($result->num_rows > 0){
			$result = $result->fetch_row();
		}else{
			$result = [];
		}
		return $result;
	}
    public function deleteData($table,$id){
        $sql = "delete from $table where id=$id";
        $result = mysqli_query($this->connection, $sql);
        if($result){
            header("Location:demo_req.php");
        }else{
            echo "Data delete failed".$this->connection->connect_error;
            exit();
        }
    }
    public function deletePurchaseData($table,$id){
        $sql = "delete from $table where id=$id";
        $result = mysqli_query($this->connection, $sql);
        if($result){
            header("Location:purchase_req.php");
        }else{
            echo "Data delete failed".$this->connection->connect_error;
            exit();
        }
    }
    //Function To Update
	public function update($data,$id){
		if(!empty($data)){
			$fields = "";
			$x = 1;
			$fieldsCount = count($data);
			foreach($data as $field => $value){
				$fields .="{$field}='{$value}'";
				if($x < $fieldsCount){
					$fields .=",";
				}
				$x++;
			}
		}
		$sql = "update usertable set $fields where id = $id";
		$result=mysqli_query($this->connection, $sql);
		if($result) {
			return;
		}
	}	
	
     
}



