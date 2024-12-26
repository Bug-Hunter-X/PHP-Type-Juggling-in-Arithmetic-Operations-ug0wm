# PHP Type Juggling Bug

This repository demonstrates a common issue in PHP: type juggling leading to unexpected results in arithmetic operations.  The script `bug.php` shows how adding a number to a string using the `+` operator results in string concatenation rather than numerical addition. The solution `bugSolution.php` showcases how to avoid this using type casting or strict comparisons.

## How to Reproduce
1. Clone the repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output.
4. Run `bugSolution.php` to see the corrected behavior.

## Bug Explanation
PHP's loose typing can be a source of errors.  When adding an integer to a string, PHP attempts to convert the integer to a string and concatenates them.  This behavior can be problematic when expecting numerical addition.

## Solution
To solve this, explicitly cast the string to an integer using `(int)` or `intval()` before performing the addition or use strict comparison operators for more predictable behavior.