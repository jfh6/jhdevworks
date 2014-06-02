<code>
function listObjectTypes()<br />
    {<br />
        //creates an array of all the types of objects (tier one of the final object array is type.)<br />
        $conn = $this->db->con;<br />
        $this->db->checkConnection();<br />
        $result = mysqli_query($conn, "SELECT * FROM objects");<br />
        while ($row = mysqli_fetch_array($result)) {<br />
            $a = $row['type'];<br />
            if (!in_array($a, $objTypeArray)) {<br />
                array_push($objTypeArray, $a);<br />
            }<br />
        }<br />
        return $objTypeArray;<br />

    }
</code>