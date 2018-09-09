<?php
session_start();
require('dbconnect.php');

$number=0;
$k=1;

require '../vendor/autoload.php';
\Cloudinary::config(array(
    "cloud_name" => "hb2ekbyxa",
    "api_key" => "935614219356682",
    "api_secret" => "3tTB_g7_AP4j4hRkReEWhm9zHu0"
));

// $sql='SELECT `i`.`jname`,`u`.`username` FROM `itiran` AS `i` LEFT JOIN `users` AS `u` ON `i`.`user_id`=`u`.`id`';
// $data=array();
// $stmt = $dbh->prepare($sql);
// $stmt->execute($data);

$sql='SELECT `i`.`jname`,`u`.`username` FROM `itiran` AS `i` LEFT JOIN `users` AS `u` ON `i`.`user_id`=`u`.`id`';
$data=array();
$result=pg_query_params($sql,$data);


$j=array();
while(true){
  // $record=$stmt->fetch(PDO::FETCH_ASSOC);
  $record=pg_fetch_array($result,NULL,PGSQL_ASSOC);
  if($record == false){
    break;
  }
  $j[]=$record;

}

// $sql='SELECT name FROM `actresses` WHERE id=22';
// $stmt = $dbh->prepare($sql);
// $stmt->execute();
// $record_a = $stmt->fetch(PDO::FETCH_ASSOC);
// $_SESSION['recom']['r_name']=$record_a['name'];

$sql='SELECT name FROM actresses WHERE id=22';
$result=pg_query_params($sql,$data);
$record_a =pg_fetch_array($result,NULL,PGSQL_ASSOC);
$_SESSION['recom']['r_name']=$record_a['name'];

count($j);
$suuji=count($j);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AVメイカー</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <a class="title" href="recomendation.php">Home</a>
            <a class="title" href="itiran.php">嬢一覧</a>
        </header>
        <div class="container">
            <h3>
                今までに出せた嬢
            </h3>


            <div class="row">
                <?php foreach($j as $actress) { ?>
                <?php if($actress['jname']=='あべみかこ')  { ?>
                                <div class="col-md-4 col-lg-4 col-xs-4">
                                    <p>
                                        あべみかこ
                                    </p>
                                    <img src="assets/img/abemi.jpg" width="80%">
                                </div>
<?php break; ?>
                <?php break; ?>
                <?php }elseif($k==$suuji) { ?>
                                <div class="col-md-4 col-lg-4 col-xs-4">
                                    <p>????</p>
                                    <img src="assets/img/error.jpg" width="80%">
                                </div>
                <?php } ?>
                <?php $k++  ; ?>
                <?php } ?>
                <?php  $k=1;?>

                <?php foreach($j as $actress) { ?>
                <?php if($actress['jname']=='上原亜衣') { ?>
                               <div class="col-md-4 col-lg-4 col-xs-4">
                                    <p>上原亜衣</p>
                                    <img src="assets/img/ai.jpeg" width="80%">
                               </div>
<?php break; ?>
                <?php }elseif($k==$suuji) { ?>
                               <div class="col-md-4 col-lg-4 col-xs-4">
                                    <p ><?php echo $record_a['name']; ?></p>
                                    <img src="assets/img/error.jpg" width="80%">
                                </div>
                <?php } ?>
                <?php $k++; ?>
                <?php } ?>
                <?php  $k=1;?>


                <?php foreach($j as $actress) { ?>
                <?php if($actress['jname']=='橘梨紗') { ?>
                                <div class="col-md-4 col-lg-4 col-xs-4">
                                    <p>橘梨紗</p>
                                    <img src="assets/img/tatibana.jpg" width="80%">
                                </div>
<?php break; ?>
                <?php }elseif($k==$suuji) { ?>
                                <div class="col-md-4 col-lg-4 col-xs-4">
                                    <p ><?php echo $record_a['name']; ?></p>
                                    <img src="assets/img/error.jpg" width="80%">
                                </div>
                <?php } ?>
                <?php $k++; ?>
                <?php } ?>
                <?php  $k=1;?>
            </div>

             <div class="row">
                <?php foreach($j as $actress) { ?>
                <?php if($actress['jname']=='音市美音')  { ?>
                                <div class="col-md-4 col-lg-4 col-xs-4">
                                    <p>音市美音</p>
                                    <img src="assets/img/oiti.jpeg" width="80%">
                                </div>
<?php break; ?>
                <?php }elseif($k==$suuji) { ?>
                                <div class="col-md-4 col-lg-4 col-xs-4">
                                    <p><?php echo $record_a['name']; ?></p>
                                    <img src="assets/img/error.jpg" width="80%">
                                </div>
                <?php } ?>
                <?php $k++; ?>
                <?php } ?>
                <?php  $k=1;?>


                <?php foreach($j as $actress) { ?>
                <?php if($actress['jname']=='古川いをり') { ?>
                                <div class="col-md-4 col-lg-4 col-xs-4">
                                    <p>古川いをり</p>
                                    <img src="assets/img/iwori.jpg" width="80%">
                                </div>
<?php break; ?>
                <?php }elseif($k == $suuji) { ?>
                                <div class="col-md-4 col-lg-4 col-xs-4">
                                    <p ><?php echo $record_a['name']; ?></p>
                                    <img src="assets/img/error.jpg" width="80%">
                                </div>
                <?php } ?>
                <?php $k++; ?>
                <?php } ?>
                <?php  $k=1;?>


                <?php foreach($j as $actress) { ?>
                <?php if($actress['jname']=='桃ノ木かな') { ?>
                                <div class="col-md-4 col-lg-4 col-xs-4">
                                    <p>桃ノ木かな</p>
                                    <img src="assets/img/tatibana.jpg" width="80%">
                                </div>
<?php break; ?>
                <?php }elseif($k == $suuji) { ?>
                                <div class="col-md-4 col-lg-4 col-xs-4">
                                    <p > <?php echo $record_a['name']; ?></p>
                                    <img src="assets/img/error.jpg" width="80%" >
                                </div>
                <?php } ?>
                <?php $k++; ?>
                <?php } ?>
                <?php  $k=1;?>
            </div>

            <div class="row">
