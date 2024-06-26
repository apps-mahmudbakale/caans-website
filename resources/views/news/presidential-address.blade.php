<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CAANS | Continental Association of African Neurosurgical Societies</title>

    <meta name="keywords" content="" />
    <meta name="description" content="Caans-website Built By Mahmud Bakale">
    <meta name="author" content="Mahmud Bakale">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logo.png" type="image/png" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('css/skins/default.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('vendor/modernizr/modernizr.min.js') }}"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #333333;
            /* Adjust color as needed */
        }
    </style>
</head>

<body data-plugin-page-transition>

    <div class="body">
        @include('partials.header')

        <div role="main" class="main">
            <section
                class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
                style="background-image: url({{ asset('images/Neurosurgery-Brain-and-Spine-surgery.jpg') }});">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="text-9 font-weight-bold">CAANS NEWS</h1>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb breadcrumb-light d-block text-center">
                                <li><a href="#">Home</a></li>
                                <li class="active">CAANS NEWS</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container py-4">


                <div class="row">
                    <div class="col">
                        <div class="blog-posts single-post">

                            <article class="post post-large blog-single-post border-0 m-0 p-0">
                                <div class="post-image ms-0">
                                    <a href="{{ route('news.presidential-address') }}">
                                        <img src="{{ asset('Picture 1.png') }}"
                                            class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                            alt="">
                                    </a>
                                </div>

                                <div class="post-date ms-0">
                                    <span class="day">31</span>
                                    <span class="month">March</span>
                                </div>

                                <div class="post-content ms-0">

                                    <h2 class="font-weight-semi-bold"><a
                                            href="{{ route('news.presidential-address') }}">PRESIDENTIAL ADDRESS FOR
                                            THE CAANS NEWSLETTER</a></h2>

                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> By <a href="#">Professor B B Shehu, MB,BS, MSc, MD,FRCS, FWACS,FMCS(Neurosurgery), Vice-Chancellor, Federal university of Medical and Health Sciences, Katsina, Katsina state Nigeria</a>
                                        </span>
                                    </div>
                                    <p class="text-justify">On behalf of the CAANS , I want to thank the editorial
                                        committee for coming up with the idea of a periodic newsletter, I hope it will
                                        continue with realistic regularity, showcasing the various national ,regional
                                        and continental neurosurgical societies activities.
                                        This is also an additional avenue of increasing our exchanges with each other
                                        and further minimizing the gap that exist between our countries especially in
                                        the sub-Saharan African countries</p>
                                    <p class="text-justify">The year 2023 witnessed a remarkable coming together between
                                        the neurosurgeons in the African continent; discussing very interesting and
                                        important issues effecting the development of neurosurgery in our continent. I
                                        would like to thank all colleagues for their responsible and mature inputs on
                                        our WhatsApp platform. I hope this mature approach to our problems will
                                        continue.</p>
                                    <p class="text-justify">The Young CAANS under the able leadership of Dr Nqobile
                                        Thango continues to initiate and expound on very important issues of both
                                        clinical practice and research on the continent. I hope this will continue. On
                                        one of these days; i look forward to see some of these very important courses
                                        being undertaken as a pre-congress activity for the young neurosurgeons in our
                                        physical meetings. I envision this as one of the strategies that is going to
                                        help propel and advance the much-needed research output from the our continent.
                                    </p>
                                    <p class="text-justify">We have also witnessed a great increase in the both the
                                        number of training centers in to almost all countries of the continent and the
                                        number of residents in training both in the national and regional training
                                        colleges. I would like to single out Zambia and congratulate both the trainers
                                        and the first set of graduates from their regional college, we wish you a
                                        successful career in the subspecialty. </p>
                                    <p class="text-center"><img src="{{ asset('Neurosugery-Zambia.png') }}"
                                            class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                            alt="">
                                    <h3 class="text-center">NEUROSURGERY IN ZAMBIA </h3>
                                    </p>

                                    <p class="text-justify">
                                        The Kinshasa meeting hosted by Professor Jeff Ntalaj , his country leadership
                                        and his wonderful team brought together not only the young neurosurgeons and
                                        residents but the whole CAANS AC,I like to thank our Congolese brothers
                                        sincerely for their generosity and hard work in organizing such higher standard
                                        meeting ,that was attended by nearly every country in Africa.
                                    </p>
                                    <p class="text-center"><img src="{{ asset('young-caans.png') }}"
                                            class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                            alt="">
                                    <h3 class="text-center">Young CAANS with Hon Minster of health Congo DR in Kinshasa.
                                    </h3>
                                    </p>
                                    <p class="text-justify">Going forward this kind of advocacy at the national level
                                        and organization should be encouraged and I hope other members of CAANS can
                                        reach out to their governments to support such kind of meetings. It goes a long
                                        way in increasing our understanding of our challenges and opportunities and
                                        nation to nation collaboration in both research and training activities. (Thank
                                        you Jeff).</p>
                                    <p class="text-justify">I have no doubt that our founding fathers will be proud of
                                        the progress we are making in integrating the anglophone and the francophone in
                                        the continent, I thank you all for this understanding that we all need each
                                        other, and we cannot allow this language barrier to keep us apart.</p>
                                    <p class="text-justify">The issue of registration of our individual national
                                        neurosurgical societies with the WFNS has been a priority of the current AC and
                                        we are happy that six nations including Benin Republic, Cote dvoire, Niger
                                        republic, Congo DR, Zimbabwe, and Togo have met the requirement and are now
                                        members of WFNS, we are confident that all countries in the continent should
                                        have some form of membership with the WFNS at the Madrid WFNS congress in 2025.
                                    </p>
                                    <p class="text-justify">This is important for so many reasons but particularly to
                                        bring to limelight the remarkable progress in neurosurgical manpower development
                                        going on in the continent.</p>
                                    <p class="text-justify">The year ended with South Africa hosting the WFNS congress
                                        on grand style. The continental body hereby thank and congratulate the south
                                        African team under the able leadership of Professor Graham Feigen.</p>
                                    <p class="text-justify">The congress had in attendance neurosurgeons from all
                                        African countries including our Lusophone brothers and sisters together with
                                        representation from all the continents of the world. </p>
                                    <p class="text-justify">CAANS used this occasion to initiate the pediatric
                                        neurosurgery section of our association under the leadership of Professor
                                        Llewellyn Padayachy and his team.</p>
                                    <p class="text-center"><img src="{{ asset('lunch-caans.png') }}"
                                            class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                            alt="">
                                    <h3 class="text-center">Launching of CAANS pediatric neurosurgery section in cape
                                        town (AFPNS)</h3>
                                    </p>
                                    <p class="text-justify">I am sure the year 2024 is going to witness more national
                                        meetings and I urge our colleagues in various sub-regions to make effort to
                                        attend these meetings.</p>
                                    <p class="text-justify">We will also be welcoming our Lusophone brothers and
                                        sisters in Congo DR, during the Kinshasa CAANS Congress.</p>
                                    <p class="text-justify">Lastly, I like to thank you all for your support and
                                        cooperation and hope we all can make it to Kinshasa in November this year.</p>
                                    <p class="text-justify">
                                    <h5>Happy new year and long leave CAANS.</h5>
                                    </p>

                                    {{-- <div class="post-block mt-5 post-share">
                                        <h4 class="mb-3">Share this Post</h4>

                                        <!-- Go to www.addtoany.com to customize -->
                                        <!-- AddToAny BEGIN -->
                                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style"
                                            style="line-height: 32px;">
                                            <a class="a2a_dd"
                                                href="https://www.addtoany.com/share#url=https%3A%2F%2Fwww.okler.net%2Fpreviews%2Fporto%2F10.2.0%2Fblog-post.html&amp;title=Post%20Full%20Width%20%7C%20Porto%20-%20Multipurpose%20Website%20Template"><span
                                                    class="a2a_svg a2a_s__default a2a_s_a2a"
                                                    style="background-color: rgb(1, 102, 255);"><svg focusable="false"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 32 32">
                                                        <g fill="#FFF">
                                                            <path d="M14 7h4v18h-4z"></path>
                                                            <path d="M7 14h18v4H7z"></path>
                                                        </g>
                                                    </svg></span><span class="a2a_label a2a_localize"
                                                    data-a2a-localize="inner,Share">Share</span></a>
                                            <a class="a2a_button_facebook" target="_blank" rel="nofollow noopener"
                                                href="/#facebook"><span class="a2a_svg a2a_s__default a2a_s_facebook"
                                                    style="background-color: rgb(8, 102, 255);"><svg focusable="false"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 32 32">
                                                        <path fill="#fff"
                                                            d="M28 16c0-6.627-5.373-12-12-12S4 9.373 4 16c0 5.628 3.875 10.35 9.101 11.647v-7.98h-2.474V16H13.1v-1.58c0-4.085 1.849-5.978 5.859-5.978.76 0 2.072.15 2.608.298v3.325c-.283-.03-.775-.045-1.386-.045-1.967 0-2.728.745-2.728 2.683V16h3.92l-.673 3.667h-3.247v8.245C23.395 27.195 28 22.135 28 16Z">
                                                        </path>
                                                    </svg></span><span class="a2a_label">Facebook</span></a>
                                            <a class="a2a_button_x" target="_blank" rel="nofollow noopener"
                                                href="/#x"><span class="a2a_svg a2a_s__default a2a_s_x"
                                                    style="background-color: rgb(26, 26, 26);"><svg focusable="false"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 32 32">
                                                        <path fill="#fff"
                                                            d="M21.751 7h3.067l-6.7 7.658L26 25.078h-6.172l-4.833-6.32-5.531 6.32h-3.07l7.167-8.19L6 7h6.328l4.37 5.777L21.75 7Zm-1.076 16.242h1.7L11.404 8.74H9.58l11.094 14.503Z">
                                                        </path>
                                                    </svg></span><span class="a2a_label">X</span></a>
                                            <a class="a2a_button_copy_link" target="_blank" rel="nofollow noopener"
                                                href="/#copy_link"><span class="a2a_svg a2a_s__default a2a_s_link"
                                                    style="background-color: rgb(136, 137, 144);"><svg
                                                        focusable="false" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                        <path fill="#fff"
                                                            d="M7.591 21.177c0-.36.126-.665.377-.917l2.804-2.804a1.235 1.235 0 0 1 .913-.378c.377 0 .7.144.97.43-.026.028-.11.11-.255.25-.144.14-.24.236-.29.29a2.82 2.82 0 0 0-.2.256 1.056 1.056 0 0 0-.177.344 1.43 1.43 0 0 0-.046.37c0 .36.126.666.377.918a1.25 1.25 0 0 0 .918.377c.126.001.251-.015.373-.047.125-.037.242-.096.345-.175.09-.06.176-.127.256-.2.1-.094.196-.19.29-.29.14-.142.223-.23.25-.254.297.28.445.607.445.984 0 .36-.126.664-.377.916l-2.778 2.79a1.242 1.242 0 0 1-.917.364c-.36 0-.665-.118-.917-.35l-1.982-1.97a1.223 1.223 0 0 1-.378-.9l-.001-.004Zm9.477-9.504c0-.36.126-.665.377-.917l2.777-2.79a1.235 1.235 0 0 1 .913-.378c.35 0 .656.12.917.364l1.984 1.968c.254.252.38.553.38.903 0 .36-.126.665-.38.917l-2.802 2.804a1.238 1.238 0 0 1-.916.364c-.377 0-.7-.14-.97-.418.026-.027.11-.11.255-.25a7.5 7.5 0 0 0 .29-.29c.072-.08.139-.166.2-.255.08-.103.14-.22.176-.344.032-.12.048-.245.047-.37 0-.36-.126-.662-.377-.914a1.247 1.247 0 0 0-.917-.377c-.136 0-.26.015-.37.046-.114.03-.23.09-.346.175a3.868 3.868 0 0 0-.256.2c-.054.05-.15.148-.29.29-.14.146-.222.23-.25.258-.294-.278-.442-.606-.442-.983v-.003ZM5.003 21.177c0 1.078.382 1.99 1.146 2.736l1.982 1.968c.745.75 1.658 1.12 2.736 1.12 1.087 0 2.004-.38 2.75-1.143l2.777-2.79c.75-.747 1.12-1.66 1.12-2.737 0-1.106-.392-2.046-1.183-2.818l1.186-1.185c.774.79 1.708 1.186 2.805 1.186 1.078 0 1.995-.376 2.75-1.13l2.803-2.81c.751-.754 1.128-1.671 1.128-2.748 0-1.08-.382-1.993-1.146-2.738L23.875 6.12C23.13 5.372 22.218 5 21.139 5c-1.087 0-2.004.382-2.75 1.146l-2.777 2.79c-.75.747-1.12 1.66-1.12 2.737 0 1.105.392 2.045 1.183 2.817l-1.186 1.186c-.774-.79-1.708-1.186-2.805-1.186-1.078 0-1.995.377-2.75 1.132L6.13 18.426c-.754.755-1.13 1.672-1.13 2.75l.003.001Z">
                                                        </path>
                                                    </svg></span><span class="a2a_label">Copy Link</span></a>
                                            <div style="clear: both;"></div>
                                        </div>
                                        <script async="" src="https://static.addtoany.com/menu/page.js"></script>
                                        <!-- AddToAny END -->

                                    </div>

                                    <div class="post-block mt-4 pt-2 post-author">
                                        <h4 class="mb-3">Author</h4>
                                        <div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
                                            <a href="blog-post.html">
                                                <img src="img/avatars/avatar.jpg" alt="">
                                            </a>
                                        </div>
                                        <p class="text-justify"><strong class="name"><a href="#"
                                                    class="text-4 pb-2 pt-2 d-block">John Doe</a></strong></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod
                                            odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in
                                            adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis
                                            placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. </p>
                                    </div>
                                    <div id="comments" class="post-block mt-5 post-comments">
                                        <h4 class="mb-3">Comments (3)</h4>

                                        <ul class="comments">
                                            <li>
                                                <div class="comment">
                                                    <div
                                                        class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                        <img class="avatar" alt=""
                                                            src="img/avatars/avatar-2.jpg">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                        <span class="comment-by">
                                                            <strong>John Doe</strong>
                                                            <span class="float-end">
                                                                <span> <a href="#"><i class="fas fa-reply"></i>
                                                                        Reply</a></span>
                                                            </span>
                                                        </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                            viverra euismod odio, gravida pellentesque urna varius
                                                            vitae, gravida pellentesque urna varius vitae. Lorem ipsum
                                                            dolor sit amet, consectetur adipiscing elit. Nam viverra
                                                            euismod odio, gravida pellentesque urna varius vitae. Sed
                                                            dui lorem, adipiscing in adipiscing et, interdum nec metus.
                                                            Mauris ultricies, justo eu convallis placerat, felis enim
                                                            ornare nisi, vitae mattis nulla ante id dui.</p>
                                                        <span class="date float-end">January 12, 2024 at 1:38 pm</span>
                                                    </div>
                                                </div>

                                                <ul class="comments reply">
                                                    <li>
                                                        <div class="comment">
                                                            <div
                                                                class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                                <img class="avatar" alt=""
                                                                    src="img/avatars/avatar-3.jpg">
                                                            </div>
                                                            <div class="comment-block">
                                                                <div class="comment-arrow"></div>
                                                                <span class="comment-by">
                                                                    <strong>John Doe</strong>
                                                                    <span class="float-end">
                                                                        <span> <a href="#"><i
                                                                                    class="fas fa-reply"></i>
                                                                                Reply</a></span>
                                                                    </span>
                                                                </span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Nam viverra euismod odio, gravida pellentesque
                                                                    urna varius vitae, gravida pellentesque urna varius
                                                                    vitae.</p>
                                                                <span class="date float-end">January 12, 2024 at 1:38
                                                                    pm</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="comment">
                                                            <div
                                                                class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                                <img class="avatar" alt=""
                                                                    src="img/avatars/avatar-4.jpg">
                                                            </div>
                                                            <div class="comment-block">
                                                                <div class="comment-arrow"></div>
                                                                <span class="comment-by">
                                                                    <strong>John Doe</strong>
                                                                    <span class="float-end">
                                                                        <span> <a href="#"><i
                                                                                    class="fas fa-reply"></i>
                                                                                Reply</a></span>
                                                                    </span>
                                                                </span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Nam viverra euismod odio, gravida pellentesque
                                                                    urna varius vitae, gravida pellentesque urna varius
                                                                    vitae.</p>
                                                                <span class="date float-end">January 12, 2024 at 1:38
                                                                    pm</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="comment">
                                                    <div
                                                        class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                        <img class="avatar" alt=""
                                                            src="img/avatars/avatar.jpg">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                        <span class="comment-by">
                                                            <strong>John Doe</strong>
                                                            <span class="float-end">
                                                                <span> <a href="#"><i class="fas fa-reply"></i>
                                                                        Reply</a></span>
                                                            </span>
                                                        </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        <span class="date float-end">January 12, 2024 at 1:38 pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comment">
                                                    <div
                                                        class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                        <img class="avatar" alt=""
                                                            src="img/avatars/avatar.jpg">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                        <span class="comment-by">
                                                            <strong>John Doe</strong>
                                                            <span class="float-end">
                                                                <span> <a href="#"><i class="fas fa-reply"></i>
                                                                        Reply</a></span>
                                                            </span>
                                                        </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        <span class="date float-end">January 12, 2024 at 1:38 pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>

                                    <div class="post-block mt-5 post-leave-comment">
                                        <h4 class="mb-3">Leave a comment</h4>

                                        <form class="contact-form p-4 rounded bg-color-grey"
                                            action="php/contact-form.php" method="POST">
                                            <div class="p-2">
                                                <div class="row">
                                                    <div class="form-group col-lg-6">
                                                        <label
                                                            class="form-label required font-weight-bold text-dark">Full
                                                            Name</label>
                                                        <input type="text" value=""
                                                            data-msg-required="Please enter your name."
                                                            maxlength="100" class="form-control" name="name"
                                                            required="">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label
                                                            class="form-label required font-weight-bold text-dark">Email
                                                            Address</label>
                                                        <input type="email" value=""
                                                            data-msg-required="Please enter your email address."
                                                            data-msg-email="Please enter a valid email address."
                                                            maxlength="100" class="form-control" name="email"
                                                            required="">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col">
                                                        <label
                                                            class="form-label required font-weight-bold text-dark">Comment</label>
                                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control"
                                                            name="message" required=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col mb-0">
                                                        <input type="submit" value="Post Comment"
                                                            class="btn btn-primary btn-modern"
                                                            data-loading-text="Loading...">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div> --}}

                                </div>
                            </article>

                        </div>
                    </div>
                </div>


            </div>


        </div>

        @include('partials.footer')
    </div>

    <!-- Vendor -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
    <script src="{{ asset('vendor/lazysizes/lazysizes.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('vendor/vide/jquery.vide.min.js') }}"></script>
    <script src="{{ asset('vendor/vivus/vivus.min.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('js/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('js/theme.init.js') }}"></script>

</body>

</html>
