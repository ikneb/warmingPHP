<?php require ('header.php')?>
<div class="container text-center">

</div>
<!-- /Intro-->

<!-- Highlights - jumbotron -->
<div class="jumbotron top-space">
    <div class="container">




    </div>
</div>
<!-- /Highlights -->

<!-- container -->
<div class="container">



    <div class="row">

    </div>

    <div class="row">

    </div> <!-- /row -->

    <div class="jumbotron top-space">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Имя</th>
                <th>Телефон</th>
                <th>Квадратура</th>
                <th>Толщина утеплителя</th>
                <th>Материал</th>
                <th>Плотность</th>
                <th>Цена</th>
            </tr>
            </thead>
            <tbody id="bodyTabl">

            </tbody>
        </table>

        <p class="text-right"><button type="button" onclick="allall()" class="btn btn-default">Посмотреть всех клиентов »</button></p>
    </div>

</div> <!-- /container -->


<!-- container -->
<div class="container">



    <div class="row">

    </div>

    <div class="row">

    </div> <!-- /row -->

    <div class="jumbotron top-space">
    </div> <!-- /container -->
    <!-- container -->
    <div class="container">
        <div class="row">
        </div>
        <div class="row">
        </div> <!-- /row -->

        <div class="jumbotron top-space">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Имя</th>
                    <th>Почта</th>
                    <th>Телефон</th>
                    <th>Сообщение</th>
                </tr>
                </thead>
                <tbody id="bodySms">

                </tbody>
            </table>

            <p class="text-right">
                <button type="button" onclick="deleteSms()" class="btn btn-default">Удалить все сообщения »</button>
                <button type="button" onclick="readSms()" class="btn btn-default">Читать все сообщения »</button>
            </p>
        </div>

    </div> <!-- /container -->





<?php require ('footer.php')?>
