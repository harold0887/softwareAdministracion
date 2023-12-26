require('./bootstrap');
import 'bootstrap';


$(function () {
    $("#spinner-main").modal("hide");
    btnPrueba();
    showModalLoad();
});


Livewire.on("error", function ($message) {
    Swal.fire("¡error!", $message["message"], "error");
});


Livewire.on("success-auto-close", function ($message) {
    alertFloatConfirm($message["message"]);
});

function btnPrueba() {
    $("#btn-prueba").on("click", function () {
        alertFloat("right", "prueba", "check")
        Swal.fire("¡Buen trabajo!", "prueba", "success");


    });
}


//activar modal al enviar, se cierra al retornar controlador
function showModalLoad() {
    $("#forgot-password").submit(() => {
        $("#spinner-main").modal("show");
    });
}



function alertFloatConfirm(message) {
    const type = ["info", "danger", "success", "warning", "rose", "primary"];

    const color = Math.floor(Math.random() * 6 + 1);

    $.notify(
        {
            icon: "check_circle",
            message: message,
        },
        {
            type: "rose",
            timer: 3000,
            placement: {
                from: "top",
                align: "right",
            },
        }
    );
}


function alertFloat(align, message, icon) {
    const type = ["info", "danger", "success", "warning", "rose", "primary"];

    const color = Math.floor(Math.random() * 6 + 1);

    $.notify(
        {
            icon: icon,
            message: message,
        },
        {
            type: type[color],
            timer: 3000,
            placement: {
                from: "top",
                align: align,
            },
        }
    );
}





