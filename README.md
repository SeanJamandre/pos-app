# POS System - CodeIgniter 4 Laboratory Activity

This project contains the complete four-page static-data POS website required by IT0049.

## Pages

- `/` - Landing page
- `/about` - About page
- `/customers` - Customer Accounts listing
- `/users` - User Accounts listing

## Installation

1. Install CodeIgniter 4 using Composer:

   ```powershell
   composer create-project codeigniter4/appstarter pos-system
   ```

2. Copy the files from this package into the generated `pos-system` folder, replacing files when asked.
3. Copy `.env.example` to `.env`.
4. Run the application:

   ```powershell
   php spark serve
   ```

5. Open `http://localhost:8080`.

No database is used in this activity. The customer and user records are temporary PHP arrays inside the controllers.

## GitHub submission

Upload the project files to a GitHub repository. Do not upload the `vendor` folder if your instructor does not require it. Include this README and the `database/README.md` note.

