<?php
    define("HOST", "localhost");
    define("PSWD", "");
    define("DB", "wtproject");
    define("USER", "root");
    define("PORT", "3307");
    
    $con = mysqli_connect(HOST, USER, PSWD, DB, PORT);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $reg = $_POST['reg'];
        $buyer = $_POST['buyer'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $make = $_POST['make'];
        $model = $_POST['model'];
        $color = $_POST['color'];
        $reg_date = $_POST['reg-date'];
        $reg_type = $_POST['reg-type'];
        $valid_upto = $_POST['valid-upto'];
        $chassis = $_POST['chassis'];
        $engine = $_POST['engine'];
        $pol_date = $_POST['pol-date'];
        $insurance_date = $_POST['insurance-date'];
        $insurance_name = $_POST['insurance-name'];
        
        $query = "INSERT INTO vehicle (ID, Reg_No, Buyer_Name, Phone_Number, Email, Make, Model, Color, Registration_Date, Registration_Type, Reg_Valid_Upto, Chassis_Number, Engine_Number, Pollution_Expiry_Date, Insurance_Date, Insurance_Company) VALUES (null, '$reg', '$buyer', '$number', '$email', '$make', '$model', '$color', '$reg_date', '$reg_type', '$valid_upto', '$chassis', '$engine', '$pol_date', '$insurance_date', '$insurance_name');";

        if (mysqli_query($con, $query) == TRUE) {
            echo json_encode(['success' => true]);
        }
        else {
            $error = mysqli_error($con);
            echo json_encode(['success' => false, 'error' => $error]);
        }
    }
?>