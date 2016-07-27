<?php require ('header.php')?>

<header id="head" class="secondary"></header>
<div class="container">
    <br>

    <div class="row">
        <h1><a href="?act=admin">Клиенты</a> / <a href="?act=admin_sms">Сообщения</a></h1>
        <article class="col-sm-9 maincontent">
            <br>
            <br>
            <table class="table table-bordered">
                <?php if($act == 'admin'):?>
                                <thead>
                                <tr>
                                    <th>Имя</th>
                                    <th>Номер</th>
                                    <th>Квадратура</th>
                                    <th>Материал( толщина, плотность)</th>
                                    <th>Цена</th>
                                    <th>Del</th>
                                </tr>
                                </thead>
                                <?php foreach ($records['all_customer'] as $row): ?>
                                    <tbody>
                                    <tr>
                                        <td><?php echo $row['name']?></td>
                                        <td><?php echo $row['number']?></td>
                                        <td><?php echo $row['quad']?></td>
                                        <td><?php echo $row['material']?>
                                            <?php echo $row['thick']?> плотность:
                                            <?php echo $row['density']?></td>
                                        <td><?php echo $row['price']?></td>
                                        <td><a href="?act=delete-customer&id=<?php echo $row['id']?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                    </tr>
                                    </tbody>
                                <?php endforeach;?>
                            </table>
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <strong>Pages: </strong>
                                    <?php for ($i=1; $i<=$records['pages']; $i++):?>
                                        <?php if($i == $records['page']):?><b><?=$i ?></b>
                                        <?php else: ?><a href="?page=<?=$i?>"><?=$i?></a>
                                        <?php endif;?>
                                    <?php endfor ?>
                                </div>
                            </div>

                <?php elseif ($act =='admin_sms'): ?>
                        <thead>
                        <tr>
                            <th>Имя</th>
                            <th>Email</th>
                            <th>Номер</th>
                            <th>Текст</th>
                            <th>Del</th>
                        </tr>
                        </thead>
                            <?php foreach ($records['all_sms'] as $row): ?>
                                <tbody>
                                <tr>
                                    <td><?php echo $row['name']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['number']?></td>
                                    <td><?php echo $row['text']?></td>
                                    <td><a href="?act=delete-sms&id=<?=$row['id']?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                </tr>
                                </tbody>
                            <?php endforeach;?>
                            </table>
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <strong>Pages: </strong>
                                    <?php for ($i=1; $i<=$records['pages']; $i++):?>
                                        <?php if($i == $records['page']):?><b><?=$i ?></b>
                                        <?php else: ?><a href="?page_sms=<?=$i?>"><?=$i?></a>
                                        <?php endif;?>
                                    <?php endfor ?>
                                </div>
                            </div>
                <?php endif; ?>
            <br>
            <br>


        </article>

        <aside class="col-sm-3 sidebar sidebar-right">

            <div class="panel panel-default">
                <div class="panel-body">
                    <h4 class="thin text-center">Сменить стоимость за м.кв</h4>
                    <hr>
                    <div class="row">
                        <div class="col-xs-6 form-group form-group-sm">
                            <label>Пенопласт</label>
                                    <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Chang price">
                        </div>
                            <div class="col-xs-6"><br>
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh" aria-hidden="true"></i>

                                </button>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 form-group form-group-sm">
                            <label>Пенополистирол</label>
                            <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Chang price">
                        </div>
                        <div class="col-xs-6"><br>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh" aria-hidden="true"></i>

                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 form-group form-group-sm">
                            <label>Мин. вата</label>
                            <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Chang price">
                        </div>
                        <div class="col-xs-6">
                            <br>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh" aria-hidden="true"></i>

                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="panel panel-default">
                    <div class="panel-body">
                        <h4 class="thin text-center">Сменить пароль</h4>
                        <!--<p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="signup.html">Register</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>-->
                        <hr>
                        <form>
                            <div class="top-margin">
                                <label>Пароль</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="top-margin">
                                <label>Еще раз</label>
                                <input type="password" class="form-control" name="repeat_password" id="repeat_password">
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4 text-right">
                                    <button type="button" id="change_password" class="btn btn-default">Сменить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

        </aside>
    </div>
</div>



<?php require ('footer.php')?>
