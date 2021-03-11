<?php 
include('../../connection.php');
$_callProfileSystem=$_SQL($con,"SELECT*FROM aws_profile_system");
$_profile=$_ASSOC($_callProfileSystem);
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Meta -->
<meta name="description" content="Buncie">
<meta name="author" content="kieng">
<link rel="shortcut icon"
    href="../../img/<?php if($_profile['p_logo']){echo $_profile['p_logo'];}else{echo 'app-logo.png';}?>" />

<!-- Title -->
<title>AWPS</title>

<!-- Bootstrap css -->
<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
<!-- Icomoon Font Icons css -->
<link rel="stylesheet" href="../../assets/fonts/style.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Main css -->
<link rel="stylesheet" href="../../assets/css/main.css">
<!-- DateRange css -->
<link rel="stylesheet" href="../../assets/vendor/daterange/daterange.css" />
<?php function _active($class){?>
<style>
<?php echo $class ?> {
    background-color: #fafafafa;
    border-left: 5px solid #1864ab;
}

.breadcrumb-item {
    cursor: pointer;
}

table tr th {
    background-color: #1864ab;
    color: white;
}
h1,h2,h3,h4,h5,h4{
    color:#1864ab!important
}
#checkbox{
    width:20px;
    height:20px;
}
</style>

<?php } ?>

<?php
$today = date('D');

function isVal(){echo "<font style='color:red'>*</font>";}
 function _back( $url ) { ?>
<a href="#" onclick="window.location='<?php echo $url;?>'">
    <i class="fa fa-angle-left fa-2x"
        style="margin-top:3px!important;margin-bottom:-0px!important;margin-right:20px!important;"></i></a>
<?}?>

<?php function _close(){ ?>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
            class="fa fa-times-circle" style="color:white"></i> </span>
</button>
<?php } ?>

<?php function callBack($params){ ?>
<button type="button" class="btn btn-outline-danger" style="margin-left:20px"
    onclick="window.location='<?php echo $params;?>'">
    <i class="fa fa-times-circle"></i> ຍົກເລີກ
</button>
<?php } ?>

<?php function Success($location){ ?>
<script>
Notiflix.Report.Success('ສຳເລັດ', 'ການດຳເນີນງານສຳເລັດ...', 'ປິດ',
    function() {
        window.location = '<?php $location;?>'
    })
</script>
<?php } ?>

<?php function Fail($location){ ?>
<script>
Notiflix.Report.Failure('ຜິດພາດ', 'ການດຳເນີນງານບໍ່ສຳເລັດ...', 'ປິດ',
    function() {
        window.location = '<?php $location;?>'
    })
</script>
<?php } ?>

<?php function Duplicate($location){ ?>
<script>
Notiflix.Report.Warning('ຜິດພາດ', 'ຂໍ້ມູນທີ່ທ່ານປ້ອນມີແລ້ວ ກະລຸນາກວດຄືນແລ້ວປ້ອນໃໝ່ພາຍຫຼັງ', 'ປິດ',
    function() {
        window.location = '<?php $location;?>'
    })
</script>
<?php } ?>


<?php function Del_Success($location){ ?>
<script>
window.location = "<?php echo $location;?>"
</script>
<?php } ?>

<?php function Del_Fail($location){ ?>
<script>
window.location = "<?php echo $location;?>"
</script>
<?php } ?>