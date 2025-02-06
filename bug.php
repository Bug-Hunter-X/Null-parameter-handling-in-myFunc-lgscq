```php
function myFunc($a, $b) {
  if ($a === null || $b === null) {
    return null; // Handle null values
  }

  // ... rest of the function
}

$result = myFunc(null, 5); // Returns null
$result = myFunc(10, null); // Returns null
$result = myFunc(10, 5);    // Proceeds with calculation
```