<style type="text/css" media="screen">
    #monaco-editor {
        position: relative;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
</style>


<div id="monaco-editor"></div>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        const editor = ace.edit("monaco-editor");
        editor.setTheme("ace/theme/dracula");
        editor.session.setMode("ace/mode/php");
        editor.setOptions({
            maxLines: 75,
            minLines: 25,
        })
    });
</script>
