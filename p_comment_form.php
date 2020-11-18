<?php 


?>



             <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/metismenu/dist/metisMenu.min.css">

    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/metismenu/dist/metisMenu.min.js"></script>

    <script src="main.js"></script>
  
</head>
<body>
    <div class="container-fluid pl-0 pr-0">
        <img src="img/images.jpg" alt="Cinque Terre" width="100%" height="120">
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary-light ">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Doctor
              </a>
              <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-warning active-hover" id="D_Dhaka" href="#">Dhaka</a>
                <a class="dropdown-item text-warning active-hover" id="D_Rajshahi" href="#">Rajshahi</a>
                <a class="dropdown-item active-hover text-warning" href="#">Barishal</a>
                <a class="dropdown-item active-hover text-warning" href="#">Khulna</a>
              
                <a class="dropdown-item active-hover text-warning" href="#">Sylet</a>
                <a class="dropdown-item active-hover text-warning" href="#">Rangpur</a>
                <a class="dropdown-item active-hover text-warning" href="#">Maymansing</a>
                <a class="dropdown-item active-hover text-warning" href="#">Chattagram</a>
              </div>
            </li>
            <li class="nav-item">
            <a class="nav-link active-hover text-light" href="#" id="aboutLink">About</a>
            </li>
          </ul>

          <ul class="form-inline my-2 my-lg-0">
        
          <ul class="nav navbar-nav navbar-right">
  <li>
   
<!-- Button trigger modal -->

<div class="container"> 
    
<div class="container"> 

 <form class="form-horizontal" action="log.php" method="get">
 <button type ="submit" id="signout" name="logout" class="btn btn-primary">Log out</button>
</form>

  </div>

</li>







<li>

          <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
   Create Account
  </button>
  <div class="dropdown-menu bg-success" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item active-hover" href="patient_ac.php">Patient Account</a>
    <a class="dropdown-item active-hover" href="doctor_ac.php">Doctor Account</a>
   
   
  </div>
</div>
</li>

</ul>
      
</ul>

        </div>
      </nav>
      
      <div class="container-fluid pl-0 pr-0">

          <div class="row ml-0 mr-0">

              <div class="col-md-2 col-sm-12 col-xl-2 pl-0 pr-0">
                <nav class="sidebar-nav">
                    <ul class="metismenu" id="menu1">
                      <li>
                        <a class="has-arrow" href="#">
                          <span class="fa fa-fw fa-github fa-lg"></span>
                          Diseases Name
                        </a>
                        <ul aria-expanded="true">
                          <li>
                            <a href="#" id="feverLink">
                              <span class="fa fa-fw fa-code-fork active" id ="fever" > </span>Fever
                            </a>
                          </li>
                      
                          <li>
                            <a href="https:#" id="MalariaLink">
                              <span class="fa fa-fw fa-exclamation-triangle"></span>Malaria
                            </a>
                          </li>
                          <li>
                            <a href="#" id="TyphoidLink">
                              <span class="fa fa-fw fa-star"></span> Typhoid
                            </a>
                          </li>
                          <li>
                            <a href="#" id="DiarrheaLink">
                              <span class="fa fa-fw fa-star"></span>Diarrhea
                            </a>
                          </li>
                          <li>
                            <a href="#" id="TuberculosisLink">
                              <span class="fa fa-fw fa-star"></span> Tuberculosis
                            </a>
                          </li>
                          <li>
                            <a href="#" id="HeartDiseasesLink">
                              <span class="fa fa-fw fa-star"></span> Heart Diseases 
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a class="has-arrow" href="#" aria-expanded="false">Hospital</a>
                        <ul>
                          <li><a class="active" id="H_Dhaka" href="#">Dhaka</a></li>
                          <li><a class="active" id="H_Rajshahi" href="#">Rajshahi</a></li>
                          <li><a href="#">Barishal</a></li>
                          <li><a href="#">Khulna</a></li>
                          <li><a href="#">Sylet</a></li>
                          <li><a href="#">Rangpur</a></li>
                          <li><a href="#">Chattagram</a></li>
                          <li><a href="#">Maymansing</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="has-arrow" href="#" aria-expanded="false">Emargency Help</a>
                        <ul>
                          <li><a class="active" id="Ambulance" href="#">Ambulance</a></li>
                          <li><a href="#">Medicine</a></li>
                          <li><a class="active" id="Blood" href="#">Blood</a></li>
                         
                         
                        </ul>
                      </li>
                      <li>
                        <a class="has-arrow" href="#" aria-expanded="false">Others Help</a>
                        <ul>
                          <li><a href="#">Pending</a></li>
                          <li><a href="#">pending2</a></li>
                         
                         
                        </ul>
                      </li>
                    </ul>
                  </nav>
              </div>




              <div class="col-md-10 col-sm-12 col-xl-10 pl-0 pr-1"  id="con">
            
              <center>
              <h1>WRITE YOUR EMAIL & PROBLEM</h1>
              
              <br>
          </center>
               <center>

          <div class="table-primary" id="table">

              <form class="form-horizontal"  action="patient_comment.php"  method="post">
              
               <div class="control-group">
                <label class="control-label" for="Email">Patient Email:</label>
                <div class="controls">
                  <input type="Email" id="P_Email" name="P_Email" class="form-control"  placeholder="Enter Your Email Again" class="input-large" required="">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="Email">Doctor Email:</label>
                <div class="controls">
                  <input type="Email" id="D_Email" name="D_Email" class="form-control"  placeholder="Enter Doctor Email Again" class="input-large" required="">
                </div>
              </div>

               <div class="control-group">
               <label class="control-label" for="Patient_text"> <h4>Write your Problem:</h4></label>
               <div class="controls">
               <textarea name="text" cols=75 rows=8  placeholder="write your problem" value="text"> </textarea>
               </div>
             </div>
             <center>
            <button type ="submit" id="send" name="patient_text" class="btn btn-primary">Submit</button>
            </center>

            </form>
