<?php
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

function e($html) {
  return htmlspecialchars($html, ENT_QUOTES);
}

$word = '';
if (array_key_exists('word', $_GET)) {
  $word = $_GET['word'];
}

?>
<!DOCTYPE html>
<html lang="ja"> 
<head> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <meta name="description" content="英語の単語やフレーズを調べる。"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <title>英語の単語やフレーズを調べる。</title> 
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/main.css?t=4">
  <script src="js/main.js" defer></script>
</head> 
<body> 
    <main>
    <h1>英単語・フレーズ検索</h1>

    <div class="wordArea">
        <label for="word">検索する文字列：</label><input type="text" id="word" name="word" value="<?php echo(e($word)); ?>">
    </div>
    <div class="table-wrapper"> 
        <table class="searchTable">
        <caption>検索を実行する</caption>
        <thead>
        <tr>
          <th>サイト</th>
          <th>検索</th>
          <th>説明</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=eow.alc.co.jp&amp;sz=15" height="15" width="15" alt="">
            英辞郎 (ALC)
          </td>
          <td><button id="btnAlc" class="btnSearch">&#x1f50d;</button></td>
          <td>和英辞典</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=ejje.weblio.jp&amp;sz=15" height="15" width="15" alt="">
            Weblio
          </td>
          <td><button id="btnWeblio" class="btnSearch">&#x1f50d;</button></td>
          <td>いろいろ</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.oxfordlearnersdictionaries.com&amp;sz=15" height="15" width="15" alt="">
            Oxford Learner's Dictionaries
          </td>
          <td><button id="btnOxf" class="btnSearch">&#x1f50d;</button></td>
          <td>英英辞典</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.dictionary.com&amp;sz=15" height="15" width="15" alt="">
            Dictionary.com
          </td>
          <td><button id="btnDictionaryCom" class="btnSearch">&#x1f50d;</button></td>
          <td>英英辞典</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.thesaurus.com&amp;sz=15" height="15" width="15" alt="">
            Thesaurus.com
          </td>
          <td><button id="btnThesaurusCom" class="btnSearch">&#x1f50d;</button></td>
          <td>シソーラス（類語辞典）</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=skell.sketchengine.eu&amp;sz=15" height="15" width="15" alt="">
            SKELL (Word sketch)
          </td>
          <td><button id="btnSkell" class="btnSearch">&#x1f50d;</button></td>
          <td>実際の使い方が分かる（コロケーション）。</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.just-the-word.com&amp;sz=15" height="15" width="15" alt="">
            Just the Word
          </td>
          <td><button id="btnJustTheWord" class="btnSearch">&#x1f50d;</button></td>
          <td>コロケーション</td>
        </tr>
        <tr>
          <td>
            <img src="./images/favicon-default1.png" height="15" width="15" alt="">
            Netspeak
          </td>
          <td><button id="btnNetspeak" class="btnSearch">&#x1f50d;</button></td>
          <td>コロケーション</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=youglish.com&amp;sz=15" height="15" width="15" alt="">
            YouGlish.com
          </td>
          <td><button id="btnYouGlish" class="btnSearch">&#x1f50d;</button></td>
          <td>指定したフレーズを発音している動画を再生してくれる。</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.urbandictionary.com&amp;sz=15" height="15" width="15" alt="">
            URbaN
          </td>
          <td><button id="btnUrban" class="btnSearch">&#x1f50d;</button></td>
          <td>スラングも検索できる。</td>
        </tr>
        </tbody>
        </table>

        <table class="linkOpenTable">
        <caption>サイトを開くだけ</caption>
        <thead>
        <tr>
          <th>サイト</th>
          <th>開く</th>
          <th>説明</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>
            <img src="./images/favicon-default1.png" height="15" width="15" alt="">
            IDIOM Search
          </td>
          <td><button id="btnIdiomSearch" class="btnOpen">&#x1f50d;</button></td>
          <td>定型表現をハイライトしてくれる。</td>
        </tr>
        <tr>
          <td>
            <img src="./images/favicon-default1.png" height="15" width="15" alt="">
            Multi-Word Units Profiler
          </td>
          <td><button id="btnMwup" class="btnOpen">&#x1f50d;</button></td>
          <td>定型表現をハイライトしてくれる。</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.lextutor.ca&amp;sz=15" height="15" width="15" alt="">
            Phrase Profiler
          </td>
          <td><button id="btnPhraseProfiler" class="btnOpen">&#x1f50d;</button></td>
          <td>定型表現をハイライトしてくれる。</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.deepl.com&amp;sz=15" height="15" width="15" alt="">
            DeepL
          </td>
          <td><button id="btnDeepL" class="btnOpen">&#x1f50d;</button></td>
          <td>翻訳ツール</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.deepl.com&amp;sz=15" height="15" width="15" alt="">
            DeepL Write
          </td>
          <td><button id="btnDeepLWrite" class="btnOpen">&#x1f50d;</button></td>
          <td>英文を改善するツール</td>
        </tr>
        </tbody>
        </table>
    </div>

    <div class="note">
      <p>* このページに GETパラメータ 'word' を指定してアクセスすると、その値が検索フィールドにセットされる。</p>
    </div>

    </main>
</body> 
</html>