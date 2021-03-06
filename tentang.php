<div class="page-header" style="margin-top: 50px;">
    <h1>Prediksi Menggunakan Metode Brown's Doule Exponential Smoothing</h1>
</div>
<img src="assets/img/Gjagung.jpg" class="d-block w-100" alt="...">
<p class="mt-3">Metode ini dikemukakan oleh Brownβs untuk mengatasi perbedaan yang muncul antara data aktual dan nilai peramalan apabila ada trend pada poltnya.Dasar pemikiran dari penulisan eksponensial linier dari Brownβs adalah serupa dengan rata-rata bergerak linier (Linier Moving Average), karena kedua nilai pemulusan tunggan dan ganda ketinggalan dari data yang sebenarnya bilamana terdapat unsur trend, perbedaan antara nilai pemulusan tunggal dan ganda ditambahkan kepada nilai pemulusan dan disesuaikan untuk trend.</p>
<p>Metode ini digunakan untuk peramalan dengan cara menentukan besarnya Ξ± (alpha) secara trial dan error antara 0 sampai dengan 1, dan dilakukan proses smoothing dua kali. Kelebihan dari metode ini yaitu dapat memodelkan trend dan tingkat dari suatu deret waktu lebih efisien dibandingkan metode lain, karena memerlukan data yang lebih sedikit, dan menggunakan satu parameter sehingga menjadi lebih sederhana. Kekurangan dari metode ini yaitu metode ini memerlukan optimasi parameter sehingga memerlukan waktu untuk mencari Ξ± (alpha) yang paling optimal. Untuk tahap-tahap dalam menentukan ramalan adalah sebagai berikut:</p>
<p>1. Menentukan nilai smoothing pertama (ππ‘ β² )</p>
<p>ππ‘β² = πΌππ‘ + (1 β πΌ)ππ‘ββ1. </p>
<p>2. Menentukan nilai smoothing kedua (ππ‘β²β²) </p>
<p>ππ‘β²β² = πΌππ‘ β² + (1 β πΌ)ππ‘ββ1</p>
<p>3. Menentukan nilai konstanta periode t (ππ‘ ) </p>
<p>ππ‘ = 2ππ‘β² β ππ‘β²β²</p>
<p>4. Menentukan nilai konstanta pemulusan (ππ‘ ) </p>
<p>ππ‘ = πΌ (1βπΌ) (ππ‘ β² β ππ‘β²β²) </p>
<p>5. Menentukan nilai peramalan (πΉπ‘+π) </p>
<p>πΉπ‘+π = ππ‘ + ππ‘ (π)</p>

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