<?php
  if (ISSET($_COOKIE['cookies-accepted']) == true) {
      echo "<p>Cookies accepted!</p>";
  } else {
    echo "<form method='post'>
    <img src='http://food.fnr.sndimg.com/content/dam/images/food/fullset/2006/12/11/0/12Days_Chocolate_Chip_Cooki.jpg.rend.hgtvcom.616.462.suffix/1391394585748.jpeg'/>
    <p>Wij gebruiken cookies!</p>
    <input type='submit' name='acceptedCookies' value='accept'/>
    </form>";
  }
  if (ISSET($_POST['acceptedCookies']) == 'accept') {
      setcookie('cookies-accepted', true, time() + 10);
      header('Refresh:0');
  }
?>