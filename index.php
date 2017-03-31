
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Facebook Reactions</title>
<meta name="keywords" http-equiv="keywords" content="" /> 
<meta name="description" http-equiv="description" content="" /> 

<script src="jquery-2.1.4.js"></script>
<script src="jquery-ui_1.12.1_.min.js"></script>
<script src="facebook-reactions.js"></script>
<link rel="stylesheet" href="stylesheet.css">
<script>
$(document).ready(function() {

	$('.FB_reactions').facebookReactions({

		//postUrl: "save.php"
	});
});
</script>


<style>
<!-- demo css -->
button.warning, a.btn.warning, input[type="submit"].warning {
border: 1px solid #9C5E09;
background: #FBA633;
background: -moz-linear-gradient(top, #FBA633, #DC840E) no-repeat scroll 0 0 transparent;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FBA633), color-stop(1, #DC840E)) no-repeat scroll 0 0 transparent;
border-image: initial;
}
button, a.btn, input[type="submit"] {
-webkit-transition: -webkit-box-shadow 0.05s ease-out;
display: inline-block;
cursor: pointer;
color: white;
text-shadow: 0 -1px rgba(0, 0, 0, 0.45);
-moz-border-radius: 8px;
-webkit-border-radius: 8px;
border-radius: 8px;
background: #009BB8;
background: -moz-linear-gradient(top, #009BB8, #00778D) no-repeat scroll 0 0 transparent;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #009BB8), color-stop(1, #00778D)) no-repeat scroll 0 0 transparent;
box-shadow: 0 1px 0 rgba(255, 255, 255, 0.45) inset;
-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.45) inset;
-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.45) inset;
border: 1px solid #004754;
padding: 6px 14px;
font-size: 14px;
border-image: initial;
}
#bottomcr a{ color:#A2A2A2; font-size:11px; text-decoration:none}
#bottom a {
color: #900;
font-size:12px;
text-decoration: none;
}
#bottoms a,#bottoms {
color:#C00;
font-weight:bold;
font-size:12px;
}

body, input, textarea {
font: 14px/24px Helvetica, Arial, sans-serif;
}
h1, h2, h3, h4, h5, h6 { margin: 0; padding: 0; color: #444; font-family:Helvetica, Arial, sans-serif;  }
.pkg{ float:left; margin-right:15px; }
#outer { width: 750px; margin: 0 auto; margin-top: 10px; margin-bottom: 10px; background: #fff; padding: 10px; border: 10px solid #f2f2f2; }
 pre code{
    display: inline;
    max-width: auto;
    padding: 0;
    margin: 0;
    overflow: visible;
    line-height: inherit;
    word-wrap: normal;
    background-color: transparent;
    border: 0;
}
 pre {
    padding: 16px;
    overflow: auto;
    font-size: 85%;
    line-height: 1.45;
    background-color: #f6f8fa;
    border-radius: 3px;
}
</style>

</head>
<body>
<br />

<div align="center">

<h2>Facebook Style Reactions Plugin</h2>

    <div id="outer" style="padding:10px 20px;">


    <br /><br /><br />
    
    
    
    <div style="" align="left">
    	
        <h4>Horizontal Style</h4>
        
        <a class="FB_reactions" data-reactions-type='horizontal' data-unique-id="1" data-emoji-class="">
            <span style="">Like</span>
        </a>
        <pre><code>&lt;a class=&quot;FB_reactions&quot; data-reactions-type='horizontal' data-unique-id=&quot;1&quot; data-emoji-class=&quot;&quot;&gt;
    &lt;span&gt;Like&lt;/span&gt;<br />&lt;/a&gt;
            </code></pre>
        
    <br>

        <h4>Vertical Style</h4>
        
        <a class="FB_reactions" data-reactions-type='vertical' data-unique-id="2" data-emoji-class="">
            <span>Like</span>
        </a>
        <pre><code>&lt;a class=&quot;FB_reactions&quot; data-reactions-type='vertical' data-unique-id=&quot;2&quot; data-emoji-class=&quot;&quot;&gt;
    &lt;span&gt;Like&lt;/span&gt;<br />&lt;/a&gt;
            </code></pre>
      <br>

      <h4>Default Selected Reaction</h4>
         <a class="FB_reactions" data-reactions-type='horizontal' data-unique-id="3" data-emoji-class="love">
            <span>Love</span>
        </a>
        <pre><code>&lt;a class=&quot;FB_reactions&quot; data-reactions-type='vertical' data-unique-id=&quot;3&quot; data-emoji-class=&quot;love&quot;&gt;
    &lt;span&gt;Love&lt;/span&gt;<br />&lt;/a&gt;
            </code></pre>
        <br>
        
        
        
        
        
    </div>
    

    
    </div>
    
    
    
    
    <br clear="all" />

    <a href="http://www.99points.info/2012/02/zslider-a-beautiful-jquery-image-slider/" target="_blank"><button type="">&lt;&lt; Back to Tutorial</button></a>

	<br clear="all" />
	
    <br clear="all" /></div>

<!-- footer-->
<div align="center" id="bottom"><a href="http://www.99points.info/">Tutorials</a> | <a href="http://www.99points.info/category/facebook/">Facebook</a> | <a href="http://www.99points.info/tag/wall-script/">Wall Script</a> | <a href="http://www.99points.info/category/web-development/jquery/">JQuery</a> | <a href="http://www.99points.info/category/web-development/ajax/">Ajax</a> | <a href="http://www.99points.info/category/codeigniter/">Codeigniter</a> | <a href="http://www.99points.info/category/wordpress/">WordPress</a> | <a href="http://www.99points.info/tag/jquery-gallery/">Gallery</a></div>
<div align="center" style="color:#ccc" id="bottomcr" style="font-size:9px"> <a href="http://www.99points.info" target="_blank">Developed</a> | <a href="http://www.99points.info" target="_blank">99Points</a> | <a href="http://premiumpixels.com" target="_blank" rel="nofollow">Design</a> | <a href="http://www.flickr.com/photos/markjsebastian/sets/72157594232728012/" target="_blank" title="Images Source" rel="nofollow">Mark Sebastian</a></div>

</body>
</html>