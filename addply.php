
<?php
require("../config3/commande2.php");
?>
<html>
<head>
	<title></title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
	<form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">PUCTURE TITLE</label>
    <input type="name" class="form-control"  name="pucture2"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> PRODUCT NAME </label>
    <input type="text" class="form-control"  name="name2" required>
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> PRICE </label>
    <input type="number" class="form-control" name="price2" required>
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> DESCRIPTION </label>
    <textarea    class="form-control"  name="description2" required  >   </textarea>
  </div>
  <button type="submit" name="valider" class="btn btn-primary">ADD NEW PLAY STATION</button>
</form>

</body>
</html>
<?php
if(isset($_POST['valider']))
{
	if(isset($_POST['pucture2']) AND isset($_POST['name2']) AND isset($_POST['price2']) AND isset($_POST['description2']))

{
	if(!empty($_POST['pucture2']) AND !empty($_POST['name2']) AND !empty($_POST['price2']) AND !empty($_POST['description2']))
     {
     	$pucture=htmlspecialchars(strip_tags($_POST['pucture2']));
     	$name=htmlspecialchars(strip_tags($_POST['name2']));
     	$price=htmlspecialchars(strip_tags($_POST['price2']));
     	$description=htmlspecialchars(strip_tags($_POST['description2']));
try {
	
 ajouter($pucture,$name,$price,$description);	
} catch (Exception $e) {
	$e->getMessage();
}
     }

}








}



?>