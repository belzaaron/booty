<x-booty-group>
    <x-booty-label :value="$label" :invalid="$errors->has($name)" />
    @if ($slot->isNotEmpty())
        <div class="input-group">
    @endif

    <x-booty-input :name="$name" {{ $attributes->merge(['invalid' => $errors->has($name)]) }} />
    <x-booty-error class="order-last" :message="$errors->first($name)" />

    @if ($slot->isNotEmpty())
        {{ $slot }}
        </div>
    @endif
</x-booty-group>
