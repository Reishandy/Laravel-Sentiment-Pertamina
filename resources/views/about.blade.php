<x-layout.app>
    <x-navbar/>

    <x-header title="About Pertamina Sentiment Analysis"
              description="Learn more about the Pertamina Sentiment Analysis app, the team behind it, and how to use it."/>

    {{-- Section 1: Team Description --}}
    <x-card>
        <div class="mb-6">
            <h1 class="text-2xl font-medium text-base-content">Meet Team 4 Serangkai</h1>
            <p class="text-base-content/70 mt-2">A dedicated team of four students from Universitas PGRI Wiranegara, Indonesia.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="flex flex-col items-center p-4 bg-base-100 rounded-lg shadow-sm">
                <div class="avatar mb-3">
                    <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                        <img src="https://ui-avatars.com/api/?name=Muhammad+Akbar+Reishandy&background=570df8&color=ffffff" alt="Muhammad Akbar Reishandy" />
                    </div>
                </div>
                <h3 class="font-medium text-lg text-center">Muhammad Akbar Reishandy</h3>
                <p class="text-sm text-base-content/70 text-center mt-1">Full-Stack Developer</p>
            </div>

            <div class="flex flex-col items-center p-4 bg-base-100 rounded-lg shadow-sm">
                <div class="avatar mb-3">
                    <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                        <img src="https://ui-avatars.com/api/?name=Putri+Indah+Sari&background=570df8&color=ffffff" alt="Putri Indah Sari" />
                    </div>
                </div>
                <h3 class="font-medium text-lg text-center">Putri Indah Sari</h3>
                <p class="text-sm text-base-content/70 text-center mt-1">Data Analyst</p>
            </div>

            <div class="flex flex-col items-center p-4 bg-base-100 rounded-lg shadow-sm">
                <div class="avatar mb-3">
                    <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                        <img src="https://ui-avatars.com/api/?name=Silvi+Kusuma+Wardhani+Gunawan&background=570df8&color=ffffff" alt="Silvi Kusuma Wardhani Gunawan" />
                    </div>
                </div>
                <h3 class="font-medium text-lg text-center">Silvi Kusuma Wardhani Gunawan</h3>
                <p class="text-sm text-base-content/70 text-center mt-1">ML Engineer</p>
            </div>

            <div class="flex flex-col items-center p-4 bg-base-100 rounded-lg shadow-sm">
                <div class="avatar mb-3">
                    <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                        <img src="https://ui-avatars.com/api/?name=Sinta+Bethari+Ayu+Putri&background=570df8&color=ffffff" alt="Sinta Bethari Ayu Putri" />
                    </div>
                </div>
                <h3 class="font-medium text-lg text-center">Sinta Bethari Ayu Putri</h3>
                <p class="text-sm text-base-content/70 text-center mt-1">QA and Report</p>
            </div>
        </div>
    </x-card>

    {{-- Section 2: AI Model Description --}}
    <x-card>
        <div class="mb-6">
            <h1 class="text-2xl font-medium text-base-content">About The AI Model</h1>
            <p class="text-base-content/70 mt-2">Sentiment Analysis on MyPertamina App Reviews</p>
        </div>

        <div class="space-y-6">
            <div class="bg-base-100 p-5 rounded-lg shadow-sm">
                <h2 class="text-xl font-medium mb-2 flex items-center">
                    <i class="fas fa-project-diagram mr-2 text-primary"></i>Project Overview
                </h2>
                <ul class="list-disc pl-6 space-y-1">
                    <li><span class="font-medium">Domain:</span> Customer feedback analysis</li>
                    <li><span class="font-medium">Objective:</span> Classify user reviews into Positive, Neutral, and Negative sentiments</li>
                    <li><span class="font-medium">Total Dataset:</span> 20,000 reviews scraped from Google Play Store</li>
                    <li><span class="font-medium">Language:</span> Bahasa Indonesia</li>
                </ul>
            </div>

            <div class="bg-base-100 p-5 rounded-lg shadow-sm">
                <h2 class="text-xl font-medium mb-2 flex items-center">
                    <i class="fas fa-database mr-2 text-primary"></i>Data Processing
                </h2>
                <p class="mb-2">Reviews were scraped from the Google Play Store and processed using:</p>
                <ul class="list-disc pl-6 space-y-1">
                    <li><span class="font-medium">Text Cleaning:</span> Lowercasing, punctuation removal, stopword filtering</li>
                    <li><span class="font-medium">Feature Extraction:</span> TF-IDF and Embedding techniques</li>
                    <li><span class="font-medium">Sentiment Labeling:</span> Positive, Neutral, and Negative categories</li>
                </ul>
            </div>

            <div class="bg-base-100 p-5 rounded-lg shadow-sm">
                <h2 class="text-xl font-medium mb-2 flex items-center">
                    <i class="fas fa-brain mr-2 text-primary"></i>Models & Performance
                </h2>
                <div class="overflow-x-auto">
                    <table class="table table-zebra w-full">
                        <thead>
                        <tr>
                            <th>Model</th>
                            <th>Feature Extraction</th>
                            <th>Data Split</th>
                            <th>Training Accuracy</th>
                            <th>Testing Accuracy</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>ANN</td>
                            <td>TF-IDF</td>
                            <td>80:20</td>
                            <td>97%</td>
                            <td>89%</td>
                        </tr>
                        <tr>
                            <td>SVM</td>
                            <td>TF-IDF</td>
                            <td>70:30</td>
                            <td>99%</td>
                            <td>88%</td>
                        </tr>
                        <tr>
                            <td>LSTM</td>
                            <td>Embedding</td>
                            <td>90:10</td>
                            <td>97%</td>
                            <td>92%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bg-base-100 p-5 rounded-lg shadow-sm">
                <h2 class="text-xl font-medium mb-2 flex items-center">
                    <i class="fas fa-cloud mr-2 text-primary"></i>Deployment
                </h2>
                <p>The model is deployed using <span class="font-medium">Google Cloud Run</span> with CI/CD automation via <span class="font-medium">GitHub Actions</span>.</p>
                <div class="mt-3">
                    <a href="https://sentimen-analisis-pertamina-325126223708.us-central1.run.app" class="link link-primary flex items-center" target="_blank">
                        <i class="fas fa-external-link-alt mr-1"></i> Access the API
                    </a>
                </div>
            </div>
        </div>
    </x-card>

    {{-- Section 3: How to Use --}}
    <x-card>
        <div class="mb-6">
            <h1 class="text-2xl font-medium text-base-content">How to Use</h1>
            <p class="text-base-content/70 mt-2">Follow these steps to analyze sentiment:</p>
        </div>

        <div class="bg-base-100 p-5 rounded-lg shadow-sm">
            <ol class="list-decimal pl-6 space-y-3">
                <li class="flex items-start">
                    <span class="badge badge-primary mr-8">1</span>
                    <div>
                        <p class="font-medium mb-1">Enter your text</p>
                        <p class="text-sm text-base-content/70">Type or paste the text you want to analyze in the input field on the dashboard.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="badge badge-primary mr-8">2</span>
                    <div>
                        <p class="font-medium mb-1">Click "Predict Sentiment"</p>
                        <p class="text-sm text-base-content/70">Submit the form to process your text through our AI model.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="badge badge-primary mr-8">3</span>
                    <div>
                        <p class="font-medium mb-1">View results</p>
                        <p class="text-sm text-base-content/70">The sentiment prediction will appear below the form, showing whether the text is positive, neutral, or negative.</p>
                    </div>
                </li>
            </ol>
        </div>
    </x-card>
</x-layout.app>
