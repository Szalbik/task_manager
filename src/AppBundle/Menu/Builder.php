<?php


/**
 * Created by PhpStorm.
 * User: Szalbik
 * Date: 06.06.2017
 * Time: 22:35
 */

namespace AppBundle\Menu;

use Knp\Menu\MenuFactory;

class Builder {
    public function mainMenu(MenuFactory $factory, array $options) {
        $menu = $factory -> createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
        $menu->addChild('Home', ['route' => 'homepage']);
        $menu->addChild('All tasks', ['route' => 'task_index']);
        $menu->addChild('My tasks', ['route' => 'my_task']);
        return $menu;
    }

    public function menuRight(MenuFactory $factory, array $options) {
        $menu = $factory -> createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav navbar-right');
        $menu->addChild('Login', ['route' => 'login']);
        return $menu;
    }
}