</div>
</center>






</div>




          <!-- Footer -->
<footer class="page-footer font-small text-light mt-1">

    <div class="container-fluid text-center text-md-left">

      <div class="row">

        <div class="col-md-6 p-3 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold">Help :</h5>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita sapiente sint, nulla, nihil repudiandae commodi voluptatibus corrupti animi sequi aliquid magnam debitis, maxime quam recusandae harum esse fugiat. Itaque, culpa?</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-6 p-3 mb-md-0 mb-3">

          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold">Contact US:</h5>
         <h3> Md. Tamim Hossen </h3>
          <h3>Sakib Ahmed Siddiqui</h3>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Text -->

    <!-- Copyright -->
    <div class="container-fluid footer-copyright text-center py-3">© 2018 Copyright:Teamwork
      
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
      </div>



<script>
  $(function () {

      $('#menu1').metisMenu();

  });






  

$(window, document, undefined).ready(function() {

$('.input').blur(function() {
  var $this = $(this);
  if ($this.val())
    $this.addClass('used');
  else
    $this.removeClass('used');
});

});


$('#tab1').on('click' , function(){
  $('#tab1').addClass('login-shadow');
 $('#tab2').removeClass('signup-shadow');
});

$('#tab2').on('click' , function(){
  $('#tab2').addClass('signup-shadow');
 $('#tab1').removeClass('login-shadow');


});


</script>


<!-- content -->


<script>

$('#aboutLink').on('click', function(){
  document.getElementById('con').innerHTML = '<p><h1>THIS PROJECT DISCRIBE ABOUT HEALTH CARE</h1>'

  +'<h1> THAT CAN BE HELPFULL FOR US</h1> </P>'+'<h2>ITs solve your problem by discuss with expert doctor</h2>'
  +'<h2>ITs solve your problem by discuss with expert doctor</h2>'+
  '<h2>ITs solve your problem by discuss with expert doctor</h2>'+
  '<h2>ITs solve your problem by discuss with expert doctor</h2>';
  
})













//fever

