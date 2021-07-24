<?php 
phpinfo();
//1 code for zip
//-*****************************
//1.1 for all file of root folder
//exec('zip -r http_match_modified().zip *');

//1.2
exec('zip -r backup.zip ./*');

//1.3
// exec("unzip final.zip -d ./");

//Download 
//exec("wget http://crossfitmodiin.drcoders.com/cross.zip");


//http://www.w3bees.com/2013/09/download-file-from-remote-server-with.html


//Following command to Permission all current directory file
//    exec("chmod -R 0644 *");


// If you want to permission specific folder 
//exec("chmod -R 755 babyk");   // where abc is folder name ex. exec("chmod -R 755 FOLDERNAME");

?>