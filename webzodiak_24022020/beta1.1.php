<html>

 <head><!--<h1><marquee behavior="alternate">ZODIAK &nbsp;&nbsp;&nbsp;&nbsp;ZODIAK&nbsp;&nbsp;&nbsp;&nbsp;ZODIAK&nbsp;&nbsp;&nbsp;&nbsp;ZODIAK&nbsp;&nbsp;&nbsp;&nbsp;ZODIAK&nbsp;&nbsp;&nbsp;&nbsp;ZODIAK&nbsp;&nbsp;&nbsp;&nbsp;ZODIAK&nbsp;&nbsp;&nbsp;&nbsp;ZODIAK</marquee></h1>-->
  <title>Givi Ofgivia -- TIF 2018131028</title>
 </head>

 <!--<table border="2" bgcolor="green"><th><li><a href="http://localhost/pemrograman_web/tampilanawal.php">Back</a></li></th></table>-->
 <style>
 h1,h3,h4 {color:gray;}
 marquee {border-style:solid;}
 </style>
  <body>
   <form method="POST">
    
    <table style="color:black"  align="center" border="5" width="450">
     <tr>
      <th><center>Web Zodiak</center></th>
     </tr>
     <tr>
      <td>Nama :<input type="text" name="nama" size="45" required></td>
     </tr>
     <tr>
     <td>Tanggal :<input type="number" name="tanggal" min="1" max="31" size="2" required>Bulan :
      <select name="bln" id="bln" required>
       <option value="januari">Januari</option>
       <option value="februari">Februari</option>
       <option value="maret">Maret</option>
       <option value="april">April</option>
       <option value="mei">Mei</option>
       <option value="juni">Juni</option>
       <option value="juli">Juli</option>
       <option value="agustus">Agustus</option>
       <option value="september">September</option>
       <option value="oktober">Oktober</option>
       <option value="november">November</option>
       <option selected="selected "value="desember">Desember</option>
      </select>
       <input type="submit" name="submit" id="submit" value="Cari">
       <input type="reset" name="reset" id="reset" value="Batal" required></td>
     </tr>
    
       
