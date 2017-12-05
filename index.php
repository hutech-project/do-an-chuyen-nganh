<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <title>Trang Chủ</title>
  <script>
  $( function() {
    $( "#checkin" ).datepicker();
    $("#checkout").datepicker();
  } );
  </script>
  <style>
    body{
      padding:0px;
      margin:0px;
      background-color:#FAEBD7;
      /* border: 1px solid #808080;  */
     }
    #container{
      /* structure */
      margin: auto;
      width:80%; 
    }

    hr{
      margin:10px 0px;
    }
    h2{
      padding-top:5px;
      margin-top:0px;
    }
    /* Banner Structure */
    #banner{
      height:auto;
      /* background-color:#00ffff; */
      color:#ffffff;
      text-align:center;

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
      height:500px;
      position:relative;
      text-align:center;
      /* background-color:blue; */
      color:#ffffff;

     }
     #myCaurousel{
      height:100%;
      width:100%;
      } 
     #myCarousel .carousel-inner img{
      width:100%;
      height:500px;
     }
     #myCarousel .carousel-control{
      display:none;
     }
     #myCarousel:hover  .carousel-control{
      display:block;
     }
        /* End of Slideshow */
    /* Menu Structure */
    #menu{ 
      height:120px;
      background-color:#ffffff;
      /* color:#6495ED; */
      text-align:center;
    }
    #menu-wrapper{
      display:inline-block;
      width:auto;
      margin:auto ;
    
    }
   #menu h2{
    
      color:#6495ED;
   } 
    #menu-wrapper div{
      float:left;
      margin-right: 10px;
    }
    #checkin{
    }
    .menu-items{
      width:100%;
      height:50px;
    }
    option{
      width:150px;
    }
    .input-group{
      position: relative;
    }
    .input-group .glyphicon{
     position: absolute;
     padding: 17px;
     right: 0px;
     
    }
 
    /* End of Menu */
    /* Main structure */
    #main{
      margin-top:50px;
      height:auto;
      background-color:#ffffff;
      text-align:center;
    }
    #main-wrapper{
      height:auto;
       /* padding-left:15px; */
       /* padding-right:15px;  */
    }
    #main h2 {
      color:#6495ED !important;
    }
    #main h3{
      color:#6495ED;
      
    }
    #main-wrapper .image-wrapper img{
      width:400px;
      height:300px;
    }
    #main-wrapper .row{
      margin: 0px;
    }
    #main-wrapper .row div{
      padding:0px;
    }
    #main-wrapper p{
      text-align:justify !important;
      margin:0px 50px;
    } 
    /* End of Main */
    #bottom{
      margin-top:50px;
      height:100px;
      background-color:#000000;
      color:#ffffff;
      text-align:center;
    }
    
  </style>
</head>
<body>
    <div id="container">
      <div id="banner">
         <!-- img src="logo-hutech.jpg" alt=""-->
         <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <ul class="nav navbar-nav">
                <li><a href="#">Trang Chủ</a></li>
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

      <div id="slideshow">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="hotel1.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="hotel2.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="hotel3.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      <div id="menu"><h2>ĐẶT PHÒNG KHÁCH SẠN</h2>
      <hr>
        <form action="post" href="">
          <div id="menu-wrapper">
            <div>
              <select id="roomType" class="menu-items" name="roomType">
                <option value="0">Chọn loại phòng</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>  
            </div>
           <div class="input-group">
             <input type="text" id="checkin" class="menu-items"  value="Ngày nhận phòng"><span class="glyphicon glyphicon-calendar"></span> 
           </div>
           <div class="input-group">
             <input type="text" id="checkout" class="menu-items" value="Ngày trả phòng"><span class="glyphicon glyphicon-calendar"></span> 
           </div>
          <div>
            <select id="numberOfRoom" class="menu-items" name="numberOfRoom">
              <option value="0">Số lượng phòng</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          <div>
            <select id="numberOfCustomer" class="menu-items" name="numberOfCustomer">
              <option value="0">Số lượng khách</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          <div>
            <input type="submit" name="submit" class="menu-items" value="Đặt Phòng">
          </div>
          </div>
        </form>
      </div>
      <div id="main">
        <h2>GIỚI THIỆU KHÁCH SẠN</h2>
        <hr>
        <div id="main-wrapper">
          <div class="row">
            <div class="col-sm-4">
                <div class="image-wrapper">
                  <img src="hotel2.jpg" alt="">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-wrapper">
                  <img src="hotel3.jpg" alt="">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-wrapper">
                  <img src="hotel4.jpg" alt="">
                </div>
            </div>
          </div>
          
            <h3>Giới Thiệu</h3>
            <p>

Tọa lạc ngay trung tâm Thành phố Hồ Chí Minh, nằm trong một con hẻm thuộc khu phố Tây Ba-lô Phạm Ngũ Lão  ( một trong những khu phố sầm uất nhất của quận 1), khách sạn Gia Viên có một vị thế thuận lợi để tham quan các địa điểm du lịch nổi tiếng xung quanh như chợ Bến Thành, Bảo tàng Chứng Tích Chiến Tranh, Nhà thờ Đức Bà, Dinh Thống Nhất, Bến Nhà Rồng, Bảo Tàng Nghệ Thuật … Bên cạnh đó, những nhà hàng, quán ăn nhanh, tiệm cà phê cũng đáp ứng nhu cầu ăn uống của quý khách hoặc nếu quý khách có nhu cầu vui chơi giải trí thì các phòng trà, quán nhạc trẻ-bar-club, sân khấu ca nhạc cũng chỉ cách khách sạn vài phút đi bộ.
            <br>
            <br>
Phòng khách sạn được trang bị các trang thiết bị hiện đại như Tivi LCD, két sắt an toàn, máy sấy tóc, tủ lạnh mini, điện thoại gọi nội hạt + quốc tế, internet/wifi trong phòng … giúp mang đến cho khách cảm giác hài lòng, thoải mái như đang ở nhà mình.
            <br>
            <br>
Khách sạn cũng cung cấp các dịch vụ khác như đặt tour tham quan, vé máy bay, hầm đỗ xe miễn phí, dàn máy tính phục vụ cho khách có nhu cầu in ấn, thu đổi ngoại tệ,dịch thuật, đưa đón sân bay, giặt ủi …   
            <br>
            <br>
        
Khách sạn cũng có một nhà hàng phục vụ ăn sáng – gọi món và buffet nhỏ - với các món ăn truyền thống Việt Nam hợp với khẩu vị của mọi người.
            <br>
            <br>
Đừng để chuyến du lịch tuyệt vời của bạn bị lãng phí, hãy đến với khách sạn Gia Viên chúng tôi để tận hưởng một cảm giác thật thoải mái và an tâm. Các bạn có thể đặt phòng trực tiếp thông qua website: giavienhotel.com hoặc các bạn cũng có thể đặt phòng ngay với chúng tôi qua các trang web du lịch uy tín như: agoda.com, booking.com, hotels.com…</p>
            <hr>
            
        </div>
      </div>
      <div id="bottom">Copyright &copy; 12/2017 - Đồ Án</div>
    </div>


     
    

</body>
</html>
