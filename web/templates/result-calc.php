<?php require('header.php'); ?>

<div id="result-calc">
<div id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"><a href="?" class="close" type="button" data-dismiss="modal">×</a>
                <h4 class="modal-title">Цена утепления с квадратурой <?=$_POST['quad']?> кв.м</h4>
            </div >
            <div class="center"><h1><?=$price; ?></h1></div>
            <div class="modal-footer"><a href="?" class="btn btn-default"  data-dismiss="modal">Закрыть</a></div>
        </div>
    </div>
</div>
</div>

<?php require('footer.php'); ?>
