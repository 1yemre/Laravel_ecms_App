<!-- dosyayı dahil etme -->  
@extends('layouts.app') 

<!-- Title isim verme -->  
@section('title','index')


@section('content')


<h1>Blade Temel Şablonnu Uygulandı</h1><br>
<h1>Blade Temel Şablonnu Uygulandı</h1>


@endsection


<!-- projeye dosyayı dahil etme  -->
      <li>Anasayfa</li>
<!-- @include('inc.navbar'); -->
<!-- navbar'a veri gönderme -->
<!-- @includeif('inc.navbar',['menu1'=>'Anasayfa1','menu2'=>'Hakkımızda']); -->


@php
  
    
@endphp


emre @br yenen

@addName emre




<!-- @unless => değer false donerse doğru kabul eder.  -->
<!-- @isset => değiken varlığını kontrol eder   -->
<!-- @emty =>  bir değişkenin boş olup olmadığını kontrol eder.  -->

<!-- 
$loop->index ( 0,1,2...)
$loop->interation (1,2...)
$loop->remaining (sondan geriye doğru sıralama)
$loop->count  (toplam dizi elemanı)
$loop->first  (dizi ilk elemanı)
$loop->last  (dizi son elemanı)
$loop->even  (sadece çift sayıya denk gelen elemanları işaretler)
$loop->odd  (sadece tek sayıya denk gelen elemanları işaretler)
$loop->depth  (döngü derinliği)
$loop->parent  (üst ebeveyn değeri(sayısal))






 