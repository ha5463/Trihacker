<?php
    if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $char = '.';
      $exploded = explode('.',$_FILES['image']['name']);
      $last_element = end($exploded);
      $file_ext=strtolower($last_element);
      }
      $question = $_POST['number'];
      $expensions= array("txt");
      $_POST['question'] = 4;
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 100097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         echo "Success";
         echo $file_name;
         echo $question;
         $input = 'out'.$question.'.txt';
         echo $input;
          $ah = fopen("uploads/$file_name", 'rb');
          $bh = fopen("4/$input", 'rb') or die(header('location:sorry.php'));
          if(!$bh)
          {
            header('location:sorry.php');
          }
          $result = true;
            while(!feof($ah))
         {
                  if(fread($ah, 8192) != fread($bh, 8192))
                {
                  $result = false;
                  break;
                }
              }

                 fclose($ah);
                 fclose($bh);
         if($result == true)
         {
            print 'They are same';
            $_POST['correct'] = 1;
          // header('location:success.php');
         }
         else {
            print 'not same';
            $_POST['correct'] = 0;
            //header('location:failure.php');
         }
      }else{
         print_r($errors);
      }
   
?>