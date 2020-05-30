        <!-- About contant -->
        <div class="about-contant">
            <div class="container">
                <div class="section-title">
                    <?php
                        $test = preg_match('#\((.*?)\)#', $titre->presentation, $match);
                        if (!empty($match[0])) {
                        $mot =  $match[1];
                        $word = "($mot)";
                        $titre->presentation = str_replace($word, "<span>$mot</span>", $titre->presentation);
                        }
                    ?>
                    <h2>{!!$titre->presentation!!}</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>{{$presentation->description1}}</p>
                    </div>
                    <div class="col-md-6">
                        <p>{{$presentation->description2}}</p>
                    </div>
                </div>
                <div class="text-center mt60">
                    <a href="/#contact" class="site-btn">{{$presentation->btn}}</a>
                </div>
                <!-- popup video -->
                <div class="intro-video">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            @if (Storage::disk('public')->has($presentation->imgvideo))
                            <img src={{asset('storage/'.$presentation->imgvideo)}} alt="">
                            @else 
                            <img src="{{$presentation->imgvideo}}" alt="">
                            @endif
                            <a href="{{$presentation->lien}}" class="video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About section end -->