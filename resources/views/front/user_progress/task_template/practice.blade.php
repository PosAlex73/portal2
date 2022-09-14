<style type="text/css" media="screen">
    #monaco-editor {
        position: relative;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
</style>

<form action="{{ route('front.ptask.check', ['task' => $task]) }}" method="post">
    @csrf
    <div id="monaco-editor" class=" mb-2"></div>
    <textarea name="result" style="display: none" id="result" cols="30" rows="10"></textarea>
    @if($failed_task_result)
        <p class="alert-danger p-2">{!! $failed_task_result['result'] !!}</p>
    @endif
    @include('buttons.submit')
</form>


<script>
    document.addEventListener('DOMContentLoaded', function(){
        const editor = ace.edit("monaco-editor");
        const textarea = document.getElementById('result')

        editor.setTheme("ace/theme/dracula");
        editor.session.setMode("ace/mode/php");
        editor.setOptions({
            maxLines: 75,
            minLines: 25,
        })

        editor.getSession().on('change', function (){
            textarea.innerText = editor.getSession().getValue()
        })
    });
</script>
