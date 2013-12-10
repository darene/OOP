<?php

/**
 * Filename: MessageDAO.php (Data Access Object)
 * Message class for the Guestbook
 */
class MessageDAO {

    /**
     * @param Message object
     * @return Boolean is the message added to messages table or not
     */
    public static function post_message($name,$email,$message,$action) {
        // Execute SQL query to INSERT into messages table
        $query = "INSERT INTO messages(name,message,email,date_posted,is_approved) Values('$name','$message','$email',CURRENT_DATE,'$action')";
        $result = mysql_query($query);
        return $result;
    }

    /**
     * @param Integer ID number of user
     * @return is_approved object
     */
    public static function get_approved($id) {
        // Execute SQL to fetch message based on ID
        $query = "SELECT is_approved FROM messages WHERE id = '$id' ";
        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);
        return $row;
    }

    /**
     * @return Array of Message objects
     */
    public static function view_list_message() {
        // Execute SQL to fetch all messages
        $query = "SELECT * FROM messages";
        $result = mysql_query($query);
        $message_lists = array();
        if(mysql_num_rows($result)>0){
            while($row = mysql_fetch_assoc($result)){
                    $message_lists[] = $row;
            }
        }
        return $message_lists;
    }

    /**
     * @param Integer ID number of message
     * @return Message object
     */
    public static function delete_message($id) {
        // Execute SQL to delete the message based on ID
       $query = "DELETE FROM messages WHERE id = '$id'";
        $result = mysql_query($query);
        return $result;
    }

    /**
     * Set is_approved to 'Y'
     * @param Integer id number
     * @return Boolean
     */
    public static function approve_message($id) {
        // Execute SQL to update the is_approved into Y
        $query = "UPDATE messages SET is_approved = 'Y' WHERE id = '{$id}' ";
        $result = mysql_query($query);
        return $result;
    }

    /**
     * Set is_approved to 'N'
     * @param Integer id number
     * @return Boolean
     */
    public static function reject_message($id) {
        // Execute SQL to update the is_approved into N
        $query = "UPDATE messages SET is_approved = 'N' WHERE id = '{$id}' ";
        $result = mysql_query($query);
        return $result;
    }

    // View all message that are approved
    // @param is_approved
    // @return message object

    public static function approved_messages(){
        // Execute SQL to view all approved messages
        $query = "SELECT * FROM messages WHERE is_approved = 'Y'";
        $result = mysql_query($query);
        $list =  array();
        if(mysql_num_rows($result) > 0){
            while($row = mysql_fetch_assoc($result)){
                $list[] = $row;
            }
        }
        return $list;

    }
}

?>