<?php
require_once '../Model/model.php';
    session_start();
    $flag=1;
    if(isset($_POST['feedback'])&& isset($_SESSION['email'])){
        
        if(empty($_POST['description'])){
            $feedbackError = "Feedback is required";
            $flag=0;
             echo "Error";
        }
        else{
            $feedback = $_POST['description'];
        }
    }
    if($flag==1){
        $data['description'] = $feedback;
        $data['email'] = $_SESSION['email'];
        $data['status'] = 1;
        if(sendfeedback($data)){
            $Success = "Feedback sent successfully";
            $args = array(
                
            'Success' => $Success,
        );
            header("location:../View/FeedbackFormMemberView.php?" . http_build_query($args));
        }
        else{
            echo "Error";
        }
        

    }
    else{
        $args = array(
            'feedbackError' => $feedbackError,
        );
        header("location:../View/FeedbackFormMemberView.php?" . http_build_query($args));
    }
    
?>