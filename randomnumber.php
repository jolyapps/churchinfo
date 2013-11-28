  <?php  

   //Generating the Code Here
                          $Alpha = Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
                          $Num = array(0,1,2,3,4,5,6,7,8,9);
                          
                          $Checker = False;
                          
                          
                            do {//Generatin Here
                          for($i= 0; $i < 3; $i++){
                             $Randomizer=rand(0,25);
                             $Selected_Alpa = $Alpha[$Randomizer];
                             $Kepper = $Kepper . $Selected_Alpa;
                          
                          
                          }
                          
                          
                           for($i= 0; $i < 3; $i++){
                             $Randomizer=rand(0,9);
                             $Selected_Num = $Num[$Randomizer];
                             $Kepper = $Kepper . $Selected_Num;
                       }
 }
echo '$Kepper' ;
 

?>
                          