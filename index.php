<?php
// Nome - IP - Porta 1 - Porta 2 - Porta 3 - Porta 4
$array = [
    ["RouterOS PPTP","192.168.1.1","1000","2000","3000","4000"],
    ["Servicor 2","192.168.2.1","111","222","333","4444"],
    ["Servicor 3","192.168.3.1","1000","2000","3000","4000"],
    ["Servicor 4","192.168.4.1","1000","2000","3000","4000"],
];
?>
<!DOCTYPE html>
<html>
  <title>Port knocking - RR</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Rudimar Remontti">
  <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/4.0/examples/offcanvas/offcanvas.css" rel="stylesheet">
<body>
  <script>
    function toctoc(ip, p1, p2, p3, p4) { 
      (async function() {
        for ( port of [p1, p2, p3, p4] ) { 
          await fetch("https://"+ ip +":" + port)
          .catch(() => console.log("toc toc", port))
       }
      })();
    }
  </script>
  <main role="main" class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
    <img class="mr-3" src="https://icons.iconarchive.com/icons/custom-icon-design/pretty-office-6/48/logout-icon.png" alt="" width="48" height="48">
    <div class="lh-100">
      <h6 class="mb-0 text-white lh-100">Port knocking - RR</h6>
      <small>Toc toc</small>
    </div>
  </div>

  <div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Servidores/Routeadores</h6>
    <?php
    foreach ($array as list($nome, $ip, $p1, $p2, $p3, $p4)) {
    echo '<div class="media text-muted pt-3">';
    echo '  <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">';
    echo "    <strong class=\"d-block h4 text-gray-dark\">$nome - $ip</strong>";
    echo "    <button class=\"btn btn-outline-success\" type=\"button\" onclick=\"toctoc('$ip', '$p1', '$p2', '$p3', '$p4')\">Toc Toc</button>";
    echo '  </p>';
    echo '</div>';
    }
    ?>
    <small class="d-block text-right mt-3">
      <a href="https://remontti.com.br">By remontti.com.br</a>
    </small>
  </div>
  </body>
</html>