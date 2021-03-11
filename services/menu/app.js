var app = angular.module("app", []);
app.controller("controller", function ($scope, $http) {
  $scope.btnName = "ບັນທຶກ";
  $scope.form_title = "ເພີ່ມກຸ່ມເມນູ";
  // notification
  function _Success() {
    Notiflix.Notify.Success("ການດຳເນີນງານສຳເລັດ");
  }

  function _Warning(e) {
    Notiflix.Notify.Warning(e);
  }

  function _Fail() {
    Notiflix.Notify.Failure("ການດຳເນີນງານບໍ່ສຳເລັດ");
  }

  // display data
  $scope._callMenu = function () {
    $http.get("sql/query_menu.php").success(function (data) {
      $scope._menus = data;
      $scope.count = data.length;
    });
  };
  // insert data
  $scope._onSave = function () {
    if ($scope.menu_title == null) {
      _Warning("ກະລຸນາປ້ອນຊື່ເມນູກ່ອນ");
    } else if ($scope.menu_icon == null) {
      _Warning("ກະລຸນາປ້ອນໄອຄ່ອນກ່ອນ");
    } else {
      $http
        .post("sql/create_menu.php", {
          menu_id: $scope.menu_id,
          menu_title: $scope.menu_title,
          menu_note: $scope.menu_note,
          menu_icon: $scope.menu_icon,
          btnName: $scope.btnName
        })
        .success(function (output) {
          console.log({ output });
          if (output == "DATA_READY_EXIT") {
            _Warning("ຂໍ້ມູນທີ່ທ່ານປ້ອນມີຢູ່ແລ້ວ");
          } else if (output == 3000) {
            _Success();
            $scope.menu_id = null;
            $scope.menu_title = null;
            $scope.menu_note = null;
            $scope.menu_icon = null;
            $scope.btnName = "ບັນທຶກ";
            $scope._callMenu();
          } else {
            _Fail();
          }
        });
    }
  };

  // CLEAR FORM 
  $scope._clear = function () {
    $scope.menu_id = null;
    $scope.menu_title = null;
    $scope.menu_note = null;
    $scope.menu_icon = null;
  }
  // UPDATE DATA
  $scope._onUpdate = function (x) {
    console.log({ x });
    $scope.menu_id = x.menu_id;
    $scope.menu_title = x.menu_title;
    $scope.menu_note = x.menu_note;
    $scope.menu_icon = x.menu_icon;
    $scope.btnName = "ແກ້ໄຂ";
    $scope.form_title = "ແກ້ໄຂກຸ່ມເມນູ";
  };
// DELETE DATA 
  $scope._onDelete = function (id) {
    Notiflix.Confirm.Show(
      "ສະຖານະ",
      "ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ່ ?",
      "ຕົກລົງ",
      "ຍົກເລີກ",
      function () {
        $http
          .post("sql/delete_menu.php", {
            menu_id: id,
          })
          .success(function (data) {
            if (data == 3000) {
              _Success();
              $scope._callMenu();
            } else {
              _Fail();
            }
          });
      },
      function () {
        $scope._callMenu();
      }
    );
  }
});
