<?php
require_once(PHPPATH.'DB.php');

class Status
{
    private $status_id = -1;
    public $type = "default";
    
    public static function get_status($status_id_number)
    {
        global $db;
        
        $query = sprintf("SELECT Statuses.Type FROM Statuses WHERE Statuses.StatusID = %u", $status_id_number);
        
        $result = $db->select_query($query);
        if(!$result || mysql_num_rows($result) != 1)
        {
            return false;
        }
        else
        {
            $status = new Status();
            
            $status_data = mysql_fetch_row($result);
            
            $status->$status_id = $status_id_number;
            $status->$type = $status_data[0];
            
            return $status;
        }
    }
}
?>