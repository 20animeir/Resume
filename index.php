<!DOCTYPE html>
<?php
error_reporting(0);

$direction = 'ltrclass';
$current_lang = 'EN';
$title_linear = 'title';
$iam = "I'm";
$myname = "Alireza Hosseini";
$footer_title = "Contact Us";
$title = "Alireza Hosseini Resume";
$brand = "myResume";
$home = "Home";
$knowledge = "Knowledge";
$information = "Information";
$education = "Education Level";
$language = "Lang";
$title_knowledge = "my Knowledge";
$title_knowledge2 = "my Knowledge About Programming";
$title_information = "my Information";
$title_education = "my Education Level";
$first_slide = "I am proficient in C# under Windows and Web.";
$second_slide = "I am skilled in web design and site building.";
$third_slide = "I am skilled in making telegram bots with php.";
$fourth_slide = "I have basic skills in photo editing and working with Photoshop.";

$langknow = "I am proficient in the languages mentioned below.";
$mydefinishen = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$education_text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";

if($_GET['lang']== 'fa'){
    $direction = 'rtlclass';
    $current_lang = 'FA';
    $title_linear = 'title2';
    $iam = "من";
    $myname = "علیرضا حسینی هستم";
    $footer_title = "تماس با ما";
    $title = "رزومه علیرضا حسینی";
    $brand = "رزومه من";
    $home = "خانه";
    $knowledge = "دانش";
    $information = "اطلاعات";
    $education = "تحصیلات";
    $language = "زبان";
    $title_knowledge = "دانش من";
    $title_knowledge2 = "دانش من درباره ی زبان های برنامه نویسی";
    $title_information = "اطلاعات من";
    $title_education = "سطح تحصیلات من";
    $first_slide = "من به سی شارپ تحت ویندوز و وب مسلط هستم.";
    $second_slide = "من در طراحی وب و سایت سازی مهارت دارم.";
    $third_slide = "من در ساخت ربات های تلرگام با php مهارت دارم.";
    $fourth_slide = "من مهارت های اولیه در ویرایش عکس و کار با فتوشاپ را دارم.";
    
    $langknow = "من به زبان های ذکر شده در زیر مسلط هستم.";
    $mydefinishen = "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.";
    $education_text = "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.";
    
}

