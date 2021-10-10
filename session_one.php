<!--<html>-->
<!--    <head>-->
<!--        <title>PHP Form Handling</title>-->
<!--    </head>-->
<!--    <body>-->
<!--        <form action ="action" method="POST">-->
<!--            <input type="" name=" " value="">-->
<!--            <input type="" name=" " value="">-->
<!--        </form>-->
<!--    </body>-->
<!--</html>-->
<?php
//$conn = mysqli_connect("localhost", "root", "", "gamereviewwebsite2");
//session_start();
//// $_SESSION global variable array
//$query = "SELECT * FROM reviews";
//$result = mysqli_query($conn, $query);
$rate = $_POST['rate'];
$review =$_POST['review'];

if (isset($_POST['rate'])){
    $rate = $_POST['rate'];
}else{
    echo 'Please rate!';
}

if (isset($_POST['review'])){
    $review = $_POST['review'];
}else{
    echo 'Please fill in~';
}

print '  <form method="post" action="">
        <div class="review-container">
          <h4>Rate and write a review about the game</h4>
            <hr>
          <div class="rating-slider">
            <label for="game-rating">Rate the game</label>
            <br />
            <input type="range" class="form-range" value="0" min="0" max="5" step="1" id="game-rating"
              oninput="this.nextElementSibling.value = this.value"  name="rate" required>
            <output>0</output>
          </div>
          <div class="review">
            <label for="floatingTextarea">Review</label>
            <br />
            <textarea class="form-control" placeholder="Leave a review here" name="review" required></textarea>
          </div>
          <br />
          <input type="submit" class="btn btn-outline-light" value="Submit">
          <br />
          <br />
        </div>
      </form>';



echo 'Your rating is: '. $rate.'<br>';
echo 'Your review is: '. $review. '<br>';
date_default_timezone_set("Asia/Kuala_Lumpur");
echo date ('d-m-Y');
echo"<br>";
?>
<!--<button onclick="location.href='session_two.php'" type="button">Go to two.php</button>-->
