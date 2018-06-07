<?php
//入力チェック(受信確認処理追加)
// echo $_POST["book_name"];
if(
  !isset($_POST["firstName"]) || $_POST["firstName"]=="" ||
  !isset($_POST["lastName"]) || $_POST["lastName"]=="" ||
  !isset($_POST["userId"]) || $_POST["userId"]=="" ||
  !isset($_POST["pwd"]) || $_POST["pwd"]==""
){
  exit('ParamError');
}

//1. POSTデータ取得
$name  = $_POST["lastName"]." ".$_POST["firstName"];
$lid = $_POST["userId"];
$lpw = $_POST["pwd"];
$kanri_flg = 0;
$life_flg = 0;


//2. DB接続します(エラー処理追加)
include("functions.php");
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_user_table(id, name, lid, lpw, kanri_flg, life_flg
)VALUES(NULL, :a1, :a2, :a3, :a4, :a5)");
$stmt->bindValue(':a1', $name);
$stmt->bindValue(':a2', $lid);
$stmt->bindValue(':a3', $lpw);
$stmt->bindValue(':a4', $kanri_flg);
$stmt->bindValue(':a5', $life_flg);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  errorMsg($stmt);
}else{
  //５．bm_list_view.phpへリダイレクト
  header("Location: user_index.php");
  exit;
}
?>
