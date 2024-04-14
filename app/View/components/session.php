<!-- 
-- Student Name: Johny Ramos
-- Course: T054 - Computer System Management
-- Module: Web Application
-- Lecturer: Robert Smith
-->

<?php 
class session {
    public function killSession() {
        $_SESSION = []; //overwrite the current session array with an empty array.

        //overwrite the session cookie with empty data too.
        if(ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie (
                session_name(), '', time() - 42000,
                $params['path'], $params['domain'],
                $params['secure'], $params['httponly']
            );
        }
        if(session_status() == PHP_SESSION_ACTIVE) {
            session_destroy();
        } else {
            echo "No active session found. Cannot destroy.";
        }
    }

    public function forgetSession() {
        $this -> killSession();
        header("Location: http://localhost/public/index.php");
        exit;
    }
}
?>