$('#feverLink').on('click', function(){
  document.getElementById('con').innerHTML = '<div class="bg-secondary"> <center><h1 class="text-">FEVER</h1></center></div>'+
  '  <div class="pl-5 text-danger"> <h2><u>Syndrome:</u></h2>'+
    
    '<h3><ol class="text-info">'+
    '<li>feeling cold when nobody else does</li>'+
    '<li>shiveringr</li>'+
    '<li> lack of appetite</li>'+
    '<li>dehydration — preventable if the person drinks plenty of fluids</li>'+
    '<li>depression</li>'+
    '<li>hyperalgesia, or increased sensitivity to pain</li>'+
    '<li>lethargy </li>'+
    '<li>problems concentrating</li>'+
    '<li>sleepiness</li>'+
    '</ol></h3></div>'+
       
    ' <div class="pl-5 text-danger"> <h2><u>Antidots:</u></h2>'+
        
        '<h3><ol class="text-info">'+
        '<li>Non-steroidal anti-inflammatory drugs (NSAIDs) such as aspirin</li>'+
        '<li> The doctor may prescribe an antibiotic.</li>'+
        '</ol></h3></div>'
      ;
})


//malaria
$('#MalariaLink').on('click', function(){
  document.getElementById('con').innerHTML = '<div class="bg-secondary pl-5"> <center><h1 class="text-warning"><b>Malaria<b></h1></center></div>'+
  '  <div class="pl-5 text-danger"> <h2><u>Syndrome:</u></h2>'+
    
'<h3><ol class="text-info">'+
'<li>Shaking chills that can range from moderate to severe</li>'+
'<li>High fever</li>'+
'<li> Profuse sweating</li>'+
'<li>Headache</li>'+
'<li>Nausea</li>'+
'<li>Vomiting </li>'+
'<li>Abdominal pain </li>'+
'<li>	Diarrhea</li>'+
'<li>Anemia</li>'+
'<li>Muscle pain</li>'+
'<li>Convulsions</li>'+
'<li>	Coma</li>'+
'</ol></h3></div>'+
   
' <div class="pl-5 text-danger"> <h2><u>Antidots:</u></h2>'+
    
    '<h3><ol class="text-info">'+
    '<li>Atovaquone-proguanil (Malarone)</li>'+
    '<li>Chloroquine</li>'+
    '<li> Doxycycline</li>'+
    '<li>Mefloquine (Lariam)</li>'+
    '<li>Primaquine</li>'+
    '<li>Tafenoquine (Kozenis)</li>'+
    '</ol></h3></div>'
  ;
})

//Typhoid
$('#TyphoidLink').on('click', function(){
  document.getElementById('con').innerHTML = '<div class="bg-secondary pl-5"> <center><h1 class="text-warning"><b>Typhoid<b></h1></center></div>'+
  '     <div class="pl-5 text-danger"> <h2><u>Syndrome:</u></h2>'+
    
'<h3><ol class="text-info">'+
'<li>Poor appetite</li>'+
'<li>High fever often up to 104 F</li>'+
'<li> Intestinal bleeding or perforation (after two to three weeks of the disease)</li>'+
'<li>Headache</li>'+
'<li>Generalized aches and pains</li>'+
'<li>Vomiting </li>'+
'<li>Abdominal pain and peritonitis </li>'+
'<li>	Diarrhea</li>'+
'<li>Lethargy (usually only if untreated)</li>'+
'</ol></h3></div>'+
   
'     <div class="pl-5 text-danger"> <h2><u>Antidots:</u></h2>'+
    
    '<h3><ol class="text-info">'+
    '<li>Ciprofloxacin (Cipro).</li>'+
    '<li>Azithromycin (Zithromax). </li>'+
    '<li> Ceftriaxone.</li>'+
    '</ol></h3></div>'
  ;
})

//Diarrhea

