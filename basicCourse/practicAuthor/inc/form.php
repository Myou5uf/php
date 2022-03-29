 <form class="row g-3 form-authorization" method="post" action="../inc/author.php">
     <div class="col-md-12 ">
         <label for="inputLogin" class="form-label">Логин</label>
         <input type="text" class="form-control" id="inputLogin" name="login" placeholder="Введите логин">
     </div>
     <div class="col-md-12 ">
         <label for="inputPass" class="form-label">Пароль</label>
         <input type="password" class="form-control" id="inputPass" name="pass" placeholder="Введите пароль">
     </div>
     <div class="col-md-12 ">
         <input id="inputRemember" name='remember' type='checkbox' value='1'>
         <label for="inputRemember" class="form-label">Запомнить меня</label>
     </div>
     <div class="col-12 btn-block">
         <button type="submit" class="btn btn-primary">Войти</button>
     </div>
 </form>