// JavaScript Document

function dropdownmenu(field1,field2)
{
 document.getElementById(field1).style.backgroundColor="#024A85";
 document.getElementById(field2).style.display="block";	
}

function dropdownmenuout(field1,field2)
{
 document.getElementById(field1).style.backgroundColor="";
 document.getElementById(field2).style.display="none";	
}
function menuover(field1,field2)
{
 document.getElementById(field1).style.backgroundColor="#024A85";
 document.getElementById(field2).style.display="block";	
}
function menuout(field1,field2)
{
 document.getElementById(field1).style.backgroundColor="";
 document.getElementById(field2).style.display="none";	
}
function menuover1(field1,field2)
{
 document.getElementById(field1).style.backgroundColor="#02335E";
 document.getElementById(field2).style.display="block";	
}
function menuout1(field1,field2)
{
 document.getElementById(field1).style.backgroundColor="";
 document.getElementById(field2).style.display="none";	
}
function subMenuOver(field1,field2,field3,field4)
{
 document.getElementById(field1).style.backgroundColor="#024A85";
 document.getElementById(field3).style.backgroundColor="#02335E";
 document.getElementById(field2).style.display="block";
 document.getElementById(field4).style.display="block";
}
function subMenuOut(field1,field2,field3,field4)
{
 document.getElementById(field1).style.backgroundColor="";
 document.getElementById(field3).style.backgroundColor="";
 document.getElementById(field2).style.display="none";	
 document.getElementById(field4).style.display="none";
}
