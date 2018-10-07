    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Wello World</title>
    </head>
    <link rel="stylesheet" type="text/css" href="extention.html">


<body>

<form name="form1" enctype="multipart/form-data" method="post" action="spreadsheet.php">


    <p>
        <label>Input File</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="8000000"/>
        <input type="file" name="file"/>
    </p>
    <p>
        <label>Convert To</label>
        <select name="targetFormat">
            <option value="CSV">CSV</option>
            <option value="XLS">XLS</option>
            <option value="XLSX">XLSX</option>
           
        </select>
    </p>
    <input type="submit" name="submit" value="Proceed" />
</form>

</body>
</html>