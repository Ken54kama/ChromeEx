window.onload = function(){ //HTMLで動く関数という意味
  var XHR = new XMLHttpRequest;　//サーバー連携用のインスタンス
  XHR.open('GET', 'http://localhost/consulta.php',true);　//HTTPリクエストの発行 メソッド・パス
  XHR.onreadystatechange = function(){ //サーバーからのレスポンスを受け取る関数
    if (4 == this.readyState){　//現在の状態＿すべてのデータの受信完了
      var status = this.status;　//レスポンスの状態コードを定義
      if (400 > status){　//すべてのデータの受信が完了したとき
        var responseText = this.responseText;　//レスポンスボディの取得
        if (responseText){
          document.getElementById('resultado').innerHTML = responseText;
          //'resultado'というIDを付けられたtd要素の開始タグから終了タグの間のHTML
        }
      }
    }
  };
  XHR.send();

}
