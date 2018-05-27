<script src="{{asset('site/js/jarallax.js')}}"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
<script src="{{asset('site/js/responsiveslides.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('site/js/easing.js')}}"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling icon -->
<!-- pricing -->
<script src="{{asset('site/js/jquery.flipster.js')}}"></script>
<script>
    <!--

    $(function () {
        $(".flipster").flipster({style: 'carousel', start: 0});
    });

    -->
</script>
<!-- //pricing -->
<!-- slider -->
<script type="text/javascript" src="{{asset('site/js/jquery.immersive-slider.js')}}"></script>
<!-- //slider -->