<div>
    <div>
        <div class="row">
            <div class="col-md-6">
                <h1>Necessary Documents</h1>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-success sm" wire:click.prevent="addInput()">+</button>
            </div>
        </div>


        @if (session()->has('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif


            <div class="mb-3">
                @php
                    $i=1;
                @endphp

                @foreach ($inputs as $index => $input)
                <label for="name" class="form-label">Name {{ $i}}</label>
                    <div class="input-group">
                        <input type="text" class="form-control col-md-10 " name="file_list[]" wire:model="inputs.{{ $index }}" required />
                        <button type="button" class="btn btn-danger sm" wire:click.prevent="removeInput({{ $index }})">-</button>
                    </div>
                    <br>
                    @php
                        $i=$i+1;
                    @endphp
                @endforeach

            </div>


    </div>

</div>

