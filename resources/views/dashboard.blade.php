<x-layout.app>
    <x-navbar/>

    <x-header title="MyPertamina Sentiment Analysis"
              description="Analyze the sentiment of text data using our AI model. Enter your text below to get started."/>

    {{-- Prediction form and result --}}
    <x-card>
        <div class="mb-6">
            <h1 class="text-2xl font-medium text-base-content">Predict Sentiment</h1>
            <p class="text-sm text-base-content/70">Enter text below to analyze its sentiment</p>
        </div>

        <form id="prediction-form" method="POST" action="{{ route('predict') }}">
            @csrf

            {{-- Input text --}}
            <x-textarea
                name="input"
                label="Input Text"
                placeholder="Enter text to analyze sentiment"
                required
                value="{{ old('input') }}"
                class="bg-base-100"
            />

            {{-- Submit button --}}
            <div class="mt-4">
                <button id="prediction-button" type="submit" class="btn btn-primary w-full">
                    <i class="fas fa-search mr-2"></i>Predict Sentiment
                </button>
            </div>
        </form>

        {{-- Prediction result --}}
        @if(session('prediction') && session('input'))
            @php
                $alertClass = 'alert-info';
                $sentimentIcon = 'fas fa-info-circle';

                if(strtolower(session('prediction')) == 'positive') {
                    $alertClass = 'alert-success';
                    $sentimentIcon = 'fas fa-smile';
                } elseif(strtolower(session('prediction')) == 'negative') {
                    $alertClass = 'alert-error';
                    $sentimentIcon = 'fas fa-frown';
                }
            @endphp

            <div class="divider my-6">Result</div>

            <div class="flex flex-col gap-4 p-6 rounded-lg alert {{ $alertClass }} shadow-md">
                <div class="flex items-center gap-2">
                    <i class="{{ $sentimentIcon }} text-xl"></i>
                    <h2 class="text-lg font-semibold">Prediction Result: {{ session('prediction') }}</h2>
                </div>

                <div class="bg-base-100 p-4 rounded-md mt-2 alert">
                    <h3 class="text-sm font-medium mb-1 opacity-70">Analyzed Text:</h3>
                    <p class="text-base">{{ session('input') }}</p>
                </div>
            </div>
        @endif
    </x-card>

    {{-- Prediction history --}}
    <x-card>
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-medium text-base-content">History</h1>
            <span class="text-sm text-base-content/70">{{ count($history ?? []) }} entries</span>
        </div>

        @if($history->isNotEmpty())
            <div class="space-y-4">
                @foreach($history as $item)
                    @php
                        $borderClass = 'border-info';
                        $badgeClass = 'badge-info';
                        $sentimentIcon = 'fas fa-info-circle';

                        if(strtolower($item['prediction']) == 'positive') {
                            $borderClass = 'border-success';
                            $badgeClass = 'badge-success';
                            $sentimentIcon = 'fas fa-smile';
                        } elseif(strtolower($item['prediction']) == 'negative') {
                            $borderClass = 'border-error';
                            $badgeClass = 'badge-error';
                            $sentimentIcon = 'fas fa-frown';
                        }
                    @endphp

                    <div class="bg-base-100 rounded-lg shadow-sm p-4 border-l-4 {{ $borderClass }}">
                        <div class="flex justify-between items-start mb-3">
                            <div class="flex items-center gap-2">
                                <i class="{{ $sentimentIcon }}"></i>
                                <span class="badge {{ $badgeClass }} font-medium">{{ $item['prediction'] }}</span>
                            </div>
                            <span class="text-xs text-base-content/60">
                                {{ \Carbon\Carbon::parse($item['created_at'])->format('M d, Y - H:i (T)') }}
                            </span>
                        </div>
                        <p class="text-sm line-clamp-3">{{ $item['input'] }}</p>
                    </div>
                @endforeach
            </div>

            {{-- Pagination links --}}
            <div class="mt-6 flex justify-center">
                {{ $history->links() }}
            </div>
        @else
            <div class="bg-base-100 p-6 rounded-lg text-center text-base-content/70">
                <i class="fas fa-history text-2xl mb-2"></i>
                <p>No history available yet</p>
            </div>
        @endif
    </x-card>
</x-layout.app>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('prediction-form');
        const button = document.getElementById('prediction-button');

        form.addEventListener('submit', function() {
            // This runs before form submission completes
            button.disabled = true;
            button.innerHTML = '<span class="loading loading-dots loading-md"></span>';
        });
    });
</script>
