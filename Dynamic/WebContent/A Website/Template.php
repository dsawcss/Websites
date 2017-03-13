<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Keywords" content="">
<meta name="Description" content="">
<meta name="test">
<title><?php echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="Styles/Fixed.css" />
<link rel="stylesheet" type="text/css" href="Styles/Template.css" />
<script src="JavaScript/Template.js" type="text/javascript"></script>
</head>

<body>
    <div class="header">
        <img src="" alt="box">
        <h1>
            <a href="#">Home</a>
        </h1>
    </div>

    <div class="social">
       <a href="#"><img src="" alt="f"></a> 
       <a href="#"><img src="" alt="t"></a>
       <a href="#"><img src="" alt="i"></a>
       <a href="#"><img src="" alt="s"></a>
    </div>
    
    <ul class="TopNav" id="MyTopNav">
        <li><a class="active" href="Index.php" title="Index">Home</a></li>
        <li><a href="#" title="Computer">Computer</a></li>
        <li><a href="#" title="Phone">Phone</a></li>
        <li><a href="#" title="Tablets">Tablets</a></li>
        <li><a href="#" title="Contact">Contact</a></li>
        <li><a href="#" title="About">About</a></li>


        <li class="icon"><a href="javascript:void(0);"
            style="font-size: 15px;" onclick="ResponsiveNav()">&#9776;</a></li>
    </ul>
	
	
    <!-- Drop down the item when hover before clicking -->

    <br>
    
    <div class="SideBar">
    
    </div>
    
    <div class="ContentArea">
        <?php echo $content; ?>
        <?php echo $second; ?>
    </div>

     <div class="FooterWrap">
        <div class="FooterMenu">
            <li><a href="#"> About Us </a></li>
            <li><a href="#"> Contacts </a></li>
            <li><a href="#"> Terms &#38; Conditions </a></li>
            <li><a href="#"> Feedback </a></li>
        </div>

        <div class="Footer">
            <p>Copyright &copy; 2016 .com &trade; All Rights Reserved. Year
            Range</p>
        </div>
    </div>


</body>
</html>

