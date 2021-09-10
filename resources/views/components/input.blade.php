@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border border-gray-300 focus:ring focus:ring-blue-200 rounded-xl focus:border-blue-300 transition duration-200']) !!}>
