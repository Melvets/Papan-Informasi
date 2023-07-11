<?php
function tanggal_ind($tanggal) {
   $pisah   = explode('-',$tanggal);
   $larik   = array($pisah[2],$pisah[1],$pisah[0]);
   $satukan = implode('-',$larik);
   return $satukan;
}

function jam($time) {
   $pisah   = explode(':',$time);
   $larik   = array($pisah[0],$pisah[1]);
   $satukan = implode(':',$larik);
   return $satukan;
}
