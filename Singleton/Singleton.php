<?php

class Singleton
{
    private static array $instances = [];

    protected function __construct()
    {

    }

    public function __clone(): void
    {
        // TODO: Implement __clone() method.
    }

   public function __wakeup(): void
   {
       // TODO: Implement __wakeup() method.
   }

   public static function getInstance() :Singleton
   {
       $cls = static::class;
       if(!isset(self::$instances[$cls])) {
          self::$instances[$cls] = new static();
       }
       return self::$instances[$cls];
   }
}