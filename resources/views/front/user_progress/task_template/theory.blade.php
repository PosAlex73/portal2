<form action="{{ route('front.task.check', ['task' => $task]) }}" method="post">
    @csrf
    @include('buttons.submit')
</form>
