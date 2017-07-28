<html>
<head>
    <title>%TITLE%</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div><h2>Contact Form</h2></div>
        <div style="color: #FF0000; font-size: 15px;"><strong>%ERRORS%</strong>
    </div>

<form action="libs/Controller.php">
 <div class="form-group">
    <label for="exampleInputText">Full Name</label>
    <input type="text" class="form-control" id="exampleInputText" name="full_name" placeholder="Enter Full Name Please">
  </div>
  <?php var_dump($_GET); ?>
    <!-- Small button group -->
<div class="btn-group">
  <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
PROBLEM<span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li>123123123</li>
  </ul>
</div>

    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  
    <textarea class="form-control" rows="3">Enter your messenge</textarea>
    <br>
  <button type="submit" class="btn btn-default" name="test_button" value="run">Submit</button>
  <?php var_dump(test_button); ?>
</form>
</div>









</body>
</html>
