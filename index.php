<?php
// list all files and folder from dir without file extenstions
$dir = './img';
$filesInDIR = array_diff(scandir($dir), array('.', '..')); 
$files = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filesInDIR);

	foreach($files as $file){
		echo $file. "<br>";
	}
	
	
echo "<hr>";
$dir = "./img";

$files = scandir($dir);
unset($files[array_search('.',$files)]);
unset($files[array_search('..',$files)]);
 
	foreach($files as $key=>$val){ 
		echo  $val."<br/>"; 
	}
	
echo "<pre>";
print_r($filesInDIR);
echo "</pre>"; 
 
if (in_array("image", $files)) {

	foreach($filesInDIR as $file){
		echo "<br>". $file ;
	}

}else
{
	echo "not found";
}
 
 
echo "<hr>";
$compartment = "image";

$files = glob("./img/$compartment.*"); // Will find 2.txt, 2.php, 2.gif

// Process through each file in the list
// and output its extension
if (count($files) > 0)
foreach ($files as $file)
 {
    $info = pathinfo($file);
    echo "File found: extension ".$info["extension"]."<br>";
 }
 else
  echo "No file name exists called $compartment. Regardless of extension."

?>