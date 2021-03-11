<!doctype html>
<html lang="en" ng-app="app" ng-controller="controller" ng-init="_callGroup();_callUsers();">

<head>
    <!-- Required meta tags -->
    <?php include('../../Components/lib/lib.php')?>
    <?php include('../../access/access.php')?>
    <?php _active('.settings')?>
</head>

<body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">
        <?php include('../../components/layout/side-bar.php') ?>
        <!-- Page content start  -->
        <div class="page-content">
            <?php include_once('../../components/layout/heading.php')?>
            <!-- Page header start -->
            <div class="page-header">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" onclick="window.location='./'">ລາຍການກຸ່ມວຽກ</li>
                    <li class="breadcrumb-item active">ແກ້ໄຂກຸ່ມວຽກ</li>
                </ol>

                <ul class="app-actions">
                    <li>
                        <a href="#" id="reportrange">
                            <span class="range-text"></span>
                            <i class="icon-chevron-down"></i>
                        </a>
                    </li>
                    <li>
                        <a href="./">
                            <i class="icon-export"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Page header end -->
            <?php 
                $groupID=$_GET['id'];
                $_callData=$_SQL($con,"SELECT * FROM aws_group where group_id=$groupID");
                $res=$_ASSOC($_callData);
            ?>
            <!-- Main container start -->
            <div class="main-container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <form action="#" method="POST">
                            <div class="blog p-3">
                                <h4><i class="fa fa-users"></i> ແກ້ໄຂກຸ່ມວຽກ</h4>
                                <div class="col-12 ml-0">
                                    <hr>
                                    <div class="form-group">
                                        <label for="">ຊື່ກຸ່ມ <?php isVal()?></label>
                                        <input type="text" name="group_title" class="form-control"
                                            value="<?php echo $res['group_title']?>" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="lablesContainerScroll p-2">
                                        <table class="table table-hover" id="main">
                                            <?php 
                                $querys  =mysqli_query($con,"SELECT * FROM aws_users");
                                foreach($querys as $keys){
                                    
                                    $_callData2=$_SQL($con,"SELECT * FROM aws_group where group_id='$groupID' AND group_member='".$keys['user_id']."'");
                                    foreach ($_callData2 as $row_group) {
                                        # code..
                                    if($row_group['group_member']==$keys['user_id']){
                                        $checked= "checked";
                                    }else{
                                           $checked= "";
                                        }
                                    }
                                    ?>
                                            <tr id="sublist">
                                                <td style="width:20px">
                                                    <input type="checkbox" id="checkbox" <?php echo $checked ?>
                                                        name='group_member[]' value="<?php echo $res['group_member']?>">
                                                </td>
                                                <td>
                                                    <?php if($keys['user_gender']=="FEMALE"){ echo "ນາງ ";}else{echo "ທ້າວ ";}  echo $keys['user_fname'].' '.$keys['user_lname']; ?>
                                                </td>
                                                <td><?php echo $keys['user_tel']; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                                    <hr>
                                    <button type="submit" name="_onSave" class="btn btn-outline-primary"><i
                                            class="fa fa-check-circle"></i> ແກ້ໄຂ</button>
                                    <button type="reset" class="btn btn-outline-danger"><i
                                            class="fa fa-times-circle"></i> ບັນທຶກ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Row end -->
        </div>
        <!-- Main container end -->
    </div>
    <!-- Page wrapper end -->
    <?php include('../../components/lib/script.php')?>
    <script src="app.js"></script>

    <?php
        if(isset($_POST['_onSave'])){
            $_group_title=$_POST['group_title'];
            $_group_member=$_POST['group_member'];

                for($i=0;$i<count($_group_member);$i++){
                    $_DATA="group_title='$_group_title',group_member='$_group_member[$i]',group_createdAt='$_TIMESTAM',group_createdBy='$_USER_ID'";
                    $newData=$_SQL($con,"UPDATE aws_group SET $_DATA WHERE group_id=$groupID");
                }

                if($newData){
                    echo "<script>
                    Notiflix.Notify.Success('ການດຳເນີນງານສຳເລັດ');
                     setTimeout(() => {
                              window.location='./edit_group.php?id=$groupID'
                            }, 2000);
                    </script>";
                }else{
                    echo "<script>
                    Notiflix.Notify.Failure('ການດຳເນີນງານບໍ່ສຳເລັດ');
                     setTimeout(() => {
                              window.location='./edit_group.php?id=$groupID'
                            }, 2000);
                    </script>";
                }
        }
    ?>
</body>

</html>