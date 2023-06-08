<div>
    <div>
        <h1>Necessary Documents</h1>

        @if (session()->has('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form wire:submit.prevent="save">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                @foreach ($inputs as $index => $input)
                    <div class="input-group">
                        <input type="text" class="form-control" name="name[]" wire:model="inputs.{{ $index }}" />
                        <button type="button" class="btn btn-danger" wire:click.prevent="removeInput({{ $index }})">-</button>
                    </div>
                @endforeach
                <button type="button" class="btn btn-success" wire:click.prevent="addInput()">+</button>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

</div>
