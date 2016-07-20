<?php require ('header.php')?>

<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.html">Главная</a></li>

    </ol>

    <div class="row">

        <!-- Article main content -->
        <article class="col-xs-12 maincontent">
            <header class="page-header">
                <h1 class="page-title">Вход в админку</h1>
            </header>

            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Пароль пожалуйста</h3>
                        <!--<p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="signup.html">Register</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>-->
                        <hr>
                        <!--Modal-->
                        <div id="myModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header"><button class="close" type="button" data-dismiss="modal">×</button>

                                    </div>
                                    <div class="modal-body">Вы ввели не правильный пароль</div>
                                    <div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button></div>
                                </div>
                            </div>
                        </div>


                        <form>
                            <!--<div class="top-margin">
                                <label>Username/Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>-->
                            <div class="top-margin">
                                <label>Пароль<span class="text-danger" >*</span></label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-8">
                                    <b><a href="">Забыл пароль?</a></b>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button type="button" onclick="passwordClic()" class="btn btn-default">Войти</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </article>
        <!-- /Article -->

    </div>
</div>	<!-- /container -->


<?php require ('footer.php')?>
