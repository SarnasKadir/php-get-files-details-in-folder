<?php
// this function lists all images with info.
function imginfo(){
$dir = "./img";
	if(is_dir($dir)){
		$files=scandir($dir);
		unset($files[array_search('.',$files)]);
		unset($files[array_search('..',$files)]);
	  
		foreach($files as $key=>$val){
			echo "<p style='border:1px solid silver; margin:1px; padding:20px;'>";
			echo "Name: ". $val."<br/>\n";        
			$img_size_array = getimagesize(rtrim($dir,'\/')."/".$val);
			echo "byte: ". filesize(rtrim($dir,'\/')."/".$val). "<br>";
			echo "width: ".$img_size_array[0]."px<br>";
			echo "height: ".$img_size_array[0]."px<br>";	 
			echo "<img style='width:50px; height:50px; margin:20px;' src=\"".rtrim($dir,'\/')."/".$val."\"/><br/><br/>";		
			echo "</p>";
		}
	}else{
		echo "(".$dir.") does not exist or is not a valid directory";
	}
}
?>