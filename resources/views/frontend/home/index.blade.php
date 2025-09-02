@extends('layouts.master')

@section('title', 'Home Page')

@section('content')

    <div class="navSidebar-wraper clearfix">

    </div><!-- .navSidebar-wraper END -->
    </div><!-- .container END -->
    </header> <!-- End header section -->
    </div>

    <!-- rev slider strart -->
    <div id="rev_slider_6_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="slider-2"
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
                        Grow business by </div>

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
                        Digital Marketing </div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption   tp-resizeme" id="slide-25-layer-7" data-x="['left','left','left','left']"
                        data-hoffset="['106','106','46','57']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['64','64','10','-196']" data-width="['445','445','350','350']" data-height="none"
                        data-whitespace="normal" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":2650,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 13; min-width: 445px; max-width: 445px; white-space: normal; font-size: 15px; line-height: 26px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Lato;">
                        Share processes and data securely on a need to know basis
                        need for reconciliation it combines. </div>

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
    </div><!-- END REVOLUTION SLIDER --><!-- end rev slider strart -->
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

    <section class="py-5" style="background-color: #000;">
        <div class="container">
            <div class="row gy-5 gx-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <a href="{{ route('services.details') }}" class="text-decoration-none">
                        <div class="card bg-dark text-white h-100 border-0 shadow-sm p-3 mb-4 text-center">
                            <div class="mx-auto mb-3"
                                style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden;">
                                <img src="{{ asset('assets/images-m/marketing.png') }}" alt="Image 1"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="card-body px-2">
                                <h2 class="card-title text-danger">Digital Marketing</h2>
                                <p class="card-text">Elevate your online presence with our strategic digital marketing
                                    solutions, merging tactics and trends to grow your brand.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card bg-dark text-white h-100 border-0 shadow-sm p-3 mb-4 text-center">
                        <div class="mx-auto mb-3"
                            style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden;">
                            <img src="{{ asset('assets/images-m/content.png') }}" alt="Image 2"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body px-2">
                            <h2 class="card-title text-danger">VSMM</h2>
                            <p class="card-text">Navigate and optimize your brand’s social landscape for maximum engagement
                                through our Virtual Social Media Marketing.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card bg-dark text-white h-100 border-0 shadow-sm p-3 mb-4 text-center">
                        <div class="mx-auto mb-3"
                            style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden;">
                            <img src="{{ asset('assets/images-m/seo.png') }}" alt="Image 3"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body px-2">
                            <h2 class="card-title text-danger">SEO</h2>
                            <p class="card-text">Ensure your brand is seen online with expert SEO strategies that put you
                                on
                                top of search results.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- row end -->
        </div> <!-- container end -->
    </section>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #111;
            font-family: Arial, sans-serif;
        }

        .consultancy-section {
            display: flex;
            flex-wrap: wrap;
            background-color: #1c1c1c;
            color: white;
            
            padding: 0;
        }

        .left-image-wrapper {
            flex: 1;
            min-height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .left-image-wrapper img {
            max-width: 100%;
            height: auto;
            object-fit: cover;
        }

        .right-form {
            flex: 1;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #1c1c1c;
        }

        .right-form h2 {
            color: white;
            border-bottom: 2px solid red;
            display: inline-block;
            margin-bottom: 30px;
            font-size: 28px;
        }

        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }

        .form-step input,
        .form-step textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid white;
            background-color: #000;
            color: white;
            border-radius: 5px;
            outline: none;
            font-size: 16px;
        }

        .form-step input:focus,
        .form-step textarea:focus {
            border-color: red;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
        }

        .btn {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 25px;
            cursor: pointer;
            font-weight: bold;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: darkred;
        }

        @media (max-width: 992px) {
            .consultancy-section {
                flex-direction: column;
            }

            .left-image-wrapper {
                order: 1;
                padding: 20px;
            }

            .right-form {
                order: 2;
                padding: 30px 20px;
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
                            <input type="text" name="company_name" placeholder="Company Name"
                                class="form-control mb-2" required>
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
            <h2 class="text-center text-danger mb-5" style="font-weight: 700;">Innovating Success Together</h2>
            <div class="image-slider">

                <div class="px-3">
                    <div class="card bg-dark border-0">
                        <img src="" alt="Slide Image" class="card-img-top"
                            style="height: 200px; object-fit: cover; border-radius: 10px;">
                    </div>
                </div>

            </div>

            <!-- Custom Navigation Buttons -->
            <div class="text-center mt-4">
                <button class="btn btn-outline-danger me-2 prev-btn">← Prev</button>
                <button class="btn btn-outline-danger next-btn">Next →</button>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.image-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: false,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

            // Custom buttons
            $('.prev-btn').click(function() {
                $('.image-slider').slick('slickPrev');
            });

            $('.next-btn').click(function() {
                $('.image-slider').slick('slickNext');
            });
        });
    </script>
    <section class="py-5" style="background-color: #111;">
        <div class="container">
            <h2 class="text-center text-danger mb-4" style="font-weight: bold;">Clients Says</h2>

            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID" title="Client Testimonial Video"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>
    {{-- <iframe 
    src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
    title="Client Testimonial"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen>
</iframe> --}}



    <section class="py-5" style="background-color: #111;">
        <div class="container">
            <h2 class="text-center text-danger fw-bold mb-5">Memories & Moments</h2>

            <div class="row g-4">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="col-md-4 col-sm-6">
                        <div class="gallery-img border border-dark rounded overflow-hidden shadow-sm">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal{{ $i }}">
                                <img src="{{ asset('assets/gallery/image' . $i . '.jpg') }}"
                                    alt="Gallery Image {{ $i }}" class="img-fluid w-100"
                                    style="height: 250px; object-fit: cover;">
                            </a>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="imageModal{{ $i }}" tabindex="-1"
                        aria-labelledby="imageModalLabel{{ $i }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content bg-dark">
                                <div class="modal-body p-0">
                                    <img src="{{ asset('assets/gallery/image' . $i . '.jpg') }}" class="img-fluid w-100"
                                        alt="Full Image {{ $i }}">
                                </div>
                                <div class="modal-footer bg-dark border-0">
                                    <button type="button" class="btn btn-outline-light"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

   <section class="py-5" style="background-color: #111;">
    <div class="container">
        <h2 class="text-center text-danger fw-bold mb-5">Latest Blogs</h2>

        <div class="row g-4">
            @forelse($blogs as $blog)
                <div class="col-md-4">
                    <div class="card h-100 bg-dark text-white shadow-sm border-0">
                        @if($blog->image && Storage::disk('public')->exists($blog->image))
                            <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top"
                                 style="height: 220px; object-fit: cover;" alt="{{ $blog->title }}">
                        @else
                            <img src="" class="card-img-top"
                                 style="height: 220px; object-fit: cover;" alt="Default Blog Image">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title text-danger">{{ $blog->title }}</h5>
                            <p class="card-text text-white-50">
                                {{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}
                            </p>
                            {{-- <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-sm btn-danger mt-2">Read More</a> --}}
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center text-white">No blogs found.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>





@endsection
