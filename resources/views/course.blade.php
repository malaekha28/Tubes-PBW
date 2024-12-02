<x-app-layout title="Course">
    <div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Courses</h1>
    <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-2 gap-6">
        @foreach($courses as $course)
            <a href="{{ route('courses.show', $course->id) }}"
                class="block bg-white shadow-md rounded-lg overflow-hidden transform transition hover:-translate-y-1 hover:shadow-lg hover:border-red-500 border-2 border-transparent">
                <img src="/images/{{ $course->image }}" alt="Course Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $course->title }}</h2>
                    <p class="text-gray-600 text-sm mt-2">{{ $course->description }}</p>
                    <div class="flex items-center justify-between mt-4">
                        <div class="flex items-center">
                            <p class="ml-2 text-gray-700 text-sm">{{ $course->author }}</p>
                        </div>
                        <span class="text-red-500 font-bold text-lg">Rp{{ number_format($course->price, 0, ',', '.') }}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
</x-app-layout>
