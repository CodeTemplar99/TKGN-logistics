<!DOCTYPE html>
<html lang="en">

<head>
    <title>Logistics</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./icons/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">
    <link href="./Css/styled.css" rel="stylesheet" type="text/css">
    <!-- font for nav link -->
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <!-- font for explore button -->
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
    <!-- font for about texts -->
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <!-- font for font for about our company -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- font for  mission statements-->
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <!-- font for collapse text -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@1,300&display=swap"
        rel="stylesheet">

    <!-- --------- -->
    <!-- for pics -->
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@700&display=swap" rel="stylesheet">
    <!-- for lead s1 -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <!-- for boxes -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <!-- for lead box section -->

    <!-- go-text -->
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
    <!-- go span -->
    <link href="https://fonts.googleapis.com/css2?family=Tangerine&display=swap" rel="stylesheet">
    <!-- jquery  -->
    <script src="./js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap -->
    <script src="./bootstrap/js/bootstrap.js"></script>
    <!-- javascript -->
    <script defer src="./js/spine.js"></script>
</head>


<body>
    <!-- super container -->
    <div class="container-fluid p-0">

        <!-- nav container -->
        <div class="container bg-transparent">
            <!-- nav -->
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <!-- nav brand image -->
                <a class="navbar-brand bg-transparent" href="#"><img class="img-fluid"
                        src="./images/IMG-20200806-WA0051.jpg"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- nav lists container -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="scrollToInfo()">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="scrollToService()">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                More
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Cookie policy</a>
                                <a class="dropdown-item" href="#">FAQ</a>


                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-phone"></i><span
                                        class="ml-1 text-capitalize">+234telephone</span>
                                </a>
                                <a class="dropdown-item" href="#"><i class="fa fa-mobile-alt"></i><span
                                        class="ml-1 text-capitalize">081mobile</span>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#iosModal"><i class=" fab
                                fa-apple"></i></a>
                        </li>

                        <div class="modal fade" id="iosModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <p class="lead text-center">
                                            <i class="fab fa-apple"></i><br>
                                            <b>ios App COMING SOON</b>
                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#apkModal"><i
                                    class="fab fa-android"></i></a>
                        </li>
                        <div class="modal fade" id="apkModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <p class="lead text-center">
                                            <i class="fab fa-android" style="color: lime;"></i><br>
                                            <b>Android App COMING SOON</b>
                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </ul>

                </div>
            </nav>
        </div>

        <!-- container for first section -->
        <div class="container-fluid p-0">

            <!-- section 1 -->
            <div class="jumbotron m-0 rounded-0 s1 p-0">
                <div class="s1-overlay">
                    <p class="s1-text text-uppercase">
                        Save TIME.<br>
                        Affordable<br>
                        Reliable<br>

                        Think US,<br>

                    </p>
                    <!-- section 1 big button -->
                    <button class="btn btn-primary request" data-toggle="modal" data-target="#exampleModal">Contact
                        Sales</button>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <!-- modal content -->
                        <div class="modal-content">
                            <!-- modal head -->
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Request Dispatch</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!-- modal body -->
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="text-capitalize" for="InputPhone">Phone Number</label>
                                            <input type="tel" placeholder="Enter phone" class="form-control"
                                                id="InputPhone">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-capitalize" for="InputAddress">Pick up address</label>
                                            <input type="text" placeholder="Enter pick up address" class="form-control"
                                                id="InputAddress">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-capitalize" for="InputParcel">Type of parcel</label>
                                            <input type="text" placeholder="Enter type of parcel" class="form-control"
                                                id="InputParcel">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-capitalize" for="DeliveryAddress">Delivery
                                                address</label>
                                            <input type="text" placeholder="Enter pick up address" class="form-control"
                                                id="DeliveryAddress">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-capitalize" for="InputName">Recipient name</label>
                                            <input type="text" placeholder="Enter name" class="form-control"
                                                id="InputName">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-capitalize" for="InputRecipientPhone">Recipient phone
                                                number</label>
                                            <input type="tel" placeholder="Enter phone" class="form-control"
                                                id="InputRecipientPhone">
                                        </div>

                                    </div>


                            </div>
                            <!-- modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Request dispatch</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hr divide line -->
        <hr class="mb-0" style="width: 100%; position: absolute; left: 0; height: 30px;">
        <div class="container">
            <!-- s1-a (below section 1)-->
            <div class="jumbotron bg-transparent m-0 mt-5 mb-5 rounded-0 s1-a">
                <div class="jumbotron bg-transparent p-0 rounded-0">
                    <!-- very big text -->
                    <p class="innovation m-0 p-0 xx text-uppercase">Loremipsum</p>
                    <div class="jumbotron bg-transparent mb-0 p-0 innovate-inner-div d-flex justify-content-md-center">
                        <div class="jumbotron bg-transparent col-9 rounded-0 row p-0">
                            <div
                                class="jumbotron img-text-con con mb-0 p-2 bg-transparent d-flex justify-content-sm-between">
                                <!-- overlay image -->
                                <div class="jumbotron mb-0 bg-transparent img-con">

                                </div>
                                <p class="lead text-white mt-0 mb-0 text-con-text">
                                    <span class="intro-text">Lorem, ipsum</span><br>
                                    <span class="intro-more">Lorem ipsum dolor sit</span>
                                    <!-- dot on text -->
                                    <svg width="15" height="15">
                                        <circle cx="7" cy="7" r="5" stroke="none" stroke-width="1"
                                            fill="var(--draw-color)">
                                    </svg><br>
                                    <span class="intro-graph">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Corrupti molestias quod ab deleniti quisquam ullam quos beatae quidem eligendi
                                        modi?
                                    </span>
                                </p>
                            </div>
                            <!-- colored div over-layed on big text -->
                            <div class="jumbotron dummy-con mb-0">

                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <!-- section 2 -->
            <div class="jumbotron bg-transparent p-3 s2">
                <!-- section 2 introduction text -->
                <p class="text-center font-weight-bold lead text-uppercase">Our service Offering</p>
                <!-- flexed container -->
                <div class="jumbotron bg-transparent s2-inner">
                    <!-- picture on right flex -->
                    <div class="jumbotron bg-transparent p-3 pic-right">
                        <div class="jumbotron bg-transparent p-2 right-text-con">
                            <p class="lead font-weight-bold pics-lead text-uppercase">Food delivery</p>
                            <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, fugit.</span>
                        </div>
                        <div class="jumbotron bg-transparent p-1 m-0 right-img-con">
                            <i class="fa fa-plane"></i>
                        </div>
                    </div>
                    <!-- picture on left flex -->
                    <div class="jumbotron bg-transparent p-3 pic-left">
                        <div class="jumbotron bg-transparent p-1 m-0 left-img-con">
                            <i class="fa fa-ship"></i>
                        </div>
                        <div class="jumbotron bg-transparent p-2 left-text-con">
                            <p class="lead font-weight-bold pics-lead text-uppercase">gift delivery</p>
                            <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto in praesentium dicta
                                ut
                                totam, pariatur quibusdam cupiditate consequatur eum debitis!</span>
                        </div>

                    </div>
                    <!-- picture on right flex -->
                    <div class="jumbotron bg-transparent p-3 pic-right">
                        <div class="jumbotron bg-transparent p-2 right-text-con">
                            <p class="lead font-weight-bold pics-lead text-uppercase">Lorem, ipsum dolor.</p>
                            <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto in praesentium dicta
                                ut
                                totam, pariatur quibusdam cupiditate consequatur eum debitis!</span>
                        </div>
                        <div class="jumbotron bg-transparent p-1 m-0 right-img-con">
                            <i class="fa fa-truck"></i>
                        </div>
                    </div>
                    <!-- picture on left flex -->
                    <div class="jumbotron bg-transparent p-3 pic-left">
                        <div class="jumbotron bg-transparent p-1 m-0 left-img-con">
                            <i class="fa fa-motorcycle"></i>
                        </div>
                        <div class="jumbotron bg-transparent p-2 left-text-con">
                            <p class="lead font-weight-bold pics-lead text-uppercase">Lorem, ipsum dolor.</p>
                            <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto in praesentium dicta
                                ut
                                totam, pariatur quibusdam cupiditate consequatur eum debitis!</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- hr divide line -->
        <hr>
        <!-- container for s3 -->
        <div class="container">
        <!-- section 3 -->
            <div class="jumbotron rounded-0 p-0 m-0 s3">
                <div class="jumbotron rounded-0 m-0 s3-flex">

                    <p class="lead text-uppercase how-to-lead">How to use JFL Service</p>
                    <div class="jumbotron bg-transparent rounded-0 p-2 m-0 about-list-div">

                        <!-- accordion container -->
                        <div class="d-flex justify-content-start">
                            <ul class="list-group">
                                <a href="#col1" class="list-group-item bg-white mb-2 border-0" data-toggle="collapse"
                                    data-target="#col1">
                                    <p class="m-0 font-weight-bold">Step 1</p>
                                    <div id="col1" class="collapse">
                                        <span class="collapse-text">
                                            Lorem ipsum dolor sit amet.
                                        </span>
                                    </div>

                                </a>

                            </ul>


                            <ul class="list-group">

                                <a href="#col2" class="list-group-item bg-white mb-2 border-0" data-toggle="collapse"
                                    data-target="#col2">
                                    <p class="m-0 font-weight-bold">Step 2</p>
                                    <div id="col2" class="collapse">
                                        <span class="collapse-text">
                                            Lorem ipsum dolor sit amet.
                                        </span>
                                    </div>

                                </a>



                            </ul>

                            <ul class="list-group">

                                <a href="#col3" class="list-group-item bg-white mb-2 border-0" data-toggle="collapse"
                                    data-target="#col3">
                                    <p class="m-0 font-weight-bold">Step 3</p>
                                    <div id="col3" class="collapse">
                                        <span class="collapse-text"> Lorem ipsum dolor sit amet.
                                        </span>

                                    </div>

                                </a>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!-- section 4 -->
            <div class="jumbotron bg-transparent s4">
                <div class="jumbotron bg-transparent m-0 mb-2 p-3">
                <!-- section 4 introduction -->
                    <p class="lead font-weight-bold lead-box-section">
                        Why Us
                    </p>
                    <h6 class="lead-box-span small">introducing features that make us the service to use</h6>
                </div>
                <div class="s4-inner">
                <!-- boxes -->
                    <div class="jumbotron bg-transparent s4-boxes shadow-lg">
                        <i class="fa fa-bolt"></i>
                        <p>On-time response</p>
                        <span>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae cumque modi sequi
                            porro,
                            earum
                            molestiae doloribus. Porro adipisci voluptatum architecto.
                        </span>
                    </div>
                <!-- boxes -->
                    <div class="jumbotron bg-transparent s4-boxes shadow-lg">
                        <i class="fa fa-gift"></i>
                        <p>Excellent packaging</p>
                        <span>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae cumque modi sequi
                            porro,
                            earum
                            molestiae doloribus. Porro adipisci voluptatum architecto.
                        </span>
                    </div>
                <!-- boxes -->
                    <div class="jumbotron bg-transparent s4-boxes shadow-lg">
                        <i class="fa fa-map-marker-alt"></i>
                        <p>On-spot delivery</p>
                        <span>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae cumque modi sequi
                            porro,
                            earum
                            molestiae doloribus. Porro adipisci voluptatum architecto.
                        </span>
                    </div>
                <!-- boxes -->
                    <div class="jumbotron bg-transparent s4-boxes shadow-lg">
                        <i class="fa fa-headphones"></i>
                        <p>24/7 support systems</p>
                        <span>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae cumque modi sequi
                            porro,
                            earum
                            molestiae doloribus. Porro adipisci voluptatum architecto.
                        </span>
                    </div>

                </div>
            </div>
        </div>
        <!-- section 5 -->
        <div class="jumbotron bg-transparent rounded-0 m-0 s5 border">
            <p class="mb-2 go-text">
                Lorem ipsum dolor sit.
            </p>
            <span class="go-span">
                Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
        </div>
        <!-- footer -->
        <div class="jumbotron rounded-0 m-0 p-2 px-0 footer-super">
            <p class="text-center text-white m-0 all-rights">Copyright &copy; 2020 Brand name | All rights reserved.</p>
            <p class="text-right text-white m-0 powered">Powered By Tekagon</p>
        </div>
    </div>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5f25ed201a544e2a7275c66d/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>