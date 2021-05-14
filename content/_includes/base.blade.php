<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="@yield('pageDescription', $siteDescription)">
  <title>{{ $siteName }} @yield('pageTitle')</title>

  <!-- CSS -->
  <link rel="stylesheet" href="@url('assets/css/all.css')">

  <link href="assets/css/fonts/etline-font.min.css" rel="stylesheet">
  <link href="assets/css/fonts/fontawesome/all.min.css" rel="stylesheet">
  <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
  <link href="assets/css/fonts/themify-icons.css" rel="stylesheet">

  <link href="assets/plugins/owl.carousel/owl.carousel.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="icon" href="assets/img/favicon.png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <style>
    #myVideo {
      object-fit: cover;
      width: 100vw;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      opacity: 0.5;
    }

  </style>


  <script src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3" async defer>
    new Crate({
      server: '774034212797808661',
      channel: '774034213228904457'
    })

  </script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3" async defer>
  new Crate({
    server: '299881420891881473',
    channel: '355719584830980096'
  })
</script> --}}


</head>


<body class="page-body">
  @include('_includes.nav')

  @yield('body')

  @include('_includes.footer')


  <!-- jQuery -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- User JS -->
  <script src="assets/js/scripts.js"></script>
  <!-- Main JS -->
  <script src="assets/js/main.js" id="_mainJS" data-plugins="load"></script>
</body>

</html>
