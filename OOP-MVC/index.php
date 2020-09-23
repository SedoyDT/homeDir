<?php



// namespace Admin;
// namespace Admin\Data;

require_once '86modules3/marketCart.php';
require_once '86modules3/shopCart.php';
	

$coreCont = new \Market\Cart\Cart('marketCart');
$coreProj = new  \Shop\Cart\Cart('shopCart');


echo "<br/>";
echo $coreCont->getName();
echo "<br/>";
echo $coreProj->getName();

// require_once '87simpleMethod/Controller.php';
// require_once '87simpleMethod/Page.php';
// require_once '87simpleMethod/Cart.php';
// require_once '87simpleMethod/UserCart.php';

// $f87Controller = new \Admin\Controller('Cont');
// $f87Page = new \Admin\Page('Page');
// $f87Cart = new \Modules\Shop\Cart('Cart');
// $f87UserCart = new \Modules\Shop\UserCart('UserCart');
// $f87UserCont = new Controller('Cont2');
// echo "<br/>";
// echo "<br/>";
// echo $f87Controller->getName();
// echo "<br/>";
// echo $f87Page->getName();
// echo "<br/>";
// echo $f87Cart->getName();
// echo "<br/>";
// echo $f87UserCart->getName();
// echo "<br/>";
// echo $f87UserCont->getName();

require_once  '87simpleMethod/Core-Data-Controller.php';
require_once  '87simpleMethod/Core-Data-Model.php';
namespace Core\Data;
	
	$controller = new Controller('Cont');
	$model      = new Model('Model');