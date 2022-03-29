 <?php include('db.php'); ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Тестовое задание</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="assets/css/style.css" rel="stylesheet">
 </head>

 <body>
     <header>
         <h1>Тестовое задание</h1>
     </header>
     <main>
         <div class="container">
             <div class="row">
                 <div class="col-xs-12">
                     <ul>
                         <?php
                            $link = connect_db();
                            $chapters = select_db($link, 'chapter');
                            $tree = getTree($chapters);
                            echo "<pre>";
                            print_r($tree);
                            echo "</pre>";

                            //Получаем HTML разметку
                            $menu = showCat($tree);

                            echo $menu;
                            ?>
                     </ul>
                 </div>
             </div>
         </div>
         <div class="form">
             <div class="container">
                 <div class="row">
                     <div class="col-xs-12">
                         <!-- Button trigger modal -->
                         <button class="btn"><i class="fa-solid fa-plus"></i></button>
                         <form action="foo.php" method="post">
                             <div class="form-group">
                                 <label class="form-label">Добавить новый раздел</label>
                                 <input type="text" class="form-control" id="name" name="name" placeholder="Введите название раздела" required>
                             </div>
                             <div class="form-group">
                                 <label class="form-label">Описание</label>
                                 <input type="text" class="form-control" id="description" name="description" placeholder="Введите описание раздела" required>
                             </div>
                             <div class="form-group">
                                 <button type="submit" class="btn">Добавить</button>
                             </div>
                         </form>
                     </div>

                 </div>
             </div>
         </div>
     </main>
     <footer>

     </footer>
     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Новый раздел</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <div class="form-group">
                         <label class="form-label">Добавить новый раздел</label>
                         <input type="text" class="form-control" id="name" name="name" placeholder="Введите название раздела" required value="">
                     </div>
                     <div class="form-group">
                         <label class="form-label">Описание</label>
                         <input type="text" class="form-control" id="description" name="description" placeholder="Введите описание раздела" required value="">
                     </div>
                     <div class="form-group">
                         <label class="form-label">Родительский элемент</label>
                         <!-- <input type="text" class="form-control" id="id_parent" name="id_parent" placeholder="ID родительского элемента"> -->
                         <select class="form-select" aria-label="Default select example">
                             <?php

                                ?>

                             <option selected>Open this select menu</option>
                             <option value="1">One</option>
                             <option value="2">Two</option>
                             <option value="3">Three</option>
                         </select>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отменить</button>
                     <button type="submit" class="btn btn-primary btn-add">Добавить</button>
                 </div>
             </div>
         </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
     <script src="https://kit.fontawesome.com/76d6d1f47a.js" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 </body>

 </html>