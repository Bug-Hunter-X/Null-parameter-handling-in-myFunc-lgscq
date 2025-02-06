```php
function myFunc($a, $b) {
  if ($a === null || $b === null) {
    return null; // Handle null values explicitly
  }

  // ... rest of the function
  return $a + $b; // Or other calculation
}

$result = myFunc(null, 5); // Returns null
$result = myFunc(10, null); // Returns null
$result = myFunc(10, 5);    // Returns 15
```