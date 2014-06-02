<div id="subcontent" align="left">
<h2>A Code Snipet Just for You: </h2>
<?php 
    $this->load->view($codeOfTheDay);
    $p = $this->product->listProducts();
 for($i=0; $i<count($p); $i++)
 {
    form_open();
    echo '<img src="';
    echo $p[$i]->productImage;
    echo '" width = "75px" height="75px" />';
    echo 
    '<script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
    data-amount="';
    echo $p[$i]->productPrice;
    echo 
    '" data-name="';
    echo $p[$i]->productName;
    echo 
    '"
    data-description="';
    echo $p[$i]->productNotes;
    echo 
    '"
    data-image="';
    echo $p[$i]->productImage;
    echo
    '">
  </script>';
    form_close();
 }
?>
</div>