<?php foreach($j as $actress) { ?>
 <?php if($actress['jname']=='河南美里')  { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p>河南美里</p>
                    <img src="assets/img/kanan.jpg" width="80%">
                </div>
<?php break; ?>
<?php }elseif($k==$suuji) { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p><?php echo $record_a['name']; ?></p>
                    <img src="assets/img/error.jpg" width="80%">
                </div>

<?php } ?>
<?php $k++; ?>
<?php } ?>
                <?php  $k=1;?>



<?php foreach($j as $actress) { ?>
<?php if($actress['jname']=='湊莉久') { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p>湊莉久</p>
                    <img src="assets/img/minato.jpg" width="80%">
                </div>
<?php break; ?>
<?php }elseif($k==$suuji) { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p><?php echo $record_a['name']; ?></p>
                    <img src="assets/img/error.jpg" width="80%">
                </div>

<?php } ?>
<?php $k++; ?>
<?php } ?>
                <?php  $k=1;?>


<?php foreach($j as $actress) { ?>
<?php if($actress['jname']=='小倉ゆず') { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p>小倉ゆず</p>
                    <img src="assets/img/yuzu.jpeg" width="80%">
                </div>
<?php break; ?>
<?php }elseif($k==$suuji) { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p><?php echo $record_a['name']; ?></p>
                    <img src="assets/img/error.jpg" width="80%">
                </div>

<?php } ?>
<?php $k++; ?>
<?php } ?>
                <?php  $k=1;?>
            </div>

            <div class="row">

<?php foreach($j as $actress) { ?>
 <?php if($actress['jname']=='菜月アンナ')  { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p>菜月アンナ</p>
                    <img src="assets/img/natuki.jpeg" width="80%">
                </div>
<?php break; ?>
<?php }elseif($k==$suuji) { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p><?php echo $record_a['name']; ?></p>
                    <img src="assets/img/error.jpg" width="80%">
                </div>

<?php } ?>
<?php $k++; ?>
<?php } ?>
                <?php  $k=1;?>

<?php foreach($j as $actress) { ?>
<?php if($actress['jname']=='春菜はな') { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p>春菜はな</p>
                    <img src="assets/img/haruna.jpg" width="80%">
                </div>
<?php break; ?>
<?php }elseif($k==$suuji) { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p><?php echo $record_a['name']; ?></p>
                    <img src="assets/img/error.jpg" width="80%">
                </div>

<?php } ?>
<?php $k++; ?>
<?php } ?>
                <?php  $k=1;?>

<?php foreach($j as $actress) { ?>
<?php if($actress['jname']=='松岡ちな') { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p>松岡ちな</p>
                    <img src="assets/img/tina.jpg" width="80%">
                </div>
<?php break; ?>
<?php }elseif($k==$suuji) { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p><?php echo $record_a['name']; ?></p>
                    <img src="assets/img/error.jpg" width="80%">
                </div>

<?php } ?>
<?php $k++; ?>
<?php } ?>
                <?php  $k=1;?>
            </div>

            <div class="row">
