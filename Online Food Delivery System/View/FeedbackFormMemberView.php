<!-- <script type="text/javascript">



  function showDetails() {

    xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "../Controller/getDetailsController.php?", true);
    xhttp.send();
}

</script> -->

<?php
include("./Navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/update.css">
    <title>Feed Back Form</title>
</head>
<body>
    <!-- multistep form -->
<form action="../Controller/feedbackController.php" method="POST" id="msform">
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Give Your Feedback to us</h2>
    <h3 class="fs-subtitle"></h3>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <span class="error" id="feedbackError">* <?php if(!empty($_GET['feedbackError'])){echo $_GET['feedbackError'];} ?></span> 
    <span class="error" id="Success"> <?php if(!empty($_GET['Success'])){echo $_GET['Success'];} ?></span> 
    
    <input type="submit" class="next action-button" name = "feedback" value="Submit">
    
  </fieldset>
</form>
<!-- <button type="button"  <?php echo ('onclick="showDetails()"');  ?> > View Details</button>
<div id="txtHint" ></div> -->
</body>
</html>