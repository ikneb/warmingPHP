<?php require ('header.php')?>

<header id="head">
    <div class="container">
        <div class="row">
            <h1 class="lead">Утепление квартир в Харькове</h1>
            <p class="tagline">Работаем по технологии <a href="http://www.ceresit.ua/">Сeresit</a></p>
            <p><a class="btn btn-default btn-lg" role="button" href="#question">Часто задаваемые вопросы</a>
                <a class="btn btn-action btn-lg" role="button" href="#calc">Калькулятор утепления</a></p>
        </div>
    </div>
</header>
<!-- /Header -->

<!-- Intro -->
<div class="container text-center">
    <br> <br>
    <h2 class="thin">Калькулятор утепления</h2>
    <p class="text-muted">
        Цена утепления при замере может не много отличаться от данной цены.
    </p>
</div>
<!-- /Intro-->
<a name="calc"></a><!--якорь-->
<!-- Highlights - jumbotron -->
<div class="jumbotron top-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">

        <form>
            <div class="form-group">
                <label for="name">Ваше имя</label>
                <input required type="text" class="form-control" id="name" placeholder="Василий" name="name" >
            </div>
                        <div class="form-group row">
                <label for="number" class="col-sm-2 form-control-label">Номер телефона</label>

                <div class="col-sm-10">
                    <input  required type="text" class="form-control" id="number" placeholder="0500409599" name="number"  >
                </div>
            </div>
            <div class="form-group row">
                <label for="quad" class="col-sm-2 form-control-label">Ваша квадратура</label>

                <div class="col-sm-10">
                    <input required type="text" class="form-control" id="quad" placeholder="60" name="quad" >
                </div>
            </div>
            <div class="form-group row">
                <label for="thick" class="col-sm-2 form-control-label">Толщина утеплителя</label>

                <div class="col-sm-10">
                    <input required type="text" class="form-control" id="thick" placeholder="3,5 или 10см " name="thick" >
                </div>
            </div>
            <div class="form-group row">
                <label for="density" class="col-sm-2 form-control-label">Плотность утеплителя</label>

                <div class="col-sm-10" id="">
                    <input required type="text" class="form-control" id="density" placeholder="если пенопласт 25 или 35"
                           name="density" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2">Выберите материал</label>

                <div class="col-sm-10" >
                    <div class="radio">
                        <label>
                            <input type="radio" name="gridRadios" id="gridRadios" value="styrofoam" checked >
                            Пенопласт
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="gridRadios" id="gridRadios" value="expanded_polystyrene">
                            Пенополистирол
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="gridRadios" id="gridRadios" value="mineral_wool">
                            Минеральная вата
                        </label>
                    </div>

                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="button" id="send_form" class="btn btn-default">Посчитать</button>
                </div>
            </div>
        </form>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6">
                <img src="web/assets/images/m.jpg">
            </div>
        </div>
    </div>
</div>
<!-- /Highlights -->

<!-- container -->
<div class="container">

    <h2 class="text-center top-space">Часто задаваемые вопросы</h2>
    <br>

    <div class="row">
        <div class="col-sm-6">
            <h3>КАКОЙ ВЫБРАТЬ УТЕПЛИТЕЛЬ?</h3>
            <p>Для утепления фасада можно использовать пенопласт или минеральную (каменную) вату. Основные преимущества пенопласта - стоимость, минваты - прочность.</p>
        </div>
        <div class="col-sm-6">
            <h3>МОЖНО ЛИ СЭКОНОМИТЬ НА МАТЕРИАЛЕ?</h3>
            <p>
                Фасадные материалы должны выдерживать воздействие окружающей среды, что достигается специальным составом. Так, все соответствующие материалы имеют примерно одинаковую стоимость и обычно отличаются только классом. Для разумной экономии - компания CAPAROL предлагает свои материалы произведенные непосредственно в Украине.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <h3>КАКАЯ ПЛОТНОСТЬ ПЕНОПЛАСТА ЛУЧШЕ?</h3>
            <p>
                Оптимальная плотность для утепления фасада 25 кг./м3 (честная :) ). Меньшая плотность будет слишком мягкой, большая будет ухудшать показатели теплопропускаемости. Не в коем случае не используйте пенополистирол - он не подходит для утепления фасада.
            </p>
        </div>
        <div class="col-sm-6">
            <h3>ДЫШИТ ЛИ ФАСАД УТЕПЛЕННЫЙ ПЕНОПЛАСТОМ?</h3>
            <p>Да, пенопласт хоть и в меньшей степени, чем минвата, но пропускает определенное количества воздуха.

            </p>
        </div>
    </div> <!-- /row -->

    <div class="jumbotron top-space">
        <h3>Цена на утеплитель</h3><br>
        <h4>Цена на утеплитель зависит от производителя (марки, бренда). Цена на базальтовую изоляцию сильно зависит от плотности, и увеличивается с повышением плотности.

            Среди пенополистирольной изоляции так же цена зависит от плотности, а так же от группы горючести, чем она ниже, тем выше цена на утеплитель.

            Для того что бы приобрести утеплитель по самой низкой цене следует, обратится в компанию, ведущую оптовую торговлю в данной области. В основном такие фирмы торгуют от нескольких кубов за безналичный расчет, но так же, можно купить за наличный расчет. Если вам требуется меньше одной упаковки (1-5) листов лучше обратиться в розничную продажу утеплителей, например на строительный рынок, но цена на утеплитель будет намного выше.</h4>
        <p class="text-right"><a class="btn btn-primary btn-large">Читать больше »</a></p>
    </div>

</div>	<!-- /container -->

<!-- Social links. @TODO: replace by link/instructions in template -->
<section id="social">
    <div class="container">
        <div class="wrapper clearfix">
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like" ></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_linkedin_counter"></a>
                <a class="addthis_button_google_plusone"></a>
            </div>
            <!-- AddThis Button END -->
        </div>
    </div>
</section>



<?php require ('footer.php')?>

