<?php
/**
 * Calculates the total price of items in a shopping cart.
 *
 * @param array $items An array of items with 'name' and 'price' keys.
 * @return float The total price of the items...
 */
function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

/**
 * Modifies a string by removing spaces and converting it to lowercase.
 *
 * @param string $inputString The input string to be modified.
 * @return string The modified string.
 */
function modifyString(string $inputString): string {
    $modifiedString = str_replace(' ', '', $inputString);
    $modifiedString = strtolower($modifiedString);
    return $modifiedString;
}

/**
 * Checks if a number is even or odd.
 *
 * @param int $number The number to be checked.
 * @return string A message indicating whether the number is even or odd.
 */
function checkEvenOrOdd(int $number): string {
    if ($number % 2 == 0) {
        return "The number $number is even.";
    } else {
        return "The number $number is odd.";
    }
}

// Shopping cart items.
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

// Calculate and display total price
$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice;

// String manipulation
$inputString = "This is a poorly written program with little structure and readability.";
$modifiedString = modifyString($inputString);
echo "\nModified string: " . $modifiedString;

// Check if a number is even or odd
$number = 42;
$result = checkEvenOrOdd($number);
echo "<div\n$result";
?>