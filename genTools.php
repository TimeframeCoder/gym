<?php
	class GenTools{
        public function executeQuery($query, $conn) {
            $result = mysqli_query($query,$conn);
            if($result){
                $msg = "Executed Successfully";
            }
            else{
                $msg = "Error Executing";
            }
            echo $msg;
        }    
    }
?>