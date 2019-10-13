<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

$quotes = [
    [
        'quote' => 'You should always give yourself deadlines for your goals, or you won\'t follow through.',
        'source' => 'Brendon Burchard',
        'date' =>  2017,
        'citation' => 'High Performance Habits',
        'tag' => 'Motivation',
    ],
    [
        'quote' => 'To be a truly effective entrepreneur, you have to be your business\'s number one expert at selling.',
        'source' => 'Sabri Suby',
        'date' => 2019,
        'citation' => 'Sell Like Crazy',
        'tag' => 'Business',
    ],
    [
        'quote' => 'Since the purpose of business is to make a sale, the most important functions of a business are marketing and innovation. EVERYTHING else is an expense.',
        'source' => 'Peter Drucker',
        'tag' => 'Business',
    ],
    [
        'quote' => 'Degrees aren\'t the all-access pass to a career that universities like to pretend they are.',
        'source' => 'Danny Iny',
        'date' => 2018,
        'citation' => 'Leveraged Learning',
        'tag' => 'Education',
    ],
    [
        'quote' => 'The best among you is the most useful to mankind.',
        'source' => 'Prophet Muhammad',
        'citation' => 'Hadith',
        'tag' => 'Religion'
    ],
    [
        'quote' => 'None of us will ever accomplish anything excellent or commanding except when he listens to this whisper which he heard by him alone.',
        'source' => 'Thomas Carlyle',
        'tag' => 'Philosophy'
    ],
    [
        'quote' => 'Don\'t be trapped by the dogma - which is living with the results of other people\'s thinking',
        'source' => 'Steve Jobs',
        'tag' => 'Motivation'
    ],
    [
        'quote' => 'Those who are able to see beyond the shadows and lies of their culture will never be understood, let alone believed, by the masses.',
        'source' => 'Plato',
        'tag' => 'Philosophy'
    ],
    [
        'quote' => 'The problem with the rat race is that even if you win, you are still a rat.',
        'source' => 'Lily Tomlin',
        'tag' => 'Comedy'
    ],
    [
        'quote' => 'You can avoid reality, but you cannot avoid the consequences of avoiding reality',
        'source' => 'Ayn Rand',
        'tag' => 'Philosophy.'
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
        $str .= '<span class="year">' . $randomQuote['date'] . '</span>';
    }
    $str .= '</p>';

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
