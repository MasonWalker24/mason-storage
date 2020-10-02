<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="primary.css">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Online file storage</title>
</head>
<body>
 <div id="container">
    <h1>Online File Storage</h1>
     
    <fieldset>
        <legend>Add a new file to the storage</legend>
        <form method="post" action="index.php" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
        <p><label for="name">Select file</label><br />
        <input type="file" name="file" /></p>
        <p><label for="password">Password for upload</label><br />
        <input type="password" name="password" /></p>
        <p><input type="submit" name="submit" value="Start upload" /></p>
        </form>   
    </fieldset>
</div>
<fieldset>
    <legend>Previousely uploaded files</legend>
    <ul id="menu">
        <li><a href="">All files</a></li>
        <li><a href="">Documents</a></li>
        <li><a href="">Images</a></li>
        <li><a href="">Applications</a></li>
    </ul>
     
    <ul id="files">
    </ul>
</fieldset>
</body>
</html>
