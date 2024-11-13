<div>

    <form wire:submit='create' action="#">
        <div class="p-2">
            <input type="text" name="title" wire:model='title' id="title" class="input">

            <span>
                @error('title')
                    {{ $message }}
                @enderror
            </span>

            <hr>

            <input type="text" name="content" wire:model='content' id="content" class="input">

            <span>
                @error('content')
                    {{ $message }}
                @enderror
            </span>

            <hr>

            <button class="button" type="submit">Submit</button>
        </div>
    </form>

</div>
