<html>
<head>
<link href="themes/generic.css" rel="stylesheet" type="text/css" />
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
$obj1= new AddReceipe();
echo "This is the list of receipes";
$obj1->searchreceipes();

?></div>

</body>
</html>
