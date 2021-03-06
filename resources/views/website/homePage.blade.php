<!DOCTYPE html>
<html lang="en">

<head>
    <title>سوبر الأخباري</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="{{asset('assets_website/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_website/css/font-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_website/css/style.css')}}" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets_website/assets/img/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets_website/assets/img/apple-icon.png')}}">

    <!-- Lazyload (must be placed in head in order to work) -->
    <script src="{{asset('assets_website/js/lazysizes.min.js')}}"></script>

</head>

<body class="bg-light style-default style-rounded">

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
        </div>
    </div>

    <!-- Bg Overlay -->
    <div class="content-overlay"></div>

    <!-- Sidenav -->
    <header class="sidenav" id="sidenav">

        <!-- close -->
        <div class="sidenav__close">
            <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
                <i class="ui-close sidenav__close-icon"></i>
            </button>
        </div>

        <!-- Nav -->
        <nav class="sidenav__menu-container">
            <ul class="sidenav__menu" role="menubar">
                <li>
                    <a href="#" class="sidenav__menu-url">الصفحة الرئيسية</a>
                </li>
                <li>
                    <a href="#" class="sidenav__menu-url">صفحات</a>
                    <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
                    <ul class="sidenav__menu-dropdown">
                        <li><a href="about.html" class="sidenav__menu-url">عنا</a></li>
                        <li><a href="contact.html" class="sidenav__menu-url">اتصل بنا</a></li>
                        <li><a href="search-results.html" class="sidenav__menu-url">نتائج البحث</a></li>
                        <li><a href="categories.html" class="sidenav__menu-url">فئات المحتوى</a></li>
                        <li><a href="single-post.html" class="sidenav__menu-url">عرض المحتوى</a></li>
                        <li><a href="404.html" class="sidenav__menu-url">404</a></li>
                    </ul>
                </li>

                <!-- Categories -->
                <li>
                    <a href="#" class="sidenav__menu-url">تكنولوجيا</a>
                </li>
                <li>
                    <a href="#" class="sidenav__menu-url">الجمال والصحة</a>
                </li>
                <li>
                    <a href="#" class="sidenav__menu-url">متحرك</a>
                </li>
            </ul>
        </nav>

        <div class="socials sidenav__socials">
            <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
                <i class="ui-facebook"></i>
            </a>
            <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
                <i class="ui-twitter"></i>
            </a>
            <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
                <i class="ui-google"></i>
            </a>
            <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
                <i class="ui-youtube"></i>
            </a>
            <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
                <i class="ui-instagram"></i>
            </a>
        </div>
    </header> <!-- end sidenav -->

    <main class="main oh" id="main">

        <!-- Top Bar -->
        <div class="top-bar d-none d-lg-block">
            <div class="container">
                <div class="row">

                    <!-- Top menu -->
                    <div class="col-lg-6">
                        <ul class="top-menu">
                            <li><a href="#">عنا</a></li>
                            <li><a href="#">دعاية</a></li>
                            <li><a href="#">اتصل بنا</a></li>
                        </ul>
                    </div>

                    <!-- Socials -->
                    <div class="col-lg-6">
                        <div class="socials nav__socials socials--nobase socials--white justify-content-start">
                            <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
                                <i class="ui-facebook"></i>
                            </a>
                            <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
                                <i class="ui-twitter"></i>
                            </a>
                            <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
                                <i class="ui-google"></i>
                            </a>
                            <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
                                <i class="ui-youtube"></i>
                            </a>
                            <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
                                <i class="ui-instagram"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end top bar -->

        <!-- Navigation -->
        <header class="nav">

            <div class="nav__holder nav--sticky">
                <div class="container relative">
                    <div class="flex-parent">

                        <!-- Side Menu Button -->
                        <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
                            <span class="nav-icon-toggle__box">
                                <span class="nav-icon-toggle__inner"></span>
                            </span>
                        </button>

                        <!-- Logo -->
                        <a href="index.html" class="logo">
                            <img class="logo__img"  src="{{asset('assets_website/assets/img/1-2.jpg')}}"  alt="logo" width="53%";>
                        </a>

                        <!-- Nav-wrap -->
                        <nav class="flex-child nav__wrap d-none d-lg-block">
                            <ul class="nav__menu">

                                <li class="active">
                                    <a href="index.html">الصفحة الرئيسية</a>
                                </li>

                                <li class="nav__dropdown">
                                    <a href="#">تكنولوجيا</a>
                                    <ul class="nav__dropdown-menu nav__megamenu">
                                        <li>
                                            <div class="nav__megamenu-wrap">
                                                <div class="row">

                                                    <div class="col nav__megamenu-item">
                                                        <article class="entry">
                                                            <div class="entry__img-holder">
                                                                <a href="single-post.html">
                                                                    <img src="{{asset('assets_website/img/content/thumb/post-1.jpg')}}" alt="" class="entry__img">
                                                                </a>
                                                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">تکنولوژی</a>
                                                            </div>

                                                            <div class="entry__body">
                                                                <h2 class="entry__title">
                                                                    <a href="single-post.html">لماذا لم تعد مشغلات Android شعبية؟</a>
                                                                </h2>
                                                            </div>
                                                        </article>
                                                    </div>

                                                    <div class="col nav__megamenu-item">
                                                        <article class="entry">
                                                            <div class="entry__img-holder">
                                                                <a href="single-post.html">
                                                                    <img src="{{asset('assets_website/img/content/thumb/post-2.jpg')}}" alt="" class="entry__img">
                                                                </a>
                                                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">تکنولوژی</a>
                                                            </div>

                                                            <div class="entry__body">
                                                                <h2 class="entry__title">
                                                                    <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                                                </h2>
                                                            </div>
                                                        </article>
                                                    </div>

                                                    <div class="col nav__megamenu-item">
                                                        <article class="entry">
                                                            <div class="entry__img-holder">
                                                                <a href="single-post.html">
                                                                    <img src="{{asset('assets_website/img/content/thumb/post-3.jpg')}}" alt="" class="entry__img">
                                                                </a>
                                                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">تکنولوژی</a>
                                                            </div>

                                                            <div class="entry__body">
                                                                <h2 class="entry__title">
                                                                    <a href="single-post.html">مقابل ألفي يورو ، ما هي المنتجات الأخرى التي يمكنك شراؤها بدلاً من Galaxy Fold؟</a>
                                                                </h2>
                                                            </div>
                                                        </article>
                                                    </div>

                                                    <div class="col nav__megamenu-item">
                                                        <article class="entry">
                                                            <div class="entry__img-holder">
                                                                <a href="single-post.html">
                                                                    <img src="{{asset('assets_website/img/content/thumb/post-4.jpg')}}" alt="" class="entry__img">
                                                                </a>
                                                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">تکنولوژی</a>
                                                            </div>

                                                            <div class="entry__body">
                                                                <h2 class="entry__title">
                                                                    <a href="single-post.html">مميزات واجهة المستخدم UI من سامسونج</a>
                                                                </h2>
                                                            </div>
                                                        </article>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                    </ul> <!-- end megamenu -->
                                </li>

                                <li class="nav__dropdown">
                                    <a href="#">صفحات</a>
                                    <ul class="nav__dropdown-menu">
                                        <li><a href="about.html">عنا</a></li>
                                        <li><a href="contact.html">اتصل بنا</a></li>
                                        <li><a href="search-results.html">نتائج البحث</a></li>
                                        <li><a href="categories.html">فئات المحتوى</a></li>
                                        <li><a href="single-post.html">عرض المحتوى</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>


                            </ul> <!-- end menu -->
                        </nav> <!-- end nav-wrap -->

                        <!-- Nav Right -->
                        <div class="nav__right">

                            <!-- Search -->
                            <div class="nav__right-item nav__search">
                                <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                                    <i class="ui-search nav__search-trigger-icon"></i>
                                </a>
                                <div class="nav__search-box" id="nav__search-box">
                                    <form class="nav__search-form">
                                        <input type="text" placeholder="البحث عن المقالات" class="nav__search-input">
                                        <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                                            <i class="ui-search nav__search-icon"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div> <!-- end nav right -->

                    </div> <!-- end flex-parent -->
                </div> <!-- end container -->

            </div>
        </header> <!-- end navigation -->

        <marquee behavior="alternate" bgcolor="red" direction="right" height="41px" style="padding: 7px" scrollamount="5" onMouseOver="stop ();" onMouseOut="start ();">
            <font size="+1.1" color="#FFFFFF" >{!! $urgents !!}</font>
        </marquee>


        <!-- Trending Now -->
        <div class="container">
            <div class="trending-now">
                <span class="trending-now__label">
                    <i class="ui-flash"></i>
                    أخبار عاجله</span>
                <div class="newsticker">
                    <ul class="newsticker__list">
                        <li class="newsticker__item"><a href="single-post.html" class="newsticker__item-url">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a></li>
                        <li class="newsticker__item"><a href="single-post-1.html" class="newsticker__item-url">تم تقديم لينوفو Z6 بيرو بكاميرا رباعية النواة و Snapdragon 2</a></li>
                        <li class="newsticker__item"><a href="single-post-3.html" class="newsticker__item-url">تعمل شركة Samsung على هاتفين جديدين قابلين للطي</a></li>
                    </ul>
                </div>
                <div class="newsticker-buttons">
                    <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-left"></i></button>
                    <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <!-- Featured Posts Grid -->
        <section class="featured-posts-grid">
            <div class="container">
                <div class="row row-8">

                    <div class="col-lg-6">

                        <!-- Small post -->
                        <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                            <article class="entry card post-list featured-posts-grid__entry">
                                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{asset('assets_website/img/content/thumb/post-5.jpg')}}">
                                    <a href="single-post.html" class="thumb-url"></a>
                                    <img src="{{asset('assets_website/img/content/thumb/post-5.jpg')}}" alt="" class="entry__img d-none">
                                    <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">کتاب</a>
                                </div>

                                <div class="entry__body post-list__body card__body">
                                    <h2 class="entry__title">
                                        <a href="single-post.html">كتاب علم النفس يجب أن تقرأ من أجل حياة أفضل</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                          2019 may
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div> <!-- end post -->

                        <!-- Small post -->
                        <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                            <article class="entry card post-list featured-posts-grid__entry">
                                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{ asset('assets_website/img/content/thumb/post-6.jpg')}}">
                                    <a href="single-post.html" class="thumb-url"></a>
                                    <img src="{{asset('assets_website/img/content/thumb/post-6.jpg')}}" alt="" class="entry__img d-none">
                                    <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">اپلیکیشن و نرم افزار</a>
                                </div>

                                <div class="entry__body post-list__body card__body">
                                    <h2 class="entry__title">
                                        <a href="single-post.html">لماذا لم تعد مشغلات Android شعبية؟</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                             2019 may
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div> <!-- end post -->

                        <!-- Small post -->
                        <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                            <article class="entry card post-list featured-posts-grid__entry">
                                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{asset('assets_website/img/content/thumb/post-7.jpg')}}">
                                    <a href="single-post.html" class="thumb-url"></a>
                                    <img src="{{asset('assets_website/img/content/thumb/post-7.jpg')}}" alt="" class="entry__img d-none">
                                    <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">معرفی محصول</a>
                                </div>

                                <div class="entry__body post-list__body card__body">
                                    <h2 class="entry__title">
                                        <a href="single-post.html">Huawei P30 Light Boxفتتح في DigiKala Mag</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                             2019 may
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div> <!-- end post -->

                    </div> <!-- end col -->

                    <div class="col-lg-6">

                        <!-- Large post -->
                        <div class="featured-posts-grid__item featured-posts-grid__item--lg">
                            <article class="entry card featured-posts-grid__entry">
                                <div class="entry__img-holder card__img-holder">
                                    <a href="single-post.html">
                                        <img src="{{asset('assets_website/img/content/thumb/post-8.jpg')}}" alt="" class="entry__img">
                                    </a>
                                    <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">موبایل و گجت</a>
                                </div>

                                <div class="entry__body card__body">
                                    <h2 class="entry__title">
                                        <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                             2019 may
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div> <!-- end large post -->
                    </div>

                </div>
            </div>
        </section> <!-- end featured posts grid -->

        <div class="main-container container pt-24" id="main-container">

            <!-- Content -->
            <div class="row">

                <!-- Posts -->
                <div class="col-lg-8 blog__content">

                    <!-- Latest News -->
                    <section class="section tab-post mb-16">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title">اخر الاخبار</h3>

                            <div class="tabs tab-post__tabs">
                                <ul class="tabs__list">
                                    @foreach ($categories as $category)
                                    <li class="tabs__item tabs__item--active">
                                        <a href="{{ route('section',$category->id) }}" class="tabs__trigger">{{ $category->name }}</a>
                                    </li>
                                    @endforeach
                                </ul> <!-- end tabs -->
                            </div>
                        </div>

                        <!-- tab content -->
                        <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

                            <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
                                <div class="row card-row">
                                    @yield('sport')
                                    @foreach ($posts as $post)


                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <td><img class="entry__img lazyload" src="{{asset('images/posts/'.$post->photo)}}" alt="No Image"></td>

                                                        {{-- <img src="{{asset('assets_website/img/content/thumb/post-8.jpg')}}" class="entry__img lazyload" alt="" /> --}}
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{{ $post->category->name }}</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">{{ $post->title }}</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">حسن</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            {{ $post->created_at->diffForHumans()}}
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>{{ $post->post}}</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    @endforeach
                                    {{-- <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-9.jpg')}}" src="{{asset('assets_website/img/empty.png" class="entry__img lazyload')}}" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>يعد اختيار الكتاب المناسب لأطفالك مهمة صعبة. لديّ صديق يشرح لوالديه في سن مبكرة ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-2-2.jpg')}}" src="{{asset('assets_website/img/empty.png" class="entry__img lazyload')}}" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>الرئيس التنفيذي لشركة Oneplus ، Pete Lau ، تمت مقابلتهم مؤخرًا على موقع Verge وبعض الشائعات التي ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-5-2.jpg')}}" src="{{asset('assets_website/img/empty.png" class="entry__img lazyload')}}" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">كتاب علم النفس يجب أن تقرأ من أجل حياة أفضل</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                             2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>في هذه الأيام ، أدت مشاكل الحياة الحديثة إلى إيلاء المزيد من الاهتمام لاحتياجاتهم النفسية. مشاكل مع ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div> --}}
                                </div>
                            </div> <!-- end pane 1 -->

                            <div class="tabs__content-pane" id="tab-world">
                                <div class="row card-row">
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-9.jpg')}}" src="{{asset('assets_website/img/empty.png" class="entry__img lazyload')}}" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                           2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>يعد اختيار الكتاب المناسب لأطفالك مهمة صعبة. لديّ صديق يشرح لوالديه في سن مبكرة ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-8.jpg')}}" src="{{asset('assets_website/img/empty.png" class="entry__img lazyload')}}" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>بعد أن أعلنت شركة Samsung قرارها بتأجيل إصدار Galaxy FX ، كانت هناك شائعات عن حدوث تأخير في العرض ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-5-2.jpg')}}" src="{{asset('assets_website/img/empty.png" class="entry__img lazyload')}}" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">كتاب علم النفس يجب أن تقرأ من أجل حياة أفضل</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                             2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>في هذه الأيام ، أدت مشاكل الحياة الحديثة إلى إيلاء المزيد من الاهتمام لاحتياجاتهم النفسية. مشاكل مع ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-2-2.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>الرئيس التنفيذي لشركة Oneplus ، Pete Lau ، تمت مقابلتهم مؤخرًا على موقع Verge وبعض الشائعات التي ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div> <!-- end pane 2 -->

                            <div class="tabs__content-pane" id="tab-lifestyle">
                                <div class="row card-row">
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-9.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                           2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>يعد اختيار الكتاب المناسب لأطفالك مهمة صعبة. لديّ صديق يشرح لوالديه في سن مبكرة ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-8.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                             2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>بعد أن أعلنت شركة Samsung قرارها بتأجيل إصدار Galaxy FX ، كانت هناك شائعات عن حدوث تأخير في العرض ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-2-2.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>الرئيس التنفيذي لشركة Oneplus ، Pete Lau ، تمت مقابلتهم مؤخرًا على موقع Verge وبعض الشائعات التي ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-5-2.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">كتاب علم النفس يجب أن تقرأ من أجل حياة أفضل</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>في هذه الأيام ، أدت مشاكل الحياة الحديثة إلى إيلاء المزيد من الاهتمام لاحتياجاتهم النفسية. مشاكل مع ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div> <!-- end pane 3 -->

                            <div class="tabs__content-pane" id="tab-business">
                                <div class="row card-row">
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-2-2.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                             2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>الرئيس التنفيذي لشركة Oneplus ، Pete Lau ، تمت مقابلتهم مؤخرًا على موقع Verge وبعض الشائعات التي ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-5-2.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">كتاب علم النفس يجب أن تقرأ من أجل حياة أفضل</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>في هذه الأيام ، أدت مشاكل الحياة الحديثة إلى إيلاء المزيد من الاهتمام لاحتياجاتهم النفسية. مشاكل مع ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-9.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>يعد اختيار الكتاب المناسب لأطفالك مهمة صعبة. لديّ صديق يشرح لوالديه في سن مبكرة ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-8.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                             2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>بعد أن أعلنت شركة Samsung قرارها بتأجيل إصدار Galaxy FX ، كانت هناك شائعات عن حدوث تأخير في العرض ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div> <!-- end pane 4 -->

                            <div class="tabs__content-pane" id="tab-fashion">
                                <div class="row card-row">
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-8.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                           2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>بعد أن أعلنت شركة Samsung قرارها بتأجيل إصدار Galaxy FX ، كانت هناك شائعات عن حدوث تأخير في العرض ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-2-2.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>الرئيس التنفيذي لشركة Oneplus ، Pete Lau ، تمت مقابلتهم مؤخرًا على موقع Verge وبعض الشائعات التي ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-5-2.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">كتاب علم النفس يجب أن تقرأ من أجل حياة أفضل</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>في هذه الأيام ، أدت مشاكل الحياة الحديثة إلى إيلاء المزيد من الاهتمام لاحتياجاتهم النفسية. مشاكل مع ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-9.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>يعد اختيار الكتاب المناسب لأطفالك مهمة صعبة. لديّ صديق يشرح لوالديه في سن مبكرة ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div> <!-- end pane 5 -->
                        </div> <!-- end tab content -->
                    </section> <!-- end latest news -->

                </div> <!-- end posts -->

                <!-- Sidebar -->
                <aside class="col-lg-4 sidebar sidebar--right">

                    <!-- Widget Popular Posts -->
                    <aside class="widget widget-popular-posts">
                        <h4 class="widget-title">معظم المواد الشعبية</h4>
                        <ul class="post-list-small">
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="single-post.html">
                                                <img data-src="{{asset('assets_website/img/content/thumb/post-8.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>المؤلف:</span>
                                                <a href="#">محمد</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                2019 may
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="single-post.html">
                                                <img data-src="{{asset('assets_website/img/content/thumb/post-2.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>المؤلف:</span>
                                                <a href="#">محمد</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                 2019 may
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="single-post.html">
                                                <img data-src="{{asset('assets_website/img/content/thumb/post-6.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لماذا لم تعد مشغلات Android شعبية؟</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>المؤلف:</span>
                                                <a href="#">محمد</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                 2019 may
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="single-post.html">
                                                <img data-src="{{asset('assets_website/img/content/thumb/post-5.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">كتاب علم النفس يجب أن تقرأ من أجل حياة أفضل</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>المؤلف:</span>
                                                <a href="#">محمد</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                 2019 may
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </aside> <!-- end widget popular posts -->

                    <!-- Widget Newsletter -->
                    <aside class="widget widget_mc4wp_form_widget">
                        <h4 class="widget-title">النشرة الإخبارية</h4>
                        <p class="newsletter__text">
                            <i class="ui-email newsletter__icon"></i>
                            اشترك في آخر الأخبار
                        </p>
                        <form class="mc4wp-form" method="post">
                            <div class="mc4wp-form-fields">
                                <div class="form-group">
                                    <input type="email" name="EMAIL" placeholder="البريد الإلكتروني" required="">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-lg btn-color" value="عضوية">
                                </div>
                            </div>
                        </form>
                    </aside> <!-- end widget newsletter -->

                    <!-- Widget Ad 300 -->
                    <aside class="widget widget_media_image">
                        <a href="#">
                            <img src="{{asset('assets_website/img/content/mag-1.jpg')}}" alt="">
                        </a>
                    </aside> <!-- end widget ad 300 -->

                </aside> <!-- end sidebar -->

            </div> <!-- end content -->

            <!-- Ad Banner 728 -->
            <div class="text-center pb-48">
                <a href="#">
                    <img src="{{asset('assets_website/img/content/cinema-banner.jpg')}}" alt="">
                </a>
            </div>

            <!-- Carousel posts -->
            <section class="section mb-0">
                <div class="title-wrap title-wrap--line">
                    <h3 class="section-title">معظم المواد المشاهدة</h3>
                </div>

                <!-- Slider -->
                <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url({{asset('assets_website/img/content/thumb/post-8.jpg')}};">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                </h2>
                            </div>
                            <a href="single-post.html" class="thumb-url"></a>
                        </div>
                    </article>
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url({{asset('assets_website/img/content/thumb/post-9.jpg')}};">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="single-post.html">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                </h2>
                            </div>
                            <a href="single-post.html" class="thumb-url"></a>
                        </div>
                    </article>
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url({{asset('assets_website/img/content/thumb/post-7.jpg')}};">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="single-post.html">Huawei P30 Light Boxفتتح في DigiKala Mag</a>
                                </h2>
                            </div>
                            <a href="single-post.html" class="thumb-url"></a>
                        </div>
                    </article>
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url({{asset('assets_website/img/content/thumb/post-6.jpg')}};">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="single-post.html">لماذا لم تعد مشغلات Android شعبية؟</a>
                                </h2>
                            </div>
                            <a href="single-post.html" class="thumb-url"></a>
                        </div>
                    </article>
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url({{asset('assets_website/img/content/thumb/post-2.jpg')}};">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                </h2>
                            </div>
                            <a href="single-post.html" class="thumb-url"></a>
                        </div>
                    </article>
                </div> <!-- end slider -->

            </section> <!-- end carousel posts -->


            <!-- Posts from categories -->
            <section class="section mb-0">
                <div class="row">

                    <!-- Technology -->
                    <div class="col-md-6">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title">تكنولوجيا</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <article class="entry thumb thumb--size-2">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url({{asset('assets_website/img/content/thumb/post-8.jpg')}};">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder thumb-text-holder--1">
                                            <h2 class="thumb-entry-title">
                                                <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>المؤلف:</span>
                                                    <a href="#">محمد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    2019 may
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="single-post.html" class="thumb-url"></a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">أبجد هوز النص أبسوم مع بساطة لا يمكن تفسيره لصناعة الطباعة؟</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">أبجد هوز النص أبسوم مع بساطة لا يمكن تفسيره لصناعة الطباعة؟</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">لورمأبجد هوز النص أبسوم مع بساطة لا يمكن تفسيره لصناعة الطباعة؟</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">أبجد هوز النص أبسوم مع بساطة لا يمكن تفسيره لصناعة الطباعة؟</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- end technology -->

                    <!-- Travel -->
                    <div class="col-md-6">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title">الكتب والأدب</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <article class="entry thumb thumb--size-2">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url({{asset('assets_website/img/content/thumb/post-9.jpg')}};">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder thumb-text-holder--1">
                                            <h2 class="thumb-entry-title">
                                                <a href="single-post.html">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>المؤلف:</span>
                                                    <a href="#">محمد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                     2019 may
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="single-post.html" class="thumb-url"></a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- end travel -->

                    <!-- Cryptocurrency -->
                    <div class="col-md-6">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title">الجوال والأداة</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <article class="entry thumb thumb--size-2">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url({{asset('assets_website/img/content/thumb/post-2-2.jpg')}};">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder thumb-text-holder--1">
                                            <h2 class="thumb-entry-title">
                                                <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>المؤلف:</span>
                                                    <a href="#">محمد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                     2019 may
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="single-post.html" class="thumb-url"></a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- end cryptocurrency -->

                    <!-- Investment -->
                    <div class="col-md-6">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title">تكنولوجيا</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <article class="entry thumb thumb--size-2">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url({{asset('assets_website/img/content/thumb/post-8.jpg')}};">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder thumb-text-holder--1">
                                            <h2 class="thumb-entry-title">
                                                <a href="single-post.html">
                                                    سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>المؤلف:</span>
                                                    <a href="#">محمد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    2019 may
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="single-post.html" class="thumb-url"></a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">لالنص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- end investment -->

                </div>
            </section> <!-- end posts from categories -->

            <!-- Content Secondary -->
            <div class="row">

                <!-- Posts -->
                <div class="col-lg-8 blog__content mb-72">

                    <!-- Worldwide News -->
                    <section class="section">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title">أعلى أخبار السلع</h3>
                            <a href="#" class="all-posts-url">إظهار الكل</a>
                        </div>

                        <article class="entry card post-list">
                            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{asset('assets_website/img/content/thumb/post-8.jpg')}}">
                                <a href="single-post.html" class="thumb-url"></a>
                                <img src="{{asset('assets_website/img/content/thumb/post-8.jpg')}}" alt="" class="entry__img d-none">
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">موبایل و گجت</a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                           2019 may
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>بعد أن أعلنت شركة Samsung قرارها بتأجيل إصدار Galaxy FX ، كانت هناك شائعات عن حدوث تأخير في العرض ...</p>
                                </div>
                            </div>
                        </article>

                        <article class="entry card post-list">
                            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: urlasset({{('assets_website/img/content/thumb/post-2-2.jpg')}}">
                                <a href="single-post.html" class="thumb-url"></a>
                                <img src="{{asset('assets_website/img/content/thumb/post-2-2.jpg')}}" alt="" class="entry__img d-none">
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">موبایل و گجت</a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                           2019 may
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>الرئيس التنفيذي لشركة Oneplus ، Pete Lau ، تمت مقابلتهم مؤخرًا على موقع Verge وبعض الشائعات التي ...</p>
                                </div>
                            </div>
                        </article>

                        <article class="entry card post-list">
                            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{asset('assets_website/img/content/thumb/post-9.jpg')}}">
                                <a href="single-post.html" class="thumb-url"></a>
                                <img src="{{asset('assets_website/img/content/thumb/post-9.jpg')}}" alt="" class="entry__img d-none">
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">کتاب و ادبیات</a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="single-post.html">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            2019 may
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>يعد اختيار الكتاب المناسب لأطفالك مهمة صعبة. لديّ صديق يشرح لوالديه في سن مبكرة ...</p>
                                </div>
                            </div>
                        </article>

                        <article class="entry card post-list">
                            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{asset('assets_website/img/content/thumb/post-5-2.jpg')}}">
                                <a href="single-post.html" class="thumb-url"></a>
                                <img src="{{asset('assets_website/img/content/thumb/post-5-2.jpg')}}" alt="" class="entry__img d-none">
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">کتاب و ادبیات</a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="single-post.html">كتاب علم النفس يجب أن تقرأ من أجل حياة أفضل </a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            2019 may
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>في هذه الأيام ، أدت مشاكل الحياة الحديثة إلى إيلاء المزيد من الاهتمام لاحتياجاتهم النفسية. مشاكل مع ...</p>
                                </div>
                            </div>
                        </article>

                        <article class="entry card post-list">
                            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{asset('assets_website/img/content/thumb/post-8.jpg')}}">
                                <a href="single-post.html" class="thumb-url"></a>
                                <img src="{{asset('assets_website/img/content/thumb/post-8.jpg')}}" alt="" class="entry__img d-none">
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">موبایل و گجت</a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            2019 may
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>بعد أن أعلنت شركة Samsung قرارها بتأجيل إصدار Galaxy FX ، كانت هناك شائعات عن حدوث تأخير في العرض ...</p>
                                </div>
                            </div>
                        </article>

                        <article class="entry card post-list">
                            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{asset('assets_website/img/content/thumb/post-2-2.jpg')}}">
                                <a href="single-post.html" class="thumb-url"></a>
                                <img src="{{asset('assets_website/img/content/thumb/post-2-2.jpg')}}" alt="" class="entry__img d-none">
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">موبایل و گجت</a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                           2019 may
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>الرئيس التنفيذي لشركة Oneplus ، Pete Lau ، تمت مقابلتهم مؤخرًا على موقع Verge وبعض الشائعات التي ...</p>
                                </div>
                            </div>
                        </article>
                    </section> <!-- end worldwide news -->

                    <!-- Pagination -->
                    <nav class="pagination">
                        <span class="pagination__page pagination__page--current">۱</span>
                        <a href="#" class="pagination__page">۲</a>
                        <a href="#" class="pagination__page">۳</a>
                        <a href="#" class="pagination__page">۴</a>
                        <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-left"></i></a>
                    </nav>

                </div> <!-- end posts -->

                <!-- Sidebar 1 -->
                <aside class="col-lg-4 sidebar sidebar--1 sidebar--right">

                    <!-- Widget Categories -->
                    <aside class="widget widget_categories">
                        <h4 class="widget-title">بعد التصنيف</h4>
                        <ul>
                            <li><a href="categories.html">تكنولوجيا <span class="categories-count">۵</span></a></li>
                            <li><a href="categories.html">الثقافة والفن <span class="categories-count">۷</span></a></li>
                            <li><a href="categories.html">الجوال والأداة <span class="categories-count">۵</span></a></li>
                            <li><a href="categories.html">کتاب <span class="categories-count">۸</span></a></li>
                            <li><a href="categories.html">الصحة والجمال <span class="categories-count">۱۰</span></a></li>
                            <li><a href="categories.html">لايف ستايل<span class="categories-count">۶</span></a></li>
                        </ul>
                    </aside> <!-- end widget categories -->

                    <!-- Widget Recommended (Rating) -->
                    <aside class="widget widget-rating-posts">
                        <h4 class="widget-title">محرر منتخب</h4>
                        <article class="entry">
                            <div class="entry__img-holder">
                                <a href="single-post.html">
                                    <div class="thumb-container thumb-60">
                                        <img data-src="{{asset('assets_website/img/content/thumb/post-9.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" class="entry__img lazyload" alt="">
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body">
                                <div class="entry__header">

                                    <h2 class="entry__title">
                                        <a href="single-post.html">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                           2019 may
                                        </li>
                                    </ul>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-rating">
                                            <i class="ui-star"></i>
                                            <!--
                      --><i class="ui-star"></i>
                                            <!--
                      --><i class="ui-star"></i>
                                            <!--
                      --><i class="ui-star"></i>
                                            <!--
                      --><i class="ui-star-empty"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                        <article class="entry">
                            <div class="entry__img-holder">
                                <a href="single-post.html">
                                    <div class="thumb-container thumb-60">
                                        <img data-src="{{asset('assets_website/img/content/thumb/post-8.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" class="entry__img lazyload" alt="">
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body">
                                <div class="entry__header">

                                    <h2 class="entry__title">
                                        <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                           2019 may
                                        </li>
                                    </ul>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-rating">
                                            <i class="ui-star"></i>
                                            <!--
                      --><i class="ui-star"></i>
                                            <!--
                      --><i class="ui-star"></i>
                                            <!--
                      --><i class="ui-star"></i>
                                            <!--
                      --><i class="ui-star-empty"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </aside> <!-- end widget recommended (rating) -->
                </aside> <!-- end sidebar 1 -->
            </div> <!-- content secondary -->


        </div> <!-- end main container -->

        <!-- Footer -->
        <footer class="footer footer--light">
            <div class="container">
                <div class="footer__widgets">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget-logo">
                                <a href="index.html">
                                    <img class="logo__img"  src="{{asset('assets_website/img/1-2.jpg ')}}"  alt="logo" width="53%";>

                                </a>


                                <p class="copyright">

                                                              موقع اخباري لاخبار سريعة
                                </p>
                                <div class="socials socials--large socials--rounded mb-24">
                                    <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                                    <a href="#" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                                    <a href="#" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                                    <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                                    <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                                </div>
                            </aside>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <aside class="widget widget_nav_menu">
                                <h4 class="widget-title">الهاشتاج الساخنة</h4>
                                <ul>
                                    <li><a href="about.html">#تكنولوجيا</a></li>
                                    <li><a href="contact.html">#متحرك</a></li>
                                    <li><a href="categories.html">#کتاب</a></li>
                                    <li><a href="shortcodes.html">#فن</a></li>
                                    <li><a href="shortcodes.html">#الجمال</a></li>
                                    <li><a href="shortcodes.html">#رقمي</a></li>
                                </ul>
                            </aside>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <aside class="widget widget-popular-posts">
                                <h4 class="widget-title">معظم المواد الشعبية</h4>
                                <ul class="post-list-small">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry clearfix">
                                            <div class="post-list-small__img-holder">
                                                <div class="thumb-container thumb-100">
                                                    <a href="single-post.html">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-8.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" alt="" class="post-list-small__img--rounded lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <span>المؤلف:</span>
                                                        <a href="#">محمد</a>
                                                    </li>
                                                    <li class="entry__meta-date">
                                                       2019 may
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry clearfix">
                                            <div class="post-list-small__img-holder">
                                                <div class="thumb-container thumb-100">
                                                    <a href="single-post.html">
                                                        <img data-src="{{asset('assets_website/img/content/thumb/post-2.jpg')}}" src="{{asset('assets_website/img/empty.png')}}" alt="" class="post-list-small__img--rounded lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <span>المؤلف:</span>
                                                        <a href="#">محمد</a>
                                                    </li>
                                                    <li class="entry__meta-date">
                                                        2019 may
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </aside>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget_mc4wp_form_widget">
                                <h4 class="widget-title">النشرة الإخبارية</h4>
                                <p class="newsletter__text">
                                    <i class="ui-email newsletter__icon"></i>
                                    اشترك في آخر الأخبار
                                </p>
                                <form class="mc4wp-form" method="post">
                                    <div class="mc4wp-form-fields">
                                        <div class="form-group">
                                            <input type="email" name="EMAIL" placeholder="البريد الإلكتروني" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-lg btn-color" value="عضوية">
                                        </div>
                                    </div>
                                </form>
                            </aside>
                        </div>

                    </div>
                </div>
            </div> <!-- end container -->
        </footer> <!-- end footer -->

        <div id="back-to-top">
            <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
        </div>

    </main> <!-- end main-wrapper -->


    <!-- jQuery Scripts -->
    <script src="{{asset('assets_website/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets_website/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets_website/js/easing.min.js')}}"></script>
    <script src="{{asset('assets_website/js/owl-carousel.min.js')}}"></script>
    <script src="{{asset('assets_website/js/flickity.pkgd.min.js')}}"></script>
    <script src="{{asset('assets_website/js/twitterFetcher_min.js')}}"></script>
    <script src="{{asset('assets_website/js/jquery.newsTicker.min.js')}}"></script>
    <script src="{{asset('assets_website/js/modernizr.min.js')}}"></script>
    <script src="{{asset('assets_website/js/scripts.js')}}"></script>

</body>

</html>
