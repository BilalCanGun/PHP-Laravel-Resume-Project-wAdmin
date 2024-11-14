<!--
 Author: W3layouts
 Author URL: http://w3layouts.com
 License: Creative Commons Attribution 3.0 Unported
 License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html lang="en">

<!-- Head -->

<head>

    <title>CV Projesi</title>

    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords"
        content="Multi Tabs Resume Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //Meta-Tags -->

    <!-- Custom-Style-Sheet -->
    <link rel="stylesheet" href="{{ asset('app') }}/css/style.css" type="text/css" media="all">
    <!-- //Custom-Style-Sheet -->

    <!-- Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" type="text/css"
        media="all">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css" media="all">
    <!-- //Fonts -->

    <!-- Default-JavaScript -->
    <script type="text/javascript" src="{{ asset('app') }}/js/jquery.min.js"></script>

</head>
<!-- //Head -->



<!-- Body -->

<body>

    <h1> <a href="{{ route('about.index') }}">LARAVEL CV</a> </h1>

    <div class="containerw3layouts-agileits">

        <div id="verticalTab" class="resp-vtabs w3-agile" style="display: block; width: 100%; margin: 0px;">

            <ul class="resp-tabs-list agileits-w3layouts">
                <li class="resp-tab-item"><span>About</span></li>
                <li class="resp-tab-item"><span>Experience</span></li>
                <li class="resp-tab-item agileinfo"><span>Education</span></li>
                <li class="resp-tab-item"><span>Skills</span></li>
                <li class="resp-tab-item"><span>Contact</span></li>
            </ul>

            <div class="resp-tabs-container">

                <div class="resp-tab-content">
                    <div class="agileabout">
                        <div class="agileabout-image w3-agileits">
                            <td>
                                @if ($about->profile_image)
                                    <img src="{{ asset('storage/' . $about->profile_image) }}" alt="Fotoğraf">
                                @else
                                    <p>Fotoğraf mevcut değil.</p>
                                @endif
                            </td>
                        </div>
                        <div class="agileabout-info">
                            <ul>
                                <li>
                                    <div class="li1">Ad Soyad</div>
                                    <div class="li2">:</div>
                                    <div class="li3">{{ $about->name }}</div>
                                    <div class="clearfix"></div>
                                </li>

                                <li>
                                    <div class="li1">Telefon Numarası</div>
                                    <div class="li2">:</div>
                                    <div class="li3">{{ $about->phone }}</div>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <div class="li1">Email</div>
                                    <div class="li2 agileinfo">:</div>
                                    <div class="li3"><a class="mail"
                                            href="mailto:mail@example.com">{{ $about->email }}</a></div>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <div class="li1">Website</div>
                                    <div class="li2">:</div>
                                    <div class="li3"><a href="#">{{ $about->website }}</a></div>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <div class="li1 agileinfo">Adres</div>
                                    <div class="li2">:</div>
                                    <div class="li3 w3-agileits">{{ $about->address }}</div>
                                    <div class="clearfix wthree"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="resp-tab-content">
                    <div class="work">
                        @foreach ($experiences as $experience)
                            <div class="work-info agileits-w3layouts">
                                <h4>{{ $experience->job_start }} - {{ $experience->job_end }} </h4>
                                <h5>{{ $experience->company }}</h5>
                                <p>{{ $experience->description }} </p>
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="resp-tab-content">
                    <div class="work w3-agileits">
                        @foreach ($educations as $education)
                        @endforeach
                        <div class="work-info">
                            <h4>{{ $education->edu_start }} - {{ $education->edu_end }}</h4>
                            <h5>{{ $education->school_name }}</h5>
                            <p>{{ $education->school_description }}</p>
                        </div>

                    </div>
                </div>

                <div class="resp-tab-content">
                    <div class="our-skills">
                        @foreach ($skills as $skill)
                            <div class="single-skill">
                                <p class="lead">{{ $skill->skill_name }}</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-1">{{ $skill->percent }}%</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="resp-tab-content">
                    <div class="agileabout-info aitsabout">
                        <ul>
                            <li>
                                <div class="li1">Ad Soyad</div>
                                <div class="li2">:</div>
                                <div class="li3">{{ $about->name }}</div>
                                <div class="clearfix"></div>
                            </li>

                            <li>
                                <div class="li1">Telefon Numarası</div>
                                <div class="li2">:</div>
                                <div class="li3">{{ $about->phone }}</div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <div class="li1">Email</div>
                                <div class="li2 agileinfo">:</div>
                                <div class="li3"><a class="mail"
                                        href="mailto:mail@example.com">{{ $about->email }}</a></div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <div class="li1">Website</div>
                                <div class="li2">:</div>
                                <div class="li3"><a href="#">{{ $about->website }}</a></div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <div class="li1 agileinfo">Adres</div>
                                <div class="li2">:</div>
                                <div class="li3 w3-agileits">{{ $about->address }}</div>
                                <div class="clearfix wthree"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <div class="social-icons w3layouts agileits">
                        <h4>Follow Me on</h4>
                        <ul>
                            @foreach ($contacts as $c)
                                <li class=" w3ls w3layouts agileits"><a href="{{ $c->social_url }}"><span
                                            class="icons w3layouts agileits"></span><span
                                            class="text w3layouts agileits">{{ $c->social_name }}</span></a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="clear"></div>

            </div>
            <div class="clear w3-agile"></div>

        </div>

    </div>

    <div class="w3lsfooteragileits">
        <p> &copy; 2024 Laravel CV Projesi BCG SOFTWARE
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Çıkış Yap
    </button>



    <!-- Necessary-JavaScript-Files-&-Links -->

    <!-- Tabs-JavaScript -->
    <script src="{{ asset('app') }}/js/easyResponsiveTabs.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default',
                width: 'auto',
                fit: true,
                closed: 'accordion',
                activate: function(event) {
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>
    <!-- //Tabs-JavaScript -->


    <!-- //Necessary-JavaScript-Files-&-Links -->



</body>
<!-- //Body -->

</html>
