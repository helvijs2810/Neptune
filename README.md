# Neptune
## About
This is work in progress remake of one of my university projects which was making a version of e-learning platform Moodle via PHP.
Goal of the project is to make more robust version of university project with things like proper use authorization, better design, etc.

Note: Project is being restructured and scaled down due to amount of feature creep encountered.

Below is a list of planned features and bonus ones once project gets to production stage:

## Goals
### Working features
- [x] Basic page layout and some UI (It works)
- [x] MySQL database running with dummy factory data
- [x] Some middleware (mainly rendering elements specific to guest user)
- [x] Close to full working AWS S3 setup for data storage

### Main features
- [ ] Mutliple users modes (Guest, Student, Teacher, Admin)
- [ ] Functional system for adding courses to platform for teachers
- [ ] System where students can apply for said courses
- [ ] Allow teachers add modules for said course
- [ ] Add resources and assignments sections for each module
- [x] Allow guest to visit website and view courses provided 
- [ ] Assessment system to track student course progress

### Bonuses
- [ ] Mailing via Amazon SES for account verification / password resetting
- [ ] Optimizing website with caching using Redis
- [ ] Course search via Typesense
- [ ] Maybe some API stuff
