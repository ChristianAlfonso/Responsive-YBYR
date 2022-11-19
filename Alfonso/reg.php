<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YBYR Registration Form</title>
    <link rel="stylesheet" href="form.css">
    <link rel="icon" type="image/x-icon" href="image/logo.jpeg">

</head>
<body>

<div class="parent">
    <div class="form-child">
        <div class="form-title">
            <h3><span>YBYR</span> Registration Form</h3>
        </div>

        <div class="input">
            <form action="form.php" method="post">
                <input type="text" name="fName" placeholder="Full Name" id="button" required>
                <input type="email" name="Email" placeholder="Email" id="button" required>
                <input type="number" name="Age" placeholder="Age" id="button" required>
                <input type="text" name="Address" placeholder="Address" id="button" required>

                <div class="promo-choice">
                    <div class="premium">
                    <input type="radio" name="promo" id="promos" value="basic" required>
                        <label for="#promos">Basic</label>
                    </div>

                    <div class="basic">
                    <input type="radio" name="promo" id="promos" value="premium" required>
                        <label for="#promos">Premium</label>
                    </div>

                </div>

                <input type="submit" value="Register" id="reg">
            </form>
        </div>

        <div class="back">
            <a href="index.php">Back</a>
        </div>
    </div>
</div>


</body>
</html>