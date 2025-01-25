# PHP Undefined Variable Bug
This repository demonstrates a common PHP bug involving undefined variables within conditional statements. The `bug.php` file shows the buggy code, and `bugSolution.php` presents a corrected version.

## Description
The bug arises when a variable is used within an `if` statement's block but might not always be defined beforehand.  This commonly occurs when the variable's assignment depends on a condition (like form submission).  If the condition isn't met, attempting to use the undefined variable results in an error or unexpected output.

## Solution
The solution involves checking for the variable's existence using the `isset()` function before using it.  Alternatively, assigning a default value to the variable ensures it's always defined.