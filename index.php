<!DOCTYPE html>
<html>
<head>
	<title>Covid Live Updates</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
</head><!DOCTYPE html>
<html>
<head>
	<title>Covid Live Updates</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand text-danger" href="#"><b>COVID Tracker</b></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/CORONA/main.php">HOME<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
	
		<br><p><b>All States/UTs Stats</b></p>

		<h5 class="text-center text-info"> COVID 19 LIVE UPDATE</h5>
  <div class="container"><br>
    <div class="table-responsive">
<table class="table">
  <thead>
    <tr>
           <th scope="col">LAST UPDATED ON</th>
      <th scope="col">LOCATION</th>
      <th scope="col">CONFIRM</th>
      <th scope="col">DEATH</th>
       <th scope="col">RECOVER</th>
       <th scope="col">ACTIVE</th>
        <th scope="col">CONFIRM TODAY</th>
         <th scope="col">DEATH TODAY</th>
          <th scope="col">RECOVER TODAY</th>

       <th scope="col">STATE CODE</th> 
    </tr>
	         <?php

      $data= file_get_contents('https://api.covid19india.org/data.json');
      $coronadata= json_decode($data,true);
      //echo"<pre>";
      //print_r($coronadata);
      //echo"</pre>";
      $statecount=count($coronadata['statewise']);
      $i=1;
      while ($i<$statecount) {
        ?>
        <tr>
		<td><?php echo $coronadata['statewise'][$i]['lastupdatedtime']?></td>
      <td><?php echo $coronadata['statewise'][$i]['state']?></td>
      <td><?php echo $coronadata['statewise'][$i]['confirmed']?></td>
      <td><?php echo $coronadata['statewise'][$i]['deaths']?></td>
       <td><?php echo $coronadata['statewise'][$i]['recovered']?></td>
       <td><?php echo $coronadata['statewise'][$i]['active']?></td>
        <td><?php  echo $coronadata['statewise'][$i]['deltaconfirmed']?></td>
         <td><?php  echo $coronadata['statewise'][$i]['deltadeaths']?></td>
          <td><?php  echo $coronadata['statewise'][$i]['deltarecovered']?></td>
            <td><?php  echo $coronadata['statewise'][$i]['statecode']?></td>

        </tr>

        <?php
       $i++;
      }
      ?>
	    </thead>
  <tbody>
 
    
  </tbody>
</table>
</div>
</div>
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    

</body>
</html>

<body>

	<?php 
		include 'navi.php';
		?>
	
		<br><p><b>All States/UTs Stats</b></p>

		<?php
		include 'tab.php';
	?>

</body>
</html>
