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
  <title>英単語・フレーズ検索</title>
  <style>
<?php
echo file_get_contents('./css/normalize.min.css');
echo file_get_contents('./css/main.css');
?>
</style>
  <script src="js/main.js?t=17" defer></script>
</head> 
<body> 
    <main>
    <h1>英単語・フレーズ検索</h1>

    <div class="wordArea">
        <label for="word">検索する文字列：</label><input type="text" id="word" name="word" value="<?php echo(e($word)); ?>">
    </div>
    <div class="table-wrapper"> 
      <table class="searchTable">
        <caption></caption>
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
          <td><button id="btnAlc" class="btnSearch" title="このサイトで検索する">&#x1f50d;</button></td>
          <td>翻訳者グループ作成の対訳データベース</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=ejje.weblio.jp&amp;sz=15" height="15" width="15" alt="">
            Weblio
          </td>
          <td><button id="btnWeblio" class="btnSearch" title="このサイトで検索する">&#x1f50d;</button></td>
          <td>いろいろ。関連する語。</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.oxfordlearnersdictionaries.com&amp;sz=15" height="15" width="15" alt="">
            Oxford Learner's Dictionaries
          </td>
          <td><button id="btnOxf" class="btnSearch" title="このサイトで検索する">&#x1f50d;</button></td>
          <td>英英辞典</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.ldoceonline.com&amp;sz=15" height="15" width="15" alt="">
            Longman English Dictionary
          </td>
          <td><button id="btnLongman" class="btnSearch" title="このサイトで検索する">&#x1f50d;</button></td>
          <td>英英辞典</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.dictionary.com&amp;sz=15" height="15" width="15" alt="">
            Dictionary.com
          </td>
          <td><button id="btnDictionaryCom" class="btnSearch" title="このサイトで検索する">&#x1f50d;</button></td>
          <td>英英辞典</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.thesaurus.com&amp;sz=15" height="15" width="15" alt="">
            Thesaurus.com
          </td>
          <td><button id="btnThesaurusCom" class="btnSearch" title="このサイトで検索する">&#x1f50d;</button></td>
          <td>シソーラス（類語辞典）</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.etymonline.com&amp;sz=15" height="15" width="15" alt="">
            Etymonline
          </td>
          <td><button id="btnEtymonline" class="btnSearch" title="このサイトで検索する">&#x1f50d;</button></td>
          <td>語源辞典</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=skell.sketchengine.eu&amp;sz=15" height="15" width="15" alt="">
            SKELL (Word sketch)
          </td>
          <td><button id="btnSkell" class="btnSearch" title="このサイトで検索する">&#x1f50d;</button></td>
          <td>例文 / コロケーション（実際の使い方）/ 使われ方が似ている単語</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=wordnet.princeton.edu&amp;sz=15" height="15" width="15" alt="">
            WordNet
          </td>
          <td><button id="btnWordNet" class="btnSearch" title="このサイトで検索する">&#x1f50d;</button></td>
          <td>語彙データベース / 関連のある単語や概念のネットワークを探る</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.just-the-word.com&amp;sz=15" height="15" width="15" alt="">
            Just the Word
          </td>
          <td><button id="btnJustTheWord" class="btnSearch" title="このサイトで検索する">&#x1f50d;</button></td>
          <td>コロケーション。句動詞などの組み合わせをチェックできる。
          </td>
        </tr>
        <tr>
          <td>
            <img src="./images/favicon-default1.png" height="15" width="15" alt="">
            Netspeak
          </td>
          <td><button id="btnNetspeak" class="btnSearch" title="このサイトで検索する">&#x1f50d;</button></td>
          <td>コロケーション</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.urbandictionary.com&amp;sz=15" height="15" width="15" alt="">
            URbaN
          </td>
          <td><button id="btnUrban" class="btnSearch" title="このサイトで検索する">&#x1f50d;</button></td>
          <td>スラングも検索できる。</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=youglish.com&amp;sz=15" height="15" width="15" alt="">
            YouGlish.com
          </td>
          <td><button id="btnYouGlish" class="btnSearch" title="このサイトで検索する">&#x1f50d;</button></td>
          <td>指定したフレーズを発音している動画を再生してくれる。</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=google.com&amp;sz=15" height="15" width="15" alt="">
            Google
          </td>
          <td><button id="btnGoogle" class="btnSearch" title="このサイトで検索する">&#x1f50d;</button></td>
          <td>ググる。画像検索でイメージを覚えるのも良し。</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=quillbot.com&amp;sz=15" height="15" width="15" alt="">
             QuillBot AI
          </td>
          <td><button id="btnQuillBotAI" class="btnSearch" title="このサイトで検索する">&#x1f50d;</button></td>
          <td>文法チェッカー</td>
        </tr>
        </tbody>
      </table>

      <table class="linkOpenTable">
        <caption>こちらはサイトを開くだけ</caption>
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
            <img src="https://www.google.com/s2/favicons?domain=www.english-corpora.org&amp;sz=15" height="15" width="15" alt="">
            COCA
          </td>
          <td><button id="btnCoca" class="btnOpen" title="サイトを開く">&#x1f30f;</button></td>
          <td>要ログイン。コロケーション / 頻度 / ジャンル</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=english.edward.io&amp;sz=15" height="15" width="15" alt="">
            English Syntax Highlighter
          </td>
          <td><button id="btnEngSynHigh" class="btnSearch" title="このサイトで検索する">&#x1f30f;</button></td>
          <td>品詞を教えてくれる。</td>
        </tr>
        <tr>
          <td>
            <img src="./images/favicon-default1.png" height="15" width="15" alt="">
            IDIOM Search
          </td>
          <td><button id="btnIdiomSearch" class="btnOpen" title="サイトを開く">&#x1f30f;</button></td>
          <td>定型表現をハイライトしてくれる。</td>
        </tr>
        <tr>
          <td>
            <img src="./images/favicon-default1.png" height="15" width="15" alt="">
            Multi-Word Units Profiler
          </td>
          <td><button id="btnMwup" class="btnOpen" title="サイトを開く">&#x1f30f;</button></td>
          <td>定型表現をハイライトしてくれる。</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.lextutor.ca&amp;sz=15" height="15" width="15" alt="">
            Phrase Profiler
          </td>
          <td><button id="btnPhraseProfiler" class="btnOpen" title="サイトを開く">&#x1f30f;</button></td>
          <td>定型表現をハイライトしてくれる。</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=translate.google.co.jp&amp;sz=15" height="15" width="15" alt="">
            Google翻訳
          </td>
          <td><button id="btnGoogleTranslate" class="btnOpen" title="サイトを開く">&#x1f30f;</button></td>
          <td>翻訳ツール</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.deepl.com&amp;sz=15" height="15" width="15" alt="">
            DeepL
          </td>
          <td><button id="btnDeepL" class="btnOpen" title="サイトを開く">&#x1f30f;</button></td>
          <td>翻訳ツール</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=www.deepl.com&amp;sz=15" height="15" width="15" alt="">
            DeepL Write
          </td>
          <td><button id="btnDeepLWrite" class="btnOpen" title="サイトを開く">&#x1f30f;</button></td>
          <td>英文を改善するツール</td>
        </tr>
        <tr>
          <td>
            <img src="https://www.google.com/s2/favicons?domain=tophonetics.com&amp;sz=15" height="15" width="15" alt="">
            toPhonetics
          </td>
          <td><button id="btnToPhonetics" class="btnOpen" title="サイトを開く">&#x1f30f;</button></td>
          <td>英文を発音記号に変換してくれる。</td>
        </tr>
        </tbody>
        </table>

        <table class="writingLinkTable">
        <caption>英作文関連</caption>
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
            <img src="https://www.google.com/s2/favicons?domain=writeandimprove.com&amp;sz=15" height="15" width="15" alt="">
            Write&amp;Improve
          </td>
          <td><button id="btnWriteAndImprove" class="btnOpen" title="サイトを開く">&#x1f30f;</button></td>
          <td>英作文の練習。</td>
        </tr>
        <tr>
          <td class="tdEnglister">
            <del><img src="https://www.google.com/s2/favicons?domain=englister.yunomy.com&amp;sz=15" height="15" width="15" alt="">
            Englister</del>
          </td>
          <td><button id="btnEnglister" class="btnOpen" title="サイトを開く">&#x1f30f;</button></td>
          <td><del>英作文の練習。フレーズのメモも保存できる。</del></td>
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
