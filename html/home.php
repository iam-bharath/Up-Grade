<?php include('layouts/header.php'); ?>

<?php if (!$session->is_logged_in()) { redirect_to("login.php"); } ?>
<!-- <?php
    // Find all the topics
    $topics = Topic::find_all_topics();

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>E-Public Service</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
        margin: 20px;
        
    }
    button {
    background-color: transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
}
    
</style>
</head>
<body>
<!-- <div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="#" class="navbar-brand">
            <img src="pictures/emblem-gold.png" height="35" alt="Public Service">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="home.html" class="nav-item nav-link active"><b>Home</b></a>
                <a href="editorial.html" class="nav-item nav-link"><b>Editorials</b></a>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><b>Exams</b></a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item"><b>Upsc CSE</b></a>
                    <a href="#" class="dropdown-item"><b>CDS</b></a>
                    <a href="#" class="dropdown-item"><b>SSC CGL</b></a>
                    <a href="#" class="dropdown-item"><b>CAPF</b></a>
                </div>
            </div>
            <a href="e-lib.html" class="nav-item nav-link"><b>E-Library</b></a>
                 <a href="employment.html" class="nav-item nav-link"><b>Recruitments</b></a>

            </div>
            <div class="navbar-nav ml-auto">
               <button onclick="#"><b>Login</b></button>
            </div>
        </div>
    </nav>
</div> -->

    
    <!-- <style>
    body { -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; font-family: 'Overpass', sans-serif; letter-spacing: 0px; font-size: 17px; color: black; font-weight: 400; line-height: 32px; background-color: white; }
