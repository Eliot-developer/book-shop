<?php
session_start();

$link = new mysqli( "localhost", "root","","book");
$link -> set_charset("utf8");

if(isset($_SESSION['counter'])){
	$_SESSION['counter']+=1;
}else
{$_SESSION['counter']=1;}
$msg="you have visited the page" . $_SESSION ['counter'];
$msg.=" in this session";
?>

<html>
<head>
<meta charset="utf-8">
<style>
  body { }
  @keyframes gradientAnimation {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}


 .header {
  background: linear-gradient(to right, #59B8DE, #F2DFA6, #F09ED9);
  background-size: 400% 400%;
  animation: gradientAnimation 3.5s ease infinite; padding: -70px 0; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) ; height:300px }
  .container { max-width: 1200px; margin: 0 auto;  align-items: center; padding: 0 14px;  }
  .nav { list-style-type: none; margin-top:-110px;font-family:"Shabnam" }
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
    
    </a>
	  <style>
/* تعریف یک کلاس برای آیکون بومه رنگ */
.icon__link {
  display: block;
  width: 30px;
  height: 30px;
}
.icon {
  width: 100%;
  height: 100%;
  border-radius: 0%;
  background-image: url(https://cdn-icons-png.freepik.com/256/1077/1077114.png?semt=ais_hybrid);
  background-repeat: no-repeat;
  background-size:30px;
  cursor:pointer;
	
}
		  
</style>
	  


<style>
/* تنظیم اندازه و موقعیت اسلایدر */
.slider {
  width: 100%;
  height: 200px;
  top: 9px;
  position:absolute;
}

/* تنظیم اندازه و موقعیت تصاویر */
.slide {
  width: 100%;
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
<script>


</script>
	<br><br>
<!-- ایجاد یک اسلایدر با چهار تصویر -->
<div class="slider"><br> <br><br>
  <div class="slider">
  <img class="slide" src="b5.jpg" alt="تصویر دوم" width="100vh">
 
  <img class="slide" src="b1.jpg" alt="تصویر اول" width="90%">
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


</script>
<br><br><br>
    <div class="container" style="top:10px">
      
      <ul class="nav">
        <?php if ( isset( $_SESSION['state_login'] )&& $_SESSION['state_login'] ): ?>
         <li><a href="logout.php">خروج</a></li><?php endif ?>
          
		  
        <li><a href="we.html">درباره ما</a></li>
    
        <li><a href="padcast.html">پادکست ها</a></li>
     
		  <li><a href="login.html">حساب من</a></li>
      </ul>
      </div>
    </div>
	 <br>


<br>
<table  style="top:-100px" border="0" width="1310" height="382" >
  <tr align="center">
	<td width="949" height="378"><a href="porfroshkh.php"><img  style="margin-left:20%" src="qq.png" width="200" height="200" ></a>
    <ul class="name">
        
       
    
	<td width="200"><a href="porfroshin.php"><img  style="margin-left:40%" src="q.png" width="-400px" height="-500px"></a>
	 <ul class="name1">
     </td></table>

<script>
var slideIndex = 0;
showSlides();

function plusSlides(n) {
  slideIndex += n;
  showSlides();
}

function showSlides() {
  var i;
  var slides = doent.getElementsByClassName("slides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>
<br><br>

<hr style="margin:auto;color:#FFFFFF;width:1000px"/>

	

    <h1 style="text-align: right; color:#5E3AB7; padding-right: 50px; padding-top: 50px">جدید ترین ها </h1><br>
<div style="text-align:match-parent;color:#1155F5">
	 <ul class="name2">
		 <li><a href="newbook.php">  ❮       مشاهده همه</a></li></ul>
<style>
/* ایجاد یک کانتینر برای نگهداری کتاب‌ها */
.recommended-books {
    margin: auto; /* وسط‌چین کردن کانتینر */
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    width: 90%;

  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* تمام ارتفاع صفحه را پر کند */
    margin:auto;
}

 
}

/* ایجاد یک کارت برای هر کتاب */
.card {
  position: relative;
  width: 100px;
  height: 300px;
  margin: 2px;
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
    width: 100%;
	
}

/* ایجاد یک عنوان برای نام کتاب */
.card-info h3 {
  font-size: 10px;
  margin: 0;
}

/* ایجاد یک پاراگراف برای نمایش قیمت و امتیاز کتاب */
.card-info p {
  font-size: 10px;
  margin: 5px 0;
}


/* استایل دکمه */
.buy-btn {
  display: block;
  font-size: 16px;
  width: 100%;
  border: none;
  border-radius: 5px;
  background-color:#EBDF8F;
  padding: 8px;
  cursor: pointer;
}

/* استایل لینک داخل دکمه */
.buy-btn .buy-link {
  color:#F70004;  /* تغییر رنگ متن لینک */
  text-decoration: none; /* حذف خط زیر */
  display: block;  /* تمام فضای دکمه را بگیرد */
  text-align: center;
	font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
}

/* تغییر رنگ هنگام هاور */
.buy-btn:hover {
  background-color: #d6c879;
}
</style>
</style>
</head>
<body>
<!-- اضافه کردن کانتینر و کتاب‌ها به بدنه صفحه -->
<div class="container">
<?php 
$query = "SELECT * FROM products LIMIT 6";
$result = $link->query($query);
$counter = 0;

while($row = mysqli_fetch_array($result)) {
  $counter++;
?>
  <div class="card">
	  <a href="product_detail.php?product=<?= $row['pro_code'] ?>">
    <img src="<?php echo 'pic/' . $row['pro_image'] ?>" alt="کتاب اول">
	  </a>
    <div class="card-info">
      <h3><?php echo $row['pro_name'] ?></h3>
      <p>قیمت: <?php echo $row['pro_price'] ?> تومان</p>
      <p>امتیاز: ★★★★☆</p>
      <p>موجودی: <?php echo $row['pro_Qty'] ?></p>
      <button><a href="product_detail.php?product=<?= $row['pro_code']?>">خرید</a></button>
    </div>
  </div>
<?php
}
unset($counter, $query, $result, $row);
?>
</div>
<br><br><br><br>
	<hr style="margin:auto;color:#FFFFFF;width:1300px"/>

	<style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    .slideshow {
      width: 1300px;
      height: 300px;
      margin: 20px auto;
      overflow: hidden;
      position: relative;
    }

    .slideshow img {
      width: 1300px;
      height: 300px;
      position: absolute;
      left: 0;
      top: 0;
      animation: slide 12s infinite;
      transition: left 5s;
    }

    .slideshow img:nth-child(1) {
      animation-delay: 0s;
      z-index: 3;
    }

    .slideshow img:nth-child(2) {
      animation-delay: 4s;
      z-index: 2;
    }

    .slideshow img:nth-child(3) {
      animation-delay: 8s;
      z-index: 1;
    }

    @keyframes slide {
      0% {
        left: 0;
      }
      25% {
        left: -1900px;
      }
      50% {
        left: -1000px;
      }
      75% {
        left: -1900px;
      }
      100% {
        left: 0;
      }
    }

    .slideshow:active img {
      animation-play-state: paused;
    }

    .slideshow:active img:nth-child(1) {
      left: calc(0px - var(--x));
    }

    .slideshow:active img:nth-child(2) {
      left: calc(-500px - var(--x));
    }

    .slideshow:active img:nth-child(3) {
      left: calc(-1000px - var(--x));
    }
  </style>
</head>
<body>
  <div class="slideshow" onmousedown="start(event)" onmouseup="end()">
    <img src="mb.webp" alt="Image 1">
    <img src="mbb.webp" alt="Image 2">
    <img src="bb.png" alt="Image 3">
  </div>
  <script>
    let x; // موقعیت اولیه موس
    let slides = document.querySelectorAll(".slideshow img"); // عکس‌ها را انتخاب کن

    // تابع برای شروع کشیدن عکس
    function start(e) {
      x = e.clientX; // موقعیت اولیه موس را ذخیره کن
    }

    // تابع برای پایان کشیدن عکس
    function end() {
      let diff = event.clientX - x; // اختلاف موقعیت اولیه و نهایی را محاسبه کن
      if (diff > 100) { // اگر اختلاف بیش از 100 پیکسل بود، یعنی به سمت راست کشیده شده است
        slides.forEach(slide => {
          slide.style.setProperty("--x", "500px"); // هر عکس را 500 پیکسل به سمت راست حرکت بده
        });
      } else if (diff < -100) { // اگر اختلاف کمتر از -100 پیکسل بود، یعنی به سمت چپ کشیده شده است
        slides.forEach(slide => {
          slide.style.setProperty("--x", "-500px"); // هر عکس را 500 پیکسل به سمت چپ حرکت بده
        });
      } else { // اگر اختلاف کمتر از 100 پیکسل بود، یعنی عکس تغییر نکرده است
        slides.forEach(slide => {
          slide.style.setProperty("--x", "0px"); // هر عکس را در موقعیت اولیه بگذار
        });
      }
    }
  </script>
	<hr style="margin:auto;color:#FFFFFF;width:1300px"/>

	 <h1 style="text-align: right; color:#5E3AB7; padding-right: 50px; padding-top: 50px">پر فروش ترین های خارجی </h1>
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
    width: 200px;
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
<ul class="name3">
		 <li><a href="porfroshkh.php" >  ❮       مشاهده همه</a></li></ul>
	
<div style="text-align:match-parent;color:#1155F5">
<div class="container">
<?php 
$query = "SELECT * FROM products LIMIT 6 , 6";
$result= $link->query($query);
$counter = 0;

while($row = mysqli_fetch_array($result)) {
  $counter++;
?>
  <div class="card">
	  <a href="product_detail.php?product=<?= $row['pro_code'] ?>">
    <img src="<?php echo 'pic/' . $row['pro_image'] ?>" alt="کتاب اول">
	  </a>
    <div class="card-info">
      <h3><?php echo $row['pro_name'] ?></h3>
      <p>قیمت: <?php echo $row['pro_price'] ?> تومان</p>
      <p>امتیاز: ★★★★☆</p>
      <p>موجودی: <?php echo $row['pro_Qty'] ?></p>
      <button><a href="product_detail.php?product=<?= $row['pro_code']?>">خرید</a></button>
    </div>
  </div>
<?php
}
unset($query, $counter, $result, $result);
?>
</div>
	 <h1 style="text-align: right; color:#5E3AB7; padding-right: 50px; padding-top: 50px">پر فروش ترین های ایرانی </h1>

<div style="text-align:match-parent;color:#1155F5">
     <ul class="name4">
		 <li><a href="porfroshin.php">  ❮       مشاهده همه</a></li></ul>	<div class="container">
     <?php 
$query = "SELECT * FROM products LIMIT 12 , 6";
$result= $link->query($query);
$counter = 0;

while($row = mysqli_fetch_array($result)) {
  $counter++;
?>
  <div class="card">
	  <a href="product_detail.php?product=<?= $row['pro_code'] ?>">
    <img src="<?php echo 'pic/' . $row['pro_image'] ?>" alt="کتاب اول">
	  </a>
    <div class="card-info">
      <h3><?php echo $row['pro_name'] ?></h3>
      <p>قیمت: <?php echo $row['pro_price'] ?> تومان</p>
      <p>امتیاز: ★★★★☆</p>
      <p>موجودی: <?php echo $row['pro_Qty'] ?></p>
      <button><a href="product_detail.php?product=<?= $row['pro_code']?>">خرید</a></button>
    </div>
  </div>
<?php
}
unset($query, $counter, $result, $result);
?>
</div>
    
	
		

</br></br></br></br></br>
     <h1>
       <em>
       
   
</div>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موکا شاپ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        /* فونت فارسی حرفه‌ای برای متن‌های سایت */
        @import url('https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@latest/fonts/webfonts/vazirmatn.css');

        /* فونت لاتین زیبا برای "Moka" */
        @import url('Edwardian Script ITC');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            
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
			font-family: 'Edwardian Script ITC';
            bottom: 190px;
			left: auto;
            font-size: 42px;
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

</body>
</html>




</body>
</html>


 <div style="margin-bottom:10px" align="center"><?php
  echo( $msg );
  ?>
</body>
</html>
