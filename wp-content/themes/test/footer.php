<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <h3>Металлоконструкции</h3>
                <ul class="list-unstyled">
                    <li><a href="">Ворота</a></li>
                    <li class="active"><a href="">Заборы</a></li>
                    <li><a href="">Качели</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <h3>Строительство</h3>
                <ul class="list-unstyled">
                    <li><a href="">Ангары</a></li>
                    <li><a href="">Гаражи</a></li>
                    <li><a href="">Парковка</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <h3>Аренда</h3>
                <ul class="list-unstyled">
                    <li class="active"><a href="">Спецтехника</a></li>
                    <li><a href="">Офисы</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <h3>ООО "МеталлСтрой Сик"</h3>
                <ul class="list-unstyled">
                    <li><a href="">О нас</a></li>
                    <li><a href="">Новости</a></li>
                    <li><a href="">Фотогаллерея</a></li>
                    <li><a href="">Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="<?php echo get_template_directory_uri() ?>/assets/jquery-1.11.2/jquery-1.11.2.min.js"></script>


<!-- Bootstrap js -->
<script src="<?php echo get_template_directory_uri() ?>/assets/bootstrap-v-3.3.2/js/bootstrap.min.js"></script>

<!-- OwlCarusel js -->
<script src="<?php echo get_template_directory_uri() ?>/assets/OwlCarousel2-2.1.6/dist/owl.carousel.min.js"></script>

<!-- lightbox-master js -->
<!-- <script src="assets/lightbox-master/dist/ekko-lightbox.js"></script> -->

<script>
    $(document).ready(function(){
        $('#carouselOne').owlCarousel({
            items:10,
            autoplay:true,
            nav:true,
            autoWidth:false,
            margin:0,
            loop:true,
            dots:false,
            dotData:false,
            navText:["<img src='<?php echo get_template_directory_uri() ?>///images/partners/prev-nav.png'>","<img src='<?php echo get_template_directory_uri() ?>///images/partners/next-nav.png'>"]
        });
    });
</script>
</body>
</html>