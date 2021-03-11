var app = angular.module("app", []);
app.controller("controller", function ($scope, $http) {
  $scope.btnName = "ບັນທຶກ";
  $scope.form_title = "ເພີ່ມຕຳແໜ່ງ";
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
  $scope._callRank = function () {
    $http.get("sql/query_rank.php").success(function (data) {
      $scope._categorys = data;
      $scope.count = data.length;
    });
  };
  // insert data
  $scope._onSave = function () {
    if ($scope.rank_title == null) {
      _Warning("ກະລຸນາປ້ອນປະເພດວຽກ");
    } else {
      $http
        .post("sql/create_rank.php", {
          rank_id: $scope.rank_id,
          rank_title: $scope.rank_title,
          rank_note: $scope.rank_note,
          btnName: $scope.btnName,
        })
        .success(function (output) {
          console.log({ output });
          if (output == "DATA_READY_EXIT") {
            _Warning("ຂໍ້ມູນທີ່ທ່ານປ້ອນມີຢູ່ແລ້ວ");
          } else if (output == 3000) {
            _Success();
            $scope.rank_id = null;
            $scope.rank_title = null;
            $scope.rank_note = null;
            $scope.btnName = "ບັນທຶກ";
            $scope.form_title = "ເພີ່ມຕຳແໜ່ງ";
            $scope._callRank();
          } else {
            _Fail();
          }
        });
    }
  };
  // CLEAR FORM 
  $scope._clear = function () {
    $scope.rank_id = null;
    $scope.rank_title = null;
    $scope.rank_note = null;
  }
  // UPDATE DATA
  $scope._onUpdate = function (x) {
    console.log({ x });
    $scope.rank_id = x.rank_id;
    $scope.rank_title = x.rank_title;
    $scope.rank_note = x.rank_note;
    $scope.btnName = "ແກ້ໄຂ";
    $scope.form_title = "ແກ້ໄຂຕຳແໜ່ງ";
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
          .post("sql/delete_rank.php", {
            rank_id: id,
          })
          .success(function (data) {
            if (data == 3000) {
              _Success();
              $scope._callRank();
            } else {
              _Fail();
            }
          });
      },
      function () {
        $scope._callRank();
      }
    );
  }
});
