<?php

/** @var yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="icon" href="img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src=""></script>
   	<!-- Fonts and icons -->
	<script src=""></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="">
    <?php $this->head() ?>
  </head>

  <body class="login">


    <?php $this->beginBody() ?>
    <div class="wrapper wrapper-login wrapper-login-full p-0">
      <div
        class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center bg-secondary-gradient">
        <h1 class="title fw-bold text-white mb-3">Wuy 1 tahun target 100 juta</h1>
        <p class="subtitle text-white op-7">Bismillah Allahusoliala saidina Muhammad</p>
      </div>

      <div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
        <div class="container container-login container-transparent animated fadeIn">
          <h3 class="text-center">Silakan masuk Admin</h3>
          <div class="login-form">

            <?= $content ?>

          </div>
        </div>
      </div>
    </div>

    <?php $this->endBody() ?>
  </body>
	<!--   Core JS Files   -->
	<script src=""></script>
	<script src=""></script>
	<script src=""></script>
	<!-- jQuery UI -->
	<script src=""></script>
	<script src=""></script>
	<!-- Bootstrap Toggle -->
	<script src=""></script>
	<!-- jQuery Scrollbar -->
	<script src=""></script>
	<!-- Datatables -->
	<script src=""></script>
	<!-- Atlantis JS -->
	<script src=""></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src=""></script>
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>

</html>
<?php $this->endPage();
