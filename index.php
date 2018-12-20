<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
    <title>WPMichel</title>
</head>
<body>
<div id="opaque">
    <nav>
        <ul class = "nav">
            <li id="nav_name"> William Parker Michel III</li>
            <li><a href="#home">Home</a></li>
            <li><a href="#workexperience">Work Experience</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="">Projects</a></li>
            <li><a href="#hobbies">Hobbies</a></li>
            <li><a href="#rowing">Rowing</a></li>
            <li><button class="button" id="myBtn">Contact Me!</button></li>
<!--            <li onmouseover="show_contact()""><a><div id="contact_box" onmouseout="hide_contact()">Contact</div></a></li>-->
<!--            <script>-->
<!--                function show_contact()-->
<!--                {-->
<!--                    var element = document.getElementById("contact_box");-->
<!--                    element.innerHTML = '<href="mailto:wpmichel201@gmail.com">wpmichel201@gmail.com (941) 266 - 1604';-->
<!--                }-->
<!---->
<!--                function hide_contact()-->
<!--                {-->
<!--                    var element = document.getElementById("contact_box");-->
<!--                    element.innerHTML = 'Contact';-->
<!--                }-->
<!--            </script>-->
        </ul>
    </nav>
</div>

<!-- Trigger/Open The Modal -->
<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Phone Number: 941.266.1604</p>
        <p>Email: wpmichel201@gmail.com</p>
        <p>Send me a message!</p>
<!--        <form id="contact_form">-->
<!--            First Name: <br>-->
<!--            <input type="text" name="firstname"><br>-->
<!--            Last Name: <br>-->
<!--            <input type="text" name="lastname"><br>-->
<!--            Email: <br>-->
<!--            <input type="email" name="email"><br>-->
<!--            Phone: <br>-->
<!--            <input type="tel" name="phonenumber"><br>-->
<!--            Message: <br>-->
<!--            <textarea rows="4" cols="50" form="contact_form">Write your message here<textarea>-->
<!--        </form>-->
    </div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<div class="parallax home_parallax">
<section>
    <a name="home"></a>
    <h1 style="color: #A52C25;"> William Parker Michel III </h1>
    <article>
        <img id="home_photo"src="uploads/sr_photo.JPG">
        <div id="home_intro_container">
            <div id="home_intro_header"> Welcome!</div>
            <div id="home_intro_text"> My name is William Parker Michel, a current Junior at Cornell University. <div>
            <div id="home_intro_text">I am currently searching for an internship opportunity for summer 2019. Although originally from
                Seattle Washington, I consider myself a native Sarasota Floridian. For any inquiries or contacts please don't hesitate
                to call or send me an email.</div>
        </div>
    </article>
</section>
</div>
<h1> Work Experience </h1>
<div class="parallax work_experience_parallax">
<section>
    <a name="workexperience"></a>
    <article>
        <img class="article_image" src="uploads/FDCF.jpeg">
        <h2> Operations Analyst, Florida Department of Children and Families.</h2>
        <p style="font-size: 23px;"> 5 Months: July 6 2018 - November 2018<br><br>
            Working for the FDCF has meant close cooperation with IT leaders in researching and prototyping attractive
            technologies for potential addition to their current information systems. Serving millions of families, and handling
            billions in funds it is critical that the FDCF have a not only a strong and far reach when it comes to education and
            awareness, but also to appropriately address the families they already serve.
        <br> Manager: Scott Stewart</p>
    </article>
    <article id="work_experience_spacer">
        <img class="article_image" src="uploads/voalte-logo-2.gif">
        <h2> Engineering Intern, Voalte Inc.</h2>
        <p style="font-size: 23px;">  2.5 Months: May 28 - August 10 2018<br><br>
            My internship at Voalte was a very formative learning experience. As my first real foray into software
            engineering and development, most of the challenges I face have been novel, and exciting. I worked on the
            internal tools and infrastructure team. My day-to-day consisted of updating existing tools with new or improved
            functionality, or writing entirely new ones. The majority of my work is in Python (2.7) writing anything from
            web services interfaces, to C API integration into python scripts for extracting operation metrics from a host server's
            virtual environment(s). As part of the tools team I worked closely with dev ops, and systems engineers which has
            been a fantastic opportunity to expand on my command line and powershell experiences from the classroom.
            <br>Manager: Gabriel Jiva
            <br>gjiva@voalte.com
