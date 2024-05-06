<?php
if (isset($_GET['hasil'])) {
    $hasil = $_GET['hasil'];
    echo "<script type='text/javascript'>alert('$hasil');</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Diagnosa Masuk Angin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: darkslategray;">
    <div class="card text-bg-dark mb-3 container position-absolute top-50 start-50 translate-middle" style="max-width: 40rem;">
    <div class="card-header">
    <h3>Form Diagnosa Masuk Angin</h3>
    </div>
    <div class="card-body">
        <div class="card-title">Pilih Gejala Yang Anda Alami Dibawah ini:</div>
    <form class="form-check" action="proses_diagnosa.php" method="post">
        <label class="form-check-label" for="pusing">Pusing</label>
        <input class="form-check-input" type="checkbox" id="pusing" name="gejala[]" value="pusing">
        <br>
        
        <label class="form-check-label" for="lemas">Lemas</label>
        <input class="form-check-input" type="checkbox" id="lemas" name="gejala[]" value="lemas">
        <br>
        
        <label class="form-check-label" for="nyeri_otot">Nyeri Otot</label>
        <input class="form-check-input" type="checkbox" id="nyeri_otot" name="gejala[]" value="nyeri otot">
        <br>
        
        <label class="form-check-label" for="demam_ringan">Demam Ringan</label>
        <input class="form-check-input" type="checkbox" id="demam_ringan" name="gejala[]" value="demam ringan">
        <br>
        
        <label class="form-check-label" for="sakit_tenggorokan">Sakit Tenggorokan</label>
        <input class="form-check-input" type="checkbox" id="sakit_tenggorokan" name="gejala[]" value="sakit tenggorokan">
        <br>
        
        <label class="form-check-label" for="pilek">Pilek</label>
        <input class="form-check-input" type="checkbox" id="pilek" name="gejala[]" value="pilek">
        <br>
        
        <label class="form-check-label" for="hidung_tersumbat">Hidung Tersumbat</label>
        <input class="form-check-input" type="checkbox" id="hidung_tersumbat" name="gejala[]" value="hidung tersumbat">
        <br>
        
        <label class="form-check-label" for="batuk">Batuk</label>
        <input class="form-check-input" type="checkbox" id="batuk" name="gejala[]" value="batuk">
        <br>
        
        <label class="form-check-label" for="mual">Mual</label>
        <input class="form-check-input" type="checkbox" id="mual" name="gejala[]" value="mual">
        <br>
        
        <label class="form-check-label" for="muntah">Muntah</label>
        <input class="form-check-input" type="checkbox" id="muntah" name="gejala[]" value="muntah">
        <br>
        
        <button class="btn btn-primary mt-3" type="submit" value="Diagnosa">Diagnosa</button>
    </form>
    </div>
</div>
</body>
</html>
