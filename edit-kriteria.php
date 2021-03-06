<?php
	session_start();
	include('configdb.php');
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title><?php echo $_SESSION['judul'];?></title>
	
    <!-- Bootstrap core CSS -->
    <!--link href="ui/css/bootstrap.css" rel="stylesheet"-->
	<link href="ui/css/cerulean.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="ui/css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--script src="./index_files/ie-emulation-modes-warning.js"></script-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
	<!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $_SESSION['judul'];?></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="kriteria.php">Data Kriteria</a></li>
              <li><a href="alternatif.php">Data Alternatif</a></li>
              <li><a href="perhitungan.php">Perhitungan</a></li>
			</ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
		<div class="container">
						<?php
									$result = $mysqli->query("select * from kriteria where id_kriteria = ".$_GET['id']."");
									if(!$result){
										echo $mysqli->connect_errno." - ".$mysqli->connect_error;
										exit();
									}
									while($row = $result->fetch_assoc()){
						?>
		  <div class="panel-body">
							<form role="form" method="post" action="edit-k.php?id=<?php echo $_GET['id'];?>">
                                    <div class="box-body">
                                        <div class="form-group">
                                        <center><font size="6">Edit Kriteria</font></center>
                                          <br>
                                          <br>
                                            <label for="kriteria">Kriteria</label>
                                            <input type="text" class="form-control" name="kriteria" id="kriteria" value="<?php echo $row["kriteria"];?>" placeholder="Kriteria">
                                        </div>
                                        <div class="form-group">
                                            <label for="kepentingan">Bobot</label>
											<select class="form-control" name="kepentingan" id="kepentingan">
												<option value='5' <?php if($row["kepentingan"]=='5') echo "selected"?>>5</option>
												<option value='4' <?php if($row["kepentingan"]=='4') echo "selected"?>>4</option>
												<option value='3' <?php if($row["kepentingan"]=='3') echo "selected"?>>3</option>
												<option value='2' <?php if($row["kepentingan"]=='2') echo "selected"?>>2</option>
												<option value='1' <?php if($row["kepentingan"]=='1') echo "selected"?>>1</option>
											</select>
                                        </div>
										<div class="form-group">
                                            <label for="cost_benefit">Cost / Benefit</label>
                                            <select class="form-control" name="cost_benefit" id="cost_benefit">
												<option value='cost' <?php if($row["cost_benefit"]=='cost') echo "selected"?>>Cost</option>
												<option value='benefit' <?php if($row["cost_benefit"]=='benefit') echo "selected"?>>Benefit</option>
											</select>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
										<button type="reset" class="btn btn-info">Reset</button>
										<a href="kriteria.php" type="cancel" class="btn btn-warning">Batal</a>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                            </form>
							<?php
									}
							?>
		  </div>
		  <!-- footer content -->
      <center>
    <footer>
      <br>
      <br>
      <br>
        <div class="footer-bottom">
        <p>&copy; 2021 Universitas Negeri Surabaya <br>by Kelompok 5</p>
        </div>  
    </footer></center>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="ui/js/jquery-1.10.2.min.js"></script>
	<script src="ui/js/bootstrap.min.js"></script>
	<script src="ui/js/bootswatch.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ui/js/ie10-viewport-bug-workaround.js"></script>

</body></html>