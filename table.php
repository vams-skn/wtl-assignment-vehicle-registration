<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./table.css">
    <title>Submissions</title>
</head>
<body>
    <div class="main-content">
        <div class="header">
            <h1 class="silkscreen-bold">WEB TECH ASSIGNMENT</h1>
        </div>
        <div id="table-container">
            <div id="header">
                <p>
                    Added Vehicle <span class="small">(Scroll right to see more columns)</span>
                </p>
            </div>
            <hr>
            <table>
                <thead>
                    <tr> 
                        <th>ID</th> 
                        <th>Registration Number</th> 
                        <th>Buyer Name</th> 
                        <th>Phone Number</th> 
                        <th>Email</th> 
                        <th>Make</th> 
                        <th>Model</th> 
                        <th>Color</th> 
                        <th>Registration Date</th> 
                        <th>Registration Type</th> 
                        <th>Registration Valid Upto</th>
                        <th>Chassis Number</th> 
                        <th>Engine Number</th> 
                        <th>Pollution Expiry Date</th> 
                        <th>Insurance Date</th> 
                        <th>Insurace Company</th>
                    </tr>
                </thead>
                <tbody id="table-body">
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

                        $query = "SELECT * FROM vehicle;";

                        $result = mysqli_query($con, $query);
                        $result= mysqli_fetch_all ($result, MYSQLI_ASSOC);
                    ?>
                    <?php for($i=0;$i<sizeof($result);$i++) { ?>
                        <tr>
                            <td><?php echo $result[$i]['ID']; ?></td>
                            <td><?php echo $result[$i]['Reg_no']; ?></td> 
                            <td><?php echo $result[$i]['Buyer_Name']; ?></td> 
                            <td><?php echo $result[$i]['Phone_Number']; ?></td> 
                            <td><?php echo $result[$i]['Email']; ?></td> 
                            <td><?php echo $result[$i]['Make']; ?></td> 
                            <td><?php echo $result[$i]['Model']; ?></td> 
                            <td><?php echo $result[$i]['Color']; ?></td> 
                            <td><?php echo $result[$i]['Registration_Date']; ?></td> 
                            <td><?php echo $result[$i]['Registration_Type']; ?></td> 
                            <td><?php echo $result[$i]['Reg_Valid_Upto']; ?></td>
                            <td><?php echo $result[$i]['Chassis_Number']; ?></td> 
                            <td><?php echo $result[$i]['Engine_Number']; ?></td> 
                            <td><?php echo $result[$i]['Pollution_Expiry_Date']; ?></td> 
                            <td><?php echo $result[$i]['Insurance_Date']; ?></td>
                            <td><?php echo $result[$i]['Insurance_Company']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>