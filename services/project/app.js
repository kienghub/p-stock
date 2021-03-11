var app = angular.module("app", []);
app.controller("controller", function ($scope, $http) {
  $scope.btnName = "ບັນທຶກ";
  $scope.form_title = "ເພີ່ມໂຄງການ";
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
  $scope._callProject = function () {
    $http.get("sql/query_project.php").success(function (data) {
      $scope._categorys = data;
      $scope.count = data.length;
    });
  };
  // insert data
  $scope._onSave = function () {
    if ($scope.proj_title == null) {
      _Warning("ກະລຸນາປ້ອນປະເພດວຽກ");
    } else {
      $http
        .post("sql/create_project.php", {
          proj_id: $scope.proj_id,
          proj_title: $scope.proj_title,
          proj_note: $scope.proj_note,
          btnName: $scope.btnName,
        })
        .success(function (output) {
          console.log({ output });
          if (output == "DATA_READY_EXIT") {
            _Warning("ຂໍ້ມູນທີ່ທ່ານປ້ອນມີຢູ່ແລ້ວ");
          } else if (output == 3000) {
            _Success();
            $scope.proj_id = null;
            $scope.proj_title = null;
            $scope.proj_note = null;
            $scope.btnName = "ບັນທຶກ";
            $scope.form_title = "ເພີ່ມໂຄງການ";
            $scope._callProject();
          } else {
            _Fail();
          }
        });
    }
  };
  // CLEAR FORM 
  $scope._clear = function () {
    $scope.proj_id = null;
    $scope.proj_title = null;
    $scope.proj_note = null;
  }
  // UPDATE DATA
  $scope._onUpdate = function (x) {
    console.log({ x });
    $scope.proj_id = x.proj_id;
    $scope.proj_title = x.proj_title;
    $scope.proj_note = x.proj_note;
    $scope.btnName = "ແກ້ໄຂ";
    $scope.form_title = "ແກ້ໄຂໂຄງການ";
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
          .post("sql/delete_project.php", {
            proj_id: id,
          })
          .success(function (data) {
            if (data == 3000) {
              _Success();
              $scope._callProject();
            } else {
              _Fail();
            }
          });
      },
      function () {
        $scope._callProject();
      }
    );
  }
});
