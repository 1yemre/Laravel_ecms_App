<!-- <h1>Route Üzerinden view dosyasına gönderim  </h1>

 <p>Adı:{{$ad}}    Soyad : {{$Soyad}}</p> -->

<h1>Blade Yapısı</h1>

@php
    $ad="Emre";
    echo $ad;
@endphp

<!-- @php dd($ad) -->


Adı:{{$ad}}


@php


$deger="<script>alert('hack')</script>";
echo $deger;

@endphp

<br>

{{$deger}}  <!--  süzer -->

{!!$deger!!} <!--  süzmez -->

