<?php

// Most of this code should be very familiar by now, but we have introduced a few new items.
// trim() removed whitespace and special characters from strings. See the PHP man page for trim().
// We used a do/while instead of another control structure. This allowed us to enter our loop, and pause at the user input area until the user decides to (Q)uit.
// We used unset() to remove array elements. See the PHP man page for unset().

// Exercises
// Create a new directory in your vagrant-lamp directory named todo_list with a file named todo.php containing the code above. Use git init to initialize a new local repository in that directory and commit your code. Create a new remote repository on GitHub called CLI_Todo_List and add the remote to your local repository so you can push your code.
// After each exercise item, commit and push changes to your GitHub repository.
// Update the code to allow upper and lowercase inputs from user for all menu items. Test adding, removing, and quitting.
// Update the program to start numbering the list with 1 instead of 0. Make sure remove still works as expected.

// Create array to hold list of todo items
$items = array('Justin', 'Jamie', 'Keyasha', 'Benny', 15, 2015, 95, 97);

function sortItems($items){

    echo "(A)-Z, (Z)-A, (O)rder entered, (R)everse order entered";
        $sort = trim(fgets(STDIN));
        
        if ($sort == 'A'){
            asort($items);      
        } elseif ($sort == 'Z') {
            arsort($items);
        } elseif ($sort == 'O'){
            ksort($items);
        } elseif ($sort == 'R') {
            krsort($items);
        }
        return $items;
    }

// The loop!
do {
    // Iterate through list items
    foreach ($items as $key => $item) {
        // Display each item and a newline
        echo "[{$key}] {$item}\n";
    }

    // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort items, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = trim(fgets(STDIN));

    // Check for actionable input
    if ($input == 'N') {
    echo 'Enter item: ';
        
        // Add entry to list array
        $newItem = trim(fgets(STDIN));
        echo "Enter 'B' to add it to the beginning or enter 'E' for end: ";
        
        $listOrder = trim(fgets(STDIN));

        if($listOrder == 'B'){
            array_unshift($items, $newItem);
        } elseif ($listOrder == 'E') {
            array_push($items, $newItem);
            //THIS LINE SAME AS ABOVE: $items[] = $newItem
        }
       
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key]);
    } elseif ($input == 'S') {
        $items = sortItems($items);
    } elseif($input == 'F') {
        array_shift($items);
    } elseif ($input == 'L') {
        array_pop($items);
    }

// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);
