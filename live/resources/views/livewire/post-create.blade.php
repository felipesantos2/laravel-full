<div>

    <form wire:submit='create' action="#">
        <div class="p-2">
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input type="text" name="title" wire:model='title' id="title" class="input">
                    <span class="has-text-danger p-2 is-inline-block"> @error('title') {{ $message }} @enderror </span>
                </div>
            </div>

            <div class="field">
                <label class="label">Content</label>
                <div class="control">
                    <input type="text" name="content" wire:model='content' id="content" class="input">
                    <span class="has-text-danger p-2 is-inline-block"> @error('title') {{ $message }} @enderror </span>
                </div>
            </div>
            <button class="button" type="submit">Submit</button>
        </div>
    </form>


</div>
