var app = angular.module("app", []);
app.controller("controller", function ($scope, $http) {
  $scope.btnName = "ບັນທຶກ";
  $scope.form_title = "ເພີ່ມກຸ່ມເຮັດວຽກ";

  var _modal=angular.element('#_cateGorys')
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
  $scope._callUsers = function () {
    $http.get("../../services/users/sql/user-query.php").success(function (data) {
      console.log({data});
      $scope._users = data;
      $scope.count = data.length;
    });
  };
  // display data
  $scope._callGroup = function () {
    $http.get("sql/query_group.php").success(function (data) {
      $scope._categorys = data;
      $scope.count = data.length;
    });
  };
  
  // insert data
  $scope._onSave = function () {
    if ($scope.group_title == null) {
      _Warning("ກະລຸນາປ້ອນປະເພດວຽກ");
    } else {
      $http
        .post("sql/create_group.php", {
          group_member:$scope.group_member,
          group_id: $scope.group_id,
          group_title: $scope.group_title,
          group_note: $scope.group_note,
          btnName: $scope.btnName,
        })
        .success(function (output) {
          console.log({ output });
          if (output == "DATA_READY_EXIT") {
            _Warning("ຂໍ້ມູນທີ່ທ່ານປ້ອນມີຢູ່ແລ້ວ");
          } else if (output == 3000) {
            _Success();
            $scope.group_id = null;
            $scope.group_title = null;
            $scope.group_note = null;
            $scope.btnName = "ບັນທຶກ";
            $scope.form_title = "ເພີ່ມກຸ່ມເຮັດວຽກ";
            $scope._callGroup();
          } else {
            _Fail();
          }
        });
    }
  };
  // CLEAR FORM 
  $scope._clear = function () {
    $scope.group_id = null;
    $scope.group_title = null;
    $scope.group_note = null;
  }

// DELETE DATA 
  $scope._onDelete = function (id) {
    Notiflix.Confirm.Show(
      "ສະຖານະ",
      "ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ່ ?",
      "ຕົກລົງ",
      "ຍົກເລີກ",
      function () {
        $http
          .post("sql/delete_group.php", {
            group_id: id,
          })
          .success(function (data) {
            if (data == 3000) {
              _Success();
              $scope._callGroup();
            } else {
              _Fail();
            }
          });
      },
      function () {
        $scope._callGroup();
      }
    );
  }
});



// $(document).on("click",".edit_data",function(){
//   var edit_data=$(this).attr("Id");
//   $.ajax({
//     url:"./sql/query_member.php",
//     method:"POST",
//     data:{edit_data},
//     success:function(data){
//       alert(data)
//       $("#_cateGorys1").modal("show");
//     }
//   });

