@extends('app')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Laravel Blog Uygulaması!</h1>
            <p>Bu içerik Boostrap kullanılarak tasarlanmamıştır ki deniyoruz</p>

        </div>
        <div class="blog-post">
            @foreach($listele as $makale)
                <h3 class="blog-post-title">{{$makale->baslik}}</h3>
                <p class="blog-post-meta">Tarih: {{$makale->created_at}} by <a href="#">Admin</a> </p>
                <p>{{$makale->detay}}</p>
            @endforeach
        </div>
        <hr />
        <form action="" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <h4>Başlık</h4>
            <input type="text" name="baslik"/><br />
            <h4>Açıklama</h4>
            <textarea rows="10" cols="40" name="detay"></textarea>
            <br /><input type="submit" value="Kaydet">
        </form>
    </div>
@endsection