<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
   foreach ($_REQUEST as $key => $value) {
	
	if (gettype($value)=="array") {
		foreach ($value as $res) {
		echo $res.'<br>';	}
	}else{
		echo $key. $value."<br>";
	}
}
	
} else {
	?>
   <div style="margin: 30px 10%;">
<h3>My form</h3>
<form action="processa_dades.php" method="post" id="myform" name="myform">

    <label>Text</label> <input type="text" value="" size="30" maxlength="100" name="mytext" id="" /><br /><br />

    <input type="radio" name="myradio" value="1" /> First radio
    <input type="radio" checked="checked" name="myradio" value="2" /> Second radio<br /><br />

    <input type="checkbox" name="mycheckbox[]" value="1" /> First checkbox
    <input type="checkbox" checked="checked" name="mycheckbox[]" value="2" /> Second checkbox<br /><br />

    <label>Select ... </label>
    <select name="myselect" id="">
        <optgroup label="group 1">
            <option value="1" selected="selected">item one</option>
        </optgroup>
        <optgroup label="group 2" >
            <option value="2">item two</option>
        </optgroup>
    </select><br /><br />

    <textarea name="mytextarea" id="" rows="3" cols="30">
Text area
    </textarea> <br /><br />

    <button id="mysubmit" type="submit">Submit</button><br /><br />

</form>
</div>
}
