## ①課題内容（どんな作品か）
＜内容＞<br>
PHP/MySQLを用い、「新規登録」＆「ログイン」画面実装（前回課題に追加した）



## ②工夫した点・こだわった点
- 　卒制で取り組みたい「動画を用いた検索エンジン」のベースを想定。
- 　トップ画面「login.php」でログインor新規登録を選択するUIを実装。
- 　「ログインする場合」：login.php → login_act.php → index.phpの順に遷移。（下記③記載の通り、index.phpへの遷移が未達）
- 　「新規登録する場合」：login.php → entry.php　→check.php　→ index.phpの順に遷移。<br>
　　　→記入ミスを記すエラー文の表示も実装。(html内にphpで記入）
        
- ECサイトの商品追加は、「cms/item.php」から可能とした。<br>
（管理者ログイン画面ではなく、URLを知っている管理者のみ入れるという認識でいるが、正しいのでしょうか・・・！？）



## ③質問・疑問（あれば）
-　longin画面記入後、下記エラーが出るが解決まで辿り着けていない。<br>
　　　→if構文内で、「配列」を認識していないためのエラーであるらしいが・・・未解決です。<br>
　
　Notice: Trying to access array offset on value of type bool in /Applications/MAMP/htdocs/EcSite-master/login_act.php on line 21

　

## ④その他（感想、シェアしたいことなんでも）
-　PHP沼にはまると抜け出せない。が、PHPおもしろい！バックエンドができてこそ、できることが増えると実感。

  
 ## ⑤参照資料
 -　https://www.tomotaku.com/programing-join-system/