$('#DiarrheaLink').on('click', function(){
  document.getElementById('con').innerHTML = '<div class="bg-secondary pl-5"> <center><h1 class="text-warning"><b>Diarrhea<b></h1></center></div>'+
  '     <div class="pl-5 text-danger"> <h2><u>Syndrome:</u></h2>'+
    
'<h3><ol class="text-info">'+
'<li>Constipation</li>'+
'<li>Dizziness</li>'+
'<li> Nausea </li>'+
'<li>Ringing sound in the ear (called tinnitus)</li>'+
'<li>Blackened stools and/or tongue</li>'+
'<li>Vomiting </li>'+
'<li>Abdominal pain  </li>'+
'</ol></h3></div>'+
   
'     <div class="pl-5 text-danger"> <h2><u>Antidots:</u></h2>'+
    
    '<h3><ol class="text-info">'+
    '<li>Antibiotics</li>'+
    '<li>Antiviral medicines for human immunodeficiency virus (HIV) </li>'+
    '<li>Prescription pain medicines</li>'+
    '<li>Blood-thinning medicines</li>'+
    '<li>Medicines for gout</li>'+
    '<li>Medicines for arthritis</li>'+
    '</ol></h3></div>'
  ;
})
//Tuberculosis
$('#TuberculosisLink').on('click', function(){
  document.getElementById('con').innerHTML = '<div class="bg-secondary pl-5"> <center><h1 class="text-warning"><b>Tuberculosis<b></h1></center></div>'+
  '     <div class="pl-5 text-danger"> <h2><u>Syndrome:</u></h2>'+
    
'<h3><ol class="text-info">'+
'<li>Coughing that lasts three or more weeks</li>'+
'<li>Coughing up blood</li>'+
'<li> Chest pain, or pain with breathing or coughing </li>'+
'<li>Unintentional weight loss</li>'+
'<li>Blackened stools and/or tongue</li>'+
'<li>Fatigue </li>'+
'<li>Fever </li>'+
'<li>Night sweats</li>'+
'<li>Loss of appetite</li>'+
'</ol></h3></div>'+
   
'     <div class="pl-5 text-danger"> <h2><u>Antidots:</u></h2>'+
    
    '<h3><ol class="text-info">'+
    '<li>Isoniazid</li>'+
    '<li>Rifampin (Rifadin, Rimactane)</li>'+
    '<li>Ethambutol (Myambutol)</li>'+
    '<li>Pyrazinamide</li>'+
    '<li>Bedaquiline</li>'+
    '<li>Linezolid</li>'+
    '</ol></h3></div>'
  ;
})

// Heart Diseases 
$('#HeartDiseasesLink').on('click', function(){
  document.getElementById('con').innerHTML = '<div class="bg-secondary pl-5"> <center><h1 class="text-warning"><b>Heart Diseases <b></h1></center></div>'+
  '     <div class="pl-5 text-danger"> <h2><u>Syndrome:</u></h2>'+
    
'<h3><ol class="text-info">'+
'<li>Shortness of breath noted during activity (most commonly) or at rest, especially when you lie down flat in bed</li>'+
'<li>Cough that produces white sputum.</li>'+
'<li> Rapid weight gain (a weight gain of two or three pounds in one day is possible.) </li>'+
'<li>Swelling in ankles, legs, and abdomen</li>'+
'<li>Dizziness</li>'+
'<li>Fatigue and weakness </li>'+
'<li>Rapid or irregular heartbeats </li>'+
'<li>Other symptoms include nausea, palpitations, and chest pain.</li>'+
'</ol></h3></div>'+
   
'     <div class="pl-5 text-danger"> <h2><u>Antidots:</u></h2>'+
    
    '<h3><ol class="text-info">'+
    '<li>Angiotensin II receptor blockers (ARBs):</li>'+
    '<li>Beta-blockers</li>'+
    '<li>Calcium channel blockers:</li>'+
    '<li>Cholesterol-lowering drugs:</li>'+
    '<li>ACE inhibitors: </li>'+
    '</ol></h3></div>'
  ;
})


</script>


<!-- DOCTOR INformation -->

<script>

//D_Dhaka

