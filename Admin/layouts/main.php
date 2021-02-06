<!DOCTYPE html>
<html>

<head>
  <title>AdminPage</title>
  <meta name="viewport" content="width=device-width, scale=1.0">
  <link rel="stylesheet" href="/MPIS/Assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="/MPIS/Assets/css/jquery.dataTables.min.css ">
  <link rel="stylesheet" href="/MPIS/Assets/css/datatables.bootstrap.min.css">
  <link rel="stylesheet" href="/MPIS/Assets/css/custom.css">
  <link href="/MPIS/Assets/plugins/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body>

  <div class="navbarSupportedContent" style="background-color: #32f84c">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

      MPIS(Member of Parliament Information System)


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="/MPIS/Admin/index.php">Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link " href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
              Logout
            </a>

          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="row mb-5">
    <div class="col-md-3">
      <?php include 'layouts/sidebar.php' ?>
    </div>
    <div class="col-md-9">