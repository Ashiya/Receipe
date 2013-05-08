<html>
<head><link href="themes/generic.css" rel="stylesheet" type="text/css" />
    <link href="themes/1/slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="themes/1/jquery-slider.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<div class="div2">
        <div id="mcts1">
            <img src="images/1.jpeg" height="80px" width="200px" />
            <img src="images/8.jpeg" height="80px" width="200px"/>
            <img src="images/9.jpeg" height="80px" width="200px"/>
            <div class="class1"><p>HTML Content</p>BHOJ.com</div>
            <img src="images/3.jpeg" height="80px" width="200px"/>
            <img src="images/4.jpeg" height="80px" width="200px"/>
            <img src="images/5.jpeg" height="80px" width="200px"/>
            <img src="images/6.jpeg" height="80px" width="200px"/>
            <img src="images/7.jpeg" height="80px" width="200px"/>
            <img src="images/8.jpeg" height="80px" width="200px"/>
            <img src="images/9.jpeg" height="80px" width="200px"/>
            <img src="images/10.jpeg" height="80px" width="200px"/>
            <a href="http://www.menucool.com"><img src="images/6.jpeg" height="80px" width="200px"/></a>
        </div>
    </div>
<div id="demo">
<?php
include_once "AddReceipe.php";
$obj= new AddReceipe();
if(isset($_POST['add']))
{
$obj->insert($_POST['receipetitle'],$_POST['receipename'],$_POST['receipeingridents'],$_POST['receipeprocedure'],$_POST['receipegivenby']);
echo "<br><br><br>";
echo " <h3>you added a new receipe</h3>";
echo "<br><br><br>";
 echo "<a href='seereceipe.php'>See Receipe</a>";
} 
else
{
?>
<form method="post"><br>
<br>
<label for="name">Recipe Title:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="receipetitle"><br>
<label for="name">Recipe Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="receipename"><br>
<label for="name">Recipe Ingridents:</label><textarea rows=3 cols=25 name="receipeingridents">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</textarea><br>
<label for="name">Recipe procedure:</label><textarea rows=8 cols=30 name="receipeprocedure">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</textarea><br>
<label for="name">Recipe Given BY:</label>&nbsp;&nbsp;<input type="text" name="receipegivenby"><br>
<br>
<input type="submit" name="add" value="addReceipe" class="colors" style="margin-left:50px;">
</form>
<?php

}?>
</div>

</body>
</html>
