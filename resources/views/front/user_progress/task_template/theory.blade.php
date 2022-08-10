<form action="{{ route('front.ptask.check', ['task' => $task]) }}" method="post">
    @csrf
    @include('buttons.submit')
</form>
