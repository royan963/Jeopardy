<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>Web programming Jeopardy</title>
	<link href='Project2.css' rel='stylesheet' type='text/css'>

	<audio autoplay loop>
	    <source src="./song.mp3" type="audio/mpeg">
		Your browser can't play this sound.
	</audio>

</head>


<body>
<?php
$cookie_name = "Jeopardy";
$cookie_value = $_SESSION['username'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<div class = "cookie">
      <?php
  if(!isset($_COOKIE[$cookie_name])) {
       echo "Cookie named '" . $cookie_name . "' is not set!";
  } else {
      // Don't display if everything is fine.
      // echo "Cookie '" . $cookie_name . "' is set!<br>";
      // echo "Value is: " . $_COOKIE[$cookie_name];
      echo "";
  }
  ?>

</div>

<div id="container">
<table id="board">
  <tr id="categories">
    <td id="categories1">General</td>
    <td id="categories2">HTML</td>
    <td id="categories3">CSS</td>
    <td id="categories4">PHP</td>
    <td id="categories5">Miscellaneous</td>
  </tr>
  <tr id="row1">
    <td id="row1_1"><a href='#popup1'>100</a></td>
    <td id="row1_2"><a href='#popup2'>100</a></td>
    <td id="row1_3"><a href='#popup3'>100</a></td>
    <td id="row1_4"><a href='#popup4'>100</a></td>
    <td id="row1_5"><a href='#popup5'>100</a></td>
  </tr>
  <tr id="row2">
    <td id="row1_1"><a href='#popup6'>200</a></td>
    <td id="row1_2"><a href='#popup7'>200</a></td>
    <td id="row1_3"><a href='#popup8'>200</a></td>
    <td id="row1_4"><a href='#popup9'>200</a></td>
    <td id="row1_5"><a href='#popup10'>200</a></td>
  </tr>
  <tr id="row3">
    <td id="row1_1"><a href='#popup11'>300</a></td>
    <td id="row1_2"><a href='#popup12'>300</a></td>
    <td id="row1_3"><a href='#popup13'>300</a></td>
    <td id="row1_4"><a href='#popup14'>300</a></td>
    <td id="row1_5"><a href='#popup15'>300</a></td>
  </tr>
  <tr id="row4">
    <td id="row1_1"><a href='#popup16'>400</a></td>
    <td id="row1_2"><a href='#popup17'>400</a></td>
    <td id="row1_3"><a href='#popup18'>400</a></td>
    <td id="row1_4"><a href='#popup19'>400</a></td>
    <td id="row1_5"><a href='#popup20'>400</a></td>
  </tr>
  <tr id="row5">
    <td id="row1_1"><a href='#popup21'>500</a></td>
    <td id="row1_2"><a href='#popup22'>500</a></td>
    <td id="row1_3"><a href='#popup23'>500</a></td>
    <td id="row1_4"><a href='#popup24'>500</a></td>
    <td id="row1_5"><a href='#popup25'>500</a></td>
  </tr>
</table>
<table id="score">
<tr>
  <td><input type="text" value="" class="team" /></td>
  <td><input type="text" value="0" class="score" id="score1" /></td>
  <td><input type="button" value="+100" class="score" onclick="document.getElementById('score1').value = parseFloat(document.getElementById('score1').value)+100" />
    <input type="button" value="-100" class="score" onclick="document.getElementById('score1').value = parseFloat(document.getElementById('score1').value)-100"/></td>
  </tr>

</div>

<?php

$questions = array(
  "cat1100" => ["The most popular programming language", "What is Java"],
  "cat2100" => ["An instance of a class", "What is Object"],
  "cat3100" => ["A container which holds the fixed number of similar data types.", "What is an Array"],
  "cat4100" => ["Ability of an object to take on multiple forms", "What is polymorphism"],
  "cat5100" => ["What is the best browser'", "What is None"],

  "cat1200" => ["HTML stands for this language", "What is Hypertext Markup Language"],
  "cat2200" => ["The color white's HTML hex code", "What is #FFFFFF"],
  "cat3200" => ["<ol> defines what", "What is an ordered list"],
  "cat4200" => ["The largest, most important heading", "What is h1"],
  "cat5200" => ["Cells can span many columns with this HTML attribute", "What is colspan"],

  "cat1300" => ["CSS stands for this", "What is Cascading Style Sheets"],
  "cat2300" => ["This property changes the font of an element", "What is font-family"],
  "cat3300" => ["Class selectors start with", "What is a period"],
  "cat4300" => ["This property creates can make text bold", "What is font-weight"],
  "cat5300" => ["This property generates space around an element's content inside any defined borders", "What is padding"],

  "cat1400" => ["PHP currently stands for this", "What is PHP: Hypertext Preprocessor"],
  "cat2400" => ["Variables in PHP start with this symbol", "What is a dollar sign"],
  "cat3400" => ["Other than print, this output statement displays text in PHP", "What is echo"],
  "cat4400" => ["This function returns the length of a string", "What is strlen()"],
  "cat5400" => ["PHP originally stood for", "What is Personal Home Page"],

  "cat1500" => ["The name of the server used in this class", "What is CODD"],
  "cat2500" => ["Gsu's Mascot", "What is Pounce the Panther"],
  "cat3500" => ["The time when this class ends.", "What is 4:15"],
  "cat4500" => ["The room number of where our class meets", "What is Langdale Hall 307"],
  "cat5500" => ["The grade that Professor Henry will give to this project", "100"],
);
?>

<div id="popup1" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
      <?php
        echo $questions["cat1100"][0] ."<br>" . "<br>";
      ?>
      <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat1100"][1];
        ?>
      </div>
    </div>
  </div>
</div>

<div id="popup2" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat1200"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat1200"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup3" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat1300"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat1300"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup4" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat1400"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat1400"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup5" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat1500"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat1500"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup6" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat2100"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat2100"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup7" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat2200"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat2200"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup8" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat2300"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat2300"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup9" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat2400"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat2400"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup10" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat2500"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat2500"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup11" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat3100"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat3100"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup12" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat3200"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat3200"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup13" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat3300"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat3300"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup14" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat3400"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat3400"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup15" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat3500"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat3500"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup16" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat4100"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat4100"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup17" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat4200"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat4200"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup18" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat4300"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat4300"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup19" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat4400"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat4400"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup20" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat4500"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat4500"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup21" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat5100"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat5100"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup22" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat5200"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat5200"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup23" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat5300"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat5300"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup24" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat5400"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat5400"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<div id="popup25" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
  <?php
    echo $questions["cat5500"][0] ."<br>" . "<br>";
  ?>
  <span>Hover over me to reveal the answer!</span>
      <div class="answer"><?php
        echo $questions["cat5500"][1];
        ?>
      </div>
		</div>
	</div>
</div>

<form action="./logout.php" method="post">
  <input type="submit" value="Logout">
</form>

</body>
</html>