$('#D_Dhaka').on('click', function(){
  document.getElementById('con').innerHTML = '<div class="bg-dark text-light"> <center><h1 >Doctor`s Information For DHAKA City</h1></center></div>'+
  //1
  
  '<h3 class="text-danger"> <b><center>Prof. Dr. Sayeed Ahmed Siddique</h3> '+
        '<h4><b><center>Health in Dhanmondi</h4>'+
'<h4><b><center>Address</h4>'+
'<h5><center>Prof. of PDC Hospital, Formed Prof. & Head of the Dept. of plastic surgery, ZHSW Medical College Haspital. </h5>'+
'<h5><center>Cham # Shankar Plaza (5th floor), 72 Satmosjit Road.New Market.. P.C. 1205, Dhanmondi, Dhaka.</h5>'+'<br><br>'+

//2
'<h3 class="text-info"> <b><center>Dr. M. Ahmed </h3> '+
        '<h4><b><center>Health in Mohammadpur (Dhaka)</h4>'+
'<h4><b><center>Address</h4>'+
'<h5><center>Cham # Macks Homeo Hall & Online Homeo Clinic, 183-184 Krishi Market Shopping Complex (Near Maxi Stand & Opposite to JGC), Ring Road.Mohammadpur Housing.. P.C. 1207, Mohammadpur (Dhaka), Dhaka.</h5>'
+'<br><br>'


//3
+'<h3 class="text-success"> <b><center>Professor (dr.) m. alimuzzaman  </h3> '+
      '<h4><b><center>Medicine in Dhanmondi</h4>'+
'<h4><b><center>Address</h4>'+
'<h5><center>Flat #F-3, House #27, Road #14-A , Dhanmondi R/A. Jigatala.. P.C. 1209,Dhanmondi, Dhaka.</h5>' +'<br><br>'

//4
+'<h3 class="text-danger"> <b><center>Professor (dr.) tareq-al-nasir  </h3> '+
      '<h4><b><center>Pathology in Khilkhet</h4>'+
'<h4><b><center>Address</h4>'+
'<h5><center>Plot #81, Bock E, Bashundhara R/A , Apollo Hospitals. Khilkhet.. P.C. 1229,Khilkhet, Dhaka.</h5>' +'<br><br>'
//5
+'<h3 class="text-info"> <b><center>Professor (dr.) k. dutta </h3> '+
      '<h4><b><center>Medicine in Khilkhet</h4>'+
'<h4><b><center>Address</h4>'+
'<h5><center>Plot #81, Block-E, Bashundhara R/A , Apollo Hospitals. Khilkhet.. P.C. 1229,Khilkhet, Dhaka.</h5>' +'<br><br>'


 ;


})


//D_Rajshahi


$('#D_Rajshahi').on('click', function(){
  document.getElementById('con').innerHTML = '<div class="bg-dark text-warning"> <center><h1>Doctor`s Information For Rajshahi City</h1></center></div>'+
  //1
  
  '<h3 class="text-danger"> <b><center>Dr. Mohammad Azizul Haque (Azad)</h3> '+
        '<h4><b><center>MCPR (UK), FCPR Medicine,Assistant Professor of Rajshahi Medical College and Hospital</h4>'+
'<h4><b><center>Address</h4>'+
'<h5><center>Rajshahi,Laxmipur</h5>'+
'<h5><center>Chamber Phone Number: 0721771724, 01724550544 (Pervez) </h5>'+
'<h5><center>Night from 4:00 to 9:00 pm</h5>'+'<br><br>'

//2

+'<h3 class="text-success"> <b><center>Dr. Zahirul  </h3> '+
      '<h4><b><center>MBBS, (D MC) FCPR (Medicine)</h4>'+
'<h4><b><center>Address</h4>'+
'<h5><center>The pathology, Laxmipur, Rajshahi.</h5>' +
'<h5><center>Chamber Phone Number: 0721772123</h5>' +
'<h5><center>While viewing the patient: from 4:00 pm until 5:30 pm.</h5>' +
'<br><br>'
//3
+'<h3 class="text-info"> <b><center>Dr. Mohammad Azizul Haque </h3> '+
      '<h4><b><center>MBBS, MD (Internal Medicine),Medicine specialist and rheumatologist</h4>'+
      '<h4><b><center>Associate Professor, Medicine, Rajshahi Medical College Hospital.</h4>'+
'<h4><b><center>Address</h4>'+
'<h5><center>The pathology, Laxmipur, Rajshahi.</h5>' +
'<h5><center>Chamber phone number: 0721771146, 0721771147, 0711192600</h5>' +
'<h5><center>evening from 4:00 pm until 7:00 pm</h5>' +
'<br><br>'


//4
+'<h3 class="text-success"> <b><center>Prof. Dr. Saifuddin Ekram </h3> '+
      '<h4><b><center>FCPR (Medicine), FAO CPR, pHD (USA)</h4>'+
  
'<h4><b><center>Address</h4>'+
'<h5><center>The pathology, Laxmipur, Rajshahi and Ziliya Medicare, Laxmipur, Rajshahi.</h5>' +
'<h5><center>The pathology: 0721772123 and Ziliya Medicare: 0721773325</h5>' +
'<h5><center>The pathology Time: 7:00 pm at night from 8:00 pm to 3:30 pm and from 6:00 pm to pm (Thursday and Friday)</h5>' +
'<br><br>'

 ;


})




  </script>

