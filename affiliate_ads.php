function demo_config() {
    $configarray = array(
    "name" => "Affiliate Ads",
    "description" => "This is a sample config function for an addon module",
    "version" => "1.0",
    "author" => "Heskett-Tech LC",
    "fields" => array(
        "option1" => array ("FriendlyName" => "Option1", "Type" => "text", "Size" => "25",
                              "Description" => "Textbox", "Default" => "Example", ),
        "option2" => array ("FriendlyName" => "Option2", "Type" => "password", "Size" => "25",
                              "Description" => "Password", ),
        "option3" => array ("FriendlyName" => "Option3", "Type" => "yesno", "Size" => "25",
                              "Description" => "Sample Check Box", ),
        "option4" => array ("FriendlyName" => "Option4", "Type" => "dropdown", "Options" =>
                              "1,2,3,4,5", "Description" => "Sample Dropdown", "Default" => "3", ),
        "option5" => array ("FriendlyName" => "Option5", "Type" => "radio", "Options" =>
                              "Demo1,Demo2,Demo3", "Description" => "Radio Options Demo", ),
        "option6" => array ("FriendlyName" => "Option6", "Type" => "textarea", "Rows" => "3",
                              "Cols" => "50", "Description" => "Description goes here", "Default" => "Test", ),
    ));
    return $configarray;
}

function demo_activate() {
 
    # Create Custom DB Table
    $query = "CREATE TABLE `mod_affiliate_ads` (`id` INT( 1 ) NOT NULL AUTO_INCREMENT ... ";
	$result = mysql_query($query);
 
    # Return Result
    return array('status'=>'success','description'=>'This is an demo module only. In a real
           module you might instruct a user how to get started with it here...');
    return array('status'=>'error','description'=>'You can use the error status return to
           indicate there was a problem activating the module');
    return array('status'=>'info','description'=>'You can use the info status return to display
           a message to the user');
 
}
 
function demo_deactivate() {
 
    # Remove Custom DB Table
    $query = "DROP TABLE `mod_affiliate_ads`";
	$result = mysql_query($query);
 
    # Return Result
    return array('status'=>'success','description'=>'If successful, you can return a message
           to show the user here');
    return array('status'=>'error','description'=>'If an error occurs you can return an error
           message for display here');
    return array('status'=>'info','description'=>'If you want to give an info message to a user
           you can return it here');
 
}
