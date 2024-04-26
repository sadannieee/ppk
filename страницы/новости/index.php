<head>
      <?php
          $title = 'Новости ППК'; 
      ?>
</head>
        <?php require '../../includes/header.php'; ?>
        <?php require '../../includes/vk.php'; ?>

        <main class="container">
        <div class="row row-cols-3 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <div class="col-auto d-none d-lg-block">
          <img src="../../assets/images/practice.jpg" width="360" height="250">
        </div>
            <div class="card-body">
              <p class="card-text">Практика (профессиональные пробы)</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="практика/index.php" type="button" class="btn btn-sm btn-outline-secondary">Подробнее...</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <div class="col-auto d-none d-lg-block">
          <img src="../../assets/images/achievments.jpg" width="360" height="250">
        </div>
            <div class="card-body">
              <p class="card-text">Наши достижения</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="достижения/index.php" type="button" class="btn btn-sm btn-outline-secondary">Подробнее...</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <div class="col-auto d-none d-lg-block">
          <img src="../../assets/images/volounteer.jpg" width="360" height="250">
        </div>
            <div class="card-body">
              <p class="card-text">Вожатый-волонтер</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="волонтерство/index.php" type="button" class="btn btn-sm btn-outline-secondary">Подробнее...</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>