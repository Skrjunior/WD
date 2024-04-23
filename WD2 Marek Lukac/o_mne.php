<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Junior.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>O mne</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'php/nav.php'; ?>

    <div class="container mt-5" style="padding-top: 70px!important;">
          <div class="col">
                <div class="header" style="text-align: center;">
                    <h1 style="font-size: 10rem; position: relative;">
                        <?php echo date('H:i'); ?>
                    </h1>
                </div>
                <div class="header" style="text-align: center;">
                    <h1>
                        <?php echo date('j.n.Y'); ?>
                    </h1>
                </div>
            </div>
        <div class="row mx-auto">
            <div class="col">
             <img src="XD-3.JPG" alt="" style="border-radius:20px;" width="400" height="500">

            </div>
            <div class="col">
                <div class="header">
                    <h1>O mne</h1>
                </div>
                <div class="content">
                    <p>Ahoj, volám sa Marek a vitajte na mojom airsoftovom blogu! Moje nadšenie pre airsoft začalo pred viac ako šiestimi rokmi a odvtedy sa stal neoddeliteľnou súčasťou môjho života. Počas týchto rokov som si vybudoval pôsobivú zbierku výstroje a vybavenia, no k mojim obľúbeným patrí bezpochyby M4 a Glock.ajú túto vášeň.
                    <br>
                    <br>Okrem M4 a Glocka, tiež rád hrám s L96 sniperkou a Desert Eagle, ktoré mi prinášajú úplne iný typ zážitku na bojisku. Sniperka L96 mi umožňuje vyniknúť v presnosti a trpezlivosti, zatiaľ čo Desert Eagle dodáva adrenalín do rýchlych a dynamických stretnutí.
                    <br>
                    <br>Pre mňa airsoft nie je len hobby, je to vášeň, ktorá mi prináša zábavu a únik od každodenných starostí. Bez ohľadu na to, ako náročný môj týždeň môže byť, vždy si nájdem čas na airsoft. Či už ide o rýchle hry na lokálnych ihriskách alebo viacdenné airsoftové akcie, kde sa stretávam s ostatnými nadšencami a spoločne zdielame naše skúsenosti a techniky.
                    <br>
                    <br>Tento blog je miestom, kde sa podelim o svoje zážitky, ako si najlepšie užiť tento vzrušujúci šport.
                    </p>
                </div>
            </div>
           
        </div>
    </div>



    <?php include 'php/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>