<?php foreach($j as $actress) { ?>
 <?php if($actress['jname']=='三上悠亜')  { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p>三上悠亜</p>
                    <img src="assets/img/mikami.jpg" width="80%">
                </div>
<?php break; ?>
<?php }elseif($k==$suuji) { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p><?php echo $record_a['name']; ?></p>
                    <img src="assets/img/error.jpg" width="80%">
                </div>

<?php } ?>
<?php $k++; ?>
<?php } ?>
                <?php  $k=1;?>

<?php foreach($j as $actress) { ?>
<?php if($actress['jname']=='白石真琴') { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p>白石真琴</p>
                    <img src="assets/img/" width="80%">
                </div>
<?php break; ?>
<?php }elseif($k==$suuji) { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p><?php echo $record_a['name']; ?></p>
                    <img src="assets/img/error.jpg" width="80%">
                </div>
<?php } ?>
<?php $k++; ?>
<?php } ?>
                <?php  $k=1;?>


<?php foreach($j as $actress) { ?>
<?php if($actress['jname']=='紗倉まな') { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p>紗倉まな</p>
                    <img src="assets/img/sakura.jpg" width="80%">
                </div>
<?php break; ?>
<?php }elseif($k==$suuji) { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p><?php echo $record_a['name']; ?></p>
                    <img src="assets/img/error.jpg" width="80%">
                </div>
<?php } ?>
<?php $k++; ?>
<?php } ?>
                <?php  $k=1;?>
            </div>

            <div class="row">
<?php foreach($j as $actress) { ?>
 <?php if($actress['jname']=='白石茉莉奈')  { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p>白石茉莉奈</p>
                    <img src="assets/img/oldwoman.jpg" width="80%">
                </div>
<?php break; ?>
<?php }elseif($k==$suuji) { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p><?php echo $record_a['name']; ?></p>
                    <img src="assets/img/error.jpg" width="80%">
                </div>
<?php } ?>
<?php $k++; ?>
<?php } ?>
                <?php  $k=1;?>

<?php foreach($j as $actress) { ?>
<?php if($actress['jname']=='レイプ') { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p>レイプ</p>
                    <img src="assets/img/reip.jpg" width="80%">
                </div>
<?php break; ?>
<?php }elseif($k==$suuji) { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p><?php echo $record_a['name']; ?></p>
                    <img src="assets/img/error.jpg" width="80%">
                </div>
<?php } ?>
<?php $k++; ?>
<?php } ?>
                <?php  $k=1;?>


<?php foreach($j as $actress) { ?>
<?php if($actress['jname']=='マジックミラー号') { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p>マジックミラー号</p>
                    <img src="assets/img/magic.jpg" width="80%">
                </div>
<?php break; ?>
<?php }elseif($k==$suuji) { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p><?php echo $record_a['name']; ?></p>
                    <img src="assets/img/error.jpg" width="80%">
                </div>
<?php } ?>
<?php $k++; ?>
<?php } ?>
                <?php  $k=1;?>
            </div>

            <div class="row">
<?php foreach($j as $actress) { ?>
 <?php if($actress['jname']=='レズ')  { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p>レズ</p>
                    <img src="assets/img/rezu.jpg" width="80%">
                </div>
<?php break; ?>
<?php }elseif($k==$suuji) { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p><?php echo $record_a['name']; ?></p>
                    <img src="assets/img/error.jpg" width="80%">
                </div>
<?php } ?>
<?php $k++; ?>
<?php } ?>
                <?php  $k=1;?>


<?php foreach($j as $actress) { ?>
<?php if($actress['jname']=='アニメ') { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p>アニメ</p>
                    <img src="assets/img/anime.jpg" width="80%">
                </div>
<?php break; ?>
<?php }elseif($k==$suuji) { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p><?php echo $record_a['name']; ?></p>
                    <img src="assets/img/error.jpg" width="80%">
                </div>
<?php } ?>
<?php $k++; ?>
<?php } ?>
                <?php  $k=1;?>


<?php foreach($j as $actress) { ?>
<?php if($actress['jname']=='SOD') { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p>SOD</p>
                    <img src="assets/img/SOD.jpg" width="80%">
                </div>
<?php break; ?>
<?php }elseif($k==$suuji) { ?>
                <div class="col-md-4 col-lg-4 col-xs-4">
                    <p><?php echo $record_a['name']; ?></p>
                    <img src="assets/img/error.jpg" width="80%">
                </div>
<?php } ?>
<?php $k++; ?>
<?php } ?>

            </div>

        </div>


        </div>
        <footer class="header">
            <p>Quiz, PHP practice 2018.</p>
        </footer>
    </div>
</body>

</html>