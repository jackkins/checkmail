<?php 

function returnTemplate($param){
	$templates = array(
		'empty' => array(
			'subject' => "Dear customer",
			'mail'=>"Hello ".$param['buyer_name']."\nGive me a little time I'll find out all the details\nStacy",
		),
		'hasone' => array(
			'subject' => "Dear customer",
			'mail'=>"I understand it, only more time for contact with our warehouse and shipping carrier\nSorry for delay,\nStacy",
		),
		'noresp' => array(
			'subject' => "Mail ".$param['count']." No Resp, ".$param['order'].", ".$param['username'],
			'mail' => "Order #: ".$param['order']."\n".$param['email']."\nMail\n".$param['mail']
		),
		'noresp_notification' => array(
			'subject' => $param['username']." | No Response Needed",
			'mail' => $param['username']."\nMail\n".$param['mail']."\nNo Response Needed - activated"
		)
	);
	return $templates[$param['item']];
}