h1, h2, h3, h4, h5, h6 { color: #25292a; margin: 0px 0px 10px 0px; font-family: 'Overpass', sans-serif; font-weight: 700; letter-spacing: -1px; line-height: 1; }
h1 { font-size: 34px; }
h2 { font-size: 28px; line-height: 38px; }
h3 { font-size: 22px; line-height: 32px; }
h4 { font-size: 20px; }
h5 { font-size: 17px; }
h6 { font-size: 12px; }
p { margin: 0 0 20px; line-height: 1.7; }
p:last-child { margin: 0px; }
ul, ol { }
a { text-decoration: none; color: #8d8f90; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; transition: all 0.3s; }
a:focus, a:hover { text-decoration: none; color: #f85759; }



.page-header { background: url(upsc.jpg)no-repeat; position: relative; background-size:contain;width:100%; }
.page-caption { padding-top: 170px; padding-bottom: 174px; }
.page-title { font-size: 46px; line-height: 1; color: #fff; font-weight: 600; text-align: center; }

.card-section { position: relative; bottom: 60px; }
.card-block { padding: 80px; }
.section-title { margin-bottom: 60px; }
  }
        
       
    </style>
   -->
   <style>
     .page-header { background: url(upsc.jpg)no-repeat; position: relative; background-size:contain;width:100%; }
   </style>
    
    <div class="jumbotron text-center" >
  <h1>Company</h1> 
  <p>We specialize in blablabla</p> 
  
</div>
    <!-- /.page-header-->
    <!-- news -->   
    <div class="card-section">
        <div class="container">
            <div class="jumbotron">
            <div class="card-block >
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- section-title -->
                        <div class="section-title mb-0">
                            <h2>All about Hike. We share our knowledge on blog</h2>
                            <p>Our approach is very simple: we define your problem and give the best solution. </p>
                        </div>
                        <!-- /.section-title -->
                    </div>
                </div>
            </div>
            </div>
    
    
    
      <style>


.sidenav {
  width: 150px;
  position: fixed;
  z-index: 1;
  top: 110px;
  left: 10px;
  background: #F8F9F9;
  overflow-x: hidden;
  padding: 8px 0;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 18px;
  color: #566573;
  display: block;
}

.sidenav a:hover {
  color: #064579;
}

.main {
  margin-left: 140px; /* Same width as the sidebar + left position in px */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
    <a href="#section1"><b>Why UPSC?</b></a>
    <a href="#section2"><b>Newspaper</b></a>
    <a href="#section3"><b>Big News</b></a>
    <a href="#section4"><b>Contact</b></a>
</div>
    
    
    <div class="container">
  <div class="jumbotron">
      <div id="section1"></div>
    <h1>Why UPSC?</h1>      
    <p>Wondering why choose UPSC Civil Services as a career option? Whether you are fresh out of college or studying to earn your bachelor’s degree, you may consider a career in the civil services. The Union Public Service Commission or UPSC offers some of the most prestigious and honourable job titles in India. Being a public servant, you will not only be able to serve your country, but you will also earn a decent living. Titles such as IPS, IFS and IAS attract some of the best talents from different corners of India. That means you have to compete against some brilliant minds and also crack some of the toughest exams to land your dream job.<br><br>

        <b>1. Honour and prestige:</b>
Yes, being a civil servant comes with a lot of perks. Aside from a hefty salary, the government also provides you with good accommodation and a car with the red beacon. However, all the materialist things aside, the job also gives you unparalleled respect and prestige. If you have always dreamed of being honoured among your peers, this will be your time to shine. People around you will always look up to you for your achievements. You may also get a chance to represent India on international platforms such as The World Trade Organization and the United Nations.<br><br>

        <b>2. Power:</b>

The UPSC civil services take you to a position of power. Here, you will be making decisions and creating policies that will impact the entire nation. If you did not know, it is the IAS officers who are the real brains behind the major policies announced by politicians. For example, as an IRS officer, you will be responsible for keeping the government exchequer in good shape. On the other hand, as an IAS officer, you will be in charge of maintaining law and order in the country. All in all, you will play a crucial role in running the nation.<br><br>

        <b>3. A chance to bring in real change:</b>

When wondering “is civil service a good career for me,” ask yourself if you want to have a real effect in the society. If you feel like India can do so much better as a nation and for its people, now you can do something about it. Instead of complaining and throwing accusations at people of power, you can make real change through your actions. What you can do can not only determine the fate of the country, but it can also impact millions of the lives. For example, in the event of the Uttarakhand floods, it was the District Magistrate’s responsibility to distribute government provided relief material and compensation. Being able to help so many people is a hugely rewarding experience!</p>
  </div>     
</div>
    
    
<div class="container">
    <div id="section2"></div>
    <h1><b>Todays Newspapers</b></h1>
  <p>Get updated with todays news paper.</p>
 
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://www.thehindu.com/" target="_blank">
          <img src="pictures/thehindu.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p><b>Todays Hindu as dated <p id="date"></p></b></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://indianexpress.com" target="_blank">
          <img src="pictures/The-New-Indian-Express.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p><b>Todays Indian Express as dated <p id="date1"></p></b></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://www.thehindu.com/opinion/editorial/" target="_blank">
          <img src="pictures/The-Hindu%20editorial.png" alt="Fjords" style="width:100%">
          <div class="caption">
            <p><b>Todays Editorial as dated <p id="date2"></p></b></p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
        
    <div class="container">
    <div class="jumbotron">
        <div id="section3"></div>
    <div class="bs-example">
        <h1>Big News!</h1>
     <a href="https://www.thehindu.com/todays-paper/modi-dares-oppn-on-art-370/article29677206.ece"><p style="color: #566573"><b>Modi dares Oppn. on Art. 370</b></p></a>
    <a href="https://www.thehindu.com/news/national/first-private-train-violates-railway-tariff-law/article29674312.ece"><p style="color: #566573"><b>India’s first private train violates railway tariff law
</b></p></a>
    <a href="https://www.thehindu.com/news/national/section-144-imposed-in-ayodhya-till-december-10/article29675812.ece?homepage=true"><p style="color: #566573"><b>Section 144 imposed in Ayodhya till December 10
</b></p></a>
     <a href="https://www.thehindu.com/opinion/editorial/chennai-connect-on-xi-modi-informal-summit/article29675445.ece?homepage=true"><p style="color: #566573"><b>Chennai Connect: On Xi-Modi informal summit

</b></p></a>
        <a href="https://www.thehindu.com/opinion/editorial/prize-for-peace-on-nobel-for-ethiopia-pm/article29675465.ece"><p style="color: #566573"><b>Prize for peace: On Nobel for Ethiopia PM</b></p></a>
</div>  
    </div>
    </div>
    
    
    
    
    
    
    
    
<script>
n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = d + "/" + m + "/" + y;
document.getElementById("date1").innerHTML = d + "/" + m + "/" + y;
document.getElementById("date2").innerHTML = d + "/" + m + "/" + y;

</script>
</body>
</html>                            