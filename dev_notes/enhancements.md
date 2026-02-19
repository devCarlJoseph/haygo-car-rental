# Developer Notes & Enhancements

This file tracks development notes, future enhancements, and architectural decisions for the HayGo Car Rental project.

## Planned Enhancements
- [ ] Implement a full MVC framework structure (future).
- [ ] Add unit tests for Models and Controllers.
- [ ] Improve error handling and logging.
- [ ] Add input validation layer.

## Cleanup Done (February 19, 2026)
- Removed `blog_test.php` because it was a legacy standalone test page and referenced missing `connection.php`.
- Removed `actions/update_profile.php` because it was incomplete/dead code and not a working endpoint.

## Manual Tasks You Should Do Next
1. Fix admin settings form endpoint:
   - File: `admin/settings.php`
   - Current form action is `update_profile.php`, but that file does not exist in `admin/`.
   - Update the form action to a real endpoint you want to keep, for example `../actions/update_profile.php` after you implement it.

2. Implement profile update endpoint before using the settings page:
   - Add logic for changing admin username and password.
   - Validate password confirmation correctly (`!=` should fail; currently old code had reversed logic).
   - Hash new password with `password_hash`.
   - Require active session and current admin identity before update.

3. Verify these key user flows manually in browser:
   - Admin login/logout
   - Add/update/delete vehicle
   - Create booking and change booking status
   - Send/delete contact messages
   - Add blog entry with image upload

4. Check upload folder permissions:
   - Ensure `uploads/vehicles`, `uploads/blogs`, and `uploads/admin` are writable by PHP.
   - On XAMPP, verify Apache/PHP has write permission to these directories.

5. Confirm database schema matches code:
   - Database name: `haygo`
   - Required tables: `haygo_admins`, `vehicles`, `bookings`, `customers`, `messages`, `blog`
   - If any table names differ in old code, align them now before more refactors.

6. Add a pre-change safety routine for future restructuring:
   - Create a full DB backup before each major refactor.
   - Commit code after each stable module change (auth, vehicle, booking, etc.).
   - Run syntax checks (`php -l`) on changed files before pushing.

## Architectural Decisions
- **Database**: Singleton pattern used for database connection to ensure a single instance.
- **Models**: Active Record style models for easier data manipulation.
- **Config**: Configuration files separated from logic.

## Current Refactoring Status
- Moving from procedural PHP to OOP.
- Introducing `app/` directory for core logic.
