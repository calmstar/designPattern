<?php

/**
 * 简单工厂模式
 */
interface people {
    function say();
}

class Man implements people {
    public function say() {
        // TODO: Implement say() method.
        var_dump('man say');
    }
}

class Woman implements people {
    public function say() {
        var_dump('woman say');
    }
}

class SimpleFactory {
    public static function createMan() {
        return new Man();
    }

    public static function createWoman() {
        return new Woman();
    }
}

$man = SimpleFactory::createMan();
$man->say();

$woman = SimpleFactory::createWoman();
$woman->say();


/**
 *
 * 工厂模式是我们最常用的实例化对象模式，是用工厂方法代替new操作的一种模式。
 * 使用工厂模式的好处是，如果你想要更改所实例化的类名等，则只需更改该工厂方法内容即可，
 * 不需逐一寻找代码中具体实例化的地方（new处）修改了。为系统结构提供灵活的动态扩展机制，减少了耦合。
 */
