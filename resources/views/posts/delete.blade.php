@extends('layouts.binbo')

@section('content')
<div class="wapper">
  <div class="main2">
    <div class="main--contents2">
      <form action="" method="post">
      @csrf
        <input type="hidden" value="{{$post->id}}">
        <div class="show-top">
          <div class="show-title">
            <h1>{{$post->title}}({{$post->cost}}円)</h1>
          </div>
          <div class="show-main">
            <img class="show-img" src="{{$post->mainimg}}" alt="">
            <div class="show-main-right">
              <div class="show-text">
                <p>{{$post->text}}</p>
              </div>
              <div class="show-materials">
                <h2 class="textA">材料</h2>
                <div class="material">
                  <p class="material-name">春キャベツ</p>
                  <p class="material-amount">1/6程度</p>
                </div>
                <div class="material">
                  <p class="material-name">春キャベツ</p>
                  <p class="material-amount">1/6程度</p>
                </div>
                <div class="material">
                  <p class="material-name">春キャベツ</p>
                  <p class="material-amount">1/6程度</p>
                </div>
              </div>
            </div>
          </div>
          <div class="show-cook">
            <h1 class="textB">作り方</h1>
            <div class="show-cook-main">
              <p class="cook-index">1</p>
              <div class="cook-set">
                <img src="https://umablo.info/wp-content/uploads/2020/03/DSC_0129-360x230.png" alt="">
                <p class="show-cook-text">キャベツはざく切りにして洗い、裏返した豚肉の上にこんもりと並べてだしの素と酒を振りかけ蓋をして3〜5分蒸し焼きにします。</p>
              </div>
            </div>
            <div class="show-cook-main">
              <p class="cook-index">2</p>
              <div class="cook-set">
                <img src="https://umablo.info/wp-content/uploads/2020/03/DSC_0129-360x230.png" alt="">
                <p class="show-cook-text">キャベツはざく切りにして洗い、裏返した豚肉の上にこんもりと並べてだしの素と酒を振りかけ蓋をして3〜5分蒸し焼きにします。</p>
              </div>
            </div>
            <div class="show-cook-main">
              <p class="cook-index">3</p>
              <div class="cook-set">
                <img src="https://umablo.info/wp-content/uploads/2020/03/DSC_0129-360x230.png" alt="">
                <p class="show-cook-text">キャベツはざく切りにして洗い、裏返した豚肉の上にこんもりと並べてだしの素と酒を振りかけ蓋をして3〜5分蒸し焼きにします。</p>
              </div>
            </div>
          </div>
        </div>
        <input type="submit" value="削除">
      </form>
    </div>
  </div>
</div>
@endsection