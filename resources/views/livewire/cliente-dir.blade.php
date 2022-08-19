<div class="card" wire:ignore.self
     wire:model.lazy.debounce.500ms="a.{{$input->id}}"
     x-on:click.away="dropdown = false"
     x-data="{
        dropdown: false,
        results: [],
        autocomplete(input) {
            this.dropdown = true;
            if(input) {
                axios.get('/api/autocomplete/'+input).then(results => {
                    this.results = results.data.predictions
                })
            } else { this.results = []; }
        }
    }"
>
    <label class="...">{{ $input->objectable->answer }}</label>
    <div class="...">
        <input type="text" name="{{$input->id}}"
               x-on:input.debounce.stop="autocomplete($event.target.value)"
               x-on:keydown.enter.prevent="$refs.address.value = results[0].description; @this.set('a.place_id', results[0].place_id); dropdown = false"
               x-ref="address" value="{{$this->a[$input->id] ?? null}}"
               class="@error('a.'.$input->id) error @enderror"
        />
        <div wire:loading.class.remove="hidden" wire:target="a.{{$input->id}}" class="...">
            <i class="fad fa-spinner-third fa-fw fa-spin text-gray-400"></i>
        </div>
        <div wire:ignore>
            <template x-if="dropdown && results.length > 0">
                <div class="dropdown">
                    <div class="rounded-md bg-white shadow-xs">
                        <div class="py-1">
                            <template x-for="result in results">
                                <a x-on:click="$refs.address.value = result.description; @this.set('a.place_id', result.place_id); dropdown = false" x-text="result.description"
                                   href="javascript:void(0)" class="..."></a>
                            </template>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>

    @error('a.'.$input->id) <span class="...">{{ $message }}</span> @enderror
</div>
