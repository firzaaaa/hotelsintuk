<textarea id="{{ $id }}" name="{{ $name }}"
{{ $attributes->merge(['class =>
    'rounded-md shadow-sm border-gray-300 facus:bolder-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'])}}
    >{{ $slot }}</textarea>