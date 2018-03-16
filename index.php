<!DOCTYPE html>

<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "usman_ali998@hotmail.com";
    $email_subject = "hello";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $firstn_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $subject = $_POST['subject']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 

 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>




<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>F & F Cars</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
    <script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>
    
   
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


    <script>
function myFunction() {
    alert("Your email was submitted, Thank You!");
}
</script>
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
               <!-- <a class="navbar-brand" href="index.html">
                    <h1>Filip Website</h1>
                </a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
      	<li ><a class="list3" href="#about"> F & F CARS - канадский автомобильный дилер</a></li>
        <li class="active"><a href="#intro">Главная</a></li>
        <li><a href="#about">О НАС</a></li>
		<li><a href="#service">АУКЦИОНЫ</a></li>
		<li><a href="#contact">НАШ КОНТАКТ</a></li>
       <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Example menu</a></li>
            <li><a href="#">Example menu</a></li>
            <li><a href="#">Example menu</a></li>
          </ul>
        </li>-->
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">
	
		<div class="slogan">
			<!--<h2 class="ff"> F & F CARS  <span class="text_color"></span> </h2>
			
			<h4>“It all belongs to you” </h4>-->
		</div>
		<br><br>
		<div class="page-scroll">
			<a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section> <div class="section-heading">
    	<br>
						
			
			             <h4>“It all belongs to you” </h4>
			         </div>
	<!-- /Section: intro -->

	<!-- Section: about -->

    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					
					
			       
					<h2>О Нас</h2>
					<p class="r4">Официальный дилер “F & F cars” занимается автомобильным бизнесом на рынке Канады и США.
                     Наша команда
 специалистов окажет Вам помошь в поиске автомобиля, который Вы ищите на автомобильных аукционах и площадках Северной Америки. 
Экспортный отдел компани “F & F cars”  осуществляет доставку автомобилей и другой техники в порты Европы: Бременгафен(Германия), Гдыня(Польша), Одесса(Украина).<br>

<br>

Канадские машины - это качественный продукт известных мировых брендов.
Канадский потребитель любит хорошо укомплектованные автомобили автомобили мировых производителей изготовленых  с большим количеством дополнительных функций. <br>
Качественное сервисное обслуживание, хорошие дорого способствуют длительной эксплуатации автомобиля.
Среднестатистический канадский автомобиль имеет меньше пробега, чем европейский аналог такого же года выпуска.
Главной отличительной чертой в сравнении с американскими машинами есть панель приборов, оборудованная по европейским стандартам: спидометр в километрах, климат контроль в градусах, компьютер в метрической системе. <br><br>

Желаем приятного Вам сотрудничества с нашей комнапией. </p>

					

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<br> <br> <br>
		</div>
		   <div class="row">
            <div class="col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5 class="impact2">Impact</h5>
                        
                        <div class="avatar"> <a href="https://www.impactauto.ca"> <img src="img/team/logo1.jpg"  alt="" class="img-responsive img-circle" 
                        /></div>
                    </div>
                </div>
				</div>
            </div>
       
             <div class="row">
            <div class="col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                	<div class="inner">
						<h5 class="boldclass">Manheim</h5>
                        
                        <div class="avatar"> <a href="https://www.manheim.ca"> <img src="img/team/logo3.jpg"  alt="" class="img-responsive img-circle" 
                        /></div>
                    </div>
                
                </div>
				</div>
            </div>

             <div class="row">
            <div class="col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                      <div class="inner">
						<h5 class="boldclass">Copart</h5>
                        
                        <div class="avatar">
                        	<a href="https://www.copart.ca">
                         <img src="img/team/logo4.jpg"  alt="" class="img-responsive img-circle" 
                        /></div>
                    </div>
                </div>
				</div>
            </div>
             <div class="row">
            <div class="col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                     <div class="inner">
						<h5 class="boldclass">Adesa</h5>
                         
                        <div class="avatar"> <a href="https://www.adesa.ca" > <img src="img/team/logo2.jpg"  alt="" class="img-responsive img-circle" />
          
                    </div>
                    </div>



                </div>
				</div>
            </div>
			
			
        </div>		
		</div>
	</a>
		<div class="space"></div>
	</section>
	<!-- /Section: about -->
	
<br>
	<!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
						<br>
					<h2>Аукционы</h2>
					<p class="r5"> <span class="r8">Impact-</span> аукцион по продаже автомобилей имеющих механических повреждений или незначительные неисправности . А также автомобили найденные полицией после угона,выставленные страховыми компаниями. Это один из наиболее распространённых  автомобильных аукционов. <br><br>
						<span class="r8">Manheim -</span> аукцион по продаже автомобилей без повреждений, которые уже были в эксплуатации. Это самый крупный аукцион с хорошим доступом информации о состояния автомобиля и другой техники <br><br>
        <span class="r8">Copart –</span> аукцион по продаже автомобилей имеющих механических повреждений: после дтп, на.воднения, града, пожара. А также автомобили найденные полицией после угона,выставленные страховыми компаниями на продажу после страховки. <br><br>

<span class="r8">Adesa –</span> крупная сеть аукционов на территории Канады, которая торгует автомобилями выкупленными автодилерами в счет оплаты за новый автомобиль. 
 </p>
				

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<!--<div class="container">
		<!--<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div> -->
        <!--<div class="row">
            <div class="col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/service-icon-1.png" alt="" />
					</div>
					<div class="service-desc">
						<h5>Auction1</h5>
						<p>Details About auction</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/service-icon-2.png" alt="" />
					</div>
					<div class="service-desc">
						<h5>Auction2</h5>
						<p>Details About auction</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/service-icon-3.png" alt="" />
					</div>
					<div class="service-desc">
						<h5>Auction3</h5>
						<p>Details About auction</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/service-icon-4.png" alt="" />
					</div>
					<div class="service-desc">
						<h5>Auction4</h5>
						<p>Details About auction</p>
					</div>
                </div>
				</div>
            </div>
        </div>		
		</div>
		-->
	</section>
	<!-- /Section: services -->
	

	

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>НАШ КОНТАКТ</h2>
					

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
           <div class="boxed-grey">
                
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form id="contact-form"  method="post" name="myemailform"  action="form-to-email.php" role="form" class="contactForm">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Имя:</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                       
                        <div class="form-group">
                            <label for="email">
                                Электронная почта:</label>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">
                                Тема:</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Сообщение:</label>
                            <textarea class="form-control" name="comments" rows="5" data-rule="required" data-msg="Please write something for us" placeholder=""></textarea>
                            <div class="validation"></div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <button  onclick="myFunction()" type="submit"  name='submit' value="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Отослать Сообщение</button>
                           <td colspan="2" style="text-align:center">


                    </div>
                </div>
                </form>
            </div> 
        </div> 

        
        
		
		<div class="col-lg-4">
			<div class="widget-contact">
				
				<address>
				 
				<h3 class="phonenu"<abbr title="Phone">Вайбер:
				:</abbr> +1(780)232-0033
				</h3>
				 <h3 class="phonenu"<abbr title="Phone">Канадский номер(моб)
				:</abbr> +1(780)964-4602
				</h3></address>
				<br>
				<!-- <h3><abbr title="viber">Вайбер:
				</abbr> 7802320033 </h3>
				</address> -->


				<address>
				<h3 class="phonenu">
				  Электронная почта:<br>
				  ff_cars@yahoo.com
				  </a>

				  </h3>
				</address>	
									
			
			</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					
                    <div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Squadfree
                        -->
                        © 2018 F & F CARS</a> 
                    </div>
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

    
</body>

</html>
