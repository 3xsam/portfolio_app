<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- --------- UNICONS ---------- -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    {{--  BOOTSTRAP CSS --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <!-- --------- CSS ---------- -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- --------- FAVICON ---------- -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    <title>Personal Portfolio</title>
</head>
<body>
   <div class="container">
    <!-- --------------- HEADER --------------- -->
      <nav id="header">
        <div class="nav-logo">
            <p class="nav-name">RotMayer</p>
            <span>.</span>
        </div>
        <div class="nav-menu" id="myNavMenu">
            <ul class="nav_menu_list">
                <li class="nav_list">
                    <a href="#home" class="nav-link active-link">Home</a>
                </li>
                <li class="nav_list">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav_list">
                    <a href="#projects" class="nav-link">Projects</a>
                </li>
                <li class="nav_list">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
        <div class="about-btn">
            <a href="{{asset('assets/cv.pdf')}}" target="_blank">
                <button class="btn"> Open CV <i class="uil uil-file"></i></button>
            </a>
        </div>
        <div class="nav-menu-btn">
            <i class="uil uil-bars" onclick="myMenuFunction()"></i>
        </div>
      </nav>


    <!-- -------------- MAIN ---------------- -->
    <main class="wrapper">
       <!-- -------------- FEATURED BOX ---------------- -->
       <section class="featured-box" id="home">
          <div class="featured-text">
            <div class="featured-text-card">
                <span>Rot Mayer</span>
            </div>
            <div class="featured-name">
                <p>I'm <span class="typedText"></span></p>
            </div>
            <div class="featured-text-info">
                <p>Experienced frontend and backend developer with a passion for creating visually stunning
                   and user-friendly websites.
                </p>
            </div>
            <div class="featured-text-btn">
                <button class="btn blue-btn">Hire Me</button>
            <a href="{{asset('assets/cv.pdf')}}" target="_blank">
                <button class="btn"> Open CV <i class="uil uil-file"></i></button>
            </a>            </div>
            <div class="social_icons">
                <a href="https://www.instagram.com/3xsam_?igsh=NTc4MTIwNjQ2YQ==" target="_blank"><div class="icon"><i class="uil uil-instagram"></i></div></a>
                <a href="https://api.whatsapp.com/send?phone=+17818666052&text=Hey,+I+want+to+make+website" target="_blank" ><div class="icon"><i class="uil uil-whatsapp"></i></div></a>
                <a href="https://github.com/3xsam" target="_blank"><div class="icon"><i class="uil uil-github-alt"></i></div></a>
            </div>
          </div>
          <div class="featured-image">
            <div class="image">
                <img src="{{ asset('assets/images/user1.jpg') }}" alt="avatar">
            </div>
          </div>
          <div class="scroll-icon-box">
            <a href="#about" class="scroll-btn">
                <i class="uil uil-mouse-alt"></i>
                <p>Scroll Down</p>
            </a>
          </div>

       </section>
       <!-- -------------- ABOUT BOX ---------------- -->
       <section class="section" id="about">
          <div class="top-header">
            <h1>About Me</h1>
          </div>
          <div class="row">
            <div class="col">
                <div class="about-info">
                    <h3>My introduction</h3>
                    <p>I am well-versed in Frontend & Backend, and other cutting edge
                       frameworks and libraries,which allows me to implement interactive features.
                       Additionally, I aslo have experirence building custom content management systems (CMS).
                    </p>
                    <div class="about-btn">
                        <a href="{{asset('assets/cv.pdf')}}" target="_blank">
                            <button class="btn"> Open CV <i class="uil uil-file"></i></button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Frontend</h3>
                    </div>
                    <div class="skills-list">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>Bootstrap</span>
                        <span>JavaScript</span>
                        <span>Vue</span>
                        <span>React</span>
                        <span>GetBootstrap+</span>
                    </div>
                </div>
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Backend</h3>
                    </div>
                    <div class="skills-list">
                        <span>PHP</span>
                        <span>Laravel</span>
                        <span>JavaScript</span>
                    </div>
                </div>
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Database</h3>
                    </div>
                    <div class="skills-list">
                        <span>MySQL</span>
                        <span>MongoDB</span>
                        <span>PHPMyAdmin</span>
                    </div>
                </div>
            </div>
          </div>
       </section>

       <!-- -------------- PROJECT BOX ---------------- -->

       <section class="section" id="projects">
          <div class="top-header">
              <h1>Projects <i class="uil uil-bolt" style="font-size: 23px;"></i></h1>
          </div>
          <div class="project-container">
            <div class="project-box">
                <i class="uil uil-shop"></i>
                <h3>E-commerce</h3>
                <label> <a href="http://lcrud.great-site.net" target="_blank" class="nav-link">Preview!</a></label>
            </div>
            <div class="project-box">
                <i class="uil uil-users-alt"></i>
                <h3>Job Portal</h3>
                <label> <a href="https://webbapp.free.nf" target="_blank" class="nav-link">Preview!</a></label>
            </div>
            <div class="project-box">
                <i class="uil uil-users-alt"></i>
                <h3>Clients</h3>
                <label>25+ Happy Clients</label>
            </div>
            <div class="project-box">
                <i class="uil uil-award"></i>
                <h3>Experience</h3>
                <label>4+ Years in the field</label>
            </div>
          </div>
       </section>

       <!-- -------------- CONTACT BOX ---------------- -->

       <section class="section" id="contact">
          <div class="top-header">
            <h1>Get in touch</h1>
            <span>Do you have a project in your mind, contact me here</span>
          </div>
          <div class="row">
             <div class="col">
                <div class="contact-info">
                    <h2>Find Me <i class="uil uil-corner-right-down"></i></h2>
                    <p><i class="uil uil-whatsapp"></i> WhatsApp: <a href="https://api.whatsapp.com/send?phone=+17818666052&text=Hey" target="_blank"><i class="uil uil-whatsapp">My WhatsApp</i></p></a>

                    <p><i class="uil uil-envelope"></i> Email: <a href="mailto:rotmayer805@gmail.com" target="_blank"><i class="uil uil-envelope">My-mail</i></p></a>

                    <p><i class="uil uil-instagram"></i> Instagram: <a href="https://www.instagram.com/3xsam_?igsh=NTc4MTIwNjQ2YQ==" target="_blank"><i class="uil uil-instagram">My instagram</i></p></a>
                </div>
             </div>
             <div class="col">
                <div class="form-control">
                    <form name="contactForm" id="contactForm" action="{{ route('form') }}" method="POST">
                        @csrf
                        <div class="form-inputs">
                            <input type="text" class="input-field" name="name" placeholder="Name">
                            <p></p>
                            <input type="text" class="input-field" name="email" placeholder="Email">
                            <p></p>
                        </div>
                        <div class="text-area">
                            <textarea class="input-field" name="message" placeholder="Message"></textarea>
                        <p></p>                        </div>
                        <div class="form-button">
                            <button type="submit" class="btn" onclick="validateForm()">Send <i class="uil uil-message"></i></button>
                        </div>
                    </form>

                    <style>
                        .error-message {
                            color: red;
                            font-size: 0.9em;
                        }
                        .input-field.error {
                            border-color: red;
                        }
                    </style>



                </div>
             </div>
          </div>
       </section>

    </main>


    <!-- --------------- FOOTER --------------- -->
    <footer>
        <div class="top-footer">
            <p>3x RotMayer .</p>
        </div>
        <div class="middle-footer">
            <ul class="footer-menu">
                <li class="footer_menu_list">
                    <a href="#home">Home</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#about">About</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#projects">Projects</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <div class="footer-social-icons">
            <a href="https://www.instagram.com/3xsam_?igsh=NTc4MTIwNjQ2YQ==" target="_blank"><div class="icon"><i class="uil uil-instagram"></i></div></a>
            <a href="https://api.whatsapp.com/send?phone=+17818666052&text=Hey,+I+want+to+make+website" target="_blank" ><div class="icon"><i class="uil uil-whatsapp"></i></div></a>
            <a href="https://github.com/3xsam" target="_blank"><div class="icon"><i class="uil uil-github-alt"></i></div></a>
        </div>
        <div class="bottom-footer">
            <p>Copyright &copy; <a href="#home" style="text-decoration: none;">John Doe</a> - All rights reserved</p>
        </div>
    </footer>

    </div>




    <!-- ----- TYPING JS Link ----- -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

       <!-- ----- SCROLL REVEAL JS Link----- -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    {{-- BOOTSTRAP JS --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}

    <!-- ----- MAIN JS ----- -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- CUSTOM JS --}}

    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "200",
            "hideDuration": "1000",
            "timeOut": "2000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>



    <script>

        $(document).ready(function() {

        $("#contactForm").submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('form') }}",
                type: "POST",
                data: $(this).serializeArray(),
                dataType: 'json',
                success: function(response) {
                    if (response.status == true) {
                        toastr.success(response.message);
                        // Optionally clear form fields or perform other actions on success
                        $("#contactForm")[0].reset(); // Reset form
                    } else {
                        var errors = response.errors;
                        if (errors.name) {
                            $("#name").addClass('is-invalid')
                            .siblings('p')
                            .addClass('invalid-feedback')
                            .html(errors.name)
                        } else {
                            $("#name").removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html('')
                        }

                        // Display validation errors using toastr for each field
                        $.each(response.errors, function(key, value) {
                            toastr.error(value[0]); // Display the first error message for each field
                        });
                    }
                }
            });
        });

    });

    </script>




</body>
</html>
