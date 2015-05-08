<?php
require_once(PHPPATH.'DB.php');
include_once(PHPPATH.'Status.php');
class Member
{
    public $member_id = 0;
    public $first_name = "John";
    public $last_name = "Doe";
    public $address = "1234 DoesNotExist Ln. NoWhere, YY 48923";
    public $cellphone = "";
    public $homephone = "";
    public $workphone = "";
    public $can_text = false;
    public $email = "default@example.com";
    public $gender = "M";
    
    public $status = NULL;
    
    
    // Timestamp might not need to be included in the object
    // As it auto updates on write. We might need to change
    // to a datetime field instead an manually track the timestamp
    //
    // public $timestamp = NULL;
    
    
    public static function get_member($member_id)
    {
        global $db;
        
       $query = sprintf("SELECT Members.FName, Members.LName, Members.Address, Members.CellPhon
                         , Members.HomePhone, Members.WorkPhone, Members.Text, Members.Email
                         , Members.Gender, Members.StatusID FROM Members WHERE Members.MemberID = %d",
                         $member_id);
                         
        $result = $db->select_query($query);
        if(!$result || mysql_num_rows($result) != 1)
        {
            return false;
        }
        else
        {
            $member = new Member();
            
            $member_data = mysql_fetch_row($result);
            
            $member->member_id = $member_id
            $member->first_name = $member_data[0];
            $member->last_name = $member_data[1];
            $member->address = $member_data[2];
            $member->cellphone = $member_data[3];
            $member->homephone = $member_data[4];
            $member->workphone = $member_data[5];
            $member->can_text = $member_data[6];
            $member->email = $member_data[7];
            $member->gender = $member_data[8];
            
            $status = Status::get_status($member_data[9]);
            
            // The status isn't valid, that shouldn't be possible, but I checked for it.
            if(!$status)
            {
                return false;
            }
            else
            {
                $member->status = $status;
            }
            
            
            return $member;
    }
}
?>