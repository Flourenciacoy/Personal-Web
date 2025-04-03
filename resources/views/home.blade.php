<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/2ab29f499f.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="Asset\logotf-removebg-preview.png" alt="logo" class="logo">
                <ul>
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#achievement">Achievement</a></li>
                    <li><a href="#portofolio">Portfolio</a></li>
                    <li><a href="#contact">Contacts</a></li>
                </ul>
                <i class="fa-solid fa-bars"></i>
            </nav>
            <div class="header">
                <p>Undergraduate Computer Science</p>
                <h1>Hi, I'm <span>Flourencia</span> <br>PACAL PIYUS</h1>
            </div>
        </div>
    </div>
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="Asset\profile2.png">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-tittle">About Me</h1>
                    <p>Hello my name is Flourencia Calista Octavia Yuwono, Saya Pacal nya piyus. dan pacal piyus ini adalah oyang yang paling lucu imut
                        dan menggemaskan se ayam semesta.
                        <br>Below I show more things about me: 
                    </p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('Skills', event)">Skills</p>
                        <p class="tab-links" onclick="opentab('Experience', event)">Experience</p>
                        <p class="tab-links" onclick="opentab('Educations', event)">Educations</p>
                    </div>
                    <div class="tab-contents active-tab" id="Skills">
                        <ul>
                            <li><span>UI/UX</span><br>Designing web/app interfaces</li>
                            <li><span>Web Development</span><br>Web/app Development</li>
                            <li><span>Language</span><br>I can speak multiple languages such as English, Korean and Indonesian</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="Experience">
                        <ul>
                            <li><span>2017-2018</span><br>Pengurus OSIS Bidang Kesenian</li>
                            <li><span>2018-2019</span><br>Pengurus OSIS Bidang Sosial</li>
                            <li><span>2020-2021</span><br>Pengurus OSIS Bidang Kerohanian</li>
                            <li><span>2021-2022</span><br>Pengurus inti OSIS</li>
                            <li><span>August-Oktober 2022</span><br>Panitia Inti Festival Pelajar Nusantara</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="Educations">
                        <ul>
                            <li><span>2011-2017</span><br>SD</li>
                            <li><span>2017-2020</span><br>SMP</li>
                            <li><span>2020-2023</span><br>SMA</li>
                            <li><span>2023-Present</span><br>Bina Nusantara University</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="achievement"> 
        <div class="container">
            <h1 class="sub-tittle">My Achievement</h1> 
            <div class="achivement-list">
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Kepengurusan OSIS</h2>
                    <p>Menjadi pengurus Sekbid yang ada di OSIS</p> 
                    <a href="images/serti.jpg">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Olimpiade Sains Nasional OSN </h2>
                    <p>Saya mewakili sekolah dalam OSN 2022-2023 Bidang Biologi dan berhasil lolos ke tingkat Kabupaten</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Cipta Puisi</h2>
                    <p>Saya menjuarai lomba cipta puisi menempati juara ke-2</p>
                    <a href="#">Learn more</a>
                </div>
            </div>
        </div>
    </div>

    <div id="portofolio">
        <div class="container">
            <h1 class="sub-tittle">My Work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="images/Ldk.jpg">
                    <div class="layer">
                        <h3>LDK OSIS</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/fotbar.jpg">
                    <div class="layer">
                        <h3>Kegiatan Sekolah</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/Classmeet.jpg">
                    <div class="layer">
                        <h3>Class Meeting</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See More</a>
        </div>
    </div>

    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-tittle">Contact Me</h1>
                    <p><i class="fa-regular fa-envelope"></i> calistaflouren21@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i> +62895341740988</p>
                    <div class="social-icons">
                        <a href="https://instagram.com/flouclsta_?igshid=NGVhN2U2NjQ0Yg=="><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://wa.me/62895341740988"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="https://www.linkedin.com/in/flourencia-yuwono-775554289?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://line.me/ti/p/X2m1NtaITq"><i class="fa-brands fa-line"></i></a>
                    </div>
                    <a href="Asset\Flourencia.pdf" download class="btn btn2">Download CV</a>
                </div>
                <div class="contact-right">
                    <form>
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="Email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright © Flouren. 2023</p>
        </div>
    </div>

    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents"); // Fixed variable name
        function opentab(tabname, event) { // Added event parameter
            for(tablink of tablinks) {
                tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents) {
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }
    </script>

</body>
</html>