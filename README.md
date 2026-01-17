# Neptune
## About
This is work in progress remake of one of my university projects which was making a version of e-learning platform Moodle via PHP.
Project was started few days ago and aims to expand and remake said project via use of Laravel framework.
Goal of the project is to make more robust version of university project with things like proper use authorization, better design, etc.

Project will be deployed with Laravel Forge when it is ready to be shown.

Below is a list of planned features and bonus ones once project gets to production stage:

## Goals
### Working features
- [x] Basic page layout and some UI (It works)
- [x] MySQL database running with dummy factory data
- [x] Some middleware (mainly rendering elements specific to guest user)

### Main features
- [ ] Mutliple users modes (Guest, Student, Teacher, Admin)
- [ ] Functional system for adding courses to platform for teachers
- [ ] System where students can apply for said courses
- [ ] Allow teachers add modules for said course
- [ ] Add resources and assignments sections for each module
- [ ] Allow guest to visit website and view courses provided (already in work)
- [ ] Students choosing and enrolling for classes
- [ ] Assessment system to track student course progress

### Bonuses
- [ ] Mailing via Amazon SES for account verification / password resetting
- [ ] Optimizing website with caching using Redis
- [ ] Course search via Typesense
- [ ] Maybe some API stuff
