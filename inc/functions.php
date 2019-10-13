<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

$quotes = [
    [
        'quote' => 'Quote 1',
        'source' => 'Source 1',
        'date' => 'Date 1',
        'citation' => 'Citation 1',
        'tag' => 'Politics 1',
    ],
    [
        'quote' => 'Quote 2',
        'source' => 'Source 2',
        'date' => 'Date 2',
        'citation' => 'Citation 2',
        'tag' => 'Humor 2',
    ],
    [
        'quote' => 'Quote 3',
        'source' => 'Source 3',
        'citation' => 'Citation 3',
        'tag' => 'Business 3',
    ],
    [
        'quote' => 'Quote 4',
        'source' => 'Source 4',
        'citation' => 'Citation 4',
        'tag' => 'Religion 4'
    ],
    [
        'quote' => 'Quote 5',
        'source' => 'Source 5',
        'date' => 'Date 5',
        'tag' => 'Society 5'
    ],
    [
        'quote' => 'Quote 6',
        'source' => 'Source 6',
        'date' => 'Date 6',
        'tag' => 'Education 6'
    ],
    [
        'quote' => 'Quote 7',
        'source' => 'Source 7',
        'date' => 'Date 7',
    ],
    [
        'quote' => 'Quote 8',
        'source' => 'Source 8',
        'citation' => 'Citation 8',
        'tag' => 'Science 8'
    ],
    [
        'quote' => 'Quote 9',
        'source' => 'Source 9',
        'date' => 'Date 9',
        'tag' => 'Movies 9'
    ],
    [
        'quote' => 'Quote 10',
        'source' => 'Source 10',
        'date' => 'Date 10',
        'citation' => 'Citation 10',
    ],
];


/**
 * Generates a random item from the provided array.
 * This function generates a random quotes by using the index key of the internal arrays from a multi-dimensional array each time the page reloads.
 * 
 * @param mixed[] $quotes Multi-dimensional array to generate random quotes from.
 * @return array Returns an associative array.
 */
function getRandomQuote(array $quotes) {
    // Get the total number of element in the array and minus 1 since arrays begins counting at 0. 
    $all_arr_el = count($quotes) - 1;
    //generate a random number between 0 and the number of array from $all_arr_el to form an array key
    $randomKey = rand(0, $all_arr_el);
    // $randomQuote = array_rand($quotes); this line could replace the two lines above
    //use the random key to select an array element
    $el = $quotes[$randomKey];
    return $el;
}

/**
 * Prints out a string of html content.
 * This function calls the getRandomQuote() function to grab a single random associative array for printing on the screen. 
 *
 * @param array $quotes
 * @return string Returns a string of html text
 */
function printQuote(array $quotes) {
    // Call the getRandomQuote function and assign it to a variable
    $randomQuote = getRandomQuote($quotes);
    // Create the html element and output the relevant contents with the $randomQuote
    $str = '';
    $str .= '<p class="quote">' . $randomQuote['quote'] . '</p>';
    $str .= '<p class="source">' . $randomQuote['source'];
    if(isset($randomQuote['citation'])) {
        $str .= '<span class="citation">' . $randomQuote['citation'] . '</span>';
    }
    if(isset($randomQuote['tag'])) {
        $str .= '<span class="tag">'. $randomQuote['tag'] . '</span>';
    }
    if (isset($randomQuote['date'])) {
        $str .= '<span class="year">' . $randomQuote['date'] . '</span></p>';
    }

    return $str;
}

/**
 * Generates a random string of color name from an array.
 * Prints a string of random color name from a predefined array of colors that is usedon the body element to generate a random background c 
 *
 * @return string Returns a string of color name. 
 */
function bg() {
    // set up an array of pre-defined color names
    $bgColors = [
        'darkgreen', 'darkblue', 'skyblue', 'tomato', 'violet'
    ];
    // Select a random key from the array index/key
    $randColors = array_rand($bgColors);
    //Use the generated random key to select a random background color from the pre-defined array of colors
    $randBg = $bgColors[$randColors];
    return $randBg;
}
