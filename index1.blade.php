<!doctype html>
<html lang="en">

<head>
    <title>home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('/asset/css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <header class="header">
        <div class="top_header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 dt_pos">
                        <p id="datetime"> 2020 December 30, Wednesday </p>
                        <span style="height:20px; width:310px; display:block;">
                            <iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0"
                                allowtransparency="true"
                                src="http://www.ashesh.com.np/linknepali-time.php?font_color=fff&amp;dwn=only&amp;aj_time=yes&amp;font_size=12&amp;line_brake=0&amp;bikram_sambat=0&amp;api=572192e147"
                                width="305" height="22">
                            </iframe>
                        </span>
                    </div>
                    <!---
                    <div class="col-6 align-items-center port">
                        <a href="#" style="font-size: 15px;">
                            <i class="fa fa-user" aria-hidden="true"></i> Web Mail Login
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class=" page_header" style="height: auto;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 align-items-center">
                        <a class="d-flex align-items-center">
                            <div class="logo pl-4">
                                <img src="{{ asset('asset/img/1.png') }}">
                            </div>
                            <div class="heading h1 mb-0">
                                <h6>SHREE JANTA MADHYAMIK VIDYALAYA</h6>
                                <span> Janata mavi School </span>
                            </div>
                        </a>
                    </div>
                    <div class="search col-12 col-md-2 d-flex align-items-center">
                        <form action="input-group mb-3 searchbar">
                            <div class="search__container">
                                <input class="search__input" type="text" placeholder="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="carousel_main">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('asset/img/bg2.png') }}" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('asset/img/dee.jpg') }}" class="d-block w-100">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="main-body container">
        <div class="row">
            <!-- Begin Navigation -->
            <nav class="navbar navbar-expand-md w-100 justify-content-end">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon align-items-center justify-content-center">
                    <i class="fas fa-bars"></i></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto w-100">
                        <li class="nav-item flex-fill active">
                            <a class="nav-link" href="index.html"><i class="fas fa-home" ></i><span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item flex-fill">
                            <a class="nav-link" href="program.html"> Programs </a>
                        </li>

                        <li class="nav-item flex-fill">
                            <a class="nav-link" href="events.html"> Events </a>
                        </li>

                        <li class="nav-item flex-fill">
                            <a class="nav-link" href="admission.html"> Admission </a>
                        </li>

                        <li class="nav-item flex-fill">
                            <a class="nav-link" href="notice.html"> Notice </a>
                        </li>




                        <li class="nav-item flex-fill">
                            <a class="nav-link" href="staff.html"> Staff </a>
                        </li>
                        <li class="nav-item flex-fill">
                            <a class="nav-link" href="aboutus.html"> About Us </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navigation -->
        </div>

        <section class="page w-100">
            <div class="container">
                <div class="row">
                    <div class="first-sidebar col-12 col-md-6 col-lg-3 mt-50 order-1 order-lg-0 pl-0">
                        <div class="content mb-20">
                            <h2 class="text-center"> Notice </h2>
                            <div class="side-list strip-list">
                                <a href="#" class="button-contest1">Classified Scholarship Online Form</a>
                                <ul class="p-0">
                                    <li>
                                        <a href="#">Notice for e-Learning Content expert</a>
                                    </li>
                                    <li>
                                        <a href="#">Monitoring Tools (Self Assessment)</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="main-bar col-12 col-lg-6 mt-50 p-0 align-self-start order-0 order-lg-1">
                        <div class="content text-center pt-50 ribben">
                            <div class="heading">
                                <h1> Welcome to Janata mavi hadiya</h1>
                            </div>
                            <div class="main-content mb-20">
                                <p style="text-align: justify;">Regarding the importance of education, this school was establish in a thatched shouse on Baisakh 22, 2018 B.S. 1-4 classes were run with altogether 20 students and Bhuwaneshwar Prasad Singh, the inhabitant of Jandol from
                                    Saptari district was the Headmaster. It started the teaching of Secondary level in 2037 B.S. and the first batch appeared in S.L.C. exam in 2039 B.S.
                                </p>
                                <div class="about pb-30">
                                    <a href="aboutus.html" class="btn">About Janata mavi hadiya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <aside class="sec-sidebar col-12 col-md-6 col-lg-3 mt-50 order-3 pr-0 pl-0 pl-md-3">
                        <div class="content">
                            <div class="s-list str-list">
                                <ul class="p-0">
                                    <li class="d-flex align-items-start">
                                        <div class="per_img p-0">
                                            <img src="./img/Managingdirector.jpg">
                                        </div>
                                        <div class="per_info">
                                            <a href="#">
                                                <h5> Sanjay Kumar Sah </h5>
                                                <img src="./img/MDsir.png">
                                                <p> Managing Director, Janata mavi hadiya </p>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <div class="per_img p-0">
                                            <img src="./img/principal.jpg">
                                        </div>
                                        <div class="per_info">
                                            <a href="#">
                                                <h5> Rambahadur Raut </h5>
                                                <img src="./img/signatureprincipal.png">
                                                <p> Principal, Janata mavi hadiya </p>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

    </section>




    <section class="mission" style="background: url('img/vision.jpg');">
        <div class="container">
            <div class="mission_cover"></div>
            <div class="row">
                <div class="col-md-4 p-4">
                    <div class="card mission_card" style="border-radius: 20px;">
                        <div class="card-header">
                            <h2>Mission</h2>
                            <div class="divider" style="height: auto;background:transparent;">
                            </div>
                        </div>
                        <div class="card-body">
                            <p style="text-align:justify;">
                                Enable school from physical, managerial, social and administrative level to ensure inclusive access in education and develop attraction of all stake-holders for developing model school.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-4">
                    <div class="card mission_card" style="border-radius: 20px;">
                        <div class="card-header">
                            <h2>Vision</h2>
                            <div class="divider" style="height: auto;background:transparent;">
                            </div>
                        </div>
                        <div class="card-body">
                            <p style="text-align:justify;">
                                Create child-friendly environment to make students punctual which helps to increase learning achievement by encouraging for active participation for learning.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-4">
                    <div class="card mission_card" style="border-radius: 20px;">
                        <div class="card-header">
                            <h2>Goals</h2>
                            <div class="divider" style="height: auto;background:transparent;">
                            </div>
                        </div>
                        <div class="card-body">
                            <p style="text-align:justify;">
                                Skilled Human Resource will be appointed and managed for better teaching & learning activities aswell Students will acquire practical knowledge.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="more_about py-5" style="background-color: white; ">
        <div class="container bg_light">
            <div class="row py-3">
                <div class="col-md-6">
                    <h3> What Janata mavi hadiya does ? </h3>
                    <div class="space_betweem">
                        <div class="divider"></div>
                        <p style="text-align: justify;">
                            • It conducts Modern and technical based economic activities. <br> • Conduct games, sports and co-curricular activities to improve Student's physical, intellectual, social and emotional aspects.<br> • Regular interaction among
                            teachers, students and parents to improve the inter-relation among them. <br> • Teaches Secondary level and +2 level.<br> • It provides necessary reading materials for the preparation of the exam.<br> •It conducts coaching
                            classes popularly known as SEE/+2 exam preparation class.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="principle-image pt-5" src="./img/deee (1).jpg" alt="girl with laptop" height="auto" width="100%">
                </div>
            </div>
        </div>
    </section>

    <section class="last_about_section" style="background-image: url(img/about.jpg);">
        <div class="mission-all-cover" style="background-color: rgba(0, 0, 0, 0.802);">
            <div class="container">
                <div class="row py-5" style="color: white; ">
                    <div class="col-md-8 mx-auto text-center text-njn-light">
                        <h2 class="text-center">Physical and Social Situation</h2>
                        <div class="space-beetween">
                            <div class="njn-divider bg-njn-light"></div>
                        </div>
                        <p style="text-align:justify;">
                            Janta ma vi.........<br> • It is one of the oldest schools of Udayapur located 14 K.M east of district headquarter Gaighat and 20 K.M west from Fattepur, Saptari.<br> • It is on the 26⁰78” latitude and 86⁰82” longitude.<br>                            • Although it is in the inner terai of the Chure and Mahabharat range.<br> • There are problems of flood in the rainy season, the human residential area is safe.<br> • It has 34 Bigaha ( 22.75 hector ) land. About 2.10 Bigaha
                            land is used for school buildings and play ground.<br> • Although Tharu community had about 20% population during its establishment, Now there are almost equal number of people of ingredients and other castes due to immigration
                            from hilly districts such as Khotang ,Bhojpur as well as hilly area of Udyapur district<br> • Available all modern facilities.


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <footer class="bg-darks">
        <div class="container py-5 ">
            <div class="row">
                <div class="col-md-4">
                    <img src="" width="100%">
                    <div class="px-4 pt-3 text-light" style="font-weight: 500;">
                        <p style="text-align: justify; color:white;">
                            Janta mavi hadiya on Udayapur, offers from lower secondary to +2 level programs.It is one of the oldest schools of Udayapur located 14 K.M east of district headquarter Gaighat and 20 K.M west from Fattepur, Saptari.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 text-light">
                    <h3>Quick links</h3>
                    <div class="divider bg-light"></div>

                    <ul class="quick_links">
                        <li class=""><i class="fab fa-facebook text-white" aria-hidden="true"></i> &nbsp; <a class="text-white" href="https://m.facebook.com/profile.php?id=100063077971536&refsrc=https%3A%2F%2Fm.facebook.com%2Ffbrdr%2F2048%2F100063077971536%2F&_rdr"
                                target="_blank">Facebook</a></li>
                        <li class=""><i class="fab fa-youtube    " aria-hidden="true"></i> &nbsp; <a class="text-white" href="" target="_blank">Youtube</a></li>
                        <li class=""><i class="fab fa-whatsapp    " aria-hidden="true"></i> &nbsp; <a class="text-white" href="" target="_blank">Whatsapp</a></li>
                        <li class=""><i class="fab fa-twitter    " aria-hidden="true"></i> &nbsp; <a class="text-white" href="" target="_blank">Twitter</a></li>
                        <li class=""><i class="fas fa-chalkboard-teacher" aria-hidden="true"></i> &nbsp; <a class="text-white" href="" target="_blank">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-light">

                    <h3 class="text-white">Address</h3>
                    <div class="divider bg-light"></div>
                    <div class="px-2 py-3 text-white" style="font-size:17px; font-weight: 500;">
                        <span><i class="fas fa-location-arrow    " style="text-align: justify;" aria-hidden="true"></i> Dakneshwari-06, Kataiya</span><br>
                        <span>&nbsp; &nbsp;&nbsp;  Saptari, Nepal</span><br>
                        <span><i class="fas fa-tty    " aria-hidden="true"></i>&nbsp;&nbsp;9417052936</span><br>
                        <span><i class="fas fa-fax    " aria-hidden="true"></i>&nbsp;&nbsp;9417052936</span><br>
                        <span><i class="fas fa-phone    " aria-hidden="true"></i> -------- <br>
                                <i class="fas fa-phone    " aria-hidden="true"></i>  ---------</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider bg-light"></div>
        <div class="container py-3">
            <div class="row text-light">
                <div class="col-md-6"><i class="far fa-copyright    " aria-hidden="true"></i> All rights reserved.</div>
                <div class="col-md-6 text-right">- Desigined By <a class="link" href="https://www.facebook.com/izentechnology">IzenTechnology Pvt. Ltd.//Aarya</a></div>
            </div>
        </div>
    </footer>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
