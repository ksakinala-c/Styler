<?php include ('includes/header.php'); ?>
<meta name="viewport" content="width=100%, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="text/javascript">
(function(doc) {

    var addEvent = 'addEventListener',
        type = 'gesturestart',
        qsa = 'querySelectorAll',
        scales = [1, 1],
        meta = qsa in doc ? doc[qsa]('meta[name=viewport]') : [];

    function fix() {
        meta.content = 'width=device-width,minimum-scale=' + scales[0] + ',maximum-scale=' + scales[1];
        doc.removeEventListener(type, fix, true);
    }

    if ((meta = meta[meta.length - 1]) && addEvent in doc) {
        fix();
        scales = [.25, 1.6];
        doc[addEvent](type, fix, true);
    }

}(document));
</script>

<script type="text/javascript">
(function(doc) {

	var addEvent = 'addEventListener',
	    type = 'gesturestart',
	    qsa = 'querySelectorAll',
	    scales = [1, 1],
	    meta = qsa in doc ? doc[qsa]('meta[name=viewport]') : [];

	function fix() {
		meta.content = 'width=device-width,minimum-scale=' + scales[0] + ',maximum-scale=' + scales[1];
		doc.removeEventListener(type, fix, true);
	}

	if ((meta = meta[meta.length - 1]) && addEvent in doc) {
		fix();
		scales = [.25, 1.6];
		doc[addEvent](type, fix, true);
	}

}(document));
</script>
 </br></br> 
<title> Make Payment </title>
<p style="margin-top:5%;"> 
</br></br>
<center>
<?php include('includes/Crypto.php')?>

<?php 
 	error_reporting(0);

	$working_key='1ED6260C345165CDC9223B240BD23888';//Shared by CCAVENUES
	$access_code='AVBQ05CF47CI51QBIC';//Shared by CCAVENUES
	$merchant_data='';
	//print_r($_POST);exit;
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}

	 //echo $merchant_data; die;
	
	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.
//echo $encrypted_data; die;
	$production_url='https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest='.$encrypted_data.'&access_code='.$access_code;
?>
<iframe src="<?php echo $production_url?>" id="paymentFrame" width="70%" height="800" frameborder="0" scrolling="No" ></iframe>
</p>
<script type="text/javascript" src="<?php echo $base_url_views; ?>js/jquery-1.7.2.js"></script>
<script type="text/javascript">
    	$(document).ready(function(){
    		 window.addEventListener('message', function(e) {
		    	 $("#paymentFrame").css("height",e.data['newHeight']+'px'); 	 
		 	 }, false);
	 	 	
		});
</script>
</center>
<?php include ('includes/footer.php'); ?>
</body>
</html>