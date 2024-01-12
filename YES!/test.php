<?php
function isSiteReachable($url) {
    // Use @ to suppress warnings and errors
    $content = @file_get_contents($url);

    // Check if content is retrieved successfully
    if ($content === false) {
        return false; // Site is not reachable
    }

    return true; // Site is reachable
}

// Example usage
if (isSiteReachable($_GET['Url'])) {
    echo "The site is reachable.";
} else {
    echo "The site is not reachable.";
}

?>
