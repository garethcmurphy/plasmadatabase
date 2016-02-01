<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-
8859-1" />

<div align="center">
<img src="plasma_logo.gif">
</div>


<title>Plasma Shock Search Engine</title>





<link href="default.css" rel="stylesheet" type="text/css" media="screen" />

<script language="javascript" type="text/javascript">

window.onload=function(){

if(document.getElementById&&document.
getElementsByTagName&&document.createElement){

var sfield=document.getElementsByTagName(‘form’)[0].elements[0];

if(!sfield){return};

sfield.onfocus=function(){this.value=”};

sfield.onblur=function(){

if(!this.value){this.value=’Lampe’};

}

}

}

</script>

</head>

<body>


<div class="navigation" align="center">
    <table>
        <tr>
            <td><a href="index.html">Home</a></td>
            <td>&nbsp;</td>
            <td><a href="about.html">search</a></td>
            <td>&nbsp;</td>
            <td><a href="sort2.php">browse</a></td>
            <td>&nbsp;</td>
            <td><a href="modelling.html">modelling</a></td>
            <td>&nbsp;</td>
            <td><a href="contact.php">contact</a></td>
        </tr>
    </table>
</div>
<div class="maincontainer" >

<div class="boxed" align="center">
<form method="get" action="processform.php">

Reference
<input type="text" name="searchterm" title="Enter your search
term here" value="Lampe"
class="searchbox" />

<br>
Minimum Lorentz factor
<input type="number" name="minrange" title="Enter your search
term here" value="2.0"
class="searchbox" />

<br>
Maximum Lorentz factor
<input type="number" name="maxrange" title="Enter your search
term here" value="10.0"
class="searchbox" />

<input type="submit" name="search" title="Search Now!
"value="Query" class="searchbutton" />

</form>
</div>

</div>

</body>

</html>
