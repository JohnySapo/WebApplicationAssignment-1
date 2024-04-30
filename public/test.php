<?php
/**
 * Clickable Buttons to Adjust a Counting Value in the PHP session
 */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('log_errors', TRUE);

/**
 * Always start the PHP session on every page.
 *
 * Since it is a required feature of this code example, we test to see that the
 * call to session_start() worked, and terminate the script if it failed.
 */
if (!session_start()) trigger_error("Unable to start the PHP session", E_USER_ERROR);

/**
 * On the first request, the counter will not exist, so we create it, set to zero
 */
if (!isset($_SESSION['counter'])) $_SESSION['counter'] = 0;

/**
 * Look for POST-method requests to increment or decrement our session variable
 */
if (!empty($_POST['add'])) {
    $_SESSION['counter']++;
}
if (!empty($_POST['sub'])) {
    $_SESSION['counter']--;
}

/**
 * Create an HTML form to communicate with this script using HEREDOC notation
 *
 * Unfortunately you cannot use an expression like $_SESSION['count'] in the
 * HEREDOC block, so we are forced to create a separate variable that can be
 * injected into the HEREDOC.  Not a problem with object-oriented notation.
 * Maybe some day PHP will allow us to create the session in the form of an
 * object instead of an array!
 */
$session_counter = $_SESSION['counter'];
$form = <<<ENDFORM
The value of the session counter is $session_counter
<form method="post">
<input type="submit" name="add" value="+1" />
<input type="submit" name="sub" value="-1" />
</form>
ENDFORM;

echo $form;