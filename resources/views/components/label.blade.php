<label {{ $attributes->merge(compact('class')) }}>
    {{ empty($value) ? $slot : $value }}
</label>
