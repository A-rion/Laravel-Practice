<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{$job['title']}}</h2>
    <p>This Designation pays {{$job['salary']}} salary Per Month.</p>
</x-layout>
