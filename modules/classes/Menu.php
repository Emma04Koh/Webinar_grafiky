<?php

class Menu
{
    private $menuItems;

    public function __construct($menuItems = [])
    {
        if (empty($menuItems)) {
            $menuItems = [
                ['label' => 'Home', 'link' => 'index.php'],
                ['label' => 'About us', 'link' => 'about-us.php'],
                ['label' => 'Our services', 'link' => 'our-services.php'],
                ['label' => 'Contact us', 'link' => 'contact-us.php']
            ];
        }
        
        $this->menuItems = $menuItems;
    }
    public function index()
    {
        return $this->menuItems;
    }
}
/*<?php
            $menu = new Menu();
            $menuItems = $menu->index();
            foreach ($menuItems as $item) {
              echo '<li><a href="' . $item['link'] . '">' . $item['label'] . '</a></li>';
            }
          ?>
zle menu          
*/
?>

