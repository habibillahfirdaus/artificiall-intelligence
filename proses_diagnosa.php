<?php

// Fungsi untuk mendiagnosa masuk angin berdasarkan gejala
function diagnoseMasukAngin($gejala) {
    $masukAngin = false;

    // Rule-base diagnosa
    if (
        in_array("pusing", $gejala) &&
        in_array("lemas", $gejala) &&
        in_array("nyeri otot", $gejala)
    ) {
        $masukAngin = true;
    } elseif (
        (in_array("pilek", $gejala) || in_array("hidung tersumbat", $gejala)) &&
        in_array("sakit tenggorokan", $gejala) &&
        in_array("batuk", $gejala)
    ) {
        $masukAngin = true;
    } elseif (
        in_array("demam ringan", $gejala) &&
        (in_array("mual", $gejala) || in_array("muntah", $gejala))
    ) {
        $masukAngin = true;
    }

    return $masukAngin;
}

// Contoh penggunaan
$gejalaPasien = $_POST['gejala'];
if (diagnoseMasukAngin($gejalaPasien)) {
    header("Location: form.php?hasil=Anda didiagnosa mengalami masuk angin");
} else {
    header("Location: form.php?hasil=Anda tidak didiagnosa mengalami masuk angin");
}

?>
