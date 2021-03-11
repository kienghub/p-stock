
function _Success() {
    Notiflix.Notify.Success("ການດຳເນີນງານສຳເລັດ");
}

function _Warning(e) {
    Notiflix.Notify.Warning(e);
}

function _Fail() {
    Notiflix.Notify.Failure("ການດຳເນີນງານບໍ່ສຳເລັດ");
}

function _onDelete(id) {
    Notiflix.Confirm.Show('ສະຖານະ', 'ຕ້ອງການ ລຶບຂໍ້ມູນນີ້ ແທ້ບໍ່?', 'ຕົກລົງ', 'ຍົກເລີກ', function () {
        $.ajax({
            url: "./sql/delete-user.php",
            type: "GET",
            data: {id: id },
            success: function (dataResult) {
                if (dataResult == "SUCCESS") {
                    _Success()
                    setTimeout(() => {
                        window.location='./'
                    }, 2000);
                } else {
                    _Fail()
                }
            }
        });
    });
}