<?php
/*$nama='';
$tanggal='';
$zodiak='';
$blnzodiak='';
$LambangZodiak='';
$RamalanAnda='';
if(isset($_GET[""])){*/
$nama = $_POST['nama'];
$tanggal= $_POST['tanggal'];
//$zodiak = $_POST['zodiak'];
$blnzodiak=$_POST['bln'];
//$RamalanAnda=$_POST['Ramalan'];
//$Lambangzodiak=$_POST['Lambang'];
//}
    


    if (($tanggal>=21 && $tanggal<=31 && $blnzodiak=="maret")||($tanggal<=19 && $blnzodiak=="april")){
     $zodiak= "Aries";
     $LambangZodiak= "<img src=\"lambang_Aries.png\"\"width=\"250\"height=\"250\">";
     $RamalanAnda= "<br><h3>Peruntungan :</h3> Masih perlu bersabar dengan apa yang kamu alami akhir-akhir ini. Tak perlu punya pikiran yang aneh-aneh apalagi sampai membuat keputusan yang hanya merugikan saja.<br>

          <h3>Karir : </h3>Tidak selamanya prediksi itu akan selalu tepat sasaran maka dari itu jangan terlalu takabur.<br>

          <h3>Kesehatan :</h3> Hindari makan terlalu masam jika tidak maka perut kamu akan sulit untuk bisa tenang.<br>

          <h3>Keuangan :</h3> Pemborosan tampaknya masih sulit untuk dikendalikan. Cobalah untuk bisa meredam segala keinginan hati.<br>

          <h3>Rejeki : </h3>Rejeki itu dilihat dari berkahnya bukan jumlahnya.<br>

          <h3>Asmara :</h3> Pengalaman makin mendewasakan.<br>

          <h3>Hari Baik :</h3> Jumat, ada pertemuan penting.<br>

          <h3>Fisik :</h3> Kurang minum air putih.<br>

          <h3>Warna Keberuntungan :</h3> Putih.";
    }
    
    else if(($tanggal>=20 && $tanggal<=30 && $blnzodiak=="april" )||($tanggal<=20 && $blnzodiak=="mei")){
     $zodiak = "Taurus";
     $LambangZodiak= "<br><img src=\"lambang_Taurus.png\"\alt=\"Smiley face\ \"width=\"250\"height=\"250\">";
     $RamalanAnda= "<br><h3>Peruntungan : </h3>Kejarlah impian setinggi langit, akan tetapi jangan sekali-kali bahagia di atas penderitaan orang lain sebab hasilnya itu tidak akan berjalan lama.<br>

          <h3>Karir : </h3>Cobalah untuk mau mengingat jasa orang lain karena itu akan membuat diri kamu menjadi orang yang setingkat lebih baik daripada orang yang tidak mengerti balas budi.<br>

          <h3>Kesehatan :</h3> Jauhi keluar malam, selagi bisa ditunda saja karena dampaknya untuk kesehatan kamu saat kurang begitu bagus.<br>

          <h3>Keuangan :</h3> Jangan segan untuk menutup segala kebutuhan kamu, kalau tidak sekarang mau kapan lagi.<br>

          <h3>Rezeki :</h3> Tak perlu khawatir lagi.<br>

          <h3>Asmara :</h3> Lebih perhatian.<br>

          <h3>Hari Baik :</h3> Kamis, ada kabar gembira dari jauh.<br>

          <h3>Fisik :</h3> Kurang istirahat.<br>

          <h3>Warna Keberuntungan :</h3> Abu-abu.";
    }
    
    else if(($tanggal>=21 && $tanggal<=31 && $blnzodiak=="mei" )||($tanggal<=20 && $blnzodiak=="juni")){
     $zodiak = "Gemini";
     $LambangZodiak= "<img src=\"lambang_Gemini.png\" \alt=\"Smiley face\ \"width=\"450\"height=\"300\">";
     $RamalanAnda= "<br><h3>Peruntungan :</h3> Ikutilah tahapan-tahapan yang ada agar rencana dapat berjalan dengan memuaskan dan sesuai dengan schedule yang ada. Tak perlu terlalu ingin cepat untung besar karena jika tidak kontinyu maka hasilnya akan percuma saja.<br>

          <h3>Karir :</h3> Cukup banyak godaan. Jika hati sudah merasa tak yakin sebaiknya jangan diteruskan.<br>

          <h3>Kesehatan :</h3> Bersikaplah sabar dan bijaksana dalam menyikapi segala persoalan yang muncul sehingga hati tetap selalu tenang dan penuh kedamaian.<br>

          <h3>Keuangan : </h3>Pemasukan cukup lancar begitu juga dengan janji orang lain yang diharapkan ternyata bisa terealisasi di hari ini.<br>

          <h3>Rezeki :</h3> Siap-siap akan ada kejutan indah.<br>

          <h3>Asmara : </h3>Mati satu tumbuh seribu.<br>

          <h3>Hari Baik : </h3>Jumat, ada titik temu.<br>

          <h3>Fisik : </h3>Sakit kepala.<br>

          <h3>Warna Keberuntungan : </h3>Hitam.";
    }
    
    else if(($tanggal>=21 && $tanggal<=30 && $blnzodiak=="juni" )||($tanggal<=22 && $blnzodiak=="juli")){
     $zodiak = "Kanser";
     $LambangZodiak= "<img src=\"lambang_CANCER.png\" \alt=\"Smiley face\ \"width=\"450\"height=\"300\">";
     $RamalanAnda= "<br><h3>Peruntungan :</h3> Tampak cukup baik dan menguntungkan sehingga sangatlah disayangkan jika kesempatan ini lari begitu saja hanya karena sikap kamu yang tidak bisa luwes dan sabar.<br>

          <h3>Karir :</h3> Jangan bersikap ingin menangnya sendiri. Cobalah disingkirkan sejauh mungkin.<br>

          <h3>Kesehatan :</h3> Jangan menuruti hawa nafsu saja kalau akhirnya kamu sendiri yang rugi.<br>

          <h3>Keuangan :</h3> Ada kabar baik yang akan mendatangkan pemasukan yang lumayan tinggi.<br>

          <h3>Rezeki :</h3> Ada pemasukan tambahan.<br>

          <h3>Asmara :</h3> Ribut karena pihak ketiga.<br>

          <h3>Hari Baik :</h3> Minggu, bertemu sahabat lama.<br>

          <h3>Fisik :</h3> Selalu diterpa rasa sedih.<br>

          <h3>Warna Keberuntungan :</h3> Hitam.<br>";
    }
    
    else if(($tanggal>=23 && $tanggal<=31 && $blnzodiak=="juli")||($tanggal<=22 && $blnzodiak=="agustus")){
     $zodiak = "Leo";
     $LambangZodiak= "<img src=\"lambang_leo.png\"\alt=\"Smiley face\ \"width=\"450\"height=\"300\" >";
     $RamalanAnda= "<br><h3>Peruntungan :</h3> Suasana hati masih ingin kesana-kesini dan serba tidak menentu. Inilah ujian bagi kamu untuk mampu memilih antara hobi dan urusan karir. Jika kamu lebih berpihak untuk menuruti selera hati dengan mencari kesenangan saja, maka urusan karir bisa terbengkalai begitu saja.<br>

          <h3>Karir :</h3> Jangan terlalu individual.<br>

          <h3>Kesehatan :</h3> Faktor emosi kadangkala masih sulit untuk dikendalikan, untuk itu cobalah lebih bersabar dalam menghadapi berbagai permasalahan.<br>

          <h3>Keuangan :</h3> Jangan gegabah bila ingin spekulasi. Pelajari dulu dengan seksama, jangan main hantam saja.<br>

          <h3>Rezeki :</h3> Bertemu orang baru juga rejeki.<br>

          <h3>Asmara :</h3> Tetap setia.<br>

          <h3>Hari Baik :</h3> Minggu, kumpul bersama keluarga lagi.<br>

          <h3>Fisik :</h3> Capek, tapi hati senang.<br>

          <h3>Warna Keberuntungan :</h3> Hitam.";
    }
    
    else if(($tanggal>=23 && $tanggal<=31 && $blnzodiak=="agustus")||($tanggal<=22 && $blnzodiak=="september")){
     $zodiak = "Virgo";
     $LambangZodiak= "<img src=\"lambang_virgo.png\"\alt=\"Smiley face\ \"width=\"450\"height=\"300\" >";
     $RamalanAnda= "<br><h3>Peruntungan :</h3> Kinilah saatnya bagi diri kamu untuk melaksanakan segala rencana yang sempat terpendam. Yakinlah dengan kemampuan diri sendiri, apalagi kemujuran tampak memayungi langkah kamu sehingga kamu bisa lebih mantap dan optimis dalam melaksanakan ide-ide baru.<br>

          <h3>Karir : </h3>Masih ada support yang membikin kamu semangat lagi.<br>

          <h3>Kesehatan :</h3> Kebiasaan bangun di pagi hari sebaiknya diteruskan, hanya saja jangan lupa untuk melakukan jogging walau sebentar.<br>

          <h3>Keuangan :</h3> Tak perlu ragu dalam menyelesaikan apa yang sudah menjadi tanggungan kamu mumpung ada dana lebih.<br>

          <h3>Rejeki :</h3> Makin dipercaya atasan.<br>

          <h3>Asmara :</h3> Makin sayang dan cinta.<br>

          <h3>Hari Baik :</h3> Minggu, ada pertemuan penting.<br>

          <h3>Fisik :</h3> Capek fisik.<br>

          <h3>Warna Keberuntungan :</h3> Biru.<br>";
    }
    
    else if(($tanggal>=23 && $tanggal<=30 && $blnzodiak=="september")||($tanggal<=22 && $blnzodiak=="oktober")){
     $zodiak = "Libra";
     $LambangZodiak= "<img src=\"lambang_libra.png\"\alt=\"Smiley face\ \"width=\"450\"height=\"300\" >";
     $RamalanAnda= "<br><h3>Peruntungan :</h3> Jangan terlalu egois. Belajarlah menghargai sesuatu sekalipun hanya sepele. Perubahan serius akan terjadi dan memang sudah sampai temponya dan di hari ini peruntungan kamu sudah lebih bagus daripada hari-hari yang lalu.<br>

          <h3>Karir :</h3> Bersabar saja untuk dapatkan yang terbaik.<br>

          <h3>Kesehatan :</h3> Tampaknya memang sulit untuk menghilangkan kebiasaan buruk yang berdampak negatif pada kesehatan kamu, untuk itu cobalah walau sedikit selama kamu terus berupaya maka lama-kelamaan kebiasaan buruk itu dapat dihilangkan.<br>

          <h3>Keuangan :</h3> Untuk spekulasi sebaiknya dihindari dulu karena masih terlalu banyak musuh yang mengincar kamu.<br>

          <h3>Rezeki : </h3>Aman sampai bulan depan.<br>

          <h3>Asmara :</h3> Jatuh cinta berjuta rasanya.<br>

          <h3>Hari Baik :</h3> Senin, bertemu pemodal baru.<br>

          <h3>Fisik : </h3>Migrain.<br>

          <h3>Warna Keberuntungan :</h3> Biru.<br>";
    }
    
    else if(($tanggal>=23 && $tanggal<=31 && $blnzodiak=="oktober")||($tanggal<=21 && $blnzodiak=="november")){
     $zodiak = "Skorpio";
     $LambangZodiak= "<img src=\"lambang_Scorpio.png\" \alt=\"Smiley face\ \"width=\"450\"height=\"300\">";
     $RamalanAnda= "<br><h3>Peruntungan :</h3> Segala angan-angan dan cita-cita menjadi semakin mudah untuk kamu raih. Tak perlu bimbang ataupun ragu bila ada ide ataupun rencana. Segera saja laksanakan dengan penuh keyakinan dan kemantapan hati.<br>

          <h3>Karir :</h3> Hindari berkata kasar yang bisa memicu pertengkaran.<br>

          <h3>Kesehatan :</h3> Hindari berolahraga yang terlalu berat karena tidak menjadi sehat malah membikin sakit badan saja.<br>

          <h3>Keuangan :</h3> Untuk melaksanakan ide-ide yang cemerlang sebaiknya dilkamusi dengan keyakinan. Jangan sampai kebimbangan merusak segalanya.<br>

          <h3>Rezeki :</h3> Banyak tawaran.<br>

          <h3>Asmara :</h3> Bertemu orang baru lagi.<br>

          <h3>Hari Baik :</h3> Senin, senang-senang untuk sementara waktu.<br>

          <h3>Fisik :</h3> Kecapean.<br>

          <h3>Warna Keberuntungan :</h3> Hitam.";
    }
    
    else if(($tanggal>=22 && $tanggal<=30 && $blnzodiak=="november")||($tanggal<=21 && $blnzodiak=="desember")){
     $zodiak = "Sagitarius";
     $LambangZodiak= "<img src=\"lambang_sagitarius.png\"\alt=\"Smiley face\ \"width=\"450\"height=\"300\" >";
     $RamalanAnda= "<br><h3>Peruntungan :</h3> Jangan suka buang-buang waktu mengurusi hal-hal yang tidak penting. Pkamui-pkamuilah memanfaatkan saat-saat yang baik ini dengan sebaik-baiknya, jangan sampai terbuang percuma.<br>

          <h3>Karir :</h3> Cukup dengan senyum maka suasana akan kembali tenang.<br>

          <h3>Kesehatan :</h3> Situasi memang tampak berat karena aktivitas yang cukup tinggi dan benar-benar menguras tenaga ataupun pikiran. Selama kamu bisa disiplin dan pkamui mengatur waktu maka semua itu dapat teratasi dengan baik.<br>

          <h3>Keuangan :</h3> Di hari ini kamu akan mendapatkan rejeki yang datangnya secara tak terduga-duga, untuk itu tak perlu kaget.<br>

          <h3>Rezeki :</h3>Seimbang antara pemasukan dan pengeluaran.<br>

          <h3>Asmara :</h3> Butuh kejutan baru.<br>

          <h3>Hari Baik :</h3> Senin, membuka hari baru.<br>

          <h3>Fisik :</h3> Pikiran tenang, karena semua urusan sudah beres.<br>

          <h3>Warna Keberuntungan : </h3>Hijau Muda.";
    }
    
    else if(($tanggal>=22 && $tanggal<=31 && $blnzodiak=="desember")||($tanggal<=19 && $blnzodiak=="januari")){
     $zodiak = "Kaprikornus";
     $LambangZodiak= "<img src=\"lambang_capricorns.png\"\alt=\"Smiley face\ \"width=\"450\"height=\"300\" >";
     $RamalanAnda = "<br><h3> Peruntungan : </h3>Kesempatan untuk maju tidak datang begitu saja sehingga selagi situasinya mendukung maka kamu harus bisa memanfaatkannya.Tak perlu terburu-buru dalam mengerjakan segala sesuatunya, cobalah lebih tenang lagi.<br>

          <h3>Karir       : </h3>Tak perlu dimasukkan hati omongan rekan kamu yang memanaskan telinga itu, selama atasan tidak menegur berarti tidak ada masalah yang perlu dikhawatirkan.<br>

          <h3>Kesehatan   :</h3> Pilek masih merupakan masalah yang cukup mengganggu.<br>

          <h3>Keuangan    :</h3> Ada hambatan yang memaksa pemasukan menjadi seret walaupun sebenarnya kamu bisa meraih hasil yang lebih banyak di hari ini. <br>

          <h3>Rezeki      :</h3> Kesabaran selalu berbuah manis. <br>

          <h3>Asmara      :</h3> Kali ini boleh menggunakan perasaan. <br>

          <h3>Hari Baik   :</h3> Kamis, momentum mendapatkan yang diinginkan. <br>

          <h3>Fisik     :</h3>Capek pikiran. <br>

          <h3>Warna Keberuntungan :</h3> Hijau.<br>";
    }
    
    else if(($tanggal>=20 && $tanggal<=31 && $blnzodiak=="januari")||($tanggal<=18 && $blnzodiak=="februari")){
     $zodiak = "Akuarius";
     $LambangZodiak= "<img src=\"lambang_Aquarius.png\"\alt=\"Smiley face\ \"width=\"450\"height=\"300\" >";
     $RamalanAnda= "<br><h3>Peruntungan :</h3> Di hari ini tantangan semakin terbuka lebar sehingga cukup berbahaya kalau kamu bersikap santai tanpa ada pemikiran untuk bekerja lebih keras lagi.<br>

          <h3>Karir :</h3> Walaupun sudah mendekati dengan apa yang diharapkan sebaiknya kewaspadaan harus lebih ditingkatkan lagi.<br>

          <h3>Kesehatan :</h3> Jauh dari gangguan yang berat, walau begitu pola makan sebaiknya tetap diperhatikan dengan serius.<br>

          <h3>Keuangan :</h3>Hasil yang diraih hari ini masih jauh dari harapan, walau begitu tetaplah bersyukur.<br>

          <h3>Rezeki :</h3> Tak akan lari gunung dikejar.<br>

          <h3>Asmara :</h3> Kurang ucapan kata-kata mesra.<br>

          <h3>Hari Baik :</h3> Minggu, kumpul bersama keluarga.<br>

          <h3>Fisik :</h3> Berat badan naik lagi.<br>

          <h3>Warna Keberuntungan :</h3> Kuning.<br>";
    }
    
    else if(($tanggal>=19 && $tanggal<=29 && $blnzodiak=="februari")||($tanggal<=20 && $blnzodiak=="maret")){
     $zodiak = "Pises";
     $LambangZodiak= "<img src=\"lambnag_pisces.png\"\alt=\"Smiley face\ \"width=\"450\"height=\"300\" >";
     $RamalanAnda= "<br><h3>Peruntungan :</h3> Di hari ini sangat membutuhkan ketenangan dan motivasi yang kuat untuk dapat meraih setiap kesempatan yang muncul. Hilangkan segala ketakutan dari ancaman dan teror yang dilancarkan oleh kompetitor kamu.<br>

          <h3>Karir :</h3> Berusahalah untuk bisa bersikap lepas dan tidak terlalu tegang agar pikiran tetap bisa berpikir dengan jernih.<br>

          <h3>Kesehatan :</h3> Hilangkan segala kecamuk yang ada di dalam dada. Jika disimpan terus hanya akan membikin dada terasa sesak.<br>

          <h3>Keuangan :</h3> Ajakan teman yang hanya menghabiskan uang saja ada baiknya ditolak daripada bikin pikiran pusing.<br>

          <h3>Rezeki :</h3> Tingkatkan, amal dan sedekah, niscaya akan ada pemasukan yang siginifikan.<br>

          <h3>Asmara :</h3> Percaya saja pada hati nurani.<br>

          <h3>Hari Baik :</h3> Rabu, segala sesuatunya pulih seperti sedia kala.<br>

          <h3>Fisik :</h3> Jangan diporsir.<br>

          <h3>Warna Keberuntungan :</h3> Abu-abu.";
}
?>

     <tr>
      <?php echo "<td>Nama Anda : $nama</td>";?>
     </tr>
     <tr>
      <?php echo "<td>Tanggal Anda : $tanggal $blnzodiak</td>";?>
     </tr>
     <tr>
      <?php echo "<td>Zodiak Anda : $zodiak</td>";?>
      </tr>
      <tr>
      <?php echo "<td>Lambang Zodiak  : $LambangZodiak</td>";?>
      </tr>
      <?php echo "<td><h2 align=\"center\">Ramalan Anda : $RamalanAnda</h2></td>";?>
    </table>
   </form>
  </body>
</html>