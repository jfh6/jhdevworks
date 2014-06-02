<code>
/**<br />
 * @author Joshua Helt<br />
 * @copyright 2014<br />
 */<br />

class product extends CI_Model<br />
{<br />
    // This class holds the attributes for the product in the webstore.<br />
    public $productId;<br />
    public $productName;<br />
    public $procudtNotes;<br />
    public $productPrice;<br />
    public $productImage;<br />

    public function __construct($name = "", $id = "", $price = "", $notes = "", $image =<br />
        "")<br />
    {<br />
        //constructor for the product class<br />
        $this->productName = $name;<br />
        $this->productId = $id;<br />
        $this->productPrice = $price;<br />
        $this->productNotes = $notes;<br />
        $this->productImage = $image;<br />
    }<br />
    public function listProducts()<br />
    {<br />
        //pulls all products from the database.<br />
        //stores them in a multi-deminisional array,<br />
        //then passes each tier two array to a new product object.<br />
        //this object is pushed to a new array.<br />
        // the new array is returned out of the function.<br />
<br />
        $products = array();<br />
        $productList = array();<br />
        $q = $this->db->get('products');<br />
        foreach ($q->result() as $row) {<br />
            $productArray = array(<br />
                "name" => $row->name,<br />
                "id" => $row->id,<br />
                "price" => $row->price,<br />
                "notes" => $row->notes,<br />
                "image" => $row->image);<br />
            array_push($productList, $productArray);<br />
        }<br />
        for ($i = 0; $i < count($productList); $i++) {<br />
            $product = new product(<br />$productList[$i]["name"],<br /> $productList[$i]["id"],<br /> $productList[$i]["price"],<br />
                $productList[$i]["notes"],<br /> $productList[$i]["image"]);<br />
<br />
            array_push($products, $product);<br />
        }<br />
        return $products;<br />
    }<br />
}<br />
</code>
