



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Spreadsheet Cloud API Example</title>
    </head>
    

<body>

<form name="form1" enctype="multipart/form-data" method="post" action="spreadsheet.php">
    <p>
        <label>Copy-paste your API Key for Bytescout.IO here</label>
        <input type="text" name="apiKey" placeholder="API Key"/>
    </p>
    <p>
        <label>Input File</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="8000000"/>
        <input type="file" name="file"/>
    </p>
    <p>
        <label>Convert To</label>
        <select name="targetFormat">
            <option value="CSV">CSV</option>
            <option value="HTML">HTML</option>
            <option value="TXT">TXT</option>
            <option value="XLS">XLS</option>
            <option value="XLSX">XLSX</option>
            <option value="XML">XML</option>
            <option value="PDF">PDF</option>
        </select>
    </p>
    <input type="submit" name="submit" value="Proceed" />
</form>

</body>
</html>