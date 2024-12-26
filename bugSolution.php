```php
<?php
function calculate_sum($a, $b) {
  return (int)$a + (int)$b; // Type casting to integers
}

$result = calculate_sum(10, '20');
var_dump($result); // Output: int(30)

// Alternative solution using intval()
function calculate_sum_alt($a, $b) {
  return intval($a) + intval($b);
}
$result_alt = calculate_sum_alt(10, '20');
var_dump($result_alt); // Output: int(30)
?>
```