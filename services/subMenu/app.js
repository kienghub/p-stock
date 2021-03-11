var app = angular.module("app", []);
app.controller("controller", function ($scope, $http) {
  $scope.btnName = "ບັນທຶກ";
  $scope.form_title = "ເພີ່ມເມນູ";
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

  // DISPLAY DATA
  $scope._callMenu = function () {
    $http.get("../menu/sql/query_menu.php").success(function (data) {
      console.log({data});
      $scope._menus = data;
      $scope.count = data.length;
    });
  };

  $scope._callSubMenu = function () {
    $http.get("sql/query_submenu.php").success(function (data) {
      $scope._subMenus = data;
      $scope.count = data.length;
    });
  };
  // INSERT DATA
  $scope._onSave = function () {
    if ($scope.subm_title == null) {
      _Warning("ກະລຸນາປ້ອນຊື່ເມນູກ່ອນ");
    } else if ($scope.sub_menu_id == null) {
      _Warning("ກະລຸນາເລືອກກຸ່ມເມນູກ່ອນ");
    }else if ($scope.subm_link == null) {
      _Warning("ກະລຸນາປ້ອນລິ້ງກ່ອນ");
    } else {
      $http
        .post("sql/create_submenu.php", {
          subm_id: $scope.subm_id,
          sub_menu_id: $scope.sub_menu_id,
          subm_title: $scope.subm_title,
          subm_link: $scope.subm_link,
          subm_note: $scope.subm_note,
          btnName: $scope.btnName
        })
        .success(function (output) {
          console.log({ output });
          if (output == "DATA_READY_EXIT") {
            _Warning("ຂໍ້ມູນທີ່ທ່ານປ້ອນມີຢູ່ແລ້ວ");
          } else if (output == 3000) {
            _Success();
            $scope.subm_id = null;
            $scope.sub_menu_id = null;
            $scope.subm_title = null;
            $scope.subm_link = null;
            $scope.subm_note = null;
            $scope.btnName = "ບັນທຶກ";
            $scope._callSubMenu();
          } else {
            _Fail();
          }
        });
    }
  };

  // CLEAR FORM 
  $scope._clear = function () {
    $scope.subm_id = null;
    $scope.sub_menu_id = null;
    $scope.subm_title = null;
    $scope.subm_link = null;
    $scope.subm_note = null;
  }
  // UPDATE DATA
  $scope._onUpdate = function (x) {
    console.log({ x });
    $scope.subm_id = x.subm_id;
    $scope.sub_menu_id = x.sub_menu_id;
    $scope.subm_title = x.subm_title;
    $scope.subm_link = x.subm_link;
    $scope.subm_note = x.subm_note;
    $scope.btnName = "ແກ້ໄຂ";
    $scope.form_title = "ແກ້ໄຂເມນູ";
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
          .post("sql/delete_submenu.php", {
            subm_id: id,
          })
          .success(function (data) {
            if (data == 3000) {
              _Success();
              $scope._callSubMenu();
            } else {
              _Fail();
            }
          });
      },
      function () {
        $scope._callSubMenu();
      }
    );
  }
});
