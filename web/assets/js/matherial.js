$(document).ready(function () {
    $("#send_form").bind("click",function (event) {
        var name = document.getElementById("name").value;
        var number = document.getElementById("number").value;
        var quad = document.getElementById("quad").value;
        var thick = document.getElementById("thick").value;
        var density = document.getElementById("density").value;
        var gridRadios = $('input[name=gridRadios]:radio:checked').val();

        switch (gridRadios) {

            case "styrofoam":
                if (name == 0 || number == 0 || quad == 0 || thick == 0 || density == 0) {
                    $('#modal-head').html('Ошибка');
                    $('#modal-body').html('Заполните пожалуйчта пустое поле');
                    $('#myModal').modal('show');
                    throw "stop";
                }
                if (thick == 5 || thick == 10) {
                    console.log("ok")
                } else {
                    $('#modal-head').html('Ошибка');
                    $('#modal-body').html('Толщина 5 или 10');
                    $('#myModal').modal('show');
                    throw "stop";
                }
                if (density == 25 || density == 35) {
                    console.log("ok")
                } else {
                    $('#modal-head').html('Ошибка');
                    $('#modal-body').html('Плотность 25 или 35');
                    $('#myModal').modal('show');
                    throw "stop";
                }
                break;

            case "expanded_polystyrene":
                if (name == 0 || number == 0 || quad == 0 || thick == 0) {
                    $('#modal-head').html('Ошибка');
                    $('#modal-body').html('Заполните пожалуйчта пустое поле');
                    $('#myModal').modal('show');
                    throw "stop";
                }
                if (density == 0)density = 1;

                if (thick == 5 || thick == 3) {
                    console.log("ok")
                } else {
                    $('#modal-head').html('Ошибка');
                    $('#modal-body').html('Толщина 3, 5 или 10');
                    $('#myModal').modal('show');
                    throw "stop";
                }
                break;

            case "mineral_wool":
                if (name == 0 || number == 0 || quad == 0 || thick == 0) {
                    $('#modal-head').html('Ошибка');
                    $('#modal-body').html('Заполните пожалуйчта пустое поле');
                    $('#myModal').modal('show');
                    throw "stop";
                }
                if (density == 0)density = 1;
                if (thick == 5 || thick == 10) {
                    console.log("ok")
                } else {
                    $('#modal-head').html('Ошибка');
                    $('#modal-body').html('Толщина 5 или 10');
                    $('#myModal').modal('show');
                    throw "stop";
                }
                break;
        }

        $.ajax({
            url: "?act=calc",
            type: "POST",
            data:{  name : name,
                    number: number,
                    quad: quad,
                    thick: thick ,
                    density: density,
                    material: gridRadios},
            dataType: "text",
            success: function (result) {
                $('#modal-head').html('Цена утепления');
                $('#modal-body').html(result);
                $('#myModal').modal('show');
            }
        })
    })
})

$(document).ready(function () {
    $("#change_password").bind("click",function (event) {
        var password = document.getElementById("password").value;
        var repeat_password = document.getElementById("repeat_password").value;

        if( password != repeat_password){
            $('#modal-head').html('Ошибка');
            $('#modal-body').html("Не совпадают пароли");
            $('#myModal').modal('show');
            throw stop;
        }

        $.ajax({
            url: "?act=change_password",
            type: "POST",
            data:{ password: password,
                    repeat_password: repeat_password
            },
            success: function (result) {
                $('#modal-head').html('Пароль');
                $('#modal-body').html("Изменение пароля прошло успешно");
                $('#myModal').modal('show');
            }

        })

    })
})

