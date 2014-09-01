        
<h1>משתמשים</h1>


<ul>
              <li><a href="<?php echo base_url();?>/user/login/">התחבר/התנתק</a></li>
              <li><a href="<?php echo base_url();?>/user/register/">הרשמה</a></li>
              <li><a href="<?php echo base_url();?>/user/reset_password/">שכחתי סיסמה</a></li>
      
        </ul>
<div id="validationError" style="background:#d0d0d0;width:100%;float:left;height:25px;float:left">
<?php echo validation_errors()."&nbsp;askasl"; ?>
</div>
<?= form_open(base_url() . 'user/' . $action . '/'); ?>

<?php if($action == 'login'): ?>
  <label>Email: </label> <input type="text" name="email" size="20" /><br/>
  <label>Password: </label> <input type="password" name="password" size="20" /><br/> 
  <input type="submit" name="submit" value="Login" />
<?php endif; ?>


<?php if ($action == 'register'): ?>

<h2> הירשם למערכת </h2>
<label>שם מלא: </label> <input type="text" name="name" id="name"><br>
<label>כתובת מייל: </label> <input type="text" name="email" id="email"><br>
<label>בחר סיסמה: </label> <input type="password" name="password" id="password"><br>
<label>חזור שוב על הסיסמה </label> <input type="password" name="password2" id="password2"><br>
<input type="submit" value="הירשם">

<?php endif; ?>


<?php if ($action == 'reset_password'): ?>

<h2> שכחתי סיסמה </h2>
<label>כתובת מייל: </label> <input type="text" name="email" id="email"><br>
<input type="submit" value="אפס סיסמה">

<?php endif; ?>
<?php echo  form_close(); ?>
