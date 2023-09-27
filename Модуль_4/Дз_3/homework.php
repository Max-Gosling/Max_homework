<?____

if($_SERVER['________'] == 'POST' && $_SERVER["_______"] == 'application/json') {
	$postData = file_get_contents('php://input');
	header('Content-Type: text/html; ______=utf-8');
	$data = json_decode($postData, true);
	echo json_encode($data);
}
?>