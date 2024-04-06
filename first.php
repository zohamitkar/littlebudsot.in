<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website create by win coder</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <img src="logo.png" alt="logo" class="logo-icon"> <strong>littleBuds.OT</strong> </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#specialization">specialization</a>
        <a href="#appointment">appointment</a>
        <a href="#doctor">doctor</a>
        <a href="#review">review</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>What is paediatric occupational therapy?</h3>
        <p> Paediatric occupational therapy applies specialist approaches and techniques to maximise a child’s engagement, achievement and independence in all activities, including those at school, play, leisure and self care skills such as dressing and feeding.</p>
            <p>Our paediatric occupational therapists work with babies and children. With an expert understanding of child development and paediatric conditions, they analyse why a child may be struggling to carry out specific tasks to then devise a bespoke treatment plan to address the specific issues.</p>
        <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="about-img.svg" alt="about-img">
        </div>

        <div class="content">
            <h3>Our approach</h3>
            <p>We aim to provide timely and practical advice to parents, guardians and schools for the treatment and management of any difficulties that a child is experiencing. Helping a child overcome challenges needs to be a 24 hour approach and not solely focused on the time each week that they are with their occupational therapist. Our collaborative approach aims to ‘up skill’ the people that surround and support a child in their daily life to ensure that they have the knowledge and skills to maximise a child’s independence. Our role is to help children and their families become as independent as possible, as soon as possible, through result driven occupational therapy delivered by expert therapists.</p>
            <h3>Common difficulties we treat</h3>
             <i class="fas fa-chevron-right"></i><span>Gross motor skills</span><br>
             <i class="fas fa-chevron-right"></i><span>Fine motor skills</span><br>
             <i class="fas fa-chevron-right"></i><span>Visual perceptual skills</span><br>
             <i class="fas fa-chevron-right"></i><span>Self care skills</span><br>
             <i class="fas fa-chevron-right"></i><span>Organisation skills</span><br>
             <i class="fas fa-chevron-right"></i><span>Handwriting</span><br>
             <i class="fas fa-chevron-right"></i><span>Confidence</span><br>
             <i class="fas fa-chevron-right"></i><span>Balance & coordination</span><br>

        </div>

    </div>

</section>

<!-- about section ends -->
<!-- specialization section starts  -->

<section class="specialization" id="specialization">
    <h1 class="heading">specialization <span>in</span></h1>
        <div class="box-container">

        <div class="box">
            <div class="image-container">
                <img src="Sensory Processing Disorder.png" alt="Sensory Processing Disorder">
            </div>
            <h3>Sensory Processing Disorder</h3>
            <a href="https://familydoctor.org/condition/sensory-processing-disorder-spd/#:~:text=Sensory%20processing%20disorder%20(SPD)%20is,that%20other%20people%20are%20not." class="btn" style="margin-top: 60px;"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="Dyspraxia.jpg" alt="Dyspraxia">
            </div>
            <h3>Dyspraxia / Developmental Coordination Disorder</h3>
            <a href="https://my.clevelandclinic.org/health/diseases/23963-dyspraxia-developmental-coordination-disorder-dcd" class="btn" style="margin-top: 20px;"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>


        <div class="box">
            <div class="image-container">
                <img src="Autism.avif" alt="cerebral palsy">
            </div>
            <h3>Autism</h3>
            <a href="https://www.who.int/news-room/fact-sheets/detail/autism-spectrum-disorders#:~:text=Autism%20%E2%80%93%20also%20referred%20to%20as,not%20diagnosed%20until%20much%20later." class="btn" style="margin-top: 130px;"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>



        <div class="box">
            <div class="image-container">
                <img src="cerebral palsy.jpg" alt="cerebral palsy">
            </div>
            <h3>cerebral palsy</h3>
            <a href="https://www.mayoclinic.org/diseases-conditions/cerebral-palsy/symptoms-causes/syc-20353999#:~:text=Overview,palsy%20may%20have%20exaggerated%20reflexes." class="btn" style="margin-top: 130px;"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>


        <div class="box">
            <div class="image-container">
                <img src="adhd.jpg" alt="adhd">
            </div>
            <h3>Attention-Deficit/Hyperactivity Disorder </h3>
            <a href="https://my.clevelandclinic.org/health/diseases/4784-attention-deficithyperactivity-disorder-adhd" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>


        <div class="box">
            <div class="image-container">
                <img src="learningdiablilties.jpg" alt="learningdiablilties">
            </div>
            <h3>Learning difficulties disorder</h3>
            <a href="https://www.cdc.gov/ncbddd/developmentaldisabilities/learning-disorder.html" class="btn" style="margin-top: 10px;"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>



        <div class="box">
            <div class="image-container">
                <img src="behaviour.jpg" alt="behaviour">
            </div>
            <h3>Behavioural Concerns</h3>
            <a href="https://www.cdc.gov/childrensmentalhealth/behavior.html#:~:text=Children%20sometimes%20argue%2C%20are%20aggressive,over%20time%2C%20or%20are%20severe." class="btn" style="margin-top: 50px;"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="socialdifficulties.jpg" alt="socialdifficulties">
            </div>
            <h3>social difficulties</h3>
            <a href="https://raisingchildren.net.au/guides/a-z-health-reference/scd" class="btn" style="margin-top: 90px;"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>





    </div>

