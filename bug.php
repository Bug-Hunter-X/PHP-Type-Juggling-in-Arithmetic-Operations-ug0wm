```php
<?php
function calculate_sum($a, $b) {
  return $a + $b;
}

$result = calculate_sum(10, '20');
var_dump($result);
// Expected output: 30
// Actual output: string(3) "1020"
?>
```