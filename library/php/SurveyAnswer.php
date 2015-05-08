<?php
class SurveyAnswer
{
    public $choice = NULL;
    public $member = NULL;
    public $user_input = "";
    
    
    /*
     * Takes a member object and returns an array of all SurveyAnswers
     *
     */
    public static function get_answers_for_member($member)
    {
        $query = sprintf("SELECT SurveyAnswers.ChoiceID, SurveyAnswers.UserInput from SurveyAnswers 
                          WHERE SurveyAnswers.MemberID = %d"
                         , $member->member_id);
                         
        // Still need to figure out how choices are going to be represented, this the rest of this function
        // hasn't been implemented yet.
    }
}
?>