</section>

<!-- specialization section ends -->


<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>

            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="tel"name="number" pattern="[0-9]*" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->


<!-- doctors section starts  -->

<section class="doctor" id="doctor">

    <h1 class="heading"> our <span>therapist</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="afsha.jpg" alt="">
            <h3>Dr. Afsha Mitkar (Shaikh)</h3>
            <span>(occupational therapist)</span>
            <div class="share">
            <a href="https://www.facebook.com/littlebudsot?mibextid=ZbWKwL" class="fab fa-facebook-f"></a>
                <a href="https://www.instagram.com/littlebuds.ot?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="fab fa-instagram"></a>

            </div>
        </div>
    </div>
</section>

<!-- doctors section ends -->
<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="women3.png" alt="">
            <h3>Shilpi Lamba</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text"><span><strong> Little Buds Occupational Therapy</strong></span> was recommended to us by our son's pediatrician and we got him enrolled in January. <span><strong>Dr. Afsha</strong></span> is his therapist and has done a remarkable job in addressing the behavioural issues he had so far. She's really sweet and knows very well what works best for the kids.
                Our kid thoroughly enjoys and looks forward to his OT sessions. We feel that coming here was worth our time and money.</p>
        </div>

        <div class="box">
            <img src="women.png" alt="">
            <h3>Pranita Satam </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <p class="text">My experience with <br><span><strong> Little Buds Occupational Therapy</strong></span> is amazing. Our therapist <span><strong>Dr. Afsha</strong></span> is just superb!! She is so caring but firm as well wherever required and understands what exactly our child needs. I could see many improvements in my son like motor skills development, replying back, eating habits, brushing teeth. Thank you so much Dr.Afsha for all your efforts, love and guidance.</p>
        </div>

        <div class="box">
            <img src="women2.png" alt="">
            <h3>Manikandan Rajan</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">I am delighted to share my positive experience with<br> <span><strong> Little Buds Occupational Therapy</strong></span>  and the remarkable improvements I have witnessed in my child's behavior since enrolling them in this wonderful facility.
                After 3 OT and Group sessions with <br><span><strong>Dr. Afsha</strong></span>, My Kid has started interacting with other kids and has become more sociable, and his sitting tolerance has increased. He is very fond of <span><strong>Dr. Afsha</strong></span>.
                                Thanks a lot for your effort and time.I whole-heartedly recommend Little Buds Occupational Therapy to any parent seeking a supportive and enriching environment for their child's growth and development.</p>
        </div>

    </div>

</section>

<!-- review section ends -->
<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#specialization"> <i class="fas fa-chevron-right"></i> specialization </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="#doctor"> <i class="fas fa-chevron-right"></i> doctor </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
        </div>

        <div class="box">
            <h3>our treatment</h3>
            <a href="https://childdevelopment.com.au/areas-of-concern/gross-motor-skills/"> <i class="fas fa-chevron-right"></i> Gross motor skills </a>
            <a href="https://www.understood.org/en/articles/all-about-fine-motor-skills"> <i class="fas fa-chevron-right"></i>Fine motor skills </a>
            <a href="https://www.cincinnatichildrens.org/service/o/ot-pt/visual-motor-perception#:~:text=Visual%20perceptual%20skills%20enable%20a,ability%20to%20remember%20visual%20information"> <i class="fas fa-chevron-right"></i>Visual perceptual skills </a>
            <a href="https://childdevelopment.com.au/areas-of-concern/self-care/self-care-skills/"> <i class="fas fa-chevron-right"></i> Self care skills</a>
            <a href="https://www.otforkids.co.uk/services/treatment/handwriting-improvement-therapy.php#:~:text=The%20theory%20behind%20using%20OT,skills%20needed%20for%20successful%20handwriting."> <i class="fas fa-chevron-right"></i>Improves Handwriting </a>
            <a href="https://childdevelopment.com.au/areas-of-concern/gross-motor-skills/balance-coordination/"> <i class="fas fa-chevron-right"></i>Balance & coordination</a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91 9372244994 </a>
            <a href="#"> <i class="fas fa-phone"></i> +91 7715986357 </a>
            <a href="#"> <i class="fas fa-envelope"></i> afsha97@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Navi Mumbai </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.instagram.com/littlebuds.ot?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==""> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://www.facebook.com/littlebudsot?mibextid=ZbWKwL"> <i class="fab fa-facebook-f"></i> facebook </a>
        </div>  

    </div>

    <div class="credit"> created by <span>zoha mitkar</span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="first.js"></script>












</body>
</html>