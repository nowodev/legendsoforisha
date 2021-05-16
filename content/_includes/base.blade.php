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

  <script src="https://cdn.jsdelivr.net/npm/@widgetbot/html-embed"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3" async defer>
    new Crate({
      server: '774034212797808661',
      channel: '774034213228904457'
    })
  </script> --}}
  <script src="https://cdn2.woxo.tech/a.js#609f3871165a3b00151250c8" async data-usrc></script>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MGM73GF');

  </script>
  <!-- End Google Tag Manager -->
</head>


<body class="page-body text-uppercase">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGM73GF" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

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
