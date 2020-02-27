 	 var filename=document.getElementById("fileLogo").value;  //Read the file name
  	var flag = 0;
  	if(filename != '')
  	{
     var imagelowercase  = filename.toLowerCase();
     var imagelength 	  = imagelowercase.length;
     var lastdot 		    = imagelowercase.lastIndexOf(".");       // If image hast more than 2 dots, will consider the last dot
     var ext 			      = imagelowercase.substring(lastdot,imagelength);  //Will find extension

    if(ext!='.jpg' && ext!='.png' && ext!='.bmp' && ext!='.gif' && ext!='.jpeg')
    {
		   flag=1;
    }
}

	if(flag ==1)
    		return false;
