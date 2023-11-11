<?php 
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<?php include './parts/header.php';?>;

<div class="container">

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">اربح مع...</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <p id="demo"></p>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية...</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
  </div>

  <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر...</li>
  <li class="list-group-item">ساقوم ببث...</li>
  <li class="list-group-item">خلال فترة...</li>
  <li class="list-group-item">بنهاية البث...</li>
  <li class="list-group-item">الرابح سيحصل...</li>
</ul>

<form class="mt-5" action="index.php" method="POST">
    <h3>الرجاء ادخل معلوماتك</h3>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاول</label>
    <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" value="<?php echo $firstname ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" value="<?php echo $lastname ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">البريد</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


<?php foreach($users as $user): ?>
    <h1><?php echo htmlspecialchars($user['firstname']) . ' ' . echo htmlspecialchars($user['lastname']) . '<br>' . echo htmlspecialchars($user['email']) ?></h1>;
<?php endforeach; ?>

<?php include './parts/footer.php';?>;