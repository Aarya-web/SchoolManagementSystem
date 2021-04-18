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

<style>
.top_nav {
background:transparent;
height: 30px;
width: 100%;
font-size: 12px;
text-align: left;

font-family: aclonica;
}

@media only screen and (max-width: 600px) {
  .mob_class{
      position: relative;
      left: 100px;
      bottom: 20px;

  }
  .port a{
      padding: 5px 5px!Important;
  }

}

.dropbtn {
  background-color: transparent;
  color: white;
  padding: 6px;
  font-size: 16px;
  border: none;
}
.showhere{
    position: absolute;
    width: 200px;
    height: auto;
    z-index: 9999;
    top: 0%;
    background: white;
}



</style>

</head>

<body>
    <header class="header">
        <div class="top_header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-12 dt_pos">
                       <nav class="top_nav">
                        <div class="time">
                        <iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="https://www.ashesh.com.np/linknepali-time.php?time_only=no&font_color=ffffff&aj_time=yes&font_size=14&line_brake=1&api=260137l040" width="250" height="45"></iframe></div>
                        </nav>
                    </div>
                    {{-- <div class="col-md-3"></div> --}}
                    <div class="col-md-6 col-sm-12 align-items-right port mob_class">
                        @guest
                            <a href="{{ url('/login') }}" style="font-size: 15px;" class="align-items-right" style="text-align: right">
                                <i class="fa fa-user" aria-hidden="true"></i> Web Mail Login
                            </a>
                        @endguest

                        @auth
                            @if (Auth::user()->role == 'student' || Auth::user()->role == 'teacher' || Auth::user()->role == 'admin')
                                @if (Auth::user()->role == 'student')
                                    <a href="{{ url('/admin/books') }}" style="font-size: 15px;" class="align-items-right" style="text-align: right">
                                        <i class="fa fa-user" aria-hidden="true"></i> Student
                                    </a>
                                @endif
                                @if (Auth::user()->role == 'teacher')
                                    <a href="{{ url('/admin/books') }}" style="font-size: 15px;" class="align-items-right" style="text-align: right">
                                        <i class="fa fa-user" aria-hidden="true"></i> Teacher
                                    </a>
                                @endif
                                @if (Auth::user()->role == 'admin')
                                    <a href="{{ url('/admin') }}" style="font-size: 15px;" class="align-items-right" style="text-align: right">
                                        <i class="fa fa-user" aria-hidden="true"></i> Admin Dashboard
                                    </a>
                                @endif
                            @else
                                <a href="{{ url('/studentregistration') }}" style="font-size: 15px;" class="align-items-right" style="text-align: right">
                                    <i class="fa fa-user" aria-hidden="true"></i> Student
                                </a>

                                <a href="{{ url('/teacherregistration') }}" style="font-size: 15px;" class="align-items-right" style="text-align: right">
                                    <i class="fa fa-user" aria-hidden="true"></i> Teacher
                                </a>
                            @endif

                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <div class=" page_header" style="height: auto;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 align-items-center">
                        <a href="{{ asset('/') }}" class="d-flex align-items-center">
                            <div class="logo pl-4">
                                <img src="{{ asset('/asset/img/1.png') }}">
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
        <nav class="navbar navbar-expand-md w-100 justify-content-end" style="border-bottom: #fff solid 2px">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon align-items-center justify-content-center">
                <i class="fas fa-bars"></i></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <div class="container">
                    <ul class="navbar-nav mr-auto w-100">
                        <li class="nav-item flex-fill active" style="    border-left: 1px solid #fff;">
                            <a class="nav-link" href="{{ asset('/') }}"><i class="fas fa-home" ></i><span
                                    class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item flex-fill">
                            <a class="nav-link" href="{{ asset('/events') }}"> Events </a>
                        </li>

                        <li class="nav-item flex-fill">
                            <a class="nav-link" href="{{ asset('/notice') }}"> Notice </a>
                        </li>

                        <li class="nav-item flex-fill">
                            <a class="nav-link" href="{{ asset('/aboutus') }}"> About Us </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Download
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #0D3357 !important">
                              <a class="dropdown-item" href="{{ url('/admin/books') }}">Books</a>
                          </li>

                        <li class="nav-item flex-fill">
                            <a class="nav-link" href="{{ asset('/admission') }}"> Admission </a>
                        </li>

                        <li class="nav-item flex-fill">
                            <a class="nav-link" href="{{ asset('/staff') }}">OURTeam </a>
                        </li>
                    </ul>

                </div>

            </div>

        </nav>

    </header>




    @yield('content')




    <footer class="bg-darks">
        <div class="container py-5 ">
            <div class="row">
                <div class="col-md-4">
                    <img src="" width="100%">
                    <div class="px-4 pt-3 text-light" style="font-weight: 500;">
                        <p style="text-align: justify; color:white;">
                            Janta mavi School on Saptari, offers from lower secondary to +2 level programs.It is one of the oldest schools of Saptari located 14 K.M east of district headquarter Rajbiraj and 20 K.M west from Fattepur, Saptari.
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

                    </div>
                </div>
            </div>
        </div>
        <div class="divider bg-light"></div>
        <div class="container py-3">
            <div class="row text-light">
                <div class="col-md-6"><i class="far fa-copyright    " aria-hidden="true"></i>  Copyright 1961-2077. All rights reserved.</div>
                <div class="col-md-6 text-right">- Desigined By <a class="link" href="https://www.facebook.com/Raj.Shaharya">Aarya/Vivek/Sandesh</a></div>
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
