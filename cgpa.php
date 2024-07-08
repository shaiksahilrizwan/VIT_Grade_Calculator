<?php
    session_start();
    if(isset($_SESSION['user'])){
        
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Any Sem GPA</title>
    <link rel="shortcut icon" href="./assets/image-5.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="./cgpa.css" />
  </head>
  <?php
    echo $_SESSION['user'];
  ?>
  <body>
    <?php
  if(isset($_POST['logout'])):
    session_unset();
    session_destroy();
    header("Location: login.php");
endif; ?>
    <navbar class="roboto-slab">
      <div class="navbar">
        <div class="links">
          <a href="./home.php" class="home">Home</a>
          <a href="./cgpa.php" class="cgpa">CGPA</a>
        </div>
        <div class="toggle-btn">
          <input type="checkbox" id="checkbox" />
          <label for="checkbox" class="toggle-label">
            <span class="toggle-ball"></span>
          </label>
        </div>
      </div>
    </navbar>
    <div class="h1">
      <h1>CALCULATE ANY SEM GPA</h1>
    </div>
    <div class="container roboto-slab">
      <div class="item" id="item-1">
        <label for="1st">1st Sem</label>
        <input
          type="text"
          name="1st"
          id=""
          class="gpa-input roboto-slab"
          placeholder="GPA"
        />
        <input
          type="text"
          name="1st"
          id=""
          class="credits-input roboto-slab"
          placeholder="CREDITS"
        />
      </div>
      <div class="item">
        <label for="2nd">2nd Sem</label>
        <input
          type="text"
          name="2st"
          id=""
          class="gpa-input roboto-slab"
          placeholder="GPA"
        />
        <input
          type="text"
          name="2st"
          id=""
          class="credits-input roboto-slab"
          placeholder="CREDITS"
        />
      </div>
      <div class="item">
        <label for="3rd">3rd Sem</label>
        <input
          type="text"
          name="3rd"
          id=""
          class="gpa-input roboto-slab"
          placeholder="GPA"
        />
        <input
          type="text"
          name="3rd"
          id=""
          class="credits-input roboto-slab"
          placeholder="CREDITS"
        />
      </div>
      <div class="item">
        <label for="4th">4th Sem</label>
        <input
          type="text"
          name="4th"
          id=""
          class="gpa-input roboto-slab"
          placeholder="GPA"
        />
        <input
          type="text"
          name="4th"
          id=""
          class="credits-input roboto-slab"
          placeholder="CREDITS"
        />
      </div>
      <div class="item">
        <label for="5th">5th Sem</label>
        <input
          type="text"
          name="5th"
          id=""
          class="gpa-input roboto-slab"
          placeholder="GPA"
        />
        <input
          type="text"
          name="5th"
          id=""
          class="credits-input roboto-slab"
          placeholder="CREDITS"
        />
      </div>
      <div class="item">
        <label for="6th">6th Sem</label>
        <input
          type="text"
          name="6th"
          id=""
          class="gpa-input roboto-slab"
          placeholder="GPA"
        />
        <input
          type="text"
          name="6th"
          id=""
          class="credits-input roboto-slab"
          placeholder="CREDITS"
        />
      </div>
      <div class="item">
        <label for="7th">7th Sem</label>
        <input
          type="text"
          name="7th"
          id=""
          class="gpa-input roboto-slab"
          placeholder="GPA"
        />
        <input
          type="text"
          name="7th"
          id=""
          class="credits-input roboto-slab"
          placeholder="CREDITS"
        />
      </div>
      <div class="item">
        <label for="8th">8th Sem</label>
        <input
          type="text"
          name="8th"
          id=""
          class="gpa-input roboto-slab"
          placeholder="GPA"
        />
        <input
          type="text"
          name="8th"
          id=""
          class="credits-input roboto-slab"
          placeholder="CREDITS"
        />
      </div>
      <button id="btn" class="roboto-slab">Calculate</button>

      <script src="./toggle.js"></script>
      <script src="./cgpa.js"></script>
    </div>
   
 </form>
 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <button type="sub" name="logout">Logout</button>
  </body>
  <?php }else{
        echo "<br>You need to <a href='login.php'>Login</a>First to Access the Page!!";   
}
?>
</html>