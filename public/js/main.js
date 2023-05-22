
window.addEventListener('DOMContentLoaded', (event) => {
    const elmWord = document.querySelector('#word');
    elmWord.focus();
    document.querySelector('#btnAlc').addEventListener('click', () => {
        if (elmWord.value == '') return;
        const wordEscaped = encodeURIComponent(elmWord.value);
        window.open(`https://eow.alc.co.jp/search?q=${wordEscaped}`, '_blank');
    });
    document.querySelector('#btnWeblio').addEventListener('click', () => {
        if (elmWord.value == '') return;
        const wordEscaped = encodeURIComponent(elmWord.value);
        window.open(`https://ejje.weblio.jp/content/${wordEscaped}`, '_blank');
    });
    document.querySelector('#btnOxf').addEventListener('click', () => {
        const s = elmWord.value.trim();
        let wordEscapedInUrl, wordEscapedInParam;
        if (s == '') return;
        if (/\s/.test(s)) {
            wordEscapedInUrl = s.split(/\s+/).map(w => encodeURIComponent(w)).join('-');
            wordEscapedInParam = s.split(/\s+/).map(w => encodeURIComponent(w)).join('+');
        } else {
            wordEscapedInUrl = encodeURIComponent(s.trim()) + '_1';
            wordEscapedInParam = encodeURIComponent(s.trim());
        }
        window.open(`https://www.oxfordlearnersdictionaries.com/definition/english/${wordEscapedInUrl}?q=${wordEscapedInParam}`, '_blank');
    });
    document.querySelector('#btnDictionaryCom').addEventListener('click', () => {
        if (elmWord.value == '') return;
        const wordEscaped = encodeURIComponent(elmWord.value);
        window.open(`https://www.dictionary.com/browse/${wordEscaped}`, '_blank');
    });
    document.querySelector('#btnThesaurusCom').addEventListener('click', () => {
        if (elmWord.value == '') return;
        const wordEscaped = encodeURIComponent(elmWord.value);
        window.open(`https://www.thesaurus.com/browse/${wordEscaped}`, '_blank');
    });
    document.querySelector('#btnSkell').addEventListener('click', () => {
        if (elmWord.value == '') return;
        const wordEscaped = encodeURIComponent(elmWord.value);
        window.open(`https://skell.sketchengine.eu/#result?f=wordsketch&lang=en&query=${wordEscaped}`, '_blank');
    });
    document.querySelector('#btnJustTheWord').addEventListener('click', () => {
        if (elmWord.value == '') return;
        const wordEscaped = encodeURIComponent(elmWord.value);
        window.open(`http://www.just-the-word.com/main.pl?word=${wordEscaped}&mode=alternatives`, '_blank');
    });
    document.querySelector('#btnNetspeak').addEventListener('click', () => {
        if (elmWord.value == '') return;
        const wordEscaped = encodeURIComponent(elmWord.value);
        window.open(`https://netspeak.org/#q=${wordEscaped}&corpus=web-en`, '_blank');
    });
    document.querySelector('#btnYouGlish').addEventListener('click', () => {
        if (elmWord.value == '') return;
        const wordEscaped = encodeURIComponent(elmWord.value);
        window.open(`https://youglish.com/pronounce/${wordEscaped}/english?`, '_blank');
    });
    document.querySelector('#btnUrban').addEventListener('click', () => {
        if (elmWord.value == '') return;
        const wordEscaped = encodeURIComponent(elmWord.value);
        window.open(`https://www.urbandictionary.com/define.php?term=${wordEscaped}`, '_blank');
    });
    document.querySelector('#btnIdiomSearch').addEventListener('click', () => {
        window.open(`https://idiomsearch.lsti.ucl.ac.be/`, '_blank');
    });
    document.querySelector('#btnMwup').addEventListener('click', () => {
        window.open(`https://multiwordunitsprofiler.pythonanywhere.com/`, '_blank');
    });
    document.querySelector('#btnPhraseProfiler').addEventListener('click', () => {
        window.open(`https://www.lextutor.ca/vp/collocs/`, '_blank');
    });
    document.querySelector('#btnDeepL').addEventListener('click', () => {
        window.open(`https://www.deepl.com/translator`, '_blank');
    });
    document.querySelector('#btnDeepLWrite').addEventListener('click', () => {
        window.open(`https://www.deepl.com/write`, '_blank');
    });
}); 