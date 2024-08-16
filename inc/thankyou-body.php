<?php
include ('database.php');

$id = $_GET['id'];

$select_user = "SELECT * FROM users WHERE id = $id";
$sql = $conn->prepare($select_user);
$sql->execute();
$data = $sql->fetchAll(PDO :: FETCH_OBJ);
foreach ($data as $row)
$database_username = $row-> user_name;
echo "$database_username";

  
  
?>
<body>
    <! -- Admin pane HTML codes will be written here (Stars) -->
    <div class="container-fluid">
      <div class="row" style="padding-top: 5%;">
      <div class="col-md4"></div>
      <div class="col-md4" style="text-align: center; background-color: white; border-radius: 20px; padding: 10px;">
        <div class="row">
          <div class="col-md12" style="padding-bottom: 10px;">
            <img src="https://brimaronlinemarketing.com/wp-content/uploads/digital-marketing-vs-web-development-1024x538.jpg" height="70px">
            
          </div>
          <div class="col-md12">
            <span style="font-weight: 100; font-size: 20px;">Register A New Account For Free</span>
             



          </div>
          <div class="col-md12">
            Dear <?php echo$row->user_name?>, you registration is successful. You can now <a href="index.php?page=Login">login</a>
          </div>
          <div class="col-md12">
            <form>
              <div class="row">
                <div class="col-md12" style="text-align: left; font-size: 14px; font-weight: 200; padding: 10px 20px 10px 20px">
                  <label>Your Username</label>
                  <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <div class="col-md12" style="text-align: left; font-size: 14px; font-weight: 200; padding: 10px 20px 10px 20px">
                    <label>Confir password</label>
                    <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control">
                  </div>
              </div>
            </form>
          </div>
          <div class="col-md12" style="text-align: center; font-size: 14px; font-weight: 200; padding: 10px 20px 10px 20px">
            <!--<a href="authenticate.html" class="btn btn-warning">Register now</a> -->

            <button name ="submit" class = "btn btn-warning">Register now</button>

          </div>

          <div class="col-md12" style="text-align: center; font-size: 14px; font-weight: 200; padding: 0px 20px 10px 20px">
          <div class="row">
            
            
            </div>
            <div class="col-md12" style="text-align: center; font-size: 14px; font-weight: 200; padding: 0px 20px 10px 20px">
              <div class="row">
                <div class="col-md12" style="text-align: center; font-size: 10px; font-weight: 100;"><a href="index.php">Already Have An Account? Login Now</a>
                
                </div>
            
          </div>
          </div>
          
        </div>
      </div>
      <div class="col-md4"></div>
      </div>
    </div>


    <! -- Admin pane HTML codes will be written here (End) -->