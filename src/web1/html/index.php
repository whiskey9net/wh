<!DOCTYPE html>
<html>
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
  $(document).ready(function(){
    $("#mysql1_refresher").load("mysql1.php");
    setInterval(function() {
      $("#mysql1_refresher").load("mysql1.php");
    }, 1000);
  });
</script>
</head>
<body>

<div>
  <pre><div>mysql1</div><div id="mysql1_refresher"></div></pre>
</div>

</body>
</html>

