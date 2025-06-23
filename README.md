# MyPertamina Sentiment Analysis

MyPertamina Sentiment Analysis is a web application that helps users analyze the sentiment of text data, particularly reviews from the MyPertamina mobile app. Built with Laravel and AI/ML technologies, it provides an intuitive interface for sentiment prediction.

## Project Origin

This web application serves as a user-friendly interface for the [original sentiment analysis model](https://github.com/Silvikusuma04/Analisis-Sentimen-Mypertamina) by [Silvikusuma04](https://github.com/Silvikusuma04/). The model was trained on 20,000+ reviews scraped from the MyPertamina app on Google Play Store.

## Features

- **AI-Powered Sentiment Analysis:** Classify text as positive, negative, or neutral with high accuracy
- **Bahasa Indonesia Support:** Specialized in analyzing Indonesian language text
- **User History:** Track all your previous sentiment analyses
- **User Authentication:** Secure login and registration system with email verification
- **Mobile Responsive:** Works seamlessly across devices of all sizes

## Technology Stack

- **Backend:** PHP with Laravel framework
- **Frontend:** Blade templates with JavaScript
- **Machine Learning:** LSTM neural network model with 92% accuracy
- **Package Management:** Composer (PHP) and NPM (JavaScript)
- **Database:** MySQL/PostgreSQL (configure as needed)
- **Styling:** Tailwind and DaisyUI with responsive design principles
- **Deployment:** Google Cloud Run with GitHub Actions for CI/CD
- **ML API:** [Sentiment Analysis API](https://sentimen-analisis-pertamina-325126223708.us-central1.run.app) running on Google Cloud Run

## Installation

### Prerequisites

- PHP 8.1+
- Composer
- Node.js and NPM
- MySQL or PostgreSQL database

### Setup Steps
1. **Clone the Repository:**

   ```bash
   git clone https://github.com/Reishandy/Laravel-Sentiment-Pertamina.git
   cd Laravel-Sentiment-Pertamina
   ```

2. **Install PHP Dependencies:**

   ```bash
    composer install
    ```

3. **Install JavaScript Dependencies:**

   ```bash
   npm install
   ```
4. **Configure Environment:**

   Copy the `.env.example` file to `.env` and update the database connection settings:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Run Migrations:**

   ```bash
    php artisan migrate
    ```

6. **Compile Assets:**

   ```bash
   npm run dev
   ```

7. **Start the Development Server:**

   ```bash
    php artisan serve
    ```

8. **Access the Application:**
   Open your browser and go to `http://localhost:8000` to see the kanban board in action.

## Usage
1. Register a new account or log in with existing credentials
2. Go to the dashboard and enter text in the input field
3. Click "Predict Sentiment" to analyze the text
4. View the prediction result (positive, negative, or neutral)
5. Track your analysis history in the History section

## Development
For production builds, use the following command to compile assets:

```bash
npm run build
```

> **Note:** Make sure to set the APP_DEBUG to `false` in the `.env` file for production environments.

## ML Model
The sentiment analysis model was trained on 20,000+ reviews from the MyPertamina app. Three different approaches were tested:


| Model | Feature Extraction | Data Split | Training Accuracy | Testing Accuracy |
| ----- | ------------------ | ---------- | ----------------- | ---------------- |
| ANN   | TF-IDF             | 80:20      | 97%               | 89%              |
| SVM   | TF-IDF             | 70:30      | 99%               | 88%              |
| LSTM  | Embedding          | 90:10      | 97%               | 92%              |


The LSTM model was selected for deployment due to its superior testing accuracy.


## Contributing

Contributions are welcome! If you have ideas for new features or improvements, please fork the repository and create a pull request.

## 📄 License

This project is licensed under the AGPL-3.0 License - see the [LICENSE](LICENSE) file for details.

## 🙏 Credits

Created by [Reishandy](https://github.com/Reishandy)