</section>
</div>
<div class="parallax education_parallax">
<section>
    <a name="education"></a>
    <h1> Education </h1>
    <article><h2>Cornell University </h2>
        <h3>BS in Computer Science, College of Engineering </h3>
        <p> Graduation: December, 2019. Notable courses:</p>
        <ul>
            <li>CS 2110 - OOP and Data Structures</li>
            <li>CS 2800 - Discrete Structures</li>
            <li>CS 3410 - System Organization and Programming</li>
            <li>CS 3110 - Functional Programming</li>
            <li>CS 4700 - Foundations of Artificial Intelligence</li>
            <li>CS 4410 - Operating Systems </li>
            <li>ENGRC 2640 - Digital Interface in an Analog World</li>
        </ul>
        <h3>DBME, Johnson School of Business </h3>
        <ul>
            <li>AEM 2400 - Marketing</li>
            <li>HADM 2250 - Finance</li>
            <li>AEM 4120 - Computational Methods</li> 
        </ul>
    </article>

    <!-- <article><h2> Certifications </h2>
    </article> -->

    <article><h2> Pineview High School </h2>
        <h3> GED </h3>
    </article>
</section>
</div>
<div class="parallax rowing_parallax">
    <section>
        <a name="rowing"></a>
        <h1> Rowing </h1>
        <article>
            <h2> Cornell Light Weight Rowing </h2>
            <p> Accolades </p>
            <p>Leonard-Mathews Cup vs. Harvard, Penn</p>
            <p>Platt Cup vs. Princeton</p>
            <p>Gieger Cup vs. Columbia, MIT</p>
            <p>Baggley Bowl vs. Dartmouth</p>

            <h2> Sarasota Crew </h2>
            <p> Accolades </p>
            <p> Varsity 8+, undefeated regular season, Bronze Medalists 2016 Youth Nationals</p>
            <p> Lightweight 8+, Top 6 Finish 2014, 2015</p>
            <p> Lightweight 4x, back-to-back FSRA Sculling State Champions 2014-2015 </p>
            <p> u19 1x, Bronze Medal 2015 Club Nationals</p>
            <p> u17 8+, Gold Medal 2014 Club Nationals</p>
            <p> u17 4x, Silver Medal 2014 Club Nationals</p>
            <p> u17 2x, Bronze Medal 2014 Club Nationals</p>
        </article>
    </section>
</div>
<div class="parallax hobbies_parallax">
<section>
    <a name="hobbies"></a>
    <h1> Hobbies </h1>
    <article><h2> Boat Restoration </h2>
        <h3> 23' 1978 Chris Craft (Pictured)</h3>
        <p style="font-size: 20px;"> This project started approx. 1.5 years ago. Originally the boat started with a pilot house and was configured
            for in-board power. The aim is to convert the pilot house to a center console, restore the lining and furniture,
            and keep the original styling of the boat intact. The vessel was stripped to the hull, which was re-glassed and repaired.
            The transom was extended with and engine-mounting bracket for a single outboard engine, a 200Hp 6-cylendar Mercury Verado. The
            center console is moulded from a similar size Penga. In terms of appearance, the goal was to preserve the timeless
            look and style of a classic Chris Craft. In doing so, the hull shape was left in tack, the rig will be minimally
            invasive, and the detailing will be wrapped in mahogany paneling to mimic the teak paneling that has staid a staple
            of Chris Crafts to today.</p>
        <h3> 31' 2008 Jupiter </h3>
        <p style="font-size: 20px;"> 2008 Jupiter started approx 2 years ago. A large, beautiful bay boat, there was small fiberglass fracturings and
            bumps. With that in mind we started digging for more issues. After finding several more issues, we had the thought
            that the little cracks in the surface were symptomatic of larger issues within the hull of the boat. Our intuition
            proved correct when we discovered the fuel tanks were full of quarter inch holes - a problem that, had it gone unnoticed,
            would have required a complete re-tear down of the boat. Fortunately, this was a silver-lining opportunity to dig into
            the hull of the boat, removed hundreds of pounds of extra weight, and fully recommit the hull. The goal is to have a
            high-range dive boat with enough space and size to tackle tough surf and hold our equipment comfortably.
        </p>
    </article>
    <!-- <article><h2> Diving and Fishing </h2>
    <p> I am an avid diver and fisherman
    </article> -->
</section>

</body>
</html>