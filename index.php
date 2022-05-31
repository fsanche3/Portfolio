<?php

$msg= '';
$msgClass = '';

if (filter_has_var(INPUT_POST, 'submit')) {
  // code...
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (!empty($email) && !empty($name) && !empty($message)) {

  if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    // code...
    $msg = 'Please use a valid email';
    $msgClass = 'alert-danger';
  } else {
    $toEmail = 'fsanche3@oswego.edu';
    $body = '<h2> Contact Request</h2>
          <h4> Name </h4><p> '.$name.'</p>
          <h4> Email </h4><p> '.$email.'</p>
          <h4> Subject </h4><p> '.$subject.'</p>
          <h4> Message </h4><p> '.$message.'</p> ';

          $headers = "MIME-Version: 1.0" ."\r\n";
          $headers .= "Content-Type:text/html;charset=UTF-8" ."\r\n";

          $headers .= "From: " .$name. "<".$email. ">" ."\r\n";

          if (mail($toEmail, $subject, $body, $headers)) {
            $msg = "Thanks for your message, Well be in touch.";
            $msgClass = 'alert-success';
          } else {
            $msg = "Your email was not sent";
            $msgClass = "alert-success";
          }
  }

}
else
{

$msg = 'Please Fill in all fields';
$msgClass = 'alert-danger';

}
}

 ?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name ="viewport" content= "width=device-width, initial-scale=1.0">
<title> F.S. Portfolio </title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>

<body>

<div class="wrap">

<header>
  <div class="nav-bar">
    <a href="#" class="logo"> Franklyn Sanchez </a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
      <div class="navigation" onclick="toggleMenu();">
        <a class="active" href="#">Home</a>
        <a href="#about">About</a>
        <a href="#projects">Projects</a>
        <a href="#contanct">Contact</a>
        <a href="res.html"><i>Resume</i></a>
      </div>
    </div>
</header>

<section class="banner" id="banner">
  <div class="content">
    <div class="box">
      <h2> <i>Hello</i> 👋</h2>
      <p>My name is Franklyn Sanchez and i am a passionate full stack developer
      that enjoys designing useful software and applying it to real world models. </p>
      <div class="btn-group">
      <a href="#about" class="color1"> About me</a>
      <a href=""> <i>Resume</i> </a>
    </div>
  </div>
</div>
</section>

<a href="#projects" class="scroll-down"> Projects <i class="fas fa-arrow-down"> </i></a>
</div>

<section class="about" id="about">
<h2><span>A</span>bout</h2><hr>
<p>
I recently graduated from Suny Oswego this May of 2022 with a bachelor’s
 degree in Information Science and a minor in Communications. During my time there,
  I applied programming languages and scripting languages such as Java, Golang, JavaScript,
   and PHP. I also gathered experience working with API’s and database management tools such
    as MySQL and Tableau to aid full stack development. So far, I have enjoyed applying these skills
     to my own personal projects and I look forward to continue learning and growing as a developer.
</p>

</section>

<section class="projects" id="projects">
<h2><span>P</span>rojects</h2><hr>

<div class="container">
<section>
  <div class="overlay">

<div class="description">
                <p>
                  Designed an Exoplanet Archive.
                </p>

                <h6>Tools<span class="glyphicon glyphicon-cog"></span></h6>
                <ul class="tools vertical-list">
                  <li>Golang</li>
                  <li>MySQL</li>
                  <li>PHP + JavaScript</li>
                  <li>HTML + CSS</li>
                  <li>Tabluea</li>
                </ul>

                <div class="project-btn-grp">
                <a href="https://github.com/SUNY-Oswego-ISC-496/fsanche3-agent"><button class="project-btn github"> Code </button></a>
                <a href="https://cs.oswego.edu/~fsanche3/exo/"><button class="project-btn live"> Link </button></a>
                </div>

              </div>
              <img src="exo.jpg" alt="">
<h4 style="text-align:center;" class="heading">The Exoplanet Archive <br><hr>(Full Stack)</h4>

</div>
</section>
<section>
  <div class="overlay">

<div class="description">
                <p>
                  Designed a website for my local barbershop.
                </p>

                <h6>Tools</h6>
                <ul class="tools vertical-list">
                  <li>JavaScript</li>
                  <li>HTML + CSS</li>
                </ul>

                <div class="project-btn-grp">
              <a href="https://github.com/fsanche3/cnybarber"><button class="project-btn github"> Code </button></a>
              <a href="https://cnyelitebarbershop.github.io/_/" > <button class="project-btn live"> Link </button></a>
                </div>

              </div>
              <img src="cny.png" alt="">
<h4 style="text-align:center;" class="heading">CNY Elite Barbershop <br><hr>(Front End)</h4>

</div>
</section>

<section>
  <div class="overlay">

<div class="description">
                <p>
                  A webpage containing source code and displaying outputs of
                 object oriented programming with Java.
                </p>

                <h6>Tools</h6>
                <ul class="tools vertical-list">
                  <li>Java</li>
                </ul>

                <div class="project-btn-grp">
              <a href="https://cs.oswego.edu/~fsanche3/CS1Files/"> <button class="project-btn live"> Link </button></a>
                </div>

              </div>
              <img src="CS1.png" alt="">
<h4 style="text-align:center;" class="heading"> CSC Worksite <br><hr>(OOP)</h4>
<br>
</div>
</section>

<section>
  <div class="overlay">

<div class="description">
                <p>
                  My Portfolio page.
                </p>

                <h6>Tools</h6>
                <ul class="tools vertical-list">
                  <li>HTML + CSS</li>
                      <li>PHP + JavaScript</li>
                </ul>

                <div class="project-btn-grp">
              <a href="https://fsanche3.github.io/Portfolio/"> <button class="project-btn live"> Link </button></a>
                </div>

              </div>
              <img src="CS1.png" alt="">
<h4 style="text-align:center;" class="heading"> Portfolio webpage <br><hr>(Front end)</h4>
<br>
</div>
</section>


</section>
</div>


<?php if ($msg != ''): ?>
<div class="alert <?php echo $msgClass; ?>"> <?php echo $msg;?></div>
<?php endif; ?>
<section class="contact" id="contanct">
<h2><span>C</span>ontact Me</h2><hr>

  <form action="<?php echo $_SERVER['PHP_SELF'] ;?>" class=".contact_form" method="post">
    <input name="name" class="name" type="text" id="name" placeholder="Your Name" required>
    <input name="email" class="email" id="email" placeholder="Email" required>
    <input name="subject" class="subject" id="subject" placeholder="Subject" required>
    <textarea name="message" class="massage" rows="4" placeholder="Your Message"></textarea>
    <button name="submit" type="submit"> Send</button>
  </form>

</section>



<script type="text/javascript">
window.addEventListener('scroll', function(){
  const header = document.querySelector('header');
  header.classList.toggle('sticky', window.scrollY > 0);
});

function toggleMenu(){
  const menuToggle = document.querySelector('.menuToggle');
  const navigation = document.querySelector('.navigation');
  menuToggle.classList.toggle('active');
  navigation.classList.toggle('active');
}
</script>
</body>
</html>
