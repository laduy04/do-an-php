<script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <script type="text/javascript" src="js/scrolling-nav.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery.rateyo.min.js"></script>
    <script src="js/jquery.desoslide.js"></script>

    <script type="text/javascript">
        $('#slideshow').desoSlide({
            thumbs: $('ul.slideshow_thumbs li > a'),
            effect: {
                provider: 'animate',
                name: 'fade'
            }

        });
    </script>

    <script type="text/javascript">
        $(function () {
            $("#rateYo").rateYo({
                rating: 3.6,
                starWidth: "25px"
            });

        });
    </script>

    <script>
        function dcQuantity() {
            var result = document.getElementById('quantity-input');
            var qty = result.value;
            if (!isNaN(qty) && qty > 1) {
                result.value--;
                document.getElementById('quantity-input').innerHTML = qty;
            }
            return false;
        };
        function icQuantity() {
            var result = document.getElementById('quantity-input');
            var qty = result.value;
            if (!isNaN(qty) && qty < 10) {
                result.value++;
                document.getElementById('quantity-input').innerHTML = qty;
            }
            return false;
        }
    </script>

    <script>
        $(document).ready(function () {
            $('.less-evaluation').click(function () {
                $('.content-desc').css('height', '1180px');
                $(this).css('display', 'none');
                $('.more-evaluation').css('display', 'block');
            })
        })

        $(document).ready(function () {
            $('.more-evaluation').click(function () {
                $('.content-desc').css('height', 'auto');
                $(this).css('display', 'none');
                $('.less-evaluation').css('display', 'block');
            })
        })

        $(document).ready(function () {
            $('.page-scroll').click(function () {
                $('.page-scroll').removeClass('active');
                $(this).addClass('active');
            })
        })
    </script>
