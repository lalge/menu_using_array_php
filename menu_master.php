<?php
$menu[] = array('menu_id'=>'4', 'menu_name'=>'menu04', 'menu_link'=>'abc.php', 'parent_id'=>'2');
$menu[] = array('menu_id'=>'1', 'menu_name'=>'menu01', 'menu_link'=>'abc.php', 'parent_id'=>'0');
$menu[] = array('menu_id'=>'2', 'menu_name'=>'menu02', 'menu_link'=>'abc.php', 'parent_id'=>'1');
$menu[] = array('menu_id'=>'5', 'menu_name'=>'menu05', 'menu_link'=>'abc.php', 'parent_id'=>'0');
$menu[] = array('menu_id'=>'6', 'menu_name'=>'menu06', 'menu_link'=>'abc.php', 'parent_id'=>'5');
$menu[] = array('menu_id'=>'3', 'menu_name'=>'menu03', 'menu_link'=>'abc.php', 'parent_id'=>'1');
$menu[] = array('menu_id'=>'7', 'menu_name'=>'menu07', 'menu_link'=>'abc.php', 'parent_id'=>'0');

if(isset($_GET['show']) && $_GET['show'] == 'val'){
	echo "<h1> Original Array </h1>";
	echo '<pre>';
	print_r($menu);
	echo '</pre>';
}

function create_menu($menu){
	foreach ($menu as $mkey => $mval) {
		if($mval['parent_id'] == 0){
			$pmenu[] = $mval;
		}
	}
	
	if(isset($pmenu)){
		foreach ($pmenu as $pkey => $pval) {
			foreach ($menu as $mkey => $mval) {
				if($pval['menu_id'] == $mval['parent_id']){
					$ppmenu[] = $pmenu[$pkey][] = $mval;
				}
			}
			
			if(isset($ppmenu) && $ppmenu != ''){
				foreach ($ppmenu as $ppkey => $ppval) {
					foreach ($menu as $mmkey => $mmval) {
						if($ppval['menu_id'] == $mmval['parent_id']){
							$pppmenu[] = $pmenu[$pkey][$ppkey][] = $mmval;
						}
					}
				}
			}
			$ppmenu = '';
		}
	}

	return $pmenu;
}


$pmenu = create_menu($menu);

if(isset($_GET['show']) && $_GET['show'] == 'val'){

	echo "----------------------------";
	echo "<h1> Formated Array </h1>";
	echo '<pre>';
	print_r($pmenu);
	echo '</pre>';
}


?>