<?php
$str=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<BookInfo>
	<book>
	    <bookno> 1 </bookno> 
            <bookname> JAVA </bookname>
	    <authorname> Balguru Swami </authorname> 
            <price> 250 </price>
	    <year> 2006 </year>
	</book>
       
       <book>
	    <bookno> 2 </bookno> 
            <bookname> C </bookname>
	    <authorname> Denis Ritchey </authorname> 
            <price> 500 </price>
	    <year> 1971 </year>
	</book>
</BookInfo>

XML;
    $fname="book.xml";
    $fp=fopen($fname,"w");
    fwrite($fp,$str);
    fclose($fp);
    echo "created filename is:".$fname;
?>	    