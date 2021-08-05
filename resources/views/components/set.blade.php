<x-booty-group>
    <x-booty-label :value="$label" :invalid="$errors->has($name)" />
    
    @if ($attributes->has('help'))
        <small class="form-text text-muted">
            {{ $attributes->get('help') }}
        </small>
    @endif
    
    @if ($slot->isNotEmpty())
        <div class="input-group">
    @endif
    
    <x-booty-input :name="$name" :invalid="$errors->has($name)" {{ $attributes->except(['help']) }} />

    @if ($slot->isNotEmpty())
        {{ $slot }}
        </div>
    @endif

    <x-booty-error class="order-last" :message="$errors->first($name)" />
</x-booty-group>
