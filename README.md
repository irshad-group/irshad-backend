# Irshad-Backend

## Installation
### Requirements
- PHP >= 8.0
- NodeJS LTS: 16.17.0 (includes npm 8.18.0)

### Installation
- Clone the repository to your local machine
- Run `composer install`
- Run `npm install`
- Run `cp .env.example .env` to create variables file
- Run `php artisan generate` to generate encryption key
- Create database then add it's name in the `.env` file in [DB_DATABASE]
- Run `php artisan migrate`
- Run `php artisan serve`
- Run `npm run dev`


## Testing
### Generating data
- In your terminal run `php artisan tinker`
- Enter Model name like `$data = new App\Models\[Ministries]`
- Decide how many records you need for testing by `$data->factory()->count([10])->create()`


