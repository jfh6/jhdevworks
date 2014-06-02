<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>JH~DevWorks</title>
    <link rel="stylesheet" href="http://127.0.0.1/jh/css/style.css"/>
    <script type="text/javascript">
    
        var shohide = function(newItem) {
            var item = document.getElementById(newItem);
            if(item.style.display=="none"){
                item.style.display="block";
            }else{
                item.style.disiplay="none";
            }
}
    </script>
    <script type="text/javascript">
    var hideValue = function(item){
        var ele = document.getElementById(item);
        if (ele.value !== ""){
            ele.value = "";
        }
    };
</script>
</head>
<body>
<div id="wrapperTop">
<img src="http://127.0.0.1/jh/images/Joshua.png" id="joshuaIMG" onmouseover="shohide('intro')"/>
<h1>JH~DevWorks</h1>
<div id="nav">
    <?php 
        $this->load->view('template/nav'); 
    ?>
    </div>
    </div>
	<div id="topBody" align="center">
	<p id="intro" style="display: none;" >
        Thank you for visiting my website.<br />
        My name is Joshua F. Helt.
        This site serves as a record and portfolio of my passion for, and work with Website Development.<br />        
        I started working with php back-end code in 2011 working with a friend from the Netherlands. I Learned the fundementals of PHP while working on user management and administrative 
        functions for his websites.<br />
        Learning PHP as an introduction to programming has been a great experience for me and has given me an understanding of what it takes to be a successful Programmer and Engineer.
        Not only with web/mobile development, but also for the Development industry in general.
        Since 2011, I have continued to study related website development technologies such as CSS3, HTML5, OOP with PHP, MySQLi, and a bit of Javascript.<br />
        I have experience with frameworks and tools such as: Wordpress, CodeIgniter, and phpmyadmin for Mysqli.<br />
        I am looking into other tools and frameworks including: MongoDB, Zend, and CGI scripting.<br />
        I am a quick learner, and I enjoy learning new tools, and technology.<br />
        My Passion for Engineering comes form my desire to understand a problem, and create a soloution to solve for the answer. I believe that anything is possible, and strive to prove it everyday.<br /> 
        My Vision is a career in Software Systems Engineering. I am working to achieve this through College learning, and <br />
        certifications with: Zend, Microsoft, and Cisco.<br />        
        If you would like to know more about me or would like to speak about a development project, you can find my contact details under the "contact" link above.<br />       
        Have a Wonderful Day, and feel free to check out my portfolio under the link in the menu above.<br />
        ~Joshua F. Helt
    </p>
    </div>
   <div id="lowerBody" align="center">
    <?php
        $this->load->view($subcontent);
    ?>
    </div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>


</body>
</html>