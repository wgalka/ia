# How create laravel project on github

## Step 1: Create github account

1. Go to [https://github.com](https://github.com)
2. Click **Sign up**
3. Fill in:
   - Username
   - Email
   - Password
4. Verify your account and complete registration

## Step 2
1. Go to [https://github.com/laravel/laravel](https://github.com/laravel/laravel)
2. Click **Fork** > **Create a new fork**
![alt text](image-6.png)
3. Provide **Repository name** – e.g., `ridesharing-app-ia2025`
![alt text](image-5.png)
4. Click **Create fork**


## Step 3: Open the Repository in Codespaces
1. On your repository page click `<> Code`
2. Click **Create codespace on main** ![alt text](image-3.png)

## Step 4: Create empty laravel project

1. In terminal run `composer install` to install php dependencies
![alt text](image-7.png)
2. Create `.env` file from `.env.example` (copy .env.example and rename it to .env)
![alt text](image-8.png)
3. Create database `php artisan migrate` (.env by default use sqlite. If you want to use another database change .env file first)
![alt text](image-9.png)
4. Generate APP_KEY `php artisan key:generate:
![alt text](image-10.png)
5. Generate public storage link:
![alt text](image-11.png)
4. Change `.env` settings:
    - APP_NAME, 
    - APP_URL, (to get app url go to step X)
    - Other settings (optional)
    ![alt text](image-12.png)

## Step 5: Run application

1. Run command `php artisan serve --host=0.0.0.0 --port=8000`
![alt text](image-13.png)


## Step 6: After modifying project apply changes to the repository

1. **Check for changes**:
   ```bash
   git status
   ```
2. Stage changes:
    - To add all changes:
    ```
    git add .
    ```
    - To add specific files:
    ```
    git add filename1 filename2
    ```
3. Commit changes:
    ```
    git commit -m "Describe your changes"
    ```
4. Push changes to GitHub:
    ```
    git push origin main
    ```
    or `git push`
 


