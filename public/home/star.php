<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="./star.css">
</head>

<body>
  <h1>Half Star Rating</h1>
  <form class="rate" action="./test.php">
      <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
      <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
      <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
      <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
      <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
      <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
      <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
      <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
      <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
      <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
  </form>
</body>

</html>