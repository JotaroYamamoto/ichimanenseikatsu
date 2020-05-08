@extends('layouts.binbo')
@section('content')
  <div class="wapper">
    <div class="main2">
      <div class="main--contents2">
        <form action="" method="post">
          @csrf
          <div class="add__top">
            <div class="add__top__left">
              <p class="textA">メイン写真</p>
              <label for="file">
                <div class="add-img" >
                  <img class="camera-icon"src="https://teianjapan.com/shiruetto/wp-content/uploads/2017/04/%E3%82%AB%E3%83%A1%E3%83%A9%E3%80%80%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B3001.png" alt="">
                  <br />
                  <input id="file" type="file" name="mainimg">
                </div>
              </label>
            </div>
            <div class="add__top__right">
              <div class="add-title">
                <p class="textA">タイトル</p>
                <input class="text-form inputA" type="text" name="title">
              </div>
              <div class="add-text">
                <p class="textA">説明</p>
                <textarea class="text-form areaA" rows="10" name="text"></textarea>
              </div>
            </div>
          </div>

          <div class="add__mid">
            <div class="add--materials">
              <p class="textA">材料</p>
              <div class="materials-colums">
                <p>材料</p>
                <p>分量</p>
              </div>
              <div class="materials-form">
                <input type="text" class="inputA materials-form__left">
                <input type="text" class="inputA materials-form__right">
                <input type="text" class="inputA materials-form__left">
                <input type="text" class="inputA materials-form__right">
                <input type="text" class="inputA materials-form__left">
                <input type="text" class="inputA materials-form__right">
                <input type="text" class="inputA materials-form__left">
                <input type="text" class="inputA materials-form__right">
                <input type="text" class="inputA materials-form__left">
                <input type="text" class="inputA materials-form__right">
              </div>
            </div>

            <div class="add--cook">
              <p class="textA howto">作り方</p>
              <p class="cook-index">1</p>
              <div class="cook-form">
                <div class="cook-form__left">
                  <p>写真</p>
                  <label for="file">
                    <div class="add-img2" >
                      <img class="camera-icon"src="https://teianjapan.com/shiruetto/wp-content/uploads/2017/04/%E3%82%AB%E3%83%A1%E3%83%A9%E3%80%80%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B3001.png" alt="">
                      <br />
                      <input id="file" type="file">
                    </div>
                  </label>
                </div>
                <div class="cook-form__right">
                  <p>説明</p>
                  <textarea class="cook-area"></textarea>
                </div>
              </div>
              <p class="cook-index">2</p>
              <div class="cook-form">
                <div class="cook-form__left">
                  <p>写真</p>
                  <label for="file">
                    <div class="add-img2" >
                      <img class="camera-icon"src="https://teianjapan.com/shiruetto/wp-content/uploads/2017/04/%E3%82%AB%E3%83%A1%E3%83%A9%E3%80%80%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B3001.png" alt="">
                      <br />
                      <input id="file" type="file">
                    </div>
                  </label>
                </div>
                <div class="cook-form__right">
                  <p>説明</p>
                  <textarea class="cook-area"></textarea>
                </div>
              </div>
              <p class="cook-index">3</p>
              <div class="cook-form">
                <div class="cook-form__left">
                  <p>写真</p>
                  <label for="file">
                    <div class="add-img2" >
                      <img class="camera-icon"src="https://teianjapan.com/shiruetto/wp-content/uploads/2017/04/%E3%82%AB%E3%83%A1%E3%83%A9%E3%80%80%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B3001.png" alt="">
                      <br />
                      <input id="file" type="file">
                    </div>
                  </label>
                </div>
                <div class="cook-form__right">
                  <p>説明</p>
                  <textarea class="cook-area"></textarea>
                </div>
              </div>
            </div>
            
            <div class="add--cost">
              <p class="textA">原価</p>
              <div class="add--cost-form">
                <input class="add-input" type="text" name="cost"><span>円</span>
              </div>
            </div>
          </div>

          <div class="add__bottom">
            <input class="submit-btn" type="submit" value="送信する">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
