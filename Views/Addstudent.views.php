

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Reg.css" type="text/css">
    <title>Course Registration</title>
</head>
<body>
    <div class="body-content">
        <div class="module">
          <h1>Course Registration</h1>
          <form class="form" action="Addstudent.php" method="post" autocomplete="off">
            <div class="alert alert-error"></div>
            <input type="text" placeholder="Last Name" name="lastname" required />
            <input type="text" placeholder="Fist Name" name="firstname" required />
            <input type="text" placeholder="Matric Number" name="stmatric" required />
            <input type="text" placeholder="Department" name="stdepartment" required />
            <input type="text" placeholder="Level" name="mylevel" required />
            <!-- <select name="stlevel" id="stlevel" placeholder="Level">
              
                <option value="levelzero" name="stlevel">Level</option>
                <option value="levelone">100</option>
                <option value="leveltwo">200</option>
                <option value="levelthree">300</option>
                <option value="levelfour">400</option>
                <option value="levelfive">500</option>
            </select> -->
            <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
            <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
            <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
          </form>
        </div>
      </div>
</body>
</html>