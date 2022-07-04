<div class="page-header" style="margin-top: 50px;">
    <h1>Prediksi Menggunakan Metode Brown's Doule Exponential Smoothing</h1>
</div>
<img src="assets/img/Gjagung.jpg" class="d-block w-100" alt="...">
<p class="mt-3">Metode ini dikemukakan oleh Brown’s untuk mengatasi perbedaan yang muncul antara data aktual dan nilai peramalan apabila ada trend pada poltnya.Dasar pemikiran dari penulisan eksponensial linier dari Brown’s adalah serupa dengan rata-rata bergerak linier (Linier Moving Average), karena kedua nilai pemulusan tunggan dan ganda ketinggalan dari data yang sebenarnya bilamana terdapat unsur trend, perbedaan antara nilai pemulusan tunggal dan ganda ditambahkan kepada nilai pemulusan dan disesuaikan untuk trend.</p>
<p>Metode ini digunakan untuk peramalan dengan cara menentukan besarnya α (alpha) secara trial dan error antara 0 sampai dengan 1, dan dilakukan proses smoothing dua kali. Kelebihan dari metode ini yaitu dapat memodelkan trend dan tingkat dari suatu deret waktu lebih efisien dibandingkan metode lain, karena memerlukan data yang lebih sedikit, dan menggunakan satu parameter sehingga menjadi lebih sederhana. Kekurangan dari metode ini yaitu metode ini memerlukan optimasi parameter sehingga memerlukan waktu untuk mencari α (alpha) yang paling optimal. Untuk tahap-tahap dalam menentukan ramalan adalah sebagai berikut:</p>
<p>1. Menentukan nilai smoothing pertama (𝑆𝑡 ′ )</p>
<p>𝑆𝑡′ = 𝛼𝑋𝑡 + (1 − 𝛼)𝑆𝑡’−1. </p>
<p>2. Menentukan nilai smoothing kedua (𝑆𝑡′′) </p>
<p>𝑆𝑡′′ = 𝛼𝑆𝑡 ′ + (1 − 𝛼)𝑆𝑡”−1</p>
<p>3. Menentukan nilai konstanta periode t (𝑎𝑡 ) </p>
<p>𝑎𝑡 = 2𝑆𝑡′ − 𝑆𝑡′′</p>
<p>4. Menentukan nilai konstanta pemulusan (𝑏𝑡 ) </p>
<p>𝑏𝑡 = 𝛼 (1−𝛼) (𝑆𝑡 ′ − 𝑆𝑡′′) </p>
<p>5. Menentukan nilai peramalan (𝐹𝑡+𝑚) </p>
<p>𝐹𝑡+𝑚 = 𝑎𝑡 + 𝑏𝑡 (𝑚)</p>

<div class="page-header" style="margin-top: 50px;">
    <h1>judul</h1>
</div>
<img src="assets/img/Gladang.jpg" class="d-block w-100" alt="...">
<p class="mt-3">
    isi penjelasan disini
</p>

<div class="page-header" style="margin-top: 50px;">
    <h1>judul</h1>
</div>
<img src="assets/img/Gsawah.jpg" class="d-block w-100" alt="...">
<p class="mt-3">
    isi penjelasan disini
</p>