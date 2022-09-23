const editor = CodeMirror.fromTextArea(document.getElementById('textblock'), {
    mode: 'xml',
    lineNumbers: true,
    theme: 'dracula',
});

document.getElementById('language').addEventListener('change', (event) => {
    console.log(`Select language: [${event.target.value}]`);
    editor.setOption('mode', event.target.value);
});

