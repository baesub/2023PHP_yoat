<!-- /*
* Template Name: Tour
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->

<?php
    session_start();
    if(isset($_SESSION["userid"])) $userid=$_SESSION["userid"];
    else $userid="";
    if(isset($_SESSION["username"])) $username=$_SESSION["username"];
     else $username="";
    if(isset($_SESSION["userlevel"])) $userlevel=$_SESSION["userlevel"];
     else $userlevel="";
    if(isset($_SESSION["userpoint"])) $userpoint=$_SESSION["userpoint"];
     else $userpoint="";
	 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/daterangepicker.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/style.css">
	


	<title>요 투</title>
</head>

<body>


	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="site-navigation">
				<a href="index.php" class="logo m-0">요 투<span class="text-primary">.</span></a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
					<li class="active"><a href="index.php">홈</a></li>
					
					<li><a href="menu/program.php">프로그램</a></li>
					
					<li><a href="menu/reser.php">예약하기</a></li>

					<li class="has-children">
						

						<a href="board/board_list.php">Q&A</a>
						<ul class="dropdown">

							<li><a href="board/board_list.php">문의하기</a></li>
							<li><a href="hugi/hugi_list.php">후기 게시판</a></li>
							
							<li><a href="menu/Map.php">오시는 길 </a></li>
						</ul>
					</li>

					<!-- <li><a href="members/login_form.php">JOIN</a></li> -->
					<?php
    if(!$userid){
?>
	<li><a href="members/login_form.php">JOIN</a></li>
	<?php
    }else{
    $logged = $username."님";
        
    
?>
    <li><?=$logged?></li>
	<li><a href="members/member_modify_form.php">정보수정</a></li> 
    <li><a href="members/logout.php">로그아웃</a><li>
    
    <!-- <a href="../members/member_modify_form.php">마이페이지</a> -->
    
<?php
    }
?>
<?php
    if($userlevel == 1){
?>
        <!-- <li>|</li> -->
        <li><a href="admin/admin.php">관리자 모드</a></li>
<?php
    }
?>


				</ul>

				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

			</div>
		</div>
	</nav>
				</ul>



				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

			</div>
		</div>
	</nav>


	<div class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="intro-wrap">
						<h1 class="mb-5"><span class="d-block">요트로 떠나는
						</span> 부산 <span class="typed-words"></span></h1>

						<div style="width:500px" class= "row" >
							<div class="col-12">
								<form class="form">
									<div class="row mb-2">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
											<select name="" id="" class="form-control custom-select">
												
												<option value="">퍼블릭 투어</option>
												<option value="">프라이빗 투어</option>
												
											</select>
										</div>
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-5">
											<input type="text" class="form-control" name="daterange">
										</div>
										<!-- <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
											<input type="c" class="form-control" placeholder="인원 수">
										</div> -->

									</div>    
									<div class="row align-items-center">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
											<input type="submit" class="btn btn-primary btn-block" value="예약하기" >
										</div>
										<!-- <div class="col-lg-8">
											<label class="control control--checkbox mt-3">
												<span class="caption">Save this search</span>
												<input type="checkbox" checked="checked" />
												<div class="control__indicator"></div>
											</label>
										</div> -->
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="slides">
						<img src="img/yoat3.jpg" alt="Image" class="img-fluid active">
						<img src="img/yoat4.jpg" alt="Image" class="img-fluid">
						<img src="img/yoat5.jpg" alt="Image" class="img-fluid">
						<img src="img/yoat6.jpg" alt="Image" class="img-fluid">
						<img src="img/yoat7.jpg" alt="Image" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<h1 style="text-align: center;"> 요트 소개 </h1>
	<h3 style="text-align: center;">yoat introduction</h3>
<!-- 발리 소개 -->
	<div class="untree_co-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-single dots-absolute owl-carousel">
            <img src="https://cdn.imweb.me/thumbnail/20230315/915785d6b2b6a.jpg"   alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">

            <img src="https://mblogthumb-phinf.pstatic.net/MjAyMDA4MThfMTY3/MDAxNTk3NzQ4NzA3MTQw.GKiIBiUD3BJ1i4PXVUAirbHzLlmj0Xxl9k4K92g-mt4g.yps-K4F8eTwA1AEDPnL1oj6bwnl-QXkduP50afXTbUcg.JPEG.yookjihye/IMG_3011.JPG?type=w800" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">


            <img src="https://mblogthumb-phinf.pstatic.net/MjAyMjA2MjlfMTUx/MDAxNjU2NDgzMzE2NTQ0.qEyKXh82SBAC31NXvwnik_27fgkekC8Br5UbBQzS1rog.wHZ4WOySlqmrNjOxVp-tgCzOVoyq7I4snCcgn-fdGxUg.JPEG.shipbest/M3_08524.jpg?type=w800" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">

            <img src="https://cdn.imweb.me/thumbnail/20230316/0e6a158f262d6.jpg" alt="Free HTML Template by Untree.co" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">

            <img src="https://mblogthumb-phinf.pstatic.net/MjAyMTAzMTFfMjgy/MDAxNjE1NDY2NjI4NTk0.d4f-4NfLg3qiBRRsE9W-4_QT6e38UpeurdUeODzZrQ4g.jY3ljyl9I1gf7p2pji6wAF0y8aKweaiLcViXsEIu5LMg.JPEG.himawari_tw/IMG_8664.jpg?type=w800" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          </div>
        </div>
        <div class="col-lg-5 pl-lg-5 ml-auto">
			<br><br><br><br><br>
          <h2 style = "font-size: 50px; ">Bali45</h2>
          <p style = "font-size: 20px; ">발리 4.5</p>
		  <p style = "font-size: 20px; ">요트투어의 핵심은 바로 요트!</p>
		  <p style = "font-size: 20px; ">2020년 형 최신형 쌍동선 요트로,<br>
			고급스럽고 멋진 사진을 찍기 가장 <br> 완벽한 요트입니다. </p>
			<br><br><br><br><br>




<!-- 
          <ul class="list-unstyled two-col clearfix">
            <li>Outdoor recreation activities</li>
            <li>Airlines</li>
            <li>Car Rentals</li>
            <li>Cruise Lines</li>
            <li>Hotels</li>
            <li>Railways</li>
            <li>Travel Insurance</li>
            <li>Package Tours</li>
            <li>Insurance</li>
            <li>Guide Books</li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>



  <!-- 서비스 안내 -->
  <h1 style="text-align: center;"> 투어 서비스 안내 </h1>
	<h3 style="text-align: center;">FREE SERVICE</h3>

<div class="untree_co-section">
    <div class="container" >
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-single dots-absolute owl-carousel">
            <img src="https://d2ur7st6jjikze.cloudfront.net/offer_photos/113570/704759_medium_1667195273.jpg?1667195273"  alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">

            <img src="https://pds.joongang.co.kr/news/component/htmlphoto_mmdata/202011/20/1d990c7e-abe1-4fd2-8caa-b6efaa007e6d.jpg" class="img-fluid rounded-20">


            <img src="data:image/jpeg;base64,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" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">

          </div>
        </div>

		

        <div class="col-lg-5 pl-lg-5 ml-auto">
			<br><br><br><br><br>
          <h2 style = "font-size: 30px; text-align:center; ">무료 서비스 ▼  </h2>
          <p style = "font-size: 20px; text-align:center; ">맥주 / 물 / 음료 / 다과 / 멀미약 <br> 우비(우천시) 담요(겨울용)</p>

		  <br><br><br><br>

		  <h2 style = "font-size: 30px; text-align:center; ">체험 서비스 ▼  </h2>
          <p style = "font-size: 20px; text-align:center; ">선상낚시(프라이빗 일시) / 운항체험 / 폭죽 /<br> 폴라로이드 (ALL) </p>



<!-- 
         

  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-6 text-center">
          <h2 class="section-title mb-3 text-center">Team</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-4 rounded-20">
            <div class="px-3">
              <h3 class="mb-0">James Watson</h3>
              <p>Co-Founder &amp; CEO</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-4 rounded-20">
            <div class="px-3">
              <h3 class="mb-0">Carl Anderson</h3>
              <p>Co-Founder &amp; CEO</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="images/person_4.jpg" alt="Image" class="img-fluid mb-4 rounded-20">
            <div class="px-3">
              <h3 class="mb-0">Michelle Allison</h3>
              <p>Co-Founder &amp; CEO</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-4 rounded-20">
            <div class="px-3">
              <h3 class="mb-0">Drew Wood</h3>
              <p>Co-Founder &amp; CEO</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

					
				</div>
			</div>
		</div>
	</div>

	
	
	<div class="py-5 cta-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<h2 class="mb-2 text-white">Lets you Explore the Best. Contact Us Now</h2>
					<p class="mb-4 lead text-white text-white-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, fugit?</p>
					<p class="mb-0"><a href="booking.html" class="btn btn-outline-white text-white btn-md font-weight-bold">Get in touch</a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="site-footer">
		<div class="inner first">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">About Tour</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
						<div class="widget">
							<ul class="list-unstyled social">
								<li><a href="#"><span class="icon-twitter"></span></a></li>
								<li><a href="#"><span class="icon-instagram"></span></a></li>
								<li><a href="#"><span class="icon-facebook"></span></a></li>
								<li><a href="#"><span class="icon-linkedin"></span></a></li>
								<li><a href="#"><span class="icon-dribbble"></span></a></li>
								<li><a href="#"><span class="icon-pinterest"></span></a></li>
								<li><a href="#"><span class="icon-apple"></span></a></li>
								<li><a href="#"><span class="icon-google"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-2 pl-lg-5">
						<div class="widget">
							<h3 class="heading">Pages</h3>
							<ul class="links list-unstyled">
								<li><a href="#">Blog</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-2">
						<div class="widget">
							<h3 class="heading">Resources</h3>
							<ul class="links list-unstyled">
								<li><a href="#">Blog</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">Contact</h3>
							<ul class="list-unstyled quick-info links">
								<li class="email"><a href="#">mail@example.com</a></li>
								<li class="phone"><a href="#">+1 222 212 3819</a></li>
								<li class="address"><a href="#">43 Raymouth Rd. Baltemoer, London 3910</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="inner dark">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 mb-3 mb-md-0 mx-auto">
						<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co" class="link-highlight">Untree.co</a> <!-- License information: https://untree.co/license/ -->
						</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
<br><br><br><br><br><br>
<!-- 고객과의 약속 -->
<h1 style="text-align: center;"> 고객과의 약속 </h1>
	<h3 style="text-align: center;">CUSTOMER PROMISE</h3>


<div class="untree_co-section">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-6 col-lg-3">
          <div class="service text-center">
            <span class="icon-paper-plane"></span>
            <h3>01</h3>
            <p>일방적으로 고객의 예약을 <br> 변경하거나<br> 취소하지 않습니다.</p>
          </div>
        </div>
        <div class="col-6 col-md-6 col-lg-3">
          <div class="service text-center">
            <span class="icon-tag"></span>
            <h3>02</h3>
            <p>단 한 명의 고객이라도<br>예약된 시간에 출항을 <br> 약속드립니다. </p>
          </div>
        </div>
        <div class="col-6 col-md-6 col-lg-3">
          <div class="service text-center">
            <span class="icon-user"></span>
            <h3>03</h3>
            <p> 안전과 만족도를 위해 <br> 승선 정원을 꽉 채워 <br> 운영하지 않겠습니다.</p>
          </div>
        </div>
        <div class="col-6 col-md-6 col-lg-3">
          <div class="service text-center">
            <span class="icon-support"></span>
            <h3>04</h3>
            <p>보이지 않는 곳에서도 <br> 고객의 안전을 최우선으로<br>생각하겠습니다.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


<!--  -->

	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.js"></script>

	<script src="js/typed.js"></script>
	<script>
		$(function() {
			var slides = $('.slides'),
			images = slides.find('img');

			images.each(function(i) {
				$(this).attr('data-id', i + 1);
			})

			var typed = new Typed('.typed-words', {
				strings: ["더베이101","동백섬","해운대 해수욕장", "광안대교", "광안리 해수욕장", "수변공원", "마린시티"],
				typeSpeed: 80,
				backSpeed: 80,
				backDelay: 4000,
				startDelay: 1000,
				loop: true,
				showCursor: true,
				preStringTyped: (arrayPos, self) => {
					arrayPos++;
					console.log(arrayPos);
					$('.slides img').removeClass('active');
					$('.slides img[data-id="'+arrayPos+'"]').addClass('active');
				}

			});
		})
	</script>

	<script src="js/custom.js"></script>

</body>

</html>
