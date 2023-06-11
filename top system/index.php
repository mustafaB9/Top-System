<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/homepageStyle.css">
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>Top System</title>
  </head>
  <body>
    <div class="dash-bord" id="dash">
        <ul>
            <li><a href="#home">الصفحة الرئيسية</a></li>
            <li><a href="#product">المنتجات</a></li>
            <li><a href="contact.php">تواصل معنا</a></li>
            <li><a href="admin/admin_login.php">تسجيل الدخول</a></li>
        </ul>
        <button id="close" onclick="removeClass()">x</button>
    </div>
    <!-- Nav Bar -->
    <nav class="navbar navbar-light Nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
            src="image/photo_2023-06-06_10-48-31.jpg"
            class="imageNav"
            width="200"
            class="d-inline-block align-text-top"
          />
        </a>
        <div class="NavRight">
          <a href="admin/admin_login.php">Log In</a>
          <i class="bx bx-menu" id="open" onclick="addClass()"></i>
        </div>
      </div>

    </nav>
    <!-- end nav -->
    <!-- hero -->
    <div id="home" class="card CardHero bg-dark border-0 text-white">
      <img
        src="./image/photo_2023-06-06_11-19-4.jpg"
        class="card-img"
        alt="..."
      />
      <div class="card-img-overlay">
        <h5 class="card-title" style="z-index: 10; position: relative">
          TOP SYSTEM
        </h5>
        <p
          class="card-text"
          style="z-index: 10; position: relative; font-style: oblique"
        >
          MAHER S. SHAMMA
        </p>
      </div>
    </div>
    <!-- end hero -->
    <!-- products -->

    <div id="product" class="row p-4 m-0 justify-content-center" style="text-align: center">
        <h1
        style="
          color: #2d3483;
          margin: 1rem auto;
          text-align: center;
          font-weight: bolder;
        "
      >
        المنتجات
      </h1>
            <div class="card col-md-3  m-4 p-0" style="border: 2px solid #2d3483; border-style: dashed; margin: 1rem; width: 20rem">
              <img
                src="image/photo_2023-06-06_17-05-37.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title" style=" color: #2d3483">
                  مصباح مكتبي
                </h5>
                <p
                  class="card-text"
                  style=" font-weight: lighter"
                >
                  مع شاحن وايرلس سريع 15W iq 4 الوان من الاضاءة مع 5 درجات لشدة
                  لاضاءة مع اضاءة ليلية عند القاعدة 5 درجات مزودة بساعة رقمية
                  ومقياس حرارة وتاريخ ومنبه قابلة لتعديل شدة الاضاءة متوفر اللون
                  الابيض والاسود
                </p>
                <a href="contact.php" class="btn btn-primary">أحجز الآن 😁</a>
              </div>
            </div>
            <div class="card col-md-3  m-4 p-0" style="border: 2px solid #2d3483; border-style: dashed; margin: 1rem; width: 20rem">
              <img
                src="image/photo_2023-06-06_17-12-44.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title" style=" color: #2d3483">
                  A T L A N T I S نوت بوك من
                </h5>
                <p
                  class="card-text"
                  style=" font-weight: lighter"
                >
                  مع بور بنك سعة 10000 ملي أمبير مع كابلات متعددة تناسب شحن جميع
                  الاجهزة مع شاحن لاسلكي ( وايرلس ) من الخارج مع رقعة مضيئة لحفر
                  الشعار مع USB فلاش ميموري في الحزام الغالق سعة 32GB مع علبة ابيض
                  تناسب اعمال الطباعة
                </p>
                <a href="contact.php" class="btn btn-primary">أحجز الآن 😁</a>
              </div>
            </div>
            <div class="card col-md-3  m-4 p-0" style="border: 2px solid #2d3483; border-style: dashed; margin: 1rem; width: 20rem">
              <img
                src="image/photo_2023-06-06_17-14-35.jpg"
                class="card-img-top"

                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title" style=" color: #2d3483">
                  طقم هدايا
                </h5>
                <p
                  class="card-text"
                  style=" font-weight: lighter"
                >
                  مكون من دفتر نوت مقاس A5 مع ستيل ماك حافظ الحراره بشاشه رقميه
                  وفلاش ميموري سعة 16 G بميدالية مفاتيح بشعار مضيئ وقلم بلاستيك مع
                  تاتش بشعار مضيئ
                </p>
                <a href="contact.php" class="btn btn-primary">أحجز الآن 😁</a>
              </div>
            </div>
            <div class="card col-md-3  m-4 p-0" style="border: 2px solid #2d3483; border-style: dashed; margin: 1rem; width: 20rem">
              <img
                src="image/photo_2023-06-06_17-00-34.jpg"
                class="card-img-top"

                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title" style=" color: #2d3483">
                  A T L A N T I S ماوس وايرلس
                </h5>
                <p
                  class="card-text"
                  style=" font-weight: lighter"
                >
                  شعار مضيء ، متغير ألوان اعادة شحن مع توفير طاقة واطفاء تلقائي
                  عند عدم الاستخدام سطح مخملي
                </p>
                <a href="contact.php" class="btn btn-primary">أحجز الآن 😁</a>
              </div>
            </div>
            <div class="card col-md-3  m-4 p-0" style="border: 2px solid #2d3483; border-style: dashed; margin: 1rem; width: 20rem">
              <img
                src="image/photo_2023-06-06_17-15-37.jpg"
                class="card-img-top"

                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title" style=" color: #2d3483">
                  طقم هدايا
                </h5>
                <p
                  class="card-text"
                  style=" font-weight: lighter"
                >
                  مكون من دفتر نوت مقاس A5 مع ستيل ماك حافظ الحراره بشاشه رقميه
                  وفلاش ميموري سعة 16 G بميدالية مفاتيح بشعار مضيئ وقلم بلاستيك مع
                  تاتش بشعار مضيئ
                </p>
                <a href="contact.php" class="btn btn-primary">أحجز الآن 😁</a>
              </div>
            </div>
            <div class="card col-md-3  m-4 p-0" style="border: 2px solid #2d3483; border-style: dashed; margin: 1rem; width: 20rem">
              <img
                src="image/photo_2023-06-06_17-17-11.jpg"
                class="card-img-top"

                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title" style=" color: #2d3483">
                  A T L A N T I S نوت بوك من
                </h5>
                <p
                  class="card-text"
                  style=" font-weight: lighter"
                >
                  مع بور بنك سعة 10000 ملي أمبير مع كابلات متعددة تناسب شحن جميع
                  الاجهزة مع شاحن لاسلكي ( وايرلس ) من الخارج مع رقعة مضيئة لحفر
                  الشعار تعمل باللمس مع USB فلاش ميموري في الحزام الغالق سعة 32GB
                  مع جيب خارجي حامل جوال وكروت BUSSUNES CARD وستاند للجوال
                  والايباد داخلي ممتد مع علبة ابيض تناسب اعمال الطباعة
                </p>
                <a href="contact.php" class="btn btn-primary">أحجز الآن 😁</a>
              </div>
            </div>
            <!-- style="flex-wrap:wrap;align-items:center;margin:0 auto;justify-content:center;" -->
            <!-- <div class="row p-4 m-0 justify-content-center" style="text-align: center;"> -->
                <section class="row p-0 m-0 justify-content-center" style="text-align: center;">
                    <!-- <div style=" align-items:center; justify-content:center; display:flex;"> -->

                    <!-- <div style="align-items:center;display:flex;width:20rem;"> -->

                    <?php
                        $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
                        $select_products->execute();
                        if($select_products->rowCount() > 0){
                        while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <form action="" method="post" class="card col-md-3  m-4 p-0" style="border: 2px solid #2d3483; border-style: dashed; margin: 1rem; width: 20rem;">
                        <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
                        <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
                        <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
                        <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
                        <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
                        <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" class="card-img-top" style="height: 250px;" alt="" >
                        <div class="card-body">
                            <div class="card-title" style=" color: #2d3483;  font-size: 2rem;"><?= $fetch_product['name']; ?></div>
                        </div>
                        
                        <div class="details card-text" 
                  style=" font-weight: lighter; font-size:1.3rem ; margin-bottom:3rem;"><?= $fetch_product['details']; ?></div>
                  <a href="contact.php" class="btn btn-primary" style="position:absolute; align-items:center; top:100%; left:50%;background-color:#2d3483; font-weight: bold; border: none;transform: translate(-50%, -50%);">أحجز الآن 😁</a>
                    </form>
                    <?php
                        }
                    }else{
                        echo '';
                    }
                    ?>

                    <!-- </div> -->
                    
                    <div class="swiper-pagination"></div>

                    <!-- </div> -->
            
    </div>
    <!-- end products -->
    <!-- footer -->
    <div class="footer">
        <span>copy@2023-mustafa-ayman-barjas</span>
    </div>
    <!-- end footer -->
    <script src="./index.js"></script>
    <script>
       function addClass(){
            let element = document.getElementById("dash")
            element.classList.add('dash-bord-open')
        }
        function removeClass(){
            let element = document.getElementById("dash")
            element.classList.remove('dash-bord-open')
        }

        var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});
    </script>
  </body>
</html>
