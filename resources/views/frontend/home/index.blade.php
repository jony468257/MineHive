@extends('layouts.master')

@section('title', 'Home Page')

@section('content')

    <div class="navSidebar-wraper clearfix">

    </div><!-- .navSidebar-wraper END -->
    </div><!-- .container END -->
    </header> <!-- End header section -->
    </div>
    <style>
        /* ===== Basic Reset ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: #121212;
            color: #fff;
        }

        /* ===== Hero Section ===== */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 80px 8%;
            min-height: 90vh;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #1a1a1a 0%, #2b2b2b 100%);
        }

        /* ===== Left Side ===== */
        .hero-left {
            max-width: 50%;
        }

        .hero-left h1 {
            font-size: 48px;
            font-weight: bold;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #ff4c4c;
        }

        .hero-left p {
            font-size: 18px;
            margin-bottom: 30px;
            color: #f0f0f0;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .cta-buttons button {
            padding: 15px 25px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: #ff4c4c;
            color: #fff;
            box-shadow: 0 5px 15px rgba(255, 76, 76, 0.4);
        }

        .btn-primary:hover {
            background: #ff1f1f;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 31, 31, 0.5);
        }

        .btn-secondary {
            background: transparent;
            color: #ff4c4c;
            border: 2px solid #ff4c4c;
        }

        .btn-secondary:hover {
            background: #ff4c4c;
            color: #fff;
            transform: translateY(-3px);
        }

        .usp {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .usp div {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 16px;
            color: #f0f0f0;
        }

        .usp div::before {
            content: '✅';
            color: #00ff00;
        }

        /* ===== Right Side ===== */
        .hero-right {
            position: relative;
            width: 45%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* ===== Platform Icons ===== */
        .platform-icon {
            width: 90px;
            /* increased from 60px */
            height: 90px;
            /* increased from 60px */
            border-radius: 50%;
            background: #222;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 15px;
            cursor: pointer;
            position: absolute;
            transition: all 0.3s ease, box-shadow 0.3s ease;
        }

        .platform-icon img {
            width: 50px;
            /* increased logo size */
            height: auto;
        }

        .platform-icon:hover {
            transform: scale(1.2);
            /* slightly smaller scale for bigger icons */
            box-shadow: 0 0 20px #ff4c4c;
        }

        .platform-tooltip {
            position: absolute;
            bottom: -35px;
            left: 50%;
            transform: translateX(-50%);
            background: #ff4c4c;
            color: #fff;
            padding: 6px 12px;
            border-radius: 5px;
            font-size: 13px;
            display: none;
            white-space: nowrap;
        }

        /* ===== Floating Animation ===== */
        @keyframes float1 {
            0% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(25px, 25px);
            }

            /* slightly bigger movement */
            100% {
                transform: translate(0, 0);
            }
        }

        @keyframes float2 {
            0% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-25px, -20px);
            }

            100% {
                transform: translate(0, 0);
            }
        }

        @keyframes float3 {
            0% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(20px, -30px);
            }

            100% {
                transform: translate(0, 0);
            }
        }

        .icon-google {
            top: 20%;
            left: 30%;
            animation: float1 5s infinite ease-in-out;
        }

        .icon-youtube {
            top: 40%;
            left: 70%;
            animation: float2 6s infinite ease-in-out;
        }

        .icon-facebook {
            top: 60%;
            left: 20%;
            animation: float3 7s infinite ease-in-out;
        }

        .icon-instagram {
            top: 25%;
            left: 60%;
            animation: float2 5.5s infinite ease-in-out;
        }

        .icon-linkedin {
            top: 55%;
            left: 50%;
            animation: float1 6.5s infinite ease-in-out;
        }

        .icon-pinterest {
            top: 35%;
            left: 40%;
            animation: float3 6s infinite ease-in-out;
        }

        /* ===== Growth Chart ===== */
        .growth-chart {
            position: absolute;
            bottom: 20px;
            width: 80%;
            height: 4px;
            background: #ff4c4c;
            clip-path: polygon(0% 100%, 10% 60%, 20% 70%, 30% 50%, 40% 65%, 50% 40%, 60% 45%, 70% 30%, 80% 35%, 90% 15%, 100% 20%);
        }
    </style>

    <div class="hero">
        <!-- Left Side -->
        <div class="hero-left">
            <h1>We Make Your Brand Go Viral in the Digital World</h1>
            <p>Targeted marketing on Google, YouTube, Facebook, Instagram, LinkedIn, and Pinterest that delivers measurable
                results.</p>

            <div class="cta-buttons">
                <button class="btn-primary">Start My Campaign</button>
                <button class="btn-secondary">Get My Free Marketing Plan</button>
            </div>

        </div>

        <!-- Right Side -->
        <div class="hero-right">
            <div class="platform-icon icon-google">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google">
                <div class="platform-tooltip">Search Ads, Display Ads, Remarketing</div>
            </div>
            <div class="platform-icon icon-youtube">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/YouTube_Logo_2017.svg" alt="YouTube">
                <div class="platform-tooltip">Video Ads, Channel Growth</div>
            </div>
            <div class="platform-icon icon-facebook">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
                    alt="Facebook">
                <div class="platform-tooltip">Facebook Ads, Engagement Campaigns</div>
            </div>
            <div class="platform-icon icon-instagram">
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" alt="Instagram">
                <div class="platform-tooltip">Instagram Ads, Stories Campaigns</div>
            </div>
            <div class="platform-icon icon-linkedin">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn">
                <div class="platform-tooltip">LinkedIn Ads, B2B Marketing</div>
            </div>
            <div class="platform-icon icon-pinterest">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Pinterest-logo.png" alt="Pinterest">
                <div class="platform-tooltip">Pinterest Ads, Visual Campaigns</div>
            </div>

            <!-- Growth Chart -->
            <div class="growth-chart"></div>
        </div>
    </div>

    <script>
        const icons = document.querySelectorAll('.platform-icon');
        icons.forEach(icon => {
            icon.addEventListener('mouseenter', () => {
                icon.querySelector('.platform-tooltip').style.display = 'block';
            });
            icon.addEventListener('mouseleave', () => {
                icon.querySelector('.platform-tooltip').style.display = 'none';
            });
        });
    </script>

    {{-- <div id="rev_slider_6_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="slider-2"
        data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8 fullwidth mode -->
        <div id="rev_slider_6_1" class="rev_slider fullwidthabanner tp-overflow-hidden" style="display:none;"
            data-version="5.4.8">
            <ul> <!-- SLIDE  -->
                <li data-index="rs-25" data-transition="slideoverhorizontal" data-slotamount="default"
                    data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                    data-masterspeed="default"
                    data-thumb="{{ asset('assets/images-m/rev-slider/banner-01/18fc4-slider-bg-1.jpg') }}" data-delay="5120"
                    data-rotate="0" data-saveperformance="off" data-title="Slider" data-param1="" data-param2=""
                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src={{ asset('assets/images-m/rev-slider/banner-01/18fc4-slider-bg-1.jpg') }} alt=""
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off"
                        class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme" id="slide-25-layer-10" data-x="['right','right','right','right']"
                        data-hoffset="['-65','-65','-40','23']" data-y="['top','top','top','top']"
                        data-voffset="['233','233','261','370']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":250,"speed":1500,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5;"><img src={{ asset('assets/images-m/rev-slider/banner-01/monitor.png') }}
                            alt="" data-ww="['578auto','578auto','501px','439px']"
                            data-hh="['580px','580px','404px','354px']" data-no-retina> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-25-layer-14"
                        data-x="['left','left','left','left']" data-hoffset="['923','923','438','438']"
                        data-y="['top','top','top','top']" data-voffset="['243','243','120','120']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-visibility="['on','on','off','off']"
                        data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":550,"speed":1500,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6;"><img src={{ asset('assets/images-m/rev-slider/banner-01/cloud.png') }}
                            alt="" data-ww="['128px','128px','138auto','138auto']"
                            data-hh="['116px','116px','171px','171px']" data-no-retina> </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-25-layer-11"
                        data-x="['left','left','left','left']" data-hoffset="['674','674','219','219']"
                        data-y="['top','top','top','top']" data-voffset="['220','220','181','181']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-visibility="['on','on','off','off']"
                        data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":850,"speed":1500,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7;"><img src={{ asset('assets/images-m/rev-slider/banner-01/level_up.png') }}
                            alt="" data-ww="['105px','105px','339auto','339auto']"
                            data-hh="['156px','156px','206px','206px']" data-no-retina> </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-25-layer-12"
                        data-x="['left','left','left','left']" data-hoffset="['830','830','830','830']"
                        data-y="['top','top','top','top']" data-voffset="['701','701','701','701']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-visibility="['on','on','off','off']"
                        data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":1150,"speed":1500,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 8;"><img src={{ asset('assets/images-m/rev-slider/banner-01/paper.png') }}
                            alt="" data-ww="['186auto','186auto','186auto','186auto']"
                            data-hh="['159px','159px','159px','159px']" data-no-retina> </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-25-layer-15"
                        data-x="['left','left','left','left']" data-hoffset="['550','550','588','588']"
                        data-y="['top','top','top','top']" data-voffset="['450','450','214','214']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-visibility="['on','on','off','off']"
                        data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":1450,"speed":1500,"frame":"0","from":"x:left;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 9;"><img src={{ asset('assets/images-m/rev-slider/banner-01/speaker.png') }}
                            alt="" data-ww="['187auto','187auto','244px','244px']"
                            data-hh="['206px','206px','278px','278px']" data-no-retina> </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption   tp-resizeme" id="slide-25-layer-16" data-x="['left','left','left','left']"
                        data-hoffset="['765','765','765','765']" data-y="['top','top','top','top']"
                        data-voffset="['422','422','422','422']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-visibility="['on','on','off','off']" data-type="image"
                        data-responsive_offset="on"
                        data-frames='[{"delay":1750,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"rZ:0deg;sX:0.7;sY:0.7;opacity:0;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Back.easeIn"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 10;">
                        <div class="rs-looped rs-wave" data-speed="2" data-angle="0" data-radius="10"
                            data-origin="50% 50%"><img src={{ asset('assets/images-m/rev-slider/banner-01/search.png') }}
                                alt="" data-ww="" data-hh="" data-no-retina> </div>
                    </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption   tp-resizeme" id="slide-25-layer-4" data-x="['left','left','left','left']"
                        data-hoffset="['111','111','50','58']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-81','-81','-97','-303']" data-width="183" data-height="32"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":2050,"split":"chars","splitdelay":0.05,"speed":2000,"split_direction":"forward","frame":"0","from":"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:-50px;opacity:0;","ease":"Power4.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 11; min-width: 183px; max-width: 183px; max-width: 32px; max-width: 32px; white-space: nowrap; font-size: 24px; line-height: 22px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Lato;">
                        We Make Your Brand Go Viral in the Digital World</div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption   tp-resizeme" id="slide-25-layer-5" data-x="['left','left','left','left']"
                        data-hoffset="['108','108','50','58']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-30','-30','-52','-259']" data-fontsize="['56','56','25','25']"
                        data-lineheight="['61.6','61.6','35','35']" data-width="['540','540','250','100%']"
                        data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":2350,"split":"chars","splitdelay":0.05,"speed":2000,"split_direction":"forward","frame":"0","from":"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 12; min-width: 540px; max-width: 540px; white-space: normal; font-size: 56px; line-height: 61.6px; font-weight: 900; color: #ffffff; letter-spacing: 0px;font-family:Lato;">
                        Subheadline:</div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption   tp-resizeme" id="slide-25-layer-7" data-x="['left','left','left','left']"
                        data-hoffset="['106','106','46','57']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['64','64','10','-196']" data-width="['445','445','350','350']" data-height="none"
                        data-whitespace="normal" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":2650,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 13; min-width: 445px; max-width: 445px; white-space: normal; font-size: 15px; line-height: 26px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Lato;">
                        Targeted marketing on Google, YouTube, Facebook, Instagram, LinkedIn, and Pinterest that delivers measurable results.” </div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption rev-btn " id="slide-25-layer-8" data-x="['left','left','left','left']"
                        data-hoffset="['104','104','44','56']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['161','161','101','-107']" data-fontweight="['400','400','100','100']"
                        data-width="['179','179','179','150']" data-height="none" data-whitespace="normal"
                        data-type="button" data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":2950,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"},{"frame":"hover","speed":"500","ease":"Power3.easeIn","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(0,19,142);bs:solid;bw:0 0 0 0;"}]'
                        data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[21,21,21,15]"
                        data-paddingright="[51,51,51,30]" data-paddingbottom="[21,21,21,15]"
                        data-paddingleft="[51,51,51,30]"
                        style="z-index: 14; min-width: 179px; max-width: 179px; white-space: normal; font-size: 15px; line-height: 17px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: 0px;font-family:Lato;background-color:rgba(0,19,142,0.75);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        Get Started </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-26" data-transition="slideup" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                    data-thumb= "{{ asset('assets/images-m/rev-slider/banner-02/665d1-slider-bg-2.jpg') }}"
                    data-delay="4060" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1=""
                    data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                    data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="assets/images/rev-slider/banner-02/665d1-slider-bg-2.jpg" alt=""
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                        data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption   tp-resizeme" id="slide-26-layer-4" data-x="['right','right','left','left']"
                        data-hoffset="['398','398','413','59']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-123','-123','-77','-4']" data-width="183" data-height="32"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":540,"split":"chars","splitdelay":0.05,"speed":2000,"split_direction":"forward","frame":"0","from":"x:-200px;skX:85px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:-50px;opacity:0;","ease":"Power4.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; min-width: 183px; max-width: 183px; max-width: 32px; max-width: 32px; white-space: nowrap; font-size: 24px; line-height: 22px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Lato;">
                        Digital Marketing </div>

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption   tp-resizeme" id="slide-26-layer-5" data-x="['right','right','left','left']"
                        data-hoffset="['40','40','413','58']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-30','-30','-27','51']" data-fontsize="['56','56','25','25']"
                        data-lineheight="['61.6','61.6','35','35']" data-width="['540','540','400','100%']"
                        data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":850,"split":"chars","splitdelay":0.05,"speed":2000,"split_direction":"forward","frame":"0","from":"x:-200px;skX:85px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; min-width: 540px; max-width: 540px; white-space: normal; font-size: 56px; line-height: 61.6px; font-weight: 900; color: #ffffff; letter-spacing: 0px;font-family:Lato;">
                        Boosts your website
                        Traffic </div>

                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption   tp-resizeme" id="slide-26-layer-7" data-x="['right','right','left','left']"
                        data-hoffset="['130','132','412','57']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['72','72','45','114']" data-width="['445','445','300','350']" data-height="none"
                        data-whitespace="normal" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":1070,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; min-width: 445px; max-width: 445px; white-space: normal; font-size: 15px; line-height: 26px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Lato;">
                        Share processes and data securely on a need to know basis
                        need for reconciliation it combines. </div>

                    <!-- LAYER NR. 14 -->
                    <div class="tp-caption rev-btn  tp-resizeme" id="slide-26-layer-8"
                        data-x="['right','left','left','left']" data-hoffset="['396','442','413','54']"
                        data-y="['middle','bottom','middle','middle']" data-voffset="['152','196','133','193']"
                        data-fontweight="['100','400','100','100']" data-width="['179','179','179','150']"
                        data-height="none" data-whitespace="normal" data-type="button" data-responsive_offset="on"
                        data-frames='[{"delay":1300,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"},{"frame":"hover","speed":"500","ease":"Power3.easeIn","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(0,19,142);bs:solid;bw:0 0 0 0;"}]'
                        data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[21,21,21,15]"
                        data-paddingright="[51,51,51,30]" data-paddingbottom="[21,21,21,15]"
                        data-paddingleft="[51,51,51,30]"
                        style="z-index: 8; min-width: 179px; max-width: 179px; white-space: normal; font-size: 15px; line-height: 17px; font-weight: 100; color: rgba(255,255,255,1); letter-spacing: 0px;font-family:Lato;background-color:rgba(0,19,142,0.75);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        Get Started </div>

                    <!-- LAYER NR. 15 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-26-layer-21"
                        data-x="['left','left','left','left']" data-hoffset="['404','386','404','404']"
                        data-y="['top','top','top','top']" data-voffset="['286','285','286','286']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-visibility="['on','on','off','off']"
                        data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 9;"><img src={{ asset('assets/images-m/rev-slider/banner-02/smartphone.png') }}
                            alt="" data-ww="['199auto','199auto','199auto','199auto']"
                            data-hh="['207px','207px','207px','207px']" data-no-retina> </div>

                    <!-- LAYER NR. 16 -->
                    <div class="tp-caption   tp-resizeme" id="slide-26-layer-19" data-x="['left','left','left','left']"
                        data-hoffset="['80','62','-39','30']" data-y="['top','top','top','top']"
                        data-voffset="['182','181','301','-57']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 10;"><img src={{ asset('assets/images-m/rev-slider/banner-02/laptop.png') }}
                            alt="" data-ww="['443auto','443auto','443auto','404px']"
                            data-hh="['469px','469px','469px','428px']" data-no-retina> </div>

                    <!-- LAYER NR. 17 -->
                    <div class="tp-caption   tp-resizeme" id="slide-26-layer-20" data-x="['left','left','left','left']"
                        data-hoffset="['446','428','446','446']" data-y="['top','top','top','top']"
                        data-voffset="['422','421','422','422']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-visibility="['on','on','off','off']" data-type="image"
                        data-responsive_offset="on"
                        data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:bottom;rZ:90deg;sX:2;sY:2;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];rZ:0deg;sX:0.7;sY:0.7;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 11;">
                        <div class="rs-looped rs-wave" data-speed="2" data-angle="0" data-radius="10"
                            data-origin="50% 50%"><img src={{ asset('assets/images-m/rev-slider/banner-02/search.png') }}
                                alt="" data-ww="['117auto','117auto','117auto','117auto']"
                                data-hh="['109px','109px','109px','109px']" data-no-retina> </div>
                    </div>

                    <!-- LAYER NR. 18 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-26-layer-22"
                        data-x="['left','left','left','left']" data-hoffset="['40','22','40','416']"
                        data-y="['top','top','top','top']" data-voffset="['550','549','550','528']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-visibility="['on','on','off','off']"
                        data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":1800,"speed":1000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 12;"><img src={{ asset('assets/images-m/rev-slider/banner-02/pie.png') }}
                            alt="" data-ww="['219auto','219auto','219auto','219auto']"
                            data-hh="['153px','153px','153px','153px']" data-no-retina> </div>

                    <!-- LAYER NR. 19 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-26-layer-23"
                        data-x="['left','left','left','left']" data-hoffset="['21','3','21','21']"
                        data-y="['top','top','top','top']" data-voffset="['489','488','489','489']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-visibility="['on','on','off','off']"
                        data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 13;"><img src={{ asset('assets/images-m/rev-slider/banner-02/dollar.png') }}
                            alt="" data-ww="['118auto','118auto','118auto','118auto']"
                            data-hh="['100px','100px','100px','100px']" data-no-retina> </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-24" data-transition="slideright" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                    data-thumb="{{ asset('assets/images-m/rev-slider/banner-03/aa09a-slider-bg-3.jpg') }}"
                    data-delay="4520" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1=""
                    data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                    data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src={{ asset('assets/images-m/rev-slider/banner-03/aa09a-slider-bg-3.jpg') }} alt=""
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                        data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 20 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-24-layer-14"
                        data-x="['left','left','left','left']" data-hoffset="['873','873','438','438']"
                        data-y="['top','top','top','top']" data-voffset="['231','231','120','120']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-visibility="['on','on','off','off']"
                        data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":600,"speed":1500,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5;"><img src={{ asset('assets/images-m/rev-slider/banner-03/chart.png') }}
                            alt="" data-ww="['138px','138px','138auto','138auto']" data-hh="171px"
                            data-no-retina> </div>

                    <!-- LAYER NR. 21 -->
                    <div class="tp-caption   tp-resizeme" id="slide-24-layer-10"
                        data-x="['right','right','right','right']" data-hoffset="['38','38','-40','23']"
                        data-y="['top','top','top','top']" data-voffset="['315','315','261','370']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":900,"speed":1500,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6;"><img src={{ asset('assets/images-m/rev-slider/banner-03/smartphone.png') }}
                            alt="" data-ww="['501px','501px','501px','439px']"
                            data-hh="['404px','404px','404px','354px']" data-no-retina> </div>

                    <!-- LAYER NR. 22 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-24-layer-11"
                        data-x="['left','left','left','left']" data-hoffset="['654','654','219','219']"
                        data-y="['top','top','top','top']" data-voffset="['291','291','181','181']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-visibility="['on','on','off','off']"
                        data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":1200,"speed":1500,"frame":"0","from":"x:left;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7;"><img src={{ asset('assets/images-m/rev-slider/banner-03/card.png') }}
                            alt="" data-ww="['339auto','339auto','339auto','339auto']"
                            data-hh="['206px','206px','206px','206px']" data-no-retina> </div>

                    <!-- LAYER NR. 23 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-24-layer-12"
                        data-x="['left','left','left','left']" data-hoffset="['863','863','863','863']"
                        data-y="['top','top','top','top']" data-voffset="['400','400','400','400']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 8;"><img src={{ asset('assets/images-m/rev-slider/banner-03/pie.png') }}
                            alt="" data-ww="" data-hh="" data-no-retina> </div>

                    <!-- LAYER NR. 24 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-24-layer-15"
                        data-x="['left','left','left','left']" data-hoffset="['1073','1073','588','588']"
                        data-y="['top','top','top','top']" data-voffset="['344','344','214','214']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-visibility="['on','on','off','off']"
                        data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 9;"><img src={{ asset('assets/images-m/rev-slider/banner-03/screen.png') }}
                            alt="" data-ww="['244px','244px','244px','244px']"
                            data-hh="['278px','278px','278px','278px']" data-no-retina> </div>

                    <!-- LAYER NR. 25 -->
                    <div class="tp-caption   tp-resizeme" id="slide-24-layer-4" data-x="['left','left','left','left']"
                        data-hoffset="['111','111','50','58']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-119','-119','-137','-303']" data-width="183" data-height="32"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":2100,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 10; min-width: 183px; max-width: 183px; max-width: 32px; max-width: 32px; white-space: nowrap; font-size: 24px; line-height: 22px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Lato;">
                        Digital Marketing </div>

                    <!-- LAYER NR. 26 -->
                    <div class="tp-caption   tp-resizeme" id="slide-24-layer-5" data-x="['left','left','left','left']"
                        data-hoffset="['111','111','50','58']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-33','-33','-72','-259']" data-fontsize="['56','56','25','25']"
                        data-lineheight="['61.6','61.6','35','35']" data-width="['540','540','250','100%']"
                        data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 11; min-width: 540px; max-width: 540px; white-space: normal; font-size: 56px; line-height: 61.6px; font-weight: 900; color: #ffffff; letter-spacing: 0px;font-family:Lato;">
                        Boosts your website
                        Traffic </div>

                    <!-- LAYER NR. 27 -->
                    <div class="tp-caption   tp-resizeme" id="slide-24-layer-7" data-x="['left','left','left','left']"
                        data-hoffset="['109','109','46','57']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['78','78','10','-196']" data-width="['445','445','350','350']" data-height="none"
                        data-whitespace="normal" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":2700,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 12; min-width: 445px; max-width: 445px; white-space: normal; font-size: 15px; line-height: 26px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Lato;">
                        Share processes and data securely on a need to know basis
                        need for reconciliation it combines. </div>

                    <!-- LAYER NR. 28 -->
                    <div class="tp-caption rev-btn " id="slide-24-layer-8" data-x="['left','left','left','left']"
                        data-hoffset="['107','107','44','56']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['159','159','101','-107']" data-fontweight="['400','400','100','100']"
                        data-width="['179','179','179','150']" data-height="none" data-whitespace="normal"
                        data-type="button" data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"500","ease":"Power3.easeIn","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(0,19,142);bs:solid;bw:0 0 0 0;"}]'
                        data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[21,21,21,15]"
                        data-paddingright="[51,51,51,30]" data-paddingbottom="[21,21,21,15]"
                        data-paddingleft="[51,51,51,30]"
                        style="z-index: 13; min-width: 179px; max-width: 179px; white-space: normal; font-size: 15px; line-height: 17px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: 0px;font-family:Lato;background-color:rgba(0,19,142,0.75);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        Get Started </div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div><!-- END REVOLUTION SLIDER --><!-- end rev slider strart --> --}}
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #111;
        }

        .news-section {
            background-color: #1c1c1c;
            padding: 30px 0;
            overflow: hidden;

        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .news-title {
            font-size: 28px;
            font-weight: bold;
            color: #8B0000;
            /* Dark Red */
            margin-bottom: 20px;
        }

        .scroll-container {
            white-space: nowrap;
            overflow: hidden;
            position: relative;
        }

        .scroll-text {
            display: inline-block;
            animation: scroll-left 30s linear infinite;
        }

        .news-card {
            display: inline-block;
            background: linear-gradient(135deg, #007bff, #00c6ff);
            color: white;
            padding: 15px 25px;
            margin-right: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            font-size: 18px;
            font-weight: bold;
            transition: transform 0.3s;
        }

        .news-card:hover {
            transform: scale(1.05);
            cursor: pointer;
        }

        .scroll-container:hover .scroll-text {
            animation-play-state: paused;
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        @media (max-width: 768px) {
            .news-card {
                font-size: 16px;
                padding: 10px 18px;
                margin-right: 15px;
            }

            .news-title {
                font-size: 22px;
            }
        }
    </style>

    <section class="news-section py-5" style="background-color:#111;">
        <div class="container">
            <h2 class="text-danger mb-4" style="font-size:2.5rem; font-weight:700; text-shadow:1px 1px 2px #8B0000;">
                In the Spotlight
            </h2>

            <div class="scroll-container">
                <div class="scroll-text d-flex gap-3">
                    @foreach ($newsSources as $news)
                        <div class="news-card px-4 py-3 rounded" style="background-color:#1c1c1c; color:#fff;">
                            {{ $news->name }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <style>
        .scroll-container {
            overflow-x: auto;
            white-space: nowrap;
            padding-bottom: 10px;
            scroll-behavior: smooth;
        }

        .scroll-text {
            display: flex;
            gap: 15px;
        }

        .news-card {
            display: inline-block;
            min-width: 150px;
            max-width: 200px;
            text-align: center;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s, background-color 0.3s;
            word-wrap: break-word;
            /* text overflow handle */
        }

        .news-card:hover {
            transform: scale(1.05);
            background-color: #ff4d4d;
            color: #fff;
        }

        /* Optional: smooth scroll on hover for container */
        .scroll-container::-webkit-scrollbar {
            height: 8px;
        }

        .scroll-container::-webkit-scrollbar-thumb {
            background-color: #333;
            border-radius: 10px;
        }

        .scroll-container::-webkit-scrollbar-track {
            background-color: #111;
        }
    </style>

    <!-- Services Cards Section -->
    <section class="py-5" style="background-color: #000;">
        <div class="container">
            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card text-white text-center h-100 p-4">
                        <img src="{{ asset('assets/images-m/service-tab/analytics.png') }}" alt="Google Marketing"
                            class="service-icon mb-3">
                        <h4 class="text-red fw-bold mb-2">Google Marketing</h4>
                        <p class="text-light">
                            Capture high-intent users exactly when they’re searching. From search and display to remarketing
                            — Google puts your brand front and center.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card text-white text-center h-100 p-4">
                        <img src="{{ asset('assets/images-m/service-tab/youtube.png') }}" alt="YouTube Marketing"
                            class="service-icon mb-3">
                        <h4 class="text-red fw-bold mb-2">YouTube Marketing</h4>
                        <p class="text-light">
                            Tell your story on the world’s largest video platform. We help you create, optimize, and promote
                            content that drives awareness and conversion.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card text-white text-center h-100 p-4">
                        <img src="{{ asset('assets/images-m/service-tab/bullhorn.png') }}" alt="Social Media Marketing"
                            class="service-icon mb-3">
                        <h4 class="text-red fw-bold mb-2">Social Media Marketing</h4>
                        <p class="text-light">
                            Build awareness, drive engagement, and boost sales across major social platforms.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Custom Style -->
    <style>
        .service-card {
            background-color: #1e1e1e;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.2);
            position: relative;
            transition: all 0.4s ease-in-out;
        }

        .service-card:hover {
            box-shadow: 0 0 40px rgba(255, 0, 0, 0.6);
            transform: translateY(-6px);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }

        .text-red {
            color: #ff0000 !important;
        }

        @media (max-width: 767.98px) {
            .service-icon {
                width: 60px;
                height: 60px;
            }

            .service-card h4 {
                font-size: 20px;
            }

            .service-card p {
                font-size: 15px;
            }
        }
    </style>


    <section class="consultancy-section py-5" style="background-color:#111;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0 text-center">
                    <img src="{{ asset('assets/images-m/service-tab/image.png') }}" alt="Consultancy Image"
                        class="img-fluid rounded shadow-lg">
                </div>

                <!-- Right Form -->
                <div class="col-md-6">
                    <h2 class="text-white mb-4">Book a Free Consultancy</h2>

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('consultancy.store') }}" method="POST" id="consultancyForm">
                        @csrf

                        <!-- Step 1 -->
                        <div class="form-step active mb-3" id="step1">
                            <input type="text" name="full_name" placeholder="Full Name" class="form-control mb-2"
                                required>
                            <input type="text" name="company_name" placeholder="Company Name" class="form-control mb-2"
                                required>
                            <input type="text" name="designation" placeholder="Designation" class="form-control mb-2"
                                required>
                            <div class="d-flex justify-content-end mt-2">
                                <button type="button" class="btn btn-danger" onclick="nextStep(1)">Next</button>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="form-step mb-3" id="step2">
                            <input type="tel" name="mobile" placeholder="Mobile Number" class="form-control mb-2"
                                required>
                            <input type="email" name="email" placeholder="Email Address" class="form-control mb-2"
                                required>
                            <div class="d-flex justify-content-between mt-2">
                                <button type="button" class="btn btn-secondary" onclick="prevStep(1)">Previous</button>
                                <button type="button" class="btn btn-danger" onclick="nextStep(2)">Next</button>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="form-step mb-3" id="step3">
                            <textarea name="message" rows="5" placeholder="Your Message" class="form-control mb-2"></textarea>
                            <div class="d-flex justify-content-between mt-2">
                                <button type="button" class="btn btn-secondary" onclick="prevStep(2)">Previous</button>
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <style>
        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }
    </style>

    <script>
        function nextStep(current) {
            document.getElementById('step' + current).classList.remove('active');
            document.getElementById('step' + (current + 1)).classList.add('active');
        }

        function prevStep(current) {
            document.getElementById('step' + current).classList.remove('active');
            document.getElementById('step' + (current - 1)).classList.add('active');
        }
    </script>






    <style>
        .benefit-section {
            background-color: #111;
            color: #fff;
            padding: 60px 0;
        }

        .benefit-title {
            color: #ff4444;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .benefit-item {
            margin-bottom: 20px;
        }

        .benefit-item h5 {
            color: #ff4444;
            font-weight: bold;
        }

        .benefit-item p {
            color: #ddd;
            margin-bottom: 0;
        }

        .benefit-img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.3);
        }

        @media (max-width: 768px) {
            .benefit-title {
                text-align: center;
            }

            .benefit-item {
                text-align: center;
            }
        }
    </style>

    <section class="benefit-section">
        <div class="container">
            <div class="row align-items-center gy-4">
                <!-- Left Image -->
                <div class="col-md-6">
                    <img src="{{ asset('assets/images-m/image21.jpg') }}" alt="Benefit Image" class="benefit-img">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <h2 class="benefit-title">Discover the Benefits With Us</h2>

                    <div class="benefit-item">
                        <h5>Extensive Expertise</h5>
                        <p>Benefit from a diverse team of seasoned professionals well-versed in a wide array of digital
                            marketing disciplines, ensuring comprehensive support for all your online needs.</p>
                    </div>

                    <div class="benefit-item">
                        <h5>Proven Track Record</h5>
                        <p>Our portfolio showcases successful projects and satisfied clients, demonstrating our ability to
                            deliver measurable results.</p>
                    </div>

                    <div class="benefit-item">
                        <h5>Innovative Strategies</h5>
                        <p>Stay ahead of the competition with cutting-edge approaches, leveraging AI, automation, and
                            creative visuals.</p>
                    </div>

                    <div class="benefit-item">
                        <h5>Personalized Solutions</h5>
                        <p>Every strategy is tailored to your business, audience, and objectives, ensuring maximum impact.
                        </p>
                    </div>

                    <div class="benefit-item">
                        <h5>Client-Centric Approach</h5>
                        <p>Experience transparent communication, regular updates, and ongoing support as we prioritize your
                            success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>














    <section class="py-5" style="background-color: #111;">
        <div class="container">
            <h2 class="text-center text-danger fw-bold mb-5" style="font-size: 2.5rem;">Innovating Success Together</h2>

            <!-- Swiper Slider -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @forelse($slides as $slide)
                        <div class="swiper-slide">
                            <div class="card bg-dark border-0">
                                <img src="{{ asset('storage/' . $slide->image) }}"
                                    alt="{{ $slide->title ?? 'Slide Image' }}" class="card-img-top"
                                    style="height: 220px; object-fit: cover; border-radius: 10px;">

                            </div>
                        </div>
                    @empty
                        <p class="text-center text-white">No slides found.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 15,
            loop: true,
            speed: 3000,
            autoplay: {
                delay: 1,
                disableOnInteraction: false,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1
                },
                576: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 3
                },
                992: {
                    slidesPerView: 4
                },
            },
        });
    </script>

    <section class="py-5" style="background-color: #111;">
        <div class="container">
            <h2 class="text-center text-danger fw-bold mb-5" style="font-size: 2.5rem;">Client Testimonials</h2>

            <div class="row g-4">
                @forelse($testimonials as $testimonial)
                    <div class="col-md-6 col-sm-12">
                        <div class="card bg-dark text-white shadow-sm border border-danger h-100">
                            <div class="card-body">
                                <h5 class="card-title text-danger fw-bold">{{ $testimonial->title }}</h5>
                                @if ($testimonial->client_name)
                                    <p class="text-white-50 mb-3">- {{ $testimonial->client_name }}</p>
                                @endif

                                <div class="ratio ratio-16x9 mb-3">
                                    <iframe src="{{ $testimonial->video_url }}" title="{{ $testimonial->title }}"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen style="border-radius: 10px;">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center text-white">No testimonials found.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="py-5" style="background-color: #111;">
        <div class="container">
            <h2 class="text-center text-danger fw-bold mb-5" style="font-size: 3rem; letter-spacing: 1px;">Memories &
                Moments</h2>

            <div class="row g-4">
                @forelse($galleries as $gallery)
                    <div class="col-md-4 col-sm-6">
                        <div class="gallery-img border border-dark rounded overflow-hidden shadow-sm">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal{{ $gallery->id }}">
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}"
                                    class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                            </a>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="imageModal{{ $gallery->id }}" tabindex="-1"
                        aria-labelledby="imageModalLabel{{ $gallery->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content bg-dark">
                                <div class="modal-body p-0">
                                    <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid w-100"
                                        alt="{{ $gallery->title }}">
                                </div>
                                <div class="modal-footer bg-dark border-0">
                                    <button type="button" class="btn btn-outline-light"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center text-white">No images found.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="py-5" style="background-color: #111;">
        <div class="container">
            <h2 class="text-center text-danger fw-bold mb-5 display-5">Latest Blogs</h2>

            <div class="row g-5">
                @forelse($blogs as $blog)
                    <div class="col-md-4">
                        <div class="card h-100 bg-dark text-white shadow-lg border-0">
                            @if ($blog->image && Storage::disk('public')->exists($blog->image))
                                <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top"
                                    style="height: 300px; object-fit: cover;" alt="{{ $blog->title }}">
                            @else
                                <img src="" class="card-img-top" style="height: 300px; object-fit: cover;"
                                    alt="Default Blog Image">
                            @endif

                            <div class="card-body">
                                <h4 class="card-title text-danger fw-bold">{{ $blog->title }}</h4>
                                <p class="card-text text-white-50 fs-6 mb-3">
                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}
                                </p>
                                {{-- <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-sm btn-danger mt-2">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center text-white fs-5">No blogs found.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
