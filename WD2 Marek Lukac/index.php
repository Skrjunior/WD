<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="Junior.jpg" type="image/x-icon">
    <title>Blogy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'php/nav.php';?>
   <!--Bolo použité - php, html, css, js, bootstrap, ajax, jquery, SQL-->

    <!-- Banner -->
    <div class="jumbotron" style= "padding-top: 70px!important;">
        <h1 class="display-4 ">Vitajte na mojom blogu o airsofe.</h1>
        <p class="lead ">Vašom ultimátnom zdroji pre všetko, čo sa týka airsoftu! Či už ste začiatočník alebo skúsený hráč, nájdete tu všetko potrebné: od základov airsoftu, cez najnovšie akcie až po detailné recenzie môjho osobného vybavenia. <br>Sledujte nás, aby ste nezmeškali žiadne zaujímavosti z airsoftovej komunity a inšpirujte sa pre vaše budúce hry.
        <br>
        <br>Na tomto blogu sa môžete tešiť na:
        <ul>
         <li><strong>Pravidelné aktualizácie</strong> o najnovších akciách a stretnutiach v oblasti airsoftu.</li>
          <li><strong>Recenzie vybavenia</strong>, kde sa podelím o svoje skúsenosti s rôznymi airsoftovými zbraňami a príslušenstvom.</li>
          <li><strong>Tipy a triky</strong> pre hráčov všetkých úrovní.</li>
          <li><strong>Zaujímavosti</strong> z airsoftu, ktoré vám pomôžu lepšie pochopiť tento vzrušujúci šport.</li>
        </ul>
        </p>
        <hr class="my-4">
    </div>
    <div class="container">
        <!-- Posts Section -->
        <section>
            <h2>Články</h2>
            <div class="row" id="clanky">
                <?php
                $servername = "localhost";
                $username = "admin";
                $password = "admin";
                $dbname = "web";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $nadpis = '';

                // Query database for data
                $sql = "SELECT obrazok, nadpis, datum, popis FROM posts ORDER BY id DESC";
                $result = mysqli_query($conn, $sql);

                // Check if query executed successfully
                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col-md-4">';
                        echo '  <div class="card mb-4 box-shadow">';
                        echo '      <img class="card-img-top" src="' . $row["obrazok"] . '" alt="Card image cap">';
                        echo '      <div class="card-body">';
                        echo '          <h5 class="card-title">' . $row["nadpis"] . '</h5>';
                        echo '          <div class="d-flex justify-content-between align-items-center">';
                        echo '              <div class="btn-group">';
                        echo '                  <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill open-btn" data-bs-toggle="modal" data-bs-target="#myModal" data-desc="' . $row["popis"] . '">Otvoriť</button>';
                        echo '              </div>';
                        echo '              <small class="text-muted">Vytvorené ' . $row["datum"] . '</small>';
                        echo '          </div>';
                        echo '      </div>';
                        echo '  </div>';
                        echo '</div>';
                
                        if (empty($nadpis)) {
                            $nadpis = $row['nadpis'];
                        }
                    }
                } else {
                    echo "No data found in database.";
                }

                // Close connection
                mysqli_close($conn);
                ?>
            </div>
        </section>
    </div>

    <!-- Modal Popup -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style= "padding-top: 70px!important;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">
                        <?php echo $nadpis; ?>
                    </h5> <!-- Replace 'Article Description' with $nadpis variable -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="articleDesc"></p>
                </div>
            </div>
        </div>
    </div>

    <?php include 'php/footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let openBtns = document.querySelectorAll('.open-btn');
        let modalTitle = document.querySelector('.modal-title');

        openBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                let desc = btn.dataset.desc;
                let title = btn.closest('.card').querySelector('.card-title').textContent;
                let articleDescEl = document.querySelector('#articleDesc');
                articleDescEl.innerHTML = desc;
                modalTitle.innerHTML = title;
            })
        });
    </script>

    <script src="js/ajax.js"></script>

    <style>
        .modal-content {
            border-radius: 20px;
        }
    </style>
</body>

</html>