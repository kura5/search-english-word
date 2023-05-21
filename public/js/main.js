
window.addEventListener('DOMContentLoaded', (event) => {
    const elmWord = document.querySelector('#word');
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
        if (elmWord.value == '') return;
        const wordEscaped = encodeURIComponent(elmWord.value);
        window.open(`https://www.oxfordlearnersdictionaries.com/definition/english/company?q=${wordEscaped}`, '_blank');
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
}); 