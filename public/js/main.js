
window.addEventListener('DOMContentLoaded', (event) => {
    const elmWord = document.querySelector('#word');
    elmWord.focus();
    function searchAlc(word) {
        if (word == '') return;
        const wordEscaped = encodeURIComponent(word);
        window.open(`https://eow.alc.co.jp/search?q=${wordEscaped}`, '_blank');
    }
    function searchWeblio(word) {
        if (word == '') return;
        const wordEscaped = encodeURIComponent(word);
        window.open(`https://ejje.weblio.jp/content/${wordEscaped}`, '_blank');
    }
    function searchOxf(word) {
        if (word == '') return;
        const wordEscaped = encodeURIComponent(word);
        window.open(`https://www.oxfordlearnersdictionaries.com/search/english/direct/?q=${wordEscaped}`, '_blank');

    }
    function searchDictionaryCom(word) {
        if (word == '') return;
        const wordEscaped = encodeURIComponent(word);
        window.open(`https://www.dictionary.com/browse/${wordEscaped}`, '_blank');
    }
    function searchThesaurusCom(word) {
        if (word == '') return;
        const wordEscaped = encodeURIComponent(word);
        window.open(`https://www.thesaurus.com/browse/${wordEscaped}`, '_blank');
    }
    function searchSkell(word) {
        if (word == '') return;
        const wordEscaped = encodeURIComponent(word);
        window.open(`https://skell.sketchengine.eu/#result?f=wordsketch&lang=en&query=${wordEscaped}`, '_blank');
    }
    function searchJustTheWord(word) {
        if (word == '') return;
        const wordEscaped = encodeURIComponent(word);
        window.open(`http://www.just-the-word.com/main.pl?word=${wordEscaped}&mode=alternatives`, '_blank');
    }
    function searchNetspeak(word) {
        if (word == '') return;
        const wordEscaped = encodeURIComponent(word);
        window.open(`https://netspeak.org/#q=${wordEscaped}&corpus=web-en`, '_blank');
    }
    function searchUrban(word) {
        if (word == '') return;
        const wordEscaped = encodeURIComponent(word);
        window.open(`https://www.urbandictionary.com/define.php?term=${wordEscaped}`, '_blank');
    }
    function searchYouGlish(word) {
        if (word == '') return;
        const wordEscaped = encodeURIComponent(word);
        window.open(`https://youglish.com/pronounce/${wordEscaped}/english?`, '_blank');
    }
    function searchGoogle(word) {
        if (word == '') return;
        const wordEscaped = encodeURIComponent(word);
        window.open(`https://www.google.com/search?q=${wordEscaped}`, '_blank');
    }

    function openQuillBotAI() {
        window.open(`https://quillbot.com/grammar-check`, '_blank');
    }
    function openIdiomSearch() {
        window.open(`https://idiomsearch.lsti.ucl.ac.be/`, '_blank');
    }
    function openMwup() {
        window.open(`https://multiwordunitsprofiler.pythonanywhere.com/`, '_blank');
    }
    function openPhraseProfiler() {
        window.open(`https://www.lextutor.ca/vp/collocs/`, '_blank');
    }
    function openDeepL() {
        window.open(`https://www.deepl.com/translator`, '_blank');
    }
    function openDeepLWrite() {
        window.open(`https://www.deepl.com/write`, '_blank');
    }
    function openToPhonetics() {
        window.open(`https://tophonetics.com/ja/`, '_blank');
    }
    function openEnglister() {
        window.open(`https://englister.yunomy.com/`, '_blank');
    }

    document.querySelector('#btnAlc').addEventListener('click', () => searchAlc(elmWord.value));
    document.querySelector('#btnWeblio').addEventListener('click', () => searchWeblio(elmWord.value));
    document.querySelector('#btnOxf').addEventListener('click', () => searchOxf(elmWord.value));
    document.querySelector('#btnDictionaryCom').addEventListener('click', () => searchDictionaryCom(elmWord.value));
    document.querySelector('#btnThesaurusCom').addEventListener('click', () => searchThesaurusCom(elmWord.value));
    document.querySelector('#btnSkell').addEventListener('click', () => searchSkell(elmWord.value));
    document.querySelector('#btnJustTheWord').addEventListener('click', () => searchJustTheWord(elmWord.value));
    document.querySelector('#btnNetspeak').addEventListener('click', () => searchNetspeak(elmWord.value));
    document.querySelector('#btnUrban').addEventListener('click', () => searchUrban(elmWord.value));
    document.querySelector('#btnYouGlish').addEventListener('click', () => searchYouGlish(elmWord.value));
    document.querySelector('#btnGoogle').addEventListener('click', () => searchGoogle(elmWord.value));
    document.querySelector('#btnIdiomSearch').addEventListener('click', openIdiomSearch);
    document.querySelector('#btnQuillBotAI').addEventListener('click', openQuillBotAI);
    document.querySelector('#btnMwup').addEventListener('click', openMwup);
    document.querySelector('#btnPhraseProfiler').addEventListener('click', openPhraseProfiler);
    document.querySelector('#btnDeepL').addEventListener('click', openDeepL);
    document.querySelector('#btnDeepLWrite').addEventListener('click', openDeepLWrite);
    document.querySelector('#btnToPhonetics').addEventListener('click', openToPhonetics);
    document.querySelector('#btnEnglister').addEventListener('click', openEnglister);
}); 