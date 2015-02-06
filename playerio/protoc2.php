<? die();
require_once('../parser/pb_parser.php');

$test = new PBParser();
$test->parse('./playerio.proto');

var_dump('File parsing done!');
?>