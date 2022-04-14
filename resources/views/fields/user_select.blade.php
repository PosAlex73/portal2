<div class="mb-3">
    <label for="user_id" class="form-label">{{ __('vars.users') }}</label>
    <select class="form-select" name="{{ $field_name ?? 'user_id' }}" id="user_id">
        @foreach($users as $user)
            <option value="{{ $user->id }}" >{{ $user->full_name }}</option>
        @endforeach
    </select>
</div>

