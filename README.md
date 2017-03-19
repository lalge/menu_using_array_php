# Menu using PHP array

<b>Step1</b>

Here I have formated following array data in file "menu_master.php",

$menu[] = array('menu_id'=>'4', 'menu_name'=>'menu04', 'menu_link'=>'abc.php', 'parent_id'=>'2');<br>
$menu[] = array('menu_id'=>'1', 'menu_name'=>'menu01', 'menu_link'=>'abc.php', 'parent_id'=>'0');<br>
$menu[] = array('menu_id'=>'2', 'menu_name'=>'menu02', 'menu_link'=>'abc.php', 'parent_id'=>'1');<br>
$menu[] = array('menu_id'=>'5', 'menu_name'=>'menu05', 'menu_link'=>'abc.php', 'parent_id'=>'0');<br>
$menu[] = array('menu_id'=>'6', 'menu_name'=>'menu06', 'menu_link'=>'abc.php', 'parent_id'=>'5');<br>
$menu[] = array('menu_id'=>'3', 'menu_name'=>'menu03', 'menu_link'=>'abc.php', 'parent_id'=>'1');<br>
$menu[] = array('menu_id'=>'7', 'menu_name'=>'menu07', 'menu_link'=>'abc.php', 'parent_id'=>'0');<br>

See output after formation: 
http://nitinlalge.com/github/array_menu/menu_master.php?show=val

<b>Step 2</b>

Now after getting formated array I am using recursive function to show this data.

Check this navigation:
http://nitinlalge.com/github/array_menu/
