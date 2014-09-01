<!DOCTYPE html>

<html lang="he" dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title;  ?></title>

        <style>
            
            body {
                
               font-family: Arial; 
                
                
            }
            
            
           nav ul  {
                
             list-style-type: none;
             margin: 0;
             padding: 0;
                
            }
            
           nav li {
                
            display: inline;
            padding: 20px;
            font-weight: bold;
            
            }
            
            nav a {
                
            text-decoration: none;
            
            }
            
            input[type="text"], input[type="password"] {
              display: block;
              margin: 0;
              width: 15%;
              box-shadow: 1px;
              border-radius: 20px;
            }

            
            
        </style>
    </head>
    <body>


        <div>
        
      <nav>
     
      
          <ul>
              <li><a href="<?php echo base_url();?>">דף הבית</a></li>
              <li><a href="<?php echo base_url();?>/about/">אודות האתר</a></li>
             <li><a href="<?php echo base_url();?>/products/">מוצרים</a></li>
              <li><a href="<?php echo base_url();?>/user/login/">התחבר/התנתק</a></li>
              <li><a href="<?php echo base_url();?>/user/register/">הרשמה</a></li>
      
        </ul>
      
      </nav>
        
        </div>
        

