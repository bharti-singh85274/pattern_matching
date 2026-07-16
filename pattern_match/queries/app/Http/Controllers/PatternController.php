<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatternController extends Controller
{
    //
     function heart(){
        
       

		//heart shape

		for($r=0;$r<6;$r++){


		for($c=0;$c<7;$c++)

		{

		if(($r==0 && $c%3!=0) || ($r==1 && $c%3==0) || ($r-$c==2) || ($r+$c==8)){

		echo "*";

		}else{
			echo "&nbsp;&nbsp;";
		}


		}


		echo "<br>";

		}


     }




     function numbers(){

     	for($i=1;$i<11;$i++)        //for row(i)
			{
				for($j=1;$j<$i;$j++)    //for columns(j)
				{
					echo "$j";         //for columnwise
				}

				echo "<br>";
			}

     }
    
    function d(){

    	for($r=0;$r<7;$r++)
			{


			for($c=0;$c<=7;$c++)
			{

			if($c==1 or (($r==0 or $r==6) and($c>1 and $c<5)) or ($c==5 and $r!=0 and $r!=6))

			echo "*";


			else

			echo "&nbsp&nbsp";

			}

			echo "<br>";

			}

       }

   
   function x(){

   	for($r=0;$r<7;$r++)
		{


		for($c=0;$c<=7;$c++)

		{

		if((($c==1 or $c==5)
			and ($r>4 or $r<2))
			or $r==$c and $c>0 and $c<6 or ($c==2 and $r==4)or ($c==4 and $r==2))

		    echo "*";


		else

		    echo "&nbsp&nbsp";

		}

		    echo "<br>";

		}

   }




function y(){


for($r=0;$r<7;$r++)
{

for($c=0;$c<=7;$c++)

{

if((($c==1 or $c==5) and $r<2)
	or $r==$c and $c>0 and $c<4 or ($c==4 and $r==2)
	or (($c==3) and $r>3))

    echo "*";


else

	echo "&nbsp&nbsp";
}

    echo "<br>";
  
}

}


function z(){

	for($r=0;$r<=7;$r++)
		{

		for($c=0;$c<=7;$c++)
		{

		if((($r==0 || $r==6) and $c>=0 && $c<=6) ||  $r+$c==6)


		echo "*";

		else

			echo "&nbsp&nbsp";

		}
		 echo "<br>";

		}
  

  }





function s(){

	for($r=0;$r<7;$r++)
		{


		for($c=0;$c<=7;$c++)
		{

		if((($r==0 or $r==3 or $r==6)
			and $c>1 and $c<5)
			or ($c==1 and ($r==1 or $r==2 or $r==6))
			or($c==5 and ($r==0 or $r==4 or $r==5)))

		        echo "*";

		else

		        echo "&nbsp ";

		}

		        echo "<br>";

		}

}




function q(){

	echo "<pre>";
 
		 for($r=0;$r<11;$r++)
		 {


		for($c=0;$c<=11;$c++)
		{

		   if(($c==1 and $r!=0 and $r!=10)
		   	or ($r==0 and $c>1 and $c<9)
		   	or($c==9 and $r!=0 and $r!=9)
		   	or ($r==10 and $c>1 and $c<8)
		   	 or ($c==$r-1 and $r>5))
		{
			echo "*";
		}
		else{
			echo "&nbsp";
		}


		 }

		echo "<br>";

		}
		echo "</pre>";
		}



function t(){

	for($r=0;$r<6;$r++)
	{


	for($c=0;$c<=7;$c++)
	{

	if($c==3 || ($r==0 && $c>0 && $c<6))
	   echo "*";

	else
		echo "&nbsp";

	}
	  echo "<br>";

	}

	}	



	function f(){

		for($r=0;$r<7;$r++)
			{

			for($c=0;$c<=7;$c++)
			{

			if($c==1 or ($r==0 and $c>1 and $c<4) or ($r==3 and $c>1 and $c<4))
				echo "*";
			else
				echo "&nbsp";
			}
			    echo "<br>";
			}

	}	



	function g(){
      


       for($r=0; $r<7; $r++)
		{

		for($c=0;$c<=7;$c++)
		{

		if(($c==1 and $r!=0 and $r!=6) or (($r==0 or $r==6) and $c>1 and $c<5)

			or($r==3 and $c>2 and $c<6)

			 or($c==5 and $r!=0 and $r!=2 and $r!=6))

		     echo "*";

		else
			 echo "&nbsp&nbsp";


		}

		     echo "<br>";


		}
	}


////////////////////////////////////////////////////  VIDEOS FROM START   ////////////////////////////////////////////////////////


 function part1(){


 	for($i=1; $i<=5; $i++){

 		 for($j=0; $j<$i; $j++){
 		 	echo " *";
 		 }
 		 echo "<br/>";
 	}

 }


function actualvali(){

	for($i=1; $i<=5; $i++){

 		 for($j=0; $j<$i; $j++){
 		 	echo " $i";
 		 }
 		 echo "<br/>";
 	}

}


function actualvalj(){

	for($i=1; $i<=5; $i++){

 		 for($j=1; $j<=$i; $j++){
 		 	echo " $j";
 		 }
 		 echo "<br/>";
 	}

}




function part2(){

	for($i=5; $i>=1; $i--){
      
      for($j=1; $j<=$i; $j++){
      	  echo " * ";
      }
      echo "<br/>";
	}

}

function part2i(){

	for($i=5; $i>=1; $i--){
      
      for($j=1; $j<=$i; $j++){
      	  echo "$i ";
      }
      echo "<br/>";
	}

}

function part2j(){

	for($i=5; $i>=1; $i--){
      
      for($j=1; $j<=$i; $j++){
      	  echo "$j ";
      }
      echo "<br/>";
	}

}



function triangle(){

	$n=4;                        // formula: (2*4)-1  or  (2*$n)-1 

	for($i=1; $i<=$n;$i++){
       
       for($j=1; $j<=(2*$n)-1; $j++){       // (2*$n)-1 

       	  if($j>= $n-($i-1) && $j<= $n+($i-1)){  
       	  	  echo "*";
       	  }else{
       	  	  echo "&nbsp;&nbsp;";
       	  }
       }           
       echo "<br/>";
	}

 }



function name_inc(){


  $str = "bharti";           // increasing order
  $count = strlen($str);

   for($i=0; $i<=$count; $i++){
   	 
   	  for($j=0; $j<$i; $j++){
   	  	  echo "  $str[$j] ";
   	  }

   	  echo "<br>";
   }
   
}


function name_dec(){

	$str = "bharti";
	$count = strlen($str);

    for($i=$count; $i>=0; $i--){
    	
    	for($j=0; $j<$i;$j++){
    		echo " $str[$j]";
    	}

    	echo "<br>";
    }
    

}


function ex(){

	$n = 4;

	for($i=0; $i<=$n; $i++){
		for($j=1; $j<=$n; $j++){
			if($j==$i || $i+$j == $n+1){
                echo " * ";
			}else{
				echo "&nbsp;&nbsp;&nbsp;";
			}
           
		}
		 echo "<br>";

	}

	
}





function diamond(){

	$n=4;                        // formula: (2*4)-1  or  (2*$n)-1 

	for($i=1; $i<=$n;$i++){
       
       for($j=1; $j<=(2*$n)-1; $j++){       // (2*$n)-1 

       	  if($j>= $n-($i-1) && $j<= $n+($i-1)){  
       	  	  echo "*";
       	  }else{
       	  	  echo "&nbsp;&nbsp;";
       	  }
       }           
       echo "<br/>";
	}

	for($i=4; $i>=0;$i--){
       
       for($j=1; $j<=(2*$n)-1; $j++){       // (2*$n)-1 

       	  if($j>= $n-($i-1) && $j<= $n+($i-1)){  
       	  	  echo "*";
       	  }else{
       	  	  echo "&nbsp;&nbsp;";
       	  }
       }           
       echo "<br/>";
	}


}



 
 function rectangle(){

   $n=5;

    for($i=1; $i<=$n; $i++){

      for($j=1; $j<=$n; $j++){
      	  if($i ==1 || $i==5){
                echo " * ";
      	  }else{
      	  	if($j==1 || $j ==5){
               echo " * ";
      	  	 
      	  	}
      	  	 echo "&nbsp;&nbsp;";
      	  }
        
      }
        echo "<br>";
    }

 }

                              


 ////////////////////////////////////////////////////////   PRACTICE  CODE ////////////////////////////////////////////////////////////////////

function myheart(){


 
                  
	 for ($i=1; $i<=5; $i++) {  
               
	 	for($j=0;$j<5; $j++){  
	 		if(($i==1 && $j==2) || ($i==2 && $j==1) || ($i==2 && $j==3) ){
	 			
	 			echo "&nbsp;&nbsp;&nbsp;";
	 		}else if(($i==3 && $j==1) || ($i==3 && $j==3) || ($i==3 && $j==2)  || ($i==4 && $j==2) || ($i==4 && $j==3) || ($i==4 && $j==0) || ($i==5 && $j==4) ||($i==5 && $j==3) || ($i==5 && $j==1) || ($i==5 && $j==0)){
	 			
                echo "&nbsp;&nbsp;";

	 		}else{
                  echo "*";   
	 		}
          
	 	}
	     echo "<br>";	
	 }
	
}


 function myx(){

 	for ($i=1; $i<=5; $i++) { 
 		for($j=1; $j<=5;$j++){
 			if(($i==1 && $j==2) || ($i==1 && $j==3) || ($i==1 && $j==4)){
 				echo "&nbsp;&nbsp";
 			}
            else if(($i==2 && $j==3) || ($i==2 && $j==4) || ($i==2 && $j==1) || ($i==3 && $j==5) || ($i==3 && $j==3) || ($i==3 && $j==2)|| ($i==3 && $j==1)
                  || ($i==4 && $j==1) || ($i==4 && $j==3) || ($i==4 && $j==5) || ($i==5 && $j==2)|| ($i==5 && $j==3)|| ($i==5 && $j==4)){
                echo "&nbsp";
            }
 			else{
 				echo "*";
 			}
          
 		}
 	   echo "<br>";
 	}
 	
 }




 function tri(){
    
    for($i=1; $i<=4; $i++){
    	for($j=0; $j<=6; $j++){
    		if(($i==1 && $j !=5) || ($i==2 && $j==0) || ($i==2 && $j==1) || ($i==2 && $j==3) || ($i==2 && $j==4) || ($i==2 && $j==5) ){
             echo "&nbsp";
    		}
           else if(($i==3 && $j==1) || ($i==3 && $j==2) || ($i==3 && $j==3)|| ($i==3 && $j==4)|| ($i==3 && $j==6)|| ($i==4 && $j==6)){
                 echo "&nbsp;&nbsp;";
           }else{
    		
    			echo "*";
    		}
    	}
           echo "<br>";     
    }

  
 }




 function myname(){

 	 $str = "bharti";
 	 $count = strlen($str);
    
     for($i=$count; $i>=0; $i--){
     	for($j=0; $j<$i; $j++){
     		echo "$str[$j]";
     	}
     	echo "<br>";
     }

 }


function myy(){

	$n =4;
	for($i=0; $i<=$n; $i++){
		for($j=0; $j<=4; $j++){
			if(($i==0 && $j==1) || ($i==0 && $j==2) || ($i==0 && $j==3) || ($i==1 && $j==0) || ($i==1 && $j==4)|| ($i==1 && $j==2)
		   || ($i==2 && $j==0) || ($i==2 && $j==1)|| ($i==2 && $j==3) || ($i==2 && $j==4) || ($i==3 && $j==0)|| ($i==3 && $j==1)
		   || ($i==3 && $j==3) || ($i==3 && $j==4) || ($i==4 && $j==0) || ($i==4 && $j==1)|| ($i==4 && $j==3) || ($i==4 && $j==4)){
              echo "&nbsp;&nbsp";
			}else{
				echo "*";
			}
			
		}
		echo "<br>";
	}
}


function myz(){
	$n =3;

	for($i=0; $i<=$n; $i++){
		for($j=0; $j<=4; $j++){
			 if(($i==1 && $j==0) || ($i==1 && $j==1) || ($i==1 && $j==2) || ($i==1 && $j==3) || ($i==2 && $j==0) || ($i==2 && $j==2)|| ($i==2 && $j==3)
			 	|| ($i==2 && $j==4)){
                  echo "&nbsp";
			 }else{
			 	 echo "*";
			 }
			
		}

		echo "<br>";
	}
}


function myt(){

	for($i=0; $i<=3; $i++){
		for($j=0; $j<=4; $j++){
			if(($i==1 && $j==0) ||  ($i==1 && $j==1) || ($i==1 && $j==3) || ($i==1 && $j==4) ||
		          ($i==2 && $j==0) ||  ($i==2 && $j==1) || ($i==2 && $j==3) || ($i==2 && $j==4)  ||
		             ($i==3 && $j==0) ||  ($i==3 && $j==1) || ($i==3 && $j==3) || ($i==3 && $j==4)){
                echo "&nbsp;&nbsp;";
			}else{
				echo "*";
			}
			
		}

		echo "<br>";
	}
}


function myf(){
	for($i=0; $i<=3; $i++){
		for($j=0; $j<=4; $j++){
			if(($i==2 && $j==1) || ($i==2 && $j==2) || ($i==2 && $j==3) || ($i==2 && $j==4) ||
		        ($i==3 && $j==1) || ($i==3 && $j==2) || ($i==3 && $j==3) || ($i==3 && $j==4)){
                 echo "&nbsp;";
			}else{
				echo "*";
			}
			
		}
		echo "<br>";
	}
}


function myo(){
	for($i=0; $i<=3;$i++){
		for($j=0; $j<=4; $j++){
			  if(($i==1 && $j==1) || ($i==1 && $j==2) || ($i==1 && $j==3) ||
			      ($i==2 && $j==1) || ($i==2 && $j==2) || ($i==2 && $j==3)){
                  	echo "&nbsp;&nbsp;";
			  }else{
			  	echo "*";
			  }
		
		}
		echo "<br>";
	}
}



function dummy(){

  $n=4;
	for($i=4;$i>=0;$i--){
		 for($j=0;$j<= 2*($n-1);$j++){
		 	 if($j>= $n-($i-1) && $j<= $n+($i-1)){
                 echo "*";
		 	 }else{
		 	 	 echo "&nbsp;";
		 	 }
		 	 
		   }

		 echo "<br>";
	}
}



function mydiamond(){
    $n=4;
	for($i=1;$i<=$n;$i++){
		 for($j=0;$j<= 2*($n-1);$j++){
		 	 if($j>= $n-($i-1) && $j<= $n+($i-1)){
                 echo "*";
		 	 }else{
		 	 	 echo "&nbsp;";
		 	 }
		 	 
		   }

		 echo "<br>";
	}


	for($i=4;$i>=0;$i--){
		 for($j=0;$j<= 2*($n-1);$j++){
		 	 if($j>= $n-($i-1) && $j<= $n+($i-1)){
                 echo "*";
		 	 }else{
		 	 	 echo "&nbsp;";
		 	 }
		 	 
		   }

		 echo "<br>";
	}

}





}
