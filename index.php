<?php
include './inc/db.php';
include './inc/form.php';


    $sql = 'SELECT * FROM users ORDER BY RAND() LIMIT 1 ';
   $result = mysqli_query($conn, $sql);
   $users = mysqli_fetch_all($result, MYSQLI_ASSOC);


    
        
    mysqli_free_result($result);
    mysqli_close($conn);
    


?>



<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.rtl.min.css" >
    <link rel="stylesheet" href="Style.css">
    <title>Document</title>
</head>
<body>




<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-auto">
      <img src="images11.jpeg" alt="">
      <h1 class="display-4 fw-normal">اربح مع محمد</h1>
      
      <p class="lead fw-normal">باقي على فتح التسجيل</h3>
      <h3 id="countdown"></p>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من البرنامج</p>
      
      
    </div>
  <div class="container">
    <h3>للدخول في السحب اتبع ما يلي</h3>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع حسابي على تويتر لمعرفة كل جديد للسحب</li>
  
  <li class="list-group-item">صفحة التسجيل هنا قم بتسجيل اسمك و ايميلك الشخصي</li>
  <li class="list-group-item">السحب سيكون عشوائي من قاعدة البيانات</li>
  <li class="list-group-item">الفائز سيحصل على نسخة مجانية من البرنامج</li>
</ul>


  </div>
  </div>
  <div class="container">
  


<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form  action="index.php" method="POST">
    <h3>الرجاء ادخل معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" id="firstName" class="form-control"  value="" >
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" id="lastName" class="form-control"  value="" >
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد</label>
    <input type="text" name="email" id="email" class="form-control"  value="" >
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>
  
  
  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>
</div>




    
  
</div>

 
<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-3 mx-auto my-5">   
<button type="button" id="winner" class="btn btn-primary" >
  اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $users): ?> 
        <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($users['firstName']) . ' '. htmlspecialchars($users['lastName']) . '<br> '; ?></h1>
        <?php  endforeach;  ?>
      </div>
      
      </div>
    </div>
  </div>
</div>








    


 
<script src="bootstrap.bundle.min.js"></script>
<script src="loadeer.js"></script>
<script src="mohammd.js"></script>
</body>

</html>