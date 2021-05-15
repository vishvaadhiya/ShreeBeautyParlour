<?php

        extract($_POST);

        //$Mn = $_POST['$MobileNo'];
        //$Nm = $_POST['$Name'];
        //$Em = $_POST['$Email'];
        //$Mes = $_POST['$Message'];

        $con = mysqli_connect("localhost","root","","shreeparlour");
        /*if($con)
        {
        	echo "connect ok";
        }
        else
        {
        	echo "not ok";
        }*/

       //$query = "INSERT INTO allow_insert(cus__id, MobileNo, Name, Email, Message) VALUES ('NULL','$MobileNo','$Name','$Email','$Message')";

       $query = "INSERT INTO allo_insertparlour(cust_id, MobileNo, Name, Email, Message) VALUES ('NULL','$MobileNo','$Name','$Email','$Message')";

        $data = mysqli_query($con,$query);
        if($data)
        {
        	echo " data inserted succefully";
        }
        else
        {
        	echo "not entered";
        }

        header("Location:index.php");
?>