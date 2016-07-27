<?php require ('header.php')?>

<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">


    <div class="row">

        <!-- Article main content -->
        <article class="col-sm-9 maincontent">
            <header class="page-header">
                <h1 class="page-title">Связь с нами</h1>
            </header>

            <p>
                Мы хотели бы услышать от, Вас, заинтересованы ли вы в совместной работе? Заполните форму ниже с некоторой информацией о вашем утеплении, и я позвоню, а если нужно то и приеду, как только смогу.
            <h3>Для отправки сообщения заполните все поля</h3>
            <br>
            <form action="?act=message" method="POST">
                <div class="row">
                    <div class="col-sm-4">
                        <input required type="text" class="form-control" id="name" placeholder="Василий" name="name">
                    </div>
                    <div class="col-sm-4">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                    <div class="col-sm-4">
                        <input  required type="text" class="form-control" id="number" placeholder="номер" name="number" >
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <textarea placeholder="Напишите, Ваше, пожелание здесь ..." class="form-control" rows="9" id="sms"  name="text"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <label class="checkbox"><input type="checkbox"> Подписаться на рассылку</label>
                    </div>
                    <div class="col-sm-6 text-right">
                        <button type="submit" class="btn btn-default">Отправить сообщение</button>
                    </div>
                </div>
            </form>

        </article>

       <aside class="col-sm-3 sidebar sidebar-right">

                    <div class="widget">
                        <h4>Адрес</h4>
                        <address>
                            Украина г.Харьков
                        </address>
                        <h4>Номер:</h4>
                <address>
                    (099) 522-26-55
                </address>
            </div>
        </aside>
    </div>
</div>


<?php require ('footer.php')?>
