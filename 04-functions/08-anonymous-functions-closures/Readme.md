# Anonymous Function 
An anonymous function is a function that doesn’t have a name. These are often used for short-lived purposes, like being assigned to a variable or passed as an argument to another function.

e.g
```php
$square = function ($a) {
    return $a * $a;
}

echo $square(5); // Output: 25
```

### Question 1
Can you explain how you might use an anonymous function as a callback in PHP? For example, how would you use it with the array_map() function? 😊

<details>
 <summary>Click to see the solution</summary>

  ```php
    <?php
        $double = function($a) {
            return $a * 2;
        };
        $array = [1, 2, 3, 4];
        $result = array_map($double, $array);

        print_r($result);
    ?>
  ```

  #### Explanation
   1. Anonymous Function:
     - $double is an anonymous function that takes a single parameter $a and returns $a * 2.
     - This function is passed as a callback to array_map().
   2. `array_map()` Behavior:
     - array_map() applies the $double function to each element in the $array.
     - The result is a new array where each value is doubled. 
</details>

### Question 2 
What if you didn’t assign the anonymous function to a variable? How would you use it directly within array_map()? Try modifying your code to do this! 😊

<details>
 <summary>Click to see the solution</summary>

  ```php
    <?php
        $array = [1, 2, 3, 4];
        $result = array_map(function($a) {
            return $a * 2;
        }, $array);

        print_r($result);
    ?>

  ```

  #### Explanation
   1. Inline Anonymous Function:
     - You passed the function directly to array_map() without assigning it to a variable. This keeps the code concise.
   2. Functionality:
     - Your anonymous function doubles each value in the array, and the result is correctly returned and printed. 
</details>
