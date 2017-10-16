<?php
class MenuAndContent
{
    public static $items = array(
        1=> array ("title" => "Start", "num" => "1", "path" => "./assets/start.html"),
        2=> array ("title" => "About", "num" => "2",  "path" => "./assets/about.html"),
        3=> array ("title" => "Top List", "num" => "3",  "path" => "./assets/top_list.html")
    );

    public static function renderMenu($SelectedItem = 0){
        $generatedMenu = 
'		<div>
			<header class="main-menu">
				<ul>
					<li><a href="index.php"><img class="main-page" src="./img/logo1.png"></a></li>
					';
		foreach(self::$items as $key => $value){
            if($key == $SelectedItem) {
                $generatedMenu = $generatedMenu.'<li><a class="active">'."{$value['title']}</a></li>";
			}
			else{				
				$generatedMenu = $generatedMenu.'<li><a href="./index.php?page='."{$value["num"]}".'">'."{$value['title']}".'</a></li>';
			}
		}
		$generatedMenu = $generatedMenu.'
				</ul>
			</header>';
        return $generatedMenu;		
    }

    public static function getContent($SelectedPage = 0){
        if(array_key_exists($SelectedPage, self::$items)) {
            return file_get_contents(self::$items[$SelectedPage]['path']);
        }else
            return file_get_contents("./assets/index.html");

    }
}
	
?>