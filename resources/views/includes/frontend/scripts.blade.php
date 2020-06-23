<!-- jQuery -->
<script type="text/javascript" src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
{{--<script src=”https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js”></script>--}}
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('assets/frontend/js/mdb.min.js')}}"></script>
{{--  myscripte class--}}
<script type="text/javascript" src="{{asset('assets/frontend/js/script.js')}}" ></script>
<!-- Your custom scripts (optional) -->
<script>
    $('.multi-item-carousel').on('slide.bs.carousel', function (e) {
        let $e = $(e.relatedTarget),
            itemsPerSlide = 3,
            totalItems = $('.carousel-item', this).length,
            $itemsContainer = $('.carousel-inner', this),
            it = itemsPerSlide - (totalItems - $e.index());
        if (it > 0) {
            for (var i = 0; i < it; i++) {
                $('.carousel-item', this).eq(e.direction == "left" ? i : 0).
                    // append slides to the end/beginning
                    appendTo($itemsContainer);
            }
        }
    });
</script>