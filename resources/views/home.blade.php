<x-layout.app>
    {{-- Hero Section --}}
    <div class="hero min-h-[70vh] bg-base-200 rounded-lg">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">MyPertamina Sentiment Analysis</h1>
                <p class="py-6">Analyze user feedback with our advanced AI model trained on 20,000+ reviews. Understand customer sentiments in seconds.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-3">
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn btn-primary">Go to Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Get Started</a>
                        <a href="{{ route('register') }}" class="btn btn-outline">Create Account</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    {{-- Stats Section --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:mt-10">
        <div class="stats shadow">
            <div class="stat">
                <div class="stat-figure text-primary">
                    <i class="fas fa-database text-3xl"></i>
                </div>
                <div class="stat-title">Training Dataset</div>
                <div class="stat-value">20,000+</div>
                <div class="stat-desc">MyPertamina app reviews</div>
            </div>
        </div>

        <div class="stats shadow">
            <div class="stat">
                <div class="stat-figure text-primary">
                    <i class="fas fa-brain text-3xl"></i>
                </div>
                <div class="stat-title">Best Model Accuracy</div>
                <div class="stat-value">92%</div>
                <div class="stat-desc">Using LSTM architecture</div>
            </div>
        </div>

        <div class="stats shadow">
            <div class="stat">
                <div class="stat-figure text-primary">
                    <i class="fas fa-bolt text-3xl"></i>
                </div>
                <div class="stat-title">Processing Speed</div>
                <div class="stat-value">< 1 sec</div>
                <div class="stat-desc">Per text analysis</div>
            </div>
        </div>
    </div>

    {{-- Features Section --}}
    <x-card>
        <div class="mb-6">
            <h2 class="text-3xl font-bold text-base-content">Key Features</h2>
            <p class="text-base-content/70 mt-2">Our sentiment analysis tool offers powerful capabilities</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-base-100 p-6 rounded-lg shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 mr-4 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fas fa-comments text-primary text-xl">BI</i>
                    </div>
                    <h3 class="text-xl font-medium">Bahasa Indonesia Support</h3>
                </div>
                <p class="text-base-content/70">Specialized in analyzing Indonesian text with high accuracy, trained on real customer feedback.</p>
            </div>

            <div class="bg-base-100 p-6 rounded-lg shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 mr-4 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fas fa-chart-line text-primary text-xl">DA</i>
                    </div>
                    <h3 class="text-xl font-medium">Detailed Analytics</h3>
                </div>
                <p class="text-base-content/70">Track your analysis history and identify patterns in customer sentiment over time.</p>
            </div>

            <div class="bg-base-100 p-6 rounded-lg shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 mr-4 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fas fa-cloud text-primary text-xl">CD</i>
                    </div>
                    <h3 class="text-xl font-medium">Cloud Deployment</h3>
                </div>
                <p class="text-base-content/70">Reliable cloud infrastructure ensures the service is always available when you need it.</p>
            </div>
        </div>
    </x-card>

    {{-- How It Works Section --}}
    <x-card>
        <div class="mb-6">
            <h2 class="text-3xl font-bold text-base-content">How It Works</h2>
            <p class="text-base-content/70 mt-2">Analyze sentiment in three simple steps</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="flex flex-col items-center text-center">
                <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center text-white text-2xl font-bold mb-4">1</div>
                <h3 class="text-xl font-medium mb-2">Input Text</h3>
                <p class="text-base-content/70">Enter the text you want to analyze - customer reviews, feedback, or comments.</p>
            </div>

            <div class="flex flex-col items-center text-center">
                <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center text-white text-2xl font-bold mb-4">2</div>
                <h3 class="text-xl font-medium mb-2">AI Processing</h3>
                <p class="text-base-content/70">Our LSTM neural network analyzes the text and determines the sentiment.</p>
            </div>

            <div class="flex flex-col items-center text-center">
                <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center text-white text-2xl font-bold mb-4">3</div>
                <h3 class="text-xl font-medium mb-2">View Results</h3>
                <p class="text-base-content/70">Get instant feedback on whether the sentiment is positive, neutral, or negative.</p>
            </div>
        </div>
    </x-card>

    {{-- CTA Section --}}
    <div class="flex flex-col items-center justify-center bg-base-200 p-10 rounded-lg my-10 text-center">
        <h2 class="text-2xl font-bold mb-4">Ready to analyze customer sentiment?</h2>
        <p class="mb-6 max-w-md">Get started now with our easy-to-use sentiment analysis tool designed for MyPertamina app reviews.</p>
        @auth
            <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg">Go to Dashboard</a>
        @else
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Create Account</a>
        @endauth
    </div>
</x-layout.app>
