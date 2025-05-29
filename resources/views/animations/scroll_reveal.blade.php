@extends('layouts.simple.master')

@section('title', 'Scroll Reveal')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Scroll Reveal</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Animation</li>
                        <li class="breadcrumb-item active">Scroll Reveal</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Scroll Reveal Example</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gallery my-gallery" id="aniimated-thumbnials" itemscope="">
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/01.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/01.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 1</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/02.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/02.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 2</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/03.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/03.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 3</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/04.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/04.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 4</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/05.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/05.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 5</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/06.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/06.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 6</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/07.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/07.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 7</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/08.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/08.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 8</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/09.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/09.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 9</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/010.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/010.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 10</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/011.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/011.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 11</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/012.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/012.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 12</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/013.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/013.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 13</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/014.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/014.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 14</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/015.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/015.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 15</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/0') }}16.jpg" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/016.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 16</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/01.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/01.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 17</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/02.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/02.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 18</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/03.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/03.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 19</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/04.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/04.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 20</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/05.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/05.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 21</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/010.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/010.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 22</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/011.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/011.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 23</figcaption>
                            </figure>
                            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/012.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img class="img-thumbnail"
                                        src="{{ asset('assets/images/lightgallry/012.jpg') }}" itemprop="thumbnail"
                                        alt="Image description"></a>
                                <figcaption itemprop="caption description">Image caption 24</figcaption>
                            </figure>
                        </div><!-- Root element of PhotoSwipe. Must have class pswp.-->
                        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true"><!--Background of PhotoSwipe.
    It's a separate element, as animating opacity is faster than rgba().-->
                            <div class="pswp__bg"></div><!-- Slides wrapper with overflow:hidden.-->
                            <div class="pswp__scroll-wrap">
                                <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory.--><!-- don't modify these 3 pswp__item elements, data is added later on.-->
                                <div class="pswp__container">
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                </div>
                                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
                                <div class="pswp__ui pswp__ui--hidden">
                                    <div class="pswp__top-bar">
                                        <!-- Controls are self-explanatory. Order can be changed.-->
                                        <div class="pswp__counter"></div><button class="pswp__button pswp__button--close"
                                            title="Close (Esc)"></button><button class="pswp__button pswp__button--share"
                                            title="Share"></button><button class="pswp__button pswp__button--fs"
                                            title="Toggle fullscreen"></button><button
                                            class="pswp__button pswp__button--zoom"
                                            title="Zoom in/out"></button><!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR--><!-- element will get class pswp__preloader--active when preloader is running-->
                                        <div class="pswp__preloader">
                                            <div class="pswp__preloader__icn">
                                                <div class="pswp__preloader__cut">
                                                    <div class="pswp__preloader__donut"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                        <div class="pswp__share-tooltip"></div>
                                    </div><button class="pswp__button pswp__button--arrow--left"
                                        title="Previous (arrow left)"></button><button
                                        class="pswp__button pswp__button--arrow--right"
                                        title="Next (arrow right)"></button>
                                    <div class="pswp__caption">
                                        <div class="pswp__caption__center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>How to Use Scroll Reveal(Customize options according to requirements)</h5>
                        <p class="f-m-light mt-1">Add <code>.reveal</code> class to any tag for Archive
                            animation like this</p>
                    </div>
                    <div class="card-body">
                        <div><i class="text-muted">// The Below Function is example of how to initlize
                                reveal</i>
                            <div class="line"><span class="text-danger">if
                                    (Modernizr.csstransforms3d)</span><span class="text-success">{</span><br> window.sr =
                                ScrollReveal();<br>
                                sr.reveal('.reveal', {<br> duration: 800,<br> delay: 400,<br> reset:
                                true,<br> easing: 'linear',<br> scale: 1<br> });<br><span class="text-success"> }</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Scroll Reveal Settings options</h5>
                    </div>
                    <div class="card-body">
                        <div class="p-b-15"><i class="text-muted">// 'bottom', 'left', 'top', 'right'</i>
                            <div class="line">origin: <span class="text-danger">'bottom',</span></div>
                        </div>
                        <div class="p-b-15"><i class="text-muted">// Can be any valid CSS distance, e.g.
                                '5rem', '10%', '20vw', etc.</i>
                            <div class="line">distance: <span class="text-danger">'20px',</span></div>
                        </div>
                        <div class="p-b-15"><i class="text-muted">// Time in milliseconds.</i>
                            <div class="line">duration: <span class="text-danger">500,</span> delay: <span
                                    class="text-danger">0,</span></div>
                        </div>
                        <div class="p-b-15"><i class="text-muted">// Starting angles in degrees, will
                                transition from these values to 0 in all axes.</i>
                            <div class="line">rotate: { x: <span class="text-danger">0</span>, y: <span
                                    class="text-danger">0</span>, z: <span class="text-danger">0</span> },
                            </div>
                        </div>
                        <div class="p-b-15"><i class="text-muted">// Starting opacity value, before
                                transitioning to the computed opacity.</i>
                            <div class="line">opacity: <span class="text-danger">0</span>,</div>
                        </div>
                        <div class="p-b-15"><i class="text-muted">// Starting scale value, will transition
                                from this value to 1</i>
                            <div class="line">scale: <span class="text-danger"> 0.9</span>,</div>
                        </div>
                        <div class="p-b-15"><i class="text-muted">// Accepts any valid CSS easing, e.g.
                                'ease', 'ease-in-out', 'linear', etc.</i>
                            <div class="line">easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',</div>
                        </div>
                        <div class="p-b-15"><i class="text-muted">// is the default reveal container. You
                                can pass either:<br> // DOM Node, e.g.
                                document.querySelector('.fooContainer')<br> // Selector, e.g.
                                '.fooContainer'</i>
                            <div class="line">easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',</div>
                        </div>
                        <div class="p-b-15"><i class="text-muted">// true/false to control reveal animations
                                on mobile.</i>
                            <div class="line">mobile: true,</div>
                        </div>
                        <div class="p-b-15"><i class="text-muted">// true: reveals occur every time elements
                                become visible<br> // false: reveals occur once as elements become
                                visible</i>
                            <div class="line">reset: false,</div>
                        </div>
                        <div class="p-b-15"><i class="text-muted">// 'always' — delay for all reveal
                                animations<br> // 'once' — delay only the first time reveals occur<br> //
                                'onload' - delay only for animations triggered by first load</i>
                            <div class="line">useDelay: 'always',</div>
                        </div>
                        <div class="p-b-15"><i class="text-muted">// Change when an element is considered in
                                the viewport. The default value<br> // of 0.20 means 20% of an element must
                                be visible for its reveal to occur.</i>
                            <div class="line">viewFactor: 0.2,</div>
                        </div>
                        <div class="p-b-15"><i class="text-muted">// Pixel values that alter the container
                                boundaries.<br> // e.g. Set `{ top: 48 }`, if you have a 48px tall fixed
                                toolbar.<br> // --<br> // Visual Aid:
                                https://scrollrevealjs.org/assets/viewoffset.png</i>
                            <div class="line">viewOffset: { top: 0, right: 0, bottom: 0, left: 0 },</div>
                        </div>
                        <div class="p-b-15"><i class="text-muted">// Callbacks that fire for each triggered
                                element reveal, and reset.</i>
                            <div class="line">beforeReveal: <span class="text-danger">function</span>
                                (domEl) {},<br> beforeReset: <span class="text-danger">function</span>
                                (domEl) {},</div>
                        </div>
                        <div><i class="text-muted">// Callbacks that fire for each completed element reveal,
                                and reset.</i>
                            <div class="line">afterReveal: <span class="text-danger">function</span> (domEl)
                                {},<br> afterReset: <span class="text-danger">function</span> (domEl) {}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe.js') }}"></script>
    <script src="{{ asset('assets/js/animation/scroll-reveal/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>
    <script src="{{ asset('assets/js/animation/scroll-reveal/reveal-custom.js') }}"></script>
@endsection
