<?php
// date untuk menampilkan tanggal dengan format tertentu
//   echo date("l, d-M-Y"); 


// time
// UNIX Timestamp / EPOCH time
// detik yang saudah berlalu sejak 1 januari 1970
//  echo time();
// echo date("d M Y", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l",mktime(0,0,0,4,22,2006));

// strtotime
// echo date("l",strtotime("24 apr 2005"));

?>