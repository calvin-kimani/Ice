## Ice Documentation
Ice is a web application designed for cybersecurity documentation. It leverages the power of Laravel and Tailwind CSS to create an intuitive and visually appealing platform for managing security-related content.

## To Do
    Documentation Management: Easily create, edit, and organize documentation related to cybersecurity topics. Whether it’s threat analysis, best practices, or incident response procedures, Ice has you covered.

    Tagging and Categorization: Tag your documentation with relevant keywords and organize them into categories. This makes it simple to find specific content when needed.

    Responsive Design: Ice is optimized for various devices, ensuring a seamless experience for users on desktops, tablets, and mobile phones.

## Installation

Follow these steps to set up Ice on your local development environment:

1. Clone the Repository:

```bash
    git clone https://github.com/calvin-kimani/Ice.git
    cd ice
```

2. Install Dependencies:
```bash
    composer install
    npm install
```

3. Configure Environment Variables:
        Rename .env.example to .env.
        Set up your database connection details in the .env file.

4. Generate Application Key:

```bash
    php artisan key:generate
```

5. Compile Assets:

```bash
    npm run dev
```

6. Run Migrations:

```bash
    php artisan migrate
```

7. Start the Development Server:

```bash
    php artisan serve
```

Access Ice in Your Browser: Open your browser and navigate to http://localhost:8000.

## Contributing

We welcome contributions! If you’d like to improve Ice, feel free to submit pull requests. Please follow the Laravel contribution guide and adhere to the Code of Conduct.

## Security

If you discover any security vulnerabilities, please report them to our team at calvinkimani475@gmail.com. We take security seriously and appreciate your help in keeping Ice safe.