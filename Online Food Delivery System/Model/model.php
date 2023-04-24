<?php

require_once 'db_connect.php';
function showAllfood(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `food` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showMember($email){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `member` where EMAIL = '$email'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}
function showfood($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `food` where ID = '$id'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}
function login($email, $password){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `member` where EMAIL = '$email' and PASSWORD = '$password'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $row;
}
function searchUsername($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `member` WHERE NAME = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addSignupInfo($data){
	$conn = db_conn();
    $selectQuery = "INSERT into member (NAME, EMAIL, PASSWORD,STATUS)
 VALUES (:name, :email,  :password,:status)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':password' => $data['password'],
            ':status' => $data['status']
					

          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function sendfeedback($data){
    $conn = db_conn();
    $selectQuery = "INSERT into feedback (DESCRIPTION, USER_EMAIL, STATUS)
 VALUES (:description, :user_email,:status)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':description' => $data['description'],
        	':user_email' => $data['email'],
        	':status' => $data['status']
                    

          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}



function updateMember($email, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE member set NAME = ?, EMAIL = ?, NID = ?,PASSWORD=? where EMAIL = '$email'";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['NID'], $data['password']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function updateFood($id,$data){
    $conn = db_conn();
    $selectQuery = "UPDATE food set QUANTITY = ? where ID = '$id'";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['quantity']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function updateDate($email, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE member set VALIDITY = ? where EMAIL = '$email'";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['Validity']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function updateStatus($email, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE member set STATUS = ? where EMAIL = '$email'";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['Status']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

