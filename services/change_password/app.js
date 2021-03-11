
// notification 
function _Success() {
  Notiflix.Notify.Success('ການດຳເນີນງານສຳເລັດ');
}

function _Warning(e) {
  Notiflix.Notify.Warning(e);
}

function _Fail() {
  Notiflix.Notify.Failure('ການດຳເນີນງານບໍ່ສຳເລັດ');
}
function _confirm() {
  Notiflix.Confirm.Show('ສະຖານະ', 'ທ່ານປ່ຽນລະຫັດສຳເລັດແລ້ວ ທ່ານຕ້ອງການອອກຈາກລະບົບເລີຍບໍ່ ?', 'ອອກຈາກລະບົບ', 'ຢູ່ໃນລະບົບນີ້ຕໍ່',
    function () {
      Notiflix.Loading.Standard('ກຳລັງດຳເນີນງານ...');
      setInterval(function () { window.location = '../../logout.php' }, 500);
    },
    function () {
      window.location = '../home/';
    });
}

$('#changePassword').on('submit', function (event) {
  var old_password = $('#old_password').val()
  var new_password = $('#new_password').val()
  if (old_password =="") { _Warning('ກະລຸນາປ້ອນລະຫັດເກົ່າກ່ອນ') }
  else if (new_password == "") {
    _Warning('ກະລຸນາປ້ອນລະຫັດໃໝ່ກ່ອນ')
  } else {
    event.preventDefault();
    $.ajax({
      url: "./sql/change.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function (dataResult) {
        console.log('%capp.js line:38 dataResult', 'color: #007acc;', dataResult);
        if (dataResult == "PASSWORD_NOT_MACTH") {
          _Warning("ລະຫັດເກົ່າຂອງທ່ານບໍ່ຖືກຕ້ອງ")
        } else if (dataResult == "SUCCESS") {
          _Success()
          setTimeout(function () {
            _confirm()
          }, 2000);
        } else {
          _Fail()
        }
      }
    });
  }
})