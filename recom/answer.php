<?php
session_start();
require('dbconnect.php');
$jname='';

var_dump($_SESSION['recom']['name']);
var_dump($_SESSION['recom']['id']);


require '../vendor/autoload.php';
\Cloudinary::config(array(
    "cloud_name" => "hb2ekbyxa",
    "api_key" => "935614219356682",
    "api_secret" => "3tTB_g7_AP4j4hRkReEWhm9zHu0"
));


if ($_SESSION['recom']['Qf']=='a' && $_SESSION['recom']['Qha']=='b' &&
     $_SESSION['recom']['Qsatisfy']=='a'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=2';
}elseif($_SESSION['recom']['Qfa']=='c' && $_SESSION['recom']['Qh']=='a' &&
                             $_SESSION['recom']['Qwho']=='a' && $_SESSION['recom']['Qchara']=='a'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=8';
}elseif($_SESSION['recom']['Qf']=='a' && $_SESSION['recom']['Qb']=='b' &&
                             $_SESSION['recom']['Qh']=='a' && $_SESSION['recom']['Qwhoa']=='b' &&
                              $_SESSION['recom']['Qwhen']=='a'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=6';
}elseif($_SESSION['recom']['Qfa']=='c' && $_SESSION['recom']['Qha']=='c'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=9';
}elseif($_SESSION['recom']['Qa']=='d' && $_SESSION['recom']['Qh']=='a' &&
                             $_SESSION['recom']['Qwhoa']=='b' ||
                             $_SESSION['recom']['Qba']=='c' && $_SESSION['recom']['Qchara']=='c'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=11';
}elseif($_SESSION['recom']['Qwhen']=='d'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=17';
}elseif($_SESSION['recom']['Qc']=='c' && $_SESSION['recom']['Qb']=='b' &&
                             $_SESSION['recom']['Qha']=='b' && $_SESSION['recom']['Qsatisfy']=='b' &&
                              $_SESSION['recom']['Qwhen']=='b'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=12';
}elseif($_SESSION['recom']['Qa']=='d' && $_SESSION['recom']['Qha']=='c' &&
                            $_SESSION['recom']['Qsatisfy']=='b' && $_SESSION['recom']['Qwhen']=='c'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=5';
}elseif($_SESSION['recom']['Qf']=='a' && $_SESSION['recom']['Qba']=='c' &&
                            $_SESSION['recom']['Qchara']=='a'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=7';
}elseif($_SESSION['recom']['Qf']=='b' && $_SESSION['recom']['Qb']=='a' &&
                             $_SESSION['recom']['Qha']=='c' && $_SESSION['recom']['Qsatisfy']=='b'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=3';
}elseif($_SESSION['recom']['Qa']=='d' && $_SESSION['recom']['Qh']=='a' &&
                             $_SESSION['recom']['Qwhob']=='c' ||
                           $_SESSION['recom']['Qa']=='d' && $_SESSION['recom']['Qha']=='c' &&
                             $_SESSION['recom']['Qsatisfy']=='c' ||
                           $_SESSION['recom']['Qa']=='d' && $_SESSION['recom']['Qha']=='b' &&
                             $_SESSION['recom']['Qsatisfy']=='c' ||
                           $_SESSION['recom']['Qfa']=='c' && $_SESSION['recom']['Qwhob']=='c' ||
                           $_SESSION['recom']['Qba']=='c' && $_SESSION['recom']['Qchara']=='a'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=16';
}elseif($_SESSION['recom']['Qf']=='a' && $_SESSION['recom']['Qb']=='b'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=15';
}elseif($_SESSION['recom']['Qwhoa']=='b' && $_SESSION['recom']['Qwhen']=='a'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=19';
}elseif($_SESSION['recom']['Qha']=='C' && $_SESSION['recom']['Qwhen']=='d'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=18';
}elseif($_SESSION['recom']['Qchara']=='c'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=21';
}elseif($_SESSION['recom']['Qc'] && $_SESSION['recom']['Qb']=='b' &&
                             $_SESSION['recom']['Qh']=='a' && $_SESSION['recom']['Qwho']=='a' &&
                              $_SESSION['recom']['Qchara']=='c'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=13';
}elseif($_SESSION['recom']['Qc']=='b' && $_SESSION['recom']['Qb']=='b'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=10';
}elseif($_SESSION['recom']['Qf']=='b' && $_SESSION['recom']['Qb']=='b' &&
                             $_SESSION['recom']['Qha']=='b' && $_SESSION['recom']['Qwhen']=='b'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=11';
}elseif($_SESSION['recom']['Qa']=='d' && $_SESSION['recom']['Qha']=='b' &&
                            $_SESSION['recom']['Qsatisfy']=='b' && $_SESSION['recom']['Qwhen']=='a'){
$sql='SELECT name,j_file
 FROM actresses WHERE id=4';
 }elseif(){
 $sql='SELECT name,j_file FROM actresses WHERE id=14';
// }
}else{
$sql='SELECT name,j_file FROM actresses WHERE id=20';
}
// $stmt = $dbh->prepare($sql);
// $stmt->execute();
$result=pg_query_params($sql);
// $record = $stmt->fetch(PDO::FETCH_ASSOC);

$record=pg_fetch_array($result,NULL,PGSQL_ASSOC);

// $jname=array();
// $jname[]=$record;

echo '<pre>';
var_dump($record);
echo '</pre>';
?>



<!DOCTYPE html>
<html lang="en">
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
        </header>
        <div class="container">
            <h1 class="theme">結果！</h1>

            <h1 class="theme">
                <h2>
                    <?php echo $record['name']; ?>
                </h2>
                <img src="assets/img/<?php $record['j_file'] ?>" width="80%">


<?php
// $sql = 'INSERT INTO `itiran` SET `jname`=?,`user_id`=?';
// $data = array($record['name'], $_SESSION['recom']['id']);
// $stmt = $dbh->prepare($sql);
// $stmt->execute($data);

// exit();

$sql = 'INSERT INTO itiran SET `jname`=$1,`user_id`=$1';
$data = array($record['name'], $_SESSION['recom']['id']);
$result=pg_query_params($sql,$data);


header('Location: itiran.php');
pg_close($dbh);
?>

<?php
session_destroy();
?>

<!--             <?php
            if($answer=='a'){
                    echo '100点';
                }else{
                    echo '0点！';
                }
            ?>
            </h1>
            <div class="section">
                <h3><span>Q1.</span>
                <?php
                if($answer=='a'){
                    echo '正解！';
                }else{
                    echo '不正解！';
                }
                ?> -->
                </h3><br>
                <div class="answer">
                    <p>購入:</p>
<!--                     <p>あなたの答え、 <?php echo $answer;?> -->
                    </p>
                </div>
<!-- 
        <footer class="header">
            <p>Quiz, PHP practice 2018.</p>
        </footer> -->
    </div>
</body>

</html>