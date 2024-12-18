<!DOCTYPE html>
<html lang="en">
<head>
    <title> Vehicle Master </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="./forms.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <h2> 1CR22CS206 </h2>
        <hr>
    </div>
    <div class="main-content">
        <div class="header">
            <h1 class="silkscreen-bold">WEB TECH ASSIGNMENT 2</h1>
        </div>
        <div id="form-content">
            <div id="form-header">
                <p class="silkscreen-regular"> Vehicle Registration Form </p>
            </div>
            <hr>
            <form id="form" action="submit.php" method="POST">
                <div id="form-input">
                    <label for="reg">Registration Number<span class="required">*</span></label>
                    <input type="text" name="reg" id="reg" placeholder="Enter Registration Number" required>
                </div>
                <div id="form-input">
                    <label for="buyer">Buyer Name<span class="required">*</span></label>
                    <input type="text" name="buyer" id="buyer" placeholder="Enter Buyer Name" required>
                </div>
                <div id="form-input">
                    <label for="number">Phone Number<span class="required">*</span></label>
                    <input type="tel" name="number" id="number" placeholder="Enter Phone Number" min="10" max="10" required>
                </div>
                <div id="form-input">
                    <label for="email">Email ID<span class="required">*</span></label>
                    <input type="email" name="email" id="email" placeholder="Enter Email" required>
                </div>
                <div id="form-input">
                    <label for="make">Make<span class="required">*</span></label>
                    <input type="text" name="make" id="make" placeholder="Enter Car Make" required>
                </div>
                <div id="form-input">
                    <label for="model">Model<span class="required">*</span></label>
                    <input type="text" name="model" id="model" placeholder="Enter Car Model" required>
                </div>
                <div id="form-input">
                    <label for="color">Color<span class="required">*</span></label>
                    <select id="color" name="color" required>
                        <option selected disabled>Select Color</option>
                        <option value="Red">Red</option>
                        <option value="Black">Black</option>
                        <option value="Blue">Blue</option>
                        <option value="Grey">Grey</option>
                        <option value="Silver">Silver</option>
                        <option value="Yellow">Yellow</option>
                        <option value="Green">Green</option>
                    </select>
                </div>
                <div id="form-input">
                    <label for="reg-date">Registration Date<span class="required">*</span></label>
                    <input type="date" name="reg-date" id="reg-date" required>
                </div>
                <div id="form-input">
                    <label for="reg-type">Registration Type<span class="required">*</span></label>
                    <select name="reg-type" id="reg-type" required>
                        <option value="Private">Private</option>
                        <option value="Commercial">Commercial</option>
                    </select>
                </div>
                <div id="form-input">
                    <label for="valid-upto">Registration Valid Upto<span class="required">*</span></label>
                    <input type="date" name="valid-upto" id="valid-upto" required>
                </div>
                <div id="form-input">
                    <label for="chassis">Chassis Number<span class="required">*</span></label>
                    <input type="text" name="chassis" id="chassis" placeholder="Enter Chassis Number" required>
                </div>
                <div id="form-input">
                    <label for="engine">Engine Number<span class="required">*</span></label>
                    <input type="text" name="engine" id="engine" placeholder="Enter Engine Number" required>
                </div>
                <div id="form-input">
                    <label for="pol-date">Pollution Expiry Date<span class="required">*</span></label>
                    <input type="date" name="pol-date" id="pol-date" required>
                </div>
                <div id="form-input">
                    <label for="insurance-date">Insurance Expiry Date<span class="required">*</span></label>
                    <input type="date" name="insurance-date" id="insurance-date" required>
                </div>
                <div id="form-input">
                    <label for="insurance-name">Insurance Company Name<span class="required">*</span></label>
                    <input type="text" name="insurance-name" id="insurance-name" placeholder="Enter Insurance Company Name" required>
                </div>
            </form>
            <div class="button">
                <button class="btn" id="submit">SUBMIT</button>
            </div>

        </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src= "./vehicle_master.js"></script>
</body>
</html>