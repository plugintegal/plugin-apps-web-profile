<template>
    <div>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
            crossorigin="anonymous" />
        <app-navbar />
        <!-- Home -->
        <section class="home_banner_area" id="home">
            <div class="banner_inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="home_left_img">
                                <img class="img-fluid show-on-scroll" src="asset/img/banner_image.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner_content" style="text-align: center; color: white">
                                <h2>
                                    PLUG-IN <br>
                                    <h5>Plug-in adalah suatu organisasi atau komunitas studi linux di Politeknik Harapan Bersama Tegal.</h5>
                                </h2>
                                <div class="flex align-items-center">
                                    <a id="play-home-video" class="video-play-button"
                                        href="https://www.youtube.com/watch?v=PHvHxK_gfa0">
                                        <span></span>
                                    </a>
                                    <div class="watch_video text-uppercase">
                                        watch the video
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Endome -->
        <!-- About -->
        <section class="about_us_area section_gap_top" id="about">
            <div class="demo">
                <div data-class-in="" data-class-out="out-animation">
                    <div class="container">
                        <div class="row about_content align-items-center">
                            <div class="col-lg-6">
                                <div class="section_content">
                                    <h6 class=" animation-element slide-left">About Us</h6>
                                    <h2 style="color: white; text-align: justify" class=" animation-element slide-left">Poltek Harber Linux User Group
                                        <br>Indonesia</h2>
                                    <p style="text-align: justify" class="animation-element slide-left">Plug-in adalah suatu organisasi atau komunitas studi
                                        linux di
                                        Politeknik Harapan
                                        Bersama Tegal.
                                        Kami
                                        mempunyai tujuan untuk mengenalkan dan mengOpen Source kan mahasiswa dan
                                        masyarakat
                                        umum dengan
                                        berbagai kegiatan yang nantinya bisa membuka wawasan serta mindset OpenSource
                                        guna
                                        untuk
                                        mengurangi
                                        angka pembajakan Software di Indonesia.</p>
                                    <!-- <a class="primary_btn" href="#">Learn More</a> -->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about_us_image_box justify-content-center animation-element slide-right">
                                    <img class="img-fluid w-100" src="asset/img/about_img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- EndAbout -->

        <!-- Squad -->
        <section class="upcoming_games_area" id="squad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main_title">
                            <h2>Squad PLUG-IN</h2>
                            <h1 style="color: white">Squad PLUG-IN</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 animation-element slide-left">
                        <img src="asset/img/web.png" alt="" srcset="">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div style="color: white" class="animation-element slide-right">
                            <h4>Web Developer</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio error, nisi neque
                                ipsa reiciendis suscipit qui maiores, blanditiis iusto harum soluta voluptas consequatur
                                optio delectus. Ad temporibus id quam iste.</p>
                        </div>
                        <div style="color: white" class="animation-element slide-right">
                            <h4>Mobile Developer</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio error, nisi neque
                                ipsa reiciendis suscipit qui maiores, blanditiis iusto harum soluta voluptas consequatur
                                optio delectus. Ad temporibus id quam iste.</p>
                        </div>
                        <div style="color: white" class="animation-element slide-right">
                            <h4>UI / UX Designer</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio error, nisi neque
                                ipsa reiciendis suscipit qui maiores, blanditiis iusto harum soluta voluptas consequatur
                                optio delectus. Ad temporibus id quam iste.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Squad -->

        <!-- Event -->
        <section class="about_us_area section_gap_top" id="event">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main_title">
                            <h2 style="color: #17A6E7">Event</h2>
                            <h1>Event</h1>
                        </div>
                    </div>
                </div>
                <div class="row mx-auto animation-element slide-left">
                    <div v-for="(data, index) in events" :key="index" class="mx-auto">
                        <div class="col col-lg-4">
                        <div class="card mx-auto shadow rounded-lg" style="width: 19rem">
                            <div class="align-center">
                                <img class="card-img-top" src="asset/img/jumbotron.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title justify-content-center">{{ data.title }}</h5>
                                    <p class="card-text" style="color: #17A6E7"><i class="fa fa-calendar-times-o"
                                            style="color: #17A6E7"></i> {{ formatDate(new Date(data.opened)) }}</p>
                                    <router-link v-bind:to="'/event/'+ data.id">Selengkapnya</router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- EndEvent -->
        <!-- Footer -->
        <footer class="footer_area section_gap_footer" id="contact">
            <div class="container">
                <div class="row footer_inner">
                    <div class="col-lg-6 col-sm-12">
                        <ul>
                            <div class="text-center">
                                <img src="asset/img/logo_plugin.png" alt="" srcset="" width="150" height="40">
                            </div>
                        </ul>
                        <ul>
                            <h3><b style="color: white">Contact Information</b></h3>
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <aside class="f_widget ab_widget">
                                        <p align="justify" style="color: white">Sumbrodo Perumahan Ndalem Parikesit
                                            No.B7, Slerok, Kota
                                            Tegal. <a style="color: #2F4574"
                                                href="https://www.google.co.id/maps/place/Ndalem+Parikesit/@-6.8811978,109.1431099,3a,75y,175.22h,81.96t/data=!3m6!1e1!3m4!1s7U4CiCrUYuiXnYauUIYHNA!2e0!7i13312!8i6656!4m5!3m4!1s0x2e6fb93464361e0f:0xca4bd2a90586ebbc!8m2!3d-6.8814505!4d109.1444167" target="_blank">View
                                                Map</a></p>
                                    </aside>
                                </div>
                                <div class="col-md-6">
                                    <aside class="f_widget ab_widget">
                                        <p align="justify" style="color: white">Phone: +62 878-4811-4793 <br> Email:
                                            <i>plugintegal@gmail.com</i></p>
                                    </aside>
                                </div>
                            </div>
                            <hr>
                        </ul>
                        <ul>
                            <h3><b style="color: white">Follow Us</b></h3>
                            <a href="https://github.com/plugintegal"><img src="asset/img/github.png"
                                    alt=""></a>&nbsp;&nbsp;
                            <a href=""><img src="asset/img/instagram.png" alt="" srcset=""></a>&nbsp;&nbsp;
                            <a href=""><img src="asset/img/google-plus.png" alt="" srcset=""></a>&nbsp;&nbsp;
                            <a href=""><img src="asset/img/youtube.png" alt="" srcset=""></a>
                            <hr>
                        </ul>
                        <ul>
                            <h5><b style="color: white">Navigation</b></h5>
                            <a href="#home" style="color: white">Home</a>&nbsp;&nbsp;&nbsp;
                            <a href="#about" style="color: white">About</a>&nbsp;&nbsp;&nbsp;
                            <a href="#" style="color: white">Squad</a>&nbsp;&nbsp;&nbsp;
                            <a href="#" style="color: white">Contact</a>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <h2><b style="color: white">Contact Us</b></h2>
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <br>
                                <textarea name="" id="" class="form-control" rows="5"
                                    placeholder="Write Your Message Here..."></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Sumbit" class="btn btn-primary float-right"><br><br>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row single-footer-widget">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="copy_right_text justify-content-center">
                            <p>Copyright &copy; 2020 Poltek Harber Linux User Group - Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- EndFooter -->


    </div>
