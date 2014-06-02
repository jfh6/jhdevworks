<h2>Send an E-mail:</h2>
<h4>Message will be sent to all site administrators.</h4>
<?php 
    if(isset($message)){
        $this->load->view($message);
    }
?>
<form action="<?php echo base_url(); ?>/index.php/welcome/contact" method="POST">
    <input name="fromName" id="fromName" value="Your Name" onclick="hideValue('fromName')" /><br />
    <input name="fromEmail" value="Your E-mail" id="fromEmail" onclick="hideValue('fromEmail')" /><br />
    <textarea rows="10" cols="50" id="message" onclick="hideValue('message')">Type your message here.</textarea><br />
    <input type="submit" value="Send Message."/>
</form>
<div id="contactInfo">
    <ul>
    <li><b>Phone:<br /></b> (360)-593-6455</li><br />
    <li><b>Address:<br /></b>HC 65 Box 255U<br />Alpine TX, 79830</li><br />
    <li><b>E-mail:<br /></b>Joshua@jhdevworks.net</li><br />
    </ul>
</div>