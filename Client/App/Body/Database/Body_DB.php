<?

    $myAPI = 'localhost';
    $myAPIRoot = 'root';
    /**
     * enter your password if you have
     */
    $myAPIpassowrd = 'God1522kIll7766##';
    $myAPIname = 'branstore';
    $conn = new mysqli($myAPIname,$myAPIRoot,$myAPIpassowrd,$myAPIname);

    if(!$conn)
    {
        die(mysqli_error($conn));
    }
?>