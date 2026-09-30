<?php
$nama     = "Fachri Bima Ibrahim";
$nim      = "102022530035";
$fakultas = "Rekayasa Industri";
$prodi    = "Sistem Informasi";
$matkul   = "Pengembangan Aplikasi Web";

$data = [
    "nama"          => $nama,
    "nim"           => $nim,
    "fakultas"      => $fakultas,
    "program studi" => $prodi,
    "mata kuliah"   => $matkul,
];

$sosmed = [
    ["cmd" => "github",   "url" => "https://github.com/akusuperman",                  "label" => "open github.com/akusuperman"],
    ["cmd" => "ig",       "url" => "https://instagram.com/bbrahm_",                    "label" => "open instagram.com/bbrahm_"],
    ["cmd" => "linkedin", "url" => "https://linkedin.com/in/fachri-bima-ibrahim",      "label" => "open linkedin.com/in/fachri-bima-ibrahim"],
];

$compiledAt = date("d-m-Y H:i:s");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Personal web <?php echo $nama; ?>, mahasiswa <?php echo $prodi; ?> Telkom University">
  <title>fachri.php</title>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text x='50' y='68' font-size='60' text-anchor='middle' fill='%239ece6a' font-family='monospace'>&lt;/&gt;</text></svg>">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="titlebar">
    <div class="traffic"><span></span><span></span><span></span></div>
    <div class="tabs">
      <span class="tab active">fachri.php</span>
      <span class="tab">style.css</span>
    </div>
  </div>

  <div class="workspace">
    <aside class="gutter" id="gutter" aria-hidden="true"></aside>

    <main class="pane">
      <header class="intro">
        <img class="avatar" src="foto.jpeg" alt="Foto <?php echo $nama; ?>">
        <div class="intro-text">
          <p class="comment">// whoami</p>
          <h1 id="typed"><?php echo $nama; ?></h1>
          <h3 class="role">Mahasiswa <?php echo $prodi; ?>, Fakultas <?php echo $fakultas; ?></h3>
        </div>
      </header>

      <section class="block" id="about">
        <h2><span class="comment-mark">// </span>tentang</h2>
        <table>
          <caption>$data (dari PHP array)</caption>
          <?php foreach ($data as $key => $value) { ?>
            <tr><th><?php echo $key; ?></th><td><?php echo $value; ?></td></tr>
          <?php } ?>
        </table>
      </section>

      <section class="block" id="socials">
        <h2><span class="comment-mark">// </span>socials</h2>
        <ul class="links">
          <?php foreach ($sosmed as $s) { ?>
            <li>
              <a href="<?php echo $s['url']; ?>" target="_blank">
                <span class="cmd">$</span> <?php echo $s['label']; ?>
                <span class="path"><?php echo $s['cmd']; ?></span>
              </a>
            </li>
          <?php } ?>
        </ul>
      </section>
    </main>
  </div>

  <footer class="statusbar">
    <span>NIM <?php echo $nim; ?></span>
    <span class="spacer"></span>
    <span>PHP <?php echo phpversion(); ?></span>
    <span>compiled server-side <?php echo $compiledAt; ?></span>
    <time id="clock" datetime="">--:--:--</time>
  </footer>

  <script>
    (function fillGutter() {
      var gutter = document.getElementById("gutter");
      var count = Math.ceil(document.querySelector(".pane").offsetHeight / 27);
      var html = "";
      for (var i = 1; i <= count; i++) html += "<span>" + i + "</span>";
      gutter.innerHTML = html;
    })();

    (function tickClock() {
      var el = document.getElementById("clock");
      function update() {
        var now = new Date();
        var hh = String(now.getHours()).padStart(2, "0");
        var mm = String(now.getMinutes()).padStart(2, "0");
        var ss = String(now.getSeconds()).padStart(2, "0");
        el.setAttribute("datetime", now.toISOString());
        el.textContent = hh + ":" + mm + ":" + ss;
      }
      update();
      setInterval(update, 1000);
    })();
  </script>
</body>
</html>
