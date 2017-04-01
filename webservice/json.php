<?php
include 'http://search.worldbank.org/api/v2/projects?format=json&fl=id&source=IBRD';
$query = mysql_query("SELECT * FROM projects ORDER BY id desc");
$json  = '{"json": [';

// bikin looping dech array yang di fetch
while ($row = mysql_fetch_array ($query)) {

//tanda kutip dua (") tidak diijinkan oleh string json, maka akan kita replace dengan karakter `
//strip_tag berfungsi untuk menghilangkan tag-tag html pada string  

$char = '"';

$json .= '{"id":"'.$row['id'].'","project_name":"'.str_replace($char,'`',strip_tags($row['project_name'])).'","gambar":"http://10.0.3.2/lokomedia/foto_berita/small_'.$row['gambar'].'"},';
}

// buat menghilangkan koma diakhir array
$json = substr($json,0,strlen($json)-1);

$json .= ']}';

// print json
echo $json;

?>
