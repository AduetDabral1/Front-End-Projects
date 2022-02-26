<?php
 
function check_if_added_to_cart($item_id) {
    $user_id = $_SESSION['user_id'];                        //Get the user_id from the session
    require("Common.php");                                  //Connecting to the database

    //Select all the entries from the user_items table where the item_id = item_id we passed to this function, user_id = user_id in the session and status is 'Added to cart'
    $query = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' AND status='Added to cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    
    //Check the no.of rows in the result and no.of rows returned by the mysqli_num_rows($result) is true. 
    //If yes then it return 0 else it returns 0
    if (mysqli_num_rows($result) >= 1)
        return 1;
    else 
        return 0;
}
?>