?>
<html lang="<?php echo $current_lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title; ?>
    </title>
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.min2.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary normal-nav <?php echo $direction; ?>">
        <div class="container bg-primary py-3" data-bs-theme="primary">
            <a class="navbar-brand text-light" href="index.php?lang=<?php echo $current_lang; ?>">
                <?php echo $brand; ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars text-light"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page"
                            href="index.php?lang=<?php echo $current_lang; ?>">
                            <?php echo $home; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#myKnowledge">
                            <?php echo $knowledge; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#myInformation">
                            <?php echo $information; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#myEducation">
                            <?php echo $education; ?>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="fa fa-language">
                                <?php echo $language; ?> (
                                <?php echo $current_lang; ?>)
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item text-dark <?php if($_GET['lang']!= 'fa') echo 'bg-success'; ?>"
                                    href="index.php?lang=en">EN</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-dark <?php if($_GET['lang']== 'fa') echo 'bg-success'; ?>"
                                    href="index.php?lang=fa">FA</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container <?php echo $direction; ?>">
        <section class="description">
            <div class="pt-4"></div>
            <!-- Start of Carousel Part -->
            <h2 class="<?php echo $title_linear; ?>" id="Knowledge">
                <?php echo $title_knowledge; ?>
            </h2>
            <div id="carouselExampleDark" class="carousel carousel-dark slide pt-0 shadow rounded"
                data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="img/windows.jpg" class="d-block w-100" alt="win developer">
                        <div class="carousel-caption">
                            <h5><small class="text-muted">
                                    <?php echo $iam; ?>
                                </small> C# Programmer</h5>
                            <p><?php echo $first_slide; ?></p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/web developer.jpg" class="d-block w-100" alt="web developer">
                        <div class="carousel-caption">
                            <h5><small class="text-muted">
                                    <?php echo $iam; ?>
                                </small> Web(Front End) Designer</h5>
                            <p><?php echo $second_slide; ?></p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="img/telegram bot.jpg" class="d-block w-100" alt="telegram bot">
                        <div class="carousel-caption">
                            <h5><small class="text-muted">
                                    <?php echo $iam; ?>
                                </small> Telegram Bot Developer</h5>
                            <p><?php echo $third_slide; ?></p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <img src="img/photoshop.jpg" class="d-block w-100" alt="photoshoper">
                        <div class="carousel-caption">
                            <h5><small class="text-muted">
                                    <?php echo $iam; ?>
                                </small> Photoshoper</h5>
                            <p><?php echo $fourth_slide; ?></p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- End of Carousel Part -->
            <div class="pt-4 pb-2"></div>
            <h2 class="<?php echo $title_linear; ?>" id="Knowledge">
                <?php echo $title_knowledge2; ?>
            </h2>
            <div class="card shadow p-3 pt-0 mb-5 bg-body rounded">
                <div class="container">
                    <p class="bg-white pt-2"><span class="fa fa-quote-left text-danger"></span>
                        <?php echo $langknow; ?>
                    </p>
                </div>
                <div class="container row row-cols-1 row-cols-md-2 g-4">
                    <div class="col bg-white p-3">
                        <span class="icon-code"> C#</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                        <div class="py-2"></div>
                        <span class="icon-code"> PHP</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                        <div class="py-2"></div>
                        <span class="icon-code"> HTML</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                        </div>
                        <div class="py-2"></div>
                        <span class="icon-code"> JAVA</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                        </div>
                        <div class="py-2"></div>
                        <span class="icon-code"> WORDPRESS</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                    </div>
                    <div class="col bg-white p-3">
                        <span class="icon-code"> CSS/BOOTSTRAP</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                        </div>
                        <div class="py-2"></div>
                        <span class="icon-code"> JS</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                        </div>
                        <div class="py-2"></div>
                        <span class="icon-code"> C++</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                        </div>
                        <div class="py-2"></div>
                        <span class="icon-code"> SQL/MYSQL</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-4 pb-2"></div>
            <!-- Start Of Information Part -->
            <h2 class="<?php echo $title_linear; ?>" id="myInformation">
                <?php echo $title_information; ?>
            </h2>
            <div class="card shadow p-3 pt-0 mb-5 bg-body rounded">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/profile.jpg" class="img-fluid rounded" alt="profile">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><small class="text-muted">
                                    <?php echo $iam; ?>
                                </small>
                                <?php echo $myname; ?>
                            </h5>
                            <p class="card-text">
                                <?php echo $mydefinishen; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Information Part -->
            <div class="pt-4 pb-2"></div>
            <!-- Start Of Education Level -->
            <h2 class="<?php echo $title_linear; ?>" id="myEducation">
                <?php echo $title_education; ?>
            </h2>
            <div class="card shadow p-3 pt-0 mb-5 bg-body rounded">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $education; ?>
                    </h5>
                    <p class="card-text">
                        <?php echo $education_text; ?>
                    </p>
                </div>
            </div>
            <!-- End Od Education Level -->
            <div class="pt-4 pb-2"></div>
        </section>
    </div>
    <!--<script src="js/bootstrap.min.js"></script>-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

<footer class="container page-footer font-small bg-primary" data-bs-theme="primary">
    <div class="row">
        <div class="col-md-4">
            <h2 class="text-white">
                <?php echo $footer_title; ?>
            </h2>
            <div class="px-2"></div>
            <a href="mailto:alborzia1379@gmail.com">
                <span class="fa fa-envelope text-white bg-warning"> Alborzia1379@gmail.com</span>
            </a>
            <p class="text-white">
                <span class="fa fa-phone text-white bg-warning"> +98 918 514 2252</span>
            </p>
        </div>
        <div class="col-md-4">
            <div class="pt-5"></div>
            <a href="https://www.teleprotm.ir" class="text-white text-decoration-none bg-warning">
                <span class="icon-link "> TeleProTM.ir</span>
            </a>
            <p onclick="location.href='tg://resolve?domain=s4TelePro'" class="text-white">
                <span class="fa fa-telegram bg-warning"> Telegram</span>
            </p>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2023 Copyright:
        <a href="https://www.teleprotm.ir" class="text-white text-decoration-none"><i class="icon-link"></i>
            TeleProTM.ir</a>
    </div>
</footer>

</html>