<!-- HOSPITAL -->
<script>
//Dhaka
$('#H_Dhaka').on('click', function(){
  document.getElementById('con').innerHTML = '<div class="bg-dark text-warning"> <center><h1>Hospital Information For Dhaka City </h1></center></div>'+
 


//8
 '<center><h3>'+'<a href=" https://www.squarehospital.com/"> Square:</a></h3>'+
 //9
 '<center><h3>'+'<a href="https://www.cityhospitalbd.com/">City Hospital:</a></h3>'+
 //10
 '<center><h3>'+'<a href="http://www.uhlbd.com/">United Hospital:</a></h3>'+
 
 //1
 '<center><h2 class="text-danger"><u> <b>Ad-Din Hospital</u><h2>'+
 '<center><h3 class="text-dark"> <b>Address<h3>'+
 '<center><h4 class="text-dark"> Moghbazar, Dhaka, ph- 9353391-3 <h4><br><br>'+
 //2
 '<center><h2 class="text-danger"><u> <b>Ahmed Medical Centre Ltd.</u><h2>'+
 '<center><h3 class="text-dark"> <b>Address<h3>'+
 '<center><h4 class="text-dark"> House # 71, Road # 15-A, (New), Dhanmondi C/A, ph- 8113628<h4><br><br>'+
//3
 
'<h2><center><b><u>'+'<a href="http://www.apollodhaka.com/"> Apollo:</a></h2>'+
 '<center><h3 class="text-dark"> <b>Address<h3>'+
 '<center><h4 class="text-dark"> Bashundhar r/a, Dhaka, PABX : (02) 8401661- 5, Ambulance : 01714-090000, Duty Manager : 01713-064563, Master Health Check : 8401600<h4><br><br>'+
//4
'<center><h2 class="text-danger"><u> <b>Bangladesh Heart & Chest Hospital</u><h2>'+
 '<center><h3 class="text-dark"> <b>Address<h3>'+
 '<center><h4 class="text-dark"> Road # 27 (Old), 16 (New), House # 47, Dhanmondi, ph- 9114266, 8123977<h4><br><br>'+
//5
'<center><h2 class="text-danger"><u> <b>Bangladesh Medical College</u><h2>'+
 '<center><h3 class="text-dark"> <b>Address<h3>'+
 '<center><h4 class="text-dark"> House # 35, Road # 14/A, Dhanmondi, ph- 9118202, 8115843<h4><br><br>'+
//6
'<center><h2 class="text-danger"><u> <b>China-Bangla Hospital (Jv) Ltd.</u><h2>'+
 '<center><h3 class="text-dark"> <b>Address<h3>'+
 '<center><h4 class="text-dark">Plot # 1, Road # 7, Sector # 1, Uttara, ph- 8913674, 8913606<h4><br><br>'

})

//H_Rajshahi

$('#H_Rajshahi').on('click', function(){
  document.getElementById('con').innerHTML = '<div class="bg-dark text-warning"> <center><h1>Hospital Information For Rajshahi City </h1></center></div>'+
 


//8
 '<center><h2>'+'<a href=" http://rmch.gov.bd/"> Rajshahi Medical College Hospital:</a></h2>'+
 //9
 '<center><h2>'+'<a href="http://bmc.edu.bd/">Barind Medical College Hospital</a></h2>'+
 //10
 '<center><h2>'+'<a href="http://www.amanahospital.com/">Amana Hospital Ltd</a></h2>'+
 '<center><h2>'+'<a href="http://smmchbd.com/">Shah Mokhdum Medical College</a></h2>'+
 
 //1
 '<center><h2 class="text-danger"><u> <b>Al-Arafa Clinic</u><h2>'+
 '<center><h3 class="text-dark"> <b>Address<h3>'+
 '<center><h4 class="text-dark"> Bornali More, Rajshahi <h4><br><br>'+
 //2
 '<center><h2 class="text-danger"><u> <b>City Diagnostic Centre</u><h2>'+
 '<center><h3 class="text-dark"> <b>Address<h3>'+
 '<center><h4 class="text-dark">Private Hospital & Clinic, Rajshahi, Rajshahi Sadar, Rajshahi<h4><br><br>'+
//3
 
'<center><h2 class="text-danger"><u> <b>Islami Bank HospitalLaxmipur</u><h2>'+
 '<center><h3 class="text-dark"> <b>Address<h3>'+
 '<center><h4 class="text-dark"> Private Hospital & Clinic Rajshahi, Rajshahi Sadar, Rajshahi<h4><br><br>'

;

})



