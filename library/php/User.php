<?php

require_once(PHPPATH.'DB.php');

class User
{
    public $user_type = "useless";
    public $email = "default@example.com";
    
    
    
    /**
     * Returns true if the user has administrative rights.
     *
     * TODO: This is broken for some reason and I can't figure
     *       out why. It might have something to do with the strcmp
     */
    public function is_admin()
    {
        if(strcmp($this->$user_type, "administrator") == 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    /**
     * Returns a user object identified by the provided password.
     *
     * Returns false if no user exists with said password or there was
     * a database error
     */
    public static function get_user($password)
    {
        // Needed to access the global database access object.
        global $db;
        
        $query = sprintf("SELECT Users.UserType, Users.Email FROM Users 
                          WHERE Users.Password='%s' LIMIT 1",
                          mysql_real_escape_string($password));
                          
        $result = $db->select_query($query);
        if(!$result || mysql_num_rows($result) != 1)
        {
            return false;
        }
        else
        {
            $user = new User();
            
            $user_data = mysql_fetch_row($result);
            $user->user_type = $user_data[0];
            $user->email = $user_data[1];
            
            return $user;
        }
    }
}
?>