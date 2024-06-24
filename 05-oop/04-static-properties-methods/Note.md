# Static Properties 
Static properties are properties of a class that belong to the class itself rather than to instances (objects) of the class. Static properties are shared among all instances of the class. This means that they can be accessed without creating an instace of the class that all instances of the class share the same static property value. 

## Key point about static properties 
 1. <b>Shared across instances</b>: Static properties are shared among all instances of the class. 

 2. <b>Access without instance</b>: You can access static properties without creating an instance of the class. 

 3. <b>Use of `static` Keyword</b>: Static properties are declared using the `static` keyword. 

 4. <b>Access with `self` or Class Name</b>: Inside the class, static properties are accessed using `self::` Outside the class, they are accessed using the class name followed by the scope resolution operator `::`.

## Example 
```php
<?php

class ClassName {
    // static property 
    public static $staticProperty = "Static Value";

    // static method to access the static property 
    public static function getValue() {
        return self::$staticProperty;
    }
}

echo ClassName::$staticProperty;

echo ClassName::getValue();

>

```
