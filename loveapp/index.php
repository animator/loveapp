<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LoveApp</title>

<link rel="stylesheet" type="text/css" href="jqtransformplugin/jqtransform.css" />
<link rel="stylesheet" type="text/css" href="formValidator/validationEngine.jquery.css" />
<link rel="stylesheet" type="text/css" href="demo.css" />


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js"></script>
<script type="text/javascript" src="formValidator/jquery.validationEngine.js"></script>

<script type="text/javascript" src="script.js"></script>

</head>

<body>

<div id="main-container">

	<div id="form-container">
    <div align="center"><img border="0" src="img/loveapp.png" alt="LoveApp" width="222" height="67" /></div>
    <h2 align="center">Love has no distance.</h2>
    
    <form id="contact-form" name="contact-form" method="post" action="submit.php">
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr>
        <td width="15%" id="errOffset">&nbsp;</td>
          <td width="15%"><label for="name">Your Name</label></td>
          <td width="70%"><input type="text" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="" /></td>
          <td width="15%" id="errOffset">&nbsp;</td>
        </tr>
             <tr>
             <td width="15%" id="errOffset">&nbsp;</td>
          <td width="15%"><label for="name">Dedicated To</label></td>
          <td width="70%"><input type="text" class="validate[required,custom[onlyLetter]]" name="name1" id="name1" value="" /></td>
          <td width="15%" id="errOffset">&nbsp;</td>
        </tr>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
        <td width="15%" id="errOffset">&nbsp;</td>
          <td valign="top">&nbsp;</td>
          <td colspan="2"><input type="submit" name="button" id="button" value="Submit" />
          <input type="reset" name="button2" id="button2" value="Reset" />
          </td>
        </tr>
      </table>
      </form>
    </div>
	<div class="tutorial-info">	
    Powered by <a href="http://www.facebook.com/aimingbeyondinfinity">Animato</a></div>

</div>

</body>
</html>
