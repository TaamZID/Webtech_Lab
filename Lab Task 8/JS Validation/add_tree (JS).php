<script type="text/javascript">

function validation()
{
  var id= document.getElementById("id");
  var name= document.getElementById("name");
  var stock= document.getElementById("stock");
  var variant= document.getElementById("variant");
  var planted=document.getElementById("planted");

   if(id.value.trim()=="" )
  {
     document.getElementById("idErr").innerHTML= "*Id is requied";
     return false;
  }
  else {

  if(id.value.split(" ").length<2)
       {
        document.getElementById("idErr").innerHTML= "*Id must contains at least two words ";
        return false;
       }
       document.getElementById("idErr").innerHTML= "";

  }

  if(name.value.trim()=="" )
  {
     document.getElementById("nameErr").innerHTML= "*Name is requied";
     return false;
  }
  else {

  if(name.value.split(" ").length<2)
       {
        document.getElementById("nameErr").innerHTML= "*Name must contains at least two words ";
        return false;
       }
       document.getElementById("nameErr").innerHTML= "";

  }

  if(stock.value.trim()=="" )
  {
     document.getElementById("stockErr").innerHTML= "*Stock is requied";
     return false;
  }
  else {
  if(stock.value.split(" ").length<2)
       {
        document.getElementById("stockErr").innerHTML= "*Stock must contains at least two words ";
        return false;
       }
       document.getElementById("stockErr").innerHTML= "";
  }

  if(variant.value.trim()=="" )
  {
     document.getElementById("variantErr").innerHTML= "*Variant is requied";
     return false;
  }
  else {

  if(variant.value.split(" ").length<2)
       {
        document.getElementById("variantErr").innerHTML= "*Variant must contains at least two words ";
        return false;
       }
       document.getElementById("variantErr").innerHTML= "";

  }

  if(planted.value.trim()=="" )
  {
     document.getElementById("plantedErr").innerHTML= "*Planted is requied";
     return false;
  }
  else {

  if(planted.value.split(" ").length<2)
       {
        document.getElementById("plantedErr").innerHTML= "*Planted must contains at least two words ";
        return false;
       }
       document.getElementById("plantedErr").innerHTML= "";

  }



return true;

}


function checkId()
{
  var id= document.getElementById("id");
  if(id.value.trim()=="" )
  {
     document.getElementById("idErr").innerHTML= "*Id is requied";
     return false;
  }
  else {

  if(id.value<0)
       {
        document.getElementById("idErr").innerHTML= "Id must be greater than zero ";
        return false;
       }
       document.getElementById("idErr").innerHTML= "";
  }
}

function checkName()
{
  var name= document.getElementById("name");
  if(name.value.trim()=="" )
  {
     document.getElementById("nameErr").innerHTML= "*Name is requied";
     return false;
  }
  else {

  if(name.value.split(" ").length<2)
       {
        document.getElementById("nameErr").innerHTML= "Name must contains at least two words ";
        return false;
       }
       document.getElementById("nameErr").innerHTML= "";

  }
}

function checkStock()
{
  var stock= document.getElementById("stock");
  if(stock.value.trim()=="" )
  {
     document.getElementById("stockErr").innerHTML= "*Stock is requied";
     return false;
  }
  else {

  if(stock.value<0)
       {
        document.getElementById("stockErr").innerHTML= "Stock must be greater than zero ";
        return false;
       }
       document.getElementById("stockErr").innerHTML= "";
  }
}

function checkVariant()
{
  var variant= document.getElementById("variant");
  if(variant.value.trim()=="" )
  {
     document.getElementById("variantErr").innerHTML= "*Variant is requied";
     return false;
  }
  else {

  if(variant.value.split(" ").length<2)
       {
        document.getElementById("variantErr").innerHTML= "Variant must contains at least two words ";
        return false;
       }
       document.getElementById("variantErr").innerHTML= "";

  }
}

function checkPlanted()
{
  var planted= document.getElementById("planted");
  if(planted.value.trim()=="" )
  {
     document.getElementById("plantedErr").innerHTML= "*Planted is requied";
     return false;
  }
  else {

  if(planted.value<0)
       {
        document.getElementById("plantedErr").innerHTML= "Planted must be greater than zero ";
        return false;
       }
       document.getElementById("plantedErr").innerHTML= "";
  }
}
</script>


<?php 
include 'header.php';
if(isset($_POST['AddTree']))
{
echo $_POST['id'];
echo $_POST['name'];
echo $_POST['stock'];
echo $_POST['variant'];
echo $_POST['planted'];
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
    .error {color: #FF0000;}
    </style>
</head>
<body>

<form  style="border:2px;  padding: 1em;" onclick="return validation()" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()">
  <h2>ADD TREE</h2>
  
  ID: 
  <input type="text" onkeypress="checkId()" onblur="checkId()" name="id" id="id" placeholder="Enter Id" class="form-control">
  <span  id="idErr" class="error">* <?php if(!empty($_GET['idErr'])){echo $_GET['idErr'];} ?></span>
  <br>

  Name: 
  <input type="text" onkeypress="checkName()" onblur="checkName()" name="name" id="name" placeholder="Enter Name" class="form-control">
  <span  id="nameErr" class="error">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
  <br>

  Stock: 
  <input type="text" onkeypress="checkStock()" onblur="checkStock()" name="stock" id="stock" placeholder="Enter Stock" class="form-control">
  <span  id="stockErr" class="error">* <?php if(!empty($_GET['stockErr'])){echo $_GET['stockErr'];} ?></span>
  <br>

  Variant: 
  <input type="text" onkeypress="checkVariant()" onblur="checkVariant()" name="variant" id="variant" placeholder="Enter Variant" class="form-control">
  <span  id="variantErr" class="error">* <?php if(!empty($_GET['variantErr'])){echo $_GET['variantErr'];} ?></span>
  <br>

  Variant: 
  <input type="text" onkeypress="checkPlanted()" onblur="checkPlanted()" name="planted" id="planted" placeholder="Enter Planted" class="form-control">
  <span  id="plantedErr" class="error">* <?php if(!empty($_GET['plantedErr'])){echo $_GET['plantedErr'];} ?></span>
  <br>

  <input type="submit" name="AddTree" value="Add" class="btn btn-info">
</form>

</body>
</html>
