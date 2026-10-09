<?php
session_start();

$link = new mysqli( "localhost", "root", "", "book" );
$link -> set_charset("utf8");

if(isset($_SESSION['counter'])){
	$_SESSION['counter']+=1;
}else
{$_SESSION['counter']=1;}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
 body { font-family:'allura',sans-serif; }
  @keyframes gradientAnimation {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}


 .header {
  background: linear-gradient(to right, #59B8DE, #F2DFA6, #F09ED9);
  background-size: 400% 400%;
  animation: gradientAnimation 3.5s ease infinite; padding: -70px 0; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) ; height:300px }
  .container { max-width: 1200px; margin: 10px auto;  align-items: center; padding: 0 14px;  }
  .nav { list-style-type: none; margin-top:-150px;font-family:"Shabnam" }
  .nav li { margin: 10px 15px;}
  .nav li a { text-decoration: none; color:#1843B7; font-size: 19px; transition: color 0.3s;width: 1000px; }
  .nav li a:hover { color: #F54E92; }
 
  /* انیمیشن برای لوگو */
 @keyframes bounce {
  0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
  40% { transform: translateY(-30px); }
  60% { transform: translateY(-15px); }
}

.logo {
  animation: bounce 2s infinite;
}

</style>
</head>

<body>

    

  <div class="header">
	  <!-- قرار دادن آیکون بومه رنگ در صفحه وب -->
    
	  

<br><br><br>
<style>
/* تنظیم اندازه و موقعیت اسلایدر */
.slider {
  width: 100%;
  height: 200px;
  top: 17px;
  position:absolute;
}

/* تنظیم اندازه و موقعیت تصاویر */
.slide {
  width: 99%;
  height: 180px;
  position: absolute;
  top: 10;
  left: 0;
}

/* پنهان کردن تمام تصاویر به جز اولی */
.slide:not(:first-child) {
  display: none;
}

/* تنظیم اندازه، موقعیت و ظاهر دکمه‌های بعد و قبل */
.prev, .next {
  width: 50px;
  height: 50px;
  border:none;
  border-radius: 30%;
  background: rgba(0,0,0,0.2);
  color:black;
  font-size: 40px;
  cursor:pointer;
  position:absolute;
  top: 50%;
  transform: translateY(-50%);
}

/* قرار دادن دکمه بعد در سمت راست */
.next {
  right: 12px;
}

/* قرار دادن دکمه قبل در سمت چپ */
.prev {
  left: 12px;
}

/* تغییر رنگ دکمه‌ها هنگام روی آوردن موس */
.prev:hover.next:hover{
  background:#7527F4(1,1,1,1.8);
}
.name { list-style-type: none; margin-top:5px;font-family:"Shabnam" }
  .name li { margin: 10px 15px;}
  .name li a { text-decoration: none; color
  :#415B45; font-size: 20px; transition: color 0.3s;width: 1000px;  margin-left:550px ;}
  .name li a:hover { color: #F54E92; }
  
  .name1 { list-style-type: none; margin-top:10px;font-family:"Shabnam"; margin-left:-4px }
 .name2 li { margin: 10px 15px;}
  .name1 li a { text-decoration: none; color:#415B45; font-size: 20px; transition: color  0.3s; margin-right:40px; margin-left:10px}
  .name1 li a:hover{color: #F54E92;}
	
	.name2 { list-style-type: none; margin-top:5px;font-family:"Shabnam" }
  .name2 li { margin: 10px 15px;}
  .name2 li a { text-decoration: none; color
  :#D37E3D; font-size: 20px; transition: color 0.3s;width: 1000px;  margin-left:9px ;}
  .name2 li a:hover { color: #F54E92; }
	
	.name3 { list-style-type: none; margin-top:5px;font-family:"Shabnam" }
  .name3 li { margin: 10px 15px;}
  .name3 li a { text-decoration: none; color
  :#D37E3D; font-size: 20px; transition: color 0.3s;width: 1000px;  margin-left:3px ;}
  .name3 li a:hover { color: #F54E92; }
	
	.name4 { list-style-type: none; margin-top:5px;font-family:"Shabnam" }
  .name4 li { margin: 10px 15px;}
  .name4 li a { text-decoration: none; color
  :#D37E3D; font-size: 20px; transition: color 0.3s;width: 1000px;  margin-left:3px ;}
  .name4 li a:hover { color: #F54E92; }
</style>
	<br><br>
<!-- ایجاد یک اسلایدر با چهار تصویر -->
<div class="slider"><br> <br>
  <div class="slider">
  <img class="slide" src="b5.jpg" alt="تصویر دوم" width="100vh">
 
  <img class="slide" src="b6.jpg" alt="تصویر اول" width="90%">
  <a class="prev" onclick="changeSlide(-1)">❮</a>
  <a class="next" onclick="changeSlide(1)">❯</a>
</div>
</div>
	<div class="slide-show-banner-dots"><div class="slide-show-banner-dots-item active"></div><div class="slide-show-banner-dots-item "></div><div class="slide-show-banner-dots-item "></div></div>
    <br><br>
<script>
// تعریف یک متغیر برای نگهداری شماره تصویر فعلی
var slideIndex = 1;

// تعریف یک تابع برای تغییر تصویر با گرفتن یک پارامتر n
function changeSlide(n) {
  // دریافت تمام تصاویر با کلاس slide
  var slides = document.getElementsByClassName("slide");
  // افزودن n به شماره تصویر فعلی
  slideIndex += n;
  // اگر شماره تصویر فعلی بیشتر از تعداد تصاویر باشد، به اولین تصویر برو
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  // اگر شماره تصویر فعلی کمتر از یک باشد، به آخرین تصویر برو
  if (slideIndex < 1) {
    slideIndex = slides.length;
  }
  // پنهان کردن تمام تصاویر
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  // نمایش تصویر با شماره تصویر فعلی
  slides[slideIndex-1].style.display = "block";
}

// تعریف یک تابع برای تغییر تصویر با فشار دادن کلید‌های جهت‌نما
function keyPress(event) {
  // اگر کلید راست فشرده شود، تصویر بعدی را نمایش بده
  if (event.keyCode == 39) {
    changeSlide(1);
  }
  // اگر کلید چپ فشرده شود، تصویر قبلی را نمایش بده
  if (event.keyCode == 37) {
    changeSlide(-1);
  }
}

// اضافه کردن یک رویداد برای فراخوانی تابع keyPress هنگام فشار دادن کلید‌ها
document.addEventListener("keydown", keyPress);
</script>


<br>

    <div class="container" style="top:10px">
      
      <ul class="nav">
        <?php if ( isset( $_SESSION['state_login'] )&& $_SESSION['state_login'] ): ?>
         <li><a href="logout.php">خروج</a></li><?php endif ?>
           
		
        
       
        <li><a href="padcast.html">پادکست ها</a></li>
     <li><a href="index.php">خانه</a></li>
      </ul>
      </div>
    </div>
<br><br><br><br><br><br>
<br><br><br>

	<style>
	/* Create a list of images */
ul {
  
  overflow: hidden;
}

/* Style the list items */
li {
  float: left;
  
}

/* Style the images */
img {
  display: block;
  width:260px;
  height: auto;
}

/* Add a hover effect to the images */
img:hover {
  transform: scale(0.9);
  transition: transform 0.5s;
	</style>
		<style>
/* ایجاد یک کانتینر برای نگهداری کتاب‌ها */
.container {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 400px;
  overflow-x: auto;
}

/* ایجاد یک کارت برای هر کتاب */
.card {
  position: relative;
  width: 200px;
  height: 300px;
  margin: 10px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

/* اضافه کردن عکس کتاب به کارت */
.card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* ایجاد یک بخش برای نمایش اطلاعات کتاب */
.card-info {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background-color:#FFFFFF;
    padding: 10px;
    opacity: 0.7;
    width:100%;
}

/* ایجاد یک عنوان برای نام کتاب */
.card-info h3 {
  font-size: 16px;
  margin: 0;
}

/* ایجاد یک پاراگراف برای نمایش قیمت و امتیاز کتاب */
.card-info p {
  font-size: 14px;
  margin: 5px 0;
}

/* ایجاد یک دکمه برای خرید کتاب */
.card-info button {

  display: block;
  width: 100%;
  border: none;
  border-radius: 5px;
  background-color: green;
  color: white;
  padding: 5px;
  cursor: pointer;
}
</style>

</head>

<body>
	<div class="container">
	<?php 
$query = "SELECT * FROM products ORDER BY RAND() LIMIT 5";
$result = $link->query($query);
$counter = 0;

while($row = mysqli_fetch_array($result)) {
  $counter++;
?>
  <div class="card">
  <a href="product_detail.php?product=<?= $row['pro_code'] ?>">
    <img src="<?php echo 'pic/' . $row['pro_image'] ?>" alt="کتاب">
    </a>
    <div class="card-info">
      <h3><?php echo $row['pro_name'] ?></h3>
      <p>قیمت: <?php echo $row['pro_price'] ?> تومان</p>
      <p>امتیاز: ★★★★☆</p>
      <button><a href="product_detail.php?product=<?= $row['pro_code']?>">خرید</a></button>
    </div>
  </div>
	
  
<?php
}
?>
		</div>
	
	<div class="container">
	<?php 
$query = "SELECT * FROM products ORDER BY RAND() LIMIT 5";
$result = $link->query($query);
$counter = 0;

while($row = mysqli_fetch_array($result)) {
  $counter++;
?>
  <div class="card">
  <a href="product_detail.php?product=<?= $row['pro_code'] ?>">
    <img src="<?php echo 'pic/' . $row['pro_image'] ?>" alt="کتاب">
    </a>
    <div class="card-info">
      <h3><?php echo $row['pro_name'] ?></h3>
      <p>قیمت: <?php echo $row['pro_price'] ?> تومان</p>
      <p>امتیاز: ★★★★☆</p>
      <button><a href="product_detail.php?product=<?= $row['pro_code']?>">خرید</a></button>
    </div>
  </div>
	
  
<?php
}
?>
		</div>
	
<div class="container">
	<?php 
$query = "SELECT * FROM products ORDER BY RAND() LIMIT 5";
$result = $link->query($query);
$counter = 0;

while($row = mysqli_fetch_array($result)) {
  $counter++;
?>
  <div class="card">
  <a href="product_detail.php?product=<?= $row['pro_code'] ?>">
    <img src="<?php echo 'pic/' . $row['pro_image'] ?>" alt="کتاب">
    </a>
    <div class="card-info">
      <h3><?php echo $row['pro_name'] ?></h3>
      <p>قیمت: <?php echo $row['pro_price'] ?> تومان</p>
      <p>امتیاز: ★★★★☆</p>
      <button><a href="product_detail.php?product=<?= $row['pro_code']?>">خرید</a></button>
    </div>
  </div>
  
<?php
}
?>
	</div>
	
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فوتر پاستیلی</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        /* فونت فارسی حرفه‌ای برای متن‌های سایت */
        @import url('https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@latest/fonts/webfonts/vazirmatn.css');

        /* فونت لاتین زیبا برای "Moka" */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Vazirmatn', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .footer {
            margin-top: auto;
            background: linear-gradient(135deg, #ffd3e0, #b2ebf2, #ffeaa7);
            padding: 30px 15px;
            text-align: center;
            color: #000;
            position: relative;
            overflow: hidden;
        }

        /* آیکون‌های شبکه‌های اجتماعی */
        .footer .social-icons {
            margin-bottom: 20px;
            opacity: 0;
            animation: slideUp 1.5s ease-out forwards;
        }

        .footer .social-icons a {
            display: inline-block;
            margin: 0 15px;
            color: #000;
            font-size: 35px;
            transition: all 0.3s ease;
        }

        /* تغییر رنگ هر آیکون هنگام هاور */
        .footer .social-icons a.telegram:hover { color: #0088cc; }
        .footer .social-icons a.whatsapp:hover { color: #25d366; }
        .footer .social-icons a.instagram:hover { color: #BF25F1; }
        .footer .social-icons a.youtube:hover { color: #ff0000; }

        /* لینک‌های فوتر */
        .footer .footer-links {
            margin-top: 15px;
            opacity: 0;
            animation: slideLeft 1.5s ease-out 0.5s forwards;
        }

        .footer .footer-links a {
            display: inline-block;
            margin: 0 10px;
            color: #000;
            font-size: 16px;
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: bold;
        }

        .footer .footer-links a:hover { color: #F97F6D; }

        /* متن فوتر */
        .footer p {
            margin-top: 15px;
            font-size: 18px;
            font-weight: 500;
            opacity: 0;
            animation: slideLeft 3s ease-out 0.7s forwards;
        }

        /* نام Moka */
        .footer .brand {
            position: absolute;
            bottom: 190px;
			left: auto;
            font-family: 'Poppins', sans-serif;
            font-size: 32px;
            font-weight: 600;
            color: #000;
            opacity: 0.8;
            animation: slideRight 2s ease-in-out forwards;
        }

        /* انیمیشن اسلاید به سمت بالا برای آیکون‌ها */
        @keyframes slideUp {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* انیمیشن اسلاید به چپ برای متن‌های فارسی */
        @keyframes slideLeft {
            from { transform: translateX(-50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        /* انیمیشن اسلاید به راست برای Moka */
        @keyframes slideRight {
            from { right: -200px; opacity: 0; }
            to { right: 15px; opacity: 1; }
        }

    </style>
</head>
<body>
	
	<footer class="footer">
        <div class="social-icons">
			<br><br><br><br>
            <a href="#" class="telegram"><i class="fab fa-telegram"></i></a>
            <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="footer-links">
            <a href="we.html">درباره ما</a>
            <a href="login.html">ورود</a>
            <a href="index.php">خانه</a>
        </div>
        <p>تمامی حقوق محفوظ است | طراحی شده توسط موکا</p>
        
        <!-- نام "Moka" با افکت اسلاید -->
        <div class="brand">Moka</div>
    </footer>

 <div style="margin-bottom:10px" align="center">
</body>
</html>
