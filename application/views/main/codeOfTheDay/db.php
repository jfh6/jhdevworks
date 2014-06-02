<code>
class db<br />
{<br />
    // This class stores the information to connect to our data source.<br />
    $con = mysqli_connect("host", "user", "pass", "my_db");<br />
    function checkConnection()<br />
    {<br />
        // Check connection<br />
        if (mysqli_connect_errno()) {<br />
            echo "Failed to connect to MySQL: " . mysqli_connect_error();<br />
            die;<br />
        }<br />
    }<br />
}<br />
</code>