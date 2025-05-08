<?php $sql = "SELECT * FROM images";
 
    // SQL query to fetch data from the table
  $result = $conn->query($sql);
  $row1 = $result->fetch_assoc();
	$row2 = $result->fetch_assoc();
	$row3 = $result->fetch_assoc();
	$row4 = $result->fetch_assoc();
	$row5 = $result->fetch_assoc();
	$row6 = $result->fetch_assoc();
	$row7 = $result->fetch_assoc();
	$row8 = $result->fetch_assoc();
	$row9 = $result->fetch_assoc();
	$row10 = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<?php require_once('../../private/initialize.php') ?>
<link rel="stylesheet" href="../stylesheet/styles.css">  

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
   <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo htmlspecialchars($row3["image_url"])?>" class="d-block w-100" width="550" height="500" alt="...">
	  <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="<?php echo htmlspecialchars($row4["image_url"])?>" class="d-block w-100" width="550" height="500" alt="...">
	  <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="<?php echo htmlspecialchars($row5["image_url"])?>" class="d-block w-100" width="550" height="500" alt="...">
	  <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
	<div class="carousel-item">
  <img src="<?php echo htmlspecialchars($row6["image_url"])?>" class="d-block w-100" width="550" height="500" alt="...">
	  <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php include(SHARED_PATH . '/header.php') ?>	  
</html>