<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RINL</title>
    <link rel = "stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel = "stylesheet" href = "css\rinlstyle.css" >
</head>

    
    <div class ="logos">
     
     <img src="photos\logonew..jpg" alt = " " id = "logo" > 
     
        <img src="photos\rinl.png" alt = " " id= "logoo" >  </div>
        
        
          <div class = "wrapper">
            <nav>
                <ul>
                    <li class="dropdown">
                      <a href="#">HOME</a>
                      <ul class="menu-area">
                            <ul>
                                
                                <img src="photos\steel.jpeg" alt ="pic" id="wel">
                            </ul>
                           <div class="welcome" >
                        <p >
Welcome to the heart of India's steel industry, the renowned Rashtriya Ispat Nigam Limited (RINL) Vizag Steel Plant! 
Nestled along the picturesque coastline of Visakhapatnam, this steel giant stands as a symbol of India's industrial prowess and commitment to excellence. 
With a rich legacy of producing high-quality steel for over three decades, RINL Vizag Steel Plant has played a pivotal role in shaping the nation's infrastructure and economic growth. 
As you embark on a journey through our state-of-the-art facilities, cutting-edge technology, and a workforce driven by innovation and dedication, you'll witness the relentless pursuit of excellence that defines us.
 Welcome to the world of RINL Vizag Steel Plant, where steel meets strength, and dreams are forged into reality.As you embark on this journey with us, you will discover a legacy of more than three decades, characterized by our unwavering dedication to producing world-class steel products. Our state-of-the-art facility in the picturesque coastal city of Visakhapatnam, India, stands as a testament to our vision of being a leader in the steel industry. Join us in exploring the dynamic realm of steelmaking, where opportunities abound, and together, we shape the future of this vital industry. Welcome to RINL Vizag Steel Plant, where the future of steel is forged today. </p>

                           </div>
                           
                        
                          </ul>

                        
                    </li> 
                    
                    
                    <li class= "dropdown">
                      <a href="#">CONTACT</a>
                      <ul class="menu-area">
                  <div>

                    <img src ="photos\location.png" alt="location" id="loc">
                    <p id="add"> REGISTERED ADDRESS</p>

                   <p id="adds">    Rashtriya Ispat Nigam Ltd. , <br>
                    (CIN: U27109AP1982GOI003404) <br>
          Administrative Building, Visakhapatnam Steel Plant, Visakhapatnam - 530031,<br>
                       Andhra Pradesh, India. </p>
                  </div>    
                  <div  class="contact">
               
                <img id = "user" src="photos\user.png" alt = "user" height="45px" width="40px">
                <p id="name">Atul Bhatt <br>
                Chairman cum Managing Director <br> 
                <img id="calll" src="photos\call.png" alt="contact" height="15px" width = "15px"  0891-2518301> 0891-2518301
                </p> </div>

                <div  class="contact2">
                <img id = "user" src="photos\user.png" alt = "user" height="45px" width="40px">
                <p id="name">D K Mohanty
                                   <br>
                Director - Commercial <br> 
                <img id="calll" src="photos\call.png" alt="contact" height="15px" width = "15px"  0891-2518301> 0891-2518303
                </p> </div>
              
                 
              </ul>
                        
                    </li> 
                     
                    <li class="dropdown">
                        <a href="#">ABOUT</a>
                        <ul class="menu-area"> 
                        <ul>
                        <img id="rinlpic" src="photos\rinl1.png" alt ="rinl photo">
                       </ul>
                      
                          
                         <div class="about">  <p> Rashtriya Ispat Nigam Limited, the corporate entity of Visakhapatnam Steel Plant is a Navaratna PSE under the Ministry of Steel. Visakhapatnam Steel Plant fondly called Vizag steel. 
                          It is the first shore based Integrated Steel Plant in the country and is known for its quality products delighting the customers. 
                          It is a market leader in long products and it caters to the needs of diverse Industrial sectors.
                           It is the first Steel plant to be certified ISO 9001:2008 (presently2015), ISO 14001:2004 (presently2015), OHSAS 18001:2007 and ISO/IEC 27001:2013 Standards. 
                           It is also the first PSE to be certified ISO 50001:2011 - Energy Management Systems and has acquired CMMI Level 3 Certification for s/w development
                          <br>  <br>
                          1. Situated over 33,000 acres, Visakhapatnam Steel Plant is the only shore-based steel plant in India.
                          <br> 
                          2. The Steel Plant was conferred with the Navratna status on 17 November 2010. (Navaratna companies are entitled to invest up to Rs 1000 crore without explicit government approval)
                          
                          <br>
                          3. In April 1982, Visakhapatnam Steel Plant was separated from Steel Authority of India Limited (SAIL) and Rashtriya Ispat Nigam Limited (RINL) was made the corporate entity of the Steel Plant.
                        </p></div>
                       
                      </ul>
                      </li> 
                      <li class="log">
                      <a href="http://localhost/steel/login.php">Log out</a>
               </li>
                   
                </ul>
      
            </nav>
               
</div> </div>
 <br> <br> <br> 
<div class="slideshow-container">
        <div class="mySlides fade">
            <img src="photos\ssi (1).png" alt="Image 1">
        </div>
        <div class="mySlides fade">
            <img src="photos\ssi (2).png" alt="Image 2">
        </div>
        <div class="mySlides fade">
            <img src="photos\ssi (3).png" alt="Image 3">
        </div>
    </div>
   <script>
    let slideIndex = 0;

function showSlides() {
    let slides = document.getElementsByClassName("mySlides");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 3000); // Change image every 2 seconds (2000 milliseconds)
}

showSlides(); // Start the slideshow
</script>
    </body>
    <button class="sidebar-toggle">
        <i class="fas fa-bars"></i>
      </button>
      <aside class="sidebar">
        <div class="sidebar-header">
          <img src="photos\logonew..jpg" class="logo" alt="" />
          <button class="close-btn"><i class="fas fa-times"></i></button>
        </div>
        <!-- links -->
        <ul class="links">
          <li>
            <a href="http://localhost/steel/index.php">JOB MASTER</a>
          </li>
          
            <a href="http://localhost/steel/worker.php">WORKERS FORM</a>
          </li>
          
          <li>
            <a href="http://localhost/steel/wages.php">WAGE MASTER</a>
          </li>
          
          <li>
            <a href="http://localhost/steel/workattendance.php">WORKER ATTENDANCE</a>
          </li>
          <li>
            <a href="http://localhost/steel/attendance.php">WAGE OF WORKER</a>
          </li>
        </ul>
        <!-- social media -->
        <ul class="social-icons">
          <li>
            <a href="https://www.facebook.com">
              <i class="fab fa-facebook"></i>
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com">
              <i class="fab fa-twitter"></i>
            </a>
          </li>  
           <li>
            <a href="https://www.instagram.com">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com">
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
          <li>
            <a href="https://www.sketch.com">
              <i class="fab fa-sketch"></i>
            </a>
          </li>
        </ul>
      </aside>
      <!-- javascript -->
      <script src="app.js"></script>
  
  
</html>