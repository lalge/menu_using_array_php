<?php include_once('menu_master.php'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Menu in Array</title>
    <link type="text/css" href="assets/menu.css" rel="stylesheet" />
    <script type="text/javascript" src="assets/jquery.js"></script>
    <script type="text/javascript" src="assets/menu.js"></script>
</head>
<body>

<style type="text/css">
* { margin:0;
    padding:0;
}
body { background:#171717; }
div#menu {
    margin:30px auto;
    width:80%;
}
div#copyright {
    width:80%;
    margin:0 auto;
    font:11px 'Trebuchet MS';
    color:#6b717c;
    text-indent:30px;
    padding:40px 0 0 0;
}
div#copyright a { color:#d7d2bc; }
div#copyright a:hover { color:#6b717c; }
</style>

<?php
    function buildMenu($menuArray)
    {
        foreach ($menuArray as $key => $node)
        {
            if (is_array(@$node)) {
                if (is_array(@$node[0])) {
                    $drpclass = 'parent';
                }else{
                    $drpclass = '';
                }
                echo "<li><a href='".@$node['menu_link']."' class='".$drpclass."'><span>".@$node['menu_name']."</span></a>";
                if($drpclass == 'parent'){
                    echo "<ul>";
                    buildMenu(@$node);
                    echo "</ul>";
                }
                echo "</li>";
            }        
        }
    }
?>

<div id="menu">
    <ul class="menu">
        <?php buildMenu($pmenu); ?>
    </ul> 
</div>

<div id="copyright" style="display: none;">Copyright &copy; 2017 <a href="http://apycom.com/">Array Format</a></div>
<div id="copyright"><a href="menu_master.php?show=val" target="_blank"><h2>Data in Array</h2></a></div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

</body>
</html>