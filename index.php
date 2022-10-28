<?
require_once (__DIR__.'/crest.php');

print_r($_REQUEST);
$mylistid = $_REQUEST['PLACEMENT_OPTIONS'];
$search = array('"', '{', '}', 'ID:');
$replace = array('');
$mycompanyid = str_replace($search, $replace, $mylistid, $count);

echo $mycompanyid;

$result = CRest::call(
		'crm.company.get',
		['ID' => $mycompanyid,]
	);

echo '<br>';

echo '<pre>';
	print_r($result);
echo '</pre>';

?>
