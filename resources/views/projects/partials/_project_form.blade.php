<div class="form-group">
    <label for="title">Project title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"
        aria-describedby="titleError" placeholder="Write a title">
    <small id="titleError" class="form-text text-muted">
        @error('title')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </small>
</div>

<div class="form-group">
    <label for="description">Project description</label>
    <textarea name="description" id="description" placeholder="Write a description" aria-describedby="descriptionError"
        class="form-control">{{ old('description') }}</textarea>
    <small id="descriptionError" class="form-text text-muted">
        @error('description')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </small>
</div>

<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email"
        aria-describedby="emailHelp" placeholder="Write your email">
    <small id="emailHelp" class="form-text text-muted">
        @error('email')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </small>
</div>

<div class="form-group">
    <label for="city">Project city</label>
    <input type="text" class="form-control" name="city" id="city" value="{{ old('city') }}" aria-describedby="emailHelp"
        placeholder="Write project city">
    <small id="emailHelp" class="form-text text-muted">
        @error('city')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </small>
</div>

<button type="submit" class="btn btn-primary btn-block my-4">{{ $btn_text }}</button>