</script>








<!-- Ambulance -->
<script>
$('#Ambulance').on('click', function(){
  document.getElementById('con').innerHTML = '<div class="bg-dark text-warning"> <center><h1 >Ambulance Information</h1></center></div>'+
  
  '<h3 class="text-danger"><u><center><b> DHAKA EMERGENCY AMBULANCE PHONE NUMBERS </u></h3>'+'<br>'+
  '<center><table border="2px" width="800px">'+
  '<tr>'+
  '<td>'+'<center>'+'<b>'+'<center>'+'Dhaka Zone'+'</td>'+
  '<td>'+'<center><b>'+'Phone Number'+'</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+'Fire Service Ambulance'+'</td>'+
  '<td>'+'Tel: 9556666, 9555555'+'</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+'Anju-Man-e-Mafidul Islam'+'</td>'+
  '<td>'+'Tel: 9336611, 7411660, 7410786'+'</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+'Al-Markazul lslami Ambulance Service'+'</td>'+
  '<td>'+'Tel: 9127867, 8114980'+'</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+'Apanjon Ambulance Service'+'</td>'+
  '<td>'+'Tel: 9125420'+'</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+'BSMMU'+'</td>'+
  '<td>'+'Tel: 9661551-60, 8616641-50'+'</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+'BARDEM'+'</td>'+
  '<td>'+'Tel : 9661551-60, 8616641-50 Ext-2301'+'</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+'BNSB.Dhaka Eye Hospital'+'</td>'+
  '<td>'+'Tel: 8014476'+'</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+'Day-Night Ambulance Service'+'</td>'+
  '<td>'+'Tel: 9123073, 8122041'+'</td>'+
  '</tr>'


 
 +'</table></center>'+'<br><br><br>'+




  '<h3 class="text-info"><u><center><b> RAJSHAHI EMERGENCY AMBULANCE PHONE NUMBERS </u></h3>'+'<br><br>'+
  '<center><table border="2px" width="800px">'+
  '<tr>'+
  '<td>'+'<center>'+'<b>'+'<center>'+'Rajshahi Zone'+'</td>'+
  '<td>'+'<center><b>'+'Phone Number'+'</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+'Ambulance Service, Rajshahi'+'</td>'+
  '<td>'+'Phone: +88-01716-129375'+'</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+'Medical College Ambulance'+'</td>'+
  '<td>'+'Phone: 776000-9, 774335'+'</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+'Paba Medical Hospital Ambulance'+'</td>'+
  '<td>'+'Phone: 775709, 775606'+'</td>'+
  '</tr>'
 +'</table></center>'



;




})


</script>

<!-- Blood -->

<script>

$('#Blood').on('click', function(){
  document.getElementById('con').innerHTML = '<div class="bg-dark text-warning"> <center><h1 >Emergency Blood Information</h1></center></div>'+
 '<center><h2 class="text-danger"><u> <b>DHAKA ZONE<h2><br>'+
 
 
 
 '<h3><center>'+'<a href="https://www.facebook.com/BloodDonorsClub.bd/?ref=br_rs"> Blood Donors Club Bangladesh</a></h3>'+
 '<center><h3>'+'<a href=" https://www.facebook.com/bdbloodbank/?ref=br_rs"> Bangladesh Blood Bank</a></h3>'+
 '<center><h3>'+'<a href="https://www.facebook.com/online.blood.bank.bd/?ref=br_rs">Online Blood Bank of Bangladesh</a></h3>'+
 '<center><h3>'+'<a href="https://www.facebook.com/groups/sumanhosen48/?ref=br_rs">Blood Donation Group in Dhaka</a></h3>'
})
</script>


</body>
</html>


        