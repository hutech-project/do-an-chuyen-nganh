<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Trang Chủ</title>
  <style>
    body{
      padding:0px;
      margin:0px;
     }
    #container{
      /* structure */
      margin: auto;
      width:60%; 
    }
    /* Banner Structure */
    #banner{
      height:100px;
      background-color:#00ffff;
      color:#ffffff;
      text-align:center;
    }
    #banner p{
      
    }
    #banner .dropdown-menu{
      display:none;
    }
    #banner .dropdown:hover .dropdown-menu{
      display:block;
    }
    #banner .navbar-inverse{
      margin:0px;
    }
    /* End of Banner */
    
    /* Structure of Slideshow */
    #slideshow{
      height:300px;
      background-color:#d2691e;
      color:#ffffff;
      text-align:center;
      position:relative;
      overflow:hidden;
    }
      /* Trans  animation */
    .slide{
      position:absolute;
      transition: 1s;
      left: 0;
    }
    /* End of Slideshow */
    #menu{ 
      height:50px;
      background-color:#6495ED;
      color:#ffffff;
      text-align:center;
    }
    #main{
      height:500px;
      background-color:#dc143c;
      color:#ffffff;
      text-align:center;
    }
    #bottom{
      height:100px;
      background-color:#000000;
      color:#ffffff;
      text-align:center;
    }
    
  </style>
</head>
<body>
    <div id="container">
      <div id="banner"><p>Banner</p>
         <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <img src="" alt="">
              </div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Trang Chủ</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown"  href="#">Phòng
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Page 1-1</a></li>
                    <li><a href="#">Page 1-2</a></li>
                    <li><a href="#">Page 1-3</a></li>
                  </ul>
                </li>
                <li><a href="#">Dịch Vụ</a></li>
                <li><a href="#">Bản Đồ</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Đăng Nhập</a></li>
              </ul>
            </div>
         </nav> 
      </div>

      <div id="slideshow"><p>Slideshow</p>
        <div class="mySlides ">
             <img class="slide" src="https://www.w3schools.com/howto/img_nature_wide.jpg" style="width:100%">
        </div>
        
        <div class="mySlides ">
             <img  class="slide" src="https://www.w3schools.com/howto/img_mountains_wide.jpg" style="width:100%">
        </div>
        
        <div class="mySlides ">
             <img  class="slide" src="https://www.w3schools.com/howto/img_fjords_wide.jpg" style="width:100%">
        </div>
      
      </div>
      <div id="menu"><p>Menu</p></div>
      <div id="main"><p>Main</p></div>
      <div id="bottom"><p>Bottom</p></div>
    </div>
<script type="text/javascript">
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

     
    

</body>
</html>