</template>

<script>
    window.addEventListener('scroll', function () {
        var scroll = window.requestAnimationFrame ||
            function (callback) {
                window.setTimeout(callback, 1000 / 60)
            };

        var elementsToShow = document.querySelectorAll('.show-on-scroll');

        function loop() {

            elementsToShow.forEach(function (element) {
                if (isElementInViewport(element)) {
                    element.classList.add('is-visible');
                } else {
                    element.classList.remove('is-visible');
                }
            });

            scroll(loop);
        }

        loop();

        function isElementInViewport(el) {
            // special bonus for those using jQuery
            if (typeof jQuery === "function" && el instanceof jQuery) {
                el = el[0];
            }
            var rect = el.getBoundingClientRect();
            return (
                (rect.top <= 0 &&
                    rect.bottom >= 0) ||
                (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight)) ||
                (rect.top >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
            );
        }

    })

    import axios from "axios";
    import Navbar from "./components/Navbar.vue";
    export default {
        components: {
            "app-navbar": Navbar
        },
        name: 'wp',
        data(){
            return {
                events: []
            };
        },
        methods:{
            formatDate : function formatDate(date) {
                var monthNames = [
                    "Januari", "Februari", "Maret",
                    "April", "Mei", "Juni", "Juli",
                    "Agustus", "September", "Oktober",
                    "November", "Desember"
                ];

                var day = date.getDate();
                var monthIndex = date.getMonth();
                var year = date.getFullYear();

                return day + ' ' + monthNames[monthIndex] + ' ' + year;
            }
        },
        mounted() {
            // axios.get('http://plugin-apps-server.herokuapp.com/api/event').then( (response) => {
                axios.get('http://192.168.18.53:8000/api/event').then((response) => {
                this.events = response.data.results;
                console.log(this.events)
                }
            );
        }
    }
    

</script>
<style>
    .section_gap_footer {
        padding-top: 100px;
        padding-bottom: 10px;
    }

    .out-animation {
        opacity: 0;
        -webkit-transform: translateX(80px);
        -moz-transform: translateX(80px);
        transform: translateX(80px);
    }

</style>
