@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Select Achievement to Edit</h1>

    <form action="{{ route('achievements.edit', '') }}" method="GET" id="selectForm">
        <label for="achievement" class="block mb-2">Choose a title:</label>
        <select name="achievement_id" id="achievement" class="w-full p-2 border rounded" required>
            <option value="">-- Select Achievement --</option>
            @foreach ($achievements as $ach)
                <option value="{{ $ach->id }}">{{ $ach->title }}</option>
            @endforeach
        </select>

        <button type="submit" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
            Edit Achievement
        </button>
    </form>
</div>

<script>
    const form = document.getElementById('selectForm');
    const select = document.getElementById('achievement');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const id = select.value;
        if (id) {
            window.location.href = `/achievements/${id}/edit`;
        }
    });
